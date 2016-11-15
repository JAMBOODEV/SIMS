@extends('layouts.app')

@section('navbar')

    <body class="background-custom-siswa">

    <div class="navbar-fixed">
      <nav class="custom-nav-siswa-payment">
          <div class="container nav-wrapper">
              <a href="#" class="brand-logo ">Sims</a>
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class="" href="beranda">Beranda</a></li>
                  <li><a class="" href="elearning">E-learning</a></li>
                  <li><a class="" href="nilai">Nilai</a></li>
                  <li><a class="" href="pembayaran">Pembayaran</a></li>
                  <li><a class="active-line" href="info">Info</a></li>
                  <li><a class="" target="_blank" href="http://localhost/SIMS/forum/">Forum</a></li>
                  <li><a class="" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
              </ul>
          </div>
      </nav>
    </div>

@endsection

@section('content')

  <main>
    <header>
      <div id="nav-mobile" class="side-nav static">
        
        <div id="content-side">
          <a href="/siswa/pesan-masuk" class="message">
            <span class="from">
              <span class="email left-align"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Pesan Masuk</span>
              <span class="from_date right-align">12</span>
            </span>
           </a>
           <a href="/siswa/pesan-terkirim" class="message">
            <span class="from">
              <span class="email left-align"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Pesan Terkirim</span>
              <span class="from_date right-align">4</span>
            </span>
          </a>         
        </div>
      </div>
    </header>
    <div  class="row nav-add">
      <div class="col l12 ">
        <div class="content-pesan">
          <div class="col s12 l12">
            
            <div class="card-sims1">
              <div class="row">
                
                <div class="nav-wrapper">
                  <div class="col s12">
                    <a href="#!" class="breadcrumb">Rendi Maulana</a>
                    <a href="#!" class="breadcrumb">22 Jan, 15:30</a>
                  </div>
                </div>
                <h5>Where can i get some?</h5>
                <article>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate praesentium vitae dolor at, id quasi! Quam, nam quaerat excepturi, optio natus itaque officia fuga temporibus, eaque, enim blanditiis alias. Nulla quisquam iusto repellendus rerum explicabo qui vero temporibus similique quam itaque, consectetur, totam esse veritatis sapiente nobis velit beatae amet sed. Officiis ducimus blanditiis, et beatae, consectetur nulla possimus cumque sequi delectus! Dignissimos eligendi, repudiandae, sed libero, voluptatem vero architecto perferendis fugit beatae pariatur laudantium quam minus est nihil nemo harum praesentium temporibus ad, repellendus asperiores? Possimus cumque omnis, tenetur nostrum iure quos neque ex ipsum id reiciendis laboriosam veritatis quia, asperiores dolorum tempore quo perferendis harum magni sapiente fugiat natus assumenda voluptatibus alias. Vero possimus ea non qui ratione labore impedit assumenda ad amet, officia illum voluptate ipsum accusamus, animi magni soluta. Tempore labore aspernatur eos minus itaque nam maxime id perspiciatis, accusamus dolorum. Iusto eaque, vero odio deserunt voluptatem totam labore, officiis dolorum reiciendis corrupti autem doloribus nemo beatae tenetur voluptas. Nostrum ratione neque quos quia asperiores repellendus magnam aspernatur, accusamus aut laboriosam eius aliquid molestiae molestias eum deleniti ad nisi ut libero? Vero illo maiores veniam, optio voluptate nihil veritatis tempora reprehenderit dolorum, culpa accusamus ducimus iusto.
                </article>
                <div class="talign-demo col l12 ">
                  <div class="sims-icon">
                    <i class="material-icons">note_add</i>
                  </div>
                  <div class="sims-download">
                    <p>Centrary to popular belive.pdf</p>
                    <p>Rendi Maulana</p>
                  </div>
                  <div class="sims-btn">
                    <a href="#" class="btn right" >Unduh</a>
                  </div>
                </div>
                <a href="#balas" class="btn waves-effect waves-light right sims-btn1 modal-trigger" >Balas</a>
              </div>
            </div>
            
          </div>
          </div>
      </div>
      
    </div>
  </main>

  <div id="balas" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

@endsection

