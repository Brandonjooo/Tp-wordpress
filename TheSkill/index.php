<?php get_header();  ?>

<main>
    <section>
        <article>
        <div class="main-background flex flex-col h-screen hero-pattern bg-no-repeat bg-cover bg-center">

                <form class="mt-3 flex" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <?php $query = new WP_Query(('posts_per_page=6')); ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <article>
                                <div class="flex flex-col  max-w-xs mb-6 md:mr-6 relative  ">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="rounded-t-xl border border-purple-post box-border w-full max-h-52 h-52"><?php the_post_thumbnail('post'); ?></div>
                                    <?php else : ?>
                                        <div class="rounded-t-xl border border-purple-post box-border w-full max-h-52 h-52"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/images/placeholder-post.jpg" alt=<?php esc_attr_e("Placeholder post image", "games-online"); ?> /></div>
                                    <?php endif; ?>

                                    <div class="mr-2 text-yellow-600 text-xs mb-1"><?php the_category(','); ?></div>
                                    <div class=" break-normal truncate text-xl leading-6">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="text-xs text-gray-400 mt-3"><?php the_time(); ?></div>
                                    <div class="text-base leading-5 mt-4 text-gray-200">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
            </div>
        </article>
    <?php endwhile; ?>
<?php endif; ?>

</article>
    </section>

</main>




<?php get_footer();  ?>