@extends('layouts.appGuru')

@section('content')

<div class="row">
    <div class="container">
        <div class="row header-question">

            <div class="col s12">
                <div class="content-1">
                    <div class="row value-teacher">

                        <div class="col s6">
                            <div class="content-1 custom-value">
                                <div class="title-learning">
                                    Input Nilai
                                </div>
                                <div class="content-elarning-teacher">
                                <a href="/guru/input-nilai">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="content-1 custom-value">
                                <div class="title-learning">
                                    Lihat Nilai
                                </div>
                                <div class="content-elarning-teacher">
                                <a href="/guru/lihat-nilai">
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