<?php

namespace App\Http\Controllers;

use App\perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perjalanan = perjalanan::where('id_user', Auth::user()->id)->get();
        return view('perjalanan.index', compact('perjalanan'));
    }
// $perjalanan = perjalanan::where('id_user', Auth::user()->id)->simplePaginate(3);
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjalanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
              
            'password' => 'nullable|required_with:password_confirmation|string|confirmed',
            
        ]);
    $perjalanan =[
        'id_user'=> Auth::user()->id,
		'tgl_perjalanan' => $request->tgl_perjalanan,
		'jam' => $request->jam,
		'lokasi' => $request->lokasi,
        'suhu_tubuh' => $request->suhu_tubuh
       
	];
        
	    // alihkan halaman ke halaman perjalanan
        perjalanan::create($perjalanan);
    	return redirect('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(perjalanan $perjalanan)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(perjalanan $id_user)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $perjalanan = perjalanan::destroy($id);
        return redirect('/perjalanan');
    }
}
