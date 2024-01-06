@if($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif

<form action="{{route('login.auth')}}" method="POST" enctype="multipart/form-data">
    @csrf
    Email:<br> <input name="email"><br>
    Senha:<br> <input type="password" name="password"><br>
    <input type="checkbox" name="remember" id="">Lembrar-me
    <button type="submit">Enviar</button>
</form>