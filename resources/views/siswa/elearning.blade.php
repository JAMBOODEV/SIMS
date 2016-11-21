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

	<section id="elearningUtama">
		<div class="row">
			<div class="row">
				<div class="content">
					<div class="col s12 l8">
						<div class="col l12">
							<div class="card-sims1">
								<h2 class="head-pannel">Sedang Berlangsung</h2>
								<div class="row">
									<div class="col l6 reset-col">
										<div class="panel-sims1 color-Panel1">
											<div class="elearning-waktu">
												<span>20 Jan</span>
											</div>
											<div class="content-elearning">
												<h2>GEOGRAFI</h2>
												<p class="des-article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus libero!</p>
												<button class="set-margin waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
											</div>
											
										</div>
									</div>
									<div class="col l6 reset-col">
										<div class="panel-sims1 color-Panel2">
											<div class="elearning-waktu">
												<span>20 Jan</span>
											</div>
											<div class="content-elearning">
												<h2>GEOGRAFI</h2>
												<p class="des-article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus libero!</p>												<button class="set-margin waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
											</div>
											
										</div>
									</div>
									<div class="col l6 reset-col">
										<div class="panel-sims1 color-Panel3">
											<div class="elearning-waktu">
												<span>20 Jan</span>
											</div>
											<div class="content-elearning">
												<h2>GEOGRAFI</h2>
												<p class="des-article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus libero!</p>
												<button class="set-margin waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
											</div>
											
										</div>
									</div>
									<div class="col l6 reset-col">
										<div class="panel-sims1 color-Panel4">
											<div class="elearning-waktu">
												<span>20 Jan</span>
											</div>
											<div class="content-elearning">
												<h2>GEOGRAFI</h2>
												<p class="des-article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus libero!</p>
												<button class="set-margin waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col s12 l4">
						<div class="card-sims">
							<h2 class="head-pannel">Sudah Berlangsung</h2>
							<ul>
								<li>
									<div class="ref_nilai">
										<span class="materi left headline3">MATEMATIKA</span>
										<span class="materi_des right">90</span>
									</div>
									
									<div class="des_nilai des-article">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
								<li>
									<div class="ref_nilai">
										<span class="materi left headline3">BHS INDONESIA</span>
										<span class="materi_des right">90</span>
									</div>
									<div class="des_nilai des-article">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
								<li>
									<div class="ref_nilai">
										<span class="materi left headline3">BHS INGGRIS</span>
										<span class="materi_des right">90</span>
									</div>
									
									<div class="des_nilai des-article">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
								<li>
									<div class="ref_nilai">
										<span class="materi left headline3">KEWARGANEGARAAN</span>
										<span class="materi_des right">90</span>
									</div>
									
									<div class="des_nilai des-article">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- ====== Rangking ====== -->
					
				</div>
				
			</div>
		</div>
		
	</section>

@endsection


