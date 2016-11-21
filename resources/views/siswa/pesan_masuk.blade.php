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
                <li><a class="active-line" href="elearning">E-learning</a></li>
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

  <main>
    <header>
      <div id="nav-mobile" class="side-nav static">    
        <div id="content-side">

          <a href="#buat-Pesan" class="modal-trigger message">
            <span class="from">
              <span class="email left-align"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Kirim Pesan</span>
            </span>
           </a>
          <a href="/siswa/pesan-masuk" class="message">
            <span class="from">
              <span class="email left-align"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Pesan Masuk</span>
              <span class="from_date right-align">12</span>
            </span>
           </a>
           <a href="/siswa/pesan-terkirim" class="message">
            <span class="from">
              <span class="email left-align"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Pesan Terkirim</span>
            </span>
          </a>         
        </div>
      </div>
    </header>
    <div  class="row nav-add">
      <div class="col l12 ">
        <div class="content-pesan">
          <div class="col s12 l12">
            <div class="card-sims1">
              <div class="row">
              <br>
                <p class="headline3">Pesan Masuk</p>
				<div class="row">
				<div class="col s12">
				  <ul class="tabs">
				    <li class="tab col s3"><a class="active" href="#sekolah">Sekolah</a></li>
				    <li class="tab col s3"><a href="#guru">Guru</a></li>
				  </ul>
				</div>
				<div id="sekolah" class="col s12">
					<table class="bordered">
			          <tr>
			            <td width="300px;">SMPN 1 tangerang</td>
			            <td class="sub-headline4">Pemanggilan Orang Tuan</td>
			          </tr>
			          <tr>
			            <td>SMPN 1 tangerang</td>
			            <td class="sub-headline4">[Leanpub] Thanks for completing your purchase </td>
			          </tr>
			          <tr>
			            <td>SMPN 1 tangerang</td>
			            <td class="sub-headline4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere laudantium officia quam suscipit adipisci molestiae.</td>
			          </tr>
			      </table>
				</div>
				<div id="guru" class="col s12">
					<table class="bordered">
			          <tr>
			            <td width="300px;">Dra. NENENG HENI MARDALENI, M.Pd.</td>
			            <td class="sub-headline4"><a href="/siswa/detile_pesan">Bahasa Indonesia</a></td>
			          </tr>
			          <tr>
			            <td>Dra. Hj. WIRDAWATI R, M.M.Pd</td>
			            <td class="sub-headline4"><a href="/siswa/detile_pesan">bahasa Inggris</a></td>
			          </tr>
			          <tr>
			            <td>Dra. Hj. YATI ROSDAYATI, M.Pd</td>
			            <td class="sub-headline4"><a href="/siswa/detile_pesan">Quran dan Hadist</a></td>
			          </tr>
			          <tr>
			            <td>Hj. ELTIS NAZAR, S.Pd</td>
			            <td class="sub-headline4">TIK</td>
			          </tr>
			          <tr>
			            <td>DIDI SUPRIADI, S.Pd</td>
			            <td class="sub-headline4">Unduh Modul IPS</td>
			          </tr>
			          <tr>
			            <td>ARIEF SYAFIOEDIN, S.Pd</td>
			            <td class="sub-headline4">Unduh Modul IPA</td>
			          </tr>
			          <tr>
			            <td>KIKA HERIATI, S.Pd</td>
			            <td class="sub-headline4">Unduh Modul pendidikan Pancasila</td>
			          </tr>
			          <tr>
			            <td>FRANSISCA HENDRY, M.Pd</td>
			            <td class="sub-headline4">Unduh Modul Matematika</td>
			          </tr>
			      </table>
				</div>
				</div>
                
              </div>
            </div>
            
          </div>
          </div>
      </div>
      
    </div>
  </main>

<div id="buat-Pesan" class="modal bottom-sheet  balas">
    <div class="modal-content">
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Kepada</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="main-kirim-pesan" rows="15" cols="80" name="pesan">asda</textarea>
          
        </div>
      </div>
    </form>
  </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

@endsection

