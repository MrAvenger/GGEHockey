<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="<?php echo base_url()?>/assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/js/action.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/basic.css">
    
    <title>Global Goalie Expo</title>
    <style>
    .header {
        text-decoration: none;
        /*Убираем стандартное подчёркивание ссылки если оно ещё не убрано*/
        display: inline-block;
        /*делаем чтобы наша ссылка из строчного элемента превратилась в строчно-блочный 
line-height: 1; /*Задаём высоту строки (можно в пикселях)*/
        color: #2F73B6;
        /*Задаём цвет ссылки*/
    }

    .header:after {
        display: block;
        /*превращаем его в блочный элемент*/
        content: "";
        /*контента в данном блоке не будет поэтому в кавычках ничего не ставим*/
        height: 3px;
        /*задаём высоту линии*/
        width: 0%;
        /*задаём начальную ширину элемента (линии)*/
        background-color: #FF0000;
        /*цвет фона элемента*/
        transition: width 0.4s ease-in-out;
        /*данное свойство отвечает за плавное изменение ширины. Здесь можно задать время анимации в секундах (в данном случае задано 0.4 секунды)*/
    }

    .header:hover:after,
    .header:focus:after {
        width: 100%;
    }

    .header:hover {
        color: #225384;
    }
    </style>
    <style>
    .navbar-nav {
        margin-left: auto;
    }
    </style>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-dark">
        <div class="container-fluid">
            <!--- style="background-color: #00008B;"--->
            <a class="navbar-brand text-danger" href="/">
                <b class="fs-4">GGE</b>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ms-4">
                        <a class="nav-link header text-light fs-4" aria-current="page" href="spickers">Участники</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link header text-light fs-4" href="<?php echo base_url()?>/#program">Программа</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link header text-light fs-4" href="contacts">Контакты</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link header text-light fs-4 " href="<?php echo base_url()?>/#map"
                            aria-disabled="true">Место проведения</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a id="register" class="nav-link text-light fs-4 btn btn-danger" aria-disabled="true">Смотреть трансляцию</a>
                        <!-- <a class="nav-link text-light fs-4 btn btn-danger" href="https://forms.gle/nur5dTVnTpUoXmtg6" aria-disabled="true"
                            data-bs-toggle="modal" data-bs-target="#BuyModal">Купить билет</a> -->
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</head>

</html>