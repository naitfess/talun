<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('name', 'like', "%$search%");
        }
        $data['page_title'] = 'Users';
        $data['users'] = $query->paginate(10)->appends(['search' => $request->search]);
        return view('admin.users.index', $data);
    }
    
    public function show($id)
    {
        $data['user'] = User::findOrFail($id);
        return $data['user'];
    }
    
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.user.index')
            ->with([
                'status' => 'danger',
                'message' => $validator->errors()->first(),
                'title' => 'Gagal',
            ]);
        }
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        User::create($data);
        return redirect()->route('admin.user.index')->with([
            'status' => 'success',
            'message' => 'User Berhasil Ditambahkan!',
            'title' => 'Berhasil',
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.user.index')
            ->with([
                'status' => 'danger',
                'message' => $validator->errors()->first(),
                'title' => 'Gagal',
            ]);
        }
        
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ];

        $user->update($data);

        return redirect()->route('admin.user.index')->with([
            'status' => 'success',
            'message' => 'User Berhasil Diupdate!',
            'title' => 'Berhasil',
        ]);
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user.index')->with([
            'status' => 'success',
            'message' => 'User Berhasil Dihapus!',
            'title' => 'Berhasil',
        ]);
    }
}
