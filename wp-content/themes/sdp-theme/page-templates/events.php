<?php get_header(); ?>
<main id="content" class="page-content flex flex-wrap justify-center w-full">
  <section class="flex w-full p-6">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php if ( has_post_thumbnail() ) { ?>
      <header class="header page-hero p-6" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
        <div class="overlay"></div>
        <div class="page-title"><h1 class="entry-title w-full lg:w-2/3 ml-auto mr-auto mt-4 mb-4 pt-6 pb-6 text-grey-darkest"><?php the_title(); ?></h1></div>
      </header>
      <?php } else { ?>
      <header class="header w-full lg:w-2/3 m-auto p-6">
        <h1 class="entry-title pt-4 pb-4 text-grey-darkest"><?php the_title(); ?></h1>
      </header>
      <?php } ?>
      <div class="w-full lg:w-2/3 m-auto p-6">
        <?php the_content(); ?>
      </div>
      <?php endwhile; endif; ?>
    </article>
  </section>
</main>
<?php get_footer(); ?>