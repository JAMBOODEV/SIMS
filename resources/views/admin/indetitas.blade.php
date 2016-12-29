@extends('layouts.appAdmin')

@section('content')
	
	<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-4">
				<div class="x_panel height">
					<div class="x_title">
	                  <h2>Logo Sekolah</h2>
	                  <div class="clearfix"></div>
	                </div>

					<div class="position-logo">
		                <div class="x_panel-subbab">
	                  		<img src="../img/smk.png" alt="" class="logo-school">
	                	</div>

	                	<div class="x_panel-subbab unggah">
	                		<button class="btn btn-success"> <i class="fa fa-edit"></i> Unggah Foto </button>	
	                	</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="x_panel height">
					<div class="x_title">
	                  <h2>Profile</h2>
	                  <div class="clearfix"></div>
	                </div>
					
					<div class="row">
						<div class="col-md-12">
							<label> Nama Sekolah </label>
							<div class="name-school"> SMK Daarul Fataa </div>

							<label> Email </label>
							<div class="email-school"> daarulfataa@gmail.com </div>

							<label> Telephone </label>
							<div class="call-school"> 081201013451 </div>

							<label> Fax </label>
							<div class="fax-school"> 02199912347 </div>

							<!-- <label> Alamat </label>
							<div class="address-school">
								Jalan Flamboyan Raya No. 7, Tebet, RT.5/RW.10, Menteng Dalam, Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870
							</div> -->

						</div>

						<div class="button-profile">
                			<button class="btn btn-success"> <i class="fa fa-edit"></i> Edit Profile </button>	
                		</div>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="x_panel height">
					<div class="x_title">
	                  <h2>Lorem Ipsum</h2>
	                  <div class="clearfix"></div>
	                </div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="x_panel height">
					<div class="x_title">
	                  <h2>Lorem Ipsum</h2>
	                  <div class="clearfix"></div>
	                </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="x_panel height">
					<div class="x_title">
	                  <h2>Lorem Ipsum</h2>
	                  <div class="clearfix"></div>
	                </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="x_panel height">
					<div class="x_title">
	                  <h2>Lorem Ipsum</h2>
	                  <div class="clearfix"></div>
	                </div>
				</div>
			</div>
		</div>
	</div>


@endsection