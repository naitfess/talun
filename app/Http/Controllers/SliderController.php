<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Slider';
        $data['sliders'] = Slider::query()
        ->paginate(3);
        return view('admin.sliders.index', $data);
    }
    
    public function create()
    {
        $data['page_title'] = 'Slider';
        return view('admin.sliders.create', $data);
    }
    
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            $image = Storage::disk('public_upload')->put('slider', $request->file('image'));
        }
        
        $data = [
            'image' => $image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'created_by' => Auth::id(),
        ];
        
        Slider::create($data);
        
        return redirect()->route('admin.slider.index')->with([
            'message' => 'Slider berhasil ditambahkan!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function edit($id)
    {
        $data['page_title'] = 'Slider';
        $data['slider'] = Slider::findOrFail($id);
        return view('admin.sliders.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        
        $rules = [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            Storage::disk('public_upload')->delete($slider->image);
            $image = Storage::disk('public_upload')->put('slider', $request->file('image'));
        }
        
        $data = [
            'image' => $image ?? $slider->image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'edited_by' => Auth::id(),
        ];
        $slider->update($data);
        
        return redirect()->route('admin.slider.index')->with([
            'message' => 'Slider berhasil diperbarui!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
    
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        Storage::disk('public_upload')->delete($slider->image);
        $slider->deleted_by = Auth::id();
        $slider->save();
        $slider->delete();
        
        return redirect()->route('admin.slider.index')->with([
            'message' => 'Slider berhasil dihapus!',
            'status' => 'success',
            'title' => 'Berhasil',
        ]);
    }
}
