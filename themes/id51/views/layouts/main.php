<!DOCTYPE html>
<html lang="en">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>        
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/grid_120.css" type="text/css" mmedia="screen, projection">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style000.css" type="text/css" mmedia="screen, projection">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/css00000.css" type="text/css" mmedia="screen, projection">
    <!--[if IE 6]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie7.css" type="text/css" media="screen" /><![endif]-->


    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
  <!--slider-->
<style type="text/css" media="screen">
  #wrapper{              
    width: 100%;     
    -webkit-user-select: none;          
  }
</style>
<!--/slider-->

</head>
<body>
   <header> 
       <div> 
          <div>                     
              <div class="logo"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo0000.png" alt=""></a></div>
              <nav>                              
                <?php
                  $this->widget('application.components.ArtMenu', array(
                      'cls' => 'menu',
                      'prelinklabel' => '<li>',
                      'postlinklabel' => '</li>',
                      'items' => array(
                          array('label' => 'Главная', 'url' => array('/site/index')),
                          array('label' => 'О нас', 'url' => array('/site/page', 'view' => 'about')),
                          array('label' => 'Создать сайт', 'url' => array('/site/contact')),
                          array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                          array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                      ),
                  ));
                ?>
<!--                 <ul class="menu">
                      <li><a href="index.html">Главная</a></li>
                      <li><a href="about.html">О нас</a></li>
                      <li><a href="sozdat_sait_murmansk.html">Создать сайт</a></li>
                      <li><a href="sait_vizitka_murmansk.html">Сайт-визитка</a></li>
                      <li><a href="internet_magazin_murmansk.html">Интернет-магазин</a></li>
                      <li><a href="services.html">Услуги</a></li>
                      <li><a href="contacts.html">Контакты</a></li>
                  </ul> -->
              </nav>
              <div class="clear"></div>
          </div>
      </div>
    </header> 
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="container_12">
            <div class="grid_6 box-1">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/page1-im.png" alt="">
                <div class="extra-wrap">
                    <h2>Лучшее решение!</h2>
                    <p>Сайт-визитка - это: три информационных раздела, свой уникальный адрес в интернете, привлекательный дизайн, круглосуточный доступ клиентов к информации о Вашей компании или продукте. И всего за 3890 рублей в срок 3-7 дней.</p>
                </div>
            </div>  
            <div class="grid_6 box-1">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/page1-in.png" alt="">
                <div class="extra-wrap">
                    <h2>Убедитесь сами!</h2>
                    <p>Разработка сайта с интересным и уникальным дизайном зачастую играет ведущую роль в процессе увеличения продаж – это источник успеха и процветания компании.</p>
                </div>
            </div>  
            <div class="grid_12 box-2">
                <div style="padding-top:30px; background-color:#f2f2f2;">
                 <?php echo $content; ?>
              </div>
            </div> 
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
    <div style="text-align:center">Создание сайта в Мурманске +7 (906) 286-07-45 <a href="contacts.html">Контакты</a><br/>
        Разработка сайтов в Мурманске. У нас вы можете заказать недорогой сайт. <a href='http://id51.ru'>id51.ru</a>
    </div>
  </footer> 
</body>
</html>
