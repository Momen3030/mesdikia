@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.categories')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
{{--                <li><i class="fa fa-dashboard"></i> @lang('site.categories')</li>--}}
                <li  class="active"><i class="fa fa-dashboard"></i> @lang('site.categories')</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.categories')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.categories.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                            <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.name')</th>
                                    <th>Sub Cat</th>
                                    <th>@lang('site.image')</th>
                                    <th></th>

{{--                                    <th>@lang('site.ownerID')</th>--}}
{{--                                    <th>@lang('site.viewers')</th>--}}
{{--                                    <th>@lang('site.producttime')</th>--}}
                                </tr>
                                </thead>

                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr>

                                        <td>{{$category->id}} </td>
                                        <td>{{$category->name}} </td>
                                        <td>
{{--                                            {{SubCat()}}--}}
                                            @if(is_null(SubCat($category->id)))
                                                <h1>fsdfsd </h1>
                                             @else
                                            @foreach(SubCat($category->id) as $cat)
                                                    {{$cat->name}} <br>


                                            @endforeach
                                            @endif
                                        </td>
                                        <td><img src="/productimages/{{$category->image}}" alt="error"></td>

                                        <td>
                                            <button onclick="window.location='{{route('dashboard.categories.edit',['id'=>$category->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.categories.destroy',[$category->id])}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                            </form>
                                            <button onclick="window.location='{{route('dashboard.categories.addsubcategory',['id'=>$category->id])}}'" class="btn btn-primary">@lang('site.add_subcategory')</button>
                                        </td>
{{--                                        @if($category->hasparent==null)--}}
{{--                                            <td>@lang('site.nothaveanycat')</td>--}}
{{--                                            @else--}}


{{--                                            @endif--}}

                                    </tr>
                                    @endforeach
                                    </tbody>

                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center pt-4">
                                @if (count($categories))
                                    {{$categories->links()}}
                                @endif

                            </div>
                    </div>
                </div>
            </div><!-- end of row -->
            </div>
    </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
