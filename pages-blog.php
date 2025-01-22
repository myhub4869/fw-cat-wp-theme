<?php
/*
Template Name: Blogs Page
 */

/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
get_header();

$custom_posts = get_posts([
  'category_name' => 'blogs',
]);
?>

<main>
  <h2>Blogs</h2>
  <ul class="blogs">
    <?php foreach ($custom_posts as $post): setup_postdata($post); ?>
      <li class="blog"><a href="#">
          <time datetime="<?php echo get_the_date("Y-m-d"); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
            </svg><?php echo get_the_date("Y.m.d"); ?>
          </time>
          <h3>
            <?php the_title(); ?>
          </h3>
          <p><?php the_content(); ?></p>
          <ul class="tags">
            <?php
              $tags = get_the_tags();
              foreach($tags as $tag):
            ?>
              <li><?php echo $tag->name; ?></li>
            <?php endforeach; ?>
          </ul>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php
get_footer();
