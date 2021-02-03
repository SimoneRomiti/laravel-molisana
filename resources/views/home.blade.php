
@extends('template');

@section('content')
	<main>
		<h2>LE LUNGHE</h2>
		<div class="cards-container">
			@foreach ($lunghe as $pasta)
				<div class="card">
					<div class="layover">
						{{ $pasta["titolo"] }}
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
						{{ $pasta["titolo"] }}
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
						{{ $pasta["titolo"] }}
					</div>
					<img src="{{$pasta['src']}}" alt="">
				</div>
			@endforeach
		</div>
	</main>
@endsection
