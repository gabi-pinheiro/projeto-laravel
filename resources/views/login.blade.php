@extends('template.default')
@section('content')

<div class="form">
    <h1> Faça seu login </h1>
    <form> 
        <input type="email" name="" id="" placeholder="E-mail">
        <br>
        <input type="text" name="" id="" placeholder="Senha">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <p>ainda não tem uma conta? <a href="/cadastro">Cadastre-se</a></p>

</div>

@endsection