@extends('layouts.appSiswa')
  @section('subHeader')
  <div id="info_sims_user">
        <div id="user_detile">
            <div class="user_info_img ">
                <img src="../img/avatar_siswi.jpg" alt="" class="circle responsive-img">
            </div>
            <div class="user_info_prof">
                <h3>Hello, Jessica !</h3>
                <p>2011141971</p>
                <ul>
                    <li>Kelas</li>
                    <li>Semester</li>
                </ul>
            </div>
        </div>
        <div id="info_splash">
            <div class="headline-news">
                <p class="headline3">Tirakatan – Memaknai Hari Pahlawan Lebih Dalam</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Mengadu Kemampuan Sinlui Melawan ADU All Stars</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Bakti Sosial 2016: Mengakrabkan Sinlui Kepada yang Lemah dan Terpinggirkan</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Tes Penjajakan Bidang Ilmu (TPBI)</p>
            </div>
            <div class="headline-news">
                <p class="headline3">Perayaan Vincentius Day 2016: Meningkatkan Kepedulian dan Semangat Simplisitas</p>
            </div>
        </div>
    </div>
  @endsection

  @section('content')
  <main>
  <header>
    <div  class="static-right">
      <div id="content-side-berita">
        <a href="#buat-Pesan" class="modal-trigger message">
          <span class="from">
            <span class="email left-align"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Kirim Pesan</span>
          </span>
        </a>
        <a href="/siswa/pesan-masuk" class="message">
          <span class="from">
            <span class="email left-align"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Pesan Masuk</span>
            <span class="from_date right-align">12</span>
          </span>
        </a>
        <a href="/siswa/pesan-terkirim" class="message">
          <span class="from">
            <span class="email left-align"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Pesan Terkirim</span>
          </span>
        </a>
      </div>
    </div>
  </header>
  <div  class="row nav-add-berita pesan-content berita-content">
    <div class="col l12 ">
      <div class="content-pesan1">
        <div class="col s12 l12">
          <div class="card-sims1">
            <div class="row">
                
                <div class="nav-wrapper">
                  <div class="col s12">
                    <a href="#!" class="breadcrumb">Dra. NENENG HENI MARDALENI, M.Pd.</a>
                    <a href="#!" class="breadcrumb">22 Jan, 15:30</a>
                  </div>
                </div>
                <h5>Where can i get some?</h5>
                <article>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate praesentium vitae dolor at, id quasi! Quam, nam quaerat excepturi, optio natus itaque officia fuga temporibus, eaque, enim blanditiis alias. Nulla quisquam iusto repellendus rerum explicabo qui vero temporibus similique quam itaque, consectetur, totam esse veritatis sapiente nobis velit beatae amet sed. Officiis ducimus blanditiis, et beatae, consectetur nulla possimus cumque sequi delectus! Dignissimos eligendi, repudiandae, sed libero, voluptatem vero architecto perferendis fugit beatae pariatur laudantium quam minus est nihil nemo harum praesentium temporibus ad, repellendus asperiores? Possimus cumque omnis, tenetur nostrum iure quos neque ex ipsum id reiciendis laboriosam veritatis quia, asperiores dolorum tempore quo perferendis harum magni sapiente fugiat natus assumenda voluptatibus alias. Vero possimus ea non qui ratione labore impedit assumenda ad amet, officia illum voluptate ipsum accusamus, animi magni soluta. Tempore labore aspernatur eos minus itaque nam maxime id perspiciatis, accusamus dolorum. Iusto eaque, vero odio deserunt voluptatem totam labore, officiis dolorum reiciendis corrupti autem doloribus nemo beatae tenetur voluptas. Nostrum ratione neque quos quia asperiores repellendus magnam aspernatur, accusamus aut laboriosam eius aliquid molestiae molestias eum deleniti ad nisi ut libero? Vero illo maiores veniam, optio voluptate nihil veritatis tempora reprehenderit dolorum, culpa accusamus ducimus iusto.
                </article>
                <div class="col s12 m8  l6 ">
                  <div class="card-panel grey lighten-5 z-depth-1 border-penerbit">
                    <div class="row valign-wrapper">
                      <div class="col s2">
                        <img src="../img/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                      </div>
                      <div class="col s10">
                        <span class="black-text">
                          This is a square image. <br> Add the "circle" class to it to make it appear circular.
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
  </main>
  <div id="buat-Pesan" class="modal bottom-sheet  balas">
    <div class="modal-content">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Kepada</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="main-kirim-pesan" rows="15" cols="80" name="pesan">asda</textarea>
              
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  @endsection