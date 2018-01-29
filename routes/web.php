<?php
use App\siswa;
use App\wali;
use App\kelas;
use App\mapel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('relasi-1', function() {

		$siswa =siswa::where('nis', '=', '123456789')->first();

		return $siswa->wali->nama;

	});

Route::get('relasi-2', function() {

		$siswa = siswa::where('nis', '=', '123456789')->first();

		return $siswa->guru->nama;
	});

Route::get('relasi-3', function() {

		$siswa = siswa::where('nis', '=', '123456789')->first();

		return $siswa->kelas->nama_kelas;
	});

Route::get('relasi-4', function() {

		$a = siswa::where('nama', '=', 'Ahmad Fauzi Sawandhani')->first();

		foreach ($a->mapel as $temp) 
			echo '<li>' . $temp->nama_mapel . '&nbsp;' .$temp->kkm.'</li>';
	});

Route::get('relasi-5', function() {

	$siswa =siswa::where('nis', '=', '123456789')->first();

	$a = siswa::where('nama', '=', 'Ahmad Fauzi Sawandhani')->first();
		foreach ($a->mapel as $temp) 

			echo 'Nama Siswa : '. $siswa->nama. '<br>'.'Nama Wali : '.$siswa->wali->nama. '<br>'.'Kelas : '.$siswa->kelas->nama_kelas.'<br>'.'Mata Pelajaran Dan KKM : '.$temp->nama_mapel . '&nbsp;' .$temp->kkm;
	});