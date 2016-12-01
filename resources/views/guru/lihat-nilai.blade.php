@extends('layouts.appGuru')

@section('content')

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
	function filterGlobal () {
		$('#example').DataTable().search(
			$('#global_filter').val(),
			$('#global_regex').prop('checked'),
			$('#global_smart').prop('checked')
			).draw();
	}

	function filterColumn ( i ) {
		$('#example').DataTable().column( i ).search(
			$('#col'+i+'_filter').val(),
			$('#col'+i+'_regex').prop('checked'),
			$('#col'+i+'_smart').prop('checked')
			).draw();
	}

	$(document).ready(function() {
		$('#example').DataTable();

		$('input.global_filter').on( 'keyup click', function () {
			filterGlobal();
		} );

		$('input.column_filter').on( 'keyup click', function () {
			filterColumn( $(this).parents('tr').attr('data-column') );
		} );
	} );
</script>

<style>
	select {
	    background-color: rgba(255,255,255,0.9);
	    width: 38%;
	    padding: 7px;
	    border: 1px solid #f2f2f2;
	    border-radius: 2px;
	    height: 2rem;
	}
</style>

<div class="row">
    <div class="container">
        <div class="row header-question">
            <div col s12>
                <div class="content-1">
                	<div class="title-question">
                        Lihat Nilai Siswa 
                    </div> <br />

	
				    <table id="example" class="display" cellspacing="0" width="100%">
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
				                <td>Achmad Rizky</td>
				                <td style="text-align: center;">2011141451</td>
				                <td style="text-align: center;">Bahasa Indonesia</td>
				                <td style="text-align: center;">XII A</td>
				                <td style="text-align: center;">90</td>
				                <td style="text-align: center;">80</td>
				                <td>
				                	<center>
				                		<a class="click"> <i class="fa fa-ellipsis-v"></i> </a>
				                		<div class="show">
				                			Delete
				                		</div>
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