<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href={{ asset("css/app.css") }}>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	@include('partials.header')

	<main>
		<h3>LE LUNGHE</h3>
		<div class="cards-container">
			@foreach ($lunghe as $pasta)
				<div class="card">
					<img src="{{$pasta['src']}}" alt="">
				</div>
			@endforeach
		</div>
	</main>

	@include('partials.footer')
	
</body>
</html>