@extends('layouts.appAdmin')

@section('content')

<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2> Akademik <small>SMK Daarul Fataa</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="tables_dynamic.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="tables_dynamic.html#">Settings 1</a>
								</li>
								<li><a href="tables_dynamic.html#">Settings 2</a>
								</li>
							</ul>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<div class="" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Angkatan</a>
							</li>
							<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tingkat</a>
							</li>
							<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tahun Ajaran</a>
							</li>
							<li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Semester</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

								<table id="datatable" class="table table-striped table-bordered">
			                      <thead>
			                        <tr>
			                          <th>No</th>
			                          <th>Angkatan</th>
			                          <th>Keterangan</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>

			                      <tbody>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Garrett Winters</td>
			                          <td>Accountant</td>
			                          <td>Tokyo</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Ashton Cox</td>
			                          <td>Junior Technical Author</td>
			                          <td>San Francisco</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Cedric Kelly</td>
			                          <td>Senior Javascript Developer</td>
			                          <td>Edinburgh</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Airi Satou</td>
			                          <td>Accountant</td>
			                          <td>Tokyo</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Brielle Williamson</td>
			                          <td>Integration Specialist</td>
			                          <td>New York</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Herrod Chandler</td>
			                          <td>Sales Assistant</td>
			                          <td>San Francisco</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Rhona Davidson</td>
			                          <td>Integration Specialist</td>
			                          <td>Tokyo</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Colleen Hurst</td>
			                          <td>Javascript Developer</td>
			                          <td>San Francisco</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Sonya Frost</td>
			                          <td>Software Engineer</td>
			                          <td>Edinburgh</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Jena Gaines</td>
			                          <td>Office Manager</td>
			                          <td>London</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Quinn Flynn</td>
			                          <td>Support Lead</td>
			                          <td>Edinburgh</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                        <tr>
			                          <td>Charde Marshall</td>
			                          <td>Regional Director</td>
			                          <td>San Francisco</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                          
			                        </tr>
			                      </tbody>
			                    </table>
								
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
								<table id="datatable" class="table table-striped table-bordered">
			                      <thead>
			                        <tr>
			                          <th>No</th>
			                          <th>Tingkat</th>
			                          <th>Keterangan</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>

			                      <tbody>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Garrett Winters</td>
			                          <td>Tokyo</td>
			                          <td>63</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Ashton Cox</td>
			                          <td>San Francisco</td>
			                          <td>66</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Cedric Kelly</td>
			                          <td>Edinburgh</td>
			                          <td>22</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Airi Satou</td>
			                          <td>Tokyo</td>
			                          <td>33</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Brielle Williamson</td>
			                          <td>New York</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Herrod Chandler</td>
			                          <td>San Francisco</td>
			                          <td>59</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Rhona Davidson</td>
			                          <td>Tokyo</td>
			                          <td>2010/10/14</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Colleen Hurst</td>
			                          <td>San Francisco</td>
			                          <td>39</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Sonya Frost</td>
			                          <td>Edinburgh</td>
			                          <td>23</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Jena Gaines</td>
			                          <td>London</td>
			                          <td>30</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Quinn Flynn</td>
			                          <td>Edinburgh</td>
			                          <td>2013/03/03</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Charde Marshall</td>
			                          <td>San Francisco</td>
			                          <td>36</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                      </tbody>
			                    </table>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
								<table id="datatable" class="table table-striped table-bordered">
			                      <thead>
			                        <tr>
			                          <th>No</th>
			                          <th>Tahun Ajaran</th>
			                          <th>Mulai</th>
			                          <th>Age</th>
			                          <th>Akhir</th>
			                          <th>Keterangan</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>

			                      <tbody>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                      </tbody>
			                    </table>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
								<table id="datatable" class="table table-striped table-bordered">
			                      <thead>
			                        <tr>
			                          <th>No</th>
			                          <th>Tahun Ajaran</th>
			                          <th>Mulai</th>
			                          <th>Age</th>
			                          <th>Akhir</th>
			                          <th>Keterangan</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>

			                      <tbody>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                        <tr>
			                          <td>Tiger Nixon</td>
			                          <td>Tiger Nixon</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>Edinburgh</td>
			                          <td>61</td>
			                          <td>
			                          	<div class="btn-group" style="display: block;">
			                          		<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                          			<center><span class="caret"></span></center>		
			                          		<ul class="dropdown-menu" role="menu">
			                          			<li><a href="#">Edit</a>
			                          			</li>
			                          			<li><a href="#">Hapus</a>
			                          			</li>
			                          		</ul>
			                          	</div>
			                          </td>
			                        </tr>
			                      </tbody>
			                    </table>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>

</div>

@endsection