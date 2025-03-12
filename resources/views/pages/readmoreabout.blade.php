@extends('layouts.app')
@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Kuhusu</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{Route('/')}}">Mwanzo</a></li>
            <li class="current">Kuhusu sisi</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <!-- <p class="who-we-are">Who We Are</p> -->
            <p class="who-we-are">Sisi ni nani</p>
            <h3>Historia</h3>
            <p class="fst-italic">
            Kujenga mazingira mazuri ya ushiriki wa wananchi katika kudumisha amani, ulinzi wa mali zao, kuimarisha huduma za kijamii, kuhakikisha kuwa jamii inashiriki katika kupanga na kusimamia shughuli za maendeleo katika maeneo yao kwa kuzingatia misingi ya utawala bora ikihusisha kuwatambua wakaazi wa maeneo husika na utambulisho wao.
            </p>
            <h3>Dira</h3>
            <p class="fst-italic">
              Kuwa taasisi imara katika kusimamia amani, usalama, usajili wa wakaazi na upatikanaji wa huduma karibu na wananchi
            </p>

            <h3>Dhamira</h3>
            <p class="fst-italic">
              Kujenga mazingira mazuri ya ushiriki wa wananchi katika kudumisha amani, ulinzi wa mali zao, kuimarisha huduma za kijamii, kuhakikisha kuwa jamii inashiriki katika kupanga na kusimamia shughuli za maendeleo katika maeneo yao kwa kuzingatia misingi ya utawala bora ikihusisha kuwatambua wakaazi wa maeneo husika na utambulisho wao.
            </p>
            <h3>HUDUMA ZINAZOTOLEWA</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Kusimamia Sera, Sheria na Kanuni mbali mbali za Ofisi.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kubuni na kusimamia utekelezaji wa miradi ya maendeleo.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kudumisha Amani, Ulinzi na Usalama katika Mikoa na Wilaya hadi Shehia.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kulinda mali za Taifa na za watu binafsi zisiharibiwe, kuzuia uingizaji au utoaji nje ya nchi kimagendo, pamoja na kusimamia kazi za uzimaji moto na uokozi.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuwasajili na kuwapa vitambulisho Wazanzibari wakaazi.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuwahifadhi kwa kufuata taratibu bora na kwa kuzingatia haki za binaadamu watuhumiwa na waliofungwa ambao wako katika Vyuo vya Mafunzo.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuandaa na kutekeleza mipango ya kuijengea uwezo Mikoa kitaaluma na utumishi katika Mikoa.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kutoa mwongozo na ushauri kwa Mikoa katika mambo ya kisheria na utaratibu, kujenga mazingira mazuri katika kuimarisha huduma za kijamii na kiuchumi katika Mikoa.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuratibu, kushauri, kusimamia na kufuatilia utekelezaji wa shughuliza Serikali za Mitaa.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuimarisha Utawala Bora na kuimarisha uwezo wa Serikali za Mitaa na mamlaka zake.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kufuatilia na kukagua utendaji wa mamlaka za Mikoa, Serikali za Mitaa na Idara Maalum za SMZ katika utoaji wa huduma.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuendeleza michezo katika Idara na Taasisi zetu.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kuimarisha uhusiano baina ya taasisi za Ofisi ya Raisi Tawala za Mikoa, Serikali za Mitaa na Idara maalum za SMZ. Na taasisi nyengine.</span></li> 
            </ul>
            
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/team-tawala.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/team-maonesho.webp" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/miaka-4-mwinyi.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <h2>Viongozi</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/waziri-masoud.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Masoud Ali Suleiman</h4>
                <span>Waziri Or-tamisemim</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/katibu-mkuu-issa.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Issa Mahafoudh</h4>
                <span>Katibu Mkuu</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/naibu-katibu-mikidadi.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mikidadi Mbarouk Mzee</h4>
                <span>Naibu Katibu</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/mratibu.webp" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Haji Sheha Khamis</h4>
                <span>Mratibu Idara Maalum</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->
@endsection

 