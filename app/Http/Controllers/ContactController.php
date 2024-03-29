<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contact.index',[
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('admin.contact.create',[
            'contacts' => $contacts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->input('nmjurusan'));
       $request->validate([
        'nama_lengkap' => 'required', 
        'email' => 'required',
        'message' => 'required',
    ]);

     // dd($request->nmjurusan);
     Contact::create([
        'nama_lengkap' => $request->nama_lengkap,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return redirect()->route('admin.contact.index')->with(['success' => 'Contact created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts = Contact::where('id', $id)->first();
        return view('admin.contact.show', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacts = Contact::all();
        $contacts = Contact::where('id', $id)->first();
        return view('admin.contact.edit', [
            'pendidikans' => $contacts,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
    
        $contacts = Contact::find($id);
        $contacts->update($request->all());
    
        return redirect()->route('admin.contact.index')
            ->with('success', 'Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacts = Contact::find($id);

        if ($contacts === null) {
            return Redirect::route('admin.contact.index')->with('error', 'Record not found');
        }
    
        $contacts->delete();
    
        return redirect()->route('admin.contact.index')->with('success', 'Berhasil Dihapus');
    }
}
