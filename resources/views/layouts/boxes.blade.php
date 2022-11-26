 <section id="boxes" class="home-section paddingtop-80">
     <div class="container marginbot-50">
         <div class="row">
             <div class="col-lg-8 col-lg-offset-2">
                 <div class="wow fadeInDown" data-wow-delay="0.1s">
                     <div class="section-heading text-center row">
                         <h2 class="h-bold">Find Test By Organs</h2>



                     </div>
                 </div>

                 <div class="divider-short"></div>
             </div>
             <div class="col-lg-4 col-lg-offset-2" style="float:right;">
                 <a href="{{route('allorgans')}}">
                     <h4 class="h-bold" style="float: right; color:brown;font-size:18px">VIEW ALL</h2>
                 </a>
             </div>

         </div>
     </div>

     <div class="container">
         <div class="row">

             @forelse($organs as $organ)
             <div class="col-sm-3 col-md-2">
                 <div class="wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box text-center">

                         <a href="{{route('organs.details',[$organ->id])}}">

                             <img src="{{asset('Image/'.$organ->image)}}" width="80" height="80" />

                             <p>
                                 {{$organ->name}}
                             </p>
                         </a>

                     </div>
                 </div>
             </div>
             @empty
             <div></div>
             @endforelse

             <!-- <h4 class="h-bold" style="text-align: center;padding:12px;margin-top:120px">View All</h4> -->

         </div>
     </div>

 </section>