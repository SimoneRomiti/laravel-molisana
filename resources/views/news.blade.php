{{-- Pagina news, viene caricato il template comune a tutte le pagine con extends, attraverso section inserisco il main della pagina news che sarà differente da tutte le altre --}}

@extends('layouts.template')

@section('css')
	<link rel="stylesheet" href={{ asset("css/news.css") }}>
@endsection

@section('content')
		<main>
			<div>QUESTA E' LA PAGINA DELLE NEWS</div>
		</main>
@endsection