@extends('layouts.main')

@section('main')
<section id="products">
	<header>
		<h1>{{$title}}</h1>

		@empty($products)  
        <h2>No hay resultados para tu búsqueda ¯\_(ツ)_/¯</h2>
        @endempty

	</header>
	@if ($products)        
	<main>
		@foreach ($products as $product) 
		<div class="product">
			<div class="images">
				{{-- {{#each imgs}} --}}
				<img src="/img/products/{{$product->img?$product->img:"/noImage.png"}}" alt="">
				{{-- {{/each}} --}}
			</div>
			<div class="texts">
				<h2>{{$product->brand}} <span>{{$product->model}}</span></h2>

				<span>{{$product->category->name}}</span>

				<h3>${{$product->price}}</h3>

			</div>
			 
			{{-- {{#if inCart}}
			<div class="counter">
                <a href="/cart/subtractProduct/{{_id}}">-</a>
                <span>{{quantity}}</span>
                <a href="/cart/addProduct/{{_id}}">+</a>
            </div>
			{{else}} --}}
			<div class="buttons">
				<a href="/product/detail/{{$product->id}}/{{$product->brand}}-{{$product->model}}" class="btn-secondary">Ver mas</a>
				<a href="/cart/addProduct/{{$product->id}}" class="btn-primary">Añadir <span>+</span></a>
			</div>
			{{-- {{/if}} --}}


			@if ($product->sale)
				<span class="sale">¡Oferta!</span>
			@endif

		</div>
        @endforeach
        

	</main>
    @endif

</section>
@endsection