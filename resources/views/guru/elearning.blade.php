@extends('layouts.appGuru')

@section('content')
<div class="row">
    <div class="row">
        <div class="container content-guru">

           <div class="col s6">
                <div class="content-1 custom-height">
                    <div class="title-learning">
                        Pilih Soal
                    </div>
                    
                    <div class="input-field col s12 custom-study">
                        <select>
                          <option value="" disabled selected>Mata Pelajaran</option>
                          <option value="1">Bahasa Indonesia</option>
                          <option value="2">Matematika</option>
                          <option value="3">PPKN</option>
                        </select>
                    </div>

                    <div class="col s12">
                        <div class="button-next-study">
                          <button class="waves-effect waves-light btn color-study">
                            <a href="input-soal" style="color:#fff;">Lanjutkan</a> 
                          </button>      
                        </div>
                    </div>

                  <script>
                      $(document).ready(function() {
                        $('select').material_select();
                      });
                  </script>

                </div>
            </div>
                   
            <div class="col s6">
                <div class="content-1 custom-height">
                    <div class="title-learning">
                        Lorem Ipsum
                    </div>
                </div>
            </div>

            <div class="col s12">
                    <div class="card-sims">

                        <div class="row custom-content-guru">
                            <div class="col s11">
                                <p class="sub-headline3 head-margin"> E-Learning Anda
                                </p></div>
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
                                            <td>Bahasa Indonesia</td>
                                            <td>Bahasa Yang Baik</td>
                                            <td class="progress-bar">
                                                <div class="w3-progress-container w3-light-blue custom-proccess">
                                                    <div class="w3-progressbar w3-blue custom-proccess" style="width:0%">
                                                        <div class="w3-center w3-text-white">0%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td> 
                                                Pending
                                                <a class="dot_icon5-custom-position-pending"><span class="dot_icon5"></span></a>             
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
                                                <a class="dot_icon5-custom-position-finish"><span class="dot_icon6"></span></a>             
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