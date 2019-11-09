@extends('website.layouts.master')

@section('content')
    <section class="small-section bg-gray-lighter">
{{--        <div class="relative container align-left">--}}

{{--            <div class="row">--}}
{{--                @if (app()->getLocale()=='en')--}}
{{--                    <div class="col-md-8">--}}
{{--                        <h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0">{{$page->pagename}}</h1>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 mt-30">--}}
{{--                        <div class="mod-breadcrumbs font-alt align-right">--}}
{{--                            <a href="{{url('home')}}">@lang('home.Home')</a>&nbsp;/&nbsp;<span>{{$page->pagename}}</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                @else--}}
{{--                    <div class="col-md-8">--}}
{{--                        <h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0">{{$page->pagename_ar}}</h1>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 mt-30">--}}
{{--                        <div class="mod-breadcrumbs font-alt align-right">--}}
{{--                            <a href="{{url('home')}}">@lang('home.Home')</a>&nbsp;/&nbsp;<span>{{$page->pagename_ar}}</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                @endif--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}



{{--    <!-- Blog Section -->--}}
{{--    <section class="page-section p-30">--}}
{{--        <div class="container relative">--}}

{{--            <div class="row multi-columns-row">--}}

{{--                <!-- Post Item -->--}}
{{--                <div class="col-md-8 col-md-offset-2">--}}

{{--                    @if (app()->getLocale()=='en')--}}
{{--                        <div class="post-prev-title font-alt">--}}
{{--                            <h2>{{$page->title}} </h2>--}}
{{--                        </div>--}}

{{--                        <p style="text-align:justify">--}}

{{--                            {!!$page->description!!}--}}

{{--                        </p>--}}

{{--                    @else--}}
{{--                        <div class="post-prev-title font-alt">--}}
{{--                            <h2>{{$page->title_ar}} </h2>--}}
{{--                        </div>--}}

{{--                        <p style="text-align:justify">--}}

{{--                            {!!$page->description_ar!!}--}}

{{--                        </p>--}}

{{--                    @endif--}}


{{--                </div>--}}
{{--                <!-- End Post Item -->--}}
{{--            </div>--}}

{{--        </div>--}}
    </section>
    <!-- End Blog Section -->
@endsection