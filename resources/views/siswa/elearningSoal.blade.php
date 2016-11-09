@extends('layouts.app')
@section('navbar')
    <body class="background-custom-siswa">
    <nav>
        <div class="container nav-wrapper">
            <a href="#" class="brand-logo ">Logo</a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="beranda">Beranda</a></li>
                <li><a href="elearning">E-learning</a></li>
                <li><a href="pembayaran">Pembayaran</a></li>
                <li><a href="nilai">Nilai</a></li>
                <li><a href="info">Info</a></li>
                <li><a href="forum">Forum</a></li>
            </ul>
            <ul id="slide-out" class="side-nav">
                <li>
                    <div class="userView">
                        <div class="background">
                            <img src="../img/office.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="../img/avatar_siswi.jpg"></a>
                        <a href="#!name"><span class="white-text name">John Doe</span></a>
                        <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                </li>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">E-learning</a></li>
                <li><a href="#">Pembayaran</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
        </div>
    </nav>
    <nav class="nav-custom-learning">
        <div class="container">
            <div class="row">
                <div class="col s9 custom-tittle-learning">
                    <div class="header-tittle-learning">
                        E-Learning Rekayasa Perangkat Lunak (RPL) <br />
                    </div>
                    <div class="header-tittle-learning-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit.
                    </div>
                </div>
                <div class="col s3 custom-image-learning-1">
                    <div class="content-image-learning-header">
                        Nilai Minimum
                    </div>
                    <div class="name-tittle-learning">
                        75
                    </div>
                </div>
                <div class="col s3 custom-image-learning-2">
                    <div class="content-image-learning-header">
                        Waktu / Menit
                    </div>
                    <div class="name-tittle-learning">
                        60
                    </div>
                </div>
            </div>
        </div>  
    </nav>
@endsection


    @section('content')
            <div class="container">
                <div class="row custom-layout-learning">

                    <div class="col s9">
                        <div class="content-1">
                            
                            <div class="row">
                                <div class="col s9">
                                    <a class="on-learning"> 5 </a> 
                                    <a class="of-learning">of 25</a>
                                </div>
                                <div class="col s3">
                                    <a class="on-learning"> Waktu Tersisa : </a> 
                                    <a class="on-learning"> 54:00 </a> 
                                </div>
                            </div>
                            
                            <div class="w3-progress-container w3-light-blue">
                                <div class="w3-progressbar w3-blue" style="width:75%">
                                  <div class="w3-center w3-text-white">25%</div>
                                </div>
                             </div>

                        <div class="row custom-question">
                            <div class="col s1 custom-number-elearning">
                                <a class="on-learning"> 5. </a> 
                            </div>
                            <div class="col s11">
                                <div class="question-tittle">
                                    Sebuah web kita evaluasi ternyata kita membutuhkan bahwa suatu objek perlu link ke halaman situs lain, agar user mendaptkan kejelasan bila link ke halaman / situs lain. pada tahapan untuk di gunakan adalah :
                                </div>
                            </div>

                            <div class="col s12 custom-question">
                                <div class="question-layout">
                                    <div class="question-learning">
                                        <div class="question-selection">
                                            a. Hyperteks Markup
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="question-layout">
                                    <div class="question-learning">
                                        <div class="question-selection">
                                            b. Hyperlink
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="question-layout">
                                    <div class="question-learning">
                                        <div class="question-selection">
                                            c. Link to web
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="question-layout">
                                    <div class="question-learning">
                                        <div class="question-selection">
                                            d. Hypertext
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="question-layout">
                                    <div class="question-learning">
                                        <div class="question-selection">
                                            e. Link URL
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col s2 custom-button-learning">
                                <button class="btn next-answer-learning-back">  </button>
                            </div>
                            <div class="col s8 custom-button-learning">
                                <button class="btn next-answer-learning"> Selanjutnya </button>
                            </div>
                            
                        </div>

                        </div>
                    </div>


                    <div class="col s3">
                <div class="content-2">
                    <div class="content-image-learning">
                        <img src="../img/avatar_siswi.jpg" class="image-siswa-learning">
                    </div>
                    <div style="text-align: justify;">
                        <p> </p><hr> <p></p>
                        Lorem ipsum dolor sit amet dolor sit.
                        <p> </p><hr> <p></p>
                    </div>
                    <div class="row" style="left: -11px; position: relative;">
                        <div class="col s12">
                            <div class="col s10">
                                Pemograman Web
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            <div class="col s10">
                                Pemograman Java
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            <div class="col s10">
                                Bahasa Indonesia
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            <div class="col s10">
                                Matemetika
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                             <div class="col s10">
                                Matemetika
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                             <div class="col s10">
                                Matemetika
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                             <div class="col s10">
                                Matemetika
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                             <div class="col s10">
                                Pemograman Web
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            <div class="col s10">
                                Pemograman Java
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            <div class="col s10">
                                Bahasa Indonesia
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            <div class="col s10">
                                Matemetika
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                             <div class="col s10">
                                Matemetika
                            </div>
                            <div class="col s1 custom-question-download">
                                <a href="" class="custom-icon-download">
                                    <i class="material-icons right">file_download</i>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

                </div>
            </div>
    @endsection