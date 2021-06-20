<?php
/**
 * Theme functions and definitions
 *
 * @package Financey
 */

if ( ! function_exists( 'financey_enqueue_styles' ) ) :

	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function financey_enqueue_styles() {

		wp_enqueue_style( 'agencyup-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'financey-style', get_stylesheet_directory_uri() . '/style.css', array( 'agencyup-style-parent' ), '1.0' );
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'financey-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
		wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
	}

endif;

add_action( 'wp_enqueue_scripts', 'financey_enqueue_styles', 99 );


function financey_customizer_rid_values($wp_customize) {

  $wp_customize->remove_section('nav_btn_section');
  $wp_customize->remove_section('hide_show_nav_menu_btn');
  $wp_customize->remove_section('menu_btn_label');
}

add_action( 'customize_register', 'financey_customizer_rid_values', 1000 );


add_action( 'draft_to_publish','func1');
add_action('new_to_publish', 'func2');
add_action('draft_to_publish', 'func3');
add_action('pending_to_publish', 'func4');

function func1(){
    echo "<script>alert('Типа отправка письма1')</script>";
}
function func2(){
    echo "<script>alert('Типа отправка письма2')</script>";
}
function func3(){
    echo "<script>alert('Типа отправка письма3')</script>";
}
function func4(){
    echo "<script>alert('Типа отправка письма4')</script>";
}



add_action( 'save_post', 'my_project_updated_send_email' );
function my_project_updated_send_email( $post_id ) {
    // Если это ревизия, то не отправляем письмо
    echo "<script>alert('Типа отправка письма1')</script>";
    if ( wp_is_post_revision( $post_id ) || get_post($post_id)->post_status != 'publish' )
        return;

    echo "<script>alert('Типа отправка письма')</script>";
    $post_title = get_the_title( $post_id );
    $post_url = get_permalink( $post_id );
    $subject = 'Запись была обновлена';

    $message = "На вашем сайте следующая запись была обновлена:\n\n";
    $message .= $post_title . ": " . $post_url;

    // Отправляем письмо.
    wp_mail( get_option('admin_email'), $subject, $message );
}



add_action( 'publish_post', 'email_friends' );
function email_friends( $post_ID ){
    echo "<script>alert('Типа письмо отправленное')/script>";
    $friends = 'wwwmistik13@gmail.com, susie@example.org';
    wp_mail( $friends, "sally's blog updated", 'I just put something on my blog: http://blog.example.com' );

    return $post_ID;
}