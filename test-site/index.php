<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Инсталляция фонтов -->
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Russo+One&display=swap" rel="stylesheet">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Russo+One&display=swap');
   </style>

   <title>МойКонспект</title>
   <link href= "../styles/style.css" rel="stylesheet">
</head>
<body> 
    <h1>Введение в HTML/CSS</h1>
<h2>Цель: знакомство с азами Hiper Text Markup Language, Cascading Style Sheets и Java Script</h2>
<p class = "quotation">"Начал писать короткий и смешной анекдот,<br>а получил длинный скушный роман, полный ошибок. <br> ... но все смеялись"<br>-RRA-</p>
<!-- div>(header>ul>li*2>a)+footer>p -->
<div>
   <header>
      <ul>
         <li><a href="https://epixx.github.io/emmet/" target="_blank">Тренажер Emmet</a></li>
         <li><a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet команды</a></li>
         <li><a href="https://open-vsx.org/extension/techer/open-in-browser" target="_blank">быстрое открытие в браузере</a></li>
         <li><a href="https://open-vsx.org/extension/ritwickdey/LiveServer" target="_blank">"Живой сервер"</a></li>
         <li>
            <a href="https://validator.w3.org/#validate_by_input" target="_blank">Валидатор страницы</a></li>
         <li><a href="https://disk.yandex.ru/d/Y7ZkabEUOUvOgg" target="_blank">Описание домашнего задания в яндексе</a></li>
      </ul>
   </header>
   <footer>
      <p>... to be continued</p>
   </footer>
</div>
    <h1> Сайт с домашним заданием ко второму семинару</h1>    
    <p>Да, с <kbd>Emmet</kbd>'ом создавать странички гораздо веселее. Жаль только, что труд по созданию <kbd>HTML</kbd> страниц так плохо оплачивается. Но, к сожалению, не всегда желания совпадают с возможностями.</p>
    <hr>
    <a href="hw2.html">перейти к ДЗ 2</a> 
    <br>
    <a href="hw3.html">перейти к ДЗ 3</a>
    <br>
    <a href="hw4.html">перейти к ДЗ 4</a>

    <!-- наличие или отсутствие этой строки влияет на то, что будет ли прочитан Style -->
    <?php echo phpinfo() ?>
</html>


