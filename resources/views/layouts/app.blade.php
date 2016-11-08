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
    <link type="text/css" rel="stylesheet" href="../css/line-progress.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/responsive.css">
    <!--Let browser know website is optimized for mobile-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Scripts -->
    <script>
    window.SIMS = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
    </script>
  </head>
  <body>
    
    <!-- Navbar -->
    @yield('navbar')
    <!-- Page Content goes here -->
    @yield('content')
    
    @yield('script')
    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
  
    <script type="text/javaScript">
    (function($){
      $(function(){
        $('.button-collapse').sideNav();
        $('.modal-trigger').leanModal();
      }); // end of document ready
    })(jQuery);
    </script>
  
  </body>
</html>
<!-- Modal Structure -->
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
    <a href="#!" class="btn modal-action modal-close waves-effect waves-green btn-flat" style="background-color:#0099ff">Agree</a>
  </div>
</div>