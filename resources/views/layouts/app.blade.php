<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIMS</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/font-awesome.css" media="screen,projection"/>
    
    {{-- css step learning --}}
    <link rel="stylesheet" href="../css/step/normalize.css">
    <link rel="stylesheet" href="../css/step/css/main.css">
    <link rel="stylesheet" href="../css/step/css/jquery.steps.css">
    
    <script src="../js/jquery.min.js"> </script>
    <!-- cdn tinymce.com 4  tinymce.min.js -->
    <script src="../js/tinymce.dev.js"></script><!-- 
    <script src="../js/plugins/table/plugin.dev.js"></script>
    <script src="../js/plugins/paste/plugin.dev.js"></script>
    <script src="../js/plugins/spellchecker/plugin.dev.js"></script> -->

    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/clndr.css">
    
    <!--Let browser know website is optimized for mobile-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Scripts -->
    <script>
    
    window.SIMS = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>

    
    </script>
    
    <style>
       

    </style>
  </head>
  <body>
    
    <!-- Navbar -->
    @yield('navbar')
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
    <script src="../js/step/jquery.steps.js"></script>
    <script src="../js/step/jquery.steps.min.js"></script>

    {{-- STEP LEARNING --}}
    <script src="../js/step/lib/modernizr-2.6.2.min.js"></script>
    <script src="../js/step/lib/jquery-1.9.1.min.js"></script>
    <script src="../js/step/lib/jquery.cookie-1.3.1.js"></script>
    <script src="../js/step/build/jquery.steps.js"></script>
    <!-- END CLNDR -->

    <!-- chart.JS -->
    <script src="../js/Chart.bundle.min.js"></script>
    
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
  
    <script type="text/javaScript">


    </script>
  
  </body>
</html>

<div id="modal1" class="modal">
    <div class="modal-header">
        <h2>Geografi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, eum.</p>
    </div>
    
    <div class="modal-content">
        <div class="col m12">
            <table class="modal-table">
                <tr>
                    <td style="width: 170px">Kode</td>
                    <td style="width: 10px">:</td>
                    <td>2011142164</td>
                </tr>
                <tr>
                    <td>Guru</td>
                    <td>:</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                </tr>
                <tr>
                    <td>Nilai Minimum</td>
                    <td>:</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>Waktu Pengerjaan</td>
                    <td>:</td>
                    <td>60 menit</td>
                </tr>
            </table>
        </div>
        <div class="content_modal">

        </div>
    </div>

    <div class="modal-footer">
    <a href="soal" class="btn modal-action modal-close waves-effect waves-green btn-flat center-button custom-modal-elearning">Agree</a>
    </div>

</div>