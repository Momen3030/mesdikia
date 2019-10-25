

@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.jewleries')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.cars.index') }}"> @lang('site.jewleries')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.jewleries.update', [$jewlery->id]) }}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}

                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.name')</label>
                            <input type="text" name="type" value="{{$jewlery->type  }}" class="form-control" placeholder="ادخل اسـم و نـوع المجوهرات">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.material')</label>
                            <input type="text" name="material" value="{{$jewlery->material  }}" class="form-control" placeholder="المواد">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.gender')</label>
                            <input type="text" name="gender" value="{{$jewlery->gender  }}" class="form-control" placeholder="ادخل نوعم المجوهرات : ex : ماس ، دهب ، فضة">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.weight')</label>
                            <input type="number" name="weight" value="{{$jewlery->weight }}" class="form-control" placeholder="ادخل حجم المجوهرات ">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.price')</label>
                            <input type="number" name="price" value="{{$jewlery->price }}" class="form-control" placeholder="ادخل سعـر المجوهرات">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.ownerID')</label>
                            <input type="hidden" value="{{$jewlery->ownerID }}" name="ownerID">
                        </div>

                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.new')</label>
                            <select name="new" value="{{$jewlery->new }}" id="status_jewlery">
                                <option value="">حـالة المجوهرات</option>
                                <option value="جديدة">جديدة</option>
                                <option value="مستعملـة">مستعملـة</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.Auction_type')</label>
                            <select name="Auction_type" value="{{$jewlery->Auction_type }}"  id="mazad_fawery_jew" onchange="dispaly_time_jew()">
                                <option value="">إضـافة إلـي</option>
                                <option value="مزاد فورى">مزاد فورى</option>
                                <option value="مزاد مسعر">مزاد مسعر</option>
                                <option value="مزاد مفتوح">مزاد مفتوح</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.location')</label>
                            <input type="text" name="location" value="{{$jewlery->location }}" class="form-control" placeholder="الموقع">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.Guarant')</label>
                            <select name="Guarant" value="{{$jewlery->Guarant }}">
                                <option value="">الضمـان</option>
                                <option value="1">بضمـان</option>
                                <option value="0">بـدون  ضمـان</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block" >@lang('site.image')</label>
                            <input style="display: inline" type="file" name="image" id="c_img" value="{{ $jewlery->image }}" />
                            <img style="display: inline" width="100px" height="100px"  src="/productimages/{{$jewlery->image}}" alt="error">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.status')</label>
                            <select name="status" value="{{$jewlery->status }}" >
                                <option value="">وضـع المركبة الحالي</option>
                                <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                <option value="جديده">جديده</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

