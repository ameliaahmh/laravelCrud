<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     if ($request->has('cari')) {
            $datasiswa = Siswa::where('nama_siswa', 'LIKE', '%'.$request->cari.'%')->get();
        }else {
            $datasiswa = Siswa::all();
        }
     return view('siswa.index', ['datasiswa' => $datasiswa]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|max:9',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|max:13',
            'asal_sekolah' => 'required'
        ]);
        //insert table user
        $user = new \App\User;
        $user->role = 'siswa';
        $user->pengenal = $request->id;
        $user->password =bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['user_id'=> $user->id]);
        $siswa = \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $siswa =Siswa::find($id);
        $mataPelajaran =Mapel::all();

        //menyiapkan data untuk chart
        $kategori = [];
        $data =[];

        foreach($mataPelajaran as $mp) {
            if($siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()) {
            $kategori[] = $mp->nama;
            $data[] = $siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()->pivot->nilai;}
        }

        // dd($data);

        return view('siswa.detail',['siswa'=>$siswa, 'mataPelajaran'=>$mataPelajaran, 'kategori'=>$kategori, 'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit_siswa', ['siswa'=> $siswa]);
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
        $siswa = Siswa::find($id)->update(
            [
                'id' => $request->id,
                'nama_siswa' => $request->nama_siswa,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'asal_sekolah' => $request->asal_sekolah
            ]
        );
        return redirect('/siswa')->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Siswa::find($id)->delete();
         return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
    }
}
