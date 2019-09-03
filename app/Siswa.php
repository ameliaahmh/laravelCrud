<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['id', 'nama_siswa', 'jenis_kelamin', 'agama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telepon', 'asal_sekolah'];


    public function mapel()
    {
    	return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
    }
}
