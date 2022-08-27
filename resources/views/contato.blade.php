@extends('template.default')
@section('content')

<div class="overlay-container"></div>
<div class="overlay"></div>
<div class="form">
    <h1> Entre em contato com a gente</h1>
    <form> 
        <input type="text" name="" id="" placeholder="Nome Completo">
        <br>
        <input type="email" name="" id="" placeholder="E-mail para resposta">
        <br>
        <input type="tel" name="" id="" placeholder="Telefone">
        <br>
        <textarea name="" id="" cols="30" rows="10"  placeholder="Escreva sua mensagem"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>



@endsection