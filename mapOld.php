<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Title -->
    <title>Жилой комплекс URMAN</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&amp;subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- custom styles (optional) -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90829262, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:false
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90829262" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



</head>

<body style="background-color: #364c3f !important;">

    <!--  DSN Loader
    ================================================== -->
    <div class="dsn-loader">
        <div class="dsn-up"></div>
        <div class="dsn-progress-page"></div>
        <div class="dsn-down"></div>
    </div>
    <!-- End DSN Loader
    ================================================== -->


    <!-- Sticky Menu
================================================== -->
    <div class="header-top nav-mobile">
        <div class="header-container">

            <div class="logo">
                <a href="/">
                    <img src="assets/img/logo-red-white.webp" alt="">
                </a>
            </div>

            <div class="menu-icon" data-dsn-grid="parallax" data-dsn-grid-move="50">
                <div class="icon-m">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
            </div>

            <div class="nav">
                <div class="inner">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/img/logo-red-green.webp" alt="">
                        </a>
                    </div>
                    <div class="nav__content">
                        <ul class="nav__list">
                         <li class="nav__list-item"><a href="project1.html">Расположение</a></li>
                         <li class="nav__list-item"><a href="project2.html">Генеральный план </a></li>
                       <li class="nav__list-item"><a href="project3.html">Концепция</a></li>
                       <li class="nav__list-item"><a target="_blank" href="https://vm-stroy.pro">Застройщик</a></li>
                            <li class="nav__list-item"><a href="contact.html">Контакты</a></li>
                        </ul>
                  
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="site-header">
        <div class="extend-container">
            <div class="inner-header">
                <div class="main-logo">
                    <a href="/">
                        <img src="assets/img/logo-red-white.webp" alt="">
                    </a>
                </div>
            </div>
            <nav class=" accent-menu main-navigation">
                <ul class="extend-container">
                     <li ><a href="project1.html">Расположение</a></li>
                         <li ><a href="project2.html">Генеральный план </a></li>
                       <li ><a href="project3.html">Концепция</a></li>
                       <li><a target="_blank" href="https://vm-stroy.pro">Застройщик</a></li>
                            <li ><a href="contact.html">Контакты</a></li>

                
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Sticky Menu
================================================== -->

    <main class="root">
        <div class="dsn-grid-color">

    


            <section class="intro section-padding" data-aos="fade-up">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div style="text-align: center;" class="info-title">
                                <h1>Выберите участок</h1>
                            </div>
                        </div>

                        <div class="col-lg-12">
                      

    <?
$mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql


$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);


?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap');

body{
    background-color: #364c3f;
}
/* transparent fullscreen background */
.mlctr-underlayer {
  position: fixed;
  width: 100%;
  height: 100%;
  top:0;
  left:0;
  background: rgba(0,0,0,0.8);
  font-size: 100%;
  font-family: 'Roboto Slab', Georgia, serif;
  z-index: 9990;
} 

/* master popup div container */
.mlctr-popup {
  position: fixed;
  left: 50%;
  margin-left: -429px;
  top: 50%;
  margin-top: -310px;
  width: 858px;
  height: 650px;
  background: transparent;
  padding: 0;
  text-align: center;
  border-radius: 0px;
  box-sizing: border-box;
}
.mlctr-img {
  position: relative;
  width: 858px;
  height: 500px;
  background: url(assets/img/popup-bg.webp) top center no-repeat;
  padding: 104px 20px 0 20px;
  text-align: right;
  box-sizing: border-box;
  margin-bottom: -80px;
  pointer-events: none;
}
.mlctr-box {
  background-color: #f5eddb;
  text-align: right;
  width: 780px;
  padding: 55px 30px 0 30px;
  margin: 0 39px;
  box-sizing: border-box;
}
.mlctr-close {
  display: block;
  position: absolute;
  right: 40px;
  top: 40px;
  width: 28px;
  height: 28px;
  background: url(https://www.mlcdn.eu/data/alkohol/close2.png) center center no-repeat;
  background-size: 26px 26px;
  cursor: pointer;
  -webkit-transition: -webkit-transform 0.5s;
  -moz-transition: -moz-transform 0.5s;
  -o-transition: -o-transform 0.5s;
  transition: transform 0.5s;
}
.mlctr-close:hover {
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}
.mlctr-close:active {
  top: 41px;
}
.mlctr-popup h1 {
  font-size: 26px;
  line-height: 32px;
  font-weight: 400;
  color: #fff;
  padding: 0px;
  margin: 0 0 0 0;
  box-sizing: border-box;
}
.mlctr-popup h1 b {
  font-size: 34px;
  line-height: 38px;
  font-weight: 700;
  color: #b39964;
  padding: 0px;
  margin: 0;
  box-sizing: border-box;
}
.mlctr-popup h1.mlctr-thx b {
  font-size: 32px;
  line-height: 30px;
}
.mlctr-popup h1.mlctr-thx b span {
  font-size: 25px;
}
.mlctr-popup h2 {
  position: absolute;
  width: 100%;
  font-size: 44px;
  line-height: 25px;
  font-weight: 700;
  text-align: center;
  color: #fff;
  padding: 0 17.5% 0 0;
  margin: 0;
  box-sizing: border-box;
  text-shadow: 0px 2px 11px #000000;
}
.mlctr-popup h2 span {
  font-size: 28px;
}
.mlctr-popup h2 b {
  font-size: 70px;
  font-weight: 700;
  line-height: 66px;
}
.mlctr-popup h3 {
  width: 100%;
  font-size: 12px;
  line-height: 18px;
  font-weight: 400;
  color: #fff;
  padding: 26px 0 0 360px;
  margin: 0;
  box-sizing: border-box;
}
.mlctr-popup p {
  position: absolute;
  top: 513px;
  width: 230px;
  font-size: 13px;
  line-height: 18px;
  font-weight: 300;
  color: #000;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.mlctr-popup p.mlctr-thx {
  width: 490px;
}
.mlctr-message-error {
  display: block;
  width: 100%;
  height: 48px;
  line-height: 20px;
  font-size: 13px;
  margin: 0;
  padding: 0 ;
  font-weight: 700;
  text-align: center;
  color: #ff0000;
  box-sizing: border-box;
}
.mlctr-popup input[type="text"] {
  width: 480px;
  height: 56px;
  font-family: 'Roboto Slab', Georgia, serif;
  font-size: 18px;
  font-weight: 400;
  line-height: 20px;
  padding: 2px 50px;
  background: url(assets/img/phone.webp) 15px center no-repeat;
  background-size: 27px 27px;
  background-color: RGBA(255,255,255,0.9);
  border: 1px solid #897344;
  border-radius: 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  color: #999999;
  text-align: left;
  margin: 0;
  -webkit-transition: all ease-in-out .15s;
  -moz-transition: all ease-in-out .15s;
  transition: all ease-in-out .15s;
  box-sizing: border-box;
}
.mlctr-popup input[type="text"]:focus {
  background-color: RGBA(255,255,255,1);
  outline: 0;
}
.mlctr-popup input[type="submit"], .mlctr-popup input[type="button"] {
  position: relative;
  width: 200px;
  height: 46px;
  font-family: 'Roboto Slab', Georgia, serif;
  font-size: 18px;
  line-height: 20px;
  font-weight: 400;
  padding: 0 10px 4px;
  margin: 0 0 0 -205px;
  border: 1px solid #ab363b;
  border-radius: 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  background-color: #ab363b;
  color: #ffffff;
  -webkit-transition: -webkit-transform 0.5s;
  -moz-transition: -moz-transform 0.5s;
  -o-transition: -o-transform 0.5s;
  transition: transform 0.5s;
  cursor: pointer;
  box-sizing: border-box;
  outline: 0;
}
.mlctr-popup input[type="button"] {
  margin: 28px 0 0 0;
  background-color: #b39964;
  border: 1px solid #897344;
}
.mlctr-popup input[type="submit"]:hover, .mlctr-popup input[type="button"]:hover {
  -webkit-transform: rotate(1.5deg);
  -moz-transform: rotate(1.5deg);
  -o-transform: rotate(1.5deg);
  transform: rotate(1.5deg);
}
.mlctr-popup input[type="submit"]:active, .mlctr-popup input[type="button"]:active {
  font-size: 19.5px;
  -webkit-transition: -webkit-transform 0.1s;
  -moz-transition: -moz-transform 0.1s;
  -o-transition: -o-transform 0.1s;
  transition: transform 0.1s;
  -webkit-transform: rotate(2.5deg);
  -moz-transform: rotate(2.5deg);
  -o-transform: rotate(2.5deg);
  transform: rotate(2.5deg);
}
.mlctr-privacy {
  width:100%;
  display: block;
  text-align: center;
  font-size: 14px;
  line-height: 18px;
  font-weight: 300;
  color: #000;
  padding: 25px 0 0 0;
  margin: 0;
}
.mlctr-popup .mlctr-privacy a {
  color: #fff;
}
 .svgg{
    width: 100vw;  background-color: #364c3f;
    }

@media (max-width: 1199px){
    
    .svgg{
        height: 100vh;
        transform:rotate(45deg);
        scale:2;
    }



/* master popup div container */
.mlctr-popup {

  margin-left: -300px;
 
 
  width: 600px;
  height: 650px;
 
}
.mlctr-img {
 
  width: 600px;
  height: 500px;

}
.mlctr-box {
  background-color: #f5eddb;
  text-align: right;
  width: 540px;
  padding: 55px 30px 0 30px;
  margin: 0 30px;
  box-sizing: border-box;
}



.mlctr-popup h1 {
  font-size: 18px;
  line-height: 24px;

}
.mlctr-popup h1 b {
  font-size: 20px;
  line-height: 28px;

}
.mlctr-popup h1.mlctr-thx b {
  font-size: 20px;
  line-height: 24px;
}
.mlctr-popup h1.mlctr-thx b span {
  font-size:17px;
}
.mlctr-popup h2 {

  font-size: 24px;
  line-height: 15px;

}
.mlctr-popup h2 span {
  font-size: 18px;
}
.mlctr-popup h2 b {
  font-size: 30px;
  font-weight: 700;
  line-height: 36px;
}

.mlctr-popup p {
  position: absolute;
  top: 513px;
  width: 230px;
  font-size: 13px;
  line-height: 18px;
  font-weight: 300;
  color: #000;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.mlctr-popup p.mlctr-thx {
  width: 390px;
}
.mlctr-message-error {
  display: block;
  width: 100%;
  height: 48px;
  line-height: 20px;
  font-size: 13px;
  margin: 0;
  padding: 0 ;
  font-weight: 700;
  text-align: center;
  color: #ff0000;
  box-sizing: border-box;
}
.mlctr-popup input[type="text"] {
  width: 320px;
  height: 56px;

}
.mlctr-popup input[type="text"]:focus {
  background-color: RGBA(255,255,255,1);
  outline: 0;
}
.mlctr-popup input[type="submit"], .mlctr-popup input[type="button"] {
  position: relative;
  width: 200px;
  height: 46px;
  font-family: 'Roboto Slab', Georgia, serif;
  font-size: 18px;
  line-height: 20px;
  font-weight: 400;
  padding: 0 10px 4px;
  margin: 0 0 0 -205px;
  border: 1px solid #ab363b;
  border-radius: 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  background-color: #ab363b;
  color: #ffffff;
  -webkit-transition: -webkit-transform 0.5s;
  -moz-transition: -moz-transform 0.5s;
  -o-transition: -o-transform 0.5s;
  transition: transform 0.5s;
  cursor: pointer;
  box-sizing: border-box;
  outline: 0;
}
.mlctr-popup input[type="button"] {
  margin: 28px 0 0 0;
  background-color: #b39964;
  border: 1px solid #897344;
}
.mlctr-popup input[type="submit"]:hover, .mlctr-popup input[type="button"]:hover {
  -webkit-transform: rotate(1.5deg);
  -moz-transform: rotate(1.5deg);
  -o-transform: rotate(1.5deg);
  transform: rotate(1.5deg);
}
.mlctr-popup input[type="submit"]:active, .mlctr-popup input[type="button"]:active {
  font-size: 19.5px;
  -webkit-transition: -webkit-transform 0.1s;
  -moz-transition: -moz-transform 0.1s;
  -o-transition: -o-transform 0.1s;
  transition: transform 0.1s;
  -webkit-transform: rotate(2.5deg);
  -moz-transform: rotate(2.5deg);
  -o-transform: rotate(2.5deg);
  transform: rotate(2.5deg);
}
.mlctr-privacy {
  width:100%;
  display: block;
  text-align: center;
  font-size: 14px;
  line-height: 18px;
  font-weight: 300;
  color: #000;
  padding: 25px 0 0 0;
  margin: 0;
}

}

path{
    cursor: pointer;
}
</style>
<!-- transparent fullscreen background -->


<div style="opacity: 0; display: none;" class="mlctr-underlayer">
 
  <!-- master popup div container -->
  <div style="opacity: 0;" class="mlctr-popup">
 
    <a class="mlctr-close" onclick="hidee2()"></a>
    <!-- following onsubmit event is required -->
    <form method="post" action="contactMap.php">
       <!-- following div will be overwritten with success message -->
       <div class="mlctr-message-success" style="display:block">
         <div class="mlctr-img">
           <h2 style="text-transform: uppercase;">УЧАСТОК №<i id="number">67</i> :  <br /><span><br /><i id="status">СВОБОДНЫЙ </i>   </span></h2>
           <h1>Забронируйте<br /></h1><h1><b>УЧАСТОК<br />МЕЧТЫ</b></h1>
         <h3>Оставьте свой номер телефона<br />и с Вами свяжется наш специалист<br />и поможет с любым вопросом</h3>
         </div>
         <div class="mlctr-box">
         <p>Согласен на обработку персональных данных и ознакомлен с политикой конфидециальности</p>
         <div class="mlctr-message-error"><!-- all customized error messages will be placed here -->
         </div>
           <label></label>
           <!-- input with attribute name="email" is required -->
           <input type="text" name="phone" value="" placeholder="+7987654321" /><input type="submit" value="Узнать подробнее" />
           <input name="number" id="inputNumber" type="hidden" value=""/>
        
         <div class="mlctr-privacy"></div>
         </div>
       </div>
       <!-- following div will replace the "mlctr-message-success" div -->
       <div class="mlctr-message-thanks" style="display:none">
        
       </div>
    </form>

   </div><!--/end of my-popup-container -->

</div><!--/end of my-popup-background-layer -->
<svg style="" class="svgg"  viewBox="0 0 1728 1212" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="URMAN &#208;&#147;&#208;&#149;&#208;&#157;&#208;&#159;&#208;&#155;&#208;&#144;&#208;&#157;" clip-path="url(#clip0_35_312)">
<rect width="1728" height="1212" fill="#364C3F"/>
<g id="&#208;&#161;&#208;&#165;&#208;&#149;&#208;&#156;&#208;&#144;">
<g id="Group">
<path id="Vector" d="M832.003 253.325L832.064 248.362" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_2" d="M832.079 246.514L832.14 241.581" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_3" d="M832.156 239.733L832.217 234.801" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_4" d="M832.232 232.952L832.278 228.02" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_5" d="M832.308 226.172L832.354 221.239" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_6" d="M832.369 219.391L832.431 214.459" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_7" d="M832.446 212.611L832.507 207.632L829.422 207.602" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_8" d="M827.574 207.587L822.64 207.526" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_9" d="M820.807 207.51L815.859 207.449" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_10" d="M814.026 207.434L809.093 207.388" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_11" d="M807.245 207.358L802.311 207.312" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_12" d="M800.463 207.296L795.53 207.235" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_13" d="M793.682 207.22L790.612 207.174L790.551 212.076" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_14" d="M790.535 213.909L790.474 218.842" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_15" d="M790.459 220.689L790.398 225.622" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_16" d="M790.383 227.47L790.337 232.403" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_17" d="M790.306 234.251L790.261 239.183" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_18" d="M790.215 241.031L790.169 245.964" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_19" d="M790.154 247.812L790.093 252.699L793.193 252.744" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_20" d="M795.026 252.775L799.959 252.851" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_21" d="M801.807 252.867L806.741 252.943" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_22" d="M808.589 252.974L813.522 253.05" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_23" d="M815.37 253.065L820.303 253.142" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_24" d="M822.151 253.172L827.085 253.248" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_25" d="M828.933 253.264L832.003 253.325" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_26" d="M783.494 352.864L783.464 356.3" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_27" d="M783.433 358.148L783.387 363.081" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_28" d="M783.372 364.929L783.311 369.861" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_29" d="M783.296 371.709L783.235 376.642" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_30" d="M783.219 378.49L783.158 383.423" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_31" d="M783.143 385.255L783.097 390.188" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_32" d="M783.067 392.036L783.021 396.968" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_33" d="M783.006 398.816L782.96 402.237L787.588 402.298" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_34" d="M789.436 402.313L794.369 402.375" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_35" d="M796.217 402.39L801.15 402.436" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_36" d="M802.983 402.466L807.901 402.512" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_37" d="M809.765 402.558L814.683 402.588" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_38" d="M816.546 402.619L821.464 402.68" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_39" d="M823.328 402.695L828.246 402.756" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_40" d="M830.109 402.772L834.722 402.833L834.752 399.412" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_41" d="M834.783 397.564L834.828 392.631" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_42" d="M834.844 390.784L834.905 385.851" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_43" d="M834.935 384.003L834.981 379.07" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_44" d="M835.012 377.223L835.073 372.29" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_45" d="M835.088 370.442L835.149 365.509" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_46" d="M835.164 363.661L835.21 358.729" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_47" d="M835.241 356.896L835.271 353.49H838.402" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_48" d="M840.251 353.49H845.184" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_49" d="M847.032 353.491H850.178L850.27 348.527" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_50" d="M850.3 346.679L850.392 341.747" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_51" d="M850.423 339.914L850.514 334.981" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_52" d="M850.56 333.134L850.652 328.201" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_53" d="M850.667 326.353L850.759 321.42" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_54" d="M850.789 319.573L850.881 314.64" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_55" d="M850.927 312.792L851.018 307.859" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_56" d="M851.049 306.011L851.141 301.079" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_57" d="M851.156 299.231L851.247 294.298" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_58" d="M851.293 292.466L851.385 287.533" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_59" d="M851.415 285.685L851.507 280.752" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_60" d="M851.553 278.905L851.645 273.972" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_61" d="M851.675 272.124L851.751 267.191" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_62" d="M851.782 265.343L851.874 260.411" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_63" d="M851.919 258.563L852.011 253.615L848.773 253.569" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_64" d="M846.925 253.539L841.992 253.478" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_65" d="M840.159 253.432L836.936 253.401L836.982 249.324" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_66" d="M836.997 247.491L837.043 242.574" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_67" d="M837.089 240.71L837.135 235.793" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_68" d="M837.165 233.93L837.211 229.012" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_69" d="M837.226 227.149L837.288 222.232" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_70" d="M837.303 220.369L837.364 215.451" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_71" d="M837.379 213.588L837.44 208.671" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_72" d="M837.456 206.808L837.486 202.761L832.873 202.715" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_73" d="M831.025 202.684L826.092 202.639" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_74" d="M824.244 202.623L819.311 202.562" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_75" d="M817.478 202.547L812.544 202.486" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_76" d="M810.696 202.471L805.763 202.41" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_77" d="M803.915 202.394L798.982 202.349" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_78" d="M797.134 202.318L792.2 202.272" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_79" d="M790.352 202.257L785.724 202.196L785.678 206.197" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_80" d="M785.663 208.045L785.602 212.977" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_81" d="M785.587 214.81L785.526 219.727" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_82" d="M785.511 221.591L785.449 226.508" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_83" d="M785.434 228.371L785.388 233.289" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_84" d="M785.358 235.152L785.312 240.069" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_85" d="M785.297 241.932L785.236 246.85" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_86" d="M785.22 248.713L785.159 252.699" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_87" d="M885.521 581.28L890.179 585.312" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_88" d="M887.537 578.959L892.196 582.99" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_89" d="M889.553 576.622L894.212 580.654" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_90" d="M891.569 574.301L896.228 578.333" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_91" d="M893.585 571.98L898.244 576.011" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_92" d="M895.602 569.628L900.275 573.675" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_93" d="M897.648 567.307L902.291 571.354" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_94" d="M899.664 564.97L904.307 569.017" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_95" d="M901.68 562.649L906.324 566.681" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_96" d="M903.696 560.312L908.34 564.344" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_97" d="M905.713 557.991L910.356 562.023" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_98" d="M907.729 555.67L912.372 559.701" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_99" d="M909.745 553.333L914.388 557.365" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_100" d="M911.761 551.012L916.404 555.044" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_101" d="M895.77 590.153L900.428 594.2" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_102" d="M897.786 587.832L902.444 591.863" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_103" d="M899.802 585.495L904.46 589.527" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_104" d="M901.818 583.174L906.476 587.205" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_105" d="M903.834 580.837L908.508 584.869" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_106" d="M905.865 578.516L910.524 582.548" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_107" d="M907.881 576.195L912.54 580.226" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_108" d="M909.897 573.858L914.556 577.89" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_109" d="M911.914 571.537L916.572 575.569" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_110" d="M913.93 569.2L918.588 573.232" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_111" d="M915.946 566.879L920.604 570.911" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_112" d="M917.962 564.527L922.62 568.59" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_113" d="M919.978 562.206L924.636 566.253" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_114" d="M921.994 559.885L926.668 563.932" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_115" d="M924.041 557.548L928.684 561.58" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_116" d="M926.057 555.227L930.7 559.259" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_117" d="M928.073 552.89L932.716 556.922" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_118" d="M930.089 550.569L934.732 554.601" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_119" d="M911.959 533.862L908.935 531.235" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_120" d="M907.515 530.029L903.803 526.807" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_121" d="M902.414 525.57L898.672 522.347" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_122" d="M897.282 521.141L893.555 517.919" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_123" d="M892.165 516.697L888.423 513.475" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_124" d="M887.033 512.268L881.764 507.702" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_125" d="M880.359 506.496L876.632 503.273" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_126" d="M875.242 502.067L871.531 498.829" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_127" d="M870.11 497.623L866.399 494.385" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_128" d="M864.994 493.179L861.267 489.941" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_129" d="M859.862 488.735L856.15 485.512" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_130" d="M854.73 484.306L851.018 481.084" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_131" d="M849.628 479.862L845.902 476.64" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_132" d="M844.497 475.433L840.77 472.196" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_133" d="M839.38 470.974L835.638 467.752" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_134" d="M834.248 466.545L830.521 463.323" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_135" d="M829.116 462.117L825.389 458.879" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_136" d="M824 457.673L820.273 454.45" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_137" d="M818.868 453.244L816.638 451.304L819.86 447.578" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_138" d="M821.067 446.173L824.305 442.447" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_139" d="M825.527 441.057L828.75 437.316" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_140" d="M829.956 435.926L833.179 432.2" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_141" d="M834.386 430.81L837.624 427.069L841.717 430.627" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_142" d="M843.122 431.833L846.833 435.056" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_143" d="M848.254 436.277L851.965 439.5" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_144" d="M853.355 440.706L857.097 443.944" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_145" d="M858.487 445.165L862.214 448.388" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_146" d="M863.604 449.594L870.523 455.565" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_147" d="M871.912 456.771L875.624 460.009" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_148" d="M877.029 461.216L880.756 464.438" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_149" d="M882.161 465.644L885.872 468.867" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_150" d="M887.293 470.088L891.004 473.311" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_151" d="M892.394 474.532L896.136 477.755" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_152" d="M897.526 478.976L901.253 482.199" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_153" d="M902.643 483.405L906.385 486.627" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_154" d="M907.775 487.834L911.501 491.071" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_155" d="M912.906 492.278L916.633 495.5" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_156" d="M918.023 496.722L921.765 499.959" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_157" d="M923.155 501.166L926.882 504.388" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_158" d="M928.287 505.594L932.013 508.817" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_159" d="M933.403 510.039L937.115 513.261" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_160" d="M938.535 514.467L941.315 516.88" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_161" d="M908.737 537.573L905.682 534.962" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_162" d="M904.292 533.74L900.581 530.518" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_163" d="M899.176 529.311L895.449 526.089" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_164" d="M894.044 524.883L890.332 521.645" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_165" d="M888.912 520.423L885.2 517.201" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_166" d="M883.81 515.995L876.678 509.81" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_167" d="M875.288 508.603L871.546 505.381" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_168" d="M870.156 504.174L866.429 500.937" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_169" d="M865.024 499.73L861.297 496.508" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_170" d="M859.908 495.302L856.166 492.079" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_171" d="M854.776 490.842L851.049 487.62" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_172" d="M849.659 486.414L845.917 483.191" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_173" d="M844.527 481.97L840.8 478.747" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_174" d="M839.395 477.541L835.669 474.319" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_175" d="M834.279 473.112L830.537 469.875" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_176" d="M829.147 468.653L825.435 465.431" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_177" d="M824.03 464.224L820.303 460.987" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_178" d="M818.898 459.78L815.187 456.558" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_179" d="M813.766 455.351L809.688 451.793L811.704 449.472" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_180" d="M812.911 448.067L816.134 444.341" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_181" d="M817.34 442.936L820.578 439.225" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_182" d="M821.785 437.835L825.023 434.093" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_183" d="M826.229 432.704L829.467 428.978" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_184" d="M830.674 427.572L833.897 423.846" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_185" d="M835.103 422.457L837.119 420.12L840.525 423.052" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_186" d="M841.931 424.274L845.642 427.511" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_187" d="M847.032 428.718L850.774 431.94" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_188" d="M852.164 433.162L855.891 436.384" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_189" d="M857.296 437.591L861.022 440.813" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_190" d="M862.412 442.019L866.154 445.257" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_191" d="M867.544 446.479L873.745 451.824" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_192" d="M875.135 453.045L878.862 456.283" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_193" d="M880.267 457.489L883.994 460.712" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_194" d="M885.384 461.933L889.126 465.156" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_195" d="M890.516 466.362L894.227 469.584" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_196" d="M895.632 470.791L899.359 474.028" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_197" d="M900.764 475.235L904.475 478.472" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_198" d="M905.896 479.679L909.607 482.916" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_199" d="M910.997 484.123L914.739 487.345" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_200" d="M916.129 488.552L919.856 491.774" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_201" d="M921.246 492.996L924.988 496.218" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_202" d="M926.378 497.424L930.104 500.662" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_203" d="M931.509 501.884L935.236 505.106" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_204" d="M936.626 506.312L940.368 509.535" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_205" d="M941.758 510.741L944.538 513.169" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_206" d="M802.861 459.673L807.214 463.415" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_207" d="M808.604 464.621L812.331 467.843" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_208" d="M813.736 469.05L817.463 472.287" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_209" d="M818.852 473.494L822.594 476.716" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_210" d="M823.984 477.923L827.726 481.145" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_211" d="M829.116 482.367L832.828 485.589" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_212" d="M834.248 486.795L837.96 490.018" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_213" d="M839.365 491.224L843.091 494.462" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_214" d="M844.497 495.668L848.223 498.89" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_215" d="M849.628 500.097L853.355 503.319" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_216" d="M854.76 504.541L858.472 507.763" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_217" d="M859.892 508.969L863.604 512.192" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_218" d="M864.994 513.398L868.736 516.636" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_219" d="M870.125 517.842L873.867 521.065" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_220" d="M875.257 522.271L878.984 525.493" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_221" d="M880.389 526.715L884.116 529.937" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_222" d="M885.506 531.144L889.248 534.366" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_223" d="M890.638 535.573L894.38 538.81" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_224" d="M895.77 540.017L899.496 543.239" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_225" d="M900.901 544.445L904.628 547.668" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_226" d="M906.033 548.889L910.356 552.615L908.126 555.212" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_227" d="M906.904 556.601L903.666 560.343" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_228" d="M902.459 561.732L899.237 565.443" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_229" d="M898.03 566.864L894.807 570.575" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_230" d="M893.585 571.98L890.363 575.691" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_231" d="M889.141 577.111L885.918 580.822" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_232" d="M884.696 582.212L881.474 585.953" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_233" d="M880.267 587.343L878.037 589.939L873.73 586.198" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_234" d="M872.31 584.991L868.598 581.753" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_235" d="M867.193 580.547L863.481 577.325" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_236" d="M862.061 576.118L858.35 572.865" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_237" d="M856.96 571.659L853.218 568.437" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_238" d="M851.828 567.23L848.101 564.008" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_239" d="M846.711 562.786L842.969 559.564" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_240" d="M841.579 558.358L837.853 555.12" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_241" d="M836.447 553.898L832.721 550.676" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_242" d="M831.331 549.47L827.604 546.247" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_243" d="M826.199 545.041L822.472 541.803" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_244" d="M821.082 540.597L817.34 537.375" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_245" d="M815.95 536.153L812.239 532.915" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_246" d="M810.834 531.709L807.107 528.487" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_247" d="M805.702 527.28L801.991 524.058" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_248" d="M800.601 522.836L796.859 519.614" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_249" d="M795.469 518.392L791.742 515.17" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_250" d="M790.337 513.948L786.61 510.726" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_251" d="M785.22 509.519L781.494 506.297" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_252" d="M780.088 505.091L776.362 501.853" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_253" d="M774.972 500.647L770.665 496.905L772.849 494.37" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_254" d="M774.055 492.965L777.278 489.239" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_255" d="M778.485 487.834L781.723 484.123" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_256" d="M782.929 482.703L786.152 478.992" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_257" d="M787.359 477.602L790.581 473.86" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_258" d="M791.803 472.471L795.026 468.729" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_259" d="M796.232 467.34L799.455 463.613" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_260" d="M800.662 462.208L802.861 459.673" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_261" d="M806.511 521.446L803.014 518.407" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_262" d="M801.609 517.201L797.882 513.979" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_263" d="M796.492 512.757L792.765 509.535" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_264" d="M791.36 508.328L787.633 505.091" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_265" d="M786.244 503.869L782.502 500.646" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_266" d="M781.112 499.44L777.614 496.401L781.02 492.461" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_267" d="M782.227 491.071L785.449 487.345" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_268" d="M786.671 485.94L789.894 482.214" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_269" d="M791.101 480.824L794.323 477.083" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_270" d="M795.53 475.693L798.768 471.951" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_271" d="M799.974 470.562L803.38 466.622L806.802 469.584" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_272" d="M808.207 470.791L811.934 474.028" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_273" d="M813.339 475.235L817.065 478.457" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_274" d="M818.471 479.664L822.182 482.886" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_275" d="M823.602 484.108L827.314 487.33" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_276" d="M828.734 488.536L832.156 491.499" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_277" d="M836.646 495.393L838.968 497.409" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_278" d="M840.388 498.615L844.099 501.838" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_279" d="M845.52 503.044L849.231 506.282" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_280" d="M850.636 507.488L854.363 510.711" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_281" d="M855.768 511.917L859.495 515.139" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_282" d="M860.9 516.361L864.612 519.583" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_283" d="M866.032 520.79L868.354 522.805" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_284" d="M874.066 527.769L877.777 530.976" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_285" d="M879.183 532.182L882.909 535.42" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_286" d="M884.299 536.626L888.041 539.849" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_287" d="M889.431 541.055L893.173 544.277" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_288" d="M894.563 545.499L898.305 548.721" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_289" d="M899.695 549.928L903.391 553.135L899.954 557.105" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_290" d="M898.748 558.51L895.51 562.221" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_291" d="M894.303 563.641L891.065 567.352" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_292" d="M889.859 568.742L886.621 572.468" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_293" d="M885.414 573.874L882.191 577.6" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_294" d="M880.985 578.99L877.533 582.975L873.913 579.829" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_295" d="M872.508 578.623L868.797 575.401" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_296" d="M867.376 574.194L863.665 570.972" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_297" d="M862.275 569.75L858.548 566.528" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_298" d="M857.143 565.321L853.416 562.084" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_299" d="M852.026 560.862L848.391 557.731" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_300" d="M832.156 491.499L828.75 495.485" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_301" d="M827.558 496.875L824.351 500.631" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_302" d="M823.144 502.021L819.937 505.778" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_303" d="M818.746 507.167L815.538 510.924" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_304" d="M814.316 512.329L811.109 516.086" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_305" d="M809.902 517.476L806.511 521.446" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_306" d="M836.646 495.393L833.255 499.364" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_307" d="M832.049 500.784L828.841 504.51" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_308" d="M827.635 505.93L824.427 509.672" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_309" d="M823.236 511.077L820.029 514.819" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_310" d="M818.807 516.224L815.599 519.965" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_311" d="M814.408 521.37L811.002 525.341" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_312" d="M868.354 522.806L864.948 526.807" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_313" d="M863.741 528.212L860.534 531.953" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_314" d="M859.312 533.358L856.104 537.1" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_315" d="M854.913 538.505L851.706 542.246" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_316" d="M850.499 543.636L847.292 547.393" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_317" d="M846.1 548.798L842.679 552.783" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_318" d="M874.066 527.769L870.66 531.755" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_319" d="M869.453 533.16L866.246 536.901" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_320" d="M865.055 538.306L861.847 542.048" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_321" d="M860.641 543.453L857.433 547.194" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_322" d="M856.227 548.614L853.019 552.341" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_323" d="M851.828 553.761L848.391 557.731" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_324" d="M811.002 525.341L813.339 527.372" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_325" d="M814.729 528.578L818.471 531.8" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_326" d="M819.86 533.007L823.572 536.244" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_327" d="M824.992 537.451L828.704 540.673" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_328" d="M830.109 541.88L833.82 545.102" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_329" d="M835.241 546.339L838.952 549.561" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_330" d="M840.342 550.768L842.679 552.783" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_331" d="M1035.48 591.909L1031.75 588.687" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_332" d="M1030.34 587.48L1026.62 584.258" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_333" d="M1025.23 583.036L1021.49 579.814" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_334" d="M1020.1 578.592L1016.37 575.37" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_335" d="M1014.98 574.148L1011.24 570.926" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_336" d="M1009.85 569.72L1006.12 566.497" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_337" d="M1004.72 565.291L1000.99 562.053" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_338" d="M999.599 560.847L995.857 557.625" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_339" d="M994.467 556.403L990.755 553.165" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_340" d="M989.35 551.959L985.623 548.737" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_341" d="M984.218 547.53L980.507 544.308" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_342" d="M979.086 543.086L975.375 539.864" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_343" d="M973.985 538.657L970.243 535.435" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_344" d="M968.853 534.198L965.126 530.976" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_345" d="M963.736 529.769L959.46 526.089L955.672 530.472" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_346" d="M954.435 531.862L951.212 535.573" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_347" d="M950.006 536.993L946.783 540.704" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_348" d="M945.576 542.109L942.338 545.835" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_349" d="M941.132 547.24L937.909 550.951" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_350" d="M936.687 552.341L933.449 556.082" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_351" d="M932.243 557.472L929.02 561.198" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_352" d="M927.813 562.603L924.591 566.329" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_353" d="M923.369 567.719L920.146 571.445" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_354" d="M918.939 572.85L915.701 576.576" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_355" d="M914.48 577.966L911.257 581.708" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_356" d="M910.05 583.097L906.828 586.824" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_357" d="M905.621 588.213L902.383 591.955" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_358" d="M901.176 593.344L897.938 597.055" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_359" d="M896.732 598.46L892.929 602.859L897.205 606.554" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_360" d="M898.595 607.761L902.337 610.983" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_361" d="M903.727 612.205L907.454 615.427" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_362" d="M908.844 616.634L912.586 619.856" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_363" d="M913.976 621.062L917.687 624.315" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_364" d="M919.092 625.521L922.819 628.744" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_365" d="M924.224 629.95L927.935 633.188" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_366" d="M929.356 634.394L933.067 637.617" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_367" d="M934.457 638.823L938.184 642.076" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_368" d="M939.589 643.282L943.316 646.505" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_369" d="M944.706 647.711L948.448 650.933" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_370" d="M949.838 652.155L953.564 655.377" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_371" d="M954.954 656.584L958.696 659.821" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_372" d="M960.086 661.043L963.813 664.265" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_373" d="M965.203 665.472L968.945 668.694" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_374" d="M970.335 669.901L974.596 673.612" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_375" d="M1013.18 621.551L1015.42 618.985" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_376" d="M1016.63 617.58L1019.85 613.854" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_377" d="M1021.06 612.449L1024.3 608.738" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_378" d="M1025.5 607.318L1028.72 603.607" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_379" d="M1029.93 602.217L1033.15 598.491" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_380" d="M1034.38 597.086L1037.61 593.36" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_381" d="M1038.82 591.97L1042.04 588.229" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_382" d="M1043.27 586.839L1045.48 584.273L1043.08 582.196" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_383" d="M1041.68 580.99L1037.95 577.768" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_384" d="M1036.54 576.531L1032.83 573.308" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_385" d="M1031.41 572.102L1027.7 568.88" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_386" d="M1026.31 567.673L1022.59 564.436" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_387" d="M1021.18 563.229L1017.45 560.007" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_388" d="M1016.06 558.8L1012.32 555.578" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_389" d="M1010.93 554.341L1007.2 551.119" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_390" d="M1005.8 549.912L1002.07 546.69" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_391" d="M1000.68 545.468L996.956 542.246" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_392" d="M995.551 541.04L991.824 537.817" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_393" d="M990.434 536.611L986.692 533.358" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_394" d="M985.303 532.152L981.591 528.929" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_395" d="M980.186 527.723L976.459 524.485" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_396" d="M975.054 523.279L971.343 520.057" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_397" d="M969.922 518.85L967.524 516.758L965.585 518.988" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_398" d="M964.378 520.408L961.155 524.119" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_399" d="M959.933 525.524L956.711 529.25" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_400" d="M955.504 530.655L952.281 534.366" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_401" d="M951.075 535.756L947.837 539.497" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_402" d="M946.615 540.887L943.392 544.613" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_403" d="M942.186 546.018L938.948 549.744" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_404" d="M937.741 551.134L935.801 553.379" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_405" d="M1033.67 590.351L1035.49 588.259" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_406" d="M1036.7 586.869L1038.52 584.762L1034.74 581.463" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_407" d="M1033.34 580.257L1029.64 577.019" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_408" d="M1028.25 575.782L1024.52 572.545" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_409" d="M1023.13 571.338L1019.44 568.085" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_410" d="M1018.03 566.864L1014.32 563.611" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_411" d="M1012.93 562.405L1009.22 559.167" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_412" d="M1007.83 557.93L1004.1 554.692" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_413" d="M1002.71 553.486L999.018 550.233" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_414" d="M997.628 549.027L993.902 545.789" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_415" d="M992.512 544.552L988.8 541.315" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_416" d="M987.41 540.108L983.699 536.855" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_417" d="M982.294 535.634L978.597 532.396" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_418" d="M977.208 531.174L973.481 527.937" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_419" d="M972.091 526.715L968.319 523.417L965.768 526.349" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_420" d="M964.561 527.753L961.339 531.48" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_421" d="M960.117 532.869L956.894 536.58" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_422" d="M955.687 538.001L952.449 541.712" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_423" d="M951.227 543.117L948.005 546.843" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_424" d="M946.798 548.248L943.576 551.959" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_425" d="M942.369 553.349L939.818 556.311" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_426" d="M934.686 562.191L932.212 565.046" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_427" d="M931.005 566.436L927.767 570.162" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_428" d="M926.561 571.567L924.087 574.408" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_429" d="M920.879 578.134L917.641 581.845" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_430" d="M916.435 583.265L913.197 586.976" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_431" d="M911.99 588.381L908.767 592.092" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_432" d="M907.561 593.512L904.338 597.223" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_433" d="M903.116 598.613L899.878 602.355L902.994 605.027" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_434" d="M904.384 606.249L908.111 609.487" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_435" d="M909.516 610.693L913.242 613.915" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_436" d="M914.632 615.137L918.374 618.359" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_437" d="M919.764 619.566L923.491 622.788" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_438" d="M924.881 623.994L928.623 627.247" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_439" d="M930.013 628.454L933.724 631.676" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_440" d="M935.129 632.883L938.856 636.12" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_441" d="M940.261 637.326L943.973 640.549" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_442" d="M945.393 641.755L949.104 645.008" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_443" d="M950.494 646.214L954.221 649.437" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_444" d="M955.626 650.643L959.353 653.865" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_445" d="M960.743 655.087L964.485 658.309" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_446" d="M965.875 659.516L969.601 662.753" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_447" d="M970.991 663.975L974.107 666.663L975.879 664.586" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_448" d="M977.101 663.196L980.339 659.455" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_449" d="M981.545 658.065L984.768 654.354" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_450" d="M985.99 652.949L989.213 649.223" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_451" d="M990.419 647.818L993.642 644.107" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_452" d="M994.848 642.687L998.086 638.976" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_453" d="M999.293 637.586L1002.53 633.844" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_454" d="M1003.74 632.455L1006.98 628.729" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_455" d="M1008.18 627.339L1009.95 625.262" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_456" d="M948.341 595.391L952.129 591.008" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_457" d="M953.335 589.603L956.573 585.877" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_458" d="M957.78 584.487L961.002 580.746" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_459" d="M962.209 579.356L965.462 575.645" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_460" d="M966.669 574.225L970.457 569.842L974.26 573.14" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_461" d="M975.665 574.362L979.392 577.584" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_462" d="M980.782 578.791L984.524 582.013" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_463" d="M985.913 583.219L989.625 586.457" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_464" d="M991.03 587.664L994.757 590.901" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_465" d="M996.162 592.108L999.873 595.345" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_466" d="M1001.29 596.552L1005.01 599.774" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_467" d="M1006.4 600.98L1010.14 604.202" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_468" d="M1011.53 605.424L1015.25 608.647" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_469" d="M1016.64 609.853L1020.46 613.152" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_470" d="M952.052 598.613L954.236 596.094" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_471" d="M955.443 594.704L958.681 590.978" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_472" d="M959.903 589.572L963.126 585.846" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_473" d="M964.332 584.456L967.57 580.73" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_474" d="M968.777 579.325L970.961 576.805L972.901 578.485" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_475" d="M974.29 579.692L978.032 582.914" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_476" d="M979.422 584.121L983.149 587.373" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_477" d="M984.539 588.58L988.281 591.802" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_478" d="M989.671 593.009L993.382 596.231" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_479" d="M994.803 597.453L998.514 600.675" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_480" d="M999.919 601.881L1003.63 605.104" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_481" d="M1005.05 606.31L1008.76 609.563" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_482" d="M1010.15 610.769L1013.89 613.992" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_483" d="M1015.28 615.198L1017.24 616.878" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_484" d="M920.879 578.134L924.193 581.02" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_485" d="M925.614 582.242L929.325 585.464" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_486" d="M930.73 586.671L934.457 589.893" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_487" d="M935.862 591.1L939.574 594.337" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_488" d="M940.994 595.544L944.706 598.766" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_489" d="M946.096 599.988L949.822 603.225" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_490" d="M951.228 604.432L954.954 607.654" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_491" d="M956.344 608.86L960.086 612.083" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_492" d="M961.476 613.304L965.203 616.527" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_493" d="M966.608 617.733L969.922 620.635L973.741 616.252" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_494" d="M974.947 614.832L978.17 611.121" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_495" d="M979.392 609.731L982.614 605.989" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_496" d="M983.821 604.6L987.044 600.873" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_497" d="M988.281 599.484L992.069 595.085" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_498" d="M998.82 645.665L1001.11 647.635" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_499" d="M1002.52 648.856L1006.24 652.079" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_500" d="M1007.63 653.3L1011.37 656.523" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_501" d="M1012.76 657.744L1016.48 660.967" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_502" d="M1017.9 662.173L1020.19 664.158L1025.12 664.479" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_503" d="M1026.97 664.586L1031.87 664.907" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_504" d="M1033.73 665.014L1038.65 665.319" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_505" d="M1040.49 665.457L1045.42 665.762" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_506" d="M1047.25 665.869L1052.19 666.19" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_507" d="M1054.03 666.312L1058.95 666.632" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_508" d="M1060.8 666.739L1065.73 667.045" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_509" d="M1059.59 661.715L1056.87 659.394" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_510" d="M1055.48 658.172L1051.76 654.95" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_511" d="M1050.37 653.743L1046.63 650.506" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_512" d="M1045.24 649.284L1041.52 646.062" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_513" d="M1040.1 644.855L1036.39 641.633" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_514" d="M1034.99 640.427L1031.26 637.189" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_515" d="M1029.86 635.983L1026.14 632.76" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_516" d="M1024.75 631.554L1021.01 628.301" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_517" d="M1019.62 627.094L1016.92 624.773" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_518" d="M1094.13 649.238L1097.84 652.461" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_519" d="M1099.23 653.667L1102.97 656.889" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_520" d="M1104.36 658.111L1108.09 661.349" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_521" d="M1109.49 662.555L1113.22 665.777" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_522" d="M1114.61 666.999L1118.33 670.221L1114.97 674.345" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_523" d="M1113.83 675.765L1110.71 679.583" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_524" d="M1109.54 681.033L1106.42 684.836" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_525" d="M1105.25 686.287L1102.13 690.105" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_526" d="M1100.97 691.525L1097.85 695.358" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_527" d="M1096.69 696.794L1093.33 700.917L1088.47 700.596" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_528" d="M1086.64 700.489L1081.71 700.184" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_529" d="M1079.88 700.046L1074.94 699.741" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_530" d="M1073.09 699.634L1068.19 699.313" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_531" d="M1066.33 699.191L1061.43 698.886" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_532" d="M1059.58 698.764L1054.66 698.458" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_533" d="M1052.81 698.351L1047.88 698.031" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_534" d="M1046.05 697.908L1041.11 697.603" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_535" d="M1039.28 697.481L1034.35 697.176" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_536" d="M1032.5 697.053L1027.59 696.732" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_537" d="M1025.73 696.626L1020.83 696.32" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_538" d="M1018.98 696.183L1014.06 695.877" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_539" d="M1012.21 695.77L1007.36 695.45L1003.54 692.151" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_540" d="M1002.15 690.945L998.422 687.722" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_541" d="M997.017 686.516L993.291 683.263" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_542" d="M991.901 682.057L988.159 678.834" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_543" d="M986.769 677.628L983.057 674.39" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_544" d="M981.652 673.184L977.834 669.885L981.057 666.144" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_545" d="M982.278 664.754L985.501 661.043" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_546" d="M986.723 659.623L989.946 655.912" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_547" d="M991.152 654.507L994.375 650.781" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_548" d="M995.582 649.376L998.82 645.665" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_549" d="M1002.04 641.923L1006.27 645.588" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_550" d="M1007.66 646.795L1011.4 650.048" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_551" d="M1012.79 651.254L1016.52 654.476" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_552" d="M1017.93 655.683L1022.14 659.348L1024.63 659.5" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_553" d="M1026.5 659.623L1028.98 659.776" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_554" d="M1094.13 649.238L1087.91 643.847" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_555" d="M1086.52 642.641L1082.78 639.419" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_556" d="M1081.39 638.197L1077.66 634.975" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_557" d="M1076.27 633.768L1072.53 630.546" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_558" d="M1071.14 629.339L1067.41 626.102" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_559" d="M1066.01 624.896L1062.28 621.658" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_560" d="M1060.89 620.451L1057.15 617.214" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_561" d="M1055.76 616.007L1052.03 612.785" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_562" d="M1050.64 611.579L1046.9 608.356" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_563" d="M1045.51 607.135L1041.8 603.912" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_564" d="M1040.38 602.706L1037.9 600.537L1036.12 602.614" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_565" d="M1034.9 604.004L1031.67 607.73" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_566" d="M1030.47 609.12L1027.24 612.862" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_567" d="M1026.04 614.251L1022.8 617.977" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_568" d="M1021.59 619.382L1018.37 623.109" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_569" d="M1017.15 624.498L1013.91 628.24" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_570" d="M1012.7 629.63L1009.48 633.341" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_571" d="M1008.27 634.746L1005.05 638.472" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_572" d="M1003.83 639.877L1002.04 641.923" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_573" d="M1041.16 645.756L1044.55 648.688" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_574" d="M1045.94 649.895L1049.65 653.133" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_575" d="M1051.07 654.354L1054.78 657.577" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_576" d="M1056.19 658.783L1059.59 661.715" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_577" d="M1041.16 645.756L1036.48 641.725" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_578" d="M948.326 595.406L944.599 592.169" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_579" d="M943.194 590.962L939.467 587.74" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_580" d="M938.077 586.518L934.35 583.296" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_581" d="M932.945 582.089L929.218 578.867" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_582" d="M927.829 577.63L924.087 574.408" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_583" d="M805.946 348.191L806.053 344.709" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_584" d="M806.114 342.861L806.252 337.929" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_585" d="M806.313 336.096L806.466 331.179" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_586" d="M806.511 329.316L806.679 324.398" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_587" d="M806.741 322.535L806.878 317.618" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_588" d="M806.939 315.755L807.077 310.837" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_589" d="M807.153 309.005L807.245 305.523L812.117 305.584" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_590" d="M813.98 305.614L818.898 305.675" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_591" d="M820.762 305.721L825.68 305.798" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_592" d="M827.543 305.813L832.461 305.889" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_593" d="M834.324 305.92L839.243 305.996" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_594" d="M841.106 306.011L845.963 306.088L845.902 309.57" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_595" d="M845.886 311.417L845.81 316.35" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_596" d="M845.78 318.198L845.703 323.131" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_597" d="M845.688 324.963L845.612 329.896" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_598" d="M845.566 331.744L845.505 336.677" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_599" d="M845.474 338.524L845.413 343.457" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_600" d="M845.367 345.305L845.321 348.787L840.113 348.71" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_601" d="M838.265 348.68L833.332 348.604" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_602" d="M831.484 348.588L826.55 348.512" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_603" d="M824.717 348.466L819.784 348.405" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_604" d="M817.936 348.375L813.003 348.313" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_605" d="M811.155 348.268L805.946 348.191" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_606" d="M807.718 257.891L812.728 257.967" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_607" d="M814.576 257.998L819.509 258.074" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_608" d="M821.342 258.089L826.275 258.166" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_609" d="M828.123 258.196L833.057 258.273" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_610" d="M834.905 258.288L839.838 258.364" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_611" d="M841.686 258.395L846.696 258.471L846.635 261.938" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_612" d="M846.604 263.786L846.528 268.718" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_613" d="M846.513 270.566L846.436 275.499" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_614" d="M846.39 277.347L846.329 282.28" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_615" d="M846.284 284.127L846.207 289.06" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_616" d="M846.192 290.908L846.116 295.841" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_617" d="M846.085 297.688L846.024 301.155L840.709 301.079" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_618" d="M838.861 301.048L833.927 300.972" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_619" d="M832.079 300.956L827.146 300.88" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_620" d="M825.298 300.85L820.365 300.773" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_621" d="M818.516 300.758L813.583 300.682" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_622" d="M811.735 300.636L806.405 300.575L806.511 297.093" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_623" d="M806.573 295.26L806.741 290.328" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_624" d="M806.786 288.48L806.939 283.547" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_625" d="M806.985 281.699L807.138 276.767" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_626" d="M807.199 274.919L807.352 269.986" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_627" d="M807.413 268.153L807.565 263.221" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_628" d="M807.611 261.373L807.718 257.891" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_629" d="M785.159 252.699H781.646" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_630" d="M779.798 252.699H772.5" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_631" d="M783.54 352.574H780.012" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_632" d="M778.164 352.574H774.651" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_633" d="M1287.85 869.499L1291.37 865.437" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_634" d="M1292.57 864.047L1295.83 860.336" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_635" d="M1297.03 858.931L1300.26 855.22" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_636" d="M1301.46 853.8L1304.72 850.089" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_637" d="M1305.92 848.699L1309.16 844.973" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_638" d="M1310.37 843.583L1313.9 839.536L1317.61 842.758" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_639" d="M1319.01 843.965L1322.72 847.203" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_640" d="M1324.11 848.424L1327.86 851.647" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_641" d="M1329.25 852.868L1332.97 856.091" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_642" d="M1334.36 857.312L1338.09 860.535L1334.59 864.582" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_643" d="M1333.37 865.971L1330.15 869.713" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_644" d="M1328.92 871.103L1325.7 874.829" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_645" d="M1324.48 876.219L1321.26 879.96" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_646" d="M1320.05 881.35L1316.83 885.076" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_647" d="M1315.62 886.466L1312.09 890.513L1308.35 887.275" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_648" d="M1306.96 886.053L1303.25 882.831" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_649" d="M1301.83 881.609L1298.12 878.387" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_650" d="M1296.71 877.165L1292.99 873.943" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_651" d="M1291.58 872.737L1287.85 869.499" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_652" d="M1280.07 870.934L1282.77 867.804" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_653" d="M1284.01 866.414L1287.23 862.688" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_654" d="M1288.43 861.298L1291.67 857.587" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_655" d="M1292.89 856.182L1296.12 852.471" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_656" d="M1297.34 851.051L1300.56 847.34" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_657" d="M1301.78 845.95L1305.02 842.224" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_658" d="M1306.23 840.834L1309.45 837.108" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_659" d="M1310.69 835.719L1313.39 832.588L1315.73 834.604" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_660" d="M1317.12 835.81L1320.85 839.032" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_661" d="M1322.24 840.239L1325.98 843.492" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_662" d="M1327.37 844.698L1331.08 847.92" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_663" d="M1332.48 849.127L1336.19 852.379" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_664" d="M1337.58 853.586L1341.31 856.808" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_665" d="M1342.72 858.045L1345.04 860.061L1342.32 863.177" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_666" d="M1341.11 864.566L1337.89 868.308" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_667" d="M1336.67 869.698L1333.45 873.408" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_668" d="M1332.24 874.813L1329.02 878.54" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_669" d="M1327.81 879.945L1324.57 883.656" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_670" d="M1323.35 885.045L1320.13 888.787" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_671" d="M1318.92 890.177L1315.68 893.903" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_672" d="M1314.48 895.308L1311.77 898.423L1309.42 896.392" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_673" d="M1308.03 895.186L1304.29 891.963" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_674" d="M1302.9 890.757L1299.17 887.504" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_675" d="M1297.78 886.297L1294.04 883.075" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_676" d="M1292.65 881.869L1288.92 878.631" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_677" d="M1287.52 877.425L1283.79 874.203" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_678" d="M1282.4 872.996L1280.07 870.935" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_679" d="M1329.34 905.54L1332.87 901.493" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_680" d="M1334.07 900.103L1337.31 896.377" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_681" d="M1338.53 894.987L1341.77 891.261" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_682" d="M1342.98 889.871L1346.2 886.145" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_683" d="M1347.44 884.755L1350.66 881.044" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_684" d="M1351.87 879.624L1355.39 875.577L1359.11 878.814" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_685" d="M1360.53 880.036L1364.24 883.259" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_686" d="M1365.63 884.465L1369.35 887.702" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_687" d="M1370.74 888.924L1374.47 892.147" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_688" d="M1375.86 893.368L1379.59 896.591L1376.07 900.622" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_689" d="M1374.87 902.042L1371.64 905.753" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_690" d="M1370.44 907.158L1367.22 910.869" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_691" d="M1365.99 912.29L1362.76 916.001" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_692" d="M1361.55 917.39L1358.33 921.117" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_693" d="M1357.1 922.521L1353.61 926.553L1349.85 923.316" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_694" d="M1348.46 922.109L1344.73 918.887" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_695" d="M1343.34 917.665L1339.6 914.443" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_696" d="M1338.21 913.237L1334.5 909.999" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_697" d="M1333.09 908.777L1329.34 905.54" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_698" d="M1321.55 907.006L1324.28 903.875" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_699" d="M1325.49 902.455L1328.74 898.744" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_700" d="M1329.95 897.354L1333.17 893.628" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_701" d="M1334.38 892.238L1337.63 888.512" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_702" d="M1338.84 887.122L1342.06 883.396" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_703" d="M1343.3 882.006L1346.52 878.295" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_704" d="M1347.73 876.875L1350.96 873.164" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_705" d="M1352.19 871.759L1354.9 868.628L1357.23 870.644" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_706" d="M1358.63 871.851L1362.36 875.104" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_707" d="M1363.75 876.31L1367.46 879.532" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_708" d="M1368.86 880.739L1372.58 883.992" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_709" d="M1373.97 885.198L1377.71 888.42" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_710" d="M1379.1 889.627L1382.82 892.88" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_711" d="M1384.21 894.086L1386.55 896.102L1383.83 899.217" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_712" d="M1382.63 900.622L1379.4 904.349" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_713" d="M1378.18 905.738L1374.94 909.48" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_714" d="M1373.74 910.869L1370.51 914.596" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_715" d="M1369.29 915.985L1366.07 919.727" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_716" d="M1364.86 921.117L1361.64 924.843" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_717" d="M1360.43 926.232L1357.18 929.974" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_718" d="M1355.97 931.364L1353.29 934.479L1350.92 932.448" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_719" d="M1349.53 931.226L1345.8 928.004" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_720" d="M1344.41 926.798L1340.67 923.575" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_721" d="M1339.28 922.369L1335.55 919.131" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_722" d="M1334.15 917.91L1330.42 914.687" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_723" d="M1329.03 913.481L1325.31 910.243" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_724" d="M1323.9 909.037L1321.55 907.006" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_725" d="M1370.99 941.718L1374.5 937.671" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_726" d="M1375.74 936.266L1378.96 932.555" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_727" d="M1380.17 931.165L1383.41 927.439" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_728" d="M1384.63 926.049L1387.86 922.323" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_729" d="M1389.07 920.933L1392.29 917.207" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_730" d="M1393.52 915.817L1397.04 911.771L1400.77 914.993" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_731" d="M1402.16 916.199L1405.89 919.437" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_732" d="M1407.28 920.658L1410.99 923.881" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_733" d="M1412.39 925.087L1416.11 928.34" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_734" d="M1417.53 929.546L1421.24 932.769L1417.72 936.816" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_735" d="M1416.52 938.221L1413.28 941.932" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_736" d="M1412.07 943.321L1408.85 947.063" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_737" d="M1407.64 948.453L1404.42 952.179" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_738" d="M1403.18 953.568L1399.96 957.31" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_739" d="M1398.76 958.7L1395.26 962.731L1391.52 959.494" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_740" d="M1390.09 958.287L1386.38 955.05" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_741" d="M1384.99 953.843L1381.27 950.621" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_742" d="M1379.86 949.415L1376.14 946.192" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_743" d="M1374.75 944.971L1370.99 941.718" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_744" d="M1363.2 943.184L1365.93 940.053" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_745" d="M1367.14 938.648L1370.38 934.937" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_746" d="M1371.58 933.517L1374.82 929.806" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_747" d="M1376.04 928.416L1379.27 924.69" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_748" d="M1380.47 923.3L1383.73 919.574" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_749" d="M1384.93 918.184L1388.16 914.458" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_750" d="M1389.36 913.068L1392.62 909.357" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_751" d="M1393.82 907.937L1396.56 904.807L1398.88 906.822" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_752" d="M1400.27 908.029L1403.99 911.282" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_753" d="M1405.38 912.488L1409.11 915.711" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_754" d="M1410.5 916.917L1414.23 920.17" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_755" d="M1415.63 921.376L1419.36 924.598" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_756" d="M1420.75 925.82L1424.46 929.058" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_757" d="M1425.87 930.264L1428.19 932.28L1425.47 935.411" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_758" d="M1424.26 936.8L1421.04 940.527" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_759" d="M1419.83 941.916L1416.61 945.658" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_760" d="M1415.39 947.048L1412.15 950.774" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_761" d="M1410.94 952.179L1407.72 955.905" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_762" d="M1406.5 957.295L1403.28 961.006" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_763" d="M1402.07 962.426L1398.85 966.137" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_764" d="M1397.64 967.542L1394.92 970.673L1392.57 968.611" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_765" d="M1391.16 967.404L1387.44 964.182" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_766" d="M1386.05 962.976L1382.31 959.753" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_767" d="M1380.92 958.532L1377.2 955.31" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_768" d="M1375.8 954.103L1372.07 950.881" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_769" d="M1370.67 949.644L1366.96 946.421" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_770" d="M1365.57 945.215L1363.2 943.184" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_771" d="M1325.51 882.553L1307.03 903.888L1316.87 912.405L1335.35 891.071L1325.51 882.553Z" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_772" d="M1351.65 872.309L1341.8 863.787L1325.52 882.556L1335.35 891.078L1351.65 872.309Z" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_773" d="M1424.89 936.083L1427.71 938.557" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_774" d="M1429.1 939.778L1432.85 943.001" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_775" d="M1434.24 944.207L1437.96 947.445" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_776" d="M1439.35 948.667L1443.06 951.889" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_777" d="M1444.47 953.095L1448.18 956.333" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_778" d="M1449.6 957.554L1453.31 960.777" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_779" d="M1454.7 961.998L1458.43 965.221" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_780" d="M1459.82 966.442L1462.66 968.886L1459.1 972.994" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_781" d="M1457.89 974.384L1454.67 978.125" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_782" d="M1453.46 979.515L1450.24 983.241" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_783" d="M1449.02 984.631L1445.78 988.372" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_784" d="M1444.58 989.762L1441.35 993.488" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_785" d="M1440.13 994.878L1436.91 998.619" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_786" d="M1435.7 1000.01L1432.48 1003.74" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_787" d="M1431.27 1005.14L1427.71 1009.23L1423.35 1008.62" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_788" d="M1421.51 1008.36L1416.62 1007.69" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_789" d="M1414.79 1007.43L1409.92 1006.73" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_790" d="M1408.09 1006.48L1403.18 1005.8" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_791" d="M1401.37 1005.54L1396.48 1004.87" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_792" d="M1394.65 1004.61L1390.28 1004.01" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_793" d="M1376.62 1019.69L1378.78 1017.22" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_794" d="M1379.98 1015.83L1383.22 1012.1" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_795" d="M1384.44 1010.71L1387.68 1006.99" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_796" d="M1388.89 1005.6L1392.14 1001.87" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_797" d="M1393.35 1000.48L1396.59 996.772" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_798" d="M1397.79 995.366L1401.05 991.656" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_799" d="M1402.25 990.266L1405.49 986.54" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_800" d="M1406.71 985.15L1409.95 981.424" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_801" d="M1411.16 980.034L1414.41 976.308" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_802" d="M1415.62 974.918L1417.77 972.444L1414.06 969.237" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_803" d="M1412.67 968.031L1408.94 964.808" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_804" d="M1407.55 963.571L1403.83 960.364" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_805" d="M1372.9 1016.44L1375.66 1013.28" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_806" d="M1376.87 1011.89L1380.11 1008.16" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_807" d="M1381.33 1006.77L1384.57 1003.05" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_808" d="M1385.77 1001.66L1389.03 997.932" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_809" d="M1390.23 996.543L1393.47 992.832" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_810" d="M1394.68 991.427L1397.93 987.716" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_811" d="M1399.14 986.326L1402.37 982.615" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_812" d="M1403.6 981.21L1406.83 977.499" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_813" d="M1408.04 976.109L1410.81 972.948L1406.39 969.13" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_814" d="M1405 967.924L1400.6 964.106" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_815" d="M1400.6 964.106L1410.78 972.963L1405.09 979.469L1394.92 970.673L1400.6 964.106Z" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_816" d="M1405.09 979.484L1398.02 987.654L1384.66 976.094L1391.78 967.939L1405.09 979.484Z" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_817" d="M1370.16 996.161L1374.2 991.488" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_818" d="M1372.48 998.176L1376.53 993.503" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_819" d="M1374.82 1000.19L1378.87 995.535" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_820" d="M1377.14 1002.21L1381.19 997.55" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_821" d="M1379.46 1004.22L1383.53 999.566" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_822" d="M1381.82 1006.24L1385.85 1001.58" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_823" d="M1385.54 1009.46L1389.58 1004.8" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_824" d="M1387.86 1011.48L1391.9 1006.82" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_825" d="M1390.19 1013.51L1394.22 1008.84" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_826" d="M1392.52 1015.53L1396.56 1010.85" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_827" d="M1394.85 1017.54L1398.88 1012.9" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_828" d="M1397.18 1019.56L1401.23 1014.91" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_829" d="M1399.5 1021.57L1403.55 1016.93" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_830" d="M1401.82 1023.59L1405.89 1018.95" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_831" d="M1404.16 1025.6L1408.21 1020.96" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_832" d="M1406.5 1027.62L1410.53 1022.98" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_833" d="M1408.84 1029.64L1412.87 1024.99" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_834" d="M1358.91 1004.42L1362.94 999.765" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_835" d="M1361.23 1006.45L1365.29 1001.78" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_836" d="M1363.57 1008.47L1367.61 1003.8" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_837" d="M1365.89 1010.49L1369.93 1005.84" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_838" d="M1368.22 1012.5L1372.27 1007.86" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_839" d="M1370.56 1014.52L1374.59 1009.87" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_840" d="M1372.9 1016.53L1376.93 1011.89" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_841" d="M1376.61 1019.77L1380.64 1015.11" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_842" d="M1378.95 1021.79L1382.98 1017.13" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_843" d="M1381.27 1023.82L1385.3 1019.14" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_844" d="M1383.59 1025.83L1387.62 1021.16" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_845" d="M1385.93 1027.85L1389.97 1023.19" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_846" d="M1388.25 1029.86L1392.29 1025.21" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_847" d="M1390.58 1031.88L1394.63 1027.22" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_848" d="M1392.91 1033.9L1396.95 1029.24" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_849" d="M1395.26 1035.91L1399.29 1031.25" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_850" d="M1397.58 1037.93L1401.61 1033.27" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_851" d="M1399.9 1039.94L1403.93 1035.29" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_852" d="M1395.17 1009.66L1398.28 1010.09" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_853" d="M1400.11 1010.35L1404.99 1011.02" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_854" d="M1406.82 1011.28L1411.69 1011.98" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_855" d="M1413.52 1012.23L1418.41 1012.91" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_856" d="M1420.24 1013.17L1425.13 1013.85" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_857" d="M1426.97 1014.1L1430.05 1014.55" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_858" d="M1287.58 852.929L1292.22 856.976" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_859" d="M1289.6 850.593L1294.24 854.655" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_860" d="M1291.61 848.271L1296.25 852.318" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_861" d="M1293.63 845.95L1298.27 849.982" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_862" d="M1295.64 843.614L1300.29 847.645" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_863" d="M1297.66 841.292L1302.3 845.324" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_864" d="M1299.68 838.956L1304.32 842.988" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_865" d="M1301.69 836.635L1306.37 840.666" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_866" d="M1303.72 834.313L1308.38 838.345" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_867" d="M1298.13 829.472L1300.56 826.662L1306.14 831.519L1303.72 834.313L1298.13 829.472Z" stroke="white" stroke-width="0.85" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_868" d="M1269.27 853.372L1298.42 819.744" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_869" d="M1284.16 866.292L1313.3 832.664" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_870" d="M1391.78 967.939L1384.67 976.109L1378.15 970.474L1385.24 962.273L1391.78 967.939Z" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_871" d="M941.758 537.1L946.416 541.131" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_872" d="M943.774 534.778L948.432 538.81" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_873" d="M945.79 532.442L950.449 536.474" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_874" d="M947.806 530.121L952.465 534.152" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_875" d="M949.822 527.784L954.496 531.816" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_876" d="M925.476 535.145L930.15 539.176" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_877" d="M927.523 532.808L932.166 536.84" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_878" d="M929.539 530.487L934.182 534.519" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_879" d="M931.555 528.151L936.198 532.182" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_880" d="M933.571 525.829L938.214 529.861" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_881" d="M935.587 523.508L940.231 527.54" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_882" d="M937.604 521.156L942.247 525.203" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_883" d="M939.62 518.835L944.263 522.882" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_884" d="M925.476 535.145L944.538 513.169" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_885" d="M742 399L789 440" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_886" d="M755 383.5L802.021 424.61" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_887" d="M767.091 394.357L763.043 399.015" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_888" d="M769.412 396.373L765.365 401.031" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_889" d="M771.749 398.389L767.717 403.046" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_890" d="M774.071 400.405L770.038 405.062" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_891" d="M776.407 402.42L772.375 407.078" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_892" d="M778.729 404.436L774.697 409.094" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_893" d="M781.051 406.452L777.018 411.11" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_894" d="M783.387 408.468L779.355 413.126" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_895" d="M785.709 410.484L781.677 415.157" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_896" d="M788.046 412.515L784.014 417.173" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_897" d="M790.367 414.531L786.335 419.188" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_898" d="M792.689 416.546L788.657 421.204" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_899" d="M795.041 418.562L790.994 423.22" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_900" d="M797.363 420.578L793.315 425.236" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_901" d="M799.699 422.594L795.652 427.252" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_902" d="M802.021 424.61L797.989 429.268" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_903" d="M753.543 400.557L749.511 405.215" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_904" d="M755.88 402.573L751.848 407.231" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_905" d="M758.217 404.589L754.169 409.247" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_906" d="M760.554 406.605L756.491 411.278" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_907" d="M762.875 408.621L758.828 413.294" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_908" d="M765.197 410.652L761.149 415.309" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_909" d="M767.534 412.667L763.501 417.325" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_910" d="M769.855 414.683L765.823 419.341" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_911" d="M772.192 416.699L768.16 421.357" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_912" d="M774.514 418.715L770.481 423.373" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_913" d="M776.835 420.731L772.803 425.389" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_914" d="M779.172 422.747L775.14 427.404" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_915" d="M781.494 424.762L777.461 429.436" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_916" d="M783.83 426.778L779.798 431.451" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_917" d="M786.152 428.81L782.12 433.467" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_918" d="M788.474 430.825L784.441 435.483" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_919" d="M790.826 432.841L786.778 437.499" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_920" d="M793.147 434.857L789.1 439.515" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_921" d="M789.1 439.515L802.021 424.61" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_922" d="M1022.14 659.348L1025.73 659.577" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_923" d="M1027.56 659.684L1032.5 659.989" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_924" d="M1034.35 660.127L1039.26 660.432" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_925" d="M1041.11 660.539L1046.03 660.86" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_926" d="M1047.88 660.982L1051.45 661.196L1047.86 658.08" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_927" d="M1046.47 656.874L1042.75 653.652" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_928" d="M1041.34 652.445L1037.61 649.223" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_929" d="M1036.22 648.001L1032.48 644.779" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_930" d="M1031.09 643.573L1027.37 640.335" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_931" d="M1025.98 639.113L1022.23 635.891" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_932" d="M1020.84 634.684L1017.25 631.569" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_933" d="M1043.94 665.67L1047.02 665.854" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_934" d="M1048.87 665.991L1053.77 666.296" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_935" d="M1055.64 666.403L1060.54 666.724" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_936" d="M1062.39 666.846L1067.32 667.152" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_937" d="M1069.15 667.274L1074.09 667.579" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_938" d="M1075.94 667.702L1079.02 667.885L1081.82 664.647" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_939" d="M1083.04 663.257L1086.26 659.531" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_940" d="M1087.47 658.126L1090.7 654.4" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_941" d="M1091.93 653.01L1094.72 649.773" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_942" d="M1059.59 661.715L1063.93 661.99" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_943" d="M1065.78 662.112L1070.7 662.433" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_944" d="M1072.54 662.54L1076.9 662.815L1078.91 660.509" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_945" d="M1080.12 659.088L1083.34 655.377" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_946" d="M1084.55 653.988L1087.77 650.246" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_947" d="M1088.99 648.856L1091.01 646.535" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_948" d="M1046.59 587.923L1045.94 578.638" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_949" d="M1049.86 590.733L1049.19 581.463" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_950" d="M1053.12 593.558L1052.46 584.289" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_951" d="M1056.39 596.384L1055.73 587.114" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_952" d="M1059.64 599.209L1058.98 589.939" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_953" d="M1062.91 602.034L1062.25 592.749" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_954" d="M1066.18 604.844L1065.5 595.574" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_955" d="M1069.43 607.669L1068.77 598.399" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_956" d="M1072.7 610.494L1072.04 601.225" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_957" d="M1075.95 613.32L1075.29 604.05" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_958" d="M1079.22 616.145L1078.56 606.89" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_959" d="M1082.49 618.955L1081.82 609.7" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_960" d="M1085.74 621.795L1085.08 612.526" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_961" d="M1089.01 624.621L1088.35 615.351" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_962" d="M1092.26 627.446L1091.61 618.176" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_963" d="M1095.53 630.271L1094.87 621.001" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_964" d="M1098.8 633.096L1098.11 623.811" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_965" d="M1102.05 635.906L1101.38 626.636" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_966" d="M1105.32 638.731L1104.63 629.462" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_967" d="M1108.57 641.557L1107.9 632.287" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_968" d="M1111.84 644.382L1111.17 635.112" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_969" d="M876.617 431.879L877.273 441.149" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_970" d="M879.885 434.689L880.542 443.974" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_971" d="M883.138 437.514L883.81 446.784" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_972" d="M886.407 440.339L887.064 449.609" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_973" d="M889.675 443.165L890.332 452.435" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_974" d="M892.929 445.99L893.585 455.26" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_975" d="M896.182 448.8L896.854 458.085" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_976" d="M899.435 451.625L900.122 460.895" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_977" d="M902.704 454.45L903.376 463.72" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_978" d="M905.957 457.276L906.644 466.545" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_979" d="M909.225 460.116L909.897 469.37" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_980" d="M912.494 462.941L913.166 472.196" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_981" d="M915.747 465.751L916.435 475.006" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_982" d="M919.016 468.576L919.688 477.846" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_983" d="M922.269 471.402L922.956 480.671" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_984" d="M925.538 474.227L926.21 483.497" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_985" d="M928.806 477.052L929.478 486.322" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_986" d="M932.059 479.862L932.747 489.147" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_987" d="M935.328 482.687L936 491.957" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_988" d="M938.581 485.512L939.268 494.782" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_989" d="M941.85 488.338L942.522 497.608" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_990" d="M945.118 491.163L945.79 500.433" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_991" d="M948.371 493.973L949.059 503.258" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_992" d="M951.64 496.798L952.297 506.068" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_993" d="M954.893 499.624L955.565 508.893" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_994" d="M958.162 502.449L958.818 511.719" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_995" d="M1269.16 853.495L1232.9 895.17" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_996" d="M1166.77 683.309L1167.45 692.579" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_997" d="M1170.04 686.119L1170.71 695.404" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_998" d="M1173.3 688.944L1173.98 698.214" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_999" d="M1176.56 691.769L1177.24 701.039" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1000" d="M1179.83 694.594L1180.5 703.864" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1001" d="M1183.08 697.42L1183.75 706.69" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1002" d="M1186.35 700.26L1187 709.515" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1003" d="M1189.62 703.07L1190.27 712.325" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1004" d="M1192.87 705.896L1193.53 715.15" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1005" d="M1196.14 708.721L1196.79 717.991" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1006" d="M1199.39 711.546L1200.06 720.816" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1007" d="M1202.66 714.371L1203.32 723.641" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1008" d="M1205.93 717.181L1206.58 726.466" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1009" d="M1209.18 720.006L1209.84 729.276" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1010" d="M1212.45 722.832L1213.11 732.101" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1011" d="M1215.7 725.657L1216.37 734.927" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1012" d="M1218.97 728.482L1219.63 737.752" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1013" d="M1222.24 731.292L1222.9 740.577" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1014" d="M1225.49 734.117L1226.15 743.387" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1015" d="M1228.76 736.942L1229.42 746.212" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1016" d="M1232.01 739.768L1232.69 749.037" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1017" d="M1257.12 867.269L1254.53 870.278" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1018" d="M1253.31 871.667L1250.07 875.409" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1019" d="M1248.86 876.799L1245.64 880.525" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1020" d="M1244.43 881.93L1241.21 885.656" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1021" d="M1239.99 887.046L1236.76 890.787" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1022" d="M1235.56 892.177L1232.93 895.186L1229.11 891.887" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1023" d="M1227.71 890.681L1224 887.458" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1024" d="M1222.61 886.237L1218.86 882.999" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1025" d="M1217.47 881.793L1213.75 878.57" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1026" d="M1212.34 877.348L1208.62 874.126" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1027" d="M1207.23 872.92L1203.48 869.698" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1028" d="M1202.09 868.491L1198.37 865.253" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1029" d="M1196.98 864.047L1193.24 860.809" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1030" d="M1191.85 859.603L1188.12 856.366" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1031" d="M1186.71 855.159L1182.99 851.937" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1032" d="M1181.6 850.73L1177.86 847.508" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1033" d="M1176.47 846.286L1172.75 843.064" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1034" d="M1171.35 841.842L1167.62 838.62" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1035" d="M1166.22 837.398L1162.51 834.176" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1036" d="M1161.08 832.97L1157.37 829.747" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1037" d="M1155.98 828.541L1152.15 825.212L1155.1 821.821" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1038" d="M1156.3 820.432L1159.56 816.721" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1039" d="M1160.76 815.316L1164 811.605" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1040" d="M1165.21 810.215L1168.46 806.489" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1041" d="M1169.67 805.099L1172.91 801.373" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1042" d="M1174.13 799.983L1177.37 796.257" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1043" d="M1178.57 794.867L1181.8 791.156" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1044" d="M1183.03 789.751L1186.26 786.04" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1045" d="M1187.48 784.651L1193.42 777.595" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1046" d="M1203.38 743.54L1201.12 741.585" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1047" d="M1199.73 740.363L1195.98 737.141" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1048" d="M1194.59 735.934L1190.87 732.712" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1049" d="M1189.46 731.506L1185.74 728.268" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1050" d="M1184.35 727.062L1180.6 723.839" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1051" d="M1179.21 722.618L1175.5 719.38" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1052" d="M1174.1 718.174L1170.37 714.951" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1053" d="M1168.97 713.745L1165.25 710.523" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1054" d="M1163.83 709.301L1160.12 706.079" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1055" d="M1158.73 704.872L1154.99 701.65" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1056" d="M1153.6 700.413L1149.87 697.191" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1057" d="M1148.48 695.984L1144.74 692.762" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1058" d="M1143.35 691.556L1141.09 689.601L1137.49 693.938" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1059" d="M1136.3 695.358L1133.13 699.13" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1060" d="M1131.94 700.566L1128.8 704.338" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1061" d="M1127.61 705.773L1124.46 709.545" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1062" d="M1123.27 710.981L1120.11 714.753" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1063" d="M1118.91 716.173L1115.77 719.96" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1064" d="M1114.58 721.381L1111.42 725.153" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1065" d="M1110.22 726.588L1106.62 730.91L1107.75 736.316" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1066" d="M1108.12 738.134L1109.12 742.959" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1067" d="M1109.52 744.761L1110.53 749.587" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1068" d="M1110.91 751.405L1111.92 756.215" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1069" d="M1112.3 758.032L1113.31 762.858" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1070" d="M1113.69 764.675L1114.7 769.486" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1071" d="M1115.07 771.303L1116.09 776.129" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1072" d="M1116.46 777.931L1117.46 782.757" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1073" d="M1117.86 784.574L1118.99 789.965L1122.75 793.218" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1074" d="M1124.14 794.424L1127.86 797.662" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1075" d="M1129.25 798.868L1133 802.09" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1076" d="M1134.39 803.312L1138.11 806.55" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1077" d="M1139.52 807.756L1143.28 810.994L1146.5 807.283" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1078" d="M1147.71 805.878L1150.94 802.152" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1079" d="M1152.15 800.747L1155.37 797.036" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1080" d="M1156.58 795.616L1159.8 791.905" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1081" d="M1161.02 790.515L1164.26 786.789L1162.03 784.849" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1082" d="M1160.61 783.643L1156.9 780.405" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1083" d="M1155.49 779.199L1151.78 775.976" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1084" d="M1150.36 774.755L1148.13 772.83L1147.64 770.387" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1085" d="M1147.25 768.57L1146.24 763.759" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1086" d="M1145.86 761.942L1144.85 757.116" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1087" d="M1144.47 755.299L1143.46 750.488" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1088" d="M1143.08 748.671L1142.07 743.845" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1089" d="M1141.7 742.043L1141.18 739.6L1144.91 735.293L1147.57 737.599" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1090" d="M1148.97 738.806L1152.7 742.043" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1091" d="M1154.09 743.265L1157.83 746.487" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1092" d="M1159.22 747.694L1162.95 750.931" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1093" d="M1164.34 752.137L1168.08 755.36" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1094" d="M1169.47 756.566L1173.18 759.789" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1095" d="M1174.6 761.01L1178.31 764.233" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1096" d="M1179.72 765.454L1182.38 767.745L1185.61 764.034" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1097" d="M1186.82 762.629L1190.04 758.903" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1098" d="M1191.27 757.498L1194.49 753.787" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1099" d="M1195.69 752.397L1198.92 748.656" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1100" d="M1200.12 747.266L1203.38 743.54" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1101" d="M1164.98 759.208L1182.85 774.709L1172.13 787.094L1154.26 771.593L1164.98 759.208Z" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1102" d="M1153.43 734.529L1149.4 739.172" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1103" d="M1164.26 786.789L1167.5 789.614" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1104" d="M1168.92 790.82L1176.43 797.326" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1105" d="M1193.42 777.595L1195.63 775.03" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1106" d="M1196.86 773.624L1200.08 769.898" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1107" d="M1201.28 768.493L1204.51 764.782" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1108" d="M1205.74 763.393L1208.97 759.651" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1109" d="M1210.17 758.261L1213.4 754.535" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1110" d="M1214.6 753.13L1217.84 749.404" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1111" d="M1219.05 748.014L1222.27 744.273" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1112" d="M1223.48 742.883L1225.69 740.317L1229.51 743.616" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1113" d="M1230.9 744.823L1234.63 748.045" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1114" d="M1236.03 749.251L1239.76 752.489" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1115" d="M1241.15 753.695L1244.89 756.933" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1116" d="M1246.28 758.139L1250.01 761.377" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1117" d="M1251.4 762.583L1255.14 765.806" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1118" d="M1256.53 767.012L1260.24 770.234" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1119" d="M1261.66 771.456L1265.37 774.678" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1120" d="M1266.78 775.885L1270.5 779.122" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1121" d="M1271.91 780.344L1275.62 783.566" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1122" d="M1277.01 784.773L1280.75 787.995" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1123" d="M1282.14 789.201L1285.87 792.439" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1124" d="M1287.27 793.646L1291 796.868" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1125" d="M1292.39 798.074L1296.12 801.327" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1126" d="M1297.52 802.533L1301.25 805.756" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1127" d="M1302.64 806.962L1306.46 810.246L1304.5 812.506" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1128" d="M1303.3 813.896L1300.07 817.607" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1129" d="M1204.42 772.418L1208.05 768.249" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1130" d="M1209.26 766.829L1212.48 763.118" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1131" d="M1213.69 761.713L1216.92 758.002" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1132" d="M1218.13 756.582L1221.35 752.871" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1133" d="M1222.56 751.481L1226.21 747.281L1228.84 749.557" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1134" d="M1230.24 750.778L1233.97 754.001" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1135" d="M1235.36 755.207L1239.1 758.445" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1136" d="M1240.49 759.651L1244.2 762.873" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1137" d="M1245.61 764.08L1249.33 767.302" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1138" d="M1250.74 768.524L1254.45 771.746" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1139" d="M1255.87 772.968L1259.58 776.19" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1140" d="M1260.97 777.412L1264.72 780.634" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1141" d="M1266.11 781.841L1269.83 785.063" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1142" d="M1271.22 786.269L1274.96 789.507" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1143" d="M1276.35 790.713L1280.08 793.936" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1144" d="M1281.49 795.157L1285.21 798.395" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1145" d="M1286.6 799.601L1290.34 802.824" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1146" d="M1291.73 804.03L1295.46 807.252" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1147" d="M1296.85 808.474L1299.49 810.765L1296.94 813.697" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1148" d="M1295.74 815.087L1292.5 818.828" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1149" d="M1291.29 820.218L1288.07 823.929" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1150" d="M1286.86 825.349L1283.64 829.06" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1151" d="M1282.42 830.465L1279.19 834.191" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1152" d="M1277.99 835.596L1274.75 839.307" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1153" d="M1273.53 840.697L1271.01 843.66" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1154" d="M1252.34 865.192L1249.12 868.903" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1155" d="M1247.91 870.293L1244.69 874.035" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1156" d="M1243.47 875.424L1240.25 879.151" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1157" d="M1239.04 880.555L1235.8 884.282" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1158" d="M1234.58 885.671L1231.36 889.413L1228.26 886.725" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1159" d="M1226.87 885.504L1223.13 882.281" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1160" d="M1221.74 881.075L1218.02 877.837" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1161" d="M1216.6 876.615L1212.89 873.393" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1162" d="M1211.49 872.187L1207.76 868.964" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1163" d="M1206.36 867.758L1202.64 864.521" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1164" d="M1201.22 863.314L1197.51 860.092" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1165" d="M1196.12 858.885L1192.38 855.663" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1166" d="M1190.99 854.441L1187.26 851.204" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1167" d="M1185.87 849.997L1182.13 846.775" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1168" d="M1180.74 845.553L1177 842.331" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1169" d="M1175.61 841.124L1171.88 837.902" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1170" d="M1170.49 836.696L1166.75 833.458" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1171" d="M1165.36 832.252L1161.63 829.03" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1172" d="M1160.23 827.823L1157.13 825.12L1158.92 823.058" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1173" d="M1160.12 821.669L1163.36 817.942" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1174" d="M1164.57 816.538L1167.81 812.811" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1175" d="M1169.01 811.421L1172.23 807.68" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1176" d="M1173.44 806.29L1176.66 802.564" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1177" d="M1177.89 801.174L1181.11 797.433" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1178" d="M1182.31 796.043L1185.55 792.317" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1179" d="M1186.77 790.912L1190 787.186" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1180" d="M1191.2 785.796L1192.98 783.734" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1181" d="M1231.34 840.468L1235.16 836.085" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1182" d="M1236.37 834.695L1239.59 830.954" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1183" d="M1240.8 829.564L1244.02 825.838" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1184" d="M1245.24 824.433L1248.46 820.707" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1185" d="M1249.67 819.317L1253.49 814.919L1250.14 812.048" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1186" d="M1248.74 810.826L1245.01 807.604" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1187" d="M1243.62 806.397L1239.88 803.16" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1188" d="M1238.49 801.938L1234.76 798.716" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1189" d="M1233.37 797.509L1229.63 794.287" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1190" d="M1228.24 793.08L1224.53 789.843" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1191" d="M1223.11 788.636L1219.4 785.414" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1192" d="M1217.99 784.208L1214.27 780.955" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1193" d="M1212.86 779.748L1209.15 776.526" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1194" d="M1207.76 775.32L1204.42 772.418" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1195" d="M1225.4 797.143L1221.23 793.508" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1196" d="M1219.81 792.302L1216.1 789.064" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1197" d="M1214.69 787.858L1210.97 784.62" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1198" d="M1209.56 783.414L1205.85 780.191" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1199" d="M1204.46 778.985L1200.26 775.35" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1200" d="M1252.34 865.192L1249.01 862.291" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1201" d="M1247.62 861.084L1243.9 857.862" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1202" d="M1242.49 856.64L1238.77 853.418" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1203" d="M1237.38 852.212L1233.63 848.974" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1204" d="M1232.24 847.752L1228.52 844.53" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1205" d="M1227.13 843.324L1223.39 840.101" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1206" d="M1222 838.895L1218.27 835.657" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1207" d="M1216.86 834.451L1213.14 831.229" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1208" d="M1211.75 830.022L1208 826.769" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1209" d="M1206.61 825.563L1203.29 822.692L1207.09 818.294" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1210" d="M1208.31 816.904L1211.53 813.178" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1211" d="M1212.74 811.788L1215.96 808.046" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1212" d="M1217.17 806.657L1220.41 802.93" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1213" d="M1221.61 801.525L1225.4 797.143" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1214" d="M1236.18 834.879L1242.31 828.755" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1215" d="M1232.43 841.415L1243.79 830.037" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1216" d="M1233.91 842.698L1245.27 831.32" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1217" d="M1235.39 843.98L1246.75 832.618" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1218" d="M1236.87 845.263L1248.24 833.901" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1219" d="M1238.34 846.546L1249.73 835.184" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1220" d="M1239.83 847.829L1251.21 836.467" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1221" d="M1241.32 849.112L1252.69 837.75" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1222" d="M1242.8 850.394L1254.18 839.032" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1223" d="M1244.28 851.677L1255.64 840.315" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1224" d="M1245.76 852.96L1257.12 841.598" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1225" d="M1247.26 854.243L1258.62 842.881" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1226" d="M1248.74 855.525L1260.1 844.164" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1227" d="M1250.22 856.808L1259.31 847.722" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1228" d="M1231.34 840.468L1241.85 828.357L1261.42 845.309L1250.92 857.419L1231.33 840.468L1237.82 833" stroke="white" stroke-width="0.51" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1229" d="M1231.34 840.483L1235.07 843.705" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1230" d="M1236.46 844.912L1240.2 848.149" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1231" d="M1241.59 849.356L1245.3 852.578" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1232" d="M1246.72 853.785L1250.43 857.038" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1233" d="M1251.84 858.244L1255.57 861.466" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1234" d="M1353.58 993.122L1351.01 990.877" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1235" d="M1349.62 989.671L1345.88 986.448" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1236" d="M1344.49 985.242L1340.76 982.019" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1237" d="M1339.36 980.798L1335.63 977.575" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1238" d="M1334.24 976.369L1330.5 973.146" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1239" d="M1329.11 971.94L1325.38 968.687" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1240" d="M1323.99 967.481L1320.25 964.259" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1241" d="M1318.86 963.052L1315.13 959.814" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1242" d="M1313.73 958.608L1310 955.386" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1243" d="M1308.61 954.18L1304.87 950.957" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1244" d="M1303.48 949.735L1299.77 946.498" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1245" d="M1298.36 945.291L1294.64 942.069" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1246" d="M1293.23 940.847L1289.52 937.625" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1247" d="M1288.1 936.419L1284.39 933.196" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1248" d="M1283 931.99L1279.26 928.752" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1249" d="M1277.87 927.546L1274.14 924.308" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1250" d="M1272.75 923.102L1269.01 919.864" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1251" d="M1267.62 918.658L1263.89 915.436" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1252" d="M1262.49 914.229L1258.76 911.007" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1253" d="M1257.37 909.785L1254.8 907.571L1258.03 903.829" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1254" d="M1259.23 902.439L1262.47 898.729" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1255" d="M1263.68 897.324L1266.91 893.597" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1256" d="M1268.12 892.192L1271.36 888.481" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1257" d="M1272.57 887.061L1275.79 883.35L1278.35 885.564" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1258" d="M1279.74 886.771L1283.49 889.993" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1259" d="M1284.88 891.215L1288.6 894.453" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1260" d="M1289.99 895.659L1293.73 898.881" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1261" d="M1295.12 900.103L1298.85 903.325" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1262" d="M1300.26 904.532L1303.98 907.754" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1263" d="M1305.37 908.96L1309.08 912.198" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1264" d="M1310.51 913.405L1314.22 916.642" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1265" d="M1315.62 917.849L1319.35 921.086" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1266" d="M1320.75 922.292L1324.46 925.515" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1267" d="M1325.89 926.721L1329.6 929.943" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1268" d="M1330.99 931.165L1334.71 934.388" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1269" d="M1336.12 935.594L1339.85 938.832" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1270" d="M1341.24 940.053L1344.98 943.275" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1271" d="M1346.37 944.482L1350.09 947.704" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1272" d="M1351.5 948.911L1355.23 952.148" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1273" d="M1356.62 953.355L1360.34 956.577" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1274" d="M1361.75 957.783L1365.47 961.036" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1275" d="M1366.86 962.243L1370.61 965.465" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1276" d="M1372 966.671L1374.56 968.886" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1277" d="M1350.31 996.802L1345.89 992.984" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1278" d="M1344.5 991.778L1340.78 988.556" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1279" d="M1339.37 987.349L1335.65 984.127" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1280" d="M1334.26 982.905L1330.51 979.667" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1281" d="M1329.12 978.461L1325.4 975.239" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1282" d="M1324.01 974.017L1320.26 970.795" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1283" d="M1318.87 969.588L1315.16 966.366" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1284" d="M1313.74 965.16L1310.03 961.922" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1285" d="M1308.63 960.716L1304.9 957.478" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1286" d="M1303.49 956.271L1299.78 953.034" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1287" d="M1298.39 951.828L1294.65 948.605" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1288" d="M1293.26 947.399L1289.53 944.177" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1289" d="M1288.13 942.955L1284.4 939.732" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1290" d="M1283.01 938.526L1279.27 935.289" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1291" d="M1277.88 934.067L1274.15 930.844" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1292" d="M1272.76 929.638L1269.02 926.416" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1293" d="M1267.63 925.209L1263.91 921.972" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1294" d="M1262.5 920.765L1258.77 917.543" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1295" d="M1257.38 916.337L1253.64 913.084" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1296" d="M1252.25 911.877L1247.85 908.075L1249.87 905.738" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1297" d="M1251.08 904.348L1254.31 900.607" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1298" d="M1255.52 899.217L1258.74 895.491" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1299" d="M1259.95 894.086L1263.17 890.36" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1300" d="M1264.39 888.97L1267.62 885.229" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1301" d="M1268.84 883.839L1272.06 880.128" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1302" d="M1273.28 878.723L1275.3 876.386L1277.16 878.02" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1303" d="M1278.55 879.227L1282.28 882.449" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1304" d="M1283.67 883.656L1287.41 886.878" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1305" d="M1288.8 888.1L1292.53 891.322" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1306" d="M1293.93 892.528L1297.66 895.751" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1307" d="M1299.05 896.988L1302.79 900.21" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1308" d="M1304.18 901.417L1307.89 904.639" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1309" d="M1309.3 905.845L1313.03 909.083" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1310" d="M1314.43 910.289L1318.14 913.511" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1311" d="M1319.56 914.718L1323.27 917.94" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1312" d="M1324.66 919.177L1328.41 922.4" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1313" d="M1329.8 923.606L1333.52 926.828" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1314" d="M1334.91 928.05L1338.65 931.272" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1315" d="M1340.04 932.479L1343.77 935.701" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1316" d="M1345.18 936.907L1348.9 940.145" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1317" d="M1350.29 941.367L1354.03 944.589" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1318" d="M1355.42 945.795L1359.15 949.033" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1319" d="M1360.54 950.239L1364.28 953.462" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1320" d="M1365.67 954.668L1369.38 957.89" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1321" d="M1370.8 959.112L1374.52 962.35" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1322" d="M1375.92 963.556L1377.78 965.175" stroke="white" stroke-width="0.71" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1323" d="M1245.36 901.63L1250.02 905.662" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1324" d="M1247.38 899.309L1252.04 903.341" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1325" d="M1249.4 896.988L1254.05 901.019" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1326" d="M1251.41 894.651L1256.07 898.683" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1327" d="M1253.43 892.33L1258.1 896.362" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1328" d="M1255.46 889.993L1260.12 894.025" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1329" d="M1257.48 887.672L1262.13 891.704" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1330" d="M1259.49 885.351L1264.15 889.382" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1331" d="M1261.51 883.014L1266.17 887.046" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1332" d="M1263.52 880.693L1268.18 884.725" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1333" d="M1265.54 878.341L1270.2 882.388" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1334" d="M1267.56 876.02L1272.21 880.067" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1335" d="M1269.57 873.683L1274.23 877.746" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1336" d="M1271.59 871.362L1276.26 875.394" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1337" d="M1273.62 869.041L1278.28 873.072" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1338" d="M1285.43 834.741L1290.08 838.803" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1339" d="M1287.44 832.42L1292.1 836.467" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1340" d="M1289.46 830.099L1294.12 834.146" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1341" d="M1291.47 827.762L1296.13 831.794" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1342" d="M1293.49 825.441L1298.15 829.472" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1343" d="M1232.93 895.201L1237.59 899.233" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1344" d="M1234.95 892.88L1239.62 896.911" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1345" d="M1236.99 890.543L1241.64 894.575" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1346" d="M1239.01 888.222L1243.65 892.254" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1347" d="M1241.03 885.9L1245.67 889.932" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1348" d="M1243.04 883.564L1247.69 887.596" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1349" d="M1245.06 881.243L1249.7 885.274" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1350" d="M1247.07 878.891L1251.72 882.938" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1351" d="M1249.09 876.57L1253.73 880.617" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1352" d="M1251.11 874.233L1255.75 878.295" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1353" d="M1253.12 871.912L1257.8 875.944" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1354" d="M1255.15 869.591L1259.81 873.622" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1355" d="M1257.17 867.254L1261.83 871.286" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1356" d="M1259.19 864.933L1263.84 868.965" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1357" d="M1261.2 862.596L1265.86 866.628" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1358" d="M1263.22 860.275L1267.88 864.307" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1359" d="M1265.23 857.954L1269.89 861.985" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1360" d="M1267.25 855.617L1271.91 859.649" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1361" d="M1269.27 853.296L1273.93 857.328" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1362" d="M1271.28 850.959L1275.96 854.991" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1363" d="M1273.31 848.638L1277.97 852.67" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1364" d="M1172.14 787.094L1179.66 793.63" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1365" d="M1182.93 774.678L1190.64 780.985" stroke="white" stroke-width="0.43" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1366" d="M1397.29 987.212L1390.08 980.966" stroke="white" stroke-width="0.26" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
<g id="&#208;&#154;&#208;&#158;&#208;&#157;&#208;&#163;&#208;&#162;&#208;&#163;&#208;&#160;&#208;&#171; &#208;&#159;&#208;&#158;&#208;&#161;&#208;&#129;&#208;&#155;&#208;&#154;&#208;&#144;">
<mask id="path-1367-inside-1_35_312" fill="white">
<path fill-rule="evenodd" clip-rule="evenodd" d="M850.5 80.5549C847.75 81.2889 841.9 82.7779 837.5 83.8649C824.335 87.1149 743.278 107.647 732.5 110.462C727 111.899 719.8 113.705 716.5 114.476C706.476 116.817 695.202 119.646 680.5 123.509C672.8 125.532 663.013 128.045 658.75 129.093C654.487 130.142 647.288 131.924 642.75 133.052C638.212 134.181 631.125 135.934 627 136.947C622.875 137.96 606.411 142.102 590.413 146.151C559.032 154.094 559.948 153.704 546.382 164.922C542.61 168.041 536.107 173.287 535.141 173.99C534.755 174.271 529.829 180.674 524.193 188.22C514.347 201.403 513.829 201.916 510.954 201.341C508.242 200.798 507.296 201.435 500.866 208.121C494.112 215.145 492.175 217.798 480.147 236.5C477.317 240.9 474.534 245.175 473.962 246C473.391 246.825 470.015 252 466.461 257.5C462.907 263 459.541 268.175 458.981 269C458.421 269.825 455.202 274.775 451.829 280C444.058 292.038 434.315 307.047 433.005 309C432.451 309.825 429.08 315 425.513 320.5C421.946 326 418.572 331.175 418.014 332C417.457 332.825 414.093 338 410.539 343.5C406.985 349 403.61 354.175 403.039 355C402.468 355.825 399.093 361 395.539 366.5C391.985 372 388.613 377.175 388.046 378C387.478 378.825 385.722 381.525 384.144 384C378.687 392.555 361.67 418.438 360.825 419.467C358.956 421.744 348.376 435.637 346.985 437.64C346.168 438.817 338.75 448.642 330.5 459.473C322.25 470.305 314.6 480.44 313.5 481.996C312.4 483.551 304.539 493.976 296.031 505.162C287.165 516.819 280.604 526.358 280.66 527.51C280.714 528.615 281.906 530.865 283.308 532.51C284.71 534.154 293.348 544.725 302.504 556C311.659 567.275 320.579 578.256 322.325 580.403C324.071 582.55 326.622 585.7 327.994 587.403C329.365 589.106 330.94 591 331.494 591.611C332.047 592.222 333.85 594.453 335.5 596.568C337.15 598.684 340.758 603.134 343.517 606.457C346.277 609.781 349.718 614.075 351.165 616C352.612 617.925 354.634 620.4 355.657 621.5C356.681 622.6 359.077 625.525 360.983 628C362.889 630.475 364.723 632.725 365.058 633C365.394 633.275 373.705 643.625 383.528 656C405.008 683.061 434.785 713.888 452.765 727.679C459.09 732.53 464.768 736.965 465.383 737.534C467.478 739.475 506.588 765 507.465 765C507.738 765 510.332 766.501 513.231 768.337C517.975 771.341 529.782 777.613 542 783.62C547.027 786.091 579.622 799.406 593.5 804.657C598.45 806.53 603.4 808.486 604.5 809.002C612.329 812.68 622.256 815.066 642.25 818.079C649.263 819.136 660.962 820.925 668.25 822.056C675.538 823.187 686.225 824.615 692 825.23C706.796 826.804 774.297 826.716 784.5 825.109C788.9 824.416 798.125 823.024 805 822.016C811.875 821.007 822 819.206 827.5 818.013C833 816.819 840.44 815.244 844.032 814.513C847.625 813.781 853.025 812.414 856.032 811.473C864.415 808.852 873.281 805.885 875.5 804.958C876.6 804.498 882.225 802.542 888 800.61C908.797 793.652 928.539 786.906 930.5 786.086C931.6 785.626 936.55 783.815 941.5 782.061C951.586 778.488 952.84 778.006 958.5 775.523C962.579 773.734 968.238 772.532 989.5 768.938C1002.73 766.703 1033.95 766.202 1045.63 768.038C1053.94 769.342 1085.25 776.051 1086.5 776.793C1092.83 780.56 1116.98 796.826 1119.37 798.933C1129.54 807.898 1173.59 846.139 1179.41 851.045C1183.97 854.886 1199.83 868.653 1207 874.989C1210.58 878.147 1216.42 883.151 1220 886.107C1223.58 889.064 1226.95 892.007 1227.5 892.648C1228.05 893.288 1233.7 898.242 1240.05 903.656C1252.49 914.256 1259.13 919.995 1273.46 932.5C1278.5 936.9 1285.26 942.75 1288.49 945.5C1291.71 948.25 1295.07 951.175 1295.95 952C1296.83 952.825 1300.21 955.75 1303.48 958.5C1306.74 961.25 1310.13 964.175 1311.01 965C1311.88 965.825 1315.24 968.75 1318.48 971.5C1321.71 974.25 1325.07 977.175 1325.95 978C1326.83 978.825 1330.21 981.75 1333.48 984.5C1336.74 987.25 1340.13 990.175 1341.01 991C1341.88 991.825 1345.25 994.75 1348.48 997.5C1351.71 1000.25 1356.66 1004.52 1359.47 1007C1362.29 1009.47 1367.23 1013.75 1370.46 1016.5C1373.69 1019.25 1378.17 1023.13 1380.42 1025.13C1386.17 1030.25 1393.59 1036.67 1400.5 1042.5C1403.76 1045.25 1407.37 1048.4 1408.52 1049.5C1418.28 1058.85 1420.12 1059.04 1426.67 1051.3C1429.33 1048.16 1432.18 1044.87 1433 1043.98C1433.82 1043.1 1436.53 1039.96 1439 1037.02C1444.22 1030.81 1454.09 1019.26 1465.59 1005.9C1485.23 983.072 1487 985.865 1487 977.5C1487 970.306 1483.9 969.159 1480.75 966.721C1478.96 965.336 1476.6 963.368 1475.5 962.346C1474.4 961.325 1470.84 958.241 1467.59 955.494C1464.34 952.747 1460.29 949.202 1458.59 947.614C1456.89 946.027 1453.03 942.666 1450 940.144C1446.97 937.622 1442.44 933.745 1439.93 931.529C1430.32 923.06 1427.2 920.345 1421.51 915.5C1418.28 912.75 1413.34 908.475 1410.53 906C1407.71 903.525 1402.76 899.25 1399.53 896.5C1396.29 893.75 1392.92 890.825 1392.03 890C1390.35 888.44 1379.61 879.132 1369.54 870.5C1366.33 867.75 1362.98 864.801 1362.1 863.947C1361.22 863.093 1357.82 860.168 1354.55 857.447C1351.27 854.726 1347.87 851.825 1346.99 851C1346.11 850.175 1342.94 847.393 1339.94 844.818C1336.95 842.243 1330 836.232 1324.5 831.46C1319 826.689 1311.83 820.47 1308.56 817.642C1305.29 814.814 1301.89 811.825 1301.01 811C1300.13 810.175 1296.73 807.25 1293.46 804.5C1284.99 797.386 1282.05 794.844 1278.99 792C1277.51 790.625 1272.08 785.9 1266.93 781.5C1261.77 777.1 1256.83 772.825 1255.95 772C1255.07 771.175 1251.91 768.414 1248.93 765.864C1233.76 752.907 1224.4 744.812 1211.95 733.882C1206.7 729.272 1199.74 723.25 1196.49 720.5C1193.23 717.75 1189.62 714.6 1188.47 713.5C1187.31 712.4 1184.37 709.843 1181.93 707.819C1179.49 705.794 1176.33 703.094 1174.9 701.819C1173.48 700.543 1169.67 697.25 1166.46 694.5C1163.24 691.75 1158.32 687.475 1155.51 685C1152.71 682.525 1147.74 678.19 1144.46 675.366C1141.18 672.542 1126.12 659.504 1111 646.392C1095.88 633.28 1082.42 621.64 1081.1 620.526C1079.78 619.412 1074.61 614.949 1069.6 610.608C1056.78 599.492 1055.89 598.718 1042.5 587C1035.9 581.225 1027.57 574.029 1024 571.01C1020.43 567.99 1013.65 562.14 1008.94 558.01C1004.23 553.879 997.497 548.025 993.974 545C987.794 539.694 981.432 534.18 973.924 527.623C971.956 525.905 967.479 522.025 963.974 519C950.808 507.637 935.904 494.694 934.597 493.489C933.993 492.933 930.8 490.233 927.5 487.489C924.2 484.745 921.05 481.98 920.5 481.344C919.95 480.708 914.1 475.598 907.5 469.989C893.273 457.896 885.955 451.587 881.416 447.5C879.584 445.85 874.079 441.125 869.183 437C864.287 432.875 859.852 428.825 859.328 428C858.406 426.55 858.803 388.722 862.074 166.376C862.754 120.108 863.03 81.5209 862.687 80.6259C861.934 78.6649 857.679 78.6399 850.5 80.5549ZM854.965 110.75C854.946 123.263 854.252 178.725 853.423 234C852.594 289.275 851.654 356.325 851.334 383C850.752 431.5 850.752 431.5 860.626 440.067C866.057 444.779 871.809 449.729 873.408 451.067C875.008 452.405 880.423 457.1 885.443 461.5C901.815 475.852 907.419 480.724 912.639 485.146C915.465 487.541 921.09 492.378 925.139 495.896C935.734 505.103 939.001 507.932 953.391 520.363C960.481 526.489 970.401 535.1 975.434 539.5C980.468 543.9 987.469 549.975 990.992 553C994.516 556.025 999.475 560.3 1002.01 562.5C1015.74 574.401 1019.41 577.594 1020.4 578.511C1021.01 579.067 1024.18 581.767 1027.45 584.511C1030.72 587.255 1035.67 591.585 1038.45 594.133C1041.23 596.681 1045.08 600.042 1047 601.6C1048.92 603.159 1054.35 607.824 1059.05 611.967C1063.75 616.11 1070.24 621.75 1073.47 624.5C1079.33 629.494 1082.99 632.641 1094.94 643C1101.14 648.375 1102.24 649.337 1109.14 655.502C1110.99 657.153 1115.18 660.753 1118.45 663.502C1121.73 666.251 1125.14 669.175 1126.04 670C1126.94 670.825 1130.54 673.975 1134.04 677C1137.54 680.025 1142.48 684.3 1145.01 686.5C1147.54 688.7 1152.25 692.75 1155.47 695.5C1158.69 698.25 1165.64 704.261 1170.91 708.858C1176.19 713.455 1183.17 719.53 1186.44 722.358C1189.71 725.186 1193.11 728.175 1193.99 729C1194.87 729.825 1198.27 732.745 1201.55 735.489C1204.82 738.233 1207.99 740.933 1208.58 741.489C1210.37 743.166 1220.97 752.357 1238 767C1241.51 770.025 1248.27 775.875 1253.01 780C1257.75 784.125 1264.5 789.975 1268.01 793C1271.52 796.025 1278.48 802.1 1283.49 806.5C1288.5 810.9 1295.24 816.75 1298.48 819.5C1304.98 825.018 1319.88 837.925 1321.57 839.499C1322.17 840.05 1325.29 842.75 1328.52 845.5C1331.75 848.25 1336.68 852.525 1339.49 855C1342.29 857.475 1347.26 861.81 1350.54 864.634C1353.82 867.458 1368.88 880.496 1384 893.608C1399.12 906.72 1412.59 918.36 1413.92 919.474C1415.25 920.588 1420.65 925.266 1425.92 929.869C1431.19 934.472 1436.62 939.209 1438 940.395C1439.38 941.581 1444.32 945.87 1449 949.925C1453.68 953.98 1462.22 961.339 1468 966.278C1473.78 971.217 1478.86 975.582 1479.3 975.978C1479.74 976.374 1478.76 978.228 1477.14 980.099C1473.78 983.957 1461.96 997.808 1455.09 1005.94C1452.57 1008.93 1449.82 1012.1 1449 1012.99C1448.18 1013.87 1445.25 1017.27 1442.5 1020.54C1435.56 1028.81 1432.75 1032.09 1431 1033.97C1430.18 1034.86 1427.33 1038.16 1424.67 1041.3C1422.02 1044.43 1419.37 1047 1418.78 1047C1417.76 1047 1411 1041.53 1404.41 1035.39C1402.71 1033.8 1398.66 1030.25 1395.41 1027.5C1386.22 1019.71 1383.88 1017.69 1380.99 1015C1379.51 1013.62 1374.07 1008.9 1368.9 1004.51C1363.73 1000.11 1359.01 996.06 1358.4 995.506C1357.8 994.953 1351.31 989.325 1343.98 983C1336.65 976.675 1323.65 965.401 1315.08 957.946C1306.51 950.491 1298.19 943.291 1296.59 941.946C1293.53 939.376 1277.63 925.621 1272.5 921.109C1270.85 919.657 1262.97 912.851 1255 905.985C1247.03 899.118 1240.28 893.265 1240 892.978C1239.72 892.69 1236.84 890.215 1233.59 887.478C1230.34 884.74 1226.29 881.202 1224.59 879.614C1222.89 878.027 1219.03 874.652 1216 872.114C1212.97 869.577 1206.66 864.125 1201.97 860C1197.27 855.875 1190.79 850.25 1187.55 847.5C1184.32 844.75 1177.55 838.9 1172.5 834.5C1167.46 830.1 1160.48 824.025 1157 821C1153.51 817.975 1150.17 815.05 1149.58 814.5C1148.99 813.95 1146.9 812.15 1144.94 810.5C1138.92 805.413 1129.99 797.663 1126.16 794.192C1124.15 792.372 1119.12 788.681 1115 785.989C1110.88 783.298 1105.72 779.837 1103.54 778.298C1093.14 770.959 1088.49 768.79 1079.04 766.884C1073.79 765.825 1066.35 764.268 1062.5 763.423C1058.65 762.579 1053.7 761.494 1051.5 761.013C1049.3 760.531 1037.15 759.839 1024.5 759.474C1005.23 758.918 999.958 759.084 992 760.496C986.775 761.424 980.025 762.599 977 763.108C965.768 764.998 943.094 772.059 932.5 776.966C931.4 777.476 926.45 779.254 921.5 780.919C916.55 782.583 902.6 787.39 890.5 791.6C860.509 802.035 847.932 805.802 832.5 808.97C789.284 817.843 776.658 819.261 740 819.362C707.247 819.452 690.128 818.039 657 812.512C652.325 811.732 643.55 810.394 637.5 809.538C623.824 807.603 616.518 805.451 597.5 797.76C589.25 794.423 578 789.919 572.5 787.75C567 785.582 560.25 782.917 557.5 781.828C553.076 780.076 529.666 768.552 523 764.846C511.894 758.671 493.364 747.399 492 745.989C491.725 745.704 486.775 742.35 481 738.535C475.225 734.72 470.275 731.334 470 731.01C469.577 730.512 465.542 727.361 454.622 719C442.246 709.524 408.966 675.709 397.532 660.992C393.903 656.321 390.38 651.825 389.703 651C382.074 641.706 359.99 614.107 358.287 611.74C357.069 610.048 355.704 608.402 355.253 608.082C354.802 607.762 350.665 602.785 346.06 597.022C341.455 591.26 337.196 586.023 336.594 585.384C335.266 583.974 333.582 581.889 329.014 575.997C327.097 573.524 325.072 571 324.514 570.389C323.956 569.778 322.15 567.554 320.5 565.447C318.85 563.34 314.874 558.44 311.664 554.558C308.454 550.676 305.079 546.594 304.164 545.487C303.249 544.38 300.25 540.61 297.5 537.109C294.75 533.609 291.764 530.072 290.864 529.248C289.356 527.868 289.395 527.509 291.371 524.626C294.878 519.507 302.363 509.648 304.37 507.5C305.399 506.4 306.974 504.373 307.87 502.995C309.585 500.361 335.779 465.322 337.5 463.361C338.05 462.734 339.4 460.973 340.5 459.446C341.6 457.92 344.986 453.483 348.025 449.586C357.156 437.876 372.367 416.959 377.175 409.5C379.657 405.65 383.982 398.9 386.785 394.5C389.588 390.1 392.252 386.05 392.705 385.5C393.157 384.95 396.65 379.55 400.467 373.5C404.283 367.45 407.665 362.275 407.983 362C408.301 361.725 411.676 356.55 415.483 350.5C419.29 344.45 422.672 339.275 422.998 339C423.323 338.725 425.557 335.35 427.962 331.5C430.367 327.65 436.158 318.65 440.831 311.5C456.52 287.498 463.603 276.526 466.006 272.5C467.32 270.3 468.659 268.275 468.982 268C469.593 267.479 474.177 260.432 480.04 251C481.92 247.975 483.918 244.97 484.479 244.323C485.041 243.676 488.2 238.774 491.5 233.429C494.8 228.085 500.517 220.49 504.204 216.552C510.332 210.006 511.197 209.425 514.28 209.784C517.466 210.157 517.977 209.748 523.576 202.352C526.834 198.048 529.85 194.07 530.278 193.513C530.705 192.956 533.109 189.8 535.619 186.5C540.897 179.562 541.348 179.121 549.959 172.481C557.299 166.822 559.299 165.235 562.269 162.723C563.424 161.745 565.523 160.695 566.934 160.389C568.345 160.083 570.175 159.594 571 159.302C572.856 158.645 597.34 152.385 605.5 150.481C611.635 149.049 640.132 141.8 654.5 138.016C658.9 136.857 665.2 135.282 668.5 134.516C677.314 132.469 687.876 129.824 712.5 123.494C724.6 120.384 737.987 116.976 742.25 115.92C746.513 114.864 753.6 113.1 758 112C762.4 110.9 769.487 109.139 773.75 108.087C778.013 107.035 791.4 103.618 803.5 100.494C834.02 92.6149 851.608 88.2779 853.75 88.1019C854.717 88.0229 854.992 93.1449 854.965 110.75Z"/>
</mask>
<path fill-rule="evenodd" clip-rule="evenodd" d="M850.5 80.5549C847.75 81.2889 841.9 82.7779 837.5 83.8649C824.335 87.1149 743.278 107.647 732.5 110.462C727 111.899 719.8 113.705 716.5 114.476C706.476 116.817 695.202 119.646 680.5 123.509C672.8 125.532 663.013 128.045 658.75 129.093C654.487 130.142 647.288 131.924 642.75 133.052C638.212 134.181 631.125 135.934 627 136.947C622.875 137.96 606.411 142.102 590.413 146.151C559.032 154.094 559.948 153.704 546.382 164.922C542.61 168.041 536.107 173.287 535.141 173.99C534.755 174.271 529.829 180.674 524.193 188.22C514.347 201.403 513.829 201.916 510.954 201.341C508.242 200.798 507.296 201.435 500.866 208.121C494.112 215.145 492.175 217.798 480.147 236.5C477.317 240.9 474.534 245.175 473.962 246C473.391 246.825 470.015 252 466.461 257.5C462.907 263 459.541 268.175 458.981 269C458.421 269.825 455.202 274.775 451.829 280C444.058 292.038 434.315 307.047 433.005 309C432.451 309.825 429.08 315 425.513 320.5C421.946 326 418.572 331.175 418.014 332C417.457 332.825 414.093 338 410.539 343.5C406.985 349 403.61 354.175 403.039 355C402.468 355.825 399.093 361 395.539 366.5C391.985 372 388.613 377.175 388.046 378C387.478 378.825 385.722 381.525 384.144 384C378.687 392.555 361.67 418.438 360.825 419.467C358.956 421.744 348.376 435.637 346.985 437.64C346.168 438.817 338.75 448.642 330.5 459.473C322.25 470.305 314.6 480.44 313.5 481.996C312.4 483.551 304.539 493.976 296.031 505.162C287.165 516.819 280.604 526.358 280.66 527.51C280.714 528.615 281.906 530.865 283.308 532.51C284.71 534.154 293.348 544.725 302.504 556C311.659 567.275 320.579 578.256 322.325 580.403C324.071 582.55 326.622 585.7 327.994 587.403C329.365 589.106 330.94 591 331.494 591.611C332.047 592.222 333.85 594.453 335.5 596.568C337.15 598.684 340.758 603.134 343.517 606.457C346.277 609.781 349.718 614.075 351.165 616C352.612 617.925 354.634 620.4 355.657 621.5C356.681 622.6 359.077 625.525 360.983 628C362.889 630.475 364.723 632.725 365.058 633C365.394 633.275 373.705 643.625 383.528 656C405.008 683.061 434.785 713.888 452.765 727.679C459.09 732.53 464.768 736.965 465.383 737.534C467.478 739.475 506.588 765 507.465 765C507.738 765 510.332 766.501 513.231 768.337C517.975 771.341 529.782 777.613 542 783.62C547.027 786.091 579.622 799.406 593.5 804.657C598.45 806.53 603.4 808.486 604.5 809.002C612.329 812.68 622.256 815.066 642.25 818.079C649.263 819.136 660.962 820.925 668.25 822.056C675.538 823.187 686.225 824.615 692 825.23C706.796 826.804 774.297 826.716 784.5 825.109C788.9 824.416 798.125 823.024 805 822.016C811.875 821.007 822 819.206 827.5 818.013C833 816.819 840.44 815.244 844.032 814.513C847.625 813.781 853.025 812.414 856.032 811.473C864.415 808.852 873.281 805.885 875.5 804.958C876.6 804.498 882.225 802.542 888 800.61C908.797 793.652 928.539 786.906 930.5 786.086C931.6 785.626 936.55 783.815 941.5 782.061C951.586 778.488 952.84 778.006 958.5 775.523C962.579 773.734 968.238 772.532 989.5 768.938C1002.73 766.703 1033.95 766.202 1045.63 768.038C1053.94 769.342 1085.25 776.051 1086.5 776.793C1092.83 780.56 1116.98 796.826 1119.37 798.933C1129.54 807.898 1173.59 846.139 1179.41 851.045C1183.97 854.886 1199.83 868.653 1207 874.989C1210.58 878.147 1216.42 883.151 1220 886.107C1223.58 889.064 1226.95 892.007 1227.5 892.648C1228.05 893.288 1233.7 898.242 1240.05 903.656C1252.49 914.256 1259.13 919.995 1273.46 932.5C1278.5 936.9 1285.26 942.75 1288.49 945.5C1291.71 948.25 1295.07 951.175 1295.95 952C1296.83 952.825 1300.21 955.75 1303.48 958.5C1306.74 961.25 1310.13 964.175 1311.01 965C1311.88 965.825 1315.24 968.75 1318.48 971.5C1321.71 974.25 1325.07 977.175 1325.95 978C1326.83 978.825 1330.21 981.75 1333.48 984.5C1336.74 987.25 1340.13 990.175 1341.01 991C1341.88 991.825 1345.25 994.75 1348.48 997.5C1351.71 1000.25 1356.66 1004.52 1359.47 1007C1362.29 1009.47 1367.23 1013.75 1370.46 1016.5C1373.69 1019.25 1378.17 1023.13 1380.42 1025.13C1386.17 1030.25 1393.59 1036.67 1400.5 1042.5C1403.76 1045.25 1407.37 1048.4 1408.52 1049.5C1418.28 1058.85 1420.12 1059.04 1426.67 1051.3C1429.33 1048.16 1432.18 1044.87 1433 1043.98C1433.82 1043.1 1436.53 1039.96 1439 1037.02C1444.22 1030.81 1454.09 1019.26 1465.59 1005.9C1485.23 983.072 1487 985.865 1487 977.5C1487 970.306 1483.9 969.159 1480.75 966.721C1478.96 965.336 1476.6 963.368 1475.5 962.346C1474.4 961.325 1470.84 958.241 1467.59 955.494C1464.34 952.747 1460.29 949.202 1458.59 947.614C1456.89 946.027 1453.03 942.666 1450 940.144C1446.97 937.622 1442.44 933.745 1439.93 931.529C1430.32 923.06 1427.2 920.345 1421.51 915.5C1418.28 912.75 1413.34 908.475 1410.53 906C1407.71 903.525 1402.76 899.25 1399.53 896.5C1396.29 893.75 1392.92 890.825 1392.03 890C1390.35 888.44 1379.61 879.132 1369.54 870.5C1366.33 867.75 1362.98 864.801 1362.1 863.947C1361.22 863.093 1357.82 860.168 1354.55 857.447C1351.27 854.726 1347.87 851.825 1346.99 851C1346.11 850.175 1342.94 847.393 1339.94 844.818C1336.95 842.243 1330 836.232 1324.5 831.46C1319 826.689 1311.83 820.47 1308.56 817.642C1305.29 814.814 1301.89 811.825 1301.01 811C1300.13 810.175 1296.73 807.25 1293.46 804.5C1284.99 797.386 1282.05 794.844 1278.99 792C1277.51 790.625 1272.08 785.9 1266.93 781.5C1261.77 777.1 1256.83 772.825 1255.95 772C1255.07 771.175 1251.91 768.414 1248.93 765.864C1233.76 752.907 1224.4 744.812 1211.95 733.882C1206.7 729.272 1199.74 723.25 1196.49 720.5C1193.23 717.75 1189.62 714.6 1188.47 713.5C1187.31 712.4 1184.37 709.843 1181.93 707.819C1179.49 705.794 1176.33 703.094 1174.9 701.819C1173.48 700.543 1169.67 697.25 1166.46 694.5C1163.24 691.75 1158.32 687.475 1155.51 685C1152.71 682.525 1147.74 678.19 1144.46 675.366C1141.18 672.542 1126.12 659.504 1111 646.392C1095.88 633.28 1082.42 621.64 1081.1 620.526C1079.78 619.412 1074.61 614.949 1069.6 610.608C1056.78 599.492 1055.89 598.718 1042.5 587C1035.9 581.225 1027.57 574.029 1024 571.01C1020.43 567.99 1013.65 562.14 1008.94 558.01C1004.23 553.879 997.497 548.025 993.974 545C987.794 539.694 981.432 534.18 973.924 527.623C971.956 525.905 967.479 522.025 963.974 519C950.808 507.637 935.904 494.694 934.597 493.489C933.993 492.933 930.8 490.233 927.5 487.489C924.2 484.745 921.05 481.98 920.5 481.344C919.95 480.708 914.1 475.598 907.5 469.989C893.273 457.896 885.955 451.587 881.416 447.5C879.584 445.85 874.079 441.125 869.183 437C864.287 432.875 859.852 428.825 859.328 428C858.406 426.55 858.803 388.722 862.074 166.376C862.754 120.108 863.03 81.5209 862.687 80.6259C861.934 78.6649 857.679 78.6399 850.5 80.5549ZM854.965 110.75C854.946 123.263 854.252 178.725 853.423 234C852.594 289.275 851.654 356.325 851.334 383C850.752 431.5 850.752 431.5 860.626 440.067C866.057 444.779 871.809 449.729 873.408 451.067C875.008 452.405 880.423 457.1 885.443 461.5C901.815 475.852 907.419 480.724 912.639 485.146C915.465 487.541 921.09 492.378 925.139 495.896C935.734 505.103 939.001 507.932 953.391 520.363C960.481 526.489 970.401 535.1 975.434 539.5C980.468 543.9 987.469 549.975 990.992 553C994.516 556.025 999.475 560.3 1002.01 562.5C1015.74 574.401 1019.41 577.594 1020.4 578.511C1021.01 579.067 1024.18 581.767 1027.45 584.511C1030.72 587.255 1035.67 591.585 1038.45 594.133C1041.23 596.681 1045.08 600.042 1047 601.6C1048.92 603.159 1054.35 607.824 1059.05 611.967C1063.75 616.11 1070.24 621.75 1073.47 624.5C1079.33 629.494 1082.99 632.641 1094.94 643C1101.14 648.375 1102.24 649.337 1109.14 655.502C1110.99 657.153 1115.18 660.753 1118.45 663.502C1121.73 666.251 1125.14 669.175 1126.04 670C1126.94 670.825 1130.54 673.975 1134.04 677C1137.54 680.025 1142.48 684.3 1145.01 686.5C1147.54 688.7 1152.25 692.75 1155.47 695.5C1158.69 698.25 1165.64 704.261 1170.91 708.858C1176.19 713.455 1183.17 719.53 1186.44 722.358C1189.71 725.186 1193.11 728.175 1193.99 729C1194.87 729.825 1198.27 732.745 1201.55 735.489C1204.82 738.233 1207.99 740.933 1208.58 741.489C1210.37 743.166 1220.97 752.357 1238 767C1241.51 770.025 1248.27 775.875 1253.01 780C1257.75 784.125 1264.5 789.975 1268.01 793C1271.52 796.025 1278.48 802.1 1283.49 806.5C1288.5 810.9 1295.24 816.75 1298.48 819.5C1304.98 825.018 1319.88 837.925 1321.57 839.499C1322.17 840.05 1325.29 842.75 1328.52 845.5C1331.75 848.25 1336.68 852.525 1339.49 855C1342.29 857.475 1347.26 861.81 1350.54 864.634C1353.82 867.458 1368.88 880.496 1384 893.608C1399.12 906.72 1412.59 918.36 1413.92 919.474C1415.25 920.588 1420.65 925.266 1425.92 929.869C1431.19 934.472 1436.62 939.209 1438 940.395C1439.38 941.581 1444.32 945.87 1449 949.925C1453.68 953.98 1462.22 961.339 1468 966.278C1473.78 971.217 1478.86 975.582 1479.3 975.978C1479.74 976.374 1478.76 978.228 1477.14 980.099C1473.78 983.957 1461.96 997.808 1455.09 1005.94C1452.57 1008.93 1449.82 1012.1 1449 1012.99C1448.18 1013.87 1445.25 1017.27 1442.5 1020.54C1435.56 1028.81 1432.75 1032.09 1431 1033.97C1430.18 1034.86 1427.33 1038.16 1424.67 1041.3C1422.02 1044.43 1419.37 1047 1418.78 1047C1417.76 1047 1411 1041.53 1404.41 1035.39C1402.71 1033.8 1398.66 1030.25 1395.41 1027.5C1386.22 1019.71 1383.88 1017.69 1380.99 1015C1379.51 1013.62 1374.07 1008.9 1368.9 1004.51C1363.73 1000.11 1359.01 996.06 1358.4 995.506C1357.8 994.953 1351.31 989.325 1343.98 983C1336.65 976.675 1323.65 965.401 1315.08 957.946C1306.51 950.491 1298.19 943.291 1296.59 941.946C1293.53 939.376 1277.63 925.621 1272.5 921.109C1270.85 919.657 1262.97 912.851 1255 905.985C1247.03 899.118 1240.28 893.265 1240 892.978C1239.72 892.69 1236.84 890.215 1233.59 887.478C1230.34 884.74 1226.29 881.202 1224.59 879.614C1222.89 878.027 1219.03 874.652 1216 872.114C1212.97 869.577 1206.66 864.125 1201.97 860C1197.27 855.875 1190.79 850.25 1187.55 847.5C1184.32 844.75 1177.55 838.9 1172.5 834.5C1167.46 830.1 1160.48 824.025 1157 821C1153.51 817.975 1150.17 815.05 1149.58 814.5C1148.99 813.95 1146.9 812.15 1144.94 810.5C1138.92 805.413 1129.99 797.663 1126.16 794.192C1124.15 792.372 1119.12 788.681 1115 785.989C1110.88 783.298 1105.72 779.837 1103.54 778.298C1093.14 770.959 1088.49 768.79 1079.04 766.884C1073.79 765.825 1066.35 764.268 1062.5 763.423C1058.65 762.579 1053.7 761.494 1051.5 761.013C1049.3 760.531 1037.15 759.839 1024.5 759.474C1005.23 758.918 999.958 759.084 992 760.496C986.775 761.424 980.025 762.599 977 763.108C965.768 764.998 943.094 772.059 932.5 776.966C931.4 777.476 926.45 779.254 921.5 780.919C916.55 782.583 902.6 787.39 890.5 791.6C860.509 802.035 847.932 805.802 832.5 808.97C789.284 817.843 776.658 819.261 740 819.362C707.247 819.452 690.128 818.039 657 812.512C652.325 811.732 643.55 810.394 637.5 809.538C623.824 807.603 616.518 805.451 597.5 797.76C589.25 794.423 578 789.919 572.5 787.75C567 785.582 560.25 782.917 557.5 781.828C553.076 780.076 529.666 768.552 523 764.846C511.894 758.671 493.364 747.399 492 745.989C491.725 745.704 486.775 742.35 481 738.535C475.225 734.72 470.275 731.334 470 731.01C469.577 730.512 465.542 727.361 454.622 719C442.246 709.524 408.966 675.709 397.532 660.992C393.903 656.321 390.38 651.825 389.703 651C382.074 641.706 359.99 614.107 358.287 611.74C357.069 610.048 355.704 608.402 355.253 608.082C354.802 607.762 350.665 602.785 346.06 597.022C341.455 591.26 337.196 586.023 336.594 585.384C335.266 583.974 333.582 581.889 329.014 575.997C327.097 573.524 325.072 571 324.514 570.389C323.956 569.778 322.15 567.554 320.5 565.447C318.85 563.34 314.874 558.44 311.664 554.558C308.454 550.676 305.079 546.594 304.164 545.487C303.249 544.38 300.25 540.61 297.5 537.109C294.75 533.609 291.764 530.072 290.864 529.248C289.356 527.868 289.395 527.509 291.371 524.626C294.878 519.507 302.363 509.648 304.37 507.5C305.399 506.4 306.974 504.373 307.87 502.995C309.585 500.361 335.779 465.322 337.5 463.361C338.05 462.734 339.4 460.973 340.5 459.446C341.6 457.92 344.986 453.483 348.025 449.586C357.156 437.876 372.367 416.959 377.175 409.5C379.657 405.65 383.982 398.9 386.785 394.5C389.588 390.1 392.252 386.05 392.705 385.5C393.157 384.95 396.65 379.55 400.467 373.5C404.283 367.45 407.665 362.275 407.983 362C408.301 361.725 411.676 356.55 415.483 350.5C419.29 344.45 422.672 339.275 422.998 339C423.323 338.725 425.557 335.35 427.962 331.5C430.367 327.65 436.158 318.65 440.831 311.5C456.52 287.498 463.603 276.526 466.006 272.5C467.32 270.3 468.659 268.275 468.982 268C469.593 267.479 474.177 260.432 480.04 251C481.92 247.975 483.918 244.97 484.479 244.323C485.041 243.676 488.2 238.774 491.5 233.429C494.8 228.085 500.517 220.49 504.204 216.552C510.332 210.006 511.197 209.425 514.28 209.784C517.466 210.157 517.977 209.748 523.576 202.352C526.834 198.048 529.85 194.07 530.278 193.513C530.705 192.956 533.109 189.8 535.619 186.5C540.897 179.562 541.348 179.121 549.959 172.481C557.299 166.822 559.299 165.235 562.269 162.723C563.424 161.745 565.523 160.695 566.934 160.389C568.345 160.083 570.175 159.594 571 159.302C572.856 158.645 597.34 152.385 605.5 150.481C611.635 149.049 640.132 141.8 654.5 138.016C658.9 136.857 665.2 135.282 668.5 134.516C677.314 132.469 687.876 129.824 712.5 123.494C724.6 120.384 737.987 116.976 742.25 115.92C746.513 114.864 753.6 113.1 758 112C762.4 110.9 769.487 109.139 773.75 108.087C778.013 107.035 791.4 103.618 803.5 100.494C834.02 92.6149 851.608 88.2779 853.75 88.1019C854.717 88.0229 854.992 93.1449 854.965 110.75Z" fill="white" stroke="#364C3F" stroke-width="2" mask="url(#path-1367-inside-1_35_312)"/>
</g>
<g id="140.1">
<path id="Vector 194" d="M916.265 750.062L937.969 768.29C939.749 769.785 939.226 772.649 937.033 773.418L914 781.5L904 752.5L913.426 749.501C914.406 749.189 915.477 749.401 916.265 750.062Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 21" filter="url(#filter0_d_35_312)">
<path d="M922.954 769.621C923.438 771.2 922.555 772.873 920.978 773.364L911.788 776.227L907.974 763.94L917.187 761.079C918.774 760.586 920.458 761.476 920.945 763.065L922.954 769.621Z" fill="#1F2923"/>
</g>
<g id="Rectangle 69" filter="url(#filter1_d_35_312)">
<path d="M923.954 767.621C924.438 769.2 923.555 770.873 921.978 771.364L912.788 774.227L908.974 761.94L918.187 759.079C919.774 758.586 921.458 759.476 921.945 761.065L923.954 767.621Z" fill="#1F2923"/>
<path d="M923.954 767.621C924.438 769.2 923.555 770.873 921.978 771.364L912.788 774.227L908.974 761.94L918.187 759.079C919.774 758.586 921.458 759.476 921.945 761.065L923.954 767.621Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="140">
<path id="135" d="M914 781.5L904 752.5L888.314 758.011C886.757 758.558 885.934 760.26 886.472 761.82L894.516 785.147C895.059 786.72 896.777 787.551 898.347 787L914 781.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 22" filter="url(#filter2_d_35_312)">
<path d="M897.078 770.558C896.59 768.987 897.459 767.315 899.026 766.812L907.974 763.94L911.787 776.216L902.893 779.071C901.305 779.581 899.606 778.697 899.112 777.104L897.078 770.558Z" fill="#1F2923"/>
</g>
<g id="Rectangle 74" filter="url(#filter3_d_35_312)">
<path d="M898.078 768.558C897.59 766.987 898.459 765.315 900.026 764.812L908.974 761.94L912.787 774.216L903.893 777.071C902.305 777.581 900.606 776.697 900.112 775.104L898.078 768.558Z" fill="#1F2923"/>
<path d="M898.078 768.558C897.59 766.987 898.459 765.315 900.026 764.812L908.974 761.94L912.787 774.216L903.893 777.071C902.305 777.581 900.606 776.697 900.112 775.104L898.078 768.558Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="144">
<path id="Rectangle 53" d="M1296.26 872.726C1295.01 871.634 1294.88 869.739 1295.98 868.493L1314.57 847.257C1315.66 846.011 1317.55 845.885 1318.8 846.976L1329.91 856.706C1331.16 857.797 1331.29 859.692 1330.19 860.939L1311.6 882.174C1310.51 883.421 1308.62 883.547 1307.37 882.455L1296.26 872.726Z" fill="#D9D9D9"/>
<path id="Rectangle 54" d="M1338.26 908.726C1337.01 907.634 1336.88 905.739 1337.98 904.493L1356.57 883.257C1357.66 882.011 1359.55 881.885 1360.8 882.976L1371.91 892.706C1373.16 893.797 1373.29 895.692 1372.19 896.939L1353.6 918.174C1352.51 919.421 1350.62 919.547 1349.37 918.455L1338.26 908.726Z" fill="#D9D9D9"/>
<path id="Rectangle 55" d="M1380.26 944.726C1379.01 943.634 1378.88 941.739 1379.98 940.493L1398.57 919.257C1399.66 918.011 1401.55 917.885 1402.8 918.976L1413.91 928.706C1415.16 929.797 1415.29 931.692 1414.19 932.939L1395.6 954.174C1394.51 955.421 1392.62 955.547 1391.37 954.455L1380.26 944.726Z" fill="#D9D9D9"/>
<path id="Rectangle 59" d="M1416.72 963.063C1415.47 961.971 1415.34 960.076 1416.44 958.829L1426.57 947.257C1427.66 946.01 1429.55 945.885 1430.8 946.976L1454.22 967.483C1455.47 968.574 1455.6 970.469 1454.51 971.716L1444.37 983.288C1443.28 984.535 1441.39 984.661 1440.14 983.57L1416.72 963.063Z" fill="#D9D9D9"/>
<path id="Rectangle 60" d="M1412.75 988.245L1424.67 974.625C1425.76 973.379 1427.65 973.253 1428.9 974.344L1439.58 983.692C1440.83 984.784 1440.95 986.68 1439.86 987.927L1427.66 1001.84C1427.02 1002.57 1426.07 1002.94 1425.11 1002.84L1407.79 1001.09C1405.36 1000.84 1404.23 997.958 1405.84 996.125L1412.75 988.245Z" fill="#D9D9D9"/>
<path id="Rectangle 56" d="M1266.73 909.066C1265.48 907.976 1265.36 906.081 1266.45 904.833L1276.08 893.798C1277.17 892.55 1279.07 892.422 1280.32 893.512L1306.03 915.969C1307.28 917.059 1307.4 918.954 1306.31 920.202L1296.68 931.238C1295.59 932.485 1293.69 932.613 1292.44 931.523L1266.73 909.066Z" fill="#D9D9D9"/>
<path id="Rectangle 57" d="M1297.38 935.889C1296.13 934.799 1296 932.903 1297.09 931.656L1306.66 920.699C1307.75 919.451 1309.65 919.323 1310.9 920.413L1336.03 942.37C1337.28 943.46 1337.41 945.355 1336.32 946.603L1326.75 957.559C1325.66 958.807 1323.77 958.935 1322.52 957.845L1297.38 935.889Z" fill="#D9D9D9"/>
<path id="Rectangle 58" d="M1327.55 962.112C1326.31 961.022 1326.18 959.127 1327.27 957.879L1336.73 947.047C1337.82 945.799 1339.71 945.671 1340.96 946.761L1366.3 968.896C1367.55 969.986 1367.68 971.881 1366.59 973.129L1357.13 983.961C1356.04 985.209 1354.14 985.337 1352.9 984.247L1327.55 962.112Z" fill="#D9D9D9"/>
<g id="Rectangle 105" filter="url(#filter4_d_35_312)">
<path d="M1296.26 870.726C1295.01 869.634 1294.88 867.739 1295.98 866.493L1314.57 845.257C1315.66 844.011 1317.55 843.885 1318.8 844.976L1329.91 854.706C1331.16 855.797 1331.29 857.692 1330.19 858.939L1311.6 880.174C1310.51 881.421 1308.62 881.547 1307.37 880.455L1296.26 870.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 106" filter="url(#filter5_d_35_312)">
<path d="M1338.26 906.726C1337.01 905.634 1336.88 903.739 1337.98 902.493L1356.57 881.257C1357.66 880.011 1359.55 879.885 1360.8 880.976L1371.91 890.706C1373.16 891.797 1373.29 893.692 1372.19 894.939L1353.6 916.174C1352.51 917.421 1350.62 917.547 1349.37 916.455L1338.26 906.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 107" filter="url(#filter6_d_35_312)">
<path d="M1380.26 942.726C1379.01 941.634 1378.88 939.739 1379.98 938.493L1398.57 917.257C1399.66 916.011 1401.55 915.885 1402.8 916.976L1413.91 926.706C1415.16 927.797 1415.29 929.692 1414.19 930.939L1395.6 952.174C1394.51 953.421 1392.62 953.547 1391.37 952.455L1380.26 942.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 108" filter="url(#filter7_d_35_312)">
<path d="M1416.72 961.063C1415.47 959.971 1415.34 958.076 1416.44 956.829L1426.57 945.257C1427.66 944.01 1429.55 943.885 1430.8 944.976L1454.22 965.483C1455.47 966.574 1455.6 968.469 1454.51 969.716L1444.37 981.288C1443.28 982.535 1441.39 982.661 1440.14 981.57L1416.72 961.063Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 109" filter="url(#filter8_d_35_312)">
<path d="M1412.75 986.245L1424.67 972.625C1425.76 971.379 1427.65 971.253 1428.9 972.344L1439.58 981.692C1440.83 982.784 1440.95 984.68 1439.86 985.927L1427.66 999.837C1427.02 1000.57 1426.07 1000.94 1425.11 1000.84L1407.79 999.087C1405.36 998.841 1404.23 995.958 1405.84 994.125L1412.75 986.245Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 113" filter="url(#filter9_d_35_312)">
<path d="M1266.73 907.066C1265.48 905.976 1265.36 904.081 1266.45 902.833L1276.08 891.798C1277.17 890.55 1279.07 890.422 1280.32 891.512L1306.03 913.969C1307.28 915.059 1307.4 916.954 1306.31 918.202L1296.68 929.238C1295.59 930.485 1293.69 930.613 1292.44 929.523L1266.73 907.066Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 114" filter="url(#filter10_d_35_312)">
<path d="M1297.38 933.889C1296.13 932.799 1296 930.903 1297.09 929.656L1306.66 918.699C1307.75 917.451 1309.65 917.323 1310.9 918.413L1336.03 940.37C1337.28 941.46 1337.41 943.355 1336.32 944.603L1326.75 955.559C1325.66 956.807 1323.77 956.935 1322.52 955.845L1297.38 933.889Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 115" filter="url(#filter11_d_35_312)">
<path d="M1327.55 960.112C1326.31 959.022 1326.18 957.127 1327.27 955.879L1336.73 945.047C1337.82 943.799 1339.71 943.671 1340.96 944.761L1366.3 966.896C1367.55 967.986 1367.68 969.881 1366.59 971.129L1357.13 981.961C1356.04 983.209 1354.14 983.337 1352.9 982.247L1327.55 960.112Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 128" filter="url(#filter12_d_35_312)">
<path d="M1338.26 904.726C1337.01 903.634 1336.88 901.739 1337.98 900.493L1356.57 879.257C1357.66 878.011 1359.55 877.885 1360.8 878.976L1371.91 888.706C1373.16 889.797 1373.29 891.692 1372.19 892.939L1353.6 914.174C1352.51 915.421 1350.62 915.547 1349.37 914.455L1338.26 904.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 127" filter="url(#filter13_d_35_312)">
<path d="M1296.26 868.726C1295.01 867.634 1294.88 865.739 1295.98 864.493L1314.57 843.257C1315.66 842.011 1317.55 841.885 1318.8 842.976L1329.91 852.706C1331.16 853.797 1331.29 855.692 1330.19 856.939L1311.6 878.174C1310.51 879.421 1308.62 879.547 1307.37 878.455L1296.26 868.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 129" filter="url(#filter14_d_35_312)">
<path d="M1380.26 940.726C1379.01 939.634 1378.88 937.739 1379.98 936.493L1398.57 915.257C1399.66 914.011 1401.55 913.885 1402.8 914.976L1413.91 924.706C1415.16 925.797 1415.29 927.692 1414.19 928.939L1395.6 950.174C1394.51 951.421 1392.62 951.547 1391.37 950.455L1380.26 940.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 130" filter="url(#filter15_d_35_312)">
<path d="M1416.72 959.063C1415.47 957.971 1415.34 956.076 1416.44 954.829L1426.57 943.257C1427.66 942.01 1429.55 941.885 1430.8 942.976L1454.22 963.483C1455.47 964.574 1455.6 966.469 1454.51 967.716L1444.37 979.288C1443.28 980.535 1441.39 980.661 1440.14 979.57L1416.72 959.063Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 131" filter="url(#filter16_d_35_312)">
<path d="M1412.75 984.245L1424.67 970.625C1425.76 969.379 1427.65 969.253 1428.9 970.344L1439.58 979.692C1440.83 980.784 1440.95 982.68 1439.86 983.927L1427.66 997.837C1427.02 998.567 1426.07 998.942 1425.11 998.844L1407.79 997.087C1405.36 996.841 1404.23 993.958 1405.84 992.125L1412.75 984.245Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 135" filter="url(#filter17_d_35_312)">
<path d="M1266.73 905.066C1265.48 903.976 1265.36 902.081 1266.45 900.833L1276.08 889.798C1277.17 888.55 1279.07 888.422 1280.32 889.512L1306.03 911.969C1307.28 913.059 1307.4 914.954 1306.31 916.202L1296.68 927.238C1295.59 928.485 1293.69 928.613 1292.44 927.523L1266.73 905.066Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 136" filter="url(#filter18_d_35_312)">
<path d="M1297.38 931.889C1296.13 930.799 1296 928.903 1297.09 927.656L1306.66 916.699C1307.75 915.451 1309.65 915.323 1310.9 916.413L1336.03 938.37C1337.28 939.46 1337.41 941.355 1336.32 942.603L1326.75 953.559C1325.66 954.807 1323.77 954.935 1322.52 953.845L1297.38 931.889Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 137" filter="url(#filter19_d_35_312)">
<path d="M1327.55 958.112C1326.31 957.022 1326.18 955.127 1327.27 953.879L1336.73 943.047C1337.82 941.799 1339.71 941.671 1340.96 942.761L1366.3 964.896C1367.55 965.986 1367.68 967.881 1366.59 969.129L1357.13 979.961C1356.04 981.209 1354.14 981.337 1352.9 980.247L1327.55 958.112Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 152" filter="url(#filter20_d_35_312)">
<path d="M1296.26 866.726C1295.01 865.634 1294.88 863.739 1295.98 862.493L1314.57 841.257C1315.66 840.011 1317.55 839.885 1318.8 840.976L1329.91 850.706C1331.16 851.797 1331.29 853.692 1330.19 854.939L1311.6 876.174C1310.51 877.421 1308.62 877.547 1307.37 876.455L1296.26 866.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 153" filter="url(#filter21_d_35_312)">
<path d="M1338.26 902.726C1337.01 901.634 1336.88 899.739 1337.98 898.493L1356.57 877.257C1357.66 876.011 1359.55 875.885 1360.8 876.976L1371.91 886.706C1373.16 887.797 1373.29 889.692 1372.19 890.939L1353.6 912.174C1352.51 913.421 1350.62 913.547 1349.37 912.455L1338.26 902.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 154" filter="url(#filter22_d_35_312)">
<path d="M1380.26 938.726C1379.01 937.634 1378.88 935.739 1379.98 934.493L1398.57 913.257C1399.66 912.011 1401.55 911.885 1402.8 912.976L1413.91 922.706C1415.16 923.797 1415.29 925.692 1414.19 926.939L1395.6 948.174C1394.51 949.421 1392.62 949.547 1391.37 948.455L1380.26 938.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 155" filter="url(#filter23_d_35_312)">
<path d="M1416.72 957.063C1415.47 955.971 1415.34 954.076 1416.44 952.829L1426.57 941.257C1427.66 940.01 1429.55 939.885 1430.8 940.976L1454.22 961.483C1455.47 962.574 1455.6 964.469 1454.51 965.716L1444.37 977.288C1443.28 978.535 1441.39 978.661 1440.14 977.57L1416.72 957.063Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 156" filter="url(#filter24_d_35_312)">
<path d="M1412.75 982.245L1424.67 968.625C1425.76 967.379 1427.65 967.253 1428.9 968.344L1439.58 977.692C1440.83 978.784 1440.95 980.68 1439.86 981.927L1427.66 995.837C1427.02 996.567 1426.07 996.942 1425.11 996.844L1407.79 995.087C1405.36 994.841 1404.23 991.958 1405.84 990.125L1412.75 982.245Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 177" filter="url(#filter25_d_35_312)">
<path d="M1296.26 864.726C1295.01 863.634 1294.88 861.739 1295.98 860.493L1314.57 839.257C1315.66 838.011 1317.55 837.885 1318.8 838.976L1329.91 848.706C1331.16 849.797 1331.29 851.692 1330.19 852.939L1311.6 874.174C1310.51 875.421 1308.62 875.547 1307.37 874.455L1296.26 864.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 178" filter="url(#filter26_d_35_312)">
<path d="M1338.26 900.726C1337.01 899.634 1336.88 897.739 1337.98 896.493L1356.57 875.257C1357.66 874.011 1359.55 873.885 1360.8 874.976L1371.91 884.706C1373.16 885.797 1373.29 887.692 1372.19 888.939L1353.6 910.174C1352.51 911.421 1350.62 911.547 1349.37 910.455L1338.26 900.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 179" filter="url(#filter27_d_35_312)">
<path d="M1380.26 936.726C1379.01 935.634 1378.88 933.739 1379.98 932.493L1398.57 911.257C1399.66 910.011 1401.55 909.885 1402.8 910.976L1413.91 920.706C1415.16 921.797 1415.29 923.692 1414.19 924.939L1395.6 946.174C1394.51 947.421 1392.62 947.547 1391.37 946.455L1380.26 936.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 180" filter="url(#filter28_d_35_312)">
<path d="M1416.72 955.063C1415.47 953.971 1415.34 952.076 1416.44 950.829L1426.57 939.257C1427.66 938.01 1429.55 937.885 1430.8 938.976L1454.22 959.483C1455.47 960.574 1455.6 962.469 1454.51 963.716L1444.37 975.288C1443.28 976.535 1441.39 976.661 1440.14 975.57L1416.72 955.063Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 181" filter="url(#filter29_d_35_312)">
<path d="M1412.75 980.245L1424.67 966.625C1425.76 965.379 1427.65 965.253 1428.9 966.344L1439.58 975.692C1440.83 976.784 1440.95 978.68 1439.86 979.927L1427.66 993.837C1427.02 994.567 1426.07 994.942 1425.11 994.844L1407.79 993.087C1405.36 992.841 1404.23 989.958 1405.84 988.125L1412.75 980.245Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 202" filter="url(#filter30_d_35_312)">
<path d="M1296.26 862.726C1295.01 861.634 1294.88 859.739 1295.98 858.493L1314.57 837.257C1315.66 836.011 1317.55 835.885 1318.8 836.976L1329.91 846.706C1331.16 847.797 1331.29 849.692 1330.19 850.939L1311.6 872.174C1310.51 873.421 1308.62 873.547 1307.37 872.455L1296.26 862.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 203" filter="url(#filter31_d_35_312)">
<path d="M1338.26 898.726C1337.01 897.634 1336.88 895.739 1337.98 894.493L1356.57 873.257C1357.66 872.011 1359.55 871.885 1360.8 872.976L1371.91 882.706C1373.16 883.797 1373.29 885.692 1372.19 886.939L1353.6 908.174C1352.51 909.421 1350.62 909.547 1349.37 908.455L1338.26 898.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 204" filter="url(#filter32_d_35_312)">
<path d="M1380.26 934.726C1379.01 933.634 1378.88 931.739 1379.98 930.493L1398.57 909.257C1399.66 908.011 1401.55 907.885 1402.8 908.976L1413.91 918.706C1415.16 919.797 1415.29 921.692 1414.19 922.939L1395.6 944.174C1394.51 945.421 1392.62 945.547 1391.37 944.455L1380.26 934.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 205" filter="url(#filter33_d_35_312)">
<path d="M1416.72 953.063C1415.47 951.971 1415.34 950.076 1416.44 948.829L1426.57 937.257C1427.66 936.01 1429.55 935.885 1430.8 936.976L1454.22 957.483C1455.47 958.574 1455.6 960.469 1454.51 961.716L1444.37 973.288C1443.28 974.535 1441.39 974.661 1440.14 973.57L1416.72 953.063Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 206" filter="url(#filter34_d_35_312)">
<path d="M1412.75 978.245L1424.67 964.625C1425.76 963.379 1427.65 963.253 1428.9 964.344L1439.58 973.692C1440.83 974.784 1440.95 976.68 1439.86 977.927L1427.66 991.837C1427.02 992.567 1426.07 992.942 1425.11 992.844L1407.79 991.087C1405.36 990.841 1404.23 987.958 1405.84 986.125L1412.75 978.245Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 227" filter="url(#filter35_d_35_312)">
<path d="M1296.26 860.726C1295.01 859.634 1294.88 857.739 1295.98 856.493L1314.57 835.257C1315.66 834.011 1317.55 833.885 1318.8 834.976L1329.91 844.706C1331.16 845.797 1331.29 847.692 1330.19 848.939L1311.6 870.174C1310.51 871.421 1308.62 871.547 1307.37 870.455L1296.26 860.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 228" filter="url(#filter36_d_35_312)">
<path d="M1338.26 896.726C1337.01 895.634 1336.88 893.739 1337.98 892.493L1356.57 871.257C1357.66 870.011 1359.55 869.885 1360.8 870.976L1371.91 880.706C1373.16 881.797 1373.29 883.692 1372.19 884.939L1353.6 906.174C1352.51 907.421 1350.62 907.547 1349.37 906.455L1338.26 896.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 229" filter="url(#filter37_d_35_312)">
<path d="M1380.26 932.726C1379.01 931.634 1378.88 929.739 1379.98 928.493L1398.57 907.257C1399.66 906.011 1401.55 905.885 1402.8 906.976L1413.91 916.706C1415.16 917.797 1415.29 919.692 1414.19 920.939L1395.6 942.174C1394.51 943.421 1392.62 943.547 1391.37 942.455L1380.26 932.726Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 230" filter="url(#filter38_d_35_312)">
<path d="M1416.72 951.063C1415.47 949.971 1415.34 948.076 1416.44 946.829L1426.57 935.257C1427.66 934.01 1429.55 933.885 1430.8 934.976L1454.22 955.483C1455.47 956.574 1455.6 958.469 1454.51 959.716L1444.37 971.288C1443.28 972.535 1441.39 972.661 1440.14 971.57L1416.72 951.063Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 231" filter="url(#filter39_d_35_312)">
<path d="M1412.75 976.245L1424.67 962.625C1425.76 961.379 1427.65 961.253 1428.9 962.344L1439.58 971.692C1440.83 972.784 1440.95 974.68 1439.86 975.927L1427.66 989.837C1427.02 990.567 1426.07 990.942 1425.11 990.844L1407.79 989.087C1405.36 988.841 1404.23 985.958 1405.84 984.125L1412.75 976.245Z" fill="#D9D9D9"/>
</g>
</g>
<g id="143">
<path id="Rectangle 43" d="M1156.67 737.035C1155.42 735.945 1155.29 734.05 1156.38 732.802L1166.39 721.347C1167.48 720.1 1169.37 719.972 1170.62 721.061L1196.47 743.638C1197.72 744.728 1197.84 746.623 1196.75 747.871L1186.75 759.325C1185.66 760.573 1183.77 760.701 1182.52 759.611L1156.67 737.035Z" fill="#D9D9D9"/>
<path id="Rectangle 47" d="M1215.14 775.582C1213.89 774.492 1213.77 772.597 1214.86 771.349L1223.41 761.553C1224.5 760.305 1226.4 760.177 1227.65 761.267L1247.87 778.931C1249.12 780.021 1249.24 781.916 1248.15 783.164L1239.6 792.96C1238.51 794.208 1236.61 794.336 1235.37 793.246L1215.14 775.582Z" fill="#D9D9D9"/>
<path id="Rectangle 48" d="M1240.47 797.698C1239.22 796.608 1239.09 794.713 1240.18 793.465L1248.61 783.811C1249.7 782.563 1251.6 782.435 1252.85 783.525L1271.73 800.017C1272.97 801.107 1273.1 803.002 1272.01 804.25L1263.58 813.904C1262.49 815.152 1260.6 815.28 1259.35 814.19L1240.47 797.698Z" fill="#D9D9D9"/>
<path id="Rectangle 49" d="M1256.03 828.026C1254.78 826.936 1254.66 825.041 1255.75 823.793L1272.57 804.527C1273.66 803.28 1275.56 803.152 1276.81 804.241L1287.49 813.575C1288.74 814.665 1288.87 816.56 1287.78 817.808L1270.95 837.073C1269.86 838.321 1267.97 838.449 1266.72 837.359L1256.03 828.026Z" fill="#D9D9D9"/>
<path id="Rectangle 50" d="M1169.65 827.625C1168.41 826.535 1168.28 824.64 1169.37 823.392L1187.48 802.662C1188.57 801.414 1190.46 801.286 1191.71 802.376L1202.62 811.903C1203.86 812.993 1203.99 814.888 1202.9 816.136L1184.79 836.866C1183.7 838.114 1181.81 838.242 1180.56 837.152L1169.65 827.625Z" fill="#D9D9D9"/>
<path id="Rectangle 51" d="M1185.39 841.234C1184.14 840.144 1184.01 838.248 1185.1 837.001L1194.74 825.965C1195.83 824.717 1197.73 824.589 1198.98 825.679L1218.6 842.818C1219.85 843.908 1219.97 845.803 1218.88 847.051L1209.24 858.086C1208.15 859.334 1206.26 859.462 1205.01 858.372L1185.39 841.234Z" fill="#D9D9D9"/>
<path id="Rectangle 52" d="M1209.91 862.618C1208.66 861.528 1208.53 859.633 1209.62 858.385L1219.26 847.35C1220.35 846.102 1222.25 845.974 1223.5 847.064L1243.35 864.406C1244.6 865.496 1244.73 867.391 1243.64 868.639L1234 879.674C1232.91 880.922 1231.01 881.05 1229.76 879.96L1209.91 862.618Z" fill="#D9D9D9"/>
<path id="Rectangle 46" d="M1126.12 786.956C1125.64 786.526 1125.31 785.952 1125.18 785.319L1120.98 764.73C1120.65 763.108 1121.7 761.524 1123.32 761.191L1137.05 758.375C1138.63 758.051 1140.19 759.036 1140.57 760.605L1144.16 775.38C1144.31 775.975 1144.63 776.511 1145.09 776.917L1159.7 789.857C1160.91 790.935 1161.05 792.786 1160.01 794.031L1150.87 804.922C1149.78 806.22 1147.84 806.36 1146.57 805.231L1126.12 786.956Z" fill="#D9D9D9"/>
<path id="Rectangle 44" d="M1131.68 715.947C1130.43 714.857 1130.3 712.962 1131.39 711.714L1141.39 700.26C1142.48 699.012 1144.38 698.884 1145.63 699.974L1165.16 717.03C1166.4 718.12 1166.53 720.016 1165.44 721.263L1155.44 732.718C1154.35 733.966 1152.45 734.094 1151.2 733.004L1131.68 715.947Z" fill="#D9D9D9"/>
<path id="Rectangle 45" d="M1114.18 734.222C1113.99 733.32 1114.23 732.382 1114.82 731.676L1127.19 716.923C1128.27 715.636 1130.2 715.486 1131.47 716.591L1142.73 726.43C1143.98 727.518 1144.11 729.409 1143.02 730.658L1137.33 737.203C1136.73 737.892 1136.48 738.817 1136.64 739.715L1139.35 754.388C1139.64 756 1138.59 757.551 1136.99 757.873L1122.8 760.711C1121.18 761.034 1119.61 759.997 1119.27 758.387L1114.18 734.222Z" fill="#D9D9D9"/>
<g id="Rectangle 101" filter="url(#filter40_d_35_312)">
<path d="M1156.67 735.035C1155.42 733.945 1155.29 732.05 1156.38 730.802L1166.39 719.347C1167.48 718.1 1169.37 717.972 1170.62 719.061L1196.47 741.638C1197.72 742.728 1197.84 744.623 1196.75 745.871L1186.75 757.325C1185.66 758.573 1183.77 758.701 1182.52 757.611L1156.67 735.035Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 102" filter="url(#filter41_d_35_312)">
<path d="M1215.14 773.582C1213.89 772.492 1213.77 770.597 1214.86 769.349L1223.41 759.553C1224.5 758.305 1226.4 758.177 1227.65 759.267L1247.87 776.931C1249.12 778.021 1249.24 779.916 1248.15 781.164L1239.6 790.96C1238.51 792.208 1236.61 792.336 1235.37 791.246L1215.14 773.582Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 103" filter="url(#filter42_d_35_312)">
<path d="M1240.47 795.698C1239.22 794.608 1239.09 792.713 1240.18 791.465L1248.61 781.811C1249.7 780.563 1251.6 780.435 1252.85 781.525L1271.73 798.017C1272.97 799.107 1273.1 801.002 1272.01 802.25L1263.58 811.904C1262.49 813.152 1260.6 813.28 1259.35 812.19L1240.47 795.698Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 104" filter="url(#filter43_d_35_312)">
<path d="M1256.03 826.026C1254.78 824.936 1254.66 823.041 1255.75 821.793L1272.57 802.527C1273.66 801.28 1275.56 801.152 1276.81 802.241L1287.49 811.575C1288.74 812.665 1288.87 814.56 1287.78 815.808L1270.95 835.073C1269.86 836.321 1267.97 836.449 1266.72 835.359L1256.03 826.026Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 110" filter="url(#filter44_d_35_312)">
<path d="M1169.65 825.625C1168.41 824.535 1168.28 822.64 1169.37 821.392L1187.48 800.662C1188.57 799.414 1190.46 799.286 1191.71 800.376L1202.62 809.903C1203.86 810.993 1203.99 812.888 1202.9 814.136L1184.79 834.866C1183.7 836.114 1181.81 836.242 1180.56 835.152L1169.65 825.625Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 111" filter="url(#filter45_d_35_312)">
<path d="M1185.39 839.234C1184.14 838.144 1184.01 836.248 1185.1 835.001L1194.74 823.965C1195.83 822.717 1197.73 822.589 1198.98 823.679L1218.6 840.818C1219.85 841.908 1219.97 843.803 1218.88 845.051L1209.24 856.086C1208.15 857.334 1206.26 857.462 1205.01 856.372L1185.39 839.234Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 112" filter="url(#filter46_d_35_312)">
<path d="M1209.91 860.618C1208.66 859.528 1208.53 857.633 1209.62 856.385L1219.26 845.35C1220.35 844.102 1222.25 843.974 1223.5 845.064L1243.35 862.406C1244.6 863.496 1244.73 865.391 1243.64 866.639L1234 877.674C1232.91 878.922 1231.01 879.05 1229.76 877.96L1209.91 860.618Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 116" filter="url(#filter47_d_35_312)">
<path d="M1126.12 784.956C1125.64 784.526 1125.31 783.952 1125.18 783.319L1120.98 762.73C1120.65 761.108 1121.7 759.524 1123.32 759.191L1137.05 756.375C1138.63 756.051 1140.19 757.036 1140.57 758.605L1144.16 773.38C1144.31 773.975 1144.63 774.511 1145.09 774.917L1159.7 787.857C1160.91 788.935 1161.05 790.786 1160.01 792.031L1150.87 802.922C1149.78 804.22 1147.84 804.36 1146.57 803.231L1126.12 784.956Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 117" filter="url(#filter48_d_35_312)">
<path d="M1131.68 713.947C1130.43 712.857 1130.3 710.962 1131.39 709.714L1141.39 698.26C1142.48 697.012 1144.38 696.884 1145.63 697.974L1165.16 715.03C1166.4 716.12 1166.53 718.016 1165.44 719.263L1155.44 730.718C1154.35 731.966 1152.45 732.094 1151.2 731.004L1131.68 713.947Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 118" filter="url(#filter49_d_35_312)">
<path d="M1114.18 732.222C1113.99 731.32 1114.23 730.382 1114.82 729.676L1127.19 714.923C1128.27 713.636 1130.2 713.486 1131.47 714.591L1142.73 724.43C1143.98 725.518 1144.11 727.409 1143.02 728.658L1137.33 735.203C1136.73 735.892 1136.48 736.817 1136.64 737.715L1139.35 752.388C1139.64 754 1138.59 755.551 1136.99 755.873L1122.8 758.711C1121.18 759.034 1119.61 757.997 1119.27 756.387L1114.18 732.222Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 123" filter="url(#filter50_d_35_312)">
<path d="M1156.67 733.035C1155.42 731.945 1155.29 730.05 1156.38 728.802L1166.39 717.347C1167.48 716.1 1169.37 715.972 1170.62 717.061L1196.47 739.638C1197.72 740.728 1197.84 742.623 1196.75 743.871L1186.75 755.325C1185.66 756.573 1183.77 756.701 1182.52 755.611L1156.67 733.035Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 124" filter="url(#filter51_d_35_312)">
<path d="M1215.14 771.582C1213.89 770.492 1213.77 768.597 1214.86 767.349L1223.41 757.553C1224.5 756.305 1226.4 756.177 1227.65 757.267L1247.87 774.931C1249.12 776.021 1249.24 777.916 1248.15 779.164L1239.6 788.96C1238.51 790.208 1236.61 790.336 1235.37 789.246L1215.14 771.582Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 125" filter="url(#filter52_d_35_312)">
<path d="M1240.47 793.698C1239.22 792.608 1239.09 790.713 1240.18 789.465L1248.61 779.811C1249.7 778.563 1251.6 778.435 1252.85 779.525L1271.73 796.017C1272.97 797.107 1273.1 799.002 1272.01 800.25L1263.58 809.904C1262.49 811.152 1260.6 811.28 1259.35 810.19L1240.47 793.698Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 126" filter="url(#filter53_d_35_312)">
<path d="M1256.03 824.026C1254.78 822.936 1254.66 821.041 1255.75 819.793L1272.57 800.527C1273.66 799.28 1275.56 799.152 1276.81 800.241L1287.49 809.575C1288.74 810.665 1288.87 812.56 1287.78 813.808L1270.95 833.073C1269.86 834.321 1267.97 834.449 1266.72 833.359L1256.03 824.026Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 132" filter="url(#filter54_d_35_312)">
<path d="M1169.65 823.625C1168.41 822.535 1168.28 820.64 1169.37 819.392L1187.48 798.662C1188.57 797.414 1190.46 797.286 1191.71 798.376L1202.62 807.903C1203.86 808.993 1203.99 810.888 1202.9 812.136L1184.79 832.866C1183.7 834.114 1181.81 834.242 1180.56 833.152L1169.65 823.625Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 133" filter="url(#filter55_d_35_312)">
<path d="M1185.39 837.234C1184.14 836.144 1184.01 834.248 1185.1 833.001L1194.74 821.965C1195.83 820.717 1197.73 820.589 1198.98 821.679L1218.6 838.818C1219.85 839.908 1219.97 841.803 1218.88 843.051L1209.24 854.086C1208.15 855.334 1206.26 855.462 1205.01 854.372L1185.39 837.234Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 134" filter="url(#filter56_d_35_312)">
<path d="M1209.91 858.618C1208.66 857.528 1208.53 855.633 1209.62 854.385L1219.26 843.35C1220.35 842.102 1222.25 841.974 1223.5 843.064L1243.35 860.406C1244.6 861.496 1244.73 863.391 1243.64 864.639L1234 875.674C1232.91 876.922 1231.01 877.05 1229.76 875.96L1209.91 858.618Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 139" filter="url(#filter57_d_35_312)">
<path d="M1131.68 711.947C1130.43 710.857 1130.3 708.962 1131.39 707.714L1141.39 696.26C1142.48 695.012 1144.38 694.884 1145.63 695.974L1165.16 713.03C1166.4 714.12 1166.53 716.016 1165.44 717.263L1155.44 728.718C1154.35 729.966 1152.45 730.094 1151.2 729.004L1131.68 711.947Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 140" filter="url(#filter58_d_35_312)">
<path d="M1114.18 730.222C1113.99 729.32 1114.23 728.382 1114.82 727.676L1127.19 712.923C1128.27 711.636 1130.2 711.486 1131.47 712.591L1142.73 722.43C1143.98 723.518 1144.11 725.409 1143.02 726.658L1137.33 733.203C1136.73 733.892 1136.48 734.817 1136.64 735.715L1139.35 750.388C1139.64 752 1138.59 753.551 1136.99 753.873L1122.8 756.711C1121.18 757.034 1119.61 755.997 1119.27 754.387L1114.18 730.222Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 148" filter="url(#filter59_d_35_312)">
<path d="M1156.67 731.035C1155.42 729.945 1155.29 728.05 1156.38 726.802L1166.39 715.347C1167.48 714.1 1169.37 713.972 1170.62 715.061L1196.47 737.638C1197.72 738.728 1197.84 740.623 1196.75 741.871L1186.75 753.325C1185.66 754.573 1183.77 754.701 1182.52 753.611L1156.67 731.035Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 149" filter="url(#filter60_d_35_312)">
<path d="M1215.14 769.582C1213.89 768.492 1213.77 766.597 1214.86 765.349L1223.41 755.553C1224.5 754.305 1226.4 754.177 1227.65 755.267L1247.87 772.931C1249.12 774.021 1249.24 775.916 1248.15 777.164L1239.6 786.96C1238.51 788.208 1236.61 788.336 1235.37 787.246L1215.14 769.582Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 150" filter="url(#filter61_d_35_312)">
<path d="M1240.47 791.698C1239.22 790.608 1239.09 788.713 1240.18 787.465L1248.61 777.811C1249.7 776.563 1251.6 776.435 1252.85 777.525L1271.73 794.017C1272.97 795.107 1273.1 797.002 1272.01 798.25L1263.58 807.904C1262.49 809.152 1260.6 809.28 1259.35 808.19L1240.47 791.698Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 151" filter="url(#filter62_d_35_312)">
<path d="M1256.03 822.026C1254.78 820.936 1254.66 819.041 1255.75 817.793L1272.57 798.527C1273.66 797.28 1275.56 797.152 1276.81 798.241L1287.49 807.575C1288.74 808.665 1288.87 810.56 1287.78 811.808L1270.95 831.073C1269.86 832.321 1267.97 832.449 1266.72 831.359L1256.03 822.026Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 164" filter="url(#filter63_d_35_312)">
<path d="M1131.68 709.947C1130.43 708.857 1130.3 706.962 1131.39 705.714L1141.39 694.26C1142.48 693.012 1144.38 692.884 1145.63 693.974L1165.16 711.03C1166.4 712.12 1166.53 714.016 1165.44 715.263L1155.44 726.718C1154.35 727.966 1152.45 728.094 1151.2 727.004L1131.68 709.947Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 173" filter="url(#filter64_d_35_312)">
<path d="M1156.67 729.035C1155.42 727.945 1155.29 726.05 1156.38 724.802L1166.39 713.347C1167.48 712.1 1169.37 711.972 1170.62 713.061L1196.47 735.638C1197.72 736.728 1197.84 738.623 1196.75 739.871L1186.75 751.325C1185.66 752.573 1183.77 752.701 1182.52 751.611L1156.67 729.035Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 174" filter="url(#filter65_d_35_312)">
<path d="M1215.14 767.582C1213.89 766.492 1213.77 764.597 1214.86 763.349L1223.41 753.553C1224.5 752.305 1226.4 752.177 1227.65 753.267L1247.87 770.931C1249.12 772.021 1249.24 773.916 1248.15 775.164L1239.6 784.96C1238.51 786.208 1236.61 786.336 1235.37 785.246L1215.14 767.582Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 175" filter="url(#filter66_d_35_312)">
<path d="M1240.47 789.698C1239.22 788.608 1239.09 786.713 1240.18 785.465L1248.61 775.811C1249.7 774.563 1251.6 774.435 1252.85 775.525L1271.73 792.017C1272.97 793.107 1273.1 795.002 1272.01 796.25L1263.58 805.904C1262.49 807.152 1260.6 807.28 1259.35 806.19L1240.47 789.698Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 176" filter="url(#filter67_d_35_312)">
<path d="M1256.03 820.026C1254.78 818.936 1254.66 817.041 1255.75 815.793L1272.57 796.527C1273.66 795.28 1275.56 795.152 1276.81 796.241L1287.49 805.575C1288.74 806.665 1288.87 808.56 1287.78 809.808L1270.95 829.073C1269.86 830.321 1267.97 830.449 1266.72 829.359L1256.03 820.026Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 189" filter="url(#filter68_d_35_312)">
<path d="M1131.68 707.947C1130.43 706.857 1130.3 704.962 1131.39 703.714L1141.39 692.26C1142.48 691.012 1144.38 690.884 1145.63 691.974L1165.16 709.03C1166.4 710.12 1166.53 712.016 1165.44 713.263L1155.44 724.718C1154.35 725.966 1152.45 726.094 1151.2 725.004L1131.68 707.947Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 198" filter="url(#filter69_d_35_312)">
<path d="M1156.67 727.035C1155.42 725.945 1155.29 724.05 1156.38 722.802L1166.39 711.347C1167.48 710.1 1169.37 709.972 1170.62 711.061L1196.47 733.638C1197.72 734.728 1197.84 736.623 1196.75 737.871L1186.75 749.325C1185.66 750.573 1183.77 750.701 1182.52 749.611L1156.67 727.035Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 199" filter="url(#filter70_d_35_312)">
<path d="M1215.14 765.582C1213.89 764.492 1213.77 762.597 1214.86 761.349L1223.41 751.553C1224.5 750.305 1226.4 750.177 1227.65 751.267L1247.87 768.931C1249.12 770.021 1249.24 771.916 1248.15 773.164L1239.6 782.96C1238.51 784.208 1236.61 784.336 1235.37 783.246L1215.14 765.582Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 200" filter="url(#filter71_d_35_312)">
<path d="M1240.47 787.698C1239.22 786.608 1239.09 784.713 1240.18 783.465L1248.61 773.811C1249.7 772.563 1251.6 772.435 1252.85 773.525L1271.73 790.017C1272.97 791.107 1273.1 793.002 1272.01 794.25L1263.58 803.904C1262.49 805.152 1260.6 805.28 1259.35 804.19L1240.47 787.698Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 201" filter="url(#filter72_d_35_312)">
<path d="M1256.03 818.026C1254.78 816.936 1254.66 815.041 1255.75 813.793L1272.57 794.527C1273.66 793.28 1275.56 793.152 1276.81 794.241L1287.49 803.575C1288.74 804.665 1288.87 806.56 1287.78 807.808L1270.95 827.073C1269.86 828.321 1267.97 828.449 1266.72 827.359L1256.03 818.026Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 214" filter="url(#filter73_d_35_312)">
<path d="M1131.68 705.947C1130.43 704.857 1130.3 702.962 1131.39 701.714L1141.39 690.26C1142.48 689.012 1144.38 688.884 1145.63 689.974L1165.16 707.03C1166.4 708.12 1166.53 710.016 1165.44 711.263L1155.44 722.718C1154.35 723.966 1152.45 724.094 1151.2 723.004L1131.68 705.947Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 223" filter="url(#filter74_d_35_312)">
<path d="M1156.67 725.035C1155.42 723.945 1155.29 722.05 1156.38 720.802L1166.39 709.347C1167.48 708.1 1169.37 707.972 1170.62 709.061L1196.47 731.638C1197.72 732.728 1197.84 734.623 1196.75 735.871L1186.75 747.325C1185.66 748.573 1183.77 748.701 1182.52 747.611L1156.67 725.035Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 224" filter="url(#filter75_d_35_312)">
<path d="M1215.14 763.582C1213.89 762.492 1213.77 760.597 1214.86 759.349L1223.41 749.553C1224.5 748.305 1226.4 748.177 1227.65 749.267L1247.87 766.931C1249.12 768.021 1249.24 769.916 1248.15 771.164L1239.6 780.96C1238.51 782.208 1236.61 782.336 1235.37 781.246L1215.14 763.582Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 225" filter="url(#filter76_d_35_312)">
<path d="M1240.47 785.698C1239.22 784.608 1239.09 782.713 1240.18 781.465L1248.61 771.811C1249.7 770.563 1251.6 770.435 1252.85 771.525L1271.73 788.017C1272.97 789.107 1273.1 791.002 1272.01 792.25L1263.58 801.904C1262.49 803.152 1260.6 803.28 1259.35 802.19L1240.47 785.698Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 226" filter="url(#filter77_d_35_312)">
<path d="M1256.03 816.026C1254.78 814.936 1254.66 813.041 1255.75 811.793L1272.57 792.527C1273.66 791.28 1275.56 791.152 1276.81 792.241L1287.49 801.575C1288.74 802.665 1288.87 804.56 1287.78 805.808L1270.95 825.073C1269.86 826.321 1267.97 826.449 1266.72 825.359L1256.03 816.026Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 239" filter="url(#filter78_d_35_312)">
<path d="M1131.68 703.947C1130.43 702.857 1130.3 700.962 1131.39 699.714L1141.39 688.26C1142.48 687.012 1144.38 686.884 1145.63 687.974L1165.16 705.03C1166.4 706.12 1166.53 708.016 1165.44 709.263L1155.44 720.718C1154.35 721.966 1152.45 722.094 1151.2 721.004L1131.68 703.947Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 138" filter="url(#filter79_d_35_312)">
<path d="M1126.12 782.956C1125.64 782.526 1125.31 781.952 1125.18 781.319L1120.98 760.73C1120.65 759.108 1121.7 757.524 1123.32 757.191L1137.05 754.375C1138.63 754.051 1140.19 755.036 1140.57 756.605L1144.16 771.38C1144.31 771.975 1144.63 772.511 1145.09 772.917L1159.7 785.857C1160.91 786.935 1161.05 788.786 1160.01 790.031L1150.87 800.922C1149.78 802.22 1147.84 802.36 1146.57 801.231L1126.12 782.956Z" fill="#D9D9D9"/>
</g>
</g>
<g id="138.2">
<path id="Vector 196" d="M877.5 726.5L884.279 723.709C885.333 723.275 886.542 723.476 887.399 724.227L910.569 744.552C912.311 746.08 911.737 748.921 909.54 749.653L887.5 757L877.5 726.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 17" filter="url(#filter80_d_35_312)">
<path d="M896.954 745.621C897.438 747.2 896.555 748.873 894.978 749.364L885.788 752.227L881.974 739.94L891.187 737.079C892.774 736.586 894.458 737.476 894.945 739.065L896.954 745.621Z" fill="#1F2923"/>
</g>
<g id="Rectangle 67" filter="url(#filter81_d_35_312)">
<path d="M897.954 743.621C898.438 745.2 897.555 746.873 895.978 747.364L886.788 750.227L882.974 737.94L892.187 735.079C893.774 734.586 895.458 735.476 895.945 737.065L897.954 743.621Z" fill="#1F2923"/>
<path d="M897.954 743.621C898.438 745.2 897.555 746.873 895.978 747.364L886.788 750.227L882.974 737.94L892.187 735.079C893.774 734.586 895.458 735.476 895.945 737.065L897.954 743.621Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="138">
<path id="136" d="M887.5 757L877.5 726.5L871.745 728.966C870.954 729.306 870.346 729.969 870.077 730.787L860.317 760.474C859.556 762.789 861.728 764.998 864.056 764.276L887.5 757Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 18" filter="url(#filter82_d_35_312)">
<path d="M871.078 746.558C870.59 744.987 871.459 743.315 873.026 742.812L881.974 739.94L885.787 752.216L876.893 755.071C875.305 755.581 873.606 754.697 873.112 753.104L871.078 746.558Z" fill="#1F2923"/>
</g>
<g id="Rectangle 72" filter="url(#filter83_d_35_312)">
<path d="M872.078 744.558C871.59 742.987 872.459 741.315 874.026 740.812L882.974 737.94L886.787 750.216L877.893 753.071C876.305 753.581 874.606 752.697 874.112 751.104L872.078 744.558Z" fill="#1F2923"/>
<path d="M872.078 744.558C871.59 742.987 872.459 741.315 874.026 740.812L882.974 737.94L886.787 750.216L877.893 753.071C876.305 753.581 874.606 752.697 874.112 751.104L872.078 744.558Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="139.2">
<path id="Vector 192" d="M894.036 785.205L885.944 761.737C885.417 760.21 883.776 759.374 882.231 759.846L867 764.5L877 794.5L892.219 789.004C893.761 788.447 894.571 786.755 894.036 785.205Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 19" filter="url(#filter84_d_35_312)">
<path d="M885.954 781.621C886.438 783.2 885.555 784.873 883.978 785.364L874.788 788.227L870.974 775.94L880.187 773.079C881.774 772.586 883.458 773.476 883.945 775.065L885.954 781.621Z" fill="#1F2923"/>
</g>
<g id="Rectangle 68" filter="url(#filter85_d_35_312)">
<path d="M886.954 779.621C887.438 781.2 886.555 782.873 884.978 783.364L875.788 786.227L871.974 773.94L881.187 771.079C882.774 770.586 884.458 771.476 884.945 773.065L886.954 779.621Z" fill="#1F2923"/>
<path d="M886.954 779.621C887.438 781.2 886.555 782.873 884.978 783.364L875.788 786.227L871.974 773.94L881.187 771.079C882.774 770.586 884.458 771.476 884.945 773.065L886.954 779.621Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="139">
<path id="134_2" d="M867 764.5L877 794.5L855.597 801.894C853.895 802.482 852.062 801.448 851.684 799.688L850.183 792.689C850.063 792.132 850.105 791.552 850.303 791.018L858.648 768.49C858.962 767.641 859.644 766.979 860.503 766.689L867 764.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 20" filter="url(#filter86_d_35_312)">
<path d="M860.078 782.558C859.59 780.987 860.459 779.315 862.026 778.812L870.974 775.94L874.787 788.216L865.893 791.071C864.305 791.581 862.606 790.697 862.112 789.104L860.078 782.558Z" fill="#1F2923"/>
</g>
<g id="Rectangle 73" filter="url(#filter87_d_35_312)">
<path d="M861.078 780.558C860.59 778.987 861.459 777.315 863.026 776.812L871.974 773.94L875.787 786.216L866.893 789.071C865.305 789.581 863.606 788.697 863.112 787.104L861.078 780.558Z" fill="#1F2923"/>
<path d="M861.078 780.558C860.59 778.987 861.459 777.315 863.026 776.812L871.974 773.94L875.787 786.216L866.893 789.071C865.305 789.581 863.606 788.697 863.112 787.104L861.078 780.558Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="119">
<path id="Rectangle 33" d="M911.259 602.881C910.012 601.791 909.884 599.896 910.974 598.648L921.318 586.805C922.408 585.557 924.303 585.429 925.551 586.519L946.34 604.677C947.588 605.767 947.716 607.662 946.626 608.91L936.282 620.753C935.192 622.001 933.296 622.129 932.049 621.039L911.259 602.881Z" fill="#D9D9D9"/>
<path id="Rectangle 37" d="M946.912 562.033C945.664 560.943 945.536 559.047 946.626 557.8L964.068 537.83C965.158 536.582 967.053 536.454 968.301 537.544L979.342 547.187C980.59 548.277 980.718 550.173 979.628 551.42L962.186 571.39C961.096 572.638 959.2 572.766 957.953 571.676L946.912 562.033Z" fill="#D9D9D9"/>
<path id="Rectangle 38" d="M971.733 565.76C970.485 564.67 970.357 562.775 971.447 561.527L980.108 551.612C981.198 550.364 983.093 550.236 984.341 551.326L1003.54 568.092C1004.78 569.182 1004.91 571.077 1003.82 572.325L995.161 582.24C994.071 583.488 992.176 583.616 990.928 582.526L971.733 565.76Z" fill="#D9D9D9"/>
<path id="Rectangle 39" d="M995.986 586.721C994.738 585.631 994.61 583.736 995.7 582.488L1004.19 572.766C1005.28 571.518 1007.18 571.39 1008.42 572.48L1028.31 589.851C1029.56 590.941 1029.69 592.836 1028.6 594.084L1020.11 603.806C1019.02 605.054 1017.12 605.182 1015.87 604.092L995.986 586.721Z" fill="#D9D9D9"/>
<g id="Rectangle 77" filter="url(#filter88_d_35_312)">
<path d="M946.912 560.033C945.664 558.943 945.536 557.047 946.626 555.8L964.068 535.83C965.158 534.582 967.053 534.454 968.301 535.544L979.342 545.187C980.59 546.277 980.718 548.173 979.628 549.42L962.186 569.39C961.096 570.638 959.2 570.766 957.953 569.676L946.912 560.033Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 78" filter="url(#filter89_d_35_312)">
<path d="M971.733 563.76C970.485 562.67 970.357 560.775 971.447 559.527L980.108 549.612C981.198 548.364 983.093 548.236 984.341 549.326L1003.54 566.092C1004.78 567.182 1004.91 569.077 1003.82 570.325L995.161 580.24C994.071 581.488 992.176 581.616 990.928 580.526L971.733 563.76Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 79" filter="url(#filter90_d_35_312)">
<path d="M995.986 584.721C994.738 583.631 994.61 581.736 995.7 580.488L1004.19 570.766C1005.28 569.518 1007.18 569.39 1008.42 570.48L1028.31 587.851C1029.56 588.941 1029.69 590.836 1028.6 592.084L1020.11 601.806C1019.02 603.054 1017.12 603.182 1015.87 602.092L995.986 584.721Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 80" filter="url(#filter91_d_35_312)">
<path d="M946.912 558.033C945.664 556.943 945.536 555.047 946.626 553.8L964.068 533.83C965.158 532.582 967.053 532.454 968.301 533.544L979.342 543.187C980.59 544.277 980.718 546.173 979.628 547.42L962.186 567.39C961.096 568.638 959.2 568.766 957.953 567.676L946.912 558.033Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 81" filter="url(#filter92_d_35_312)">
<path d="M971.733 561.76C970.485 560.67 970.357 558.775 971.447 557.527L980.108 547.612C981.198 546.364 983.093 546.236 984.341 547.326L1003.54 564.092C1004.78 565.182 1004.91 567.077 1003.82 568.325L995.161 578.24C994.071 579.488 992.176 579.616 990.928 578.526L971.733 561.76Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 82" filter="url(#filter93_d_35_312)">
<path d="M995.986 582.721C994.738 581.631 994.61 579.736 995.7 578.488L1004.19 568.766C1005.28 567.518 1007.18 567.39 1008.42 568.48L1028.31 585.851C1029.56 586.941 1029.69 588.836 1028.6 590.084L1020.11 599.806C1019.02 601.054 1017.12 601.182 1015.87 600.092L995.986 582.721Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 83" filter="url(#filter94_d_35_312)">
<path d="M946.912 556.033C945.664 554.943 945.536 553.047 946.626 551.8L964.068 531.83C965.158 530.582 967.053 530.454 968.301 531.544L979.342 541.187C980.59 542.277 980.718 544.173 979.628 545.42L962.186 565.39C961.096 566.638 959.2 566.766 957.953 565.676L946.912 556.033Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 84" filter="url(#filter95_d_35_312)">
<path d="M971.733 559.76C970.485 558.67 970.357 556.775 971.447 555.527L980.108 545.612C981.198 544.364 983.093 544.236 984.341 545.326L1003.54 562.092C1004.78 563.182 1004.91 565.077 1003.82 566.325L995.161 576.24C994.071 577.488 992.176 577.616 990.928 576.526L971.733 559.76Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 85" filter="url(#filter96_d_35_312)">
<path d="M995.986 580.721C994.738 579.631 994.61 577.736 995.7 576.488L1004.19 566.766C1005.28 565.518 1007.18 565.39 1008.42 566.48L1028.31 583.851C1029.56 584.941 1029.69 586.836 1028.6 588.084L1020.11 597.806C1019.02 599.054 1017.12 599.182 1015.87 598.092L995.986 580.721Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 86" filter="url(#filter97_d_35_312)">
<path d="M946.912 554.033C945.664 552.943 945.536 551.047 946.626 549.8L964.068 529.83C965.158 528.582 967.053 528.454 968.301 529.544L979.342 539.187C980.59 540.277 980.718 542.173 979.628 543.42L962.186 563.39C961.096 564.638 959.2 564.766 957.953 563.676L946.912 554.033Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 87" filter="url(#filter98_d_35_312)">
<path d="M971.733 557.76C970.485 556.67 970.357 554.775 971.447 553.527L980.108 543.612C981.198 542.364 983.093 542.236 984.341 543.326L1003.54 560.092C1004.78 561.182 1004.91 563.077 1003.82 564.325L995.161 574.24C994.071 575.488 992.176 575.616 990.928 574.526L971.733 557.76Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 88" filter="url(#filter99_d_35_312)">
<path d="M995.986 578.721C994.738 577.631 994.61 575.736 995.7 574.488L1004.19 564.766C1005.28 563.518 1007.18 563.39 1008.42 564.48L1028.31 581.851C1029.56 582.941 1029.69 584.836 1028.6 586.084L1020.11 595.806C1019.02 597.054 1017.12 597.182 1015.87 596.092L995.986 578.721Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 89" filter="url(#filter100_d_35_312)">
<path d="M946.912 552.033C945.664 550.943 945.536 549.047 946.626 547.8L964.068 527.83C965.158 526.582 967.053 526.454 968.301 527.544L979.342 537.187C980.59 538.277 980.718 540.173 979.628 541.42L962.186 561.39C961.096 562.638 959.2 562.766 957.953 561.676L946.912 552.033Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 90" filter="url(#filter101_d_35_312)">
<path d="M971.733 555.76C970.485 554.67 970.357 552.775 971.447 551.527L980.108 541.612C981.198 540.364 983.093 540.236 984.341 541.326L1003.54 558.092C1004.78 559.182 1004.91 561.077 1003.82 562.325L995.161 572.24C994.071 573.488 992.176 573.616 990.928 572.526L971.733 555.76Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 91" filter="url(#filter102_d_35_312)">
<path d="M995.986 576.721C994.738 575.631 994.61 573.736 995.7 572.488L1004.19 562.766C1005.28 561.518 1007.18 561.39 1008.42 562.48L1028.31 579.851C1029.56 580.941 1029.69 582.836 1028.6 584.084L1020.11 593.806C1019.02 595.054 1017.12 595.182 1015.87 594.092L995.986 576.721Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 92" filter="url(#filter103_d_35_312)">
<path d="M946.912 550.033C945.664 548.943 945.536 547.047 946.626 545.8L964.068 525.83C965.158 524.582 967.053 524.454 968.301 525.544L979.342 535.187C980.59 536.277 980.718 538.173 979.628 539.42L962.186 559.39C961.096 560.638 959.2 560.766 957.953 559.676L946.912 550.033Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 93" filter="url(#filter104_d_35_312)">
<path d="M971.733 553.76C970.485 552.67 970.357 550.775 971.447 549.527L980.108 539.612C981.198 538.364 983.093 538.236 984.341 539.326L1003.54 556.092C1004.78 557.182 1004.91 559.077 1003.82 560.325L995.161 570.24C994.071 571.488 992.176 571.616 990.928 570.526L971.733 553.76Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 94" filter="url(#filter105_d_35_312)">
<path d="M995.986 574.721C994.738 573.631 994.61 571.736 995.7 570.488L1004.19 560.766C1005.28 559.518 1007.18 559.39 1008.42 560.48L1028.31 577.851C1029.56 578.941 1029.69 580.836 1028.6 582.084L1020.11 591.806C1019.02 593.054 1017.12 593.182 1015.87 592.092L995.986 574.721Z" fill="#D9D9D9"/>
</g>
<path id="Rectangle 42" d="M1083.93 673.467C1083.98 672.838 1084.22 672.239 1084.62 671.755L1094.54 659.855C1095.61 658.563 1097.54 658.409 1098.81 659.514L1109.72 669.014C1110.98 670.108 1111.1 672.016 1110 673.264L1099.05 685.644L1092.96 693.291C1092.36 694.05 1091.43 694.47 1090.46 694.419L1085.55 694.16C1083.87 694.072 1082.6 692.629 1082.71 690.956L1083.93 673.467Z" fill="#D9D9D9"/>
<path id="Rectangle 41" d="M1053.31 692.178C1051.73 692.078 1050.5 690.768 1050.5 689.185L1050.5 675.14C1050.5 673.429 1051.93 672.065 1053.64 672.143L1080.34 673.36C1082.02 673.437 1083.31 674.882 1083.19 676.562L1082.2 691.022C1082.09 692.669 1080.67 693.915 1079.02 693.811L1053.31 692.178Z" fill="#D9D9D9"/>
<path id="Rectangle 40" d="M1035.41 632.217C1034.16 631.127 1034.03 629.231 1035.12 627.983L1044.91 616.776C1046 615.528 1047.9 615.4 1049.14 616.49L1071.85 636.318L1081.23 644.516C1082.48 645.61 1082.61 647.514 1081.51 648.761L1076.9 653.985C1076.33 654.63 1075.51 655 1074.65 655L1062.63 655C1061.9 655 1061.2 654.737 1060.65 654.26L1035.41 632.217Z" fill="#D9D9D9"/>
<path id="Rectangle 34" d="M937.27 625.218C936.022 624.128 935.894 622.233 936.984 620.985L947.126 609.374C948.216 608.126 950.111 607.998 951.359 609.088L970.201 625.545C971.449 626.635 971.577 628.53 970.487 629.778L960.345 641.39C959.255 642.638 957.36 642.766 956.112 641.676L937.27 625.218Z" fill="#D9D9D9"/>
<path id="Rectangle 36" d="M961.098 645.963C959.85 644.873 959.722 642.978 960.812 641.73L979.475 620.364C980.565 619.116 982.46 618.988 983.708 620.078L994.429 629.443C995.677 630.533 995.805 632.428 994.715 633.676L976.053 655.042C974.963 656.29 973.068 656.418 971.82 655.328L961.098 645.963Z" fill="#D9D9D9"/>
<path id="Rectangle 35" d="M993.247 673.466C992.004 672.379 991.874 670.491 992.956 669.244L1001.96 658.852C1003.07 657.567 1005.03 657.464 1006.28 658.624L1018.18 669.731C1018.71 670.227 1019.4 670.513 1020.13 670.536L1047.1 671.406C1048.72 671.458 1050 672.786 1050 674.405L1050 688.299C1050 690.032 1048.54 691.405 1046.81 691.293L1012.47 689.063C1011.84 689.022 1011.24 688.785 1010.75 688.385L1003 682L993.247 673.466Z" fill="#D9D9D9"/>
<g id="Rectangle 119" filter="url(#filter106_d_35_312)">
<path d="M1083.93 671.467C1083.98 670.838 1084.22 670.239 1084.62 669.755L1094.54 657.855C1095.61 656.563 1097.54 656.409 1098.81 657.514L1109.72 667.014C1110.98 668.108 1111.1 670.016 1110 671.264L1099.05 683.644L1092.96 691.291C1092.36 692.05 1091.43 692.47 1090.46 692.419L1085.55 692.16C1083.87 692.072 1082.6 690.629 1082.71 688.956L1083.93 671.467Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 120" filter="url(#filter107_d_35_312)">
<path d="M1053.31 690.178C1051.73 690.078 1050.5 688.768 1050.5 687.185L1050.5 673.14C1050.5 671.429 1051.93 670.065 1053.64 670.143L1080.34 671.36C1082.02 671.437 1083.31 672.882 1083.19 674.562L1082.2 689.022C1082.09 690.669 1080.67 691.915 1079.02 691.811L1053.31 690.178Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 121" filter="url(#filter108_d_35_312)">
<path d="M1035.41 630.217C1034.16 629.127 1034.03 627.231 1035.12 625.983L1044.91 614.776C1046 613.528 1047.9 613.4 1049.14 614.49L1071.85 634.318L1081.23 642.516C1082.48 643.61 1082.61 645.514 1081.51 646.761L1076.9 651.985C1076.33 652.63 1075.51 653 1074.65 653L1062.63 653C1061.9 653 1061.2 652.737 1060.65 652.26L1035.41 630.217Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 122" filter="url(#filter109_d_35_312)">
<path d="M993.247 671.466C992.004 670.379 991.874 668.491 992.956 667.244L1001.96 656.852C1003.07 655.567 1005.03 655.464 1006.28 656.624L1018.18 667.731C1018.71 668.227 1019.4 668.513 1020.13 668.536L1047.1 669.406C1048.72 669.458 1050 670.786 1050 672.405L1050 686.299C1050 688.032 1048.54 689.405 1046.81 689.293L1012.47 687.063C1011.84 687.022 1011.24 686.785 1010.75 686.385L1003 680L993.247 671.466Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 96" filter="url(#filter110_d_35_312)">
<path d="M911.259 600.881C910.012 599.791 909.884 597.896 910.974 596.648L921.318 584.805C922.408 583.557 924.303 583.429 925.551 584.519L946.34 602.677C947.588 603.767 947.716 605.662 946.626 606.91L936.282 618.753C935.192 620.001 933.296 620.129 932.049 619.039L911.259 600.881Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 97" filter="url(#filter111_d_35_312)">
<path d="M937.27 623.218C936.022 622.128 935.894 620.233 936.984 618.985L947.126 607.374C948.216 606.126 950.111 605.998 951.359 607.088L970.201 623.545C971.449 624.635 971.577 626.53 970.487 627.778L960.345 639.39C959.255 640.638 957.36 640.766 956.112 639.676L937.27 623.218Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 98" filter="url(#filter112_d_35_312)">
<path d="M961.098 643.963C959.85 642.873 959.722 640.978 960.812 639.73L979.475 618.364C980.565 617.116 982.46 616.988 983.708 618.078L994.429 627.443C995.677 628.533 995.805 630.428 994.715 631.676L976.053 653.042C974.963 654.29 973.068 654.418 971.82 653.328L961.098 643.963Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 141" filter="url(#filter113_d_35_312)">
<path d="M1083.93 669.467C1083.98 668.838 1084.22 668.239 1084.62 667.755L1094.54 655.855C1095.61 654.563 1097.54 654.409 1098.81 655.514L1109.72 665.014C1110.98 666.108 1111.1 668.016 1110 669.264L1099.05 681.644L1092.96 689.291C1092.36 690.05 1091.43 690.47 1090.46 690.419L1085.55 690.16C1083.87 690.072 1082.6 688.629 1082.71 686.956L1083.93 669.467Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 142" filter="url(#filter114_d_35_312)">
<path d="M1053.31 688.178C1051.73 688.078 1050.5 686.768 1050.5 685.185L1050.5 671.14C1050.5 669.429 1051.93 668.065 1053.64 668.143L1080.34 669.36C1082.02 669.437 1083.31 670.882 1083.19 672.562L1082.2 687.022C1082.09 688.669 1080.67 689.915 1079.02 689.811L1053.31 688.178Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 143" filter="url(#filter115_d_35_312)">
<path d="M1035.41 628.217C1034.16 627.127 1034.03 625.231 1035.12 623.983L1044.91 612.776C1046 611.528 1047.9 611.4 1049.14 612.49L1071.85 632.318L1081.23 640.516C1082.48 641.61 1082.61 643.514 1081.51 644.761L1076.9 649.985C1076.33 650.63 1075.51 651 1074.65 651L1062.63 651C1061.9 651 1061.2 650.737 1060.65 650.26L1035.41 628.217Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 144" filter="url(#filter116_d_35_312)">
<path d="M993.247 669.466C992.004 668.379 991.874 666.491 992.956 665.244L1001.96 654.852C1003.07 653.567 1005.03 653.464 1006.28 654.624L1018.18 665.731C1018.71 666.227 1019.4 666.513 1020.13 666.536L1047.1 667.406C1048.72 667.458 1050 668.786 1050 670.405L1050 684.299C1050 686.032 1048.54 687.405 1046.81 687.293L1012.47 685.063C1011.84 685.022 1011.24 684.785 1010.75 684.385L1003 678L993.247 669.466Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 145" filter="url(#filter117_d_35_312)">
<path d="M911.259 598.881C910.012 597.791 909.884 595.896 910.974 594.648L921.318 582.805C922.408 581.557 924.303 581.429 925.551 582.519L946.34 600.677C947.588 601.767 947.716 603.662 946.626 604.91L936.282 616.753C935.192 618.001 933.296 618.129 932.049 617.039L911.259 598.881Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 146" filter="url(#filter118_d_35_312)">
<path d="M937.27 621.218C936.022 620.128 935.894 618.233 936.984 616.985L947.126 605.374C948.216 604.126 950.111 603.998 951.359 605.088L970.201 621.545C971.449 622.635 971.577 624.53 970.487 625.778L960.345 637.39C959.255 638.638 957.36 638.766 956.112 637.676L937.27 621.218Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 147" filter="url(#filter119_d_35_312)">
<path d="M961.098 641.963C959.85 640.873 959.722 638.978 960.812 637.73L979.475 616.364C980.565 615.116 982.46 614.988 983.708 616.078L994.429 625.443C995.677 626.533 995.805 628.428 994.715 629.676L976.053 651.042C974.963 652.29 973.068 652.418 971.82 651.328L961.098 641.963Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 166" filter="url(#filter120_d_35_312)">
<path d="M1083.93 667.467C1083.98 666.838 1084.22 666.239 1084.62 665.755L1094.54 653.855C1095.61 652.563 1097.54 652.409 1098.81 653.514L1109.72 663.014C1110.98 664.108 1111.1 666.016 1110 667.264L1099.05 679.644L1092.96 687.291C1092.36 688.05 1091.43 688.47 1090.46 688.419L1085.55 688.16C1083.87 688.072 1082.6 686.629 1082.71 684.956L1083.93 667.467Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 167" filter="url(#filter121_d_35_312)">
<path d="M1053.31 686.178C1051.73 686.078 1050.5 684.768 1050.5 683.185L1050.5 669.14C1050.5 667.429 1051.93 666.065 1053.64 666.143L1080.34 667.36C1082.02 667.437 1083.31 668.882 1083.19 670.562L1082.2 685.022C1082.09 686.669 1080.67 687.915 1079.02 687.811L1053.31 686.178Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 168" filter="url(#filter122_d_35_312)">
<path d="M1035.41 626.217C1034.16 625.127 1034.03 623.231 1035.12 621.983L1044.91 610.776C1046 609.528 1047.9 609.4 1049.14 610.49L1071.85 630.318L1081.23 638.516C1082.48 639.61 1082.61 641.514 1081.51 642.761L1076.9 647.985C1076.33 648.63 1075.51 649 1074.65 649L1062.63 649C1061.9 649 1061.2 648.737 1060.65 648.26L1035.41 626.217Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 169" filter="url(#filter123_d_35_312)">
<path d="M993.247 667.466C992.004 666.379 991.874 664.491 992.956 663.244L1001.96 652.852C1003.07 651.567 1005.03 651.464 1006.28 652.624L1018.18 663.731C1018.71 664.227 1019.4 664.513 1020.13 664.536L1047.1 665.406C1048.72 665.458 1050 666.786 1050 668.405L1050 682.299C1050 684.032 1048.54 685.405 1046.81 685.293L1012.47 683.063C1011.84 683.022 1011.24 682.785 1010.75 682.385L1003 676L993.247 667.466Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 170" filter="url(#filter124_d_35_312)">
<path d="M911.259 596.881C910.012 595.791 909.884 593.896 910.974 592.648L921.318 580.805C922.408 579.557 924.303 579.429 925.551 580.519L946.34 598.677C947.588 599.767 947.716 601.662 946.626 602.91L936.282 614.753C935.192 616.001 933.296 616.129 932.049 615.039L911.259 596.881Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 171" filter="url(#filter125_d_35_312)">
<path d="M937.27 619.218C936.022 618.128 935.894 616.233 936.984 614.985L947.126 603.374C948.216 602.126 950.111 601.998 951.359 603.088L970.201 619.545C971.449 620.635 971.577 622.53 970.487 623.778L960.345 635.39C959.255 636.638 957.36 636.766 956.112 635.676L937.27 619.218Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 172" filter="url(#filter126_d_35_312)">
<path d="M961.098 639.963C959.85 638.873 959.722 636.978 960.812 635.73L979.475 614.364C980.565 613.116 982.46 612.988 983.708 614.078L994.429 623.443C995.677 624.533 995.805 626.428 994.715 627.676L976.053 649.042C974.963 650.29 973.068 650.418 971.82 649.328L961.098 639.963Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 191" filter="url(#filter127_d_35_312)">
<path d="M1083.93 665.467C1083.98 664.838 1084.22 664.239 1084.62 663.755L1094.54 651.855C1095.61 650.563 1097.54 650.409 1098.81 651.514L1109.72 661.014C1110.98 662.108 1111.1 664.016 1110 665.264L1099.05 677.644L1092.96 685.291C1092.36 686.05 1091.43 686.47 1090.46 686.419L1085.55 686.16C1083.87 686.072 1082.6 684.629 1082.71 682.956L1083.93 665.467Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 192" filter="url(#filter128_d_35_312)">
<path d="M1053.31 684.178C1051.73 684.078 1050.5 682.768 1050.5 681.185L1050.5 667.14C1050.5 665.429 1051.93 664.065 1053.64 664.143L1080.34 665.36C1082.02 665.437 1083.31 666.882 1083.19 668.562L1082.2 683.022C1082.09 684.669 1080.67 685.915 1079.02 685.811L1053.31 684.178Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 193" filter="url(#filter129_d_35_312)">
<path d="M1035.41 624.217C1034.16 623.127 1034.03 621.231 1035.12 619.983L1044.91 608.776C1046 607.528 1047.9 607.4 1049.14 608.49L1071.85 628.318L1081.23 636.516C1082.48 637.61 1082.61 639.514 1081.51 640.761L1076.9 645.985C1076.33 646.63 1075.51 647 1074.65 647L1062.63 647C1061.9 647 1061.2 646.737 1060.65 646.26L1035.41 624.217Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 194" filter="url(#filter130_d_35_312)">
<path d="M993.247 665.466C992.004 664.379 991.874 662.491 992.956 661.244L1001.96 650.852C1003.07 649.567 1005.03 649.464 1006.28 650.624L1018.18 661.731C1018.71 662.227 1019.4 662.513 1020.13 662.536L1047.1 663.406C1048.72 663.458 1050 664.786 1050 666.405L1050 680.299C1050 682.032 1048.54 683.405 1046.81 683.293L1012.47 681.063C1011.84 681.022 1011.24 680.785 1010.75 680.385L1003 674L993.247 665.466Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 216" filter="url(#filter131_d_35_312)">
<path d="M1083.93 663.467C1083.98 662.838 1084.22 662.239 1084.62 661.755L1094.54 649.855C1095.61 648.563 1097.54 648.409 1098.81 649.514L1109.72 659.014C1110.98 660.108 1111.1 662.016 1110 663.264L1099.05 675.644L1092.96 683.291C1092.36 684.05 1091.43 684.47 1090.46 684.419L1085.55 684.16C1083.87 684.072 1082.6 682.629 1082.71 680.956L1083.93 663.467Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 218" filter="url(#filter132_d_35_312)">
<path d="M1035.41 622.217C1034.16 621.127 1034.03 619.231 1035.12 617.983L1044.91 606.776C1046 605.528 1047.9 605.4 1049.14 606.49L1071.85 626.318L1081.23 634.516C1082.48 635.61 1082.61 637.514 1081.51 638.761L1076.9 643.985C1076.33 644.63 1075.51 645 1074.65 645L1062.63 645C1061.9 645 1061.2 644.737 1060.65 644.26L1035.41 622.217Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 241" filter="url(#filter133_d_35_312)">
<path d="M1083.93 661.467C1083.98 660.838 1084.22 660.239 1084.62 659.755L1094.54 647.855C1095.61 646.563 1097.54 646.409 1098.81 647.514L1109.72 657.014C1110.98 658.108 1111.1 660.016 1110 661.264L1099.05 673.644L1092.96 681.291C1092.36 682.05 1091.43 682.47 1090.46 682.419L1085.55 682.16C1083.87 682.072 1082.6 680.629 1082.71 678.956L1083.93 661.467Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 243" filter="url(#filter134_d_35_312)">
<path d="M1035.41 620.217C1034.16 619.127 1034.03 617.231 1035.12 615.983L1044.91 604.776C1046 603.528 1047.9 603.4 1049.14 604.49L1071.85 624.318L1081.23 632.516C1082.48 633.61 1082.61 635.514 1081.51 636.761L1076.9 641.985C1076.33 642.63 1075.51 643 1074.65 643L1062.63 643C1061.9 643 1061.2 642.737 1060.65 642.26L1035.41 620.217Z" fill="#D9D9D9"/>
</g>
</g>
<g id="142.4">
<path id="318" d="M958.23 697.46L972.5 710L955.5 730L938.5 715L954.017 697.71C955.116 696.486 956.995 696.374 958.23 697.46Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 548" filter="url(#filter135_d_35_312)">
<path d="M951.495 714.13L945.5 720.5L955.5 729.5L963 720.5L955.68 713.951C954.467 712.865 952.61 712.945 951.495 714.13Z" fill="#1F2923"/>
<path d="M951.495 714.13L945.5 720.5L955.5 729.5L963 720.5L955.68 713.951C954.467 712.865 952.61 712.945 951.495 714.13Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="142.3">
<path id="324" d="M938.5 750L923.668 736.477C922.463 735.378 922.356 733.518 923.428 732.289L938.5 715L955.5 730.001L938.5 750Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 545" filter="url(#filter136_d_35_312)">
<path d="M945 723L938.981 729.772C937.885 731.005 937.99 732.891 939.216 733.995L947 741L955 732L945 723Z" fill="#1F2923"/>
</g>
<g id="Vector 549" filter="url(#filter137_d_35_312)">
<path d="M945.5 720.5L939.481 727.272C938.385 728.505 938.49 730.391 939.716 731.495L947.5 738.5L955.5 729.5L945.5 720.5Z" fill="#1F2923"/>
<path d="M945.5 720.5L939.481 727.272C938.385 728.505 938.49 730.391 939.716 731.495L947.5 738.5L955.5 729.5L945.5 720.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="142.2">
<path id="323" d="M972.5 710L989.293 725.025C990.516 726.12 990.633 727.995 989.554 729.232L974.5 746.5L955.5 730L972.5 710Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 546" filter="url(#filter138_d_35_312)">
<path d="M962.5 723L956 730.5L965.5 739L970.066 733.732C971.139 732.493 971.02 730.623 969.799 729.531L962.5 723Z" fill="#1F2923"/>
</g>
<g id="Vector 550" filter="url(#filter139_d_35_312)">
<path d="M963 720.5L955.5 729.5L965 738L970.646 731.225C971.68 729.984 971.546 728.146 970.342 727.069L963 720.5Z" fill="#1F2923"/>
<path d="M963 720.5L955.5 729.5L965 738L970.646 731.225C971.68 729.984 971.546 728.146 970.342 727.069L963 720.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="142">
<path id="325" d="M955.5 730L974.5 746.5L958.994 764.221C957.896 765.476 955.985 765.594 954.74 764.484L938.5 750L955.5 730Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 547" filter="url(#filter140_d_35_312)">
<path d="M955.5 730.5L946.5 740.5L954.216 747.444C955.468 748.571 957.403 748.446 958.5 747.166L965.5 739L955.5 730.5Z" fill="#1F2923"/>
</g>
<g id="Vector 551" filter="url(#filter141_d_35_312)">
<path d="M955.5 729.5L947.5 738.5L954.757 744.993C955.995 746.1 957.896 745.992 959 744.75L965 738L955.5 729.5Z" fill="#1F2923"/>
<path d="M955.5 729.5L947.5 738.5L954.757 744.993C955.995 746.1 957.896 745.992 959 744.75L965 738L955.5 729.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="141,4">
<path id="326" d="M923.259 667.436L938.5 680.5L921.5 700L904 685L919.045 667.742C920.127 666.501 922.008 666.364 923.259 667.436Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 541" filter="url(#filter142_d_35_312)">
<path d="M917.495 683.63L911.5 690L921.5 699L929 690L921.68 683.451C920.467 682.365 918.61 682.445 917.495 683.63Z" fill="#1F2923"/>
<path d="M917.495 683.63L911.5 690L921.5 699L929 690L921.68 683.451C920.467 682.365 918.61 682.445 917.495 683.63Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="141.3">
<path id="329" d="M904 719.5L889.603 705.975C888.428 704.872 888.335 703.038 889.392 701.822L904 685L921.5 700L904 719.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 538" filter="url(#filter143_d_35_312)">
<path d="M911 692.5L904.981 699.272C903.885 700.505 903.99 702.391 905.216 703.495L913 710.5L921 701.5L911 692.5Z" fill="#1F2923"/>
</g>
<g id="Vector 542" filter="url(#filter144_d_35_312)">
<path d="M911.5 690L905.481 696.772C904.385 698.005 904.49 699.891 905.716 700.995L913.5 708L921.5 699L911.5 690Z" fill="#1F2923"/>
<path d="M911.5 690L905.481 696.772C904.385 698.005 904.49 699.891 905.716 700.995L913.5 708L921.5 699L911.5 690Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="141.2">
<path id="327" d="M938.5 680.5L952.755 693.027C953.996 694.118 954.122 696.007 953.036 697.252L938 714.5L921.5 700L938.5 680.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 539" filter="url(#filter145_d_35_312)">
<path d="M928.5 692.5L921 701.5L930.5 710L936.146 703.225C937.18 701.984 937.046 700.146 935.842 699.069L928.5 692.5Z" fill="#1F2923"/>
</g>
<g id="Vector 543" filter="url(#filter146_d_35_312)">
<path d="M929 690L921.5 699L931 707.5L936.646 700.725C937.68 699.484 937.546 697.646 936.342 696.569L929 690Z" fill="#1F2923"/>
<path d="M929 690L921.5 699L931 707.5L936.646 700.725C937.68 699.484 937.546 697.646 936.342 696.569L929 690Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="141">
<path id="328" d="M921.5 700L938 714.5L922.979 732.172C921.892 733.45 919.967 733.589 918.709 732.478L904 719.5L921.5 700Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 540" filter="url(#filter147_d_35_312)">
<path d="M921.5 699.5L912.5 710L920.276 716.998C921.505 718.105 923.398 718.008 924.507 716.781L932 708.5L921.5 699.5Z" fill="#1F2923"/>
</g>
<g id="Vector 544" filter="url(#filter148_d_35_312)">
<path d="M921.5 699L913.5 708L920.757 714.493C921.995 715.6 923.896 715.492 925 714.25L931 707.5L921.5 699Z" fill="#1F2923"/>
<path d="M921.5 699L913.5 708L920.757 714.493C921.995 715.6 923.896 715.492 925 714.25L931 707.5L921.5 699Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="137.3">
<path id="133_2" d="M793 768.5L848 758L851.238 746.129C851.821 743.991 849.963 741.98 847.786 742.392L798.902 751.64C797.744 751.859 796.822 752.736 796.544 753.881L793 768.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 486" filter="url(#filter149_d_35_312)">
<path d="M814.015 755.385L815.5 764.216L825.048 762.455C826.657 762.158 827.731 760.626 827.463 759.012L826.499 753.215C826.224 751.565 824.654 750.458 823.008 750.754L816.443 751.935C814.825 752.225 813.743 753.764 814.015 755.385Z" fill="#1F2923"/>
</g>
<g id="Vector 513" filter="url(#filter150_d_35_312)">
<path d="M815.015 753.385L816.5 762.216L826.048 760.455C827.657 760.158 828.731 758.626 828.463 757.012L827.499 751.215C827.224 749.565 825.654 748.458 824.008 748.754L817.443 749.935C815.825 750.225 814.743 751.764 815.015 753.385Z" fill="#1F2923"/>
<path d="M815.015 753.385L816.5 762.216L826.048 760.455C827.657 760.158 828.731 758.626 828.463 757.012L827.499 751.215C827.224 749.565 825.654 748.458 824.008 748.754L817.443 749.935C815.825 750.225 814.743 751.764 815.015 753.385Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="137.2">
<path id="Vector 188" d="M789.5 781.5L843.5 771.5L848 758L793 768.5L789.5 781.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 487" filter="url(#filter151_d_35_312)">
<path d="M810.469 768.158L811.949 777.432L821.098 775.75C822.709 775.454 823.784 773.921 823.515 772.306L822 763.216L812.939 764.726C811.312 764.997 810.21 766.53 810.469 768.158Z" fill="#1F2923"/>
</g>
<g id="Vector 515" filter="url(#filter152_d_35_312)">
<path d="M811.469 766.158L812.949 775.432L822.098 773.75C823.709 773.454 824.784 771.921 824.515 770.306L823 761.216L813.939 762.726C812.312 762.997 811.21 764.53 811.469 766.158Z" fill="#1F2923"/>
<path d="M811.469 766.158L812.949 775.432L822.098 773.75C823.709 773.454 824.784 771.921 824.515 770.306L823 761.216L813.939 762.726C812.312 762.997 811.21 764.53 811.469 766.158Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="137.1">
<path id="Vector 189" d="M786.5 795.5L839 785L843.5 771.5L789.5 781.5L786.5 795.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 488" filter="url(#filter153_d_35_312)">
<path d="M806.619 781.196L808 791L817.593 789.081C819.204 788.759 820.256 787.201 819.953 785.586L818.211 776.299L809.096 777.818C807.491 778.086 806.392 779.584 806.619 781.196Z" fill="#1F2923"/>
</g>
<g id="Vector 517" filter="url(#filter154_d_35_312)">
<path d="M807.619 779.196L809 789L818.593 787.081C820.204 786.759 821.256 785.201 820.953 783.586L819.211 774.299L810.096 775.818C808.491 776.086 807.392 777.584 807.619 779.196Z" fill="#1F2923"/>
<path d="M807.619 779.196L809 789L818.593 787.081C820.204 786.759 821.256 785.201 820.953 783.586L819.211 774.299L810.096 775.818C808.491 776.086 807.392 777.584 807.619 779.196Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="137">
<path id="Vector 190" d="M788.17 812.151L837.867 802.036C839.366 801.731 840.395 800.348 840.257 798.825L839 785L786.5 795.5L784.602 808.787C784.308 810.841 786.138 812.565 788.17 812.151Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 489" filter="url(#filter155_d_35_312)">
<path d="M802.675 795.157L803.676 801.426C803.941 803.09 805.524 804.209 807.181 803.904L813.263 802.786C814.891 802.486 815.969 800.924 815.671 799.295L814 790.161L805.116 791.73C803.504 792.015 802.417 793.54 802.675 795.157Z" fill="#1F2923"/>
</g>
<g id="Vector 519" filter="url(#filter156_d_35_312)">
<path d="M803.675 793.157L804.676 799.426C804.941 801.09 806.524 802.209 808.181 801.904L814.263 800.786C815.891 800.486 816.969 798.924 816.671 797.295L815 788.161L806.116 789.73C804.504 790.015 803.417 791.54 803.675 793.157Z" fill="#1F2923"/>
<path d="M803.675 793.157L804.676 799.426C804.941 801.09 806.524 802.209 808.181 801.904L814.263 800.786C815.891 800.486 816.969 798.924 816.671 797.295L815 788.161L806.116 789.73C804.504 790.015 803.417 791.54 803.675 793.157Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="136.4">
<path id="132_2" d="M825 687.5L816 705.5L852 700.5L868 698L837.963 672.331C836.542 671.116 834.368 671.483 833.424 673.097L825 687.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 482" filter="url(#filter157_d_35_312)">
<path d="M834.015 693.168L835.5 702L845.048 700.239C846.657 699.942 847.731 698.41 847.463 696.796L846.499 690.998C846.224 689.349 844.654 688.242 843.008 688.538L836.443 689.718C834.825 690.009 833.743 691.548 834.015 693.168Z" fill="#1F2923"/>
</g>
<g id="Vector 512" filter="url(#filter158_d_35_312)">
<path d="M835.015 692.168L836.5 701L846.048 699.239C847.657 698.942 848.731 697.41 848.463 695.796L847.499 689.998C847.224 688.349 845.654 687.242 844.008 687.538L837.443 688.718C835.825 689.009 834.743 690.548 835.015 692.168Z" fill="#1F2923"/>
<path d="M835.015 692.168L836.5 701L846.048 699.239C847.657 698.942 848.731 697.41 848.463 695.796L847.499 689.998C847.224 688.349 845.654 687.242 844.008 687.538L837.443 688.718C835.825 689.009 834.743 690.548 835.015 692.168Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="136.3">
<path id="Vector 184" d="M815.5 706L809 720L878 706.5L868 698L815.5 706Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 483" filter="url(#filter159_d_35_312)">
<path d="M830.469 705.942L831.949 715.216L841.098 713.534C842.709 713.237 843.784 711.705 843.515 710.09L842 701L832.939 702.51C831.312 702.781 830.21 704.314 830.469 705.942Z" fill="#1F2923"/>
</g>
<g id="Vector 514" filter="url(#filter160_d_35_312)">
<path d="M831.469 704.942L832.949 714.216L842.098 712.534C843.709 712.237 844.784 710.705 844.515 709.09L843 700L833.939 701.51C832.312 701.781 831.21 703.314 831.469 704.942Z" fill="#1F2923"/>
<path d="M831.469 704.942L832.949 714.216L842.098 712.534C843.709 712.237 844.784 710.705 844.515 709.09L843 700L833.939 701.51C832.312 701.781 831.21 703.314 831.469 704.942Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="136.2">
<path id="Vector 185" d="M803.5 733.5L859.5 722.5L861 717.5L877.406 710.527C879.048 709.83 879.371 707.642 878 706.5L809 720L803.5 733.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 484" filter="url(#filter161_d_35_312)">
<path d="M826.68 719.025L828.16 728.299L837.309 726.616C838.919 726.32 839.995 724.788 839.726 723.173L838.211 714.083L829.149 715.593C827.523 715.864 826.42 717.397 826.68 719.025Z" fill="#1F2923"/>
</g>
<g id="Vector 516" filter="url(#filter162_d_35_312)">
<path d="M827.68 718.025L829.16 727.299L838.309 725.616C839.919 725.32 840.995 723.788 840.726 722.173L839.211 713.083L830.149 714.593C828.523 714.864 827.42 716.397 827.68 718.025Z" fill="#1F2923"/>
<path d="M827.68 718.025L829.16 727.299L838.309 725.616C839.919 725.32 840.995 723.788 840.726 722.173L839.211 713.083L830.149 714.593C828.523 714.864 827.42 716.397 827.68 718.025Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="136_2">
<path id="Vector 186" d="M802.558 750.5L851.726 740.783C852.78 740.575 853.642 739.819 853.987 738.801L859.5 722.5L803.5 733.5L799.13 746.609C798.403 748.791 800.301 750.946 802.558 750.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 485" filter="url(#filter163_d_35_312)">
<path d="M822.675 732.941L823.676 739.21C823.941 740.873 825.524 741.992 827.181 741.688L833.263 740.569C834.891 740.27 835.969 738.708 835.671 737.079L834 727.944L825.116 729.514C823.504 729.799 822.417 731.324 822.675 732.941Z" fill="#1F2923"/>
</g>
<g id="Vector 518" filter="url(#filter164_d_35_312)">
<path d="M823.675 731.941L824.676 738.21C824.941 739.873 826.524 740.992 828.181 740.688L834.263 739.569C835.891 739.27 836.969 737.708 836.671 736.079L835 726.944L826.116 728.514C824.504 728.799 823.417 730.324 823.675 731.941Z" fill="#1F2923"/>
<path d="M823.675 731.941L824.676 738.21C824.941 739.873 826.524 740.992 828.181 740.688L834.263 739.569C835.891 739.27 836.969 737.708 836.671 736.079L835 726.944L826.116 728.514C824.504 728.799 823.417 730.324 823.675 731.941Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="135,3">
<path id="330" d="M874.754 625.017L917.789 663.522C919.014 664.618 919.129 666.496 918.046 667.733L909.5 677.5L861.5 635.5L870.502 625.271C871.603 624.02 873.512 623.906 874.754 625.017Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 470" filter="url(#filter165_d_35_312)">
<path d="M886.616 642.423L882.291 638.77C881.021 637.697 879.12 637.861 878.053 639.137L874.464 643.432C873.376 644.733 873.583 646.677 874.92 647.721L881.463 652.826L886.918 646.712C888.042 645.452 887.906 643.513 886.616 642.423Z" fill="#1F2923"/>
</g>
<g id="Vector 507" filter="url(#filter166_d_35_312)">
<path d="M886.494 640.51L882.17 636.856C880.9 635.783 878.999 635.948 877.932 637.224L874.343 641.518C873.255 642.82 873.461 644.764 874.799 645.808L881.342 650.912L886.797 644.799C887.921 643.539 887.784 641.599 886.494 640.51Z" fill="#1F2923"/>
<path d="M886.494 640.51L882.17 636.856C880.9 635.783 878.999 635.948 877.932 637.224L874.343 641.518C873.255 642.82 873.461 644.764 874.799 645.808L881.342 650.912L886.797 644.799C887.921 643.539 887.784 641.599 886.494 640.51Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="135,2">
<path id="331" d="M861.5 635.5L909.5 677.5L901 687.5L853.5 645.5L861.5 635.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 472" filter="url(#filter167_d_35_312)">
<path d="M880.923 652.852L874.467 647.824L866.339 656.921L874.946 664.316L881.312 657.223C882.473 655.929 882.295 653.921 880.923 652.852Z" fill="#1F2923"/>
</g>
<g id="Vector 511" filter="url(#filter168_d_35_312)">
<path d="M880.801 650.939L874.346 645.911L866.218 655.008L874.825 662.403L881.191 655.309C882.352 654.015 882.173 652.008 880.801 650.939Z" fill="#1F2923"/>
<path d="M880.801 650.939L874.346 645.911L866.218 655.008L874.825 662.403L881.191 655.309C882.352 654.015 882.173 652.008 880.801 650.939Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="135,1">
<path id="332" d="M853.5 645.647L901 687.647L892 697.5L845.5 656L853.5 645.647Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 473" filter="url(#filter169_d_35_312)">
<path d="M874.946 664.316L866.459 656.817L857.943 666.29L864.642 671.89C865.908 672.948 867.792 672.785 868.858 671.524L874.946 664.316Z" fill="#1F2923"/>
</g>
<g id="Vector 521" filter="url(#filter170_d_35_312)">
<path d="M874.824 662.402L866.338 654.903L857.822 664.376L864.52 669.976C865.787 671.035 867.671 670.871 868.736 669.61L874.824 662.402Z" fill="#1F2923"/>
<path d="M874.824 662.402L866.338 654.903L857.822 664.376L864.52 669.976C865.787 671.035 867.671 670.871 868.736 669.61L874.824 662.402Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="135_2">
<path id="333" d="M879.814 707.12L837.627 670.83C836.43 669.8 836.236 668.019 837.183 666.756L845.25 656L892.25 698L883.965 706.891C882.868 708.069 881.035 708.17 879.814 707.12Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 471" filter="url(#filter171_d_35_312)">
<path d="M849.913 675.665L854.099 679.282C855.372 680.382 857.302 680.22 858.374 678.922L864.5 671.5L857.765 666.146C856.482 665.126 854.618 665.324 853.579 666.591L849.556 671.491C848.524 672.749 848.682 674.601 849.913 675.665Z" fill="#1F2923"/>
</g>
<g id="Vector 509" filter="url(#filter172_d_35_312)">
<path d="M849.792 673.751L854.003 677.391C855.267 678.483 857.179 678.333 858.257 677.057L864.313 669.887L857.653 664.331C856.374 663.264 854.47 663.444 853.413 664.732L849.435 669.578C848.402 670.836 848.561 672.687 849.792 673.751Z" fill="#1F2923"/>
<path d="M849.792 673.751L854.003 677.391C855.267 678.483 857.179 678.333 858.257 677.057L864.313 669.887L857.653 664.331C856.374 663.264 854.47 663.444 853.413 664.732L849.435 669.578C848.402 670.836 848.561 672.687 849.792 673.751Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="118">
<path id="Rectangle 27" d="M789.259 497.062C788.012 495.972 787.884 494.077 788.974 492.829L803.446 476.259C804.536 475.012 806.431 474.884 807.679 475.974L820.483 487.157C821.731 488.247 821.859 490.142 820.769 491.39L806.296 507.959C805.206 509.207 803.311 509.335 802.063 508.245L789.259 497.062Z" fill="#D9D9D9"/>
<path id="Rectangle 30" d="M828.97 452.248C827.722 451.158 827.594 449.263 828.684 448.015L838.794 436.44C839.884 435.193 841.779 435.065 843.027 436.154L868.933 458.782C870.181 459.872 870.309 461.767 869.219 463.015L859.109 474.59C858.019 475.838 856.124 475.966 854.876 474.876L828.97 452.248Z" fill="#D9D9D9"/>
<path id="Rectangle 31" d="M859.709 479.115C858.461 478.025 858.333 476.13 859.423 474.882L869.612 463.217C870.702 461.969 872.598 461.841 873.845 462.931L898.911 484.824C900.158 485.914 900.286 487.809 899.197 489.057L889.007 500.722C887.917 501.97 886.022 502.098 884.774 501.008L859.709 479.115Z" fill="#D9D9D9"/>
<path id="Rectangle 32" d="M889.776 505.144C888.529 504.054 888.401 502.159 889.49 500.911L899.487 489.466C900.577 488.218 902.472 488.09 903.72 489.18L929.891 512.038C931.139 513.128 931.267 515.023 930.177 516.271L920.18 527.716C919.09 528.964 917.195 529.092 915.947 528.002L889.776 505.144Z" fill="#D9D9D9"/>
<g id="Rectangle 77_2" filter="url(#filter173_d_35_312)">
<path d="M828.97 450.248C827.722 449.158 827.594 447.263 828.684 446.015L838.794 434.44C839.884 433.193 841.779 433.065 843.027 434.154L868.933 456.782C870.181 457.872 870.309 459.767 869.219 461.015L859.109 472.59C858.019 473.838 856.124 473.966 854.876 472.876L828.97 450.248Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 78_2" filter="url(#filter174_d_35_312)">
<path d="M859.709 477.115C858.461 476.025 858.333 474.13 859.423 472.882L869.612 461.217C870.702 459.969 872.598 459.841 873.845 460.931L898.911 482.824C900.158 483.914 900.286 485.809 899.197 487.057L889.007 498.722C887.917 499.97 886.022 500.098 884.774 499.008L859.709 477.115Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 79_2" filter="url(#filter175_d_35_312)">
<path d="M889.776 503.144C888.529 502.054 888.401 500.159 889.49 498.911L899.487 487.466C900.577 486.218 902.472 486.09 903.72 487.18L929.891 510.038C931.139 511.128 931.267 513.023 930.177 514.271L920.18 525.716C919.09 526.964 917.195 527.092 915.947 526.002L889.776 503.144Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 80_2" filter="url(#filter176_d_35_312)">
<path d="M828.97 448.248C827.722 447.158 827.594 445.263 828.684 444.015L838.794 432.44C839.884 431.193 841.779 431.065 843.027 432.154L868.933 454.782C870.181 455.872 870.309 457.767 869.219 459.015L859.109 470.59C858.019 471.838 856.124 471.966 854.876 470.876L828.97 448.248Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 81_2" filter="url(#filter177_d_35_312)">
<path d="M859.709 475.115C858.461 474.025 858.333 472.13 859.423 470.882L869.612 459.217C870.702 457.969 872.598 457.841 873.845 458.931L898.911 480.824C900.158 481.914 900.286 483.809 899.197 485.057L889.007 496.722C887.917 497.97 886.022 498.098 884.774 497.008L859.709 475.115Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 82_2" filter="url(#filter178_d_35_312)">
<path d="M889.776 501.144C888.529 500.054 888.401 498.159 889.49 496.911L899.487 485.466C900.577 484.218 902.472 484.09 903.72 485.18L929.891 508.038C931.139 509.128 931.267 511.023 930.177 512.271L920.18 523.716C919.09 524.964 917.195 525.092 915.947 524.002L889.776 501.144Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 89_2" filter="url(#filter179_d_35_312)">
<path d="M828.97 446.248C827.722 445.158 827.594 443.263 828.684 442.015L838.794 430.44C839.884 429.193 841.779 429.065 843.027 430.154L868.933 452.782C870.181 453.872 870.309 455.767 869.219 457.015L859.109 468.59C858.019 469.838 856.124 469.966 854.876 468.876L828.97 446.248Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 90_2" filter="url(#filter180_d_35_312)">
<path d="M859.709 473.115C858.461 472.025 858.333 470.13 859.423 468.882L869.612 457.217C870.702 455.969 872.598 455.841 873.845 456.931L898.911 478.824C900.158 479.914 900.286 481.809 899.197 483.057L889.007 494.722C887.917 495.97 886.022 496.098 884.774 495.008L859.709 473.115Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 91_2" filter="url(#filter181_d_35_312)">
<path d="M889.776 499.144C888.529 498.054 888.401 496.159 889.49 494.911L899.487 483.466C900.577 482.218 902.472 482.09 903.72 483.18L929.891 506.038C931.139 507.128 931.267 509.023 930.177 510.271L920.18 521.716C919.09 522.964 917.195 523.092 915.947 522.002L889.776 499.144Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 92_2" filter="url(#filter182_d_35_312)">
<path d="M828.97 444.248C827.722 443.158 827.594 441.263 828.684 440.015L838.794 428.44C839.884 427.193 841.779 427.065 843.027 428.154L868.933 450.782C870.181 451.872 870.309 453.767 869.219 455.015L859.109 466.59C858.019 467.838 856.124 467.966 854.876 466.876L828.97 444.248Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 93_2" filter="url(#filter183_d_35_312)">
<path d="M859.709 471.115C858.461 470.025 858.333 468.13 859.423 466.882L869.612 455.217C870.702 453.969 872.598 453.841 873.845 454.931L898.911 476.824C900.158 477.914 900.286 479.809 899.197 481.057L889.007 492.722C887.917 493.97 886.022 494.098 884.774 493.008L859.709 471.115Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 94_2" filter="url(#filter184_d_35_312)">
<path d="M889.776 497.144C888.529 496.054 888.401 494.159 889.49 492.911L899.487 481.466C900.577 480.218 902.472 480.09 903.72 481.18L929.891 504.038C931.139 505.128 931.267 507.023 930.177 508.271L920.18 519.716C919.09 520.964 917.195 521.092 915.947 520.002L889.776 497.144Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 95" filter="url(#filter185_d_35_312)">
<path d="M828.97 442.248C827.722 441.158 827.594 439.263 828.684 438.015L838.794 426.44C839.884 425.193 841.779 425.065 843.027 426.154L868.933 448.782C870.181 449.872 870.309 451.767 869.219 453.015L859.109 464.59C858.019 465.838 856.124 465.966 854.876 464.876L828.97 442.248Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 96_2" filter="url(#filter186_d_35_312)">
<path d="M859.709 469.115C858.461 468.025 858.333 466.13 859.423 464.882L869.612 453.217C870.702 451.969 872.598 451.841 873.845 452.931L898.911 474.824C900.158 475.914 900.286 477.809 899.197 479.057L889.007 490.722C887.917 491.97 886.022 492.098 884.774 491.008L859.709 469.115Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 97_2" filter="url(#filter187_d_35_312)">
<path d="M889.776 495.144C888.529 494.054 888.401 492.159 889.49 490.911L899.487 479.466C900.577 478.218 902.472 478.09 903.72 479.18L929.891 502.038C931.139 503.128 931.267 505.023 930.177 506.271L920.18 517.716C919.09 518.964 917.195 519.092 915.947 518.002L889.776 495.144Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 98_2" filter="url(#filter188_d_35_312)">
<path d="M828.97 440.248C827.722 439.158 827.594 437.263 828.684 436.015L838.794 424.44C839.884 423.193 841.779 423.065 843.027 424.154L868.933 446.782C870.181 447.872 870.309 449.767 869.219 451.015L859.109 462.59C858.019 463.838 856.124 463.966 854.876 462.876L828.97 440.248Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 99" filter="url(#filter189_d_35_312)">
<path d="M859.709 467.115C858.461 466.025 858.333 464.13 859.423 462.882L869.612 451.217C870.702 449.969 872.598 449.841 873.845 450.931L898.911 472.824C900.158 473.914 900.286 475.809 899.197 477.057L889.007 488.722C887.917 489.97 886.022 490.098 884.774 489.008L859.709 467.115Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 100" filter="url(#filter190_d_35_312)">
<path d="M889.776 493.144C888.529 492.054 888.401 490.159 889.49 488.911L899.487 477.466C900.577 476.218 902.472 476.09 903.72 477.18L929.891 500.038C931.139 501.128 931.267 503.023 930.177 504.271L920.18 515.716C919.09 516.964 917.195 517.092 915.947 516.002L889.776 493.144Z" fill="#D9D9D9"/>
</g>
<path id="Rectangle 28" d="M825.259 529.062C824.012 527.972 823.884 526.077 824.974 524.829L839.446 508.259C840.536 507.012 842.431 506.884 843.679 507.974L856.483 519.157C857.731 520.247 857.859 522.142 856.769 523.39L842.296 539.959C841.206 541.207 839.311 541.335 838.063 540.245L825.259 529.062Z" fill="#D9D9D9"/>
<path id="Rectangle 29" d="M861.259 560.062C860.012 558.972 859.884 557.077 860.974 555.829L875.446 539.259C876.536 538.012 878.431 537.884 879.679 538.974L892.483 550.157C893.731 551.247 893.859 553.142 892.769 554.39L878.296 570.959C877.206 572.207 875.311 572.335 874.063 571.245L861.259 560.062Z" fill="#D9D9D9"/>
<g id="Rectangle 95_2" filter="url(#filter191_d_35_312)">
<path d="M789.259 495.062C788.012 493.972 787.884 492.077 788.974 490.829L803.446 474.259C804.536 473.012 806.431 472.884 807.679 473.974L820.483 485.157C821.731 486.247 821.859 488.142 820.769 489.39L806.296 505.959C805.206 507.207 803.311 507.335 802.063 506.245L789.259 495.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 99_2" filter="url(#filter192_d_35_312)">
<path d="M825.259 527.062C824.012 525.972 823.884 524.077 824.974 522.829L839.446 506.259C840.536 505.012 842.431 504.884 843.679 505.974L856.483 517.157C857.731 518.247 857.859 520.142 856.769 521.39L842.296 537.959C841.206 539.207 839.311 539.335 838.063 538.245L825.259 527.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 100_2" filter="url(#filter193_d_35_312)">
<path d="M861.259 558.062C860.012 556.972 859.884 555.077 860.974 553.829L875.446 537.259C876.536 536.012 878.431 535.884 879.679 536.974L892.483 548.157C893.731 549.247 893.859 551.142 892.769 552.39L878.296 568.959C877.206 570.207 875.311 570.335 874.063 569.245L861.259 558.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 248" filter="url(#filter194_d_35_312)">
<path d="M789.259 493.062C788.012 491.972 787.884 490.077 788.974 488.829L803.446 472.259C804.536 471.012 806.431 470.884 807.679 471.974L820.483 483.157C821.731 484.247 821.859 486.142 820.769 487.39L806.296 503.959C805.206 505.207 803.311 505.335 802.063 504.245L789.259 493.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 249" filter="url(#filter195_d_35_312)">
<path d="M825.259 525.062C824.012 523.972 823.884 522.077 824.974 520.829L839.446 504.259C840.536 503.012 842.431 502.884 843.679 503.974L856.483 515.157C857.731 516.247 857.859 518.142 856.769 519.39L842.296 535.959C841.206 537.207 839.311 537.335 838.063 536.245L825.259 525.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 250" filter="url(#filter196_d_35_312)">
<path d="M861.259 556.062C860.012 554.972 859.884 553.077 860.974 551.829L875.446 535.259C876.536 534.012 878.431 533.884 879.679 534.974L892.483 546.157C893.731 547.247 893.859 549.142 892.769 550.39L878.296 566.959C877.206 568.207 875.311 568.335 874.063 567.245L861.259 556.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 251" filter="url(#filter197_d_35_312)">
<path d="M789.259 491.062C788.012 489.972 787.884 488.077 788.974 486.829L803.446 470.259C804.536 469.012 806.431 468.884 807.679 469.974L820.483 481.157C821.731 482.247 821.859 484.142 820.769 485.39L806.296 501.959C805.206 503.207 803.311 503.335 802.063 502.245L789.259 491.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 252" filter="url(#filter198_d_35_312)">
<path d="M825.259 523.062C824.012 521.972 823.884 520.077 824.974 518.829L839.446 502.259C840.536 501.012 842.431 500.884 843.679 501.974L856.483 513.157C857.731 514.247 857.859 516.142 856.769 517.39L842.296 533.959C841.206 535.207 839.311 535.335 838.063 534.245L825.259 523.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 253" filter="url(#filter199_d_35_312)">
<path d="M861.259 554.062C860.012 552.972 859.884 551.077 860.974 549.829L875.446 533.259C876.536 532.012 878.431 531.884 879.679 532.974L892.483 544.157C893.731 545.247 893.859 547.142 892.769 548.39L878.296 564.959C877.206 566.207 875.311 566.335 874.063 565.245L861.259 554.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 254" filter="url(#filter200_d_35_312)">
<path d="M789.259 489.062C788.012 487.972 787.884 486.077 788.974 484.829L803.446 468.259C804.536 467.012 806.431 466.884 807.679 467.974L820.483 479.157C821.731 480.247 821.859 482.142 820.769 483.39L806.296 499.959C805.206 501.207 803.311 501.335 802.063 500.245L789.259 489.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 255" filter="url(#filter201_d_35_312)">
<path d="M825.259 521.062C824.012 519.972 823.884 518.077 824.974 516.829L839.446 500.259C840.536 499.012 842.431 498.884 843.679 499.974L856.483 511.157C857.731 512.247 857.859 514.142 856.769 515.39L842.296 531.959C841.206 533.207 839.311 533.335 838.063 532.245L825.259 521.062Z" fill="#D9D9D9"/>
</g>
<g id="Rectangle 256" filter="url(#filter202_d_35_312)">
<path d="M861.259 552.062C860.012 550.972 859.884 549.077 860.974 547.829L875.446 531.259C876.536 530.012 878.431 529.884 879.679 530.974L892.483 542.157C893.731 543.247 893.859 545.142 892.769 546.39L878.296 562.959C877.206 564.207 875.311 564.335 874.063 563.245L861.259 552.062Z" fill="#D9D9D9"/>
</g>
</g>
<g id="81.4">
<path id="80" d="M743.737 407.939L756.5 419L725 456L711.355 444.487C710.065 443.398 709.926 441.46 711.049 440.199L739.531 408.211C740.623 406.985 742.497 406.864 743.737 407.939Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 490" filter="url(#filter203_d_35_312)">
<path d="M731.106 430.198L727.046 434.615C725.925 435.835 726.005 437.732 727.224 438.853L731.689 442.962C732.92 444.094 734.837 444.002 735.954 442.758L742.019 435.998L735.317 429.993C734.094 428.898 732.217 428.989 731.106 430.198Z" fill="#1F2923"/>
</g>
<g id="Vector 494" filter="url(#filter204_d_35_312)">
<path d="M732.106 427.198L728.046 431.615C726.925 432.835 727.005 434.732 728.224 435.853L732.689 439.962C733.92 441.094 735.837 441.002 736.954 439.758L743.019 432.998L736.317 426.993C735.094 425.898 733.217 425.989 732.106 427.198Z" fill="#1F2923"/>
<path d="M732.106 427.198L728.046 431.615C726.925 432.835 727.005 434.732 728.224 435.853L732.689 439.962C733.92 441.094 735.837 441.002 736.954 439.758L743.019 432.998L736.317 426.993C735.094 425.898 733.217 425.989 732.106 427.198Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="81.3">
<path id="Vector 148" d="M756.5 419L766.5 428L734.5 464L725 456L756.5 419Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 492" filter="url(#filter205_d_35_312)">
<path d="M742.079 435.712L736 442.5L745.5 450.5L753.507 441.56L746.251 435.423C745.011 434.374 743.162 434.503 742.079 435.712Z" fill="#1F2923"/>
</g>
<g id="Vector 495" filter="url(#filter206_d_35_312)">
<path d="M742.6 433.328L737.017 440L746 448L754.019 439.036L746.838 432.963C745.569 431.889 743.668 432.053 742.6 433.328Z" fill="#1F2923"/>
<path d="M742.6 433.328L737.017 440L746 448L754.019 439.036L746.838 432.963C745.569 431.889 743.668 432.053 742.6 433.328Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="81.2">
<path id="Vector 149" d="M766.5 428L775.5 436L744 472L734.5 464L766.5 428Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 493" filter="url(#filter207_d_35_312)">
<path d="M753.507 441.56L745.5 450.5L755.075 459.183L761.053 452.307C762.128 451.071 762.012 449.202 760.794 448.107L753.507 441.56Z" fill="#1F2923"/>
</g>
<g id="Vector 496" filter="url(#filter208_d_35_312)">
<path d="M754.037 439.017L746 448L755.604 456.64L761.583 449.764C762.657 448.528 762.542 446.659 761.324 445.564L754.037 439.017Z" fill="#1F2923"/>
<path d="M754.037 439.017L746 448L755.604 456.64L761.583 449.764C762.657 448.528 762.542 446.659 761.324 445.564L754.037 439.017Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="81.1">
<path id="Vector 150" d="M756.211 482.527L744 472L775.5 436L787.233 446.056C788.486 447.131 788.636 449.017 787.567 450.276L760.456 482.197C759.378 483.466 757.472 483.614 756.211 482.527Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 491" filter="url(#filter209_d_35_312)">
<path d="M764.315 467.104L768.282 462.508C769.354 461.266 769.229 459.393 768.002 458.304L760.985 452.075L754.929 459.237C753.849 460.514 754.022 462.428 755.313 463.491L760.138 467.46C761.396 468.496 763.25 468.337 764.315 467.104Z" fill="#1F2923"/>
</g>
<g id="Vector 497" filter="url(#filter210_d_35_312)">
<path d="M765.315 464.104L769.282 459.508C770.354 458.266 770.229 456.393 769.002 455.304L761.985 449.075L755.929 456.237C754.849 457.514 755.022 459.428 756.313 460.491L761.138 464.46C762.396 465.496 764.25 465.337 765.315 464.104Z" fill="#1F2923"/>
<path d="M765.315 464.104L769.282 459.508C770.354 458.266 770.229 456.393 769.002 455.304L761.985 449.075L755.929 456.237C754.849 457.514 755.022 459.428 756.313 460.491L761.138 464.46C762.396 465.496 764.25 465.337 765.315 464.104Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="80_2">
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;">
<path id="Rectangle 23" d="M796 215C796 213.343 797.343 212 799 212H824C825.657 212 827 213.343 827 215V241C827 242.657 825.657 244 824 244H799C797.343 244 796 242.657 796 241V215Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_2">
<path id="Rectangle 23_2" d="M793 366C793 364.343 794.343 363 796 363H821C822.657 363 824 364.343 824 366V392C824 393.657 822.657 395 821 395H796C794.343 395 793 393.657 793 392V366Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;">
<path id="Rectangle 24" d="M814 319C814 317.343 815.343 316 817 316H839C840.657 316 842 317.343 842 319V336C842 337.657 840.657 339 839 339H817C815.343 339 814 337.657 814 336V319Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_2">
<path id="Rectangle 24_2" d="M815 271C815 269.343 816.343 268 818 268H840C841.657 268 843 269.343 843 271V288C843 289.657 841.657 291 840 291H818C816.343 291 815 289.657 815 288V271Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_3" filter="url(#filter211_d_35_312)">
<path id="Rectangle 23_3" d="M796 213C796 211.343 797.343 210 799 210H824C825.657 210 827 211.343 827 213V239C827 240.657 825.657 242 824 242H799C797.343 242 796 240.657 796 239V213Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_4" filter="url(#filter212_d_35_312)">
<path id="Rectangle 23_4" d="M793 364C793 362.343 794.343 361 796 361H821C822.657 361 824 362.343 824 364V390C824 391.657 822.657 393 821 393H796C794.343 393 793 391.657 793 390V364Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_3" filter="url(#filter213_d_35_312)">
<path id="Rectangle 24_3" d="M814 317C814 315.343 815.343 314 817 314H839C840.657 314 842 315.343 842 317V334C842 335.657 840.657 337 839 337H817C815.343 337 814 335.657 814 334V317Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_4" filter="url(#filter214_d_35_312)">
<path id="Rectangle 24_4" d="M815 269C815 267.343 816.343 266 818 266H840C841.657 266 843 267.343 843 269V286C843 287.657 841.657 289 840 289H818C816.343 289 815 287.657 815 286V269Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_5" filter="url(#filter215_d_35_312)">
<path id="Rectangle 23_5" d="M796 211C796 209.343 797.343 208 799 208H824C825.657 208 827 209.343 827 211V237C827 238.657 825.657 240 824 240H799C797.343 240 796 238.657 796 237V211Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_6" filter="url(#filter216_d_35_312)">
<path id="Rectangle 23_6" d="M793 362C793 360.343 794.343 359 796 359H821C822.657 359 824 360.343 824 362V388C824 389.657 822.657 391 821 391H796C794.343 391 793 389.657 793 388V362Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_5" filter="url(#filter217_d_35_312)">
<path id="Rectangle 24_5" d="M814 315C814 313.343 815.343 312 817 312H839C840.657 312 842 313.343 842 315V332C842 333.657 840.657 335 839 335H817C815.343 335 814 333.657 814 332V315Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_6" filter="url(#filter218_d_35_312)">
<path id="Rectangle 24_6" d="M815 267C815 265.343 816.343 264 818 264H840C841.657 264 843 265.343 843 267V284C843 285.657 841.657 287 840 287H818C816.343 287 815 285.657 815 284V267Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_7" filter="url(#filter219_d_35_312)">
<path id="Rectangle 23_7" d="M796 209C796 207.343 797.343 206 799 206H824C825.657 206 827 207.343 827 209V235C827 236.657 825.657 238 824 238H799C797.343 238 796 236.657 796 235V209Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_8" filter="url(#filter220_d_35_312)">
<path id="Rectangle 23_8" d="M793 360C793 358.343 794.343 357 796 357H821C822.657 357 824 358.343 824 360V386C824 387.657 822.657 389 821 389H796C794.343 389 793 387.657 793 386V360Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_7" filter="url(#filter221_d_35_312)">
<path id="Rectangle 24_7" d="M814 313C814 311.343 815.343 310 817 310H839C840.657 310 842 311.343 842 313V330C842 331.657 840.657 333 839 333H817C815.343 333 814 331.657 814 330V313Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_8" filter="url(#filter222_d_35_312)">
<path id="Rectangle 24_8" d="M815 265C815 263.343 816.343 262 818 262H840C841.657 262 843 263.343 843 265V282C843 283.657 841.657 285 840 285H818C816.343 285 815 283.657 815 282V265Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_9" filter="url(#filter223_d_35_312)">
<path id="Rectangle 23_9" d="M796 207C796 205.343 797.343 204 799 204H824C825.657 204 827 205.343 827 207V233C827 234.657 825.657 236 824 236H799C797.343 236 796 234.657 796 233V207Z" fill="#D9D9D9"/>
</g>
<g id="4 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#144;_10" filter="url(#filter224_d_35_312)">
<path id="Rectangle 23_10" d="M793 358C793 356.343 794.343 355 796 355H821C822.657 355 824 356.343 824 358V384C824 385.657 822.657 387 821 387H796C794.343 387 793 385.657 793 384V358Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_9" filter="url(#filter225_d_35_312)">
<path id="Rectangle 24_9" d="M814 311C814 309.343 815.343 308 817 308H839C840.657 308 842 309.343 842 311V328C842 329.657 840.657 331 839 331H817C815.343 331 814 329.657 814 328V311Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_10" filter="url(#filter226_d_35_312)">
<path id="Rectangle 24_10" d="M815 263C815 261.343 816.343 260 818 260H840C841.657 260 843 261.343 843 263V280C843 281.657 841.657 283 840 283H818C816.343 283 815 281.657 815 280V263Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_11" filter="url(#filter227_d_35_312)">
<path id="Rectangle 24_11" d="M814 309C814 307.343 815.343 306 817 306H839C840.657 306 842 307.343 842 309V326C842 327.657 840.657 329 839 329H817C815.343 329 814 327.657 814 326V309Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_12" filter="url(#filter228_d_35_312)">
<path id="Rectangle 24_12" d="M815 261C815 259.343 816.343 258 818 258H840C841.657 258 843 259.343 843 261V278C843 279.657 841.657 281 840 281H818C816.343 281 815 279.657 815 278V261Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_13" filter="url(#filter229_d_35_312)">
<path id="Rectangle 24_13" d="M814 307C814 305.343 815.343 304 817 304H839C840.657 304 842 305.343 842 307V324C842 325.657 840.657 327 839 327H817C815.343 327 814 325.657 814 324V307Z" fill="#D9D9D9"/>
</g>
<g id="6 &#208;&#173;&#208;&#162;&#208;&#144;&#208;&#150;&#208;&#149;&#208;&#153;_14" filter="url(#filter230_d_35_312)">
<path id="Rectangle 24_14" d="M815 259C815 257.343 816.343 256 818 256H840C841.657 256 843 257.343 843 259V276C843 277.657 841.657 279 840 279H818C816.343 279 815 277.657 815 276V259Z" fill="#D9D9D9"/>
</g>
</g>
<g id="79,3">
<path id="78" d="M726.361 301.25L757.741 323.603C758.531 324.166 759 325.076 759 326.046V345L720 312.5L721.667 303.166C722.054 300.998 724.567 299.972 726.361 301.25Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 462" filter="url(#filter231_d_35_312)">
<path d="M751.84 323.084L747.397 319.052C746.171 317.938 744.275 318.03 743.161 319.255L739.08 323.747C737.955 324.984 738.059 326.901 739.31 328.009L746.108 334.033L752.07 327.293C753.158 326.064 753.056 324.188 751.84 323.084Z" fill="#1F2923"/>
<path d="M751.84 323.084L747.397 319.052C746.171 317.938 744.275 318.03 743.161 319.255L739.08 323.747C737.955 324.984 738.059 326.901 739.31 328.009L746.108 334.033L752.07 327.293C753.158 326.064 753.056 324.188 751.84 323.084Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
<g id="Vector 502" filter="url(#filter232_d_35_312)">
<path d="M752.84 321.084L748.397 317.052C747.171 315.938 745.275 316.03 744.161 317.255L740.08 321.747C738.955 322.984 739.059 324.901 740.31 326.009L747.108 332.033L753.07 325.293C754.158 324.064 754.056 322.188 752.84 321.084Z" fill="#1F2923"/>
<path d="M752.84 321.084L748.397 317.052C747.171 315.938 745.275 316.03 744.161 317.255L740.08 321.747C738.955 322.984 739.059 324.901 740.31 326.009L747.108 332.033L753.07 325.293C754.158 324.064 754.056 322.188 752.84 321.084Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="79.2">
<path id="Vector 136" d="M759 348.5L756.5 359L717 325L720 312L759 345V348.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 464" filter="url(#filter233_d_35_312)">
<path d="M747.342 335.633L740.998 330.035L735.133 336.425C733.986 337.674 734.102 339.625 735.388 340.73L742.188 346.568L747.69 339.77C748.701 338.52 748.547 336.696 747.342 335.633Z" fill="#1F2923"/>
<path d="M747.342 335.633L740.998 330.035L735.133 336.425C733.986 337.674 734.102 339.625 735.388 340.73L742.188 346.568L747.69 339.77C748.701 338.52 748.547 336.696 747.342 335.633Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
<g id="Vector 503" filter="url(#filter234_d_35_312)">
<path d="M748.342 333.633L741.998 328.035L736.133 334.425C734.986 335.674 735.102 337.625 736.388 338.73L743.188 344.568L748.69 337.77C749.701 336.52 749.547 334.696 748.342 333.633Z" fill="#1F2923"/>
<path d="M748.342 333.633L741.998 328.035L736.133 334.425C734.986 335.674 735.102 337.625 736.388 338.73L743.188 344.568L748.69 337.77C749.701 336.52 749.547 334.696 748.342 333.633Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="79,1">
<path id="Vector 135" d="M755 365C754 367.5 751 370.5 751 370.5L713 337.5C713 337.5 715.5 332.5 716 330.5C716.5 328.5 716.609 327.148 717 325L756.5 359C755.914 361.343 756 362.5 755 365Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 465" filter="url(#filter235_d_35_312)">
<path d="M743.328 348.069L736.5 342L730.547 348.697C729.426 349.959 729.566 351.897 730.857 352.985L738 359L743.64 352.232C744.677 350.988 744.539 349.146 743.328 348.069Z" fill="#1F2923"/>
<path d="M743.328 348.069L736.5 342L730.547 348.697C729.426 349.959 729.566 351.897 730.857 352.985L738 359L743.64 352.232C744.677 350.988 744.539 349.146 743.328 348.069Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
<g id="Vector 504" filter="url(#filter236_d_35_312)">
<path d="M744.328 346.069L737.5 340L731.547 346.697C730.426 347.959 730.566 349.897 731.857 350.985L739 357L744.64 350.232C745.677 348.988 745.539 347.146 744.328 346.069Z" fill="#1F2923"/>
<path d="M744.328 346.069L737.5 340L731.547 346.697C730.426 347.959 730.566 349.897 731.857 350.985L739 357L744.64 350.232C745.677 348.988 745.539 347.146 744.328 346.069Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="79">
<path id="Vector 134" d="M706.506 352.837L737.699 381.394C738.955 382.543 740.915 382.419 742.015 381.119L751 370.5C751 370.5 713.382 337.35 713 338C712.618 338.651 712 339.5 710 343C708.526 345.58 707.51 347.006 706.139 348.828C705.211 350.062 705.368 351.795 706.506 352.837Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 463" filter="url(#filter237_d_35_312)">
<path d="M736.895 370.394L740.775 365.724C741.823 364.462 741.664 362.592 740.416 361.526L733.283 355.431L727.363 362.705C726.307 364.002 726.516 365.913 727.827 366.951L732.726 370.829C734.003 371.84 735.854 371.647 736.895 370.394Z" fill="#1F2923"/>
<path d="M736.895 370.394L740.775 365.724C741.823 364.462 741.664 362.592 740.416 361.526L733.283 355.431L727.363 362.705C726.307 364.002 726.516 365.913 727.827 366.951L732.726 370.829C734.003 371.84 735.854 371.647 736.895 370.394Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
<g id="Vector 505" filter="url(#filter238_d_35_312)">
<path d="M737.895 368.394L741.775 363.724C742.823 362.462 742.664 360.592 741.416 359.526L734.283 353.431L728.363 360.705C727.307 362.002 727.516 363.913 728.827 364.951L733.726 368.829C735.003 369.84 736.854 369.647 737.895 368.394Z" fill="#1F2923"/>
<path d="M737.895 368.394L741.775 363.724C742.823 362.462 742.664 360.592 741.416 359.526L734.283 353.431L728.363 360.705C727.307 362.002 727.516 363.913 728.827 364.951L733.726 368.829C735.003 369.84 736.854 369.647 737.895 368.394Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="78.1">
<path id="77" d="M725.328 274.35L755.828 267.343C757.707 266.912 759.5 268.339 759.5 270.267V289.804L723 289.689V277.274C723 275.876 723.966 274.663 725.328 274.35Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 16" filter="url(#filter239_d_35_312)">
<path d="M751.642 277.909C753.3 277.907 754.645 279.251 754.645 280.909L754.645 287.353L742.5 287.364L742.5 280.914C742.5 279.259 743.841 277.916 745.497 277.914L751.642 277.909Z" fill="#1F2923"/>
</g>
<g id="Rectangle 61" filter="url(#filter240_d_35_312)">
<path d="M753.673 275.909C755.319 275.907 756.659 277.232 756.676 278.878L756.77 287.988L743.915 288L743.821 278.946C743.804 277.278 745.151 275.917 746.819 275.915L753.673 275.909Z" fill="#1F2923"/>
<path d="M753.673 275.909C755.319 275.907 756.659 277.232 756.676 278.878L756.77 287.988L743.915 288L743.821 278.946C743.804 277.278 745.151 275.917 746.819 275.915L753.673 275.909Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="78_2">
<path id="Vector 138" d="M723 287L759.5 287.5L759.088 313.432C759.05 315.821 756.373 317.209 754.399 315.864L724.31 295.352C723.49 294.794 723 293.866 723 292.874L723 287Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 15" filter="url(#filter241_d_35_312)">
<path d="M745.487 300.906C743.836 300.902 742.498 299.562 742.495 297.911L742.478 286.51L755.989 286.5L755.998 297.924C755.999 299.585 754.651 300.93 752.99 300.926L745.487 300.906Z" fill="#1F2923"/>
</g>
<g id="Rectangle 62" filter="url(#filter242_d_35_312)">
<path d="M746.92 298.905C745.267 298.9 743.929 297.559 743.929 295.905L743.929 287.5L756.784 287.5L756.784 295.925C756.784 297.585 755.435 298.93 753.775 298.925L746.92 298.905Z" fill="#1F2923"/>
<path d="M746.92 298.905C745.267 298.9 743.929 297.559 743.929 295.905L743.929 287.5L756.784 287.5L756.784 295.925C756.784 297.585 755.435 298.93 753.775 298.925L746.92 298.905Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="77.2">
<path id="312" d="M729.964 207.993L741.81 204.969C743.194 204.615 744.184 204.364 744.961 204.273C745.724 204.184 746.208 204.26 746.611 204.499C747.013 204.738 747.312 205.126 747.6 205.838C747.893 206.564 748.147 207.553 748.5 208.937L752.89 226.13L730.36 231.461L726.002 214.707C725.64 213.319 725.383 212.327 725.289 211.546C725.196 210.781 725.271 210.295 725.509 209.891C725.748 209.486 726.137 209.186 726.852 208.897C727.581 208.603 728.574 208.348 729.964 207.993Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 14" filter="url(#filter243_d_35_312)">
<path d="M739.757 215.844C741.361 215.475 742.963 216.468 743.346 218.068L745.537 227.207L733.008 230.085L730.831 221.001C730.442 219.379 731.451 217.752 733.077 217.378L739.757 215.844Z" fill="#1F2923"/>
</g>
<g id="Rectangle 63" filter="url(#filter244_d_35_312)">
<path d="M740.757 213.844C742.361 213.475 743.963 214.468 744.346 216.068L746.537 225.207L734.008 228.085L731.831 219.001C731.442 217.379 732.451 215.752 734.077 215.378L740.757 213.844Z" fill="#1F2923"/>
<path d="M740.757 213.844C742.361 213.475 743.963 214.468 744.346 216.068L746.537 225.207L734.008 228.085L731.831 219.001C731.442 217.379 732.451 215.752 734.077 215.378L740.757 213.844Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="77.1">
<path id="313" d="M757.474 243.314L757.474 243.314L757.477 243.325L757.477 243.325C757.843 244.703 758.103 245.689 758.201 246.466C758.297 247.23 758.225 247.715 757.989 248.12C757.753 248.525 757.367 248.828 756.655 249.121C755.929 249.419 754.939 249.68 753.555 250.044L741.189 253.29C739.776 253.661 738.765 253.925 737.972 254.023C737.192 254.118 736.7 254.041 736.292 253.796C735.884 253.551 735.585 253.152 735.304 252.42C735.017 251.673 734.776 250.657 734.44 249.235L734.44 249.235L734.435 249.217L730.1 230.863L752.644 225.107L757.474 243.314Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 13" filter="url(#filter245_d_35_312)">
<path d="M738.8 241.444C737.231 241.755 735.695 240.782 735.306 239.231L732.667 228.71L745.536 227.207L747.678 236.532C748.056 238.181 746.998 239.816 745.338 240.146L738.8 241.444Z" fill="#1F2923"/>
</g>
<g id="Rectangle 64" filter="url(#filter246_d_35_312)">
<path d="M739.743 239.717C738.132 240.08 736.53 239.074 736.159 237.464L733.996 228.085L746.536 225.207L748.695 234.609C749.067 236.228 748.053 237.841 746.432 238.207L739.743 239.717Z" fill="#1F2923"/>
<path d="M739.743 239.717C738.132 240.08 736.53 239.074 736.159 237.464L733.996 228.085L746.536 225.207L748.695 234.609C749.067 236.228 748.053 237.841 746.432 238.207L739.743 239.717Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="76.2">
<path id="151" d="M703.373 237.91L698.103 215.872L717.383 211.335C718.75 211.014 719.727 210.785 720.493 210.709C721.246 210.635 721.722 210.717 722.117 210.956C722.512 211.196 722.806 211.58 723.088 212.282C723.376 212.996 723.625 213.968 723.972 215.328L726.968 227.064C727.335 228.501 727.597 229.529 727.689 230.335C727.78 231.126 727.697 231.623 727.443 232.032C727.189 232.441 726.78 232.735 726.03 233.004C725.267 233.277 724.229 233.498 722.778 233.805L722.778 233.805L722.751 233.811L703.373 237.91Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 9" filter="url(#filter247_d_35_312)">
<path d="M713.677 228.821C714.037 230.433 713.028 232.032 711.418 232.4L702.034 234.545L699.18 222L708.586 219.859C710.206 219.49 711.817 220.508 712.18 222.129L713.677 228.821Z" fill="#1F2923"/>
</g>
<g id="Rectangle 75" filter="url(#filter248_d_35_312)">
<path d="M714.677 226.821C715.037 228.433 714.028 230.032 712.418 230.4L703.034 232.545L700.18 220L709.586 217.859C711.206 217.49 712.817 218.508 713.18 220.129L714.677 226.821Z" fill="#1F2923"/>
<path d="M714.677 226.821C715.037 228.433 714.028 230.032 712.418 230.4L703.034 232.545L700.18 220L709.586 217.859C711.206 217.49 712.817 218.508 713.18 220.129L714.677 226.821Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="76.1">
<path id="75" d="M698.144 216.104L703.888 237.645L685.816 242.44C684.404 242.814 683.394 243.081 682.601 243.18C681.822 243.278 681.329 243.202 680.921 242.958C680.512 242.714 680.212 242.316 679.929 241.585C679.64 240.839 679.396 239.823 679.056 238.403L676.367 227.16C676.038 225.783 675.804 224.8 675.726 224.028C675.648 223.27 675.73 222.79 675.971 222.393C676.212 221.996 676.6 221.702 677.308 221.421C678.029 221.134 679.01 220.888 680.383 220.545L680.383 220.545L680.401 220.54L680.401 220.54L698.144 216.104Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 10" filter="url(#filter249_d_35_312)">
<path d="M687.476 227.673C686.954 225.975 688.013 224.197 689.755 223.849L701.5 221.5L704.354 234.034L693.259 236.81C691.712 237.197 690.133 236.306 689.664 234.782L687.476 227.673Z" fill="#1F2923"/>
</g>
<g id="Rectangle 76" filter="url(#filter250_d_35_312)">
<path d="M688.806 225.758C688.44 224.153 689.436 222.553 691.037 222.173L700.18 220L704 232.5L693.914 234.745C692.302 235.104 690.704 234.093 690.337 232.483L688.806 225.758Z" fill="#1F2923"/>
<path d="M688.806 225.758C688.44 224.153 689.436 222.553 691.037 222.173L700.18 220L704 232.5L693.914 234.745C692.302 235.104 690.704 234.093 690.337 232.483L688.806 225.758Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="75.2">
<path id="297" d="M673.523 228.278L676.423 239.151C676.801 240.57 677.071 241.585 677.171 242.382C677.27 243.165 677.194 243.66 676.948 244.069C676.703 244.479 676.302 244.779 675.565 245.061C674.815 245.348 673.792 245.588 672.362 245.923L655.368 249.9L650.105 228.369L666.93 224.346C668.287 224.022 669.256 223.791 670.018 223.712C670.765 223.636 671.24 223.715 671.635 223.95C672.03 224.186 672.325 224.566 672.613 225.26C672.906 225.967 673.164 226.93 673.523 228.278Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 7" filter="url(#filter251_d_35_312)">
<path d="M665.766 240.974C666.11 242.59 665.083 244.179 663.469 244.529L654.063 246.574L651.343 233.999L660.771 231.958C662.395 231.607 663.995 232.642 664.34 234.267L665.766 240.974Z" fill="#1F2923"/>
</g>
<g id="Rectangle 65" filter="url(#filter252_d_35_312)">
<path d="M666.766 238.974C667.11 240.59 666.083 242.179 664.469 242.529L655.063 244.574L652.343 231.999L661.771 229.958C663.395 229.607 664.995 230.642 665.34 232.267L666.766 238.974Z" fill="#1F2923"/>
<path d="M666.766 238.974C667.11 240.59 666.083 242.179 664.469 242.529L655.063 244.574L652.343 231.999L661.771 229.958C663.395 229.607 664.995 230.642 665.34 232.267L666.766 238.974Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="75.1">
<path id="296" d="M632.539 232.629L632.539 232.629L650.131 228.597L655.396 250.136L637.76 254.545C636.361 254.894 635.361 255.143 634.576 255.231C633.805 255.316 633.318 255.236 632.916 254.992C632.513 254.747 632.217 254.352 631.937 253.629C631.653 252.893 631.412 251.89 631.076 250.488L628.395 239.275C628.06 237.873 627.821 236.871 627.742 236.086C627.664 235.315 627.749 234.83 627.998 234.43C628.246 234.029 628.644 233.737 629.369 233.465C630.108 233.187 631.111 232.956 632.516 232.634L632.516 232.634L632.539 232.629Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 8" filter="url(#filter253_d_35_312)">
<path d="M639.712 239.917C639.319 238.306 640.306 236.682 641.917 236.291L651.343 233.999L655 246.5L644.853 248.681C643.264 249.023 641.693 248.038 641.308 246.459L639.712 239.917Z" fill="#1F2923"/>
</g>
<g id="Rectangle 70" filter="url(#filter254_d_35_312)">
<path d="M640.908 237.636C640.559 236.027 641.572 234.438 643.177 234.075L652.343 231.999L655.063 244.563L645.953 246.626C644.326 246.994 642.711 245.965 642.358 244.335L640.908 237.636Z" fill="#1F2923"/>
<path d="M640.908 237.636C640.559 236.027 641.572 234.438 643.177 234.075L652.343 231.999L655.063 244.563L645.953 246.626C644.326 246.994 642.711 245.965 642.358 244.335L640.908 237.636Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="74.2">
<path id="73_2" d="M596 248L615 265L619.312 259.825C619.757 259.292 620.373 258.929 621.055 258.799L627.397 257.591C629.084 257.27 630.158 255.6 629.75 253.932L625.708 237.397C625.316 235.794 623.704 234.809 622.099 235.191L604.874 239.292C604.304 239.428 603.786 239.727 603.384 240.154L596 248Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 11" filter="url(#filter255_d_35_312)">
<path d="M617.571 250.326C618.787 251.443 618.872 253.333 617.761 254.554L611.284 261.675L601.776 253.008L608.273 245.877C609.392 244.649 611.296 244.565 612.519 245.688L617.571 250.326Z" fill="#1F2923"/>
</g>
<g id="Rectangle 66" filter="url(#filter256_d_35_312)">
<path d="M618.571 248.326C619.787 249.443 619.872 251.333 618.761 252.554L612.284 259.675L602.776 251.008L609.273 243.877C610.392 242.649 612.296 242.565 613.519 243.688L618.571 248.326Z" fill="#1F2923"/>
<path d="M618.571 248.326C619.787 249.443 619.872 251.333 618.761 252.554L612.284 259.675L602.776 251.008L609.273 243.877C610.392 242.649 612.296 242.565 613.519 243.688L618.571 248.326Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="74.1">
<path id="Vector 147" d="M602.472 279.688L615 265L596 248L588 256.5L582.623 262.235C581.463 263.473 581.559 265.427 582.837 266.545L598.214 279.999C599.472 281.1 601.387 280.96 602.472 279.688Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Rectangle 12" filter="url(#filter257_d_35_312)">
<path d="M595.728 264.231C594.512 263.123 594.415 261.241 595.512 260.014L601.775 253.008L611.278 261.666L605.052 268.63C603.94 269.873 602.028 269.971 600.795 268.848L595.728 264.231Z" fill="#1F2923"/>
</g>
<g id="Rectangle 71" filter="url(#filter258_d_35_312)">
<path d="M596.728 262.231C595.512 261.123 595.415 259.241 596.512 258.014L602.775 251.008L612.278 259.666L606.052 266.63C604.94 267.873 603.028 267.971 601.795 266.848L596.728 262.231Z" fill="#1F2923"/>
<path d="M596.728 262.231C595.512 261.123 595.415 259.241 596.512 258.014L602.775 251.008L612.278 259.666L606.052 266.63C604.94 267.873 603.028 267.971 601.795 266.848L596.728 262.231Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="69.4">
<path id="72_2" d="M549.416 303.029L559.5 311.5L591.5 275.5L582.19 267.404C580.969 266.343 579.126 266.44 578.024 267.626L549.148 298.689C547.979 299.946 548.102 301.925 549.416 303.029Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 197" filter="url(#filter259_d_35_312)">
<path d="M564.075 288.185L560.024 292.611C558.906 293.833 558.99 295.729 560.211 296.848L564.685 300.948C565.918 302.077 567.835 301.981 568.949 300.735L575 293.962L568.285 287.972C567.06 286.879 565.184 286.974 564.075 288.185Z" fill="#1F2923"/>
</g>
<g id="Vector 506" filter="url(#filter260_d_35_312)">
<path d="M565.075 286.185L561.024 290.611C559.906 291.833 559.99 293.729 561.211 294.848L565.685 298.948C566.918 300.077 568.835 299.981 569.949 298.735L576 291.962L569.285 285.972C568.06 284.879 566.184 284.974 565.075 286.185Z" fill="#1F2923"/>
<path d="M565.075 286.185L561.024 290.611C559.906 291.833 559.99 293.729 561.211 294.848L565.685 298.948C566.918 300.077 568.835 299.981 569.949 298.735L576 291.962L569.285 285.972C568.06 284.879 566.184 284.974 565.075 286.185Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="69.3">
<path id="298" d="M559 312L568.5 320.5L599.5 283.5L591 276L559 312Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 198" filter="url(#filter261_d_35_312)">
<path d="M574.21 294.045L569 300L578.604 308.62L586.5 299.5L578.212 293.58C576.956 292.683 575.226 292.885 574.21 294.045Z" fill="#1F2923"/>
</g>
<g id="Vector 510" filter="url(#filter262_d_35_312)">
<path d="M576.07 291.817L570.5 298.5L579.604 306.62L587.5 297.5L580.307 291.442C579.035 290.371 577.134 290.539 576.07 291.817Z" fill="#1F2923"/>
<path d="M576.07 291.817L570.5 298.5L579.604 306.62L587.5 297.5L580.307 291.442C579.035 290.371 577.134 290.539 576.07 291.817Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="69.2">
<path id="299" d="M569 320L578.5 328.5L610 291.5L600 283L569 320Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 449" filter="url(#filter263_d_35_312)">
<path d="M586.5 299.5L578.5 308.5L588.104 317.12L594.068 310.231C595.14 308.993 595.021 307.124 593.801 306.032L586.5 299.5Z" fill="#1F2923"/>
</g>
<g id="Vector 520" filter="url(#filter264_d_35_312)">
<path d="M587.5 297.5L579.5 306.5L589.104 315.12L595.068 308.231C596.14 306.993 596.021 305.124 594.801 304.032L587.5 297.5Z" fill="#1F2923"/>
<path d="M587.5 297.5L579.5 306.5L589.104 315.12L595.068 308.231C596.14 306.993 596.021 305.124 594.801 304.032L587.5 297.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="69.1">
<path id="300" d="M578.5 328.5L587.745 336.539C588.992 337.624 590.881 337.496 591.97 336.253L620.02 304.258C621.113 303.011 620.988 301.114 619.74 300.023L610 291.5L578.5 328.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 448" filter="url(#filter265_d_35_312)">
<path d="M597.361 325.022L601.319 320.417C602.388 319.173 602.259 317.3 601.03 316.214L594 310L587.959 317.174C586.881 318.454 587.058 320.367 588.352 321.427L593.185 325.387C594.445 326.419 596.299 326.257 597.361 325.022Z" fill="#1F2923"/>
</g>
<g id="Vector 508" filter="url(#filter266_d_35_312)">
<path d="M598.361 323.022L602.319 318.417C603.388 317.173 603.259 315.3 602.03 314.214L595 308L588.959 315.174C587.881 316.454 588.058 318.367 589.352 319.427L594.185 323.387C595.445 324.419 597.299 324.257 598.361 323.022Z" fill="#1F2923"/>
<path d="M598.361 323.022L602.319 318.417C603.388 317.173 603.259 315.3 602.03 314.214L595 308L588.959 315.174C587.881 316.454 588.058 318.367 589.352 319.427L594.185 323.387C595.445 324.419 597.299 324.257 598.361 323.022Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="68.4">
<path id="71_2" d="M626.772 302.005L641.5 315L625.5 333.5L608.5 318.5L622.518 302.292C623.609 301.03 625.521 300.901 626.772 302.005Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 533" filter="url(#filter267_d_35_312)">
<path d="M623.495 316.13L617.5 322.5L627.5 331.5L635 322.5L627.68 315.951C626.467 314.865 624.61 314.945 623.495 316.13Z" fill="#1F2923"/>
<path d="M623.495 316.13L617.5 322.5L627.5 331.5L635 322.5L627.68 315.951C626.467 314.865 624.61 314.945 623.495 316.13Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="68.3">
<path id="302" d="M608.5 318.5L625.5 333.5L607.5 353.5L592.816 340.975C591.542 339.889 591.404 337.971 592.508 336.713L608.5 318.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 530" filter="url(#filter268_d_35_312)">
<path d="M617 325L610.981 331.772C609.885 333.005 609.99 334.891 611.216 335.995L619 343L627 334L617 325Z" fill="#1F2923"/>
</g>
<g id="Vector 534" filter="url(#filter269_d_35_312)">
<path d="M617.5 322.5L611.481 329.272C610.385 330.505 610.49 332.391 611.716 333.495L619.5 340.5L627.5 331.5L617.5 322.5Z" fill="#1F2923"/>
<path d="M617.5 322.5L611.481 329.272C610.385 330.505 610.49 332.391 611.716 333.495L619.5 340.5L627.5 331.5L617.5 322.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="68.2">
<path id="301" d="M657.02 332.28L642.5 349L625.5 333.5L641.5 315L656.707 328.035C657.971 329.118 658.112 331.023 657.02 332.28Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 531" filter="url(#filter270_d_35_312)">
<path d="M634.5 325L627 334L636.5 342.5L642.146 335.725C643.18 334.484 643.046 332.646 641.842 331.569L634.5 325Z" fill="#1F2923"/>
</g>
<g id="Vector 535" filter="url(#filter271_d_35_312)">
<path d="M635 322.5L627.5 331.5L637 340L642.646 333.225C643.68 331.984 643.546 330.146 642.342 329.069L635 322.5Z" fill="#1F2923"/>
<path d="M635 322.5L627.5 331.5L637 340L642.646 333.225C643.68 331.984 643.546 330.146 642.342 329.069L635 322.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="68.1">
<path id="303" d="M625.5 333.5L642.5 349L626.959 366.318C625.87 367.531 624.011 367.653 622.774 366.592L607.5 353.5L625.5 333.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 532" filter="url(#filter272_d_35_312)">
<path d="M626.5 333L618 342L626.256 349.469C627.492 350.588 629.403 350.484 630.511 349.238L636.5 342.5L626.5 333Z" fill="#1F2923"/>
</g>
<g id="Vector 536" filter="url(#filter273_d_35_312)">
<path d="M627.5 331.5L619.5 340.5L626.757 346.993C627.995 348.1 629.896 347.992 631 346.75L637 340L627.5 331.5Z" fill="#1F2923"/>
<path d="M627.5 331.5L619.5 340.5L626.757 346.993C627.995 348.1 629.896 347.992 631 346.75L637 340L627.5 331.5Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="67.4">
<path id="304" d="M661.772 333.005L676.5 346L660.5 364.5L643.5 349.5L657.518 333.292C658.609 332.03 660.521 331.901 661.772 333.005Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 528" filter="url(#filter274_d_35_312)">
<path d="M656.995 347.63L651 354L661 363L668.5 354L661.18 347.451C659.967 346.365 658.11 346.445 656.995 347.63Z" fill="#1F2923"/>
<path d="M656.995 347.63L651 354L661 363L668.5 354L661.18 347.451C659.967 346.365 658.11 346.445 656.995 347.63Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="67.3">
<path id="305" d="M643.5 349.5L660.5 364.5L643 384L628.312 371.472C627.04 370.387 626.9 368.472 628.001 367.214L643.5 349.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 523" filter="url(#filter275_d_35_312)">
<path d="M650.5 356.5L644.481 363.272C643.385 364.505 643.49 366.391 644.716 367.495L652.5 374.5L660.5 365.5L650.5 356.5Z" fill="#1F2923"/>
</g>
<g id="Vector 529" filter="url(#filter276_d_35_312)">
<path d="M651 354L644.981 360.772C643.885 362.005 643.99 363.891 645.216 364.995L653 372L661 363L651 354Z" fill="#1F2923"/>
<path d="M651 354L644.981 360.772C643.885 362.005 643.99 363.891 645.216 364.995L653 372L661 363L651 354Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="67.2">
<path id="307" d="M691.515 362.785L677 379.5L660.5 364.5L676.5 346L691.197 358.536C692.466 359.618 692.609 361.526 691.515 362.785Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 524" filter="url(#filter277_d_35_312)">
<path d="M668 356.5L660.5 365.5L670 374L675.646 367.225C676.68 365.984 676.546 364.146 675.342 363.069L668 356.5Z" fill="#1F2923"/>
</g>
<g id="Vector 527" filter="url(#filter278_d_35_312)">
<path d="M668.5 354L661 363L670.5 371.5L676.146 364.725C677.18 363.484 677.046 361.646 675.842 360.569L668.5 354Z" fill="#1F2923"/>
<path d="M668.5 354L661 363L670.5 371.5L676.146 364.725C677.18 363.484 677.046 361.646 675.842 360.569L668.5 354Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="67.1">
<path id="306" d="M660.5 364.5L677 379.5L662.012 397.133C660.912 398.427 658.959 398.551 657.705 397.407L643 384L660.5 364.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 525" filter="url(#filter279_d_35_312)">
<path d="M660.5 365.5L652 374L659.764 380.987C660.998 382.098 662.899 381.995 664.006 380.758L670.5 373.5L660.5 365.5Z" fill="#1F2923"/>
</g>
<g id="Vector 526" filter="url(#filter280_d_35_312)">
<path d="M661 363L653 372L660.257 378.493C661.495 379.6 663.396 379.492 664.5 378.25L670.5 371.5L661 363Z" fill="#1F2923"/>
<path d="M661 363L653 372L660.257 378.493C661.495 379.6 663.396 379.492 664.5 378.25L670.5 371.5L661 363Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="66.4">
<path id="308" d="M697.272 364.005L712 377L696.5 395.5L679 380.5L693.018 364.292C694.109 363.03 696.021 362.901 697.272 364.005Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 500" filter="url(#filter281_d_35_312)">
<path d="M692.995 377.63L687 384L697 393L704.5 384L697.18 377.451C695.967 376.365 694.11 376.445 692.995 377.63Z" fill="#1F2923"/>
<path d="M692.995 377.63L687 384L697 393L704.5 384L697.18 377.451C695.967 376.365 694.11 376.445 692.995 377.63Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="66.3">
<path id="309" d="M679 380.5L696.5 395.5L678.5 415L663.769 402.002C662.519 400.899 662.407 398.989 663.521 397.748L679 380.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 461" filter="url(#filter282_d_35_312)">
<path d="M686.5 386.5L680.481 393.272C679.385 394.505 679.49 396.391 680.716 397.495L688.5 404.5L696.5 395.5L686.5 386.5Z" fill="#1F2923"/>
</g>
<g id="Vector 501" filter="url(#filter283_d_35_312)">
<path d="M687 384L680.981 390.772C679.885 392.005 679.99 393.891 681.216 394.995L689 402L697 393L687 384Z" fill="#1F2923"/>
<path d="M687 384L680.981 390.772C679.885 392.005 679.99 393.891 681.216 394.995L689 402L697 393L687 384Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="66,2">
<path id="311" d="M727.057 394.247L713 410.5L696.5 395.5L712 377L726.773 390.035C728.006 391.123 728.133 393.002 727.057 394.247Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 458" filter="url(#filter284_d_35_312)">
<path d="M704 386.5L696.5 395.5L706 404L711.646 397.225C712.68 395.984 712.546 394.146 711.342 393.069L704 386.5Z" fill="#1F2923"/>
</g>
<g id="Vector 498" filter="url(#filter285_d_35_312)">
<path d="M704.5 384L697 393L706.5 401.5L712.146 394.725C713.18 393.484 713.046 391.646 711.842 390.569L704.5 384Z" fill="#1F2923"/>
<path d="M704.5 384L697 393L706.5 401.5L712.146 394.725C713.18 393.484 713.046 391.646 711.842 390.569L704.5 384Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="66,1">
<path id="310" d="M696.5 395.5L713 410.5L697.983 428.167C696.894 429.448 694.966 429.584 693.708 428.47L678.5 415L696.5 395.5Z" fill="#ECD5A2" stroke="#364C3F"/>
<g id="Vector 459" filter="url(#filter286_d_35_312)">
<path d="M696.5 395.5L688.5 404.5L695.757 410.993C696.995 412.1 698.896 411.992 700 410.75L706 404L696.5 395.5Z" fill="#1F2923"/>
</g>
<g id="Vector 499" filter="url(#filter287_d_35_312)">
<path d="M697 393L689 402L696.257 408.493C697.495 409.6 699.396 409.492 700.5 408.25L706.5 401.5L697 393Z" fill="#1F2923"/>
<path d="M697 393L689 402L696.257 408.493C697.495 409.6 699.396 409.492 700.5 408.25L706.5 401.5L697 393Z" stroke="#364C3F" stroke-width="0.5"/>
</g>
</g>
<g id="&#208;&#148;&#208;&#158;&#208;&#160;&#208;&#158;&#208;&#147;&#208;&#152;">
<path id="&#208;&#186;&#209;&#128;&#209;&#131;&#208;&#179;" d="M691.5 258L635 273C626 277 624 283.5 633.994 291.362L686 336C695.73 340.675 699.937 339.28 704.5 327.5L713.5 297.5C716.57 289.557 716.357 284.26 713.5 275L709.5 259.5C705.937 254.026 702.616 255.928 691.5 258Z" fill="#364C3F" stroke="white"/>
<g id="&#208;&#180;&#208;&#190;&#209;&#128;&#208;&#190;&#208;&#179;&#208;&#184;_&#208;&#163;&#209;&#128;&#208;&#188;&#208;&#176;&#208;&#189; 1" clip-path="url(#clip1_35_312)">
<g id="Group_2">
<path id="Vector_1367" d="M324.348 601.55L336.954 618.114L344.055 628.451L358.496 648.567L373.337 669.801L383.629 682.134L405.291 704.964L420.81 720.251L440.437 737.733L458.19 751.024L480.49 767.828L510.251 784.631L529.479 794.489L547.711 803.031L562.272 809.217L579.306 815.564L599.133 822.149L629.771 830.651L650.636 834.881L679.119 839.751L705.529 841.587L735.768 842.585L758.148 841.547L779.97 840.23L800.316 838.553L814.358 835.56L827.842 832.567L850.781 827.138L867.097 822.548L889.278 815.045L909.743 807.9L940.701 796.525L948.599 793.811L956.498 791.336L964.477 789.061L972.535 786.986L980.474 785.15L983.187 784.751L986.059 784.351L988.971 783.992L991.884 783.753L994.956 783.513L998.666 783.154L1002.22 782.915L1005.77 782.795L1009.28 782.755L1012.91 782.795L1026.67 783.154L1039.68 784.831L1050.01 786.507L1066.56 791.097L1070.27 792.055L1073.71 793.132L1077.02 794.37L1080.33 795.807L1083.84 797.563L1096.17 802.991L1109.69 811.333L1125.77 822.987L1140.25 834.961L1140.17 834.921L1400.55 1060.59" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1368" d="M1403.14 1065.8C1403.04 1063.78 1402.12 1061.89 1400.59 1060.56" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1369" d="M1401.37 1070.97C1402.54 1069.6 1403.17 1067.85 1403.14 1066.05" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1370" d="M1401.35 1071.01L1320.09 1166" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1371" d="M1330.54 1166L1407.25 1076.28" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1372" d="M1417.71 1075.46C1414.61 1072.8 1409.93 1073.16 1407.28 1076.27" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1373" d="M1417.67 1075.48L1523.46 1166" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1374" d="M1533.48 1166L1422.49 1069.81" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1375" d="M1419.98 1064.95C1420.17 1066.83 1421.07 1068.56 1422.49 1069.8" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1376" d="M971.219 678.781L890.235 608.494L827.643 554.253L787.55 519.488L770.116 504.361" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1377" d="M768.6 494.975C766.772 498.055 767.41 502.006 770.116 504.348" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1378" d="M1100.35 768.187L1096.48 754.058" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1379" d="M1096.51 754.037C1095.58 750.738 1094.6 747.458 1093.56 744.199" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1380" d="M1093.55 744.199C1092.84 741.97 1092.06 739.762 1091.22 737.587" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1381" d="M1091.18 737.573C1089.16 732.425 1086.34 727.622 1082.85 723.338" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1382" d="M1082.87 723.358C1078.78 718.282 1073.5 714.297 1067.5 711.763" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1383" d="M1067.52 711.77C1064.95 710.666 1062.29 709.761 1059.58 709.056" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1384" d="M1059.57 709.042C1049.27 706.454 1038.54 706.062 1028.08 707.891" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1385" d="M1028.06 707.871C1022 708.956 1016.16 711.031 1010.78 714.025" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1386" d="M978.081 778.125L979.078 777.885L982.11 777.407L985.142 776.967L988.213 776.648L991.285 776.369L994.357 776.129L998.067 775.77L1001.82 775.531L1005.57 775.371L1009.32 775.331L1013.07 775.371L1027.23 775.73L1040.75 777.486L1051.6 779.282L1068.48 783.912L1079.25 786.706L1091.22 792.134L1091.66 792.334" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1387" d="M1091.67 792.321C1094.03 793.385 1096.78 793.139 1098.9 791.669C1101.04 790.199 1102.25 787.724 1102.1 785.143" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1388" d="M1102.1 785.15C1102.04 784.079 1101.96 783.008 1101.88 781.943" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1389" d="M1101.91 781.943C1101.57 777.067 1101.01 772.204 1100.25 767.375" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1390" d="M991.804 706.92L929.969 652.718" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1391" d="M1617.73 620.269L1524.06 728.433L1520.47 732.744L1516.96 737.134L1513.57 741.645L1510.3 746.235L1507.19 750.904L1504.19 755.694L1501.36 760.563L1498.65 765.473L1496.06 770.462L1493.62 775.531L1491.31 780.68L1489.16 785.908L1487.16 791.137L1485.29 796.485L1483.61 801.833L1482.05 807.222L1480.62 812.69L1479.38 818.198L1478.26 823.706L1477.35 829.254L1476.55 834.842L1475.91 840.429L1475.43 846.017L1475.11 851.645L1474.95 857.273V862.9L1475.11 868.528L1475.39 874.156L1475.87 879.784L1476.51 885.372L1477.27 890.919L1478.22 896.507L1479.3 902.015L1480.54 907.483L1481.93 912.951L1483.49 918.38L1485.17 923.728L1487.04 929.036L1489.04 934.305L1491.15 939.533L1493.46 944.682L1495.86 949.751L1498.45 954.74L1501.16 959.69L1504 964.559L1506.99 969.309L1510.1 974.018L1513.33 978.608L1516.72 983.119L1520.19 987.549L1523.82 991.859L1527.57 996.05L1531.4 1000.16L1535.35 1004.15L1539.46 1008.02L1543.61 1011.82L1622 1080.47" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1392" d="M1498.65 985.753L1502.04 990.383L1505.55 994.893L1509.14 999.323L1512.89 1003.67L1516.72 1007.9L1520.63 1012.06L1524.7 1016.09L1528.85 1020.04L1533.08 1023.87L1622 1101.74" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1393" d="M1605.64 609.772L1513.41 716.3" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1394" d="M1503 717.045C1506.09 719.719 1510.76 719.386 1513.44 716.3" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1395" d="M1503 717.058L1275.05 519.489" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1396" d="M1274.14 509.231C1271.63 512.337 1272.04 516.867 1275.05 519.475" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1397" d="M1274.13 509.231L1362.89 399.19" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1398" d="M769.371 493.904C769.085 494.237 768.826 494.595 768.6 494.974" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1399" d="M769.358 493.944L841.127 411.085" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1400" d="M851.579 410.3C848.487 407.625 843.819 407.958 841.14 411.045" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1401" d="M851.539 410.326L877.15 432.478L877.789 441.618L959.251 512.184" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1402" d="M966.871 510.229L1046.22 579.039" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1403" d="M1046.9 588.299L1112.04 644.736L1119.74 642.78L1134.14 655.233" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1404" d="M1135.15 665.377C1137.59 662.271 1137.17 657.794 1134.18 655.206" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1405" d="M1135.1 665.371L1125.53 677.584" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1406" d="M1108.85 712.987L1134.74 681.855L1142.4 672.435" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1407" d="M1152.97 671.491C1151.46 670.18 1149.48 669.535 1147.49 669.708C1145.49 669.881 1143.66 670.852 1142.39 672.409" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1408" d="M1152.97 671.517L1166.9 683.611" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1409" d="M971.219 678.781L1001.42 704.964" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1410" d="M1001.42 704.951C1003.69 706.914 1006.91 707.319 1009.59 705.976" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1411" d="M1010.08 705.689C1009.91 705.776 1009.74 705.856 1009.57 705.942" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1412" d="M1026.68 700.275C1020.93 701.299 1015.34 703.128 1010.09 705.703" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1413" d="M1061.54 701.552C1050.14 698.671 1038.27 698.239 1026.68 700.275" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1414" d="M1085.32 714.431C1078.66 708.131 1070.45 703.694 1061.54 701.579" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1415" d="M1085.31 714.397C1086.81 715.814 1088.82 716.539 1090.88 716.406C1092.93 716.273 1094.84 715.288 1096.14 713.692" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1416" d="M1096.09 713.705L1096.92 712.668L1125.53 677.584" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1417" d="M1459.08 854.439L1459 860.226L1459.08 866.054L1459.27 871.841L1459.67 877.628L1460.19 883.416L1460.91 889.203L1461.75 894.951L1462.75 900.658L1463.9 906.366L1465.18 912.033L1466.66 917.661L1468.25 923.209L1470.01 928.757L1471.88 934.265L1473.96 939.693L1476.11 945.081L1478.46 950.39L1480.94 955.658L1483.53 960.847L1486.28 965.956" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1418" d="M1485.44 974.404C1487.51 972.056 1487.87 968.663 1486.35 965.929" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1419" d="M1485.4 974.417L1465.86 996.729" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1420" d="M1451.26 1013.37L1415.59 1054.12" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1421" d="M1405.22 1054.83C1408.3 1057.5 1412.95 1057.18 1415.63 1054.11" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1422" d="M1405.18 1054.84L1377.85 1031.13L1337.72 996.37L1267.79 935.742L1243.73 914.867" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1423" d="M852.303 396.264C851.446 397.255 851.02 398.539 851.113 399.843C851.206 401.146 851.811 402.357 852.802 403.215" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1424" d="M852.297 396.317L862.549 384.463" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1425" d="M871.206 387.749C871.239 385.68 869.969 383.811 868.035 383.072C866.1 382.334 863.912 382.886 862.556 384.449" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1426" d="M871.206 387.736L870.887 408.211" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1427" d="M862.775 411.836C864.225 413.094 866.266 413.393 868.015 412.608C869.763 411.823 870.9 410.1 870.927 408.184" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1428" d="M862.749 411.883L852.815 403.262" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1429" d="M1226.98 900.379L1157.76 840.389L1112.52 801.155" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1430" d="M1110.01 795.461C1109.98 797.643 1110.92 799.718 1112.56 801.148" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1431" d="M1109.99 795.481C1110.11 785.662 1109.4 775.843 1107.85 766.145" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1432" d="M1107.86 766.138C1106.96 760.424 1105.67 754.782 1104.01 749.241" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1433" d="M1104.01 749.248C1102.4 743.86 1100.31 738.624 1097.77 733.609" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1434" d="M1098.63 725.573C1096.78 727.841 1096.44 730.988 1097.76 733.602" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1435" d="M1098.6 725.599L1108.85 712.987" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1436" d="M1046.9 588.298L1046.22 579.039" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1437" d="M959.251 512.184L966.871 510.229" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1438" d="M1166.9 683.611L1167.57 692.911L1232.72 749.308L1240.42 747.352" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1439" d="M1112.04 644.736L1119.74 642.78" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1440" d="M324.348 601.55L336.954 618.114L344.055 628.451L358.496 648.567L373.337 669.801L383.629 682.134L405.291 704.964L420.81 720.251L440.437 737.733L458.19 751.024L480.49 767.828L510.251 784.631L529.479 794.489L547.711 803.031L562.272 809.217L579.306 815.564L599.133 822.149L629.771 830.651L650.636 834.881L679.119 839.751L705.529 841.587L735.768 842.585L758.148 841.547L779.97 840.23L800.316 838.553L814.358 835.56L827.842 832.567L850.781 827.138L867.097 822.548L889.278 815.045L909.743 807.9L940.701 796.525L948.599 793.811L956.498 791.336L964.477 789.061L972.535 786.986L980.474 785.15L983.187 784.751L986.059 784.351L988.971 783.992L991.884 783.753L994.956 783.513L998.666 783.154L1002.22 782.915L1005.77 782.795L1009.28 782.755L1012.91 782.795L1026.67 783.154L1039.68 784.83L1050.01 786.507L1066.56 791.097L1070.27 792.055L1073.71 793.132L1077.02 794.37L1080.33 795.807L1083.84 797.563L1096.17 802.991L1109.69 811.333L1125.77 822.987L1140.25 834.961L1140.17 834.921L1394.81 1055.6" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1441" d="M1399.63 1050.01L1377.85 1031.13L1337.72 996.37L1267.79 935.742L1243.73 914.867" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1442" d="M1226.98 900.379L1157.76 840.389L1112.52 801.155" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1443" d="M1110.01 795.461C1109.98 797.643 1110.92 799.718 1112.56 801.148" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1444" d="M1109.99 795.481C1110.11 785.662 1109.4 775.843 1107.85 766.145" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1445" d="M1107.86 766.138C1106.96 760.424 1105.67 754.782 1104.01 749.241" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1446" d="M1104.01 749.248C1102.29 743.48 1100.02 737.893 1097.23 732.564" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1447" d="M971.219 678.781L890.235 608.495" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1448" d="M705.21 457.863L745.741 493.026" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1449" d="M746.526 503.443C749.199 500.35 748.866 495.674 745.781 493" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1450" d="M746.499 503.423C725.03 525.675 705.642 549.849 688.581 575.646" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1451" d="M688.574 575.646L676.646 594.206" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1452" d="M682.989 598.117L694.917 579.558" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1453" d="M752.065 508.26C730.855 530.198 711.719 554.06 694.904 579.538" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1454" d="M762.497 507.488C759.405 504.814 754.731 505.146 752.058 508.233" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1455" d="M762.497 507.515L808.215 547.188" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1456" d="M808.786 557.838C810.169 556.368 810.901 554.399 810.794 552.383C810.695 550.368 809.777 548.479 808.248 547.155" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1457" d="M808.78 557.818C739.738 630.979 697.883 725.626 690.21 825.954" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1458" d="M681.6 832.66C683.654 833.012 685.762 832.48 687.404 831.203C689.046 829.919 690.077 828.01 690.23 825.927" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1459" d="M681.593 832.686L651.992 827.617L631.487 823.426L624.466 821.471" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1460" d="M619.1 813.794C618.841 817.306 621.088 820.519 624.472 821.471" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1461" d="M619.724 806.364C619.505 808.831 619.299 811.299 619.113 813.767" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1462" d="M644.339 691.274C631.513 728.5 623.249 767.149 619.725 806.37" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1463" d="M644.339 691.274C649.751 691.261 654.366 687.343 655.263 682.001C656.161 676.66 653.082 671.451 647.969 669.662C642.856 667.879 637.205 670.034 634.585 674.777C631.966 679.52 633.142 685.454 637.371 688.84" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1464" d="M603.96 466.244L531.394 409.289" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1465" d="M536.514 403.887C538.695 398.951 537.006 393.164 532.511 390.184C528.023 387.197 522.033 387.889 518.336 391.807C514.639 395.731 514.3 401.752 517.538 406.062C520.776 410.373 526.647 411.723 531.447 409.262" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1466" d="M536.501 403.9L608.428 460.377" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1467" d="M697.61 826.147C697.457 828.116 698.096 830.058 699.385 831.555C700.675 833.052 702.504 833.963 704.472 834.103" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1468" d="M814.797 562.195C746.619 634.119 705.236 727.316 697.597 826.14" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1469" d="M825.01 561.69C822.018 559.095 817.516 559.315 814.797 562.189" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1470" d="M824.97 561.716L868.573 599.474" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1471" d="M869.318 609.891C871.991 606.798 871.658 602.122 868.573 599.448" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1472" d="M869.311 609.885C812.37 669.102 777.271 745.948 769.784 827.783" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1473" d="M762.969 833.87C766.366 833.664 769.186 831.156 769.797 827.803" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1474" d="M762.936 833.844L757.749 834.163L735.728 835.201L705.928 834.203L704.452 834.123" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1475" d="M753.361 489.82C756.453 492.494 761.12 492.161 763.8 489.075" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1476" d="M753.361 489.833L707.085 449.72" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1477" d="M706.34 439.263C703.667 442.356 704 447.033 707.085 449.707" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1478" d="M706.327 439.303L759.066 378.396" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1479" d="M759.079 378.343C766.905 369.309 771.293 357.794 771.466 345.84" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1480" d="M771.473 345.867L772.709 263.007" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1481" d="M772.743 262.994C772.816 258.038 772.237 253.089 771.027 248.279" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1482" d="M770.994 248.279L759.305 201.94L745.702 148.217" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1483" d="M751.047 139.224C749.146 139.703 747.51 140.92 746.506 142.61C745.502 144.299 745.21 146.315 745.688 148.217" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1484" d="M751.047 139.237L837.895 117.285" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1485" d="M763.773 489.115L865.701 371.411" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1486" d="M865.727 371.411C866.871 370.094 867.509 368.418 867.536 366.675" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1487" d="M867.496 366.662L871.206 118.482" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1488" d="M871.206 118.455C871.239 116.154 870.202 113.965 868.4 112.535C866.599 111.105 864.232 110.599 861.997 111.165" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1489" d="M861.991 111.218L751.047 139.237" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1490" d="M676.659 594.212C671.374 593.088 666.041 595.935 664.033 600.958C662.025 605.98 663.927 611.721 668.528 614.555C673.136 617.388 679.113 616.49 682.683 612.433C686.26 608.375 686.393 602.328 683.003 598.117" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1491" d="M705.21 457.863L702.298 455.348" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1492" d="M702.298 455.322C699.332 452.754 694.877 452.94 692.145 455.761" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1493" d="M692.151 455.761C605.037 545.479 552.624 663.249 544.26 788.057" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1494" d="M544.253 788.03C544.047 791.077 545.736 793.937 548.502 795.228" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1495" d="M548.509 795.248L550.743 796.285L565.024 802.352L581.74 808.579L602.365 815.444" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1496" d="M602.371 815.424C604.525 816.135 606.886 815.823 608.781 814.572C610.676 813.322 611.886 811.273 612.079 809.011" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1497" d="M612.417 804.76C612.285 806.177 612.165 807.594 612.045 809.011" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1498" d="M637.325 688.866C624.406 726.358 616.048 765.266 612.418 804.76" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1499" d="M641.068 504.481C625.543 525.409 611.56 547.441 599.246 570.404" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1500" d="M641.081 504.521C643.468 501.301 642.863 496.758 639.712 494.283" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1501" d="M639.665 494.303L541.647 417.311" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1502" d="M485.078 614.867C471.002 650.49 461.109 687.635 455.597 725.546" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1503" d="M443.529 730.143C445.584 731.866 448.409 732.338 450.916 731.38C453.423 730.422 455.211 728.187 455.597 725.533" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1504" d="M420.531 709.554L426.156 714.863L431.86 720.052L437.645 725.16L443.549 730.19" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1505" d="M404.613 693.509L389.134 677.225L379.201 665.291L375.331 659.743" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1506" d="M375.564 650.909C373.543 653.477 373.443 657.062 375.311 659.736" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1507" d="M375.571 650.922L379.4 645.933L383.111 640.864L386.701 635.715L390.172 630.447L393.483 625.138L396.714 619.71L399.786 614.242L402.738 608.694L405.571 603.066L408.243 597.399L410.797 591.651L413.19 585.824L415.464 579.957L417.578 574.05L419.573 568.103" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1508" d="M419.6 568.083C424.819 566.759 428.33 561.876 427.924 556.508C427.519 551.139 423.31 546.842 417.951 546.323C412.592 545.804 407.638 549.217 406.209 554.406C404.779 559.594 407.293 565.062 412.16 567.364" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1509" d="M373.935 640.904L377.685 635.715L381.315 630.447L384.826 625.098L388.177 619.63L391.408 614.122L394.52 608.494L397.472 602.827L400.265 597.079L402.938 591.252L405.451 585.385L407.844 579.438L410.039 573.411L412.153 567.384" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1510" d="M361.994 640.764C363.37 642.687 365.577 643.831 367.938 643.857C370.298 643.877 372.532 642.773 373.942 640.877" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1511" d="M362.007 640.784L350.119 624.181L342.938 613.803L336.714 605.581" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1512" d="M430.823 472.75L586.846 580.875" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1513" d="M434.932 466.604L588.522 573.012" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1514" d="M589.805 588.904C590.649 585.864 589.479 582.631 586.886 580.835" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1515" d="M588.515 573.012C590.25 574.216 592.411 574.615 594.459 574.123C596.507 573.63 598.249 572.287 599.246 570.424" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1516" d="M686.008 451.497C674.758 462.519 664.505 474.513 655.37 487.339" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1517" d="M686.014 451.536C687.431 450.073 688.175 448.097 688.089 446.062C688.002 444.026 687.078 442.124 685.542 440.793" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1518" d="M685.502 440.82L669.306 426.77L540.809 315.373" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1519" d="M540.849 315.346C540.643 315.167 540.423 315.001 540.197 314.841" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1520" d="M540.131 314.894L493.855 283.043" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1521" d="M493.875 283.03C490.504 280.715 485.902 281.567 483.582 284.939" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1522" d="M483.602 284.959L459.825 319.524L387.419 424.974" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1523" d="M387.406 424.954C385.092 428.327 385.943 432.93 389.314 435.252" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1524" d="M389.294 435.232L434.932 466.604" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1525" d="M1374.98 826.46H1374.5" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1526" d="M1342.27 814.386C1351.23 822.142 1362.67 826.42 1374.52 826.42" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1527" d="M1342.27 814.406L1232.88 719.613L1162.67 658.745" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1528" d="M1161.76 648.488C1159.25 651.594 1159.66 656.124 1162.67 658.732" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1529" d="M1161.75 648.527L1259.41 527.471" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1530" d="M1270.02 526.487C1268.5 525.169 1266.52 524.531 1264.52 524.71C1262.51 524.89 1260.67 525.875 1259.42 527.431" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1531" d="M1269.98 526.513L1498.09 724.242" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1532" d="M1499.31 734.068C1501.52 730.961 1501.01 726.677 1498.12 724.176" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1533" d="M1499.29 734.101L1495.98 738.89L1492.79 743.76L1489.71 748.749L1486.8 753.778L1484.01 758.887L1481.34 764.115L1478.82 769.344L1476.47 774.692L1474.23 780.081L1472.16 785.549L1470.25 791.017L1468.45 796.565L1466.81 802.192L1465.34 807.82L1464.02 813.488L1462.83 819.195L1461.83 824.943" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1534" d="M1454.11 831.116C1457.89 831.342 1461.23 828.668 1461.85 824.93" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1535" d="M1454.09 831.13L1374.98 826.46" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1536" d="M1356.39 393.523L1154.65 641.742" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1537" d="M1144.12 642.647C1145.63 643.957 1147.61 644.603 1149.61 644.43C1151.6 644.257 1153.45 643.279 1154.71 641.722" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1538" d="M1144.08 642.66L882.775 416.193L887.243 116.406" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1539" d="M887.243 116.407C887.31 111.81 885.235 107.439 881.632 104.586C878.028 101.732 873.301 100.721 868.846 101.845" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1540" d="M868.853 101.838L578.668 175.159" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1541" d="M578.668 175.145C577.338 175.478 576.128 176.183 575.171 177.161" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1542" d="M575.197 177.194L485.078 269.952" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1543" d="M485.058 269.919C484.765 270.218 484.499 270.544 484.267 270.883" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1544" d="M484.28 270.91L453.762 315.333L292.114 550.661" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1545" d="M292.1 550.641C290.292 553.275 290.372 556.767 292.306 559.315" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1546" d="M292.313 559.322L324.347 601.55" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1547" d="M430.823 472.75L385.145 441.339" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1548" d="M385.165 441.285C381.794 438.97 377.193 439.822 374.873 443.195" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1549" d="M374.853 443.255L301.209 550.421" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1550" d="M301.236 550.401C299.427 553.035 299.507 556.528 301.442 559.076" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1551" d="M301.409 559.082L336.714 605.581" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1552" d="M498.642 266.56L579.027 183.82" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1553" d="M582.538 181.771C581.208 182.104 579.998 182.809 579.04 183.787" stroke="#FDFDFE" stroke-width="0.84" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1554" d="M498.662 266.526C497.139 268.089 496.388 270.245 496.607 272.413C496.82 274.582 497.984 276.551 499.779 277.782" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1555" d="M359.613 651.443L360.093 650.882" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1556" d="M404.613 693.509L420.531 709.554" stroke="#FDFDFE" stroke-width="0.84" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1557" d="M589.785 588.897C560.836 648.301 543.136 712.554 537.591 778.404" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1558" d="M526.953 784.411C529.147 785.509 531.74 785.443 533.881 784.239C536.022 783.034 537.425 780.853 537.631 778.405" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1559" d="M526.926 784.431L520.424 781.238L513.841 778.125L513.761 778.085L484.52 761.641L464.094 746.234" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1560" d="M461.195 739.436C460.883 742.05 461.986 744.638 464.094 746.221" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1561" d="M491.96 617.621C476.514 656.729 466.189 697.674 461.248 739.429" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1562" d="M491.933 617.628C497.345 617.854 502.126 614.149 503.263 608.854C504.4 603.559 501.554 598.217 496.527 596.201C491.501 594.192 485.756 596.095 482.93 600.718C480.105 605.335 481.016 611.322 485.085 614.887" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1563" d="M890.235 608.494L827.643 554.253L787.55 519.488L770.116 504.361" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1564" d="M769.372 493.904C768.089 495.388 767.444 497.324 767.583 499.279C767.723 501.235 768.634 503.058 770.116 504.348" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1565" d="M644.771 488.895C646.36 490.146 648.395 490.684 650.396 490.398C652.398 490.112 654.193 489.015 655.37 487.365" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1566" d="M644.771 488.915L546.713 411.923" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1567" d="M1100.35 768.187L1096.48 754.058" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1568" d="M1096.51 754.037C1095.58 750.738 1094.6 747.458 1093.56 744.199" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1569" d="M1093.55 744.199C1092.84 741.97 1092.06 739.762 1091.22 737.587" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1570" d="M1091.18 737.573C1089.16 732.425 1086.34 727.622 1082.85 723.338" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1571" d="M1082.87 723.358C1078.78 718.282 1073.5 714.297 1067.5 711.763" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1572" d="M1067.52 711.77C1064.95 710.666 1062.29 709.761 1059.58 709.056" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1573" d="M1059.57 709.042C1049.27 706.454 1038.54 706.062 1028.08 707.891" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1574" d="M1028.06 707.871C1012 711.5 1009.88 715.007 1004.5 718" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1575" d="M978.081 778.125L979.078 777.885L982.11 777.407L985.142 776.967L988.213 776.648L991.285 776.369L994.357 776.129L998.067 775.77L1001.82 775.531L1005.57 775.371L1009.32 775.331L1013.07 775.371L1027.23 775.73L1040.75 777.486L1051.6 779.282L1068.48 783.912L1079.25 786.706L1091.22 792.134L1091.66 792.334" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1576" d="M1091.67 792.321C1094.03 793.385 1096.78 793.139 1098.9 791.669C1101.04 790.199 1102.25 787.724 1102.1 785.143" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1577" d="M1102.1 785.15C1102.04 784.079 1101.96 783.008 1101.88 781.943" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1578" d="M1101.91 781.943C1101.57 777.067 1101.01 772.204 1100.25 767.375" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1579" d="M971.219 678.781L1001.42 704.964" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1580" d="M1001.42 704.951C1003.69 706.914 1006.91 707.319 1009.59 705.976" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1581" d="M1010.08 705.689C1009.91 705.776 1009.74 705.856 1009.57 705.942" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1582" d="M1026.68 700.275C1020.93 701.299 1015.34 703.128 1010.09 705.703" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1583" d="M1061.54 701.552C1050.14 698.671 1038.27 698.239 1026.68 700.275" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1584" d="M1080.87 710.672C1075.12 706.341 1068.54 703.242 1061.54 701.585" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1585" d="M1085.21 714.597C1083.9 713.133 1082.46 711.809 1080.89 710.639" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1586" d="M499.759 277.815L543.163 307.67" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1587" d="M543.522 307.922C543.422 307.829 543.316 307.743 543.203 307.663" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1588" d="M543.482 307.949L673.893 420.983L690.33 435.192" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1589" d="M690.33 435.219C693.421 437.893 698.096 437.56 700.768 434.474" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1590" d="M700.742 434.474L731.539 398.871" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1591" d="M731.566 398.871C732.849 397.388 733.494 395.452 733.355 393.49C733.215 391.527 732.297 389.705 730.815 388.421" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1592" d="M730.821 388.454L613.535 286.995" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1593" d="M612.783 276.504C610.111 279.598 610.45 284.274 613.541 286.948" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1594" d="M612.777 276.538L621.274 266.759" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1595" d="M625.077 264.391C623.601 264.763 622.278 265.575 621.287 266.726" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1596" d="M625.064 264.404L703.494 244.687" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1597" d="M709.598 245.818C707.836 244.561 705.609 244.142 703.508 244.674" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1598" d="M709.558 245.845L730.861 260.972" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1599" d="M730.861 260.958C732.623 262.209 734.844 262.628 736.945 262.109" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1600" d="M736.925 262.129L757.909 256.861" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1601" d="M757.929 256.841C759.837 256.362 761.473 255.144 762.483 253.461C763.494 251.772 763.787 249.756 763.308 247.847" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1602" d="M763.255 247.88L738.561 150.013" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1603" d="M738.614 149.974C737.61 146.009 733.587 143.607 729.625 144.605" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1604" d="M729.585 144.665L582.498 181.824" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1605" d="M621.48 275.906C618.807 278.999 619.146 283.676 622.238 286.35" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1606" d="M621.474 275.939L624.665 272.267" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1607" d="M628.468 269.899C626.992 270.271 625.669 271.083 624.678 272.234" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1608" d="M628.455 269.912L702.218 251.353" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1609" d="M708.361 252.484C706.599 251.226 704.372 250.807 702.271 251.339" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1610" d="M708.321 252.51L729.585 267.637" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1611" d="M729.585 267.624C731.347 268.874 733.567 269.293 735.668 268.775" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1612" d="M735.648 268.755L756.034 263.686" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1613" d="M765.249 270.963C765.283 268.662 764.245 266.48 762.45 265.05C760.648 263.619 758.288 263.114 756.061 263.666" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1614" d="M765.209 270.95L764.093 345.747" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1615" d="M753.501 373.506C760.19 365.783 763.94 355.945 764.086 345.734" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1616" d="M753.481 373.526L745.263 383.066" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1617" d="M734.857 383.817C737.949 386.492 742.617 386.152 745.289 383.066" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1618" d="M734.851 383.824L622.232 286.356" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1619" d="M883.653 809.097L911.299 799.438L864.903 815.484L861.632 816.402" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1620" d="M852.39 810.681C852.782 812.716 854.006 814.492 855.768 815.577C857.529 816.661 859.664 816.967 861.658 816.402" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1621" d="M852.377 810.694L848.587 791.097" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1622" d="M848.64 790.139C848.54 790.438 848.52 790.758 848.58 791.071" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1623" d="M848.627 790.179L863.427 745.157L869.092 727.914" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1624" d="M870.162 726.737C869.657 726.943 869.271 727.355 869.105 727.874" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1625" d="M870.169 726.757L885.528 720.451" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1626" d="M887.483 720.75C886.951 720.291 886.213 720.165 885.561 720.431" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1627" d="M887.443 720.77L948.799 774.174" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1628" d="M946.392 786.746C948.892 785.888 950.747 783.759 951.252 781.158C951.758 778.564 950.84 775.89 948.845 774.154" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1629" d="M946.365 786.746L938.227 789.54L911.299 799.439" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1630" d="M885.328 613.976C882.237 611.302 877.563 611.635 874.89 614.721" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1631" d="M885.289 614.002L929.969 652.718" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1632" d="M1004.5 718L929.969 652.718" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1633" d="M874.93 614.721C820.05 671.457 785.921 745.07 778.075 823.632" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1634" d="M778.055 823.599C777.643 825.861 778.308 828.189 779.857 829.899C781.4 831.602 783.654 832.493 785.947 832.307" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1635" d="M785.914 832.327L799.239 831.209L812.802 828.336L826.167 825.382L841.047 821.83" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1636" d="M841.06 821.83C844.923 820.912 847.37 817.12 846.619 813.222" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1637" d="M846.592 813.248L842.523 792.254" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1638" d="M842.802 788.216C842.377 789.513 842.29 790.897 842.549 792.234" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1639" d="M842.802 788.223L857.603 743.201L863.267 725.999" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1640" d="M867.829 721.049C865.661 721.941 863.999 723.73 863.268 725.952" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1641" d="M867.815 721.089L883.214 714.743" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1642" d="M891.519 716.107C889.238 714.118 886.033 713.592 883.234 714.743" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1643" d="M891.472 716.14C955 769.5 956.5 778 978 778" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1644" d="M1218.8 893.274L1243.73 914.867" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1645" d="M1451.26 1013.37L1465.86 996.729" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1646" d="M1240.46 747.352L1331.78 826.54" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1647" d="M1331.8 826.486C1343.66 836.764 1358.83 842.425 1374.52 842.425" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1648" d="M1374.5 842.465L1452.13 847.055" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1649" d="M1459.12 854.419C1459.12 850.501 1456.06 847.261 1452.15 847.028" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1650" d="M1421.78 1059.33C1420.48 1060.81 1419.82 1062.74 1419.96 1064.71" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1651" d="M1421.78 1059.35L1486.92 984.955" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1652" d="M1498.66 985.726C1497.39 983.797 1495.29 982.573 1492.99 982.413C1490.68 982.253 1488.44 983.185 1486.92 984.921" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1653" d="M1356.39 393.523L1362.89 399.191" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1654" d="M1605.64 609.772L1617.73 620.269" stroke="#FDFDFE" stroke-width="1.14" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1655" d="M1326.07 1159.02H1336.52" stroke="#FDFDFE" stroke-width="0.84" stroke-linecap="round" stroke-linejoin="round"/>
<path id="Vector_1656" d="M1515.29 1159.02H1525.38" stroke="#FDFDFE" stroke-width="0.84" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<path id="Rectangle 262" d="M966.539 766.377L1005.35 723.356C1011.99 717.467 1025.73 712.621 1040.02 711.937C1054.32 711.253 1068.99 714.741 1077.6 725.298C1091.09 745.331 1093.15 759.24 1095.8 777.161C1095.86 777.571 1095.93 777.983 1095.99 778.398C1096.38 781.028 1093.8 783.165 1091.27 782.32C1048.8 768.164 1013.17 766.512 982.355 771.934C977.265 772.829 972.018 772.323 967.333 770.193C965.846 769.517 965.445 767.59 966.539 766.377Z" stroke="white"/>
</g>
</g>

<?

$res=$mysql->query("SELECT * FROM urman");
while($path=$res->fetch_assoc()){
    
    if ($path['status']=='Продано') $fill='#ab363b';
    else if ($path['status']=='Бронь') $fill='#7d725d';
     else if ($path['status']=='Свободно') $fill='#EDD0B5';
       else if ($path['status']=='Строительство') $fill='#fff';
          else if ($path['status']=='Готовый дом') $fill='#4caf50';
    echo '<path onclick="showw2(`'.$path['number'].'`,`'.$path['status'].'`)" id="'.$path['number'].'" d="'.$path['d'].'" fill="'.$fill.'" />';
}
?>

</g>
<defs>
<filter id="filter0_d_35_312" x="907.474" y="760.943" width="15.6126" height="16.2844" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter1_d_35_312" x="908.161" y="758.693" width="16.1755" height="16.8477" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter2_d_35_312" x="896.442" y="763.939" width="15.3448" height="16.2759" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter3_d_35_312" x="897.192" y="761.624" width="15.9071" height="16.8413" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter4_d_35_312" x="1295.23" y="844.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter5_d_35_312" x="1337.23" y="880.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter6_d_35_312" x="1379.23" y="916.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter7_d_35_312" x="1415.69" y="944.233" width="39.5555" height="39.5791" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter8_d_35_312" x="1405.09" y="971.601" width="35.5152" height="30.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter9_d_35_312" x="1265.7" y="890.771" width="41.3499" height="40.9927" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter10_d_35_312" x="1296.35" y="917.672" width="40.7081" height="40.4133" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter11_d_35_312" x="1326.53" y="944.021" width="40.8035" height="40.467" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter12_d_35_312" x="1337.23" y="878.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter13_d_35_312" x="1295.23" y="842.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter14_d_35_312" x="1379.23" y="914.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter15_d_35_312" x="1415.69" y="942.233" width="39.5555" height="39.5791" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter16_d_35_312" x="1405.09" y="969.601" width="35.5152" height="30.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter17_d_35_312" x="1265.7" y="888.771" width="41.3499" height="40.9927" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter18_d_35_312" x="1296.35" y="915.672" width="40.7081" height="40.4133" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter19_d_35_312" x="1326.53" y="942.021" width="40.8035" height="40.467" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter20_d_35_312" x="1295.23" y="840.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter21_d_35_312" x="1337.23" y="876.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter22_d_35_312" x="1379.23" y="912.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter23_d_35_312" x="1415.69" y="940.233" width="39.5555" height="39.5791" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter24_d_35_312" x="1405.09" y="967.601" width="35.5152" height="30.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter25_d_35_312" x="1295.23" y="838.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter26_d_35_312" x="1337.23" y="874.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter27_d_35_312" x="1379.23" y="910.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter28_d_35_312" x="1415.69" y="938.233" width="39.5555" height="39.5791" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter29_d_35_312" x="1405.09" y="965.601" width="35.5152" height="30.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter30_d_35_312" x="1295.23" y="836.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter31_d_35_312" x="1337.23" y="872.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter32_d_35_312" x="1379.23" y="908.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter33_d_35_312" x="1415.69" y="936.233" width="39.5555" height="39.5791" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter34_d_35_312" x="1405.09" y="963.601" width="35.5152" height="30.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter35_d_35_312" x="1295.23" y="834.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter36_d_35_312" x="1337.23" y="870.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter37_d_35_312" x="1379.23" y="906.233" width="35.7042" height="38.4651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter38_d_35_312" x="1415.69" y="934.233" width="39.5555" height="39.5791" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter39_d_35_312" x="1405.09" y="961.601" width="35.5152" height="30.7578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter40_d_35_312" x="1155.64" y="718.321" width="41.8526" height="41.531" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter41_d_35_312" x="1214.12" y="758.527" width="34.7794" height="34.9597" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter42_d_35_312" x="1239.44" y="780.784" width="33.3139" height="33.646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter43_d_35_312" x="1255.01" y="801.501" width="33.5133" height="36.0989" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter44_d_35_312" x="1168.63" y="799.635" width="35.0138" height="37.7571" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter45_d_35_312" x="1184.36" y="822.939" width="35.261" height="35.6743" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter46_d_35_312" x="1208.88" y="844.323" width="35.494" height="35.8777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter47_d_35_312" x="1120.92" y="756.313" width="39.7868" height="49.1807" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter48_d_35_312" x="1130.65" y="697.233" width="35.5332" height="36.0115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter49_d_35_312" x="1114.12" y="713.851" width="29.6371" height="46.4192" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter50_d_35_312" x="1155.64" y="716.321" width="41.8526" height="41.531" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter51_d_35_312" x="1214.12" y="756.527" width="34.7794" height="34.9597" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter52_d_35_312" x="1239.44" y="778.784" width="33.3139" height="33.646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter53_d_35_312" x="1255.01" y="799.501" width="33.5133" height="36.0989" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter54_d_35_312" x="1168.63" y="797.635" width="35.0138" height="37.7571" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter55_d_35_312" x="1184.36" y="820.939" width="35.261" height="35.6743" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter56_d_35_312" x="1208.88" y="842.323" width="35.494" height="35.8777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter57_d_35_312" x="1130.65" y="695.233" width="35.5332" height="36.0115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter58_d_35_312" x="1114.12" y="711.851" width="29.6371" height="46.4192" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter59_d_35_312" x="1155.64" y="714.321" width="41.8526" height="41.531" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter60_d_35_312" x="1214.12" y="754.527" width="34.7794" height="34.9597" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter61_d_35_312" x="1239.44" y="776.784" width="33.3139" height="33.646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter62_d_35_312" x="1255.01" y="797.501" width="33.5133" height="36.0989" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter63_d_35_312" x="1130.65" y="693.233" width="35.5332" height="36.0115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter64_d_35_312" x="1155.64" y="712.321" width="41.8526" height="41.531" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter65_d_35_312" x="1214.12" y="752.527" width="34.7794" height="34.9597" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter66_d_35_312" x="1239.44" y="774.784" width="33.3139" height="33.646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter67_d_35_312" x="1255.01" y="795.501" width="33.5133" height="36.0989" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter68_d_35_312" x="1130.65" y="691.233" width="35.5332" height="36.0115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter69_d_35_312" x="1155.64" y="710.321" width="41.8526" height="41.531" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter70_d_35_312" x="1214.12" y="750.527" width="34.7794" height="34.9597" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter71_d_35_312" x="1239.44" y="772.784" width="33.3139" height="33.646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter72_d_35_312" x="1255.01" y="793.501" width="33.5133" height="36.0989" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter73_d_35_312" x="1130.65" y="689.233" width="35.5332" height="36.0115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter74_d_35_312" x="1155.64" y="708.321" width="41.8526" height="41.531" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter75_d_35_312" x="1214.12" y="748.527" width="34.7794" height="34.9597" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter76_d_35_312" x="1239.44" y="770.784" width="33.3139" height="33.646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter77_d_35_312" x="1255.01" y="791.501" width="33.5133" height="36.0989" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter78_d_35_312" x="1130.65" y="687.233" width="35.5332" height="36.0115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter79_d_35_312" x="1120.92" y="754.313" width="39.7868" height="49.1807" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter80_d_35_312" x="881.474" y="736.943" width="15.6126" height="16.2844" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter81_d_35_312" x="882.161" y="734.693" width="16.1755" height="16.8477" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter82_d_35_312" x="870.442" y="739.939" width="15.3448" height="16.2759" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter83_d_35_312" x="871.192" y="737.624" width="15.9071" height="16.8413" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter84_d_35_312" x="870.474" y="772.943" width="15.6126" height="16.2844" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter85_d_35_312" x="871.161" y="770.693" width="16.1755" height="16.8477" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter86_d_35_312" x="859.442" y="775.939" width="15.3448" height="16.2759" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter87_d_35_312" x="860.192" y="773.624" width="15.9071" height="16.8413" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter88_d_35_312" x="945.886" y="534.804" width="34.4825" height="37.1125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter89_d_35_312" x="970.707" y="548.585" width="33.8557" height="34.1812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter90_d_35_312" x="994.959" y="569.74" width="34.3794" height="34.5928" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter91_d_35_312" x="945.886" y="532.804" width="34.4825" height="37.1125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter92_d_35_312" x="970.707" y="546.585" width="33.8557" height="34.1812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter93_d_35_312" x="994.959" y="567.74" width="34.3794" height="34.5928" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter94_d_35_312" x="945.886" y="530.804" width="34.4825" height="37.1125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter95_d_35_312" x="970.707" y="544.585" width="33.8557" height="34.1812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter96_d_35_312" x="994.959" y="565.74" width="34.3794" height="34.5928" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter97_d_35_312" x="945.886" y="528.804" width="34.4825" height="37.1125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter98_d_35_312" x="970.707" y="542.585" width="33.8557" height="34.1812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter99_d_35_312" x="994.959" y="563.74" width="34.3794" height="34.5928" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter100_d_35_312" x="945.886" y="526.804" width="34.4825" height="37.1125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter101_d_35_312" x="970.707" y="540.585" width="33.8557" height="34.1812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter102_d_35_312" x="994.959" y="561.74" width="34.3794" height="34.5928" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter103_d_35_312" x="945.886" y="524.804" width="34.4825" height="37.1125" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter104_d_35_312" x="970.707" y="538.585" width="33.8557" height="34.1812" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter105_d_35_312" x="994.959" y="559.74" width="34.3794" height="34.5928" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter106_d_35_312" x="1082.71" y="656.776" width="28.0453" height="37.147" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter107_d_35_312" x="1050.5" y="670.14" width="32.7016" height="23.177" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter108_d_35_312" x="1034.38" y="613.749" width="47.8744" height="40.7507" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter109_d_35_312" x="992.223" y="655.817" width="57.7775" height="34.9822" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter110_d_35_312" x="910.233" y="583.778" width="37.1336" height="37.5015" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter111_d_35_312" x="936.243" y="606.347" width="34.9839" height="35.5688" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter112_d_35_312" x="960.072" y="617.337" width="35.384" height="38.2312" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter113_d_35_312" x="1082.71" y="654.776" width="28.0453" height="37.147" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter114_d_35_312" x="1050.5" y="668.14" width="32.7016" height="23.177" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter115_d_35_312" x="1034.38" y="611.749" width="47.8744" height="40.7507" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter116_d_35_312" x="992.223" y="653.817" width="57.7775" height="34.9822" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter117_d_35_312" x="910.233" y="581.778" width="37.1336" height="37.5015" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter118_d_35_312" x="936.243" y="604.347" width="34.9839" height="35.5688" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter119_d_35_312" x="960.072" y="615.337" width="35.384" height="38.2312" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter120_d_35_312" x="1082.71" y="652.776" width="28.0453" height="37.147" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter121_d_35_312" x="1050.5" y="666.14" width="32.7016" height="23.177" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter122_d_35_312" x="1034.38" y="609.749" width="47.8744" height="40.7507" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter123_d_35_312" x="992.223" y="651.817" width="57.7775" height="34.9822" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter124_d_35_312" x="910.233" y="579.778" width="37.1336" height="37.5015" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter125_d_35_312" x="936.243" y="602.347" width="34.9839" height="35.5688" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter126_d_35_312" x="960.072" y="613.337" width="35.384" height="38.2312" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter127_d_35_312" x="1082.71" y="650.776" width="28.0453" height="37.147" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter128_d_35_312" x="1050.5" y="664.14" width="32.7016" height="23.177" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter129_d_35_312" x="1034.38" y="607.749" width="47.8744" height="40.7507" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter130_d_35_312" x="992.223" y="649.817" width="57.7775" height="34.9822" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter131_d_35_312" x="1082.71" y="648.776" width="28.0453" height="37.147" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter132_d_35_312" x="1034.38" y="605.749" width="47.8744" height="40.7507" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter133_d_35_312" x="1082.71" y="646.776" width="28.0453" height="37.147" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter134_d_35_312" x="1034.38" y="603.749" width="47.8744" height="40.7507" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter135_d_35_312" x="944.643" y="712.936" width="18.7038" height="17.9233" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter136_d_35_312" x="937.723" y="723" width="17.277" height="19" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter137_d_35_312" x="937.973" y="720.146" width="17.8789" height="19.708" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter138_d_35_312" x="955.5" y="723" width="15.299" height="17" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter139_d_35_312" x="954.653" y="720.141" width="16.9377" height="19.2178" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter140_d_35_312" x="946" y="730.5" width="19.5" height="18.7141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter141_d_35_312" x="946.648" y="729.146" width="18.7048" height="17.8608" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter142_d_35_312" x="910.643" y="682.436" width="18.7038" height="17.9233" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter143_d_35_312" x="903.723" y="692.5" width="17.277" height="19" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter144_d_35_312" x="903.973" y="689.646" width="17.8789" height="19.708" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter145_d_35_312" x="920.5" y="692.5" width="16.3412" height="18.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter146_d_35_312" x="920.653" y="689.641" width="16.9377" height="19.2178" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter147_d_35_312" x="912" y="699.5" width="20" height="19.2686" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter148_d_35_312" x="912.648" y="698.646" width="18.7048" height="17.8608" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter149_d_35_312" x="813.473" y="750.706" width="14.0305" height="14.51" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter150_d_35_312" x="814.223" y="748.456" width="14.5306" height="15.052" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter151_d_35_312" x="809.931" y="763.216" width="13.6248" height="15.2161" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter152_d_35_312" x="810.681" y="760.928" width="14.1249" height="15.7959" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter153_d_35_312" x="806.089" y="776.299" width="13.9163" height="15.7009" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter154_d_35_312" x="806.839" y="774.012" width="14.4163" height="16.2849" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter155_d_35_312" x="802.138" y="790.161" width="13.5831" height="14.7935" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter156_d_35_312" x="802.888" y="787.871" width="14.0833" height="15.3328" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter157_d_35_312" x="833.473" y="688.49" width="14.0305" height="14.51" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter158_d_35_312" x="834.223" y="687.24" width="14.5306" height="15.052" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter159_d_35_312" x="829.931" y="701" width="13.6248" height="15.2161" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter160_d_35_312" x="830.681" y="699.712" width="14.1249" height="15.7959" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter161_d_35_312" x="826.142" y="714.083" width="13.6248" height="15.2161" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter162_d_35_312" x="826.892" y="712.795" width="14.1249" height="15.7959" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter163_d_35_312" x="822.138" y="727.944" width="13.5831" height="14.7935" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter164_d_35_312" x="822.888" y="726.655" width="14.0833" height="15.3328" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter165_d_35_312" x="873.766" y="638.061" width="13.9142" height="15.7646" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter166_d_35_312" x="873.394" y="635.898" width="14.4143" height="16.3557" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter167_d_35_312" x="866.339" y="647.824" width="15.7401" height="17.4917" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter168_d_35_312" x="865.862" y="645.57" width="16.3464" height="18.1816" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter169_d_35_312" x="857.943" y="656.817" width="17.0029" height="16.771" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter170_d_35_312" x="857.462" y="654.552" width="17.7108" height="17.3723" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter171_d_35_312" x="848.875" y="665.494" width="15.6251" height="15.5181" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter172_d_35_312" x="848.504" y="663.385" width="16.1631" height="15.9861" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter173_d_35_312" x="827.943" y="433.414" width="42.0163" height="41.7026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter174_d_35_312" x="858.682" y="460.19" width="41.2546" height="41.0588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter175_d_35_312" x="888.75" y="486.439" width="42.1673" height="41.8037" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter176_d_35_312" x="827.943" y="431.414" width="42.0163" height="41.7026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter177_d_35_312" x="858.682" y="458.19" width="41.2546" height="41.0588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter178_d_35_312" x="888.75" y="484.439" width="42.1673" height="41.8037" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter179_d_35_312" x="827.943" y="429.414" width="42.0163" height="41.7026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter180_d_35_312" x="858.682" y="456.19" width="41.2546" height="41.0588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter181_d_35_312" x="888.75" y="482.439" width="42.1673" height="41.8037" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter182_d_35_312" x="827.943" y="427.414" width="42.0163" height="41.7026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter183_d_35_312" x="858.682" y="454.19" width="41.2546" height="41.0588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter184_d_35_312" x="888.75" y="480.439" width="42.1673" height="41.8037" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter185_d_35_312" x="827.943" y="425.414" width="42.0163" height="41.7026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter186_d_35_312" x="858.682" y="452.19" width="41.2546" height="41.0588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter187_d_35_312" x="888.75" y="478.439" width="42.1673" height="41.8037" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter188_d_35_312" x="827.943" y="423.414" width="42.0163" height="41.7026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter189_d_35_312" x="858.682" y="450.19" width="41.2546" height="41.0588" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter190_d_35_312" x="888.75" y="476.439" width="42.1673" height="41.8037" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter191_d_35_312" x="788.233" y="473.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter192_d_35_312" x="824.233" y="505.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter193_d_35_312" x="860.233" y="536.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter194_d_35_312" x="788.233" y="471.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter195_d_35_312" x="824.233" y="503.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter196_d_35_312" x="860.233" y="534.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter197_d_35_312" x="788.233" y="469.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter198_d_35_312" x="824.233" y="501.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter199_d_35_312" x="860.233" y="532.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter200_d_35_312" x="788.233" y="467.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter201_d_35_312" x="824.233" y="499.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter202_d_35_312" x="860.233" y="530.233" width="33.2762" height="35.2529" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter203_d_35_312" x="725.755" y="429.228" width="16.264" height="15.5264" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter204_d_35_312" x="726.505" y="425.978" width="16.8671" height="16.0264" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter205_d_35_312" x="735.5" y="434.714" width="18.0073" height="16.7864" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter206_d_35_312" x="736.17" y="432.003" width="18.2071" height="17.3491" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter207_d_35_312" x="745" y="441.56" width="16.7891" height="18.6235" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter208_d_35_312" x="745.147" y="438.663" width="17.4211" height="19.3328" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter209_d_35_312" x="753.719" y="452.075" width="15.2915" height="17.0684" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter210_d_35_312" x="754.469" y="448.719" width="15.7915" height="17.6753" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter211_d_35_312" x="796" y="210" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter212_d_35_312" x="793" y="361" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter213_d_35_312" x="814" y="314" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter214_d_35_312" x="815" y="266" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter215_d_35_312" x="796" y="208" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter216_d_35_312" x="793" y="359" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter217_d_35_312" x="814" y="312" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter218_d_35_312" x="815" y="264" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter219_d_35_312" x="796" y="206" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter220_d_35_312" x="793" y="357" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter221_d_35_312" x="814" y="310" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter222_d_35_312" x="815" y="262" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter223_d_35_312" x="796" y="204" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter224_d_35_312" x="793" y="355" width="31" height="33.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter225_d_35_312" x="814" y="308" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter226_d_35_312" x="815" y="260" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter227_d_35_312" x="814" y="306" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter228_d_35_312" x="815" y="258" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter229_d_35_312" x="814" y="304" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter230_d_35_312" x="815" y="256" width="28" height="24.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dy="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.0790104 0 0 0 0 0.170833 0 0 0 0 0.116574 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter231_d_35_312" x="737.55" y="318.023" width="15.5236" height="17.3625" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter232_d_35_312" x="738.55" y="316.023" width="15.5236" height="17.3625" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter233_d_35_312" x="733.593" y="329.685" width="15.015" height="18.2397" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter234_d_35_312" x="734.593" y="327.685" width="15.015" height="18.2397" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter235_d_35_312" x="729.039" y="341.647" width="15.5458" height="18.7061" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter236_d_35_312" x="730.039" y="339.647" width="15.5458" height="18.7061" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter237_d_35_312" x="725.939" y="355.074" width="15.7782" height="17.6526" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter238_d_35_312" x="726.939" y="353.074" width="15.7782" height="17.6526" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter239_d_35_312" x="742" y="277.909" width="12.6449" height="10.4556" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter240_d_35_312" x="743.071" y="275.659" width="13.9515" height="13.5913" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter241_d_35_312" x="741.978" y="286.5" width="14.0194" height="15.4258" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter242_d_35_312" x="743.179" y="287.25" width="13.855" height="12.925" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter243_d_35_312" x="730.247" y="215.767" width="15.2892" height="15.3181" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter244_d_35_312" x="730.997" y="213.517" width="15.8412" height="15.8672" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter245_d_35_312" x="732.167" y="227.207" width="15.5881" height="15.2952" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter246_d_35_312" x="733.197" y="224.907" width="15.8257" height="16.1335" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter247_d_35_312" x="698.68" y="219.783" width="15.0698" height="15.7622" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter248_d_35_312" x="699.381" y="217.533" width="15.6191" height="16.3118" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter249_d_35_312" x="686.842" y="221.5" width="17.5115" height="16.4001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter250_d_35_312" x="687.98" y="219.702" width="16.3381" height="16.3655" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter251_d_35_312" x="650.843" y="231.89" width="14.9896" height="15.6846" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter252_d_35_312" x="651.546" y="229.64" width="15.5368" height="16.2322" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter253_d_35_312" x="639.125" y="233.999" width="15.8746" height="15.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter254_d_35_312" x="640.089" y="231.699" width="15.2709" height="16.2515" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter255_d_35_312" x="601.276" y="244.898" width="17.2664" height="17.7771" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter256_d_35_312" x="601.922" y="242.648" width="17.8695" height="18.3804" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter257_d_35_312" x="594.249" y="253.008" width="17.029" height="17.6223" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter258_d_35_312" x="594.999" y="250.653" width="17.6304" height="18.2271" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter259_d_35_312" x="558.737" y="287.21" width="16.2626" height="15.5254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter260_d_35_312" x="559.487" y="284.96" width="16.8657" height="16.0254" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter261_d_35_312" x="568.5" y="293.021" width="18" height="16.5991" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter262_d_35_312" x="569.653" y="290.487" width="18.2017" height="17.4885" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter263_d_35_312" x="578" y="299.5" width="16.8002" height="18.6201" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter264_d_35_312" x="578.648" y="297.146" width="17.4023" height="19.3296" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter265_d_35_312" x="586.753" y="310" width="15.2901" height="17.0662" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter266_d_35_312" x="587.503" y="307.643" width="15.7901" height="17.6731" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter267_d_35_312" x="616.643" y="314.936" width="18.7038" height="17.9233" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter268_d_35_312" x="609.723" y="325" width="17.277" height="19" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter269_d_35_312" x="609.973" y="322.146" width="17.8789" height="19.708" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter270_d_35_312" x="626.5" y="325" width="16.3412" height="18.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter271_d_35_312" x="626.653" y="322.141" width="16.9377" height="19.2178" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter272_d_35_312" x="617.5" y="333" width="19" height="18.2449" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter273_d_35_312" x="618.648" y="331.146" width="18.7048" height="17.8608" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter274_d_35_312" x="650.143" y="346.436" width="18.7038" height="17.9233" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter275_d_35_312" x="643.223" y="356.5" width="17.277" height="19" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter276_d_35_312" x="643.473" y="353.646" width="17.8789" height="19.708" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter277_d_35_312" x="660" y="356.5" width="16.3412" height="18.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter278_d_35_312" x="660.153" y="353.641" width="16.9377" height="19.2178" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter279_d_35_312" x="651.5" y="365.5" width="19" height="17.2573" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter280_d_35_312" x="652.148" y="362.646" width="18.7048" height="17.8608" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter281_d_35_312" x="686.143" y="376.436" width="18.7038" height="17.9233" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter282_d_35_312" x="679.223" y="386.5" width="17.277" height="19" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter283_d_35_312" x="679.473" y="383.646" width="17.8789" height="19.708" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter284_d_35_312" x="696" y="386.5" width="16.3412" height="18.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter285_d_35_312" x="696.153" y="383.641" width="16.9377" height="19.2178" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter286_d_35_312" x="688" y="395.5" width="18" height="17.2573" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter287_d_35_312" x="688.148" y="392.646" width="18.7048" height="17.8608" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 0 0.658333 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<filter id="filter288_d_35_312" x="686.122" y="161.21" width="35.7809" height="54.6367" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-1" dy="1"/>
<feGaussianBlur stdDeviation="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.134931 0 0 0 0 0.241667 0 0 0 0 0.178595 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_35_312"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_35_312" result="shape"/>
</filter>
<clipPath id="clip0_35_312">
<rect width="1728" height="1212" fill="white"/>
</clipPath>
<clipPath id="clip1_35_312">
<rect width="1452" height="1120" fill="white" transform="translate(170 46)"/>
</clipPath>
</defs>
</svg>


 
<script>
 function showw2(id,status){
        $(".mlctr-underlayer").show();
        $(".mlctr-underlayer").css('opacity','1');
         $(".mlctr-underlayer").css('pointer-events','auto');
             $(".mlctr-popup").css('opacity','1');
              $("#number").html(id);
                $("#inputNumber").val(id);
               $("#status").html(status);
              
            // $("#vport").attr('content','width=device-width, initial-scale=2');
            // $("#vport").attr('content','width=device-width, initial-scale=1');
      
       //       $('html,body').animate({
  //  scrollTop: $(this).offset().top - ( $(window).height() - $(this).outerHeight(true) ) / 2
//}, 200);                            
   
   
   
   
    }
    
    
        $(".mlctr-underlayer").click(function(){
        $(".mlctr-underlayer").css('opacity','0');
         $(".mlctr-underlayer").hide();
         $(".mlctr-underlayer").css('pointer-events','none');
             // $(".modal2-wrap").css('opacity','0');
              

        
    });
    
    function hidee2(){
            $(".mlctr-underlayer").hide();
                $(".mlctr-underlayer").css('opacity','0');
         $(".mlctr-underlayer").css('pointer-events','none');
             $(".mlctr-popup").css('opacity','0');
    }
    
    
      $(".mlctr-popup").click(function(event){
        
          event.stopPropagation();
    });
    




$( "1path11" ).each(function( index ) {
    
           $.ajax({
      method: "POST",
      dataType: "html",
      url: "mapAdd.php",
           data: {
        "id": $(this).attr('id'),
        "d": $(this).attr('d'),
     "fill": $(this).attr('fill')
     
      }
    })
        .done(function (data) {
      
   });
 
});
</script>

                        </div>
                    </div>
                </div>
            </section>

            
            <!-- End Footer
            ================================================== -->

            <div data-dsn-grid="progress-circle" data-dsn-grid-stroke="#fff">
                <div class="icon__fixed" data-dsn-grid="parallax">
                    <i class="fas fa-angle-up"></i>
                </div>
            </div>

            
        </div>
    </main>
    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/dsn-grid.js"></script>
    <script src="assets/js/custom.js"></script>
<!-- Roistat Counter Start -->
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init?referrer="+encodeURIComponent(d.location.href);
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', 'b1e98b15beceb494b0afd84cb26f028d');
</script>
<!-- Roistat Counter End -->
</body>

</html>