<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectroStar</title>

    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header class="principal ">
        <h1>ElectroStar</h1>

        <form class="d-flex" role="search" action="/product/search">
			<input class="form-control me-2" type="search" placeholder="Buscar productos" aria-label="Search" name="q">
			<button class="btn btn-outline-success" type="submit">🔍</button>
		</form>

        <nav>
            <a href="/">Home</a>
            <a href="/product" id="productBtn">Products</a>
                <nav id="productNav">
                    @foreachCategories 
                        <a href='/product/seeCategory/{{$category->id}}/{{$category->name}}'>
                            {{$category->name}}  
                        </a>
                    @endforeachCategories 
                </nav>
            <a href="/product/sale">Sale</a>
            <a href="/cart" id="cartBtn">
                Cart 
                {{-- <span> {{/*quantityProducts*/5}} </span> --}}
            </a>

            {{-- {{{/*isSignin session*/ }}} --}}
                <nav id="accountNav">
                    <a href="/user/editPerfil">Edit Perfil</a>
                    <a href="/user/changePassword">Change Password</a>
                    <a href="/user/signout">Sign Out</a>
                </nav>
        </nav>
    </header>
    