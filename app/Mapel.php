<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['id','nama','semester', 'guru_id'];

    public function siswa()
    {
    	return $this->belongsToMany(Siswa::class)->withPivot(['nilai']); //merelasikan model mapel & siswa
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
