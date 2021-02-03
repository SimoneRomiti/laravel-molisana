{{-- Pagina template da qui si parte per montare tutte le pagine del sito, header e footer sono inclusi e reteranno uguali per tutte le pagine, al posto del main abbiamo uno yeld in modo da inserire attraverso section il main di ogni singola pagina, abbiamo uno yeld anche nel css per aggiungere eventualmente un secondo file css per i main modificati --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href={{ asset("css/app.css") }}>
	@yield('css')

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	@include('partials.header')

	
	@yield('content')
	

	@include('partials.footer')
	
</body>
</html>