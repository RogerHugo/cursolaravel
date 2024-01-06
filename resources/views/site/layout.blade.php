<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'produtos')</title>
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uicons-solid-rounded.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uicons-regular-straight.css') }}" rel="stylesheet">
</head>
<body>
    <ul id='dropdown1' class='dropdown-content'>
        @foreach($categoriasMenu as $categoria)
        <li><a href="{{route('site.categoria', $categoria->id)}}">{{$categoria->nome}} </a></li>
        @endforeach
    </ul>

    <ul id='dropdown2' class='dropdown-content'>
      <li><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
      <li><a href="{{route('login.logout')}}">Logout </a></li>
  </ul>

    
    <nav class = "red">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">CursoLaravel</a>
          <ul id="nav-mobile" class="left">
            <li><a href="{{route('site.index')}}">Home</a></li>
            <li><a class='dropdown-trigger' href='' data-target='dropdown1'>Categoria</a> </li>
            <li><a href="{{route('site.carrinho')}}">Carrinho<span class="new badge blue" data-badge-caption="">{{\Cart::getContent()->count()}} </span></a></li>
          </ul>

          <ul id="nav-mobile" class="right">
            @auth
              <li><a class='dropdown-trigger' href='' data-target='dropdown2'>Ola {{auth()->user()->firstName}} </a> </li>
            @else
            <li><a href='{{route('login.form')}}' >  Login </a> </li>
            @endauth
          </ul>
        </div>
      </nav>
     
      

     
    @yield('conteudo')
 
    
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
</body>
</html>
