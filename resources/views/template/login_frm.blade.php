@extends('template/login_layout')

@section('content')
<h3>Login</h3>
<form action="{{ route('login_submit')}}" method="post">
    @csrf
    <div>
        <label for="text_username">Usuario</label>
        <input type="text" name="text_username" id="text_username">
    </div>
    <div>
        <label for="text_password">Senha</label>
        <input type="password" name="text_password" id="text_password">
    </div>
    <div>
        <button type="submit">>Entrar</button>
    </div>
</form>

@endsection