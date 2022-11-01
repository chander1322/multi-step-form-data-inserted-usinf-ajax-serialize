<?php 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    //add custom css
    wp_enqueue_style('style-css',get_stylesheet_directory_uri().'/assets/css/style.css');
    //add custom js file
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'custom-validation-js', get_stylesheet_directory_uri() . '/assets/js/formvalidation.js', array( 'jquery' ),'',true );
    //bootstrab css
    wp_register_style('bootstrap',get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri(), $dependencies); 
    //bootstrab js
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap-script', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    //register add ajax 
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery') );
    wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

// add actions
// add_action( "wp_ajax_anyName", "ajax_action_anyName" );
// add_action( "wp_ajax_nopriv_anyName", "ajax_action_anyName" );
// global $wpdb;
// echo'<pre>';
// print_r($wpdb);
// $table='wp_forms_data';
// echo$table;

function insert_data(){
    // echo'helloo';

    echo '<pre>';
    print_r($_POST);
    if(isset($_POST)){
    global $wpdb;
    $table='wp_forms_data';
    $data=  array(
        'fname'=> $_POST['fname'],
        'lname'=> $_POST['lname'],
        'address'=> $_POST['address'],
        'number'=> $_POST['number'],
        'subject'=> $_POST['subject'],
        'query'=> $_POST['query']
    );
    // echo'<pre>';
    // print_r($data);
   
    $wpdb->insert($table,$data);
            // array( '%s', '%s', '%s', '%s', '%s', '%s' );
    }
    die();
}
add_action( 'wp_ajax_insert_data', 'insert_data' );
add_action( 'wp_ajax_nopriv_insert_data', 'insert_data' );
?>


