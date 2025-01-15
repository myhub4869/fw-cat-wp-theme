<?php
/*
Template Name: Top Level Page
 */
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>

<main>
  <h1>
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="Framework-Cat" />
    Framework-Cat<small>フルスタック開発者 | Full Stack Developer</small>
  </h1>
  <p>モダンなウェブ技術とクリエイティブなソリューションで、<br/>あなたのビジョンをデジタルの世界で実現します。<br/>フロントエンドからバックエンドまで、<br/>シームレスな開発体験を提供いたします。</p>
</main>

<?php
get_footer();
