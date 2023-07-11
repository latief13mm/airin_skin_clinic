<?php
    $getPasien = \App\userModel::getPasienById();

    foreach ($getPasien as $key => $value) {
      $id = $value->noUser;
      $namaPasien = $value->namaPas;
      $typeUser = $value->typeUser;
    }
?>
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/homePasien') }}" class="site_title"><i class="fa fa-plus-square"></i> <span>Airin Skin Clinic</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('Assets') }}/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ $namaPasien }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/homePasien') }}"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <?php if($typeUser == 'PASIEN'){
                    ?>  
                  <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('profile/profilePasien') }}">Edit Profile</a></li>
                      <li><a href="{{ url('profile/jenis_treatment') }}">Jenis Perawatan</a></li>
                      <li><a href="{{ url('profile/jadwalOperasional') }}">Jadwal Operasional</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Booking<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('booking/bookingNow') }}">Booking Sekarang</a></li>
                      <li><a href="{{ url('booking/bookingDokter') }}">Booking Dokter</a></li>
                      <li><a href="{{ url('booking/resep') }}">Resep</a></li>
                    </ul>
                  </li>
                  <?php
                } ?>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Program</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cogs"></i> System <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" data-toggle="modal" data-target=".modalAboutMe">About Program</a></li>
                    </ul>
                  </li>
                                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Informasi Poliklinik">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('Assets') }}/production/images/img.jpg" alt="">{{ $namaPasien }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#" data-toggle="modal" data-target=".settingModal"> Setting</a></li>
                    
                    <li>
                      <form action="{{ url('pasien/logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="badge bg-blue pull-right"><i class="fa fa-sign-out pull-right"></i> Log Out</a></button>
                      </form>
                    </li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        
        <div class="modal fade settingModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ubah Akun</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form action="{{ url('simpanAkun') }}" method="POST" id="dataAkun">
                            {{ csrf_field() }}
                            <input type="hidden" name="NoPasien" value="#">
                            <span>Username</span>
                            <input type="text" class="form-control" name="username" placeholder="Username baru" id="uname">
                            <br/>
                            <span>Password</span>
                            <input type="password" class="form-control" name="password" placeholder="Password baru" id="pswd">
                            <br/>
                            <span>Konfirmasi Password</span>
                            <input type="password" class="form-control" name="k_password" placeholder="Konfirmasi Password" id="k_pswd">
                            <br/>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button type="button" class="btn btn-info execute_simpan_now" data-dismiss="modal">Simpan</button>
                        </div>
                     
                      </div>
                    </div>
                  </div>


        <div class="modal fade modalAboutMe" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">About Program</h4>
                        </div>
                        <div class="modal-body">
                          
                          <p>
                            Aplikasi ini di buat untuk memenuhi tugas akhir UPI YAI.<br/>
                            <ul>
                              <li>Airin Skin Clinic : v0.1</li>
                            </ul>
                            <br/>
                          ~Tugas Akhir UPI YAI
                          </p>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                     
                      </div>
                    </div>
                  </div>