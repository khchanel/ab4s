@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-xs-12">Location: {{{ $booking->suburb_business }}} </div>
  		<div class="col-xs-12">Price: {{{ $booking->price }}} </div>
  		<div class="col-xs-12">Category: {{{ $booking->id_category_01 }}} </div>
  		<div class="col-xs-12">Description: {{{ $booking->description_content }}} </div>
	</div>
@stop

