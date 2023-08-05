@extends('templates/header')
@section('content')
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include('templatesPasien/navigation')

            <div class="right_col" role="main">
              <div class="">
                <div class="page-title">
                  <div class="clearfix"></div>
                    <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Form <small>Booking Pasien</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <hr>
                          <table id="konfirmasi_daftarPasien" class="table table-bordered" hidden="true">
                            <thead>
                              <tr style="text-align: center;">
                                <th colspan="2"><i class="fa fa-question-circle"></i> Daftarkan pasien dan cetak No Urut ? <b><i class="keteranganDaftar"></i></b></th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="width: 50%"><center><button type="button" class="btn btn-success" style="width: 40%" id="executeBookingPasien">YA</button></center></td>
                                <td style="width: 50%"><center><button type="button" class="btn btn-info" style="width: 40%" id="tidakJadiBookingPasien">TIDAK</button></center></td>
                                
                              </tr>
                            </tbody>
                          </table>
                          <br />
                          <form id="bookingPasienForm" action="{{ url('booking/bookingNowPost') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_pasien">Nama Pasien<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <?php
                                    foreach ($listBookingPasien as $key => $value) {
                                      $namaPasien = $value->namaPas;
                                  }
                                ?>
                                <input type="text" id="nama_pasien" name = "nama_pasien" required="required" class="form-control" value="{{ $namaPasien }}">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Pilih Tanggal Booking <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input id="tglPendaftaran" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                  function timeFunctionLong(input) {
                                    setTimeout(function() {
                                      input.type = 'text';
                                    }, 60000);
                                  }
                                </script>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pilih Dokter<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <select name="pilihDokter" id="pilihDokter" class="form-control">
                                  <option value="">Pilih Dokter</option>
                                </select>
                              </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Cansel</button>
                                <button id = "simpanBookingPasien" type="submit" class="btn btn-success">Daftar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            
<script>
	// Booking

	document.getElementById('tglPendaftaran').addEventListener('change', function() {
    var selectedDate = this.value;

    // Ganti bagian ini dengan kode yang memeriksa ketersediaan dokter pada tanggal yang dipilih
    var hari = getDayOfWeek(selectedDate); // Fungsi yang mengambil nama hari berdasarkan tanggal
    var availableDoctors = getAvailableDoctors(hari); // Fungsi yang mengambil daftar dokter yang tersedia pada hari tersebut

    // Dapatkan pilihan dokter yang sebelumnya dipilih (jika ada)
    var selectedDoctor = document.getElementById('pilihDokter').value;

    var pilihDokter = document.getElementById('pilihDokter');
    pilihDokter.innerHTML = ''; // Reset pilihan dokter

    availableDoctors.forEach(function(doctor) {
        var option = document.createElement('option');
        option.value = doctor.KodeJadwal;
        option.text = doctor.nmDokter;
        pilihDokter.appendChild(option);

        // Jika ada pilihan dokter sebelumnya dan dokter tersebut masih tersedia pada tanggal baru,
        // maka tetapkan dokter tersebut sebagai pilihan
        if (selectedDoctor === doctor.KodeJadwal) {
            pilihDokter.value = selectedDoctor;
        }
    });
});

// Fungsi untuk mengambil nama hari berdasarkan tanggal
function getDayOfWeek(selectedDate) {
    var dateParts = selectedDate.split('-');
    var selectedDay = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    return days[selectedDay.getDay()];
}

// Fungsi untuk mendapatkan daftar dokter yang tersedia pada hari tertentu
function getAvailableDoctors(hari) {
    // Buat URL untuk memanggil fungsi getAllDokterSameAsDayAndDate di PHP
    var url = '{{ url("getDokterByDate") }}'; // Ganti dengan URL ke file PHP Anda

    // Lakukan request ke server backend menggunakan XMLHttpRequest
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Jika request berhasil, dapatkan data JSON dari server
                var response = JSON.parse(xhr.responseText);

                // Proses data dan tampilkan pilihan dokter
                var availableDoctors = response;
                var pilihDokter = document.getElementById('pilihDokter');
                pilihDokter.innerHTML = ''; // Reset pilihan dokter

                availableDoctors.forEach(function(doctor) {
                    var option = document.createElement('option');
                    option.value = doctor.KodeJadwal;
                    option.text = doctor.nmDokter;
                    pilihDokter.appendChild(option);
                });
            } else {
                // Jika request gagal, tangani kesalahan
                console.error('Error:', xhr.status);
            }
        }
    };
    xhr.send();
}


	// End Booking
  </script>
@endsection


