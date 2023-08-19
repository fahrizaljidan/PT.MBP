<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request) {
        // dd($request);
        $regulations = Regulation::all();
        $regulasi = Regulation::whereId(1)->first();
        $countUsers = DB::table('users')->count();
        // dd(empty($regulasi));
        return view('pages.home.index',compact('regulations','regulasi','countUsers'));
    }
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        // Validate the request...
        if(count(Regulation::all()) == 0) {
            Regulation::create([
                'id' => 1,
                'konten' => $request->konten,
            ]);
            return redirect()->intended(route('home'))->with('status','Kebijakan telah ditambahkan.');    
        }
        else {
            $regulasi = Regulation::find(1);
            $regulasi->update([
                'konten' => $request->konten, 
            ]);
            return redirect()->intended(route('home'))->with('status','Kebijakan telah diedit');
        }
 
        
    }
}
