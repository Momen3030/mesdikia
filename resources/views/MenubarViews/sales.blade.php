@include('Headers.sales_header');
<body>
<section id="sales" class="sales">
    <div class="container">
        <div class="sr_items">
            <h3 class="text-center wow fadeInDown" data-wow-duration="2s">عـن مـاذا تـبـحـث !. <hr class="ln"/></h3>
            <div class="input-group">
                <select name="choose1" id="sel1" class="sel" data-wow-duration="2s">
                    <option value="1">مـاذا عن هذه!</option>
                    <option value="2">المركبات</option>
                    <option value="3">العقارات</option>
                    <option value="4">المجوهرات</option>
                    <option value="5">أخري ثمينة</option>
                    <option value="6">المزادات</option>
                    <option value="7">المزادات الفورية</option>
                </select>

                <input type="number" name="less" id="less" class="sel" placeholder="ادخل الحد الأدني ">
                <input type="number" name="less" id="hight" class="sel" placeholder="ادخل الحد الأعلي ">

                <span class="bt_sr wow fadeInLeft" data-wow-duration="2s"><a href="#"><i class="fa fa-search"></i></a> </span>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- ----------------------------------------- -->
<section class="count">
    <div class="container">
        <div class="row">
            <div class="counter col-sm-6 col-md-3">
                <i class="fa fa-eye fa-2x wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number " data-to="{{$users}}" data-speed="1500"></h2>
                <p class="count-text ">زائـر</p>
            </div>

            <div class="counter col-sm-6 col-md-3">
                <i class="fa fa-handshake  fa-2x  wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                <p class="count-text ">صفقـات تمـت</p>
            </div>

            <div class="counter col-sm-6 col-md-3">
                <i class="fa fa-user-tag fa-2x  wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number" data-to="{{$mazaids}}" data-speed="1500"></h2>
                <p class="count-text ">مزايـد</p>
            </div>

            <div class="counter col-sm-6 col-md-3 end">
                <i class="fa fa-group fa-2x  wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number" data-to="{{$mazaids}}" data-speed="1500"></h2>
                <p class="count-text ">مزاد متـاح</p>
            </div>
        </div>
    </div>
</section>
<hr/>
<!-- ----------------------------------------- -->
<!-- ----------------------------------------- -->

