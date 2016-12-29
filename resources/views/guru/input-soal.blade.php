@extends('layouts.appGuru')

@section('content')
   
<div class="row">
    <div class="container">
        <div class="row header-question">

            <div class="col s12">
                <div class="content-1">
                    <div class="title-question">
                        INPUT SOAL DAN JAWABAN
                    </div>

                    <div class="header-create-teacher">
                        <div class="input-field col s12 custom-study">
                            <select>
                              <option value="" disabled selected> Mata Pelajaran </option>
                              <option value="1">Bahasa Indonesia</option>
                              <option value="2">Matematika</option>
                              <option value="3">PPKN</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" name="" placeholder="Judul Mata Pelajaran E-Learning">
                        </div>
                        <div>
                            <input type="date" name="" class="datepicker" placeholder="Date">
                        </div>
                        <div>
                            <input type="text" name="" placeholder="Durasi">
                        </div>
                        <div>
                            <!-- <input type="file" name="" placeholder="File"> -->
                            <div class="file-field input-field">
                                <div class="btn custom-upload">
                                    <span class="button-file-input">Upload</span>
                                    <input type="file" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Data Soal dan Jawaban">
                                </div>
                            </div>
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

                        <script>
          
                          $(document).ready(function() {
                            $('select').material_select();
                            
                            $('.datepicker').pickadate({
                                selectMonths: true, // Creates a dropdown to control month
                                selectYears: 15 // Creates a dropdown of 15 years to control year
                            });
                          });

                      </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
  
@endsection