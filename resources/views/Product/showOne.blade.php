@extends('layouts.main')

@section('main')
<section id="productDetail">
    @empty($product)  
	<header>
		<h2>No hay resultados para tu búsqueda ¯\_(ツ)_/¯</h2>
	</header>
    @endempty


	@if ($product)
	<main>
		<div class="container-left">
			<div class="images">
				{{-- {{#each imgs}} --}}
				<img src="/img/products/{{$product->img?$product->img:"/noImage.png"}}" alt="">
				{{-- {{/each}} --}}

				@if ($product->sale)
				<span class="sale">¡Oferta!</span>
			    @endif
			</div>
		</div>
		<div class="container-right">

			<div class="container-sticky">
				<div class="title">
					<h2 >{{$product->brand}} <span>{{$product->model}}</span></h2>
					<span class="category">{{$product->category->name}}</span>
				</div>
				<p class="description">{{$product->description}}</p>

				{{-- <div class="table-container">
					<table>
						<tbody>
							{{#each technical}}
							<tr>
								<th>{{this.prop}}</th>
								<td>{{this.value}}</td>
							</tr>
							{{/each}}
						</tbody>
					</table>
				</div> --}}
				<h3 class="price">${{$product->price}}</h3>
			</div>

			{{-- {{#if inCart}}
				<div class="counter">
					<a href="/cart/subtractProduct/{{_id}}">-</a>
					<span>{{quantity}}</span>
					<a href="/cart/addProduct/{{_id}}">+</a>
				</div>
			{{else}} --}}
				<div class="buttons">
					<a href="/cart/addProduct/{{$product->id}}" class="btn-primary">Añadir <span>+</span></a>
				</div>
			{{-- {{/if}} --}}


		</div>

	</main>
	@endif

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</section>
@endsection