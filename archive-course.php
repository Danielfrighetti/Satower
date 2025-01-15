<?php
get_header();
?>
<div class="course-archive">
    <h1 class="archive-title"><?php post_type_archive_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="course-list">
            <?php
            while (have_posts()) : the_post();
                $course_duration = get_post_meta(get_the_ID(), '_course_duration', true);
                $course_price = get_post_meta(get_the_ID(), '_course_price', true);
            ?>
                <div class="course-item">
                    <h2 class="course-title"><?php the_title(); ?></h2>
                    <div class="course-meta">
                        <span class="course-duration"><?php echo esc_html($course_duration); ?></span>
                        <span class="course-price"><?php echo esc_html($course_price); ?></span>
                    </div>
                    <div class="course-description">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="course-link">Ver más detalles</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No se encontraron cursos.</p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>