<header>
	<img src="{{ asset("img/marchio-sito-test.png") }}" alt="">

	<div class="nav-lg">
		<ul>
			
			<li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
				<a href="{{ route('home') }}">HOME</a>
			</li>

			<li class="{{ Route::currentRouteName() == 'product' ? 'active' : '' }}">
				<a href="{{ route('product', ['id' => 0]) }}">PRODOTTI</a>
			</li>

			<li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
				<a href="{{ route('news') }}">NEWS</a>
			</li>

		</ul>
	</div>

	<div class="hamburger">
		<i class="fas fa-bars"></i>
	</div>
		
</header>