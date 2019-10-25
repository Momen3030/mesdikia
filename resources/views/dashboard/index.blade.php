@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>
        <section class="content">
            {{--    cars       --}}
            <div class="row">
                <h1>@lang('site.accept_order_car')</h1>
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.vendor')</th>
                        <th>@lang('site.color')</th>
                        <th>@lang('site.year')</th>
                        <th>@lang('site.new')</th>
                        <th>@lang('site.price')</th>
                        <th>@lang('site.model')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.Auction_type')</th>
                        <th>@lang('site.location')</th>
                        <th>@lang('site.Guarant')</th>
                        <th>@lang('site.viewers')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.producttime')</th>
                    </tr>
                    </thead>
                    @foreach($car_order as $car)
                        <tbody>
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->type}}</td>
                            <td>{{$car->vendor}}</td>
                            <td>{{$car->color}} </td>
                            <td>{{$car->year}}</td>
                            <td>{{$car->new}}</td>
                            <td>{{$car->price}}</td>
                            <td>{{$car->model}} </td>
                            <td>{{$car->ownerID}}</td>
                            <td>{{$car->Auction_type}} </td>
                            <td>{{$car->location}}</td>
                            <td>{{$car->Guarant}}</td>
                            <td>{{$car->viewers}}</td>
                            <td><img  src="/productimages/{{$car->image}}" alt="error"></td>
                            <td>{{$car->status}}</td>
                            <td>{{$car->producttime}}</td>
                            <td>
                                <button onclick="window.location='{{url('dashboard/Accept',
                                [
                                'id'=>$car->id,
                                'type'=>$car->type,'vendor'=>$car->vendor,
                                'color'=>$car->color,'year'=>$car->year,'new'=>$car->new,
                                'price'=>$car->price,'model'=>$car->model,'ownerID'=>$car->ownerID,'Auction_type'=>$car->Auction_type,
                                'location'=>$car->location,'Guarant'=>$car->Guarant,'viewers'=>$car->viewers
                                ,'image'=>$car->image,'status'=>$car->status,'producttime'=>$car->producttime
                                ]
                                )}}'" class="btn btn-info">@lang('site.accept')</button>
                                <button onclick="window.location='{{route('dashboard.reject',['id'=> $car->ownerID])}}'" class="btn btn-info">@lang('site.reject')</button>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($car_order))
                            {{$car_order->links()}}
                        @endif
                    </div>
                </div>
            </div><!--end of row-->
            {{--    jewelry       --}}
            <div class="row">
                <h1>@lang('site.accept_order_jewelry')</h1>
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.material')</th>
                        <th>@lang('site.weight')</th>
                        <th>@lang('site.price')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.new')</th>
                        <th>@lang('site.Auction_type')</th>
                        <th>@lang('site.Guarant')</th>
                        <th>@lang('site.viewers')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.producttime')</th>
                    </tr>
                    </thead>
                    @foreach($jeweler_order as $jeweler)
                        <tbody>
                        <tr>
                            <td>{{$jeweler->id}}</td>
                            <td>{{$jeweler->type}}</td>
                            <td>{{$jeweler->material}}</td>
                            <td>{{$jeweler->weight}}</td>
                            <td>{{$jeweler->price}}</td>
                            <td>{{$jeweler->ownerID}}</td>
                            <td>{{$jeweler->new}}</td>
                            <td>{{$jeweler->Auction_type}} </td>
                            <td>{{$jeweler->Guarant}}</td>
                            <td>{{$jeweler->viewers}}</td>
                            <td><img  src="/productimages/{{$jeweler->image}}" alt="error"></td>
                            <td>{{$jeweler->status}}</td>
                            <td>{{$jeweler->producttime }}</td>
                            <td>
                                <button onclick="window.location='{{url('dashboard/Accept_jew',
                                [
                                'id'=>$jeweler->id,
                                'type'=>$jeweler->type,
                                'material'=>$jeweler->material,
                                'weight'=>$jeweler->weight,
                                'price'=>$jeweler->price,
                                'ownerID'=>$jeweler->ownerID,
                                'new'=>$jeweler->new,
                                'Auction_type'=>$jeweler->Auction_type,
                                'Guarant'=>$jeweler->Guarant,
                                'viewers'=>$jeweler->viewers
                                ,'image'=>$jeweler->image,
                                'status'=>$jeweler->status,
                                'producttime'=>$jeweler->producttime
                                ])}}'" class="btn btn-info">@lang('site.accept')</button>
                                <button onclick="window.location='{{route('dashboard.reject',['id'=> $jeweler->ownerID])}}'" class="btn btn-info">@lang('site.reject')</button>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($jeweler_order))
                            {{ $jeweler_order->links()}}
                        @endif
                    </div>
                </div>
            </div>
            {{--    hightValue      --}}
            <div class="row">
                <h1>@lang('site.accept_order_highvalue')</h1>
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.price')</th>
                        <th>@lang('site.new')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.Auction_type')</th>
                        <th>@lang('site.Guarant')</th>
                        <th>@lang('site.viewers')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.producttime')</th>
                    </tr>
                    </thead>
                    @foreach($higvalue_order as $higvalue)
                        <tbody>
                        <tr>
                            <td>{{$higvalue->id}}</td>
                            <td>{{$higvalue->type}}</td>
                            <td>{{$higvalue->price}} </td>
                            <td>{{$higvalue->new}}</td>
                            <td>{{$higvalue->ownerID}}</td>
                            <td>{{$higvalue->Auction_type}} </td>
                            <td>{{$higvalue->Guarant}}</td>
                            <td>{{$higvalue->viewers}}</td>
                            <td><img  src="/productimages/{{$higvalue->image}}" alt="error"></td>
                            <td>{{$higvalue->status}}</td>
                            <td>{{$higvalue->producttime }}</td>
                            <td>
                                <button onclick="window.location='{{url('dashboard/Accept_high',
                                [
                                'id'=>$higvalue->id,
                                 'type'=>$higvalue->type,
                                'price'=>$higvalue->price,'new'=>$higvalue->new,
                               'ownerID'=>$higvalue->ownerID,'Auction_type'=>$higvalue->Auction_type,
                                'Guarant'=>$higvalue->Guarant,'viewers'=>$higvalue->viewers
                                ,'image'=>$higvalue->image,'status'=>$higvalue->status,'producttime'=>$higvalue->producttime
                                ])}}'" class="btn btn-info">@lang('site.accept')</button>
                                <button onclick="window.location='{{route('dashboard.reject',['id'=> $higvalue->ownerID])}}'" class="btn btn-info">@lang('site.reject')</button>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($higvalue_order))
                            {{ $higvalue_order->links()}}
                        @endif
                    </div>
                </div>
            </div>
            {{--    vichle     --}}
            <div class="row">
                <h1>@lang('site.accept_order_vichle')</h1>
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.year')</th>
                        <th>@lang('site.model')</th>
                        <th>@lang('site.vendor')</th>
                        <th>@lang('site.color')</th>
                        <th>@lang('site.new')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.price')</th>
                        <th>@lang('site.Auction_type')</th>
                        <th>@lang('site.location')</th>
                        <th>@lang('site.Guarant')</th>
                        <th>@lang('site.viewers')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.producttime')</th>
                    </tr>
                    </thead>
                    @foreach($vicales_order as $vicales)
                        <tbody>
                        <tr>
                            <td>{{$vicales->id}}</td>
                            <td>{{$vicales->type}}</td>
                            <td>{{$vicales->year}}</td>
                            <td>{{$vicales->model}} </td>
                            <td>{{$vicales->vendor}}</td>
                            <td>{{$vicales->color}}</td>
                            <td>{{$vicales->new}}</td>
                            <td>{{$vicales->status}}</td>
                            <td>{{$vicales->ownerID}}</td>
                            <td>{{$vicales->price}}</td>
                            <td>{{$vicales->Auction_type}} </td>
                            <td>{{$vicales->location}}</td>
                            <td>{{$vicales->Guarant}}</td>
                            <td>{{$vicales->viewers}}</td>
                            <td><img  src="/productimages/{{$vicales->image}}" alt="error"></td>
                            <td>{{$vicales->producttime}}</td>
                            <td>
                                <button onclick="window.location='{{url('dashboard/Accept_vich',
                                [
                                'id'=>$vicales->id,
                                'type'=>$vicales->type,'year'=>$vicales->year,
                                'model'=>$vicales->model,'vendor'=>$vicales->vendor,'color'=>$vicales->color,'new'=>$vicales->new,'status'=>$vicales->status,
                               'ownerID'=>$vicales->ownerID,'price'=>$vicales->price,'Auction_type'=>$vicales->Auction_type,
                                'location'=>$vicales->location,'Guarant'=>$vicales->Guarant,'viewers'=>$vicales->viewers
                                ,'image'=>$vicales->image,'producttime'=>$vicales->producttime
                                ])}}'" class="btn btn-info">@lang('site.accept')</button>
                                <button onclick="window.location='{{route('dashboard.reject',['id'=> $vicales->ownerID])}}'" class="btn btn-info">@lang('site.reject')</button>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($vicales_order))
                            {{ $vicales_order->links()}}
                        @endif
                    </div>
                </div>
            </div>
            {{--    property    --}}
            <div class="row">
                <h1>@lang('site.accept_order_property')</h1>
                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.street')</th>
                        <th>@lang('site.city')</th>
                        <th>@lang('site.new')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.floors')</th>
                        <th>@lang('site.price')</th>
                        <th>@lang('site.rooms')</th>
                        <th>@lang('site.SizeInMeter')</th>
                        <th>@lang('site.Auction_type')</th>
                        <th>@lang('site.location')</th>
                        <th>@lang('site.Guarant')</th>
                        <th>@lang('site.viewers')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.status')</th>
                        <th>@lang('site.producttime')</th>
                    </tr>
                    </thead>
                    @foreach($proparity_order as $proparity)
                        <tbody>
                        <tr>
                            <td>{{$proparity->id}}</td>
                            <td>{{$proparity->type}}</td>
                            <td>{{$proparity->street}} </td>
                            <td>{{$proparity->city}}</td>
                            <td>{{$proparity->new}}</td>
                            <td>{{$proparity->status}}</td>
                            <td>{{$proparity->ownerID}}</td>
                            <td>{{$proparity->floors}}</td>
                            <td>{{$proparity->price}}</td>
                            <td>{{$proparity->rooms}}</td>
                            <td>{{$proparity->SizeInMeter}}</td>
                            <td>{{$proparity->Auction_type}} </td>
                            <td>{{$proparity->location}}</td>
                            <td>{{$proparity->Guarant}}</td>
                            <td>{{$proparity->viewers}}</td>
                            <td><img  src="/productimages/{{$proparity->image}}" alt="error"></td>
                            <td>{{$proparity->status}}</td>
                            <td>{{$proparity->producttime }}</td>
                            <td>
                                <button onclick="window.location='{{url('dashboard/Accept_prop',
                                [
                                'id'=>$proparity->id,
                                'type'=>$proparity->type,'street'=>$proparity->street,
                                'city'=>$proparity->city,'new'=>$proparity->new,'status'=>$proparity->status,
                               'ownerID'=>$proparity->ownerID,'floors'=>$proparity->floors,'price'=>$proparity->price
                               ,'rooms'=>$proparity->rooms,'SizeInMeter'=>$proparity->SizeInMeter,'Auction_type'=>$proparity->Auction_type,
                                'location'=>$proparity->location,'Guarant'=>$proparity->Guarant,'viewers'=>$proparity->viewers
                                ,'image'=>$proparity->image,'producttime'=>$proparity->producttime
                                ])}}'" class="btn btn-info">@lang('site.accept')</button>
                                <button onclick="window.location='{{route('dashboard.reject',['id'=> $proparity->ownerID])}}'" class="btn btn-info">@lang('site.reject')</button>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($proparity_order))
                            {{ $proparity_order->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div><!-- end of content wrapper -->

@endsection
