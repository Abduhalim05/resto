<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
       <div class="section-content">
          <div class="row">
             <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(/admin/images/about/{{$item->image}});">
             </div>
             <div class="col-sm-7 py-5 pl-md-0 pl-4">
                <div class="heading-section pl-lg-5 ml-md-5">
                   <span class="subheading">
                   About
                   </span>
                   <h2>
                      Welcome to Resto
                   </h2>
                </div>
                <div class="pl-lg-5 ml-md-5">
                   <p>{{$item->body}}</p>
                   <h3 class="mt-5">Special Recipe</h3>
                   <div class="row">
                       @foreach ($about_special as $item )
                        <div class="col-4">
                            <a href="{{route('dishes.index')}}" class="thumb-menu">
                                <img class="img-fluid img-cover" src="/admin/images/meals/{{$item->image}}" />
                                <h6>{{$item->name}}</h6>
                            </a>
                        </div>
                       @endforeach
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End of Welcome Section -->
