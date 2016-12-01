@extends('layouts.appGuru')

@section('content')
   
<div class="row">
    <div class="container">
        <div class="row header-question">

            <div class="col s12">
                <div class="content-1">
                    <div class="title-question">
                        Input Soal
                    </div>
                    <div class="header-create-teacher">
                        <div class="select-teacher">
                            <select id="myselect">
                                <option value="" disabled="" selected="">Mata Pelajaran</option>
                                <option value="1">Bahasa Indonesia</option>
                                <option value="2">Matematka</option>
                                <option value="3">Bahasa Indonesia</option>
                            </select>
                        </div> <br />
                        <div>
                            <input type="text" name="" placeholder="Judul Mata Pelajaran E-Learning">
                        </div> <br />
                        <div>
                            <input type="file" name="" placeholder="File">
                        </div>
                        <div>
                            <div class="w3-progress-container w3-light-blue custom">
                                <div class="w3-progressbar w3-blue custom" style="width:75%">
                                    <div class="w3-center w3-text-white"> &nbsp; </div>
                                </div>
                            </div>
                            <div class="progress-create">75% Sukses</div>
                        </div>
                        <div class="button-create-teacher">
                            <button type="submit" class="waves-effect waves-light btn custom">Kirim</button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
  
@endsection