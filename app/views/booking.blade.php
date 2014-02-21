@extends('layouts.master')

@section('meta')
	<link rel="stylesheet" href="{{ asset('static/css/flexslider/flexslider.css') }}" type="text/css">
@stop

@section('content')

	<div class="row">
		<div id="listing-id" class="col-xs-12 col-md-12">
			<h1> {{ $booking->description_title }} </h1>
			<h2> {{ $booking->uuid }} </h2>
		</div>
		<div class="col-xs-12 flexslider col-md-8">
			<ul class="slides">
				<li><img src="{{ asset('data/users/' . $booking->id_user . '/' . 'booking-storage/' . $booking->uuid . '/XB9274023-a.JPG') }}" /></li>
				<li><img src="{{ asset('data/users/' . $booking->id_user . '/' . 'booking-storage/' . $booking->uuid . '/XB9274023-b.JPG') }}" /></li>
				<li><img src="{{ asset('data/users/' . $booking->id_user . '/' . 'booking-storage/' . $booking->uuid . '/XB9274023-c.JPG') }}" /></li>
				<li><img src="{{ asset('data/users/' . $booking->id_user . '/' . 'booking-storage/' . $booking->uuid . '/XB9274023-d.JPG') }}" /></li>
				<li><img src="{{ asset('data/users/' . $booking->id_user . '/' . 'booking-storage/' . $booking->uuid . '/XB9274023-m.JPG') }}" /></li>
			</ul>
		</div>
		<div style="text-align: left">
		<div class="col-xs-12 col-md-4"><h4>Location: {{{ $booking->suburb_business }}}</h4></div>
		<div class="col-xs-12 col-md-4"><h4>Price: {{{ $booking->price }}} </h4></div>
		<div class="col-xs-12 col-md-4"><h4>Category: {{{ $booking->id_category_01 }}} </h4></div>
		<div class="col-xs-12 col-md-4"><p>{{{ $booking->description_content }}} </p></div>
		</div>
	</div>
@stop


@section('script')
	<script src="{{ asset('static/js/jquery.flexslider-min.js') }}"></script>

	<script type="text/javascript">
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide"
		  });
		});
	</script>
@stop
