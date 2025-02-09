<?php
/*
Template Name: Works Page
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
  'category_name' => 'works',
]);
?>

<main>
  <h2>Works</h2>
  <ul class="works">
    <?php foreach ($custom_posts as $post): setup_postdata($post); ?>
      <li class="work">
        <div class="thumb">
          <picture>
            <source srcset="<?php the_field('thumb_pc'); ?>" media="(min-width: 992px)" />
            <img src="<?php the_field('thumb_sp'); ?>" alt="" />
          </picture>
        </div>
        <div class="summary">
          <div class="info">
            <h3>概要</h3>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
          <div class="langs">
            <h3>使用言語</h3>
            <ul>
              <?php
                $langages = get_field('langage');
                foreach($langages as $langage):
              ?>
                <li><?php echo $langage; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="envs">
            <h3>開発環境</h3>
            <ul>
              <?php
                $envs = get_field('env');
                foreach($envs as $env):
              ?>
                <li><?php echo $env; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="links"><a href="https://github.com/framework-cat/tracker">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
              </svg>GitHub</a><a href="https://tracker.framework-cat.com">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
              </svg>Visit Tracker</a></div>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php
get_footer();
