@include('Headers.profile_user_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <div class="container">
            <li class="breadcrumb-item"><a href="/homemesdakia"><i class="fa fa-home"></i> الصفحـة الرئيسيـة</a></li>
            <li class="breadcrumb-item"><a href="#">حسـاب</a></li>
            <li class="breadcrumb-item active" aria-current="page">نجـاح</li>


            <div class="dropdown">
                <li class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell notificate">
                        <span class="label label-warning" style="color: #ff0000">{{$notification->count()}}</span>
                    </i>
                </li>
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="drop_items" href="#">
                    @foreach($notification as $notifi)
                        @if($notifi->ownerID == Session::get('id'))
                            <i class="fa fa-users text-center"> {{$notifi->Message}}</i>
                            <br>
                        @endif
                    @endforeach

                    </a>

                </div>
                <div style="
                   color: #fff;
                    float: left;
                    text-align: center;
                    margin-top: 5px;
                    margin-left: 20px;
                     ">
                    test@gmail.com
                </div>
            </div>

        </div>
    </ol>
</nav>
<!-- ========================================================================== -->
<section class="profile" id="profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog1')" id="defaultOpen">
                        فيديو مصداقية
                    </button>

                </div>
                <div class="togl">
                    <button  type="button" class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog2')">
                        تحـرير حسـاب
                    </button>
                </div>
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog3')">
                        كلمـة المـرور
                    </button>
                </div>
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog4')">
                        دفتـر العنـاوين
                    </button>
                </div>

                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog5')">
                        قائمـة رغبـاتي
                    </button>
                </div>

                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog6')">
                        طلبـاتي
                    </button>
                </div>

                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog7')">
                         اضافاتي
                    </button>
                </div>
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog8')">
                        المـدفوعات المتكـررة
                    </button>
                </div>
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog9')">
                        نقـاط المكافـأت
                    </button>
                </div>
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog10')">
                        المنتجـات المـرتجعـة
                    </button>
                </div>
                <div class="togl">
                    <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog11')">
                        رصيـدي
                    </button>
                </div>



                <div class="togl">
                    <button class="btn btn-default btn-block s_out" type="button"><a href="{{route('mesdakiaroute',['id'=>Session::get('id')])}}">تسجيـل خروج <i class="fa fa-sign-out-alt"></i></a>

                    </button>
                </div>
            </div>
            <div class="col-sm-9">
                <!-- ============================== -->
                <div class="tabcontent" id="tog1">
                    <div class="card card-body" style="text-align: center">
                        <h1>فيديو مصداقية</h1>
                            <video width="100%" height="330" controls>
                                <source src="movie.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                    </div>
                </div>

                <!-- ============================================== -->
                <div class="tabcontent" id="tog2">
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <div class="card card-body">
                        <form method="post" action="/editdatauser"  style="text-align: center">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{Session::get('id')}}">
                            <input type="text" name="name" value="{{Session::get('name')}}" class="form-control" placeholder="User name">
                            <br>
                            <input type="text" name="email" value="{{Session::get('email')}}"  class="form-control" placeholder="Email">
                            <br>
                            <input type="text" name="password" value="{{Session::get('password')}}"  class="form-control" placeholder="Password">
                            <br>
                            <input type="password" name="newPassword" value=""  class="form-control" placeholder="New Password" required>
                            <br>
                            <input type="password" name="confirmPassword" value=""  class="form-control" placeholder="Confirm Password" required>
                            <br>
                            <input type="submit" value="Edit" class=" btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog3">
                    <div class="card card-body" style="text-align: center;margin-top: 100px;font-size: 30px;color: orangered" >
                        كلمة المرور الخاصة بالمستخدم :
                        <button class="form-control btn btn-info" onclick="window.location='{{url('/sendemail',['id'=>Session::get('id')])}}'">
                            Go Mail to see password</button>
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog4">
                    <div class="card card-body">
                        <div class="item_window wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="s" >
                            <a href="/cars">
                                <img src="img/bk4.jpg" alt="Norway" style="width:100%; height:200px">
                                <div class="text-block">
                                    <h4>السيـارات</h4>
                                    <p>ابحـث عن السيـارة المناسبـة</p>
                                </div>
                            </a>
                        </div>
                        <div class="item_window wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s" >
                            <a href="/vichle">
                                <img src="img/bk6.jpg" alt="Norway" style="width:100%; height:200px">
                                <div class="text-block">
                                    <h4>المركبـات</h4>
                                    <p>ابحـث عن المركبـة المناسبـة</p>
                                </div>
                            </a>
                        </div>
                        <div class="item_window wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".8s" >
                            <a href="/property">
                                <img src="img/bk11.jpg" alt="Norway" style="width:100%; height:200px">
                                <div class="text-block">
                                    <h4>العقـارات</h4>
                                    <p>ابحـث عن العقـارات المناسبـة</p>
                                </div>
                            </a>
                        </div>
                        <div class="item_window wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s" >
                            <a href="/property">
                                <img src="img/bk13.jpg" alt="Norway" style="width:100%; height:200px">
                                <div class="text-block">
                                    <h4>المجوهـرات</h4>
                                    <p>ابحـث عن المجوهـرات المناسبـة</p>
                                </div>
                            </a>
                        </div>
                        <div class="item_window wow fadeInUp" data-wow-delay="1.2s"  data-wow-duration="1.5s">
                            <a href="/highvalue">
                                <img src="img/bk14.png" alt="Norway" style="width:100%; height:200px">
                                <div class="text-block">
                                    <h4>أخـري ثمينـة</h4>
                                    <p>ابحـث عن الاشيـاء الثمينـة </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog5">
                    <div class="row">
                        @foreach($getowneridadd_card as $getowner)
                            @if($getowner->ownerID ==Session::get('id'))
                                <div class="col-12 add_favourit">
                                    <img src="/productimages/{{$getowner->image}}" alt="error">
                                    <p>نوع المنتج:{{$getowner->type}}</p>
                                    <p>السعر : {{$getowner->price}} ر.س</p>
                                    <button  class="btn btn-danger" onclick="window.location='{{url('/addtocard',['id'=>$getowner->id])}}'"><i class="fa fa-trash-alt"></i>    إزالـة</button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent addforms" id="tog6">
                    <h4 class="text-center"> إضـافـة منتـج <hr class="ln"/></h4>
                    <p class="text-center">حـدد نـوع المنتـج الذي ترغـب بالمزايـدة عليه</p>


                    <div class="row">
                        <div class="offset-md-2"></div>
                        <div class="col-md-8 ">
                            <select name="choose_product" id="products" onchange="dispaly_form()">
                                <option value="">نـوع المنتـج</option>
                                <option value="cars">سيـارات</option>
                                <option value="vichles">مركبـات</option>
                                <option value="build">عقـارت</option>
                                <option value="jewl">مجـوهـرات</option>
                                <option value="high">أخـري ثمينـة</option>
                            </select>
                            <div class="card" id="cars_d">
                                <div class="card-body">
                                    <div class="forms">
                                        <!-- ====================================== -->
                                        <form method="post" action="/addcarsform" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-car"></i></span>
                                                </div>
                                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع السيارة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" name="vendor"class="form-control" placeholder="ادخل اسـم البائع">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="text" name="location" class="form-control" placeholder="ادخل  المكـان ">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                                </div>
                                                <input type="number" name="price"class="form-control" placeholder="ادخل سعـر السيارة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-tint"></i></span>
                                                </div>
                                                <input type="text" name="color" class="form-control" placeholder="ادخل لون السيارة">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                                                </div>
                                                <input type="text" name="model" class="form-control" placeholder="ادخل موديل السيارة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-history"></i></span>
                                                </div>
                                                <input type="number" name="year" class="form-control" placeholder="ادخل موديل سنة السيارة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="new" id="status_car">
                                                    <option value="">حـالة السيارة</option>
                                                    <option value="جديدة">جديدة</option>
                                                    <option value="مستعملـة">مستعملـة</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="status">
                                                    <option value="" >وضـع السيارة الحالي</option>
                                                    <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                                    <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                                    <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                                    <option value="جديده">جديده</option>
                                                </select>
                                            </div>


                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="Auction_type" id="mazad_fawery_car" onchange="dispaly_time_car()">
                                                    <option value="" >إضـافة إلـي</option>
                                                    <option value="مزاد فورى">مزاد فورى</option>
                                                    <option value="مزاد مسعر">مزاد مسعر</option>
                                                    <option value="مزاد مفتوح">مزاد مفتوح</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3" id="period_product_car">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="product_time">
                                                    <option value="0" >إضـافة إلـي</option>
                                                    <option value="2">2</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-hands-helping"></i></span>
                                                </div>
                                                <select name="Guarant">
                                                    <option value="">الضمـان</option>
                                                    <option value="1">بضمـان</option>
                                                    <option value="0">بـدون  ضمـان</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                                </div>
                                                <input type="file" name="image" id="c_img">
                                            </div>
                                            <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                                            <input type="submit" name="add_car" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- =========================================================== -->
                            <div class="card" id="vichles_d">
                                <div class="card-body">
                                    <div class="forms">
                                        <form method="post" action="/addvichlesform" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-truck-pickup"></i></span>
                                                </div>
                                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع المركبة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" name="vendor" class="form-control" placeholder="ادخل اسـم البائع">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="text" name="location" class="form-control" placeholder="ادخل  المكـان ">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                                </div>
                                                <input type="number" name="price" class="form-control" placeholder="ادخل سعـر المركبة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-tint"></i></span>
                                                </div>
                                                <input type="text" name="color" class="form-control" placeholder="ادخل لون المركبة">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                                                </div>
                                                <input type="text" name="model" class="form-control" placeholder="ادخل موديل المركبة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-history"></i></span>
                                                </div>
                                                <input type="number" name="year" class="form-control" placeholder="ادخل موديل سنة المركبة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="new" id="status_vichles">
                                                    <option value="">حـالة المركبه</option>
                                                    <option value="جديدة">جديدة</option>
                                                    <option value="مستعملـة">مستعملـة</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="status">
                                                    <option value="" >وضـع المركبة الحالي</option>
                                                    <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                                    <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                                    <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                                    <option value="جديده">جديده</option>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="Auction_type" id="mazad_fawery_vic" onchange="dispaly_time_vic()">
                                                    <option value="" >إضـافة إلـي</option>
                                                    <option value="مزاد فورى">مزاد فورى</option>
                                                    <option value="مزاد مسعر">مزاد مسعر</option>
                                                    <option value="مزاد مفتوح">مزاد مفتوح</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3" id="period_product_vic">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="product_time">
                                                    <option value="0" >إتحديد الومن</option>
                                                    <option value="2">2</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-hands-helping"></i></span>
                                                </div>
                                                <select name="Guarant">
                                                    <option value="">الضمـان</option>
                                                    <option value="1">بضمـان</option>
                                                    <option value="0">بـدون  ضمـان</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                                </div>
                                                <input type="file" name="image" id="c_img">
                                            </div>
                                            <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                                            <input type="submit" name="add_vichles" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

                                        </form>
                                        <!-- ======================================== -->
                                    </div>
                                </div>
                            </div>
                            <!-- =========================================================== -->
                            <div class="card" id="jewl_d">
                                <div class="card-body">
                                    <div class="forms">

                                        <form method="post" action="/addjewelriesform" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-gem"></i></span>
                                                </div>
                                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع المجوهرات">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" name="vendor" class="form-control" placeholder="ادخل اسـم البائع">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                                                </div>
                                                <input type="text" name="material" class="form-control" placeholder="ادخل نوعم المجوهرات : ex : ماس ، دهب ، فضة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                                </div>
                                                <input type="number" name="price" class="form-control" placeholder="ادخل سعـر المجوهرات">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-tint"></i></span>
                                                </div>
                                                <input type="number" name="weight" class="form-control" placeholder="ادخل حجم المجوهرات ">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                                                </div>
                                                <input type="text" name="model" class="form-control" placeholder="ادخل موديل المجوهرات">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="new" id="status_jewlery">
                                                    <option value="">حـالة المجوهرات</option>
                                                    <option value="جديدة">جديدة</option>
                                                    <option value="مستعملـة">مستعملـة</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="status">
                                                    <option value="" >وضـع المركبة الحالي</option>
                                                    <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                                    <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                                    <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                                    <option value="جديده">جديده</option>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="Auction_type" id="mazad_fawery_jew" onchange="dispaly_time_jew()">
                                                    <option value="" >إضـافة إلـي</option>
                                                    <option value="مزاد فورى">مزاد فورى</option>
                                                    <option value="مزاد مسعر">مزاد مسعر</option>
                                                    <option value="مزاد مفتوح">مزاد مفتوح</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3" id ="period_product_jew">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="product_time">
                                                    <option value="0" >إتحديد الومن</option>
                                                    <option value="2">2</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-hands-helping"></i></span>
                                                </div>
                                                <select name="Guarant">
                                                    <option value="">الضمـان</option>
                                                    <option value="1">بضمـان</option>
                                                    <option value="0">بـدون  ضمـان</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                                </div>
                                                <input type="file" name="image" id="c_img">
                                            </div>
                                            <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                                            <input type="submit" name="add_jewl" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

                                        </form>
                                        <!-- ======================================== -->
                                    </div>
                                </div>
                            </div>
                            <!-- =========================================================== -->
                            <div class="card" id="builds_d">
                                <div class="card-body">
                                    <div class="forms">
                                        <form method="post" action="/addpropertiesform" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                </div>
                                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع العقـار">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" name="vendor" class="form-control" placeholder="ادخل اسـم البائع">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="text" name="street" class="form-control" placeholder="ادخل  إسم الشارع ">
                                                <input type="text" name="location" class="form-control" placeholder="ادخل إسم المنطقة ">
                                                <input type="text" name="city" class="form-control" placeholder="ادخل إسم المدينة  ">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                                </div>
                                                <input type="number" name="price" class="form-control" placeholder="ادخل سعـر العقار">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                                </div>
                                                <input type="number" name="SizeInMeter" class="form-control" placeholder=" ادخل مساحة العقار بالمتر">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-tint"></i></span>
                                                </div>
                                                <input type="number" name="floors" class="form-control" placeholder="ادخل عدد طوابق العقار ">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                                                </div>
                                                <input type="number" name="rooms" class="form-control" placeholder="ادخل عدد الغرف">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="new" id="status_properties">
                                                    <option value="">حـالة العقـار</option>
                                                    <option value="جديدة">جديدة</option>
                                                    <option value="مستعملـة">مستعملـة</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="status">
                                                    <option value="" >وضـع المركبة الحالي</option>
                                                    <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                                    <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                                    <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                                    <option value="جديده">جديده</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="Auction_type" id="mazad_fawery_pro" onchange="dispaly_time_pro()">
                                                    <option value="" >إضـافة إلـي</option>
                                                    <option value="مزاد فورى">مزاد فورى</option>
                                                    <option value="مزاد مسعر">مزاد مسعر</option>
                                                    <option value="مزاد مفتوح">مزاد مفتوح</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3" id="period_product_pro">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="product_time">
                                                    <option value="0" >إتحديد الومن</option>
                                                    <option value="2">2</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                </select>
                                            </div>


                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-hands-helping"></i></span>
                                                </div>
                                                <select name="Guarant">
                                                    <option value="">الضمـان</option>
                                                    <option value="1">بضمـان</option>
                                                    <option value="0">بـدون  ضمـان</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                                </div>
                                                <input type="file" name="image" id="c_img">
                                            </div>
                                            <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                                            <input type="submit" name="add_properties" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

                                        </form>
                                        <!-- ======================================== -->
                                    </div>
                                </div>
                            </div>
                            <!-- =========================================================== -->

                            <div class="card" id="high_d">
                                <div class="card-body">
                                    <div class="forms">

                                        <form method="post" action="/addhighvaluesform" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-award"></i></span>
                                                </div>
                                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع القيمة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" name="vendor" class="form-control" placeholder="ادخل اسـم البائع">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                                </div>
                                                <input type="number" name="price" class="form-control" placeholder="ادخل سعـر القيمة">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="new" id="status_highvalues">
                                                    <option value="">حـالة القيمة الثمينة</option>
                                                    <option value="جديدة">جديدة</option>
                                                    <option value="مستعملـة">مستعملـة</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                                </div>
                                                <select name="status">
                                                    <option value="" >وضـع المركبة الحالي</option>
                                                    <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                                    <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                                    <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                                    <option value="جديده">جديده</option>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="Auction_type" id="mazad_fawery_high" onchange="dispaly_time_high()">
                                                    <option value="" >إضـافة إلـي</option>
                                                    <option value="مزاد فورى">مزاد فورى</option>
                                                    <option value="مزاد مسعر">مزاد مسعر</option>
                                                    <option value="مزاد مفتوح">مزاد مفتوح</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3" id="period_product_high">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                                </div>
                                                <select name="product_time">
                                                    <option value="0" >تحديد الومن</option>
                                                    <option value="2">2</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-hands-helping"></i></span>
                                                </div>
                                                <select name="Guarant">
                                                    <option value="">الضمـان</option>
                                                    <option value="1">بضمـان</option>
                                                    <option value="0">بـدون  ضمـان</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                                </div>
                                                <input type="file" name="image" id="c_img">
                                            </div>
                                            <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                                            <input type="submit" name="add_properties" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

                                        </form>
                                        <!-- ======================================== -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog7">
                    <h4 class="text-center"> قائمه اضافاتي <hr class="ln"/></h4>
                    <div class="text-center">
                        <h3 class="text-center"> Cars </h3>
                        <h3 class="text-center"> Cars </h3>
                        <h3 class="text-center"> Cars </h3>
                        <h3 class="text-center"> Cars </h3>



                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog8">
                    <div class="card card-body">
                        <div id="model" class="model">
                            <div class="row use-box">
                                <div class="col-sm-6 col-md-4 cl">
                                    <div class="card">
                                        <div class="product">
                                            <div class="d-flex justify-content-between">
                                                <h5 style="color: #09c;">name</h5>
                                                <h5>test</h5>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 style="color: #09c;">pactage type </h5>
                                                <h5></h5>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 style="color: #09c;">price</h5>
                                            </div>
                                            <hr style="color: #09c;height: 2px">
                                            <div class="d-flex justify-content-around">
                                                <a onclick="editsubscribe()" class="btn btn-success">renewal</a>
                                                <a href="https://mesdakiafinal.000webhostapp.com/cansel/18" class="btn btn-danger">cancel</a>
                                            </div>
                                            <div class="modal-body" id="subscribe_id">
                                                <a href="https://mesdakiafinal.000webhostapp.com/sunshine_continue_pay/18/80/golden" class="btn btn-primary  btn-block"> Subscribe Gold</a>
                                                <a href="https://mesdakiafinal.000webhostapp.com/sunshine_continue_pay/18/110/Platinum" class="btn btn-primary  btn-block"> Platinum subscription</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body">
                        <div id="model" class="model">
                            <div class="row use-box">
                                <div class="col-sm-6 col-md-4 cl">
                                    <div class="card">
                                        <div class="product">
                                            <div class="d-flex justify-content-between">
                                                <h5 style="color: #09c;">name</h5>
                                                <h5>test</h5>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 style="color: #09c;">pactage type </h5>
                                                <h5></h5>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 style="color: #09c;">price</h5>
                                            </div>
                                            <hr style="color: #09c;height: 2px">
                                            <div class="d-flex justify-content-around">
                                                <a onclick="editsubscribe()" class="btn btn-success">renewal</a>
                                                <a href="https://mesdakiafinal.000webhostapp.com/cansel/18" class="btn btn-danger">cancel</a>
                                            </div>
                                            <div class="modal-body" id="subscribe_id">
                                                <a href="https://mesdakiafinal.000webhostapp.com/sunshine_continue_pay/18/80/golden" class="btn btn-primary  btn-block"> Subscribe Gold</a>
                                                <a href="https://mesdakiafinal.000webhostapp.com/sunshine_continue_pay/18/110/Platinum" class="btn btn-primary  btn-block"> Platinum subscription</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog9">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident8.
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog10">
                    <div class="card card-body">
                        <h4 class="text-center"> قائمه المرتجعات <hr class="ln"/></h4>
                        <div class="text-center">
                            <h3 class="text-center"> Cars </h3>
                            <h3 class="text-center"> Cars </h3>
                            <h3 class="text-center"> Cars </h3>
                            <h3 class="text-center"> Cars </h3>

                        </div>
                    </div>
                </div>
                <!-- ============================================== -->
                <div class="tabcontent" id="tog11">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident10.
                    </div>
                </div>
                <!-- ============================================== -->

                <!-- ============================================== -->
            </div>
        </div>
    </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/profile_user.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
