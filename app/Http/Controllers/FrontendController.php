<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Pendidikan;
use App\Models\Pengalamans;
use App\Models\Profile;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $profile = Profile::first();
        $pendidikan = Pendidikan::orderBy('tahun_masuk', 'asc')->get();
        $pengalaman = Pengalamans::get();
        $contact = Contact::first();
        return view('welcome', [
            'profile' => $profile,
            'pendidikan' => $pendidikan,
            'pengalamans' => $pengalaman,
            'contact' => $contact,
        ]);

    }
}
