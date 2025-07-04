@extends('layouts.app')
@section('content')

<!-- Slider Section -->

<section id="slider" class="slider section dark-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">

      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "centeredSlides": true,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "navigation": {
            "nextEl": ".swiper-button-next",
            "prevEl": ".swiper-button-prev"
          }
        }
      </script>

      <div class="swiper-wrapper">
        @if(count([$slideInfos]) > 0)
        @foreach($slideInfos as $slideInfo )
        <div class="swiper-slide" style="background-image: url('{{ asset("storage/uploads/slide_images/" .$slideInfo->slide_image)}}');">
          <div class="content">
            <h2><a href="#">{{$slideInfo->tittle}}</a></h2>
            <p>{{$slideInfo->caption}}.</p>
          </div>
        </div>
        @endforeach
        @endif
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <div class="swiper-pagination"></div>

    </div>

  </div>

</section><!-- /Slider Section -->


<!-- Culture Category Section -->
<section id="culture-category" class="culture-category section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="section-title-container d-flex align-items-center justify-content-between">
      <h2>Or-tamisemim-Habari</h2>
      <p><a href="{{Route('events')}}">Angali Habari Zote</a></p>
    </div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-md-8">
        @if(count([$postInfos1]) > 0)
        @foreach($postInfos1 as $postInfo)
        @if($postInfo->post_status == 1)
        <div class="d-lg-flex post-entry">
          <a href="{{Route('read_more', $postInfo->id)}}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
            <img src="{{ asset('storage/uploads/post_images/' .$postInfo->post_image)}}" alt="" class="img-fluid">
          </a>
          <div>
            <div class="post-meta"><span class="date">Post</span> <span class="mx-1">•</span> <span>{{$postInfo->created_at->diffForHumans()}}</span> <span style="float: right;"><i class="bi bi-people"></i>{{$postInfo->view_count}}</span></div>
            <h3><a href="single-post.html#">{{$postInfo->post_tittle}}</a></h3>
            @if(substr($postInfo->post_description, 0,200))
            <p>
              {!! htmlspecialchars_decode(substr($postInfo->post_description, 0,255)) !!}
              <hr>
              <a href="{{Route('read_more', $postInfo->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </p>
            @else
            {!! htmlspecialchars_decode($postInfo->post_description) !!}
            <hr>
            </p>
            @endif

            <!-- <div class="d-flex align-items-center author">
              <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
              <div class="name">
                <h3 class="m-0 p-0">Wade Warren</h3>
              </div>
            </div> -->
          </div>
        </div>
        @endif
        @endforeach
        @endif

        @if(count([$ministerInfos]) > 0)
        @foreach($ministerInfos as $ministerInfo)
        @if($ministerInfo->status == 1)
        <div class="row">
          <div class="col-lg-4">
            <div class="post-list border-bottom">
              <a href="single-post.html#"><img src="{{ asset('storage/uploads/minister_images/' .$ministerInfo->minister_image)}}" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Post</span> <span class="mx-1">•</span> <span>{{$ministerInfo->created_at->diffForHumans()}}</span></div>
              <h2 class="mb-2"><a href="single-post.html#">{{$ministerInfo->minister_title}}</a></h2>
              <span class="author mb-3 d-block">{{$ministerInfo->minister_name}}</span>
            </div>
          </div>

          <div class="col-lg-8" style ="margin-top: 100px;">
            <div class="post-list">
              <p class="mb-4 d-block">{{$ministerInfo->description}}</p>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        @endif

      </div>

      <div class="col-md-4">
        <!-- Recent Posts Widget -->
         @include('inc.currentpost')
        <!-- <div class="recent-posts-widget widget-item"> -->

          <!-- <a href="{{Route('events')}}">
            <h3 class="widget-title">Habari Matukio</h3>
          </a>
          @if(count([$postInfos]) > 0)
          @foreach($postInfos as $postInfo)
          @if ($postInfo->post_status == 1)
          <div class="post-item">
            <img src="{{ asset('storage/uploads/post_images/' .$postInfo->post_image)}}" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="{{Route('read_more', $postInfo->id)}}">{{$postInfo->post_tittle}}</a></h4>
              <time datetime="2020-01-01">{{ $postInfo->created_at->diffForHumans() }}</time>
            </div>
            <span style="float: right;"><i class="bi bi-people"></i>{{$postInfo->view_count}}</span>
          </div>
          End recent post item-->
          <!-- @endif
          @endforeach
          @endif --> 

        <!-- </div> -->
        <!--/Recent Posts Widget -->

        <!-- Recent Video Widget -->
        @include('inc.currentvideo')
        <!--/Recent Video Widget -->

        <!-- Recent anouncement -->
        @include('inc.anouncement')
        <!--End Recent anouncement -->
      </div>
    </div>

  </div>

</section><!-- /Culture Category Section -->

@endsection