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
function kill_wp( $post ) {
    echo "<script>alert('Типа отправка письма11232132212')</script>";
}
add_action( 'save_post_shop_order', 'kill_wp',1 );


add_action( 'save_post_jobs', 'save_data_so', 10, 3 );

add_action( 'draft_to_publish','func1'); //Срабатывает при нажатии опубликовать
function func1(){
    $emailAddress=$_POST['email_send_message'];
    $subject = 'Добавление нового товара';
    $headers = 'From: Dima Kost <byDimaKost@huis.com>' . "\r\n";
    $message = "На вашем сайте был добавлен новый товар:\n\n";
    // Отправляем письмо.
    wp_mail( $emailAddress, $subject, $message, $headers );
}


/*add_action( 'save_post', 'my_project_updated_send_email' ); //Тоже срабатывает при нажатии опубликовать
function my_project_updated_send_email( $post_id ) {
    // Если это ревизия, то не отправляем письмо
    if ( wp_is_post_revision( $post_id ) || get_post($post_id)->post_status != 'publish' )
        return;

    echo "<script>alert(".$_POST['email_send_message'].")</script>";
    $post_title = get_the_title( $post_id );
    $post_url = get_permalink( $post_id );
    $subject = 'Запись была обновлена';

    $message = "На вашем сайте следующая запись была обновлена:\n\n";
    $message .= $post_title . ": " . $post_url;
    wp_die( 'hey' );
    // Отправляем письмо.
    wp_mail( get_option('admin_email'), $subject, $message );
}*/






