<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
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
        $data['positions'] = $query->paginate(10)->appends(['search' => $request->search]);
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
            // 'created_by' => auth()->id(),
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
            // 'updated_by' => auth()->id(),
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
        $position->delete();

        return redirect()->route('admin.posisi.index')->with([
            'status' => 'success',
            'message' => 'Posisi Berhasil Dihapus!',
            'title' => 'Berhasil',
        ]);
    }
}
