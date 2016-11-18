@extends('layouts.app')
@section('navbar')

	<body class="background-custom-siswa">
	
	<nav>
		<div class="container nav-wrapper">
			<a href="/siswa/beranda" class="brand-logo ">Sims</a>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down custom">
				<li><a class="active-line" href="beranda">Beranda</a></li>
				<li><a class="" href="nilai">Nilai</a></li>
				<li><a class="" href="elearning">E-learning</a></li>
				<li>
				<ul class="nav">
				  	<li class="button-dropdown" style="background-color: #0099FF;">
				    	<a href="javascript:void(0)" class="dropdown-toggle" style="background-color: #0099FF; color: #fff;">
				      	Informasi &nbsp; <i class="fa fa-chevron-down"></i>
				    	</a>
				    	<ul class="dropdown-menu">
					      	<li> <a href="/siswa/pesan-masuk"> Pesan  </a>  </li>
					      	<li> <a href="#!"> Berita </a>  </li>
					      	<li> <a href="#!"> Unduh  </a>  </li>
						</ul>
				  	</li>
				</ul>
				</li>
				<li><a class="" href="forum">Forum</a></li>
				<li>
				<ul class="nav">
				  	<li class="button-dropdown" style="background-color: #0099FF;">
				    	<a href="javascript:void(0)" class="dropdown-toggle" style="background-color: #0099FF; color: #fff;">
				      	<i class="fa fa-gear"></i>
				    	</a>
				    	<ul class="dropdown-menu" style="margin-left: -90px;">
					      	<li> <a href="#!" style="width: 133px;"> Ubah Profil </a> </li>
					      	<li> <a href="#!" style="width: 133px;"> Keluar </a> </li>
						</ul>
				  	</li>
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

@endsection

@section('content')

	<section>
		<div class="row">
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
			<div class="row">
				<div class="container content-guru">
				<div class="col s12 l8">
					<div class="card-sims custom-teacher">
						<div class="row custom-content-guru">
							<div class="col s11">
								<p class="sub-headline3 head-margin"> BUDI DASAH WASIH
							</div>
							<div class="col s1 custom-content-guru">
								<i class="fa fa-edit"></i>
							</div>
						</div>

						<div class="content-text-teacher-1">
							<p>
								Universitas Negeri Jakarta (UNJ), Minggu-Selasa (20-29/11/16) akan menyelenggarakan Pendidikan dan Latihan Profesi Guru (PLPG), tahap V, UNJ tahun 2016. <br /> <br />

								PLPG merupakan salah satu dari program sertifikasi guru. Sertifikasi guru, merupakan amanat dari upaya peningkatan mutu guru, sebagai implementasi Undang-undang Nomor 14 tahun 2015 tentang Guru dan Dosen, dan Peraturan Pemerintah Nomor 74 tahun 2009 tentang Guru. <br /> <br />

                                Pada PLPG Tahap V, diselenggarakan di Graha Dinar, Graha Insan Cita, dan Wisma Kinasih. Berikut ini Daftar Peserta dan Undangan PLPG Tahap V UNJ tahun 2016: <br /> <br />

                                PLPG merupakan salah satu dari program sertifikasi guru. Sertifikasi guru, merupakan amanat dari upaya peningkatan mutu guru, sebagai implementasi Undang-undang Nomor 14 tahun 2015 tentang Guru dan Dosen, dan Peraturan Pemerintah Nomor 74 tahun 2009 tentang Guru. <br /> <br />

							</p>
						</div>

						<div class="content-text-teacher-1">
							<div class="content-text-teacher-1-subbab">
								Matematika, Bahasa Inggris, Kepala Sekolah
							</div>
						</div>
					
					</div>
				</div>
		
				<div class="col s12 l4">
					<div class="card-sims">
						<div class="top-rank">
							<p class="sub-headline3 head-margin">Kalender</p>
							<div class="collection">
							  <div class="cal1"></div>							   
						  </div>
						</div>	
					</div>
				</div>

				<div class="col s12">
					<div class="card-sims">

						<div class="row custom-content-guru">
							<div class="col s11">
								<p class="sub-headline3 head-margin"> Proses E-Learning
							</div>
							<div class="line-title-learning"> &nbsp; </div>
						</div> 

						<div class="table-teacher-beranda">
							<table class="highlight">
				              <thead>
				                <tr>
				                    <th class="price custom-lesson">Mata Pelajaran</th>
				                    <th class="price custom-title">Judul</th>
				                    <th class="price custom-progress">Progress</th>
				                    <th class="price custom-followed">Diikuti</th>
				                    <th class="price custom-status">Status</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>Matematika</td>
				                  <td>Fungsi Matematika dan Algoritma</td>
				                  <td class="progress-bar">
				                  	<div class="w3-progress-container w3-light-blue custom-proccess">
				                        <div class="w3-progressbar w3-blue custom-proccess" style="width:75%;">
				                          <div class="w3-center w3-text-white">35%</div>
				                        </div>
				                    </div>
				                  </td>
				                  <td>150 Siswa</td>
				                  <td> 
				                  	Berlangsung 
				                  	<a class="dot_icon4-custom-position"><span class="dot_icon4"></span></a>				                  	
				                  </td>
				                </tr>

				                <tr>
				                  <td>Kalkulus</td>
				                  <td>Matrik</td>
				                  <td class="progress-bar">
				                  	<div class="w3-progress-container w3-light-blue custom-proccess">
				                        <div class="w3-progressbar w3-blue custom-proccess" style="width:99%">
				                          <div class="w3-center w3-text-white">99%</div>
				                        </div>
				                    </div>
				                  </td>
				                  <td>120 Siswa</td>
				                  <td> 
				                  	Berlangsung 
				                  	<a class="dot_icon4-custom-position"><span class="dot_icon4"></span></a>				                  	
				                  </td>
				                </tr>

				                <tr>
				                  <td>Matematika</td>
				                  <td>Pengertian Matematika</td>
				                  <td class="progress-bar">
				                    <div class="w3-progress-container w3-light-blue custom-proccess">
				                        <div class="w3-progressbar w3-blue custom-proccess" style="width:23%">
				                          <div class="w3-center w3-text-white">23%</div>
				                        </div>
				                    </div>
				                  </td>
				                  <td>150 Siswa</td>
				                  <td> 
				                  	Berlangsung 
				                  	<a class="dot_icon4-custom-position"><span class="dot_icon4"></span></a>				                  	
				                  </td>
				                </tr>

				                <tr>
				                  <td>Kalkulus</td>
				                  <td>Matrik</td>
				                  <td class="progress-bar">
				                  	<div class="w3-progress-container w3-light-blue custom-proccess">
				                        <div class="w3-progressbar w3-blue custom-proccess" style="width:100%; background-color: #02375C!important;">

				                          <div class="w3-center w3-text-white">100%</div>
				                        </div>
				                    </div>
				                  </td>
				                  <td>120 Siswa</td>
				                  <td> 
				                  	Selesai
				                  	<a class="dot_icon5-custom-position-finish"><span class="dot_icon5"></span></a>				
				                  </td>
				                </tr>
				                
				              </tbody>
				            </table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection