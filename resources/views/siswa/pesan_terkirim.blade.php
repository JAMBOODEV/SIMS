@extends('layouts.appSiswa')
@section('subHeader')
  <div id="info_sims_user">
        <div id="user_detile">
            <div class="user_info_img ">
                <img src="../img/avatar_siswi.jpg" alt="" class="circle responsive-img">
            </div>
            <div class="user_info_prof">
                <h3>Hello, Jessica !</h3>
                <p>2011141971</p>
                <ul>
                    <li>Kelas</li>
                    <li>Semester</li>
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
    <div  class="row nav-add pesan-content pesan-content">
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
            <li class="tab col s3"><a href="#teman">Teman</a></li>
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
			            <td class="sub-headline4">Bahasa Indonesia</td>
			          </tr>
			          <tr>
			            <td>Dra. Hj. WIRDAWATI R, M.M.Pd</td>
			            <td class="sub-headline4">bahasa Inggris</td>
			          </tr>
			          <tr>
			            <td>Dra. Hj. YATI ROSDAYATI, M.Pd</td>
			            <td class="sub-headline4">Quran dan Hadist</td>
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
        <div id="teman" class="col s12">
          <table class="bordered">
                <tr>
                  <td width="300px;">Dra. NENENG HENI MARDALENI, M.Pd.</td>
                  <td class="sub-headline4">Bahasa Indonesia</td>
                </tr>
                <tr>
                  <td>Dra. Hj. WIRDAWATI R, M.M.Pd</td>
                  <td class="sub-headline4">bahasa Inggris</td>
                </tr>
                <tr>
                  <td>Dra. Hj. YATI ROSDAYATI, M.Pd</td>
                  <td class="sub-headline4">Quran dan Hadist</td>
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

