<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Toastr;
use Auth;
use PDF;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit= Auth::user();

        return view ('profile.index', compact ('edit'));
    }

    public function indexAdmin()
    {
        $user = user::all();
        
        return view ('user.admin', compact('user'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view ('profile.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jalan=[
        'nik' => $request->nik,
        'name' => $request->name,
        'tlp' => $request->tlp,
        'email' => $request->email,
        'foto' => $request->foto,
        

    ];
    User::create($jalan);
    return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Auth::user();
        return view('profile.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // dd($request->foto);
        // die;
        if($request->foto > 0)
        {    
            $foto = $request->foto;
            $v_foto = time().rand(100,999)."-".$foto->getClientOriginalName();
        }

        // dd($v_foto);
        // die;
        
        $where = User::find($id);
        // dd($request->alamat);

        $data = [
            'nik'=> $request->nik,
            'name'=> $request->name,
            'tlp'=> $request->tlp,
            'email'=> $request->email,
            'alamat' => $request->alamat,

        ];

        

        if($request->foto > 0 && isset($v_foto)){
            $where->foto = $v_foto;
        }

        if(isset($v_foto) > 0){
            $foto->move(public_path().'/foto',$v_foto);
        }


        $where->update($data);
        
        return redirect('/profile');
    }

    public function delete($id)
    {
        $where = User::find($id);

        $where->delete();

        return redirect()->route('user.data');
    }

    public function destroyAdmin($id)
    {
        $user = User::find($id)->delete();
        return redirect ('/dataUser');

    }
    public function cetak_pdf()
    {
    	$user = User::all();
    	$pdf = PDF::loadview('user.pdf',compact('user'));
    	return $pdf->stream();
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    
		$user = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();
 
        return view ('user.admin', compact('user'));
 
	}
 
}
