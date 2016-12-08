<?php get_header(); ?>

<?php 
// Advanced Custom Fields
$project_name       = get_field('project_name');
$area               = get_field('area');
$price              = get_field('price');
$main_image         = get_field('main_image');
$additional_image   = get_field('additional_image');
$projection1_8      = get_field('projection1_8');
$projection8_1      = get_field('projection8_1');
$projectionA_J      = get_field('projectionA_J');
$projectionJ_A      = get_field('projectionJ_A');
$level_1            = get_field('level_1');
$level_2            = get_field('level_2');
?>

<main class="section">
        <div class="container">
            <h1 class="main-header">Проект <br><span class="main-header__caption"><?php echo $project_name ?></span> <span class="main-header__area"><?php echo $area ?>м<sup>2</sup></span></h1>



            <div class="project-images"> 
                <div class="project-images__projection">
                    <a class="preview" href="<?php echo $main_image ?>">
                        <img src="<?php echo $main_image ?>" alt="" class="project-image">
                    </a>
                    <a class="preview" href="<?php echo $additional_image ?>">
                        <img src="<?php echo $additional_image ?>" alt="" class="project-image">
                    </a>
                </div>
                <div class="project-images__blueprints">
                    <a class="preview" href="<?php echo $projection1_8 ?>">
                        <img src="<?php echo $projection1_8 ?>" alt="" class="project-image">
                    </a>
                    <a class="preview" href="<?php echo $projection8_1 ?>">
                        <img src="<?php echo $projection8_1 ?>" alt="" class="project-image">
                    </a>
                    <a class="preview" href="<?php echo $projectionA_J ?>">
                        <img src="<?php echo $projectionA_J ?>" alt="" class="project-image">
                    </a>
                    <a class="preview" href="<?php echo $projectionJ_A ?>">
                        <img src="<?php echo $projectionJ_A ?>" alt="" class="project-image">
                    </a>
                    <a class="preview" href="<?php echo $level_1 ?>">
                        <img src="<?php echo $level_1 ?>" alt="" class="project-image">
                    </a>
                    <a class="preview" href="<?php echo $level_2 ?>">
                        <img src="<?php echo $level_2 ?>" alt="" class="project-image">
                    </a>
                </div>
            </div>



            <p class="section__text">
                <ul class="section__list">
                    <li class="section__item">
                        ленточно-столбчатый фундамент с цоколем из пескоцементного блока с разведенными трубами под канализацию и воду
                    </li>
                    <li class="section__item">
                        комплект дома (перекрытия, стены, фронтоны и кровельная схема) из структурно-изоляционных панелей с каркасом и монтажными элементами
                    </li>
                    <li class="section__item">
                        кровельное покрытие из металлической или битумной черепицы с доборными металлическими элементами и водосточной системой
                    </li>
                    <li class="section__item">
                        вентилируемый фасад: обрешетка, фасадный пенополистирол, сетка и протяжка клеем
                    </li>
                    <li class="section__item">
                        окна из шестикамерного профиля и водоотливы
                    </li>
                    <li class="section__item">
                        вводной щит
                    </li>
                    <li class="section__item">
                        электропроводка: кабель (1-2 розетки на помещение, освещение, выключатель без установки фурнитуры)
                    </li>
                </ul>
            </p>
        </div>
    </main>


<!--FOOTER-->
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
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
    <script>
        $('.preview').colorbox({
            rel: 'preview',
            scrolling: false,
            maxHeight: '80%'
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>