<section id="items" class="items">
    <div class="container">
        <button class="btn btn-primary btn_show">السيارات</button>
        <div class="row use-box">
            @foreach ($Autioncars as $car)
                <div class="col-sm-6 col-md-4 col-lg-3 cl">
                    <div class="items">
                        <div class="card">
                            <div class="item_hd">
                                <p><b> سينتهي خلال </b>
                                    <span id="demo" ></span>
                                    <i class="fa fa-clock" style="color: #f48639;"></i></p>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$car->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                <p class="heart"> 1058<i class="fa fa-heart" ></i></p><br/>
                                <div class="sz">
                                    <p class="ht">{{$car->type}}</p>

                                </div>
                                <h5>{{$car->price}}</h5>
                                <div class="row mg-up">
                                    <div class="col-xs-6">
                                        <p class="lead">{{$car->model}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_car',[$car->id])}}'">
                                            تسوق الآن</button>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i style="color: rgb(129, 129, 129);" data-toggle="tooltip">اعلى سعر</i>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-heart" style="color: rgb(129, 129, 129);" title="إعجاب"  data-toggle="tooltip"></i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autioncars))
                    {{$Autioncars->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">المجوهرات</button>
        <div class="row use-box">
            @foreach ($Autionjewelrys as $jewelry)
                <div class="col-sm-6 col-md-4 col-lg-3 cl">
                    <div class="items">
                        <div class="card">
                            <div class="item_hd">
                                <p><b> سينتهي خلال </b>
                                    <span id="demo" ></span>
                                    <i class="fa fa-clock" style="color: #f48639;"></i></p>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$jewelry->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                <p class="heart"> 1058<i class="fa fa-heart" ></i></p><br/>
                                <div class="sz">
                                    <p class="ht">{{ $jewelry->material }}</p>

                                </div>
                                <h5>{{ $jewelry->price }}</h5>
                                <div class="row mg-up">
                                    <div class="col-xs-6">
                                        <p class="lead"><p>{{ $jewelry->weight }}</p></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_jewelry',[$jewelry->id])}}'">
                                            تسوق الآن</button>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i style="color: rgb(129, 129, 129);" data-toggle="tooltip">اعلى سعر</i>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-heart" style="color: rgb(129, 129, 129);" title="إعجاب"  data-toggle="tooltip"></i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionjewelrys))
                    {{$Autionjewelrys->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">المركبات</button>
        <div class="row use-box">
            @foreach ($Autionvichels as $vichle)
                <div class="col-sm-6 col-md-4 col-lg-3 cl">
                    <div class="items">
                        <div class="card">
                            <div class="item_hd">
                                <p><b> سينتهي خلال </b>
                                    <span id="demo" ></span>
                                    <i class="fa fa-clock" style="color: #f48639;"></i></p>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$vichle->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                <p class="heart"> 1058<i class="fa fa-heart" ></i></p><br/>
                                <div class="sz">
                                    <p class="ht">{{ $vichle->model }}</p>

                                </div>
                                <h5>{{ $vichle->price }}</h5>
                                <h5>{{ $vichle->year }}</h5>
                                <h5>{{ $vichle->color }}</h5>
                                <div class="row mg-up">
                                    <div class="col-xs-6">
                                        <p class="lead">{{ $vichle->type }}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_vichle',[$vichle->id])}}'">
                                            تسوق الآن</button>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i style="color: rgb(129, 129, 129);" data-toggle="tooltip">اعلى سعر</i>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-heart" style="color: rgb(129, 129, 129);" title="إعجاب"  data-toggle="tooltip"></i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionvichels))
                    {{$Autionvichels->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">اخرى ثمينه</button>
        <div class="row use-box">
            @foreach ($Autionhighvalues as $hightvalue)
                <div class="col-sm-6 col-md-4 col-lg-3 cl">
                    <div class="items">
                        <div class="card">
                            <div class="item_hd">
                                <p><b> سينتهي خلال </b>
                                    <span id="demo" ></span>
                                    <i class="fa fa-clock" style="color: #f48639;"></i></p>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$hightvalue->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                <p class="heart"> 1058<i class="fa fa-heart" ></i></p><br/>
                                <div class="sz">
                                    <p class="ht">{{ $hightvalue->name }}</p>

                                </div>
                                <h5>{{ $hightvalue->price }}</h5>
                                <div class="row mg-up">
                                    <div class="col-xs-6">
                                        <p class="lead">{{ $hightvalue->new }}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_highvalue',[$hightvalue->id])}}'">
                                            تسوق الآن</button>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i style="color: rgb(129, 129, 129);" data-toggle="tooltip">اعلى سعر</i>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-heart" style="color: rgb(129, 129, 129);" title="إعجاب"  data-toggle="tooltip"></i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionhighvalues))
                    {{$Autionhighvalues->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">العقارت</button>
        <div class="row use-box">
            @foreach ($Autionproperties as $property)
                <div class="col-sm-6 col-md-4 col-lg-3 cl">
                    <div class="items">
                        <div class="card">
                            <div class="item_hd">
                                <p><b> سينتهي خلال </b>
                                    <span id="demo" ></span>
                                    <i class="fa fa-clock" style="color: #f48639;"></i></p>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$property->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                <p class="heart"> 1058<i class="fa fa-heart" ></i></p><br/>
                                <div class="sz">
                                    <p class="ht">{{ $property->type }}</p>
                                    <p class="ht">{{ $property->new }}</p>
                                </div>
                                <h5>{{ $property->price }}</h5>
                                <div class="row mg-up">
                                    <div class="col-xs-6">
                                        <p class="lead">{{ $property->SizeInMeter }}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_property',[$property->id])}}'">
                                            تسوق الآن</button>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i style="color: rgb(129, 129, 129);" data-toggle="tooltip">اعلى سعر</i>
                                    </div>
                                    <div class="col-4">
                                        <i class="fa fa-heart" style="color: rgb(129, 129, 129);" title="إعجاب"  data-toggle="tooltip"></i></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionproperties))
                    {{$Autionproperties->links()}}
                @endif
            </div>
        </div>
    </div>

</section>

<!-- ----------------------------------------------------------------------------------------- -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/salesmain.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
