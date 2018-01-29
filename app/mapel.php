<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
 	protected $table= 'mapel';    

 	protected $fillable= array('nama_mapel','kkm');

 	public function siswa() {
		return $this->belongsToMany('App\siswa', 'mapel_siswa', 'siswa_id', 'mapel_id');
	}
}