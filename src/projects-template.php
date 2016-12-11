<?php
//  Template Name: Projects
get_header();

?>


<main class="section">
        <div class="container">
            <h1 class="main-header">Проекты домов</h1>


            <!--<h2 class="section__header">
                Индивидуальные проекты
            </h2>-->
            <p class="section__text">
                В каталоге представлены типовые проекты и цены на них. По желанию заказчика мы разрабатываем новые проекты и редактируем существующие.
            </p>


            <div class="project-groups">
                <a href="less-then-100-projects">
                    <div class="project-group">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pop-1.jpg" alt="" class="project-group__image">
                        <div class="project-group__desc">
                            <div class="project-group__name">дома до 100м<sup>2</sup></div>
                        </div>
                    </div>
                </a>

                <a href="less-then-150-projects">
                    <div class="project-group project-group--2nd">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pop-2.jpg" alt="" class="project-group__image">
                        <div class="project-group__desc">
                            <div class="project-group__name">дома до 150м<sup>2</sup></div>
                        </div>
                    </div>
                </a>

                <a href="less-then-200-projects">
                    <div class="project-group">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pop-3.jpg" alt="" class="project-group__image">
                        <div class="project-group__desc">
                            <div class="project-group__name">дома до 200м<sup>2</sup></div>
                        </div>
                    </div>
                </a>

                <a href="more-then-200-projects">
                    <div class="project-group project-group--2nd">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pop-4.jpg" alt="" class="project-group__image">
                        <div class="project-group__desc">
                            <div class="project-group__name">дома более 200м<sup>2</sup></div>
                        </div>
                    </div>
                </a>

                <a href="block-projects">
                    <div class="project-group">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pop-5.jpg" alt="" class="project-group__image">
                        <div class="project-group__desc">
                            <div class="project-group__name">блокированные дома</div>
                        </div>
                    </div>
                </a>
            </div>


            <h2 class="section__header">
                Комплектация типовых проектов
            </h2>
            <p class="section__text">
                <ul class="section__list">
                    <li class="section__item">
                        ленточно-столбчатый фундамент с цоколем из пескоцементного блока с разведенными трубами под канализацию и воду
                    </li>
                    <li class="section__item">
                        комплект дома (перекрытия, стены, фронтоны и кровельная схема) из структурно-изоляционных панелей с каркасом и монтажными элементами
                    </li>
                    <li class="section__item">
                        высота первого этажа 2,80м, второй этаж 1,40м до скоса крыши
                    </li>
                    <li class="section__item">
                        кровельное покрытие из металлической или битумной черепицы с доборными металлическими элементами и водосточной системой
                    </li>
                    <li class="section__item">
                        вентилируемый фасад: обрешетка, фасадный пенополистирол
                    </li>
                    <li class="section__item">
                        одно окно из шестикамерного немецкого профиля на комнату и водоотливы
                    </li>
                    <li class="section__item">
                        металлическая входная дверь, стоимостью до 10000 рублей
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


<?php

get_footer();

?>