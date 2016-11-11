@extends('layouts.app')

@section('navbar')

    <body class="background-custom-siswa">

    <nav class="custom-nav-siswa-payment">
        <div class="container nav-wrapper">
            <a href="#" class="brand-logo ">Sims</a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="" href="beranda">Beranda</a></li>
                <li><a class="" href="elearning">E-learning</a></li>
                <li><a class="" href="nilai">Nilai</a></li>
                <li><a class="active-line" href="pembayaran">Pembayaran</a></li>
                <li><a class="" href="info">Info</a></li>
                <li><a class="" target="_blank" href="http://localhost/SIMS/forum/">Forum</a></li>
                <li><a class="" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>


        </div>
    </nav>

    <nav class="nav-custom-nilai">
        <div class="container">
            <div class="row">
                <div class="col s12 custom-tittle-learning">
                    <div class="header-tittle-nilai">
                        Tagihan yang belum dibayar Rp. 300.000.-
                    </div>
                </div>
            </div>
        </div>  
    </nav>

@endsection

@section('content')

    <div class="container">
        <div class="row custom-layout-learning">
            <div class="col s12">
                <div class="content-1">
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="name">Kode</th>
                                <th data-field="price">Bulan</th>
                                <th data-field="price">Jenis Pembayaran</th>
                                <th data-field="price">Jumlah</th>
                                <th data-field="price">Status</th>
                                <th data-field="price">Tanggal Penerima</th>
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
        </div>
    </div>

@endsection