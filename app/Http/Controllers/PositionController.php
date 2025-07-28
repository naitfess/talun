<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{
    public function index(Request $request)
    {
        $query = Position::query();
        if (request()->has('search') && !empty(request()->search)) {
            $search = request()->search;
            $query->where('name', 'like', "%$search%");
        }
        $data['page_title'] = 'Posisi';
        $data['positions'] = $query->paginate(5)->appends(['search' => $request->search]);
        return view('admin.positions.index', $data);
    }
    
    public function show($id)
    {
        $data['position'] = Position::findOrFail($id);
        return $data['position'];
    }
    
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.posisi.index')
                ->with([
                    'status' => 'danger',
                    'message' => $validator->errors()->first(),
                    'title' => 'Gagal',
                ]);
        }
        
        $data = [
            'name' => $request->name,
            'created_by' => Auth::id(),
        ];
        
        Position::create($data);
        return redirect()->route('admin.posisi.index')->with([
            'status' => 'success',
            'message' => 'Posisi Berhasil Ditambahkan!',
            'title' => 'Berhasil',
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.posisi.index')
                ->with([
                    'status' => 'danger',
                    'message' => $validator->errors()->first(),
                    'title' => 'Gagal',
                ]);
        }
        
        $data = [
            'name' => $request->name,
            'edited_by' => Auth::id(),
        ];

        $position->update($data);

        return redirect()->route('admin.posisi.index')->with([
            'status' => 'success',
            'message' => 'Posisi Berhasil Diupdate!',
            'title' => 'Berhasil',
        ]);
    }
    
    public function destroy($id)
    {
        $position = Position::findOrFail($id);
        if ($position->villageOfficials()->count() > 0) {
            return redirect()->route('admin.posisi.index')->with([
                'status' => 'danger',
                'message' => 'Posisi tidak dapat dihapus karena memiliki pengguna terkait.',
                'title' => 'Gagal',
            ]);
        }
        $position->deleted_by = Auth::id();
        $position->save();
        $position->delete();

        return redirect()->route('admin.posisi.index')->with([
            'status' => 'success',
            'message' => 'Posisi Berhasil Dihapus!',
            'title' => 'Berhasil',
        ]);
    }
}
