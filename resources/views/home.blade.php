{{-- Homepage, viene caricato il template comune a tutte le pagine con extends, attraverso section inserisco il main della homepage che sarà differente da tutte le altre --}}
{{-- per scrivere delle variabili di blade/php dentro l'html di un file blade.php devo usare le doppie graffe {{$variabile}} --}}

@extends('layouts.template');

@section('content')
	<main>
		<h2>LE LUNGHE</h2>
		<div class="cards-container">
			@foreach ($lunghe as $pasta)
				<div class="card">
					<div class="layover">
						<a href="{{ route('product', ['id' => $pasta['id']]) }}">
							{{ $pasta["titolo"] }}
						</a>
					</div>
					<img src="{{$pasta['src']}}" alt="">					
				</div>			
			@endforeach
		</div>

		<h2>LE CORTE</h2>
		<div class="cards-container">
			@foreach ($corte as $pasta)
				<div class="card">
					<div class="layover">
						<a href="{{ route('product', ['id' => $pasta['id']]) }}">
							{{ $pasta["titolo"] }}
						</a>
					</div>
					<img src="{{$pasta['src']}}" alt="">
				</div>
			@endforeach
		</div>

		<h2>LE CORTISSIME</h2>
		<div class="cards-container">
			@foreach ($cortissime as $pasta)
				<div class="card">
					<div class="layover">
						<a href="{{ route('product', ['id' => $pasta['id']]) }}">
							{{ $pasta["titolo"] }}
						</a>
					</div>
					<img src="{{$pasta['src']}}" alt="">
				</div>
			@endforeach
		</div>
	</main>
@endsection
