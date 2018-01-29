<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table= 'guru';
    
    protected $fillable = array('nama','nik','alamat','mapel');

	public function siswa() {
		return $this->hasMany('App\siswa', 'guru_id');
	}
}
