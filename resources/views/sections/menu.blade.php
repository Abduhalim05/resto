<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
       <div class="section-content">
          <div class="row mb-5">
             <div class="col-md-12">
                <div class="heading-section text-center">
                   <span class="subheading">
                   Specialties
                   </span>
                   <h2>
                      Our Menu
                   </h2>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-4 menu-wrap">
                <div class="heading-menu">
                   <h3 class="text-center mb-5">Breakfast</h3>
                </div>
                @foreach ($menu_breakfast as $item )
                <div class="menus d-flex align-items-center">
                   <div class="menu-img rounded-circle">
                      <img class="img-fluid" src="/admin/images/meals/{{$item->image}}" alt="">
                   </div>
                   <div class="text-wrap">
                      <div class="row align-items-start">
                         <div class="col-8">
                            <h4>{{$item->name}}</h4>
                         </div>
                         <div class="col-4">
                            <h4 class="text-muted menu-price">{{$item->price}}</h4>
                         </div>
                      </div>
                      <p>{{$item->shortDesc}}</p>
                   </div>
                </div>
                @endforeach
             </div>
             <div class="col-lg-4 menu-wrap">
                <div class="heading-menu">
                   <h3 class="text-center mb-5">Lunch</h3>
                </div>
                @foreach($menu_lunch as $item)
                <div class="menus d-flex align-items-center">
                   <div class="menu-img rounded-circle">
                      <img class="img-fluid" src="/admin/images/meals/{{$item->image}}" alt="">
                   </div>
                   <div class="text-wrap">
                      <div class="row align-items-start">
                         <div class="col-8">
                            <h4>{{$item->name}}</h4>
                         </div>
                         <div class="col-4">
                            <h4 class="text-muted menu-price">{{$item->price}}</h4>
                         </div>
                      </div>
                      <p>{{$item->shortDesc}}</p>
                   </div>
                </div>
                @endforeach
             </div>
             <div class="col-lg-4 menu-wrap">
                <div class="heading-menu">
                   <h3 class="text-center mb-5">Dinner</h3>
                </div>
                @foreach($menu_dinner as $item)
                <div class="menus d-flex align-items-center">
                   <div class="menu-img rounded-circle">
                      <img class="img-fluid" src="/admin/images/meals/{{$item->image}}" alt="">
                   </div>
                   <div class="text-wrap">
                      <div class="row align-items-start">
                         <div class="col-8">
                            <h4>{{$item->name}}</h4>
                         </div>
                         <div class="col-4">
                            <h4 class="text-muted menu-price">{{$item->price}}</h4>
                         </div>
                      </div>
                      <p>{{$item->shortDesc}}</p>
                   </div>
                </div>
                @endforeach

             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End of menu Section -->
