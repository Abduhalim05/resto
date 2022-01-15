<div class="hero">
    <div class="container">
       <div class="row d-flex align-items-center">
          <div class="col-lg-6 hero-left">
              <h1 class="display-4 mb-5">{{$sliders->title}}{{--We Love <br> Delicious Foods!</h1> --}}
             <div class="mb-2">
                <a class="btn btn-primary btn-shadow btn-lg" href="{{route('menu.index')}}" role="button">Explore Menu</a>
                <a class="btn btn-icon btn-lg" href="{{$sliders->video}}" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
                <span class="lnr lnr-film-play"></span>
                {{-- https://player.vimeo.com/video/33110953 --}}
                {{-- https://player.vimeo.com/video/641008609 --}}
                Play Video
                </a>
             </div>
             <ul class="hero-info list-unstyled d-flex text-center mb-0">
                <li class="border-right">
                   <span class="lnr lnr-rocket"></span>
                   <h5>
                      Fast Delivery
                   </h5>
                </li>
                <li class="border-right">
                   <span class="lnr lnr-leaf"></span>
                   <h5>
                      Fresh Food
                   </h5>
                </li>
                <li class="">
                   <span class="lnr lnr-bubble"></span>
                   <h5>
                      24/7 Support
                   </h5>
                </li>
             </ul>
          </div>
          <div class="col-lg-6 hero-right">
             <div class="owl-carousel owl-theme hero-carousel">
                @foreach ($slider_photos as $slider_photo )
                    <div class="item">
                        <img class="img-fluid" src="/admin/images/sliders/{{$slider_photo->image}}" alt="">
                    </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
 </div>
