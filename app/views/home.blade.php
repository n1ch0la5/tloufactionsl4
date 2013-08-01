@extends('layouts.master')

@section('header')
	@include('partials.header')
	@parent {{--extra header content--}}
@stop

@section('content')
<p>Main content here</p>
@stop

@section('footer')
	@include('partials.header')
@stop