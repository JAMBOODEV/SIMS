@extends('layouts.app')

@section('navbar')

    <body class="background-custom-siswa">
    
    <nav>
        <div class="container nav-wrapper">
            <a href="/siswa/beranda" class="brand-logo ">Sims</a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down custom">
                <li><a class="" href="beranda">Beranda</a></li>
                <li><a class="active-line" href="nilai">Nilai</a></li>
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
                <li><a class="" href="forum">Forum</a></li>
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
                <li><a href="sass.html">Beranda</a></li>
                <li><a class="active-line" href="elearning">E-Learning</a></li>
                <li><a href="nilai">Nilai</a></li>
                <li><a href="badges.html">Info</a></li>
                <li><a href="badges.html">Pembayaran</a></li>
                <li><a href="collapsible.html">Forum</a></li>
                <li><a href="collapsible.html"> <i class="fa fa-sign-out" aria-hidden="true"></i> </a></li>
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
                <p class="headline3">Perayaan Vincentius Day 2016: Meningkatkan Kepedulian dan Semangat Simplisitas</p>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="container">
        <div class="row custom-layout-learning">
            <div class="col s12 custom-div-table">
                <div class="content-1">

                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="name">Mata Pelajaran</th>
                                <th data-field="price">Guru</th>
                                <th data-field="price">Nila Min</th>
                                <th data-field="price">Nilai</th>
                                <th data-field="price">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="value-lesson">
                            <td> B0192 </td>
                            <td> Bahasa Indonesia &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i> </td>
                            <td> Pak Bondan </td>
                            <td> 90 </td>
                            <td> 70 </td>  
                            <td> A </td>
                        </tr>
                        <tr class="hide-value">
                            <td colspan="6"> 
                                <div class="detail-value"> Detail Nilai </div>
                                <div class="row custom-detail-value">
                                    <div class="col s2">
                                        1. Ulangan Harian 
                                    </div>
                                    <div class="col s10">
                                        80
                                    </div>
                                    <div class="col s2">
                                        2. UTS
                                    </div>
                                    <div class="col s10">
                                        75
                                    </div>
                                    <div class="col s2">
                                        3. E-Learning
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        4. Tryout
                                    </div>
                                    <div class="col s10">
                                        30
                                    </div>
                                    <div class="col s2">
                                        5. Ujian Nasional
                                    </div>
                                    <div class="col s10">
                                        50
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <script type="text/javascript">

                        $(".value-lesson").click(function() {

                            $(this).next().toggle('slow');
                                
                        });

                    </script>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    

@endsection


