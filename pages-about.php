<?php
/*
Template Name: About Page
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

$imageBase = get_template_directory_uri() . '/assets/images/';
$custom_posts = get_posts([
  'category_name' => 'jobs',
]);
?>

<main>
  <h2>About</h2>

  <section class="profile">
    <div class="icon"><img src="<?php echo "{$imageBase}/logo.png" ?>" /></div>
    <div class="info"><strong class="name">Framework-Cat</strong>
      <p class="outline">
        フルスタック開発者として5年以上の経験を持ち、
        モダンなウェブ技術を活用した開発に携わっています。
        ユーザー体験とパフォーマンスを重視したアプリケーション開発が得意です。
      </p>
      <ul class="links">
        <li><a href="https://github.com/fw-cat/" target="_blank">Github</a></li>
        <li><a href="https://www.facebook.com/mybook4869" target="_blank">Facebook</a></li>
      </ul>
    </div>
  </section>

  <section class="skills">
    <h3>技術スタック</h3>
    <ul>
      <li class="skill frontend"><strong>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5M12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0M1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25" />
          </svg>フロントエンド</strong>
        <ul>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/html5.svg" alt="HTML5" />
            <p>HTML5</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/css3.svg" alt="CSS3" />
            <p>CSS3</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/scss.png" alt="SASS/SCSS" />
            <p>SASS/SCSS</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/vue.svg" alt="Vue.js" />
            <p>Vue.js</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/nuxt.svg" alt="nuxt.js" />
            <p>nuxt.js</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/react.svg" alt="ReactJS" />
            <P>ReactJS</P>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/frontend/gatsby.svg" alt="Gatsby" />
            <p>Gatsby</p>
          </li>
        </ul>
      </li>
      <li class="skill backend"><strong>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
            <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525" />
          </svg>バックエンド</strong>
        <ul>
          <li><img src="<?php echo $imageBase; ?>/icons/backend/php.svg" alt="PHP" />
            <p>PHP</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/backend/laravel.svg" alt="Laravel" />
            <p>Laravel</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/backend/java.svg" alt="Java" />
            <p>Java</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/backend/springboot.svg" alt="Spring Boot2" />
            <p>Spring Boot2</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/backend/python.svg" alt="Python" />
            <p>Python</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/backend/django.svg" alt="DJango" />
            <p>DJango</p>
          </li>
        </ul>
      </li>
      <li class="skill other"><strong>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
          </svg>その他</strong>
        <ul>
          <li><img src="<?php echo $imageBase; ?>/icons/others/github.svg" alt="Git/Github" />
            <p>Git / Github</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/others/mysql.png" alt="MySQL" />
            <p>MySQL</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/others/mariadb.svg" alt="MariaDB" />
            <p>MariaDB</p>
          </li>
          <li><img src="<?php echo $imageBase; ?>/icons/others/docker.svg" alt="docker" />
            <p>Docker / Docker Compose</p>
          </li>
        </ul>
      </li>
    </ul>
  </section>

  <section class="jobs">
    <h3>経歴</h3>
    <ul>
      <?php foreach ($custom_posts as $post): setup_postdata($post); ?>
        <li>
          <div class="bitween">
            <time class="start" datetime="<?php echo the_field('start_dt'); ?>">
              <?php echo date('Y.m', strtotime(get_field('start_dt'))); ?>
            </time>
            <span>-</span>
            <time class="end" datetime="<?php echo the_field('end_dt') ?? date("Y-m-d"); ?>">
              <?php echo get_field('end_dt') ? date('Y.m', strtotime(get_field('end_dt'))) : "現在" ?>
            </time>
          </div>

          <div class="company">
            <strong><?php the_title(); ?></strong>
          </div>

          <div class="position">
            <p><?php echo the_field('position'); ?></p>
          </div>

          <div class="description">
            <p>
              <?php the_content(); ?>
            </p>
          </div>

          <div class="langs"><strong>使用言語</strong>
            <ul class="tags">
              <?php
                $langages = get_field('langage');
                foreach($langages as $langage):
              ?>
                <li><?php echo $langage; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

</main>

<?php
get_footer();
