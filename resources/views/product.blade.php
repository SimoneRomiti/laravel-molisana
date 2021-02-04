@extends('layouts.template')
@section('css')
	<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('content')
	<div class="container">
		<h2>{{ $data[$id]['titolo'] }}</h2>
		<img src="{{ $data[$id]["src-h"] }}" alt="">
		<img src="{{ $data[$id]['src-p'] }}" alt="">
		<p>{!! $data[$id]['descrizione'] !!}</p>
	</div>
@endsection

