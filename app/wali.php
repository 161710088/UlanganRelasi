<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
	protected $table = 'wali';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'alamat', 'siswa_id');

	/*
	 * Relasi One-to-One
	 * =================
	 * Sebaliknya, buat function bernama mahasiswa(), dimana model 'Wali' memiliki relasi One-to-One (belongsTo)
	 * sebagai timbal balik terhadap model 'Mahasiswa'
	 */
	public function siswa() {
		return $this->belongsTo('App\siswa', 'siswa_id');
	}
}
