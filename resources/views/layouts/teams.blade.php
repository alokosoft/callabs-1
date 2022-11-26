<link href="{{('css/package.css')}}" rel="stylesheet">

<section id="doctor" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center" style="margin-top: -100px;">
                        <h2 class="h-bold">Browse By Category</h2>
                        <p>Call Labs Packages</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div id="filters-container" class="cbp-l-filters-alignLeft">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">BestSellers (<div class="cbp-filter-counter"></div>)</div>

                    @forelse($categories as $category)

                    <div data-filter=".{{$category->id}}" class="cbp-filter-item">{{$category->category_name}} (<div class="cbp-filter-counter"></div>)</div>

                    @empty
                    <td></td>
                    @endforelse

                 </div>

                <div id="grid-container" class="cbp-l-grid-team">
                    <ul>

                        @forelse($packages as $package)

                        <li class='cbp-item {{$package->category}}' style="height: 460px !important; width: 300px !important">

                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box" style="height: 420px !important; width:290px !important">

                                    <div class="tag topright"></div>

                                    <div class="price-box">
                                        <div class="title">
                                            <a href="{{route('package-details',[$package->id] )}}"> {{$package-> package_name}}</a>
                                        </div>

                                        @php

                                        $lab= \App\Lab::where(['id' => $package->lab_name])->first();
                                        @endphp

                                        <span>Lab Name - {{$lab?$lab->lab_name:'Call Labs'}}</span><br />

                                        <h4 class="price">₹{{$package-> price?$package->price:$package-> no_of_tests}}</h4>
                                    </div>
                                    <ul class="features cbp-singlePage cbp-l-grid-team-name">

                                        @php

                                        @endphp
                                        @php $i = 0; @endphp
                                        @foreach ($package->parenttest as $value)

                                        <li> <i class="fa-solid fa-circle-chevron-right"></i> {{ $value->parent_test_name }}</li>
                                        @php $i++; @endphp
                                        @if($i == 2) @break @endif
                                        @endforeach

                                        <li style="color:red"> Know More +</li>
                                    </ul>

                                    <div class="btn-box">

                                        @if (count((array) session('cart')) >0)

                                        @foreach((array) session('cart') as $id => $details)

                                        @if($package-> package_name !== $details['name'])



                                        <a href="{{route('add_to_cart', ['package', $package->id, $package->id]) }}" class="theme-btn" role="button">Add to cart</a>

                                        @else
                                        <a href="#" class="theme-btn" role="button" disable>
                                            Already Added</a>

                                        @endif
                                        @endforeach



                                        @else
                                        <a href="{{ route('add_to_cart',  ['package', $package->id, $package->id]) }}" class="theme-btn" role="button">
                                            Add To Cart</a>
                                        @endif



                                    </div>
                                </div>
                            </div>
                        </li>

                        @empty
                        <td></td>
                        @endforelse

                        <!-- Pricing Block -->
                    </ul>
                </div>


            </div>
        </div>
    </div>

</section>