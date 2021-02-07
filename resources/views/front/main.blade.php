@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
    <!-- banner -->
    @include('front.layouts.inc.banner')
    <!-- banner end -->

    <!-- after banner -->
    @include('front.layouts.inc.after-banner')
    <!-- after banner end-->

    <!-- events -->
    @include('front.layouts.inc.events')
    <!-- events end -->

    <!-- blog -->
    {{--@include('front.layouts.inc.blog')--}}
    <!-- blog end -->

    <!-- subscribe -->
    @include('front.layouts.inc.subscribe')
    <!-- subscribe end -->

    <!-- team -->
    {{--@include('front.layouts.inc.team')--}}
    <!-- team end -->
@endsection
