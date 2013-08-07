@extends('layouts.master')

@section('content')
 <!-- First Band (Image) -->

  <div class="row">
    <div class="large-6 large-centered columns">
     <!-- <img src="/images/header_image.jpg">-->
     {{ Form::open(array('url' => 'search', 'id' => 'form_search')) }}
      <div class="row collapse">
        <div class="small-10 columns">
          {{ Form::text('search', null, array('placeholder' => 'Search...'))}}
        </div>
         <div class="small-2 columns">
            <button class="button postfix radius">Search</button>
         </div>
      </div>
    </div>
  </div>
<!-- Three-up Content Blocks -->
 
	<div class="row">
		<div class="large-4 columns">
      <!--<img src="http://placehold.it/400x300&text=[img]" />-->
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
     <!--<img src="http://placehold.it/400x300&text=[img]" />-->
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
     <!--<img src="http://placehold.it/400x300&text=[img]" />-->
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
	
    </div>
@stop