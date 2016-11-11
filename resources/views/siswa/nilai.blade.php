@extends('layouts.app')

@section('navbar')

    <body class="background-custom-siswa">

    <nav class="custom-nav-siswa-payment">
        <div class="container nav-wrapper">
            <a href="#" class="brand-logo ">Sims</a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="" href="beranda">Beranda</a></li>
                <li><a class="" href="elearning">E-learning</a></li>
                <li><a class="active-line" href="nilai">Nilai</a></li>
                <li><a class="" href="pembayaran">Pembayaran</a></li>
                <li><a class="" href="info">Info</a></li>
                <li><a class="" href="forum">Forum</a></li>
                <li><a class="" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>


        </div>
    </nav>

    <nav class="nav-custom-nilai">
        <div class="container">
            <div class="row">
                <div class="col s12 custom-tittle-learning">
                    <div class="header-tittle-nilai">
                        Rapat pengumuman kenaikan kelas akan dilaksanakan pada hari Selasa
                    </div>
                </div>
            </div>
        </div>  
    </nav>

@endsection

@section('content')

    <div class="container">
        <div class="row custom-layout-learning">
            <div class="col s12">
                <div class="content-1">
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Kode</th>
                                <th data-field="name">Mata Pelajaran</th>
                                <th data-field="price">Guru</th>
                                <th data-field="price">Nila Min</th>
                                <th data-field="price">Nilai</th>
                                <th data-field="price">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="position: absolute;">BO9001</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row" style="top: -12px; position: relative;">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value" style="position: relative; top: -8px;">
                                            <div class="col s10" style="margin-bottom: 8px;">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td style="position: absolute;">Krisna Singgih</td>
                                <td>Krisna Singgih</td>
                                <td>Krisna Singgih</td>
                                <td>Krisna Singgih</td>
                                
                            </tr>
                            <tr>
                                <td>323ABC</td>
                                <td>
                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                            <div class="col s10">
                                                3. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                4. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                            <div class="col s10">
                                                5. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                6. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>Krisna Singgih</td>
                                <td>50</td>
                                <td>90</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>123APC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Sukron Makmun</td>
                                <td>60</td>
                                <td>30</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>193OBC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Muhammad Wisnu</td>
                                <td>80</td>
                                <td>70</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>323ABC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Krisna Singgih</td>
                                <td>50</td>
                                <td>90</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>123APC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Sukron Makmun</td>
                                <td>60</td>
                                <td>30</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>193OBC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Muhammad Wisnu</td>
                                <td>80</td>
                                <td>70</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>123APC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Sukron Makmun</td>
                                <td>60</td>
                                <td>30</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>193OBC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Muhammad Wisnu</td>
                                <td>80</td>
                                <td>70</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>123APC</td>
                                <td>
                                    
                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Sukron Makmun</td>
                                <td>60</td>
                                <td>30</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>193OBC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Muhammad Wisnu</td>
                                <td>80</td>
                                <td>70</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>123APC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Sukron Makmun</td>
                                <td>60</td>
                                <td>30</td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td>193OBC</td>
                                <td>

                                    <div class="collapse">
                                        <h6>
                                            <div class="row">
                                                <div class="col s7" style="position: relative; top: 11px;">
                                                    Matematika        
                                                </div>
                                                <div class="col s2" style="position: relative; top: 11px;">
                                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                </div>
                                            </div> 
                                        </h6>

                                        <div class="row custom-value">
                                            <div class="col s10">
                                                1. Ulangan Harian
                                            </div>
                                            <div class="col s2">
                                                90
                                            </div>
                                            <div class="col s10">
                                                2. UTS
                                            </div>
                                            <div class="col s2">
                                                70
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Muhammad Wisnu</td>
                                <td>80</td>
                                <td>70</td>
                                <td>A</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    
@endsection


