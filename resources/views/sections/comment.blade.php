 <!-- Testimonial Section-->
 <section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(img/testi-bg.jpg);">
    <div class="container">
       <div class="section-content">
          <div class="heading-section text-center">
             <span class="subheading">
             Testimony
             </span>
             <h2>
                Happy Customer
             </h2>
          </div>
          <div class="row">
             <!-- Testimonial -->
             <div class="testi-content testi-carousel owl-carousel">
                 @foreach($comments as $comment)
                <div class="testi-item">
                   <i class="testi-icon fa fa-3x fa-quote-left"></i>
                   <p class="testi-text">{{$comment->message}}</p>
                   <p class="testi-author">{{$comment->name}}</p>
                   <p class="testi-desc"><span>{{$comment->person}}</span></p>
                </div>
                @endforeach
             </div>
             <!-- End of Testimonial -->
          </div>
       </div>
    </div>
 </section>
 <!-- End of Testimonial Section-->
