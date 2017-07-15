<section id="service" class="service2 sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_service2">
                        <div class="head_title text-center">
                          <form method='GET' action="{{route("search")}}">
                            <input type="text" name="searchtext" placeholder="Search for your desired place here" class="form-control"/>
                            <input style="margin-top: 10px" type="submit" class="btn btn-primary"  value="Search"  />
                        </div>

                        <div class="service_content">
                        <h2>Top Homestay</h2>
                        @foreach($homes as $home)
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="{{$home->image}}" alt="" class="img img-responsive">
                                    </div>
                                    <div class="single_service_right">
                                      <a href="{{route("home.index.user",$home->slug)}}">  <h2>{{$home->name}}</h2></a>
                                   
                                        <p>{{strip_tags($home->description)}}{{strlen(strip_tags($home->description))>250?"...":""}}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
  
                        </div>
                    </div>
                   <div class="text-center">
                       <a href="{{route("homes.all")}}" class="btn btn-primary">View All</a>
                </div>
                   </div> 
            </div>
        </section>