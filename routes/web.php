<?php

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

// Route::group(['middleware' => 'auth'],function(){
// });

// Route::auth();

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:user'])->group(function () {
// });



Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('login/admin', 'Auth\LoginController@showLoginFormAdmin');
Route::post('login/adminPost', 'Auth\LoginController@loginAdmin');
Route::post('user/logout', 'Auth\LoginController@logout');


Route::get('login/pasien', 'loginPasienController@showLoginPasienForm');
Route::post('login/pasienPost', 'loginPasienController@loginPasien');
Route::post('pasien/logout', 'loginPasienController@logout');


Route::get('register', 'registerPasienController@showRegisterForm');
Route::post('registerPost', 'registerPasienController@registerPost');


Route::middleware(['auth:user'])->group(function () {

	Route::get('home','homeController@index');
	
	Route::get('master/pasien','controllerMaster@pasien');
	Route::post('pasien/simpan','controllerMaster@pasienSimpan');
	Route::post('pasien/simpanDaftar','controllerMaster@pasienSimpanDaftar');
	Route::post('pasien/edit','controllerMaster@pasienEdit');
	Route::get('pasien/delete/{id}','controllerMaster@pasienDelete');
	Route::get('pasien/ambil','controllerMaster@allRecordPasien');
	Route::get('pasien/cekDaftar/{id}','controllerMaster@cekPasienDaftar');
	Route::get('pasien/daftarkanNow/{id}','controllerMaster@daftarkanPasienNow');

	Route::get('master/dokter','controllerMaster@dokter');
	Route::post('dokter/simpan','controllerMaster@dokterSimpan');
	Route::post('dokter/edit','controllerMaster@dokterEdit');
	Route::post('dokter/delete','controllerMaster@dokterDelete');
	Route::get('dokter/ambil','controllerMaster@allRecordDokter');

	Route::get('master/obat','controllerMaster@obat');
	Route::post('obat/simpan','controllerMaster@obatSimpan');
	Route::post('obat/edit','controllerMaster@obatEdit');
	Route::post('obat/delete','controllerMaster@obatDelete');
	Route::get('obat/ambil','controllerMaster@allRecordObat');

	Route::get('master/pegawai','controllerMaster@pegawai');
	Route::post('pegawai/simpan','controllerMaster@pegawaiSimpan');
	Route::post('pegawai/edit','controllerMaster@pegawaiEdit');
	Route::get('pegawai/delete/{id}','controllerMaster@pegawaiDelete');
	Route::get('pegawai/ambil','controllerMaster@allRecordPegawai');

	Route::get('master/jenis_biaya','controllerMaster@jenis_biaya');
	Route::post('jenis_biaya/simpan','controllerMaster@jenis_biayaSimpan');
	Route::post('jenis_biaya/edit','controllerMaster@jenis_biayaEdit');
	Route::get('jenis_biaya/delete/{id}','controllerMaster@jenis_biayaDelete');
	Route::get('jenis_biaya/ambil','controllerMaster@allRecordJenis_biaya');

	Route::get('master/poliklinik','controllerMaster@poliklinik');
	Route::post('poliklinik/simpan','controllerMaster@poliklinikSimpan');
	Route::post('poliklinik/edit','controllerMaster@poliklinikEdit');
	Route::get('poliklinik/delete/{id}','controllerMaster@poliklinikDelete');
	Route::get('poliklinik/ambil','controllerMaster@allRecordPoliklinik');

	Route::get('master/jadwal_praktek','controllerMaster@jadwal_praktek');
	Route::post('jadwal_praktek/simpan','controllerMaster@jadwal_praktekSimpan');
	Route::post('jadwal_praktek/edit','controllerMaster@jadwal_praktekEdit');
	Route::get('jadwal_praktek/delete/{id}','controllerMaster@jadwal_praktekDelete');
	Route::get('jadwal_praktek/ambil','controllerMaster@allRecordjadwal_praktek');

	// TRANSAKSI
	Route::get('pendaftaran/cetaknoUrut/{id}','transaksiController@noUrut_cetak');
	Route::get('transaksi/pendaftaran','transaksiController@pendaftaran');
	Route::post('pendaftaran/simpan','transaksiController@pendaftaran_simpan');

	Route::get('transaksi/pemeriksaan','transaksiController@pemeriksaan');
	Route::post('pemeriksaan/simpan','transaksiController@pemeriksaan_simpan');
	Route::get('ambilDataPendaftar','transaksiController@cekPendaftar');
	Route::get('pemeriksaan/cetak/{id}','transaksiController@cetakPemeriksaan');

	Route::get('transaksi/resep','transaksiController@resep');

	// PENGAMBILAN DATA SATU PER SATU UNTUK KETERANGAN
	Route::get('ambilAlamat_pasien/{id}','transaksiController@ambilAlamatPasien');
	Route::get('ambilTelp_pasien/{id}','transaksiController@ambilTelpPasien');
	Route::get('ambilTglLahir_pasien/{id}','transaksiController@ambilTglLahirPasien');
	Route::get('ambilJk_pasien/{id}','transaksiController@ambilJkPasien');

	Route::get('ambilKeluhan/{id}','transaksiController@ambil_Keluhan');
	Route::get('ambilDiagnosa/{id}','transaksiController@ambil_Diagnosa');
	Route::get('ambilPerawatan/{id}','transaksiController@ambil_Perawatan');
	Route::get('ambilTindakan/{id}','transaksiController@ambil_Tindakan');
	Route::get('ambilBeratBedan/{id}','transaksiController@ambil_BeratBedan');
	Route::get('ambilDiastolik/{id}','transaksiController@ambil_Diastolik');
	Route::get('ambilSistolik/{id}','transaksiController@ambil_Sistolik');
	Route::get('totalBayarPemeriksaan/{id}','transaksiController@ambilTotalBayarPemeriksaan');
	Route::get('totalBayarObat/{id}','transaksiController@ambilTotalBayarObat');
	Route::get('ambilListObat/{id}','transaksiController@ambilResep');
	// END OF PENGAMBILAN

	Route::get('simpanDataResep/{id}','transaksiController@simpanResepUpdate');
	Route::get('ambilDataPemeriksaanALL','transaksiController@ambilDataPemeriksaanALLINONE');

	Route::get('laporan/jadwal','laporanController@laporan_jadwal_praktek');
	Route::get('cetakJadwal','laporanController@jadwal_execute_single');
	Route::get('cetakJadwalID/{id}','laporanController@jadwal_execute_hari');

	Route::get('laporan/daftar_pasien_sudah','laporanController@laporan_pasien_sudahPeriksa');
	Route::get('cetakPasienSudah','laporanController@pasienSudah_execute_single');
	Route::get('cetakPasienSudahID/{event1}/{event2}',[
		'as' => 'report','uses' => 'laporanController@pasienSudah_execute_tgl'
	]);

	Route::get('laporan/daftar_pasien_belum','laporanController@laporan_pasien_belumPeriksa');
	Route::get('cetakPasienBelum','laporanController@pasienBelum_execute_single');
	Route::get('cetakPasienBelumID/{event1}/{event2}',[
		'as' => 'report','uses' => 'laporanController@pasienBelum_execute_tgl'
	]);

	Route::get('laporan/pemasukan_pemeriksaan','laporanController@total_pemasukan_pemeriksaan');
	Route::get('cetakPemasukanPemeriksaaanALL','laporanController@pemasukan_pendapatan_execute');
	Route::get('cetakPemasukanPemeriksaaanALLByID/{event1}/{event2}',[
		'as' => 'report','uses' => 'laporanController@pemasukan_pendapatan_execute_tgl'
	]);

	Route::get('laporan/pemasukan_obat','laporanController@total_pemasukan_obat');
	Route::get('cetakPemasukanObatALL','laporanController@pemasukan_pendapatan_obat_execute');
	Route::get('cetakPemasukanObatALLByID/{event1}/{event2}',[
		'as' => 'report','uses' => 'laporanController@pemasukan_obat_execute_tgl'
	]);

	Route::post('simpanAkun','homeController@simpanUser');

	
});


Route::middleware(['auth:pasien'])->group(function () {

	Route::get('homePasien','homePasienController@index');

	Route::get('loginPasien','loginPasienController@showLoginCustomerForm');


	Route::get('pendaftaranPasien/cetaknoUrut/{id}','transactionPasienController@noUrut_cetak_pasien');

	// BOOKING CUSTOMER
	Route::get('booking/bookingNow','controllerMasterPasien@booking');
	Route::get('booking/bookingDokter','transactionPasienController@pendaftaran_pasien');
	Route::get('booking/resep','transactionPasienController@resepPasien');

	// pendaftaran existing
	Route::get('getDokterByDate','controllerMasterPasien@getAvailableDoctorsByDateAndDay')->name('getDokterByDate');
	// end pendaftaran existing

	//NEW BOOKING PASIEN
	Route::get('booking','controllerMasterPasien@booking_v1');
	Route::post('booking/bookingNowPost','controllerMasterPasien@pasienSimpanBooking');

	//PROFILE Pasien
	Route::get('profile/jenis_treatment','controllerMasterPasien@jenis_biaya');
	Route::get('profile/jadwalOperasional','controllerMasterPasien@jadwal_praktek');

	Route::get('profile/profilePasien','controllerMasterPasien@profilePasien');
	Route::get('profile/editProfile','controllerMasterPasien@profileEdit');
	Route::post('profile/updateProfile','controllerMasterPasien@profileUpdate');

	Route::post('pendaftaranPasien/simpan','transactionPasienController@pendaftaran_simpan_pasien');
	Route::get('ambilDataPendaftarPesien','transactionPasienController@cekPendaftarPasien');
	Route::get('pemeriksaanPasien/cetak/{id}','transactionPasienController@cetakPemeriksaanPasien');

	Route::post('pasien/simpanDaftar','controllerMasterPasien@pasienSimpanDaftar');
	Route::get('pasien/cekDaftar/{id}','controllerMasterPasien@cekPasienDaftar');
	Route::get('pasien/daftarkanNow/{id}','controllerMasterPasien@daftarkanPasienNow');

});