@extends('layouts.appGuru')

@section('content')
<div class="row">
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
								<div id="mini-clndr">
									<script id="mini-clndr-template" type="text/template">

										<div class="controls">
											<div class="clndr-previous-button">&lsaquo;</div>
											<div class="month"><%= month %> <%= year %></div>
											<div class="clndr-next-button">&rsaquo;</div>
										</div>

										<div class="days-container">
											<div class="days">
												<div class="headers">
													<% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
												</div>
												<% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
											</div>

											<div class="events">
												<div class="headers">
													<div class="x-button">x</div>
													<div class="event-header">EVENTS</div>
												</div>
												<div class="events-list">
													<% _.each(eventsThisMonth, function(event) { %>
													<div class="event">
														<a href=" <%= event.link %>"><%= moment(event.date).format('MMMM Do') %>: <%= event.title %></a>
													</div>
													<% }); %>
												</div>
											</div>
										</div>
									</script>
								</div>
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
@endsection