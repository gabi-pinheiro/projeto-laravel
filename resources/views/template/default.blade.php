<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rêve D'amour</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">   
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Maze&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
<nav>
    <ul>        
        <li> <a href="/"> Home </a> </li>
        <li> <a href="/quemsomos"> curadores </a> </li>
        <!--<li> <a href="/cadastro"> cadastro </a> </li>-->
        <li> <a href="/login"> login </a> </li>
        <li> <a href="/produtos"> produtos </a> </li>
        <li> <a href="/contato"> contato </a> </li>
    </ul>
</nav>
</header>
</body>

    <div class="banner" id="main-banner">
    </div>
@yield('content')
<div class="comprar-button">
    <p>
        E aí,
        <br>
        <button><a href="/produtos">Partiu comprar?</a></button>
    </p>
    
</div>

</body>
<footer>
    <p>Criado por Gabriela Pinheiro e Lui Darcy Tiossi. Todos os Direitos reservados</p>
</footer>
</html>