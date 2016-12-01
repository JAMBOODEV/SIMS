@extends('layouts.appGuru')

@section('content')
<div class="row">
    <div class="row">
        <div class="container content-guru">
            <div class="col s12">
                <div class="card-sims">

                    <div class="row custom-content-guru">
                        <div class="row elearning-teacher">

                            <div class="col s4">
                                <div class="content-1 custom-height">
                                    <div class="title-learning">
                                        Input Soal
                                    </div>
                                    <div class="content-elarning-teacher">
                                        <a href="/guru/input-soal">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="content-1 custom-height">
                                    <div class="title-learning">
                                        Input Jawaban
                                    </div>
                                    <div class="content-elarning-teacher">
                                        <a href="/guru/input-jawaban">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="content-1 custom-height">
                                    <div class="title-learning">
                                        Lihat Nilai
                                    </div>
                                    <div class="content-elarning-teacher">
                                        <a href="/guru/nilai-elearning">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                        </a>
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