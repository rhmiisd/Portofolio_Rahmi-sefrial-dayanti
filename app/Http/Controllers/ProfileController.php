<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();

        return view('admin.profile.index',[
            'profiles' => $profiles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profiles = Profile::all();
        return view('admin.profile.create',[
            'profiles' => $profiles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('nama_lengkap'));
       $request->validate([
        'nama_lengkap' => 'required', 
        'birthday' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'foto' => 'required',
        'keterangan' => 'required',
    ]);

    $image = $request->file('foto');
    $imagePath = $image->storeAs('public/', $image->hashName());

    // dd($request->nmjurusan);
    Profile::create([
        'nama_lengkap' => $request->nama_lengkap,
        'birthday' => $request->birthday,
        'phone' => $request->phone,
        'email' => $request->email,
        'foto' => $image -> hashName(),
        'keterangan' =>  $request->keterangan,
    ]);
    return redirect()->route('admin.profile.index')->with(['success' => 'Profile created successfully!']);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profiles = Profile::where('id', $id)->first();
        return view('admin.profile.show', [
            'profiles' => $profiles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profiles = Profile::all();
        $profiles = Profile::where('id', $id)->first();
        return view('admin.profile.edit', [
            'profiles' => $profiles,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'foto' => 'image',
            'keterangan' => 'required',
        ]);

        $profiles = Profile::find($id);
        $profiles->update($request->all());
    
        return redirect()->route('admin.profile.index')
            ->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profiles = Profile::find($id);

        if ($profiles === null) {
            return Redirect::route('admin.profile.index')->with('error', 'Record not found');
        }
    
        $profiles->delete();
    
        return redirect()->route('admin.profile.index')->with('success', 'Berhasil Dihapus');
    }
    
}
