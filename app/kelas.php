<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table= 'kelas';

    protected $fillable = array('nama_kelas');

	public function siswa() {
		return $this->hasMany('App\siswa', 'kelas_id');
	}
}
