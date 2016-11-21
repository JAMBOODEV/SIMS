@extends('layouts.app')

@section('navbar')

    <body class="background-custom-siswa">
    
    <nav>
        <div class="container nav-wrapper">
            <a href="/siswa/beranda" class="brand-logo ">Sims</a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down custom">
                <li><a class="" href="beranda">Beranda</a></li>
                <li><a class="" href="nilai">Nilai</a></li>
                <li><a class="" href="elearning">E-learning</a></li>
                <li>
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>Informasi &nbsp; 
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul id='dropdown1' class='dropdown-content active-setting'>
                        <li><a href="/siswa/pesan-masuk">Pesan</a></li>
                        <li><a href="#!">Berita</a></li>
                        <li><a href="#!">Unduh</a></li>
                    </ul>
                </li>
                <li>
                </li>
                <li><a class="" href="pembayaran">Pembayaran</a></li>
                <li><a class="active-line" href="forum">Forum</a></li>
                <li>
                    <a class='dropdown-button' href='#' data-activates='dropdown2'>
                        <i class="fa fa-gear"></i>
                    </a>
                    <ul id='dropdown2' class='dropdown-content active-setting'>
                        <li><a href="#!">Ubah Profil</a></li>
                        <li><a href="#!">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div id="info_sims_user">
        <div id="user_detile">
            <div class="user_info_img ">
                <img src="../img/avatar_siswi.jpg" alt="" class="circle responsive-img">
            </div>
            <div class="user_info_prof">
                <h3>Hello, Jessica !</h3>
                <p>2011141971</p>
                <ul>
                    <li>Lorem ipsum dolor.</li>
                    <li>Lorem ipsum dolor.</li>
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
                <p class="headline3">Perayaan Vincentius Day 2016: Meningkatkan Kepedulian dan</p>
            </div>
        </div>
    </div>

@endsection