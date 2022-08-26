@extends('template.default')
@section('content')

<div class="contato-content">
   <h1> Quem somos? </h1>
    <div class="card">
        <h3>Gabriela</h3>
        <img src="{{url('img/gabriela.jpeg')}}" >
        <p>
            Uma verdadeira "alma de velha", ama tudo o que é vintage. Ópera, vestidos e 
            história são suas paixões. Sempre lendo livros antigos e querendo conversar sobre 
            os assuntos mais aleatórios, descobriu que os brechós são ambientes perfeitos para isso.
        </p>
    </div>
    <div class="card">
        <h3>Lui</h3>
        <img src="{{url('img/lui.jpeg')}}" >
        <p>
            Roupas escuras, delineador, coturno e hobbies maravilhosos. Fã de cartografia, gosta de 
            usar seus dotes artísticos para desenhar mapas e criar mundos fictícios cheios de vida. 
            Se quiser conversar sobre My Chemical Romance, ele é a pessoa certa!
        </p>
    </div>
</div>



@endsection