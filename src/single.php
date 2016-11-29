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
                    <img src="<?php echo $main_image ?>" alt="" class="project-image">
                    <img src="<?php echo $additional_image ?>" alt="" class="project-image">
                </div>
                <div class="project-images__blueprints">
                    <img src="<?php echo $projection1_8 ?>" alt="" class="project-image">
                    <img src="<?php echo $projection8_1 ?>" alt="" class="project-image">
                    <img src="<?php echo $projectionA_J ?>" alt="" class="project-image">
                    <img src="<?php echo $projectionJ_A ?>" alt="" class="project-image">
                    <img src="<?php echo $level_1 ?>" alt="" class="project-image">
                    <img src="<?php echo $level_2 ?>" alt="" class="project-image">
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
                        вентилируемый фасад: обрешетка, фасадный пенополистирол
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

<?php get_footer(); ?>
