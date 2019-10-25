

@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.cars')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.cars.index') }}"> @lang('site.cars')</a></li>
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

                    <form action="{{ route('dashboard.cars.update', [$car->id]) }}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع السيارة" value="{{ $car->type}}" >
                        </div>
                        <div class="form-group">
                            <label>@lang('site.vendor')</label>
                            <input type="text" name="vendor" class="form-control" value="{{ $car->vendor }}" placeholder="ادخل اسـم البائع">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.location')</label>
                            <input type="text" name="location" class="form-control" value="{{ $car->location }}" placeholder="ادخل  المكـان ">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.price')</label>
                            <input type="number" name="price" class="form-control" value="{{ $car->price}}" placeholder="ادخل سعـر السيارة">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.color')</label>
                            <input type="text" name="color" class="form-control" value="{{ $car->color }}" placeholder="ادخل لون السيارة">
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.year')</label>
                            <input type="number" name="year" class="form-control" value="{{ $car->year }}" placeholder="ادخل موديل سنة السيارة">
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.new')</label>
                            <select name="new" id="status_car" value="{{ $car->new }}">
                                <option value="">حـالة السيارة</option>
                                <option value="جديدة">جديدة</option>
                                <option value="مستعملـة">مستعملـة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.status')</label>
                            <select name="status" value="{{ $car->status}}" >
                                <option value="">وضـع السيارة الحالي</option>
                                <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                <option value="جديده">جديده</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.Auction_type')</label>
                            <select name="Auction_type" value="{{ $car->Auction_type }} id="mazad_fawery_car" >
                            <option value="">إضـافة إلـي</option>
                            <option value="مزاد فورى">مزاد فورى</option>
                            <option value="مزاد مسعر">مزاد مسعر</option>
                            <option value="مزاد مفتوح">مزاد مفتوح</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.Guarant')</label>
                            <select name="Guarant" value="{{ $car->Guarant }} >
                                <option value="">الضمـان</option>
                            <option value="1">بضمـان</option>
                            <option value="0">بـدون  ضمـان</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block" >@lang('site.image')</label>
                            <input style="display: inline" type="file" name="image" id="c_img" value="{{ $car->image }}" />
                            <img style="display: inline" width="100px" height="100px"  src="/productimages/{{$car->image}}" alt="error">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="ownerID" value="{{ $car->ownerID }}">
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

