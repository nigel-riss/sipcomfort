<?php
//  Template Name: Projects group
get_header();

if (have_posts()) {
    while(have_posts()) {
        the_post();
        the_content();
    }
}
?>
    <main class="section">
        <div class="container">
            <h1 class="main-header"><?php the_title(); ?></h1>
            <div class="projects">
                <?php 
                    $projects_category = get_field('projects_category');
                    $args = array(
                        'category_name' => $projects_category
                    );
                    
                    query_posts($args);

                    if(have_posts()) {
                        $counter = 0;
                        while(have_posts()) {
                            the_post();
                            $counter++;
                            $project_name       = get_field('project_name');
                            $area               = get_field('area');
                            $price              = get_field('price');
                            $main_image         = get_field('main_image');
                ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="project <?php if($counter == 3) { echo 'project--3rd'; $counter = 0; }?>">
                                    <img src="<?php echo $main_image ?>" alt="проект дома предпросмотр" class="project__image">
                                    <div class="project__desc">
                                        <div class="project__price">
                                            <span class="project__price--cancelled">
                                                <?php echo $price ?><small>руб</small></span><br>
                                                <?php echo ($price * 0.93) ?><small>руб</small>
                                        </div>
                                        <div class="project__name">
                                            проект <span class="project__name--inverse"><?php echo $project_name ?></span>
                                            <span class="project__area"><?php echo $area ?>м<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </main>

<?php
get_footer();

?>
