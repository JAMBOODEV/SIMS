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
  
    <!-- START CLNDR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="../js/clndr.js"></script>
    <!-- END CLNDR -->

    <!-- chart.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
    
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