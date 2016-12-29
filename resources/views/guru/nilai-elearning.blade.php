@extends('layouts.appGuru')

@section('content')

<div class="row">
    <div class="container">
        <div class="row header-question">
            <div col s12>
                <div class="content-1">
                	<div class="title-question">
                        Lihat Nilai E-Learning  
                    </div>

                    <div class="row">
                    	<div class="col s3">
                    		<div class="input-field col s9 custom-value">
		                        <select>
		                          <option value="" disabled selected> Kelas </option>
		                          <option value="1">VII A</option>
		                          <option value="1">VI B</option>
		                          <option value="1">VIII C</option>
		                        </select>
                    		</div>
                    	</div>

                    	<div class="col s3">
                    		<div class="input-field col s9 custom-value">
		                        <select>
		                          <option value="" disabled selected>Mata Pelajaran</option>
		                          <option value="1">Bahasa Indonesia</option>
		                          <option value="2">Matematika</option>
		                          <option value="3">PPKN</option>
		                        </select>
                    		</div>
                    	</div>

                    	<div class="col s6">
                    		<div class="input-position-modal">
                    			<button class="waves-effect waves-light btn custom value modal-trigger" data-target="modal1">
                    				Input Nilai
                    			</button>
                    		</div>
                    	</div>

                    </div>

                  	<script>
	                    $(document).ready(function() {
	                    	$('select').material_select();
	                    });
                  	</script>

				    <table class="striped">
				        <thead>
				            <tr>
				                <th> NAMA </th>
				                <th> <center> NIS </center></th>
				                <th> <center> MATA PELAJARAN </center></th>
				                <th> <center> KELAS </center></th>
				                <th> <center> NILAI </center></th>
				                <th> <center> RATA-RATA NILAI </center></th>
				                <th> <center> Aksi </center></th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Dani Sofian</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a class="click"> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Lala Anatobi</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Krisna Singgih</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Wanatobi Silalhi</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Zein Latupono</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
				                </td>
				            </tr>
				            <tr>
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a href=""> <i class="fa fa-ellipsis-v"></i> </a>
				                	</center>
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