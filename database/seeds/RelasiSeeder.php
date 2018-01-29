<?php

use Illuminate\Database\Seeder;
use App\siswa;
use App\wali;
use App\guru;
use App\kelas;
use App\mapel;
use App\mapel_siswa;
use App\field_siswa;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->delete();
		DB::table('wali')->delete();
		DB::table('guru')->delete();
		DB::table('kelas')->delete();
		DB::table('mapel')->delete();
		DB::table('mapel_siswa')->delete();

		$c=mapel::create(array('nama_mapel' => 'matematika','kkm' => '89'));
		$d=mapel::create(array('nama_mapel' => 'Ipa','kkm' => '89'));
		
		$guru = guru::create(array(
			'nama' => 'Iik',
			'nik' => '10191019',
			'alamat' => 'Jalan West Java',
			'mapel' => 'Matematika'
		));

		$kelas = kelas::create(array(
				'nama_kelas' => 'XI RPL 1'
		));

		$a = siswa::create(array(
			'nama' => 'Ahmad Fauzi Sawandhani',
			'nis'  => '123456789',
			'guru_id' => $guru->id,
			'kelas_id' => $kelas->id
		));

		wali::create(array(
			'nama'  => 'Iwan Sutanto',
			'alamat' => 'Sompok',
			'siswa_id' => $a->id
		));

		$a->mapel()->attach($c->id);
    }
}
