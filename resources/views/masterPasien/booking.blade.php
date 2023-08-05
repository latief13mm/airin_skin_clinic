@extends('templatesPasien/header')
@section('content')
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          @include('templatesPasien/navigation')

          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title"></div>
              <div class="clearfix"></div>
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="showTooltips"></div>
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Booking <small>Pasien</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                            <td style="width: 50%"><center><button type="button" class="btn btn-success" style="width: 40%" id="executeDaftarPasien">YA</button></center></td>
                            <td style="width: 50%"><center><button type="button" class="btn btn-info" style="width: 40%" id="tidakJadiDaftarPasien">TIDAK</button></center></td>
                          </tr>
                          </tbody>
                        </table>
                        <hr>
                        <form action="{{ url('pasien/edit') }}" method="POST" id="formEditPasien">
                          {{ csrf_field() }}
                          <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                            </tr>
                            <tr>
                              <th class="holderToolPasien" >Booking Now</th>
                              <th>No Pasien</th>
                              <th>Nama Pasien</th>
                              <th>Alamat</th>
                              <th>Telp</th>
                              <th>Tgl Lahir</th>
                              <th>Jenis Kelamin</th>
                              <th>Tanggal Reg</th>
                              <th>Tools</th>
                            </tr>

                            </thead>

                            <tbody id="showPasien">
                            <?php
                            foreach ($listBookingPasien as $key => $value) {
                              ?>
                            <tr>
                              <td style="width: 100px;" class="toolPasien" style="display: none;">
                                Klik Tombol Daftar Untuk Booking
{{--                                <button type="button" class="btn btn-info btn-s editPasien" ><i class="fa fa-book"></i></button><button type="button" class="btn btn-danger btn-s deletePasien"><i class="fa fa-trash"></i></button>--}}
                              </td>
                              <td>{{ $value->NoPasien }}</td>
                              <td>{{ $value->namaPas }}</td>
                              <td>{{ $value->almPas }}</td>
                              <td>{{ $value->telpPas }}</td>
                              <td>{{ $value->tglLahirPas }}</td>
                              <td>{{ $value->jenisKelPas }}</td>
                              <td>{{ $value->tglRegistrasi }}</td>
                              <td><center><button type="button" class="btn btn-info btn-xs daftarkanPasien">Daftar</button></center></td>
                            </tr>
                              <?php
                            }
                            ?>
                            </tbody>
                          </table>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>List Pasien Yang Sudah Daftar</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <p>Tekan Pilih untuk menambahkan data ke table di samping.</p>

                          <!-- start project list -->
                          <table class="table table-striped projects" id="tablePasienDaftar">
                            <thead>
                            <tr>
                              <th style="width: 1%">No Pendaftaran</th>
                              <th style="width: 20%">Tgl Pendaftaran</th>
                              <th>No Urut</th>
                              <th>No Pasien</th>
                              <th>Nama Pasien</th>
                              <th style="width: 20%">Alat</th>
                            </tr>
                            </thead>
                            <tbody id="showPasienDaftar">
                            <?php
                            foreach ($getDataPendaftaran as $key => $value) {
                              ?>
                            <tr>
                              <td>{{ $value->NoPendaftaran }}</td>
                              <td>{{ $value->tglPendaftaran }}</td>
                              <td>{{ $value->noUrut }}</td>
                              <td>{{ $value->NoPasien }}</td>
                              <td>{{ $value->namaPas }}</td>
                              <td>
                                <button type="button" class="btn btn-primary btn-xs pilihPendaftaran"><i class="fa fa-check"></i> Pilih </button>
{{--                                <button type="button" class="btn btn-success btn-xs" id="executeCetakBooking"><i class="fa fa-print"></i> CETAK NOMOR URUT</button>--}}
                              </td>
                            </tr>
                              <?php
                            }
                            ?>
                            </tbody>
                          </table>
                          <!-- end project list -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Tentukan Dokter</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <form action="{{ url('pendaftaranPasien/simpan') }}" method="POST" id="formPilihDokter">
                            {{ csrf_field() }}
                            <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $now = date('D-m-Y');
                            $trim = substr($now, 0,3);

                            $hari = '';

                            if($trim == 'Mon'){
                              $hari = 'Senin';
                            }else if($trim == 'Tue'){
                              $hari = 'Selasa';
                            }else if($trim == 'Wed'){
                              $hari = 'Rabu';
                            }else if($trim == 'Thu'){
                              $hari = 'Kamis';
                            }else if($trim == 'Fri'){
                              $hari = 'Jumat';
                            }else if($trim == 'Sat'){
                              $hari = 'Sabtu';
                            }else if($trim == 'Sun'){
                              $hari = 'Minggu';
                            }
                            ?>
                            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".modal_konfirmasi"><i class="fa fa-save"></i> Proses </button>
                            <p>Cari Data Dokter Yang Di Inginkan sesuai jadwal Praktek Terlebih dahulu. Lalu tekan Proses untuk memproses. setelah itu pasien dapat mencetak Nomor Urut.</p>
                            <span><b>Pilih Dokter ( Dokter yang ada jadwal di hari <i><?php echo $hari ?></i> )</b></span>
                            <select name="pilihDokter" id="pilihDokter" class="form-control">
                              <option value="">-</option>
                              <?php
                              $data2 = \App\modelTransaksi::getAllDokterSameAsDay();
                              foreach ($data2 as $key => $value) {
                                ?>
                              <option value="{{ $value->KodeJadwal }}">{{ $value->nmDokter }}</option>
                                <?php
                              }
                              ?>
                            </select>
                            <hr>
                            <!-- start project list -->
                            <table class="table table-bordered projects">
                              <thead>
                              <tr>
                                <th style="width: 1%">No Pendaftaran</th>
                                <th style="width: 20%">Tgl Pendaftaran</th>
                                <th>No Urut</th>
                                <th>No Pasien</th>
                                <th>Nama Pasien</th>
                                <th style="width: 20%">Alat</th>
                              </tr>
                              </thead>
                              <tbody id="appendPasienHere">
                              </tbody>
                            </table>
                          </form>
                            <!-- end project list -->
                              </div>
                            </div>
                          </div>
                      </div>
                 <div class="modal fade modal_konfirmasi" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Konfirmasi Transaksi</h4>
                      </div>
                      <div class="modal-body">
                        <h4><center>Sudah Benar ? </center></h4>

                        <p>
                        <center>
                          <button type="button" class="btn btn-success simpanPendaftaran" data-dismiss="modal">Ya</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                        </center>
                        </p>

                      </div>
                      <div class="modal-footer">
                        <small>KEFKA</small>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
@endsection


