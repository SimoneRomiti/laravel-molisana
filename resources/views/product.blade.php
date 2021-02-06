@extends('layouts.template')
@section('css')
	<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('content')
	<div class="container">
		@if ($id > 0)
			<a href="{{ route('product', ['id' => $prev]) }}"><i class="fas fa-chevron-left"></i></a>
		@endif
		
		@if ($id < count($data) - 1)
			<a href="{{ route('product', ['id' => $next]) }}"><i class="fas fa-chevron-right"></i></a>
		@endif
		
		<h2>{{ $data[$id]['titolo'] }}</h2>
		<img src="{{ $data[$id]["src-h"] }}" alt="">
		<img src="{{ $data[$id]['src-p'] }}" alt="">
		<p>{!! $data[$id]['descrizione'] !!}</p>
	</div>
@endsection

