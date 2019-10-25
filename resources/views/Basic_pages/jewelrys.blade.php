<!DOCTYPE html>
<html lang="en">
@include('Headers.jewelrys_header')
<body>
<section class="mazad">
    <!-- ==================================================================== -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <div class="container">
                <li class="breadcrumb-item"><a href="/homemesdakia"><i class="fa fa-home"></i> الصفحـة الرئيسيـة</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">المـركبات</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">المجـوهرات</li>
            </div>
        </ol>
    </nav>
    <!-- ================================================================ -->
    <section id="model" class="model">
        <span class="meue_side"  onclick="openNav_veh()">&#9776; </span>
        <div class="container">
            <div  class="model">
                <div class="row use-box">
                    <div id="mySidenav2" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav_veh()">&times;</a>
                        <button id="sc" class="btn btn-outline-primary btn-block btn_s" data-toggle="collapse" data-target="#search_1_veh" aria-expanded="false" aria-controls="search_1_veh">بحـث مخـصص</button>
                        <div class="collapse" id="search_1_veh">
                            <div class="card card-block">
                                <form method="get" action="/search_jewelry">
                                    <h6 class="text-center">حدد السعـر</h6>
                                    <div class="input-group " >
                                        <!-- <label for="price">السعـر</label> -->
                                        <input type="number" name="price" id="price_veh"  placeholder="حدد السعر">
                                    </div>
                                    <!-- ======= -->
                                    <h6 class="text-center">حالـة المنتج</h6>
                                    <div class="input-group">
                                        <select name="status" id="status_veh">
                                            <option value="new product">new product</option>
                                            <option value="used product">used product</option>
                                        </select>
                                    </div>
                                    <!-- ======= -->
                                    <h6 class="text-center">نـوع المنتج</h6>
                                    <div class="input-group">
                                        <input type="text" name="type" id="type_veh" placeholder="type">
                                    </div>
                                    <!-- =================== -->
                                    <h6 class="text-center">المواد</h6>
                                    <div class="input-group">
                                        <input type="text" name="material" placeholder="المواد">
                                    </div>
                                    <!-- ======= -->
                                    <h6 class="text-center">الوزن</h6>
                                    <div class="input-group">
                                        <input type="text" name="weight" placeholder="الوزن">
                                    </div>

                                    <input type="submit" value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                </form>
                            </div>
                        </div>

                        <div class="" id="search_2_veh">
                            <select onchange="display_search_veh()" name="serch_for" id="serch_for_veh">
                                <option value="">إبحث بـ</option>
                                <option value="price_s">السعر</option>
                                <option value="status_s">الحالة</option>
                                <option value="type_s">النوع</option>
                                <option value="model_s">المواد</option>
                                <option value="weight_s">الوزن</option>
                            </select>
                            <div class="card card-block" id="dis_card_veh">
                                <div class="input-group " id="dis_input_veh">
                                    <form method="get" action="/search_jewelry">
                                        <input type="text" name="price"  placeholder="حدد السعر">
                                        <input type="submit" value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                    </form>
                                </div>
                                <div class="input-group " id="dis_input2_veh">
                                    <form method="get" action="/search_jewelry">
                                        <select name="status" id="stat_veh">
                                            <option value="new product">new product</option>
                                            <option value="used product">used product</option>
                                        </select>
                                        <input type="submit" value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                    </form>
                                </div>
                                <div class="input-group " id="dis_input3_veh">
                                    <form method="get" action="/search_jewelry">
                                        <input type="text" name="type" placeholder="النوع" value="" id="type_veh">
                                        <input type="submit" value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                    </form>
                                </div>
                                <div class="input-group " id="dis_input4_veh">
                                    <form method="get" action="/search_jewelry">
                                        <input type="text" name="material" placeholder="المواد" value="">
                                        <input type="submit" value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                    </form>
                                </div>
                                <div class="input-group " id="dis_input5_veh">
                                    <form method="get" action="/search_jewelry">
                                        <input type="text" name="weight" placeholder="الوزن" value="" id="year_veh" />
                                        <input type="submit" value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    @foreach ($jewelrys as $jewelry)
                        <div class="col-sm-6 col-md-3 cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$jewelry->image}}" alt="error">
                                    <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                    <p class="heart">{{$jewelry->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                    <div class="sz">
                                        <p class="ht">{{ $jewelry->type }}</p>

                                    </div>
                                    <h5>{{ $jewelry->price }} ر.س </h5>
                                    <div class="row mg-up">

                                        <div class="col-xs-6">
                                            <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s" onclick="window.location='{{route('Productt_jewelry',[$jewelry->id])}}'">
                                                <i class="fa fa-shopping-cart"></i> زايد الآن
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($jewelrysearch as $jewelry)
                        <div class="col-sm-6 col-md-3 cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$jewelry->image}}" alt="error">
                                    <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                    <p class="heart">{{$jewelry->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                    <div class="sz">
                                        <p class="ht">{{ $jewelry->type }}</p>

                                    </div>
                                    <h5>{{ $jewelry->price }} ر.س </h5>
                                    <div class="row mg-up">
                                        <div class="col-xs-6">
                                            <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s" onclick="window.location='{{route('Productt_jewelry',[$jewelry->id])}}'">
                                                <i class="fa fa-shopping-cart"></i> زايد الآن
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($jewelrys))
                    {{$jewelrys->links()}}
                @endif

            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($jewelrysearch))
                    {{$jewelrysearch->links()}}
                @endif
            </div>
        </div>
    </section>
    <!-- ============================================================================================================== -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/profile_user.js"></script>
    <script src="js/Vehicles.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>
