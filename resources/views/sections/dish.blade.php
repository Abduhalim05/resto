<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Special Dishes
                </h2>
            </div>

            @foreach ($specials as $spec)
                @if($loop->even)
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                        <img src="/admin/images/meals/{{$spec->image}}" alt="" class="img-fluid shadow w-100">
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                        <h2 class="special-number">{{ $loop->iteration}}.</h2>
                        <div class="dishes-text">
                            <h3><span>{{$spec->name}}</span></h3>
                            <p class="pt-3">{{$spec->description}}</p>
                            <h3 class="special-dishes-price">{{$spec->price}}</h3>
                            <a href="#" class="btn-primary mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                @else
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center py-5">
                        <h2 class="special-number">{{ $loop->iteration}}.</h2>
                        <div class="dishes-text">
                            <h3><span>{{$spec->name}}</span><br></h3>
                            <p class="pt-3">{{$spec->description}}</p>
                            <h3 class="special-dishes-price">{{$spec->price}}</h3>
                            <a href="#" class="btn-primary mt-3">book a table</a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                        <img src="/admin/images/meals/{{$spec->image}}" alt="" class="img-fluid shadow w-100">
                    </div>
                </div>
                @endif
                @endforeach




        </div>
    </div>

    <div class="d-flex justify-content-center pagination">
        {!! $specials->links() !!}
    </div>

</section>
