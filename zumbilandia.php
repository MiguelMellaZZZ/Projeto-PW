<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/icon" href="img/BreakPlayIcone.ico"/>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleFilms.css">
    <title>BreakPlay | ZUMBILANDIA</title>
    <style type="text/css">
        .neat {
        display: none;
        clear: both;
        margin-top:180px;
        }
    </style>
    <script type="text/javascript" src="jquery-1.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
        $('#animate-fade').click(function () {
        $('.neat').animate({ opacity : 'toggle' }, 'slow');
        });
        });
    </script>
</head>
<body class="bg-dark text-center" >
<nav class="navbar bg-dark navbar-gradient">   
        <div class="container">
            <a class="logo" href="PageShows.php">
                <img src="./img/logo.png" alt="Logo BreakPlay">
            </a>
        <div class="container">
            <ul  class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="PageShowsFilms.php">Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PageShowsSeries.php">Séries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PageShowsAnimes.php">Animes</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav">
                <li class="nav-items borda">
                    <a class="nav-link" href="PageExit.php">
                        Sair
                    </a>
                </li>
            </ul>
        </div>

        </div>
    </nav>
    <br><br><br><br><br>
    <div class="container" >    
        <table>
        <tr>
            <div>
                <td><img class="banner" src="img/Filmes/ZUMBILANDIA.png" alt="" width="280px"></td>
            </div>
        <td>
        <div style="margin-top:80px">
        <h4  class="txtone">ASSISTIR A ZUMBILANDIA</h4>
        
        <h1 class="txttwo">ZUMBILANDIA</h1>
        <div class="dados">
            <img style="filter:invert(100%);"src="img/calendario.png" alt="" width="32px">
            <h3 style="font-size:18px ;margin-left:8px;">
                2009
            </h3>
            <div class="dadosmin">
            <img style="filter:invert(100%);" src="img/relogio.png" alt="" width="32px">
            <h3 style="font-size:18px ;margin-left:4px;">
                88 min
            </h3>
            </div>
        </div>
            <div style="color:white; display:flex; margin-left:34px">
            <h3 style="font-size:16px">
                <strong>Diretor: </strong>Ruben Fleischer
            </h3>
            </div>
        <p style="color:white; display:flex; margin-left:15px; padding:20px;  text-align: justify;">
        A população é infectada com um vírus que faz 
        com que as pessoas se transformem em zumbis. Poucos são os humanos não infectados, 
        entre eles Columbus, que deseja voltar para sua cidade natal na esperança de encontrar 
        seus pais ainda vivos. No caminho, Columbus encontra Tallahassee, que está indo para 
        a Flórida para aniquilar zumbis, e pega carona. Ao parar em uma mercearia, a dupla 
        encontra Wichita e Little Rock, que aparenta ter sido mordida por um zumbi, o que 
        divide o grupo sobre o que fazer.</p>
        </td>
        </tr>
        </div>
        <td>
        <div class="container" >  
            <a id="animate-fade" class="efeito efeitoCont" style="
            margin-top:20px;
            border: 3.5px solid #96d9ff;
            display: block; 
            border-radius:10px;" href="#"><h2 style="padding-top:10px;color:white;">Assistir</h2></a>
        </div> 
        </td>
        </table>
        <div style="color:white;display:flex; margin-left:308px; padding:10px; margin-top:-170px; ">
                <h3 class="fixa"><strong>Ficha Técnica:</strong></h3>
                <a class="fixa" href="#">Filme</a>
                <p class="fixa">Classificação 14</p>
                <p class="fixa">Terror</p>
                <p class="fixa">Comédia</p>
                <p class="fixa">Assista em: Netflix</p>
            </div>   
            <iframe class="neat" width="765" height="470"src="https://www.youtube-nocookie.com/embed/AKrWDWNSBrY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    
    <br><br>
</body>
</html>

