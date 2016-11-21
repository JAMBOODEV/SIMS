@extends('layouts.app')

@section('navbar')
    
    <body class="background-custom-siswa">

    <nav class="custom-nav">
        <div class="container nav-wrapper">
            <a href="#" class="brand-logo ">Sims</a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="" href="beranda">Beranda</a></li>
                <li><a class="active-line" href="elearning">E-learning</a></li>
                <li><a class="" href="nilai">Nilai</a></li>
                <li><a class="" href="pembayaran">Pembayaran</a></li>
                <li><a class="" href="info">Info</a></li>
                <li><a class="" href="forum">Forum</a></li>
                <li><a class="" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>

            <ul id="slide-out" class="side-nav">
                <li>
                    <div class="userView">
                        <div class="background">
                            <img src="../img/office.jpg">
                        </div>
                        <a href="#!user"><img class="circle" src="../img/avatar_siswi.jpg"></a>
                        <a href="#!name"><span class="white-text name">John Doe</span></a>
                        <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                </li>
                <li><a class="" href="beranda">Beranda</a></li>
                <li><a class="" href="elearning">E-learning</a></li>
                <li><a class="" href="nilai">Nilai</a></li>
                <li><a class="active-line" href="pembayaran">Pembayaran</a></li>
                <li><a class="" href="info">Info</a></li>
                <li><a class="" target="_blank" href="http://localhost/SIMS/forum/">Forum</a></li>
                <li><a class="" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </nav>

    <nav class="nav-custom-learning">
        <div class="container">
            <div class="row">
                <div class="col s9 custom-tittle-learning">
                    <div class="header-tittle-learning">
                        E-Learning Rekayasa Perangkat Lunak (RPL) <br />
                    </div>
                    <div class="header-tittle-learning-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit.
                    </div>
                </div>
                <div class="col s3 custom-image-learning-1">
                    <div class="content-image-learning-header">
                        Nilai Minimum
                    </div>
                    <div class="name-tittle-learning">
                        75
                    </div>
                </div>
                <div class="col s3 custom-image-learning-2">
                    <div class="content-image-learning-header">
                        Waktu / Menit
                    </div>
                    <div class="name-tittle-learning">
                        60
                    </div>
                </div>
            </div>
        </div>  
    </nav>
    
@endsection


@section('content')
    <div class="container">
        <div class="row custom-layout-learning">

            <div class="col s9">
                <div class="content-1">

                    <div class="content">
                        <h1>Basic Demo</h1>

                        <script>
                            $(function ()
                            {
                                $("#wizard").steps({
                                    headerTag: "h2",
                                    bodyTag: "section",
                                    transitionEffect: "slideLeft",
                                    stepsOrientation: "vertical"
                                });
                            });
                        </script>

                        <div id="wizard">
                            <h2>First Step</h2>
                            <section>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis, 
                                    sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. 
                                    Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                            </section>

                            <h2 style="display: none; ">Second Step</h2>
                            <section style="display: none; ">
                                <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                                    In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                                    dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                                    In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                                    Donec non pulvinar urna. Aliquam id velit lacus.</p>
                            </section>

                            <h2 style="display: none; ">Third Step</h2>
                            <section style="display: none; ">
                                <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                                    pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                                    venenatis.</p>
                            </section>

                            <h2 style="display: none; ">Forth Step</h2>
                            <section style="display: none; ">
                                <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                                    Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                            </section>
                        </div>
                    </div>

                </div>
            </div>


        <div class="col s3">
            <div class="content-2">
                <div class="content-image-learning">
                    <img src="../img/avatar_siswi.jpg" class="image-siswa-learning">
                </div>
                <div style="text-align: justify;">
                    <p> </p><hr> <p></p>
                    Lorem ipsum dolor sit amet dolor sit.
                    <p> </p><hr> <p></p>
                </div>
                <div class="row">
                    <div class="col s9">
                        <div class="#">
                            Pemograman Web
                        </div>
                    </div>
                    <div class="col s3 custom-question-download">
                        <div>
                            <i class="material-icons">file_download</i>
                        </div>
                    </div>
                    <div class="col s9">
                        <div class="#">
                            Matematika
                        </div>
                    </div>
                    <div class="col s3 custom-question-download">
                        <div>
                            <i class="material-icons">file_download</i>
                        </div>
                    </div>
                    <div class="col s9">
                        <div class="#">
                            Bahasa Indonesia
                        </div>
                    </div>

                    <div class="col s3 custom-question-download">
                        <div>
                            <i class="material-icons">file_download</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection