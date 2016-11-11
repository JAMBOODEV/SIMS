@extends('layouts.app')

@section('navbar')

	<body class="background-custom-siswa">

	<nav class="custom-nav">
		<div class="container nav-wrapper">
			<a href="#" class="brand-logo ">Sims</a>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a class="" href="beranda">Beranda</a></li>
				<li><a class="active-line" href="elearning">E-learning</a></li>
				<li><a class="" href="nilai">Nilai</a></li>
				<li><a class="" href="pembayaran">Pembayaran</a></li>
				<li><a class="" href="info">Info</a></li>
				<li><a class="" target="_blank" href="http://localhost/SIMS/forum/">Forum</a></li>
				<li><a class="" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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

	<section id="elearningUtama">
		<div class="row">
			<div id="subheader" >
				<div class="elearningUtama">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat dolorem in laboriosam.</p>
					
				</div>
			</div>
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
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus provident! Officiis, libero!</p>
												<button class="waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
												
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
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus provident! Officiis, libero!</p>
												<button class="waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
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
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus provident! Officiis, libero!</p>
												<button class="waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
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
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non facilis tenetur dolorum perspiciatis amet odio rem voluptate odit quo quidem officia placeat, nulla, fuga, itaque voluptates accusamus provident! Officiis, libero!</p>
												<button class="waves-effect waves-light btn modal-trigger grey lighten-5" data-target="modal1">Test</button>
												
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
										<span class="materi left">MATEMATIKA</span>
										<span class="materi_des right">90</span>
									</div>
									
									<div class="des_nilai">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
								<li>
									<div class="ref_nilai">
										<span class="materi left">BHS INDONESIA</span>
										<span class="materi_des right">90</span>
									</div>
									<div class="des_nilai">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
								<li>
									<div class="ref_nilai">
										<span class="materi left">BHS INGGRIS</span>
										<span class="materi_des right">90</span>
									</div>
									
									<div class="des_nilai">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quas.
									</div>
								</li>
								<li>
									<div class="ref_nilai">
										<span class="materi left">KEWARGANEGARAAN</span>
										<span class="materi_des right">90</span>
									</div>
									
									<div class="des_nilai">
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