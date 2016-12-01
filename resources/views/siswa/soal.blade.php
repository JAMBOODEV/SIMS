@extends('layouts.appSiswa')
@section('subHeader')
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

                    <div class="row">
                        <div class="col s9">
                            <a class="on-learning now-learning"> 5 </a> 
                            <a class="of-learning off-learning"></a>
                        </div>
                        <div class="col s3 custom-on-learning">
                            <a class="on-learning"> Waktu Tersisa : </a> 
                            <a class="on-learning"> 54:00 </a> 
                        </div>
                    </div>

                    <div class="card step-progress">
                        <div class="step-slider">
                          <div data-id="step1" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step2" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step3" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step4" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step5" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step6" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step7" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step8" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step9" class="step-slider-item" id="step-slider-item"></div>
                          <div data-id="step10" class="step-slider-item" id="step-slider-item"></div>
                          <!-- <div data-id="step5" class="step-slider-item"></div> -->
                        </div>
                        <div class="step-content">
                            <div id="step1" class="step-content-body">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 1. </a>
                                      Sebuah web kita evaluasi ternyata kita membutuhkan bahwa suatu objek perlu link ke halaman situs lain, agar user mendaptkan kejelasan bila link ke halaman / situs lain. pada tahapan untuk di gunakan adalah :
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>

                            <div id="step2" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 2. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step3" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 3. </a>
                                        Semua contoh di atas memiliki sebuah karakteristik yang sama, bisakah Anda
                                        menyimpulkan karakteristik tersebut? Ekspresi logika dengan karakteristik tersebut
                                        disebut sebagai apa?
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step4" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 4. </a>
                                      Sebuah web kita evaluasi ternyata kita membutuhkan bahwa suatu objek perlu link ke halaman situs lain, agar user mendaptkan kejelasan bila link ke halaman / situs lain. pada tahapan untuk di gunakan adalah :
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step5" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 5. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step6" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 6. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step7" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 7. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step8" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 8. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step9" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 9. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="step10" class="step-content-body out">
                                <div class="row">
                                    <div class="col s12 question">
                                      <a class="on-learning"> 10. </a>
                                        Buatlah menjadi ekspresi logika dan buat tabel kebenarannya! Petunjuk: Suatu
                                        kalimat merupakan sebuah premis, ditandai dengan adanya titik. Adapun kesimpulan
                                        ditandai dengan kata dengan demikian, … Antar premis dihubungkan dengan tanda
                                        dan, sedangkan kesimpulan dihubungkan dengan tanda maka.
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                a. Hyperteks Markup
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                b. Hyperlink
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                c. Link to web
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                d. Hypertext
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 custom-question">
                                        <div class="question-learning">
                                            <div class="question-selection">
                                                e. Link URL
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div id="stepLast" class="step-content-body out">Completed</div>

                            <div class="step-content-foot">
                                <button class="active custom-prev" name="prev"> 
                                    <i class="fa fa-chevron-left"></i>  
                                </button>

                                <button class="active custom-next" name="next">
                                    <a class="custom-text-next-answer-learning"> 
                                        Selanjutnya </a> 
                                    <i class="fa fa-chevron-right"></i>
                                </button>

                                <button class="active out" name="finish">
                                        Selesai
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            
                          </div>
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
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col s9">
                        <div class="#">
                            Matematika
                        </div>
                    </div>
                    <div class="col s3 custom-question-download">
                        <div>
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col s9">
                        <div class="#">
                            Bahasa Indonesia
                        </div>
                    </div>

                    <div class="col s3 custom-question-download">
                        <div>
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection