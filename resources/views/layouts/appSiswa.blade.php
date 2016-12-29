<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/font-awesome.css" media="screen,projection"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    {{-- css step learning --}}

    
    <script src="../js/jquery.min.js"> </script>
    <!-- cdn tinymce.com 4  tinymce.min.js -->
    <!-- <script src="../js/tinymce.dev.js"></script> -->
    <script src="../js/step/step.js"></script>
    <!-- 
    <script src="../js/plugins/table/plugin.dev.js"></script>
    <script src="../js/plugins/paste/plugin.dev.js"></script>
    <script src="../js/plugins/spellchecker/plugin.dev.js"></script> -->

    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/clndr.css">

    <!--Let browser know website is optimized for mobile-->
    
    <!-- js chart -->
    <!-- <script type="text/javascript" src="../js/charts/loader.js"></script> -->
    
    
    <!-- Scripts -->
    <script>
    
    window.SIMS = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>

    
    </script>
    
    <style>
       

    </style>
  </head>
 <body class="background-custom-siswa">
    
    <nav>
        <div class="container nav-wrapper">
            <a href="/siswa/" class="brand-logo "><img src="../img/SIMS.png" alt=""></a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down custom">
                <li><a class="active-line" href="/">Beranda</a></li>
                <li><a class="" href="nilai">Nilai</a></li>
                <li><a class="" href="elearning">E-learning</a></li>
                <li>
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>Informasi 
                        <i class="fa fa-chevron-down icon-dropdown"></i>
                    </a>
                    <ul id='dropdown1' class='dropdown-content active-setting'>
                        <li><a href="/siswa/pesan-masuk">Pesan</a></li>
                        <li><a href="/siswa/berita">Berita</a></li>
                        <li><a href="/siswa/unduh">Unduh</a></li>
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

    @yield('subHeader')
    
    <!-- Page Content goes here -->
    @yield('content')
    
    @yield('script')
    <!-- Scripts -->

    <!-- <div class="footer">This footer will always be positioned at the bottom of the page, but 
        <strong>not fixed</strong>.
    </div> -->
    
    <footer class="footer">
      <div class="container">
        <div class="row">
            <div class="col s10">
                <p class="footer-text">@ Jamboo.id</p>
            </div>
        </div>
      </div>
    </footer>
  
    <!-- START CLNDR -->
    <script src="../js/underscore-min.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/clndr.js"></script>
    <!-- END CLNDR -->

    <!-- chart.JS -->
    <!-- <script src="../js/Chart.bundle.min.js"></script> -->
    
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
  
  </body>
</html>

<div id="modal1" class="modal detail_elerning">
    <div class="modal-header desk_modal">
        <h2>Geografi</h2>
    </div>
    
    <div class="modal-content">
        <div class="row">
            <div class="col m5">
                <div class="col m12">
                    <h3 class="headline2">Pengajar</h3>
                    <table class="modal-table">
                        <tr>
                            <td style="width: 170px">Kode Mata Pelajaran</td>
                            <td style="width: 10px">:</td>
                            <td>2011142164</td>
                        </tr>
                        <tr>
                            <td>Pengajar</td>
                            <td>:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                        <tr>
                            <td>Nilai Minimum</td>
                            <td>:</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Durasi</td>
                            <td>:</td>
                            <td>60 menit</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col m7 ">
                <h3 class="headline2">Kisi - kisi</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis tenetur ducimus voluptas voluptates iure, asperiores dolores sit voluptatem deserunt nesciunt, repudiandae exercitationem officia nam saepe repellat! Ad, quibusdam inventore id.
            </div>
        </div>
        <div class="content_modal">

        </div>
    </div>

    <div class="modal-footer">
    <a href="soal" class="btn modal-action modal-close waves-effect waves-green btn-flat center-button custom-modal-elearning">Mulai</a>
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat custom-modal-elearning">Jangan Sekarang</a>
    </div>

</div>