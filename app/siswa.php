<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
	protected $table = 'siswa';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nis', 'guru_id','kelas_id');
	
	# Relasi One-to-one nanti disini...
	public function wali() {
		return $this->hasOne('App\wali', 'siswa_id');
	}

	# Relasi One-to-Many nanti disini...
	public function guru() {
		return $this->belongsTo('App\guru', 'guru_id');
	}

	public function kelas() {
		return $this->belongsTo('App\kelas', 'kelas_id');
	}


	# Relasi Many-to-Many nanti disini...

	public function mapel() {
		return $this->belongsToMany('App\mapel', 'mapel_siswa', 'siswa_id', 'mapel_id');
	}

}
