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

    <link rel="stylesheet" href="../css/tables/jquery.dataTables.min.css">

    <script src="../js/tables/jquery-1.12.3.js"></script>           
    <script src="../js/tables/jquery.dataTables.min.js"></script>         
    <script src="../js/materialize.min.js"></script>         


   <!--  <script src="../js/jquery.min.js"> </script> -->
    <!-- cdn tinymce.com 4  tinymce.min.js -->
    <!-- <script src="../js/tinymce.dev.js"></script>
    <script src="../js/step/step.js"></script> -->
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
    
  </head>

    <body class="background-custom-siswa">
    
    <nav>
        <div class="container nav-wrapper">
            <a href="/guru/" class="brand-logo "><img src="../img/SIMS.png" alt=""></a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down custom">
            <li><a class="active-line" href="/guru/">Beranda</a></li>
                <li><a class="" href="/guru/elearning">E-learning</a></li>
                <li><a class="" href="/guru/nilai">Nilai</a></li>
                <li><a class="" href="/guru/info">Info</a></li>
                <li><a class="" href="/guru/forum">Forum</a></li>
                <li><a class="" href="logout"><i class="fa fa-sign-out"></i></a></li>
            </ul>
        </div>
    </nav>

    <div id="info_sims_user">
        <div id="user_detile">
            <div class="user_info_img ">
                <img src="../img/rossi.jpg" alt="" class="circle responsive-img teacher">
            </div>
            <div class="user_info_prof">
                <h4>Hello, Rosita Dewi !</h4>
                <p>2011141971</p>
                <ul>
                    <li>Selamat Datang Cinta.</li>
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

    <script src="../js/jquery.dataTables.min.js"></script>
    
    <!-- chart.JS -->
    <!-- <script src="../js/Chart.bundle.min.js"></script> -->
    
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
  
  </body>
</html>

<div id="modal1" class="modal">
    <div class="icon-header-value right">
        <a class="modal-action modal-close custom-value">
            <i class="fa fa-times custom-value" aria-hidden="true"></i>
        </a>
    </div>
    <div class="modal-header desk_modal custom-input">
        <div class="col s12 custom-input-option">
            <div class="text-header-modal custom-header-modal">
                INPUT NILAI Kalkulus 1 Kelas XII IPA 2
            </div>
        </div>
        <div class="row">
            <div class="col s12 custom-option-value">
                <div class="col s7">
                    <div class="input-field col s12 custom-option-value">
                        <select>
                          <option value="" disabled selected>Jenis Nilai</option>
                          <option value="1">UTS</option>
                          <option value="2">UAS</option>
                          <option value="3">E-Learning</option>
                        </select>
                    </div>
                </div>
                
                <div class="col s4 custom-button-modal-OK">
                    <button class="waves-effect waves-light btn custom value modal-trigger custom-OK" data-target="modal2">
                        OK
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="icon-header-value right">
        <a class="modal-action modal-close custom-value">
            <i class="fa fa-times custom-value" aria-hidden="true"></i>
        </a>
    </div>
    <div class="modal-header desk_modal custom-input">
        <div class="col s12 custom-input-option">
            <div class="text-header-modal custom-header-modal">
                INPUT NILAI UTS KALKULUS 1 KELAS XII IPA 2
            </div>
        </div>

        <div class="col s12 custom-position-value">
                    <table>
                        <tr class="border-header">
                            <th class="header-input"> <center> No </center> </th>
                            <th class="header-input custom-name"> Nama </th>
                            <th class="header-input custom-option"> Jenis Nilai </th>
                            <th class="header-input custom-value"> Nilai </th>
                        </tr>
                        <tr>
                            <td class="value-input">1.</td>
                            <td class="value-input">Achmad Rizky</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">2.</td>
                            <td class="value-input">Danang Salaxa</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">3.</td>
                            <td class="value-input">Ryo Anantsya</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">4.</td>
                            <td class="value-input">Daniel Febyan</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">5.</td>
                            <td class="value-input">Mardian Akbar</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">6.</td>
                            <td class="value-input">Septian Ansyah</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">7.</td>
                            <td class="value-input">Bambang Susilo Yudoyono</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">8.</td>
                            <td class="value-input">Eko Haddy</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">1.</td>
                            <td class="value-input">Achmad Rizky</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">2.</td>
                            <td class="value-input">Danang Salaxa</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">3.</td>
                            <td class="value-input">Ryo Anantsya</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">4.</td>
                            <td class="value-input">Daniel Febyan</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">5.</td>
                            <td class="value-input">Mardian Akbar</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">6.</td>
                            <td class="value-input">Septian Ansyah</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">7.</td>
                            <td class="value-input">Bambang Susilo Yudoyono</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">8.</td>
                            <td class="value-input">Eko Haddy</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">1.</td>
                            <td class="value-input">Achmad Rizky</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">2.</td>
                            <td class="value-input">Danang Salaxa</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">3.</td>
                            <td class="value-input">Ryo Anantsya</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">4.</td>
                            <td class="value-input">Daniel Febyan</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">5.</td>
                            <td class="value-input">Mardian Akbar</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">6.</td>
                            <td class="value-input">Septian Ansyah</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">7.</td>
                            <td class="value-input">Bambang Susilo Yudoyono</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">8.</td>
                            <td class="value-input">Eko Haddy</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">1.</td>
                            <td class="value-input">Achmad Rizky</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">2.</td>
                            <td class="value-input">Danang Salaxa</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">3.</td>
                            <td class="value-input">Ryo Anantsya</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">4.</td>
                            <td class="value-input">Daniel Febyan</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">5.</td>
                            <td class="value-input">Mardian Akbar</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">6.</td>
                            <td class="value-input">Septian Ansyah</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">7.</td>
                            <td class="value-input">Bambang Susilo Yudoyono</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                        <tr>
                            <td class="value-input">8.</td>
                            <td class="value-input">Eko Haddy</td>
                            <td class="value-input">UTS</td>
                            <td class="value-input"> <input type="text" name="" class="border-custom"> </td>
                        </tr>
                    </table> <br />
                </div>

                <div class="submit-input-value">
                    <button class="waves-effect waves-light btn custom value modal-trigger custom-save-value" data-target="modal2">
                        SIMPAN NILAI
                    </button>
                </div>
    </div>
</div>