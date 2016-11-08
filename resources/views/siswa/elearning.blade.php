@extends('layouts.app')

	@section('navbar')
     <body class="background-custom-login-elearning">
        <nav class="nav-custom-learning">
            <div class="container">

                <div class="row">
                    <div class="col s1 custom-logo-learning">
                        <a href="siswa/beranda" class="logo-learning">Sims</a>
                    </div>
                    <div class="col s9 custom-tittle-learning">
                        <div class="header-tittle-learning">
                            E-Learning Rekayasa Perangkat Lunak (RPL) <br />
                        </div>
                        <div class="header-tittle-learning-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit.
                        </div>
                    </div>
                    <div class="col s3 custom-image-learning">
                        <div class="content-image-learning-header">
                            <img src="../img/avatar_siswi.jpg" class="image-tittle-learning">
                        </div>
                        <div class="name-tittle-learning">
                            Aries Saepudin S.Kom
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
                            <div class="name-tittle-learning">
                                Ekohaddy Prasetyo S.Kom
                            </div>
                            <div style="text-align: justify;">
                                <p> <hr /> </p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                                <p> <hr /> </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    @endsection


    