@extends('templates/header')
@section('content')

<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            
           @include('templatesPasien/navigation')            
                  

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="height:600px;">
                  <div class="x_title">
                    <h2>Promo Airin Skin Clinic</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="row">

                      <div class="col-md-12">

                        <!-- price element -->
                        <div class="col-md-3 col-sm-6  ">
                          <div class="pricing ui-ribbon-container">
                            <div class="ui-ribbon-wrapper">
                              <div class="ui-ribbon">
                                80%
                              </div>
                            </div>
                            <div class="title">
                              <h2>Special Promo Airin Clinic Juli</h2>
                              <h1>RP. 1.500.000</h1>
                              <span>Juli</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('Assets') }}/production/images/promo1.jpg"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                        <div class="col-md-3 col-sm-6  ">
                          <div class="pricing ui-ribbon-container">
                            <div class="ui-ribbon-wrapper">
                              <div class="ui-ribbon">
                                60%
                              </div>
                            </div>
                            <div class="title">
                              <h2>Special Promo Airin Clinic Mei</h2>
                              <h1>Rp. 1.000.000</h1>
                              <span>Mei</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('Assets') }}/production/images/promo2.jpg"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                        <div class="col-md-3 col-sm-6  ">
                          <div class="pricing ui-ribbon-container">
                            <div class="ui-ribbon-wrapper">
                              <div class="ui-ribbon">
                                20%
                              </div>
                            </div>
                            <div class="title">
                              <h2>Promo Pembelian Online</h2>
                              <h1>Rp. 300.000</h1>
                              <span>Mei</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('Assets') }}/production/images/promo3.jpg"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- price element -->

                        <!-- price element -->
                        <div class="col-md-3 col-sm-6  ">
                          <div class="pricing ui-ribbon-container">
                            <div class="ui-ribbon-wrapper">
                              <div class="ui-ribbon">
                                60%
                              </div>
                            </div>
                            <div class="title">
                              <h2>Special Promo Airin Clinic Maret</h2>
                              <h1>Rp. 2.000.000</h1>
                              <span>Maret</span>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('Assets') }}/production/images/promo4.jpg"/>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- price element -->                                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection