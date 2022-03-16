<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Anggota;


class AnggotaController extends Controller


{


/**


     * Display a listing of the resource.


     *


     * @return \Illuminate\Http\Response


     */


public function index()


{


$anggota = Anggota::all();


return view('anggota.index', compact('anggota'));


}


/**


     * Show the form for creating a new resource.


     *


     * @return \Illuminate\Http\Response


     */


public function create()


{


return view('anggota.create');


}


/**


     * Store a newly created resource in storage.


     *


     * @param  \Illuminate\Http\Request  $request


     * @return \Illuminate\Http\Response


     */


public function store(Request $request)


{


Anggota::create($request->all());


return redirect('anggota')->with('msg','Data Berhasil di Simpan');


}


/**


     * Display the specified resource.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function show($id)


{


//


}


/**


     * Show the form for editing the specified resource.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function edit($id)


{


     return view('anggota.index', compact('anggota'));


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


     $request->validate([
          'nama'=>'required',
          'alamat'=> 'required',
          'jenis_kelamin' => 'required',
          'email'=> 'required',
          'no_telp' => 'required'
      ]);
      $anggota = Anggota::find($id);
      $anggota->nama = $request->get('nama');
      $anggota->alamat = $request->get('alamat');
      $anggota->jenis_kelamin = $request->get('jenis_kelamin');
      $anggota->email = $request->get('email');
      $anggota->no_telp = $request->get('no_telp');
      $anggota->update();
      return redirect('/student')->with('success', 'Student updated successfully');


}


/**


     * Remove the specified resource from storage.


     *


     * @param  int  $id


     * @return \Illuminate\Http\Response


     */


public function destroy($id)


{


//


}


}