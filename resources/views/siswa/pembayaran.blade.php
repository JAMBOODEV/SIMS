@extends('layouts.appSiswa')
@section('subHeader')
    <div id="info_sims_user">
        <div id="user_detile">
            <div class="user_info_img ">
                <img src="../img/avatar_siswi.jpg" alt="" class="circle responsive-img">
            </div>
            <div class="user_info_prof">
                <h3>Hello, Jessica !</h3>
                <p>2011141971</p>
                <ul>
                    <li>Kelas</li>
                    <li>Semester</li>
                </ul>
            </div>
        </div>
        <div id="info_splash">
            <div class="headline-news">
                <p class="headline3">Tirakatan – Memaknai Hari Pahlawan Lebih Dalam</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Mengadu Kemampuan Sinlui Melawan ADU All Stars</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Bakti Sosial 2016: Mengakrabkan Sinlui Kepada yang Lemah dan Terpinggirkan</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Tes Penjajakan Bidang Ilmu (TPBI)</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Perayaan Vincentius Day 2016: Meningkatkan Kepedulian dan Semangat Simplisitas</p>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="container">
        <div class="row custom-layout-learning">
            <div class="container set-margin1">
                <div class="content-1">
                
                    <p class="sub-headline3 head-margin">Belum Terbayar</p>
                            <hr>
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="price">Bulan</th>
                                <th data-field="price">Jenis Pembayaran</th>
                                <th data-field="price">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container set-margin1">
                <div class="content-1">
                     <p class="sub-headline3 head-margin">Telah Dibayar</p>
                    <hr>
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="price">Bulan</th>
                                <th data-field="price">Jenis Pembayaran</th>
                                <th data-field="price">Jumlah</th>
                                <th data-field="price">Status</th>
                                <th data-field="price">Tanggal Penerima</th>
                                <th data-field="name">Penerima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td><font color="red"> Belum Bayar </font></td>
                                <td>21-January-2016</td>
                                <td>Krisna Singgih</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td><font color="red"> Belum Bayar </font></td>
                                <td>21-January-2016</td>
                                <td>Krisna Singgih</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col l12 ">
        <div class="content-pesan">
          <div class="col s12 l12">
            <div class="card-sims1">
              <div class="row">
              <br>
                <p class="sub-headline3 head-margin">Tagihan Pembayaran</p>
                <hr>

                <div class="row">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#tagihan">Belum Terbayar</a></li>
                    <li class="tab col s3"><a href="#lunas">Telah Dibayar</a></li>
                  </ul>
                </div>
                <div id="tagihan" class="col s12">
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="price">Bulan</th>
                                <th data-field="price">Jenis Pembayaran</th>
                                <th data-field="price">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div id="lunas" class="col s12">
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="price">Bulan</th>
                                <th data-field="price">Jenis Pembayaran</th>
                                <th data-field="price">Jumlah</th>
                                <th data-field="price">Status</th>
                                <th data-field="price">Tanggal Penerima</th>
                                <th data-field="name">Penerima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td>Lunas</td>
                                
                                <td>21-January-2016</td>
                                <td>Krisna Singgih</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Oktober</td>
                                <td>SPP</td>
                                <td>Rp. 100.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 900.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Darsono</td>
                            </tr>
                            <tr>
                                <td>123ABC</td>
                                <td>Desember</td>
                                <td>SPP</td>
                                <td>Rp. 500.000.-</td>
                                <td>Lunas</td>
                                <td>21-January-2016</td>
                                <td>Krisna Singgih</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
        
                </div>
                
              </div>
            </div>
            
          </div>
          </div>
      </div>
        </div>
    </div>

@endsection