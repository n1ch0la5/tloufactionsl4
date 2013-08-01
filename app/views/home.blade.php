@extends('layouts.master')

@section('header')
	@include('partials.header')
@stop

@section('content')
 <!-- First Band (Image) -->

  <div class="row">
    <div class="large-12 columns">
      <img src="http://placehold.it/1000x400&text=[img]">

      <hr>
    </div>
  </div>
<!-- Three-up Content Blocks -->
 
	<div class="row">
		<div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
	
    </div>
@stop

@section('footer')
	@include('partials.footer')
@stop