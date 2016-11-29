<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" >
    
    <?php wp_head(); ?>
</head>

<body>
    <header class="hero">
        <nav class="main-menu  main-menu--opaque">
            <div class="container">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="СИПКомфорт логотип">
                <!--<ul class="main-menu__list">
                    <li class="main-menu__item">
                        <a href="technology.html" class="main-menu__link">Технология</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="all-projects.html" class="main-menu__link">Проекты</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="" class="main-menu__link">Наша работа</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="" class="main-menu__link">Услуги</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="about.html" class="main-menu__link">О компании</a>
                    </li>
                </ul>-->

                <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => 'main-menu__list',
                        'link_before' => '<span class="main-menu__link">',
                        'link_after' => '</span>'
                    );

                    wp_nav_menu($args);
                ?>

                <img class="menu-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-button.svg" alt="menu button">
            </div>
        </nav>

         <div class="container  container--relative">
            <h1 class="hero__header">В комфортную жизнь<br> с новым домом из СИП-панелей</h1>

            <p class="hero__text">У нас есть опыт производства малоэтажных домов для постоянного проживания, перекрытий и кровель для других типов домостроения. Производственные мощности позволяют удовлетворить как притязательного клиента, так и крупного заказчика на крупномасштабное коттеджное строительство. Наша стройгруппа способна решать вопросы не только монтажа в указанной комплектации «серого ключа», но и вести генподряд под «чистый ключ», включая изготовление ограждений участков, септиков, дренажных работ, планировки участков.</p>

            <div class="hero__address">
                Калининград<br> ул. Пехотная 43<br> +7(4012) 40-01-80<br> +7(902) 414-25-83 
            </div>
        </div>
    </header>



    <section class="section">
        <div class="container">
            <h2 class="section__header">
                Преимущества домов из СИП-панелей
            </h2>
            <p class="section__text">
                Строительство домов из СИП-панелей не только достаточно экономично, но также имеет ряд преимуществ, по сравнению с традиционными технологиями:
            </p>

            <div class="features">
                <div class="features__description">
                    <h3 class="features__title  features__title--active">
                        Экологичность
                    </h3>
                    <p class="features__text  features__text--active">
                        <img class="features__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/eco.png" alt="fast"> Дома из СИП-панелей отвечают всем требованиям экологической безопасности. ОСП и пенополистирол — экологически чистые материалы. Дома из СИП-панелей гипоалергенны, в них могут проживать люди, страдающие от аллергии или астмы.
                    </p>

                    <h3 class="features__title">
                        Скорость возведения
                    </h3>
                    <p class="features__text">
                        <img class="features__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fast.png" alt="fast"> Комплект дома предварительно изготавливается в цехе и на место строительства привозится в виде готовых к монтажу деталей: стен, перекрытий и кровли. Поэтому, мы можем обеспечить достаточно высокий темп строительства. В зависимости от проекта дома, возведение может занять от двух недель до двух месяцев.
                    </p>

                    <h3 class="features__title">
                        Термоизоляция
                    </h3>
                    <p class="features__text">
                        <img class="features__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/termo.png" alt="fast"> Дома из СИП очень энергоэффективны, что позовляет их хозяевам платить за отопление меньше, чем хозяевам обычных домов. Экономия может составлять до 45%. Дома из СИП имеют высокие тепловые характеристики, поэтому очень быстро прогреваются, что очень важно в межсезонье или тогда, когда загородное жилье используется периодически.
                    </p>

                    <h3 class="features__title">
                        Легкость отделки
                    </h3>
                    <p class="features__text">
                        <img class="features__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/decoration.png" alt="fast"> СИП-панели представляют собой идеально ровные гладкие плоскости, в большинстве случаев требующие лищь финишной отделки без какой-либо предварительной подготовки.
                    </p>

                    <h3 class="features__title">
                        Огнестойкость
                    </h3>
                    <p class="features__text">
                        <img class="features__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fire.png" alt="fast"> СИП-панели пропитываются специальным раствором огнебиозащиты для профилактики возгорания, а пенополистирол возгорается только при температуре в два раза выше температуры горения дерева. 
                    </p>
                </div>

                <ul class="features__list">
                    <li class="features__item">
                        <a href="#" class="features__link  features__link--active">Экологичность</a>
                    </li>
                    <li class="features__item">
                        <a href="#" class="features__link">Скорость возведения</a>
                    </li>
                    <li class="features__item">
                        <a href="#" class="features__link">Термоизоляция</a>
                    </li>
                    <li class="features__item">
                        <a href="#" class="features__link">Легкость отделки</a>
                    </li>
                    <li class="features__item">
                        <a href="#" class="features__link">Огнестойкость</a>
                    </li>
                </ul>
            </div>

            <a href="technology.html" class="button">Подробнее о преимуществах и недостатках</a>
        </div>
    </section>

    <section class="section  section--inverse">
        <div class="container">
            <h2 class="section__header section__header--inverse">
                Популярные проекты домов
            </h2>

            <div class="pop-projects">
                <?php 
                    $args = array(
                        'category_name' => 'popular_projects' 
                    );
                    
                    query_posts($args);

                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                            $project_name       = get_field('project_name');
                            $area               = get_field('area');
                            $price              = get_field('price');
                            $main_image         = get_field('main_image');
                ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="pop-project">
                                    <img src="<?php echo $main_image ?>" alt="проект дома предпросмотр" class="pop-project__image">
                                    <div class="pop-project__desc">
                                        <div class="pop-project__name">
                                            проект <span class="pop-project__name--inverse"><?php echo $project_name ?></span>
                                            <span class="pop-project__area"><?php echo $area ?>м<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                <?php
                        }
                    }
                ?>

                <!--<a href="">
                    <div class="pop-project">
                        <img src="img/pop-2.jpg" alt="проект дома предпросмотр" class="pop-project__image">
                        <div class="pop-project__desc">
                            <div class="pop-project__name">
                                проект <span class="pop-project__name--inverse">усадьба</span>
                                <span class="pop-project__area">156м<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="pop-project  pop-project--3rd">
                        <img src="img/pop-3.jpg" alt="проект дома предпросмотр" class="pop-project__image">
                        <div class="pop-project__desc">
                            <div class="pop-project__name">
                                проект <span class="pop-project__name--inverse">комфорт</span>
                                <span class="pop-project__area">175м<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                </a>-->
            </div>

            <a href="all-projects.html" class="button button--inverse">Смотреть все проекты</a>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <h2 class="section__header">
                Технология
            </h2>
            <p class="section__text">
                Структурно-Изолированная Панель (Structural Insulated Panel) — состоят из двух плит ОСП-3 (OSB-3) и теплоизолирующего слоя пенополистирола между ними.
            </p>
            <p class="section__text">
                СИП-панели обладают высокой несущей способностью и высокими термоизоляционными свойствами. Использование СИП-панелей позволяет уменьшить тольщину стен, тем самым снизить нагрузку на фундамент. Также использование СИП-панелей позволяет вести строительство дома при отрицательных
                температурах, то есть практически круглогодично.

            </p>

            <img class="section__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sip.png" alt="СИП панель">

            <a href="technology.html" class="button">Подробнее о технологии</a>
        </div>
    </section>



    <footer class="main-footer">
        <div class="container">
            <div class="footer-info">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="СИПКомфорт логотип">
                <div class="footer-address">
                    Калининград<br> ул. Пехотная 43<br> +7(4012) 40-01-80<br> +7(902) 414-25-83 
                </div>
                <div class="footer-copy">
                    © ООО «СИПКомфорт» 2016
                </div>
            </div>

            <!--<nav class="footer-menu">
                <ul class="footer-menu__list">
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Технология</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Проекты</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Наша работа</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">Услуги</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="" class="footer-menu__link">О компании</a>
                    </li>
                </ul>
            </nav>-->
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
    
    <?php wp_footer(); ?>
</body>

</html>