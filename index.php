<?php

//if ($_GET['project']=='bern')
//    require('new-bern.html');
//        else if ($_GET['project']=='bernblack')
//    require('bern-black.html');
//        else if ($_GET['project']=='amsterdam')
//    require('new-amsterdam.html');
//        else if ($_GET['project']=='amsterdamblack')
//    require('amsterdam-black.html');
//        else if ($_GET['project']=='barselona')
//    require('new-barselona.html');
//        else if ($_GET['project']=='barselonawhite')
//    require('barselona-white.html');
//        else if ($_GET['project']=='bavaria')
//    require('new-bavaria.html');
//        else if ($_GET['project']=='bavariawhite')
//    require('bavaria-white.html');
//        else if ($_GET['project']=='bavariasewhite')
//    require('bavaria-se-white.html');
//        else if ($_GET['project']=='bavariamin')
//    require('new-bavariamin.html');
//        else if ($_GET['project']=='berlin')
//    require('new-berlin.html');
//        else if ($_GET['project']=='berlinblack')
//    require('berlin-black.html');
//        else if ($_GET['project']=='bremen')
//    require('new-bremen.html');
//        else if ($_GET['project']=='bremenblack')
//    require('bremen-black.html');
//        else if ($_GET['project']=='madrid')
//    require('new-madrid.html');
//        else if ($_GET['project']=='madrid-white')
//    require('new-madrid-white.html'); 
//        else if ($_GET['project']=='madrid-oak')
//    require('madrid-oak.html'); 
//        else if ($_GET['project']=='palermo')
//    require('new-palermo.html');
//        else if ($_GET['project']=='palermowhite')
//    require('palermo-white.html');
//        else if ($_GET['project']=='skandinavia')
//    require('new-skandinavia.html');
//        else if (isset($_GET['houses']))
// require('houses.html');
//         else if ($_GET['house'])
// require('house.html');
//    else
    if ($_GET['project'])
    {
        $mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql


$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);

$res=$mysql->query("SELECT * FROM projectUrman WHERE name='{$_GET['project']}'");
$project=$res->fetch_assoc();
$price=$project['p1']*1000000;
$project['p1']=number_format($price,0,'.',' ');
//$project['p1']=number_format($price,'.',' ');
require($_GET['project'].'.html');

}
else     require('index.html');
  
 
?>
