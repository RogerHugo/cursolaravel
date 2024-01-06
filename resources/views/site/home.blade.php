@extends('site.layout')
@section('title', 'Home')
@section('conteudo')



<div class = "row container">

  @foreach($produtos as $produto)
    <div class ="col s12 m4">
      <div class = "card">
        <div class="card-image">
          <img src = "{{--$produto->imagem--}}{{asset('img/2.jpg')}}">
          {{--@can('verProduto', $produto)--}}
            <a href = "{{route('site.details', $produto->slug)}}" class ="btn-floating halfway-fab waves-effect waves-light red"><i ><img src ="{{asset('svg/visibility1.svg')}}"></i></a>
          {{--@endcan--}}
        </div>

        <div class = "card-content">
          <span class = "card-title"> {{Str::limit($produto->nome, 30)}} </span>
          <p> {{ Str::limit($produto->descricao, 20) }} </p>
        </div>
      </div>
   </div>
  @endforeach
  
   
</div>
<div class = "row center">
    {{ $produtos->links('custom.navigation') }}
</div>

@endsection