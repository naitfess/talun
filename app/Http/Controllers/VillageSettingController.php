<?php

namespace App\Http\Controllers;

use App\Models\VillageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VillageSettingController extends Controller
{
    public function index(){
        $data['villageSetting'] = VillageSetting::first();
        return view('admin.settings.index', $data);
    }

    public function update(Request $request, $id){
        $village_setting = VillageSetting::findOrFail($id);

        $rules = [
            'logo_header' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'logo_footer' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'facebook_url' => 'required|url|max:255',
            'twitter_url' => 'required|url|max:255',
            'instagram_url' => 'required|url|max:255',
            'maps_url' => 'required|url|max:255',
            'copyright' => 'required|string|max:255',
        ];

        $validators = Validator::make($request->all(), $rules);

        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }

        if ($request->hasFile('logo_header')) {
            Storage::disk('public_upload')->delete($village_setting->logo_header);
            $logo_header = Storage::disk('public_upload')->put('setting', $request->file('logo_header'));
        }

        if ($request->hasFile('logo_footer')) {
            Storage::disk('public_upload')->delete($village_setting->logo_footer);
            $logo_footer = Storage::disk('public_upload')->put('setting', $request->file('logo_footer'));
        }

        $data = [
            'logo_header' => $logo_header ?? $village_setting->logo_header,
            'logo_footer' => $logo_footer ?? $village_setting->logo_footer,
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'instagram_url' => $request->instagram_url,
            'copyright' => $request->copyright,
            'edited_by' => Auth::id(),
        ];

        $village_setting->update($data);

        return redirect()->route('admin.informasi-desa.index')->with([
            'status' => 'success',
            'message' => 'Pengaturan desa berhasil diperbarui.',
            'title' => 'Berhasil',
        ]);
    }
}
