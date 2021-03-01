<?php
//include_once( get_stylesheet_directory_uri().'/inc/custom-function.php' );

/*custom style-script*/
function theme_enqueue_styles() {
  wp_enqueue_style( 'wp-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css');
  wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.js');
 /* wp_enqueue_script( 'jquery-event-move-js', get_stylesheet_directory_uri() . '/assets/js/jquery.event.move.js', array(), false, true );
  wp_enqueue_script( 'jquery-twentytwenty-js', get_stylesheet_directory_uri() . '/assets/js/jquery.twentytwenty.js', array(), false, true );*/

  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array(), false, true );
  
  // wp_enqueue_style( 'twentytwenty-css', get_stylesheet_directory_uri() . '/assets/css/twentytwenty.css');
  wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css');
  wp_enqueue_style( 'responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css'); 
 
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles',99 );
/*end*/
function override_shapely_customlogo() {
        add_theme_support( 'custom-logo', array(
             'width'      => 900,
            'height'      => 900,
            'flex-width' => true,
        ) );
}
add_action( 'after_setup_theme', 'override_shapely_customlogo', 11 );

//add nav menu
function wds_register_nav_menu(){
    
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'twentyseventeen' ),
        'footer_menu'  => __( 'Footer 1st Navigation', 'twentyseventeen' ),
        'footer_2_menu'  => __( 'Footer 2nd Navigation', 'twentyseventeen' ),
    ) );

}
add_action( 'after_setup_theme', 'wds_register_nav_menu', 0 );
// unset default nav menu
function wds_remove_parent_theme_nav_menu()
{
    // @link http://codex.wordpress.org/Function_Reference/unregister_nav_menu
    unregister_nav_menu( 'top' );
    unregister_nav_menu( 'social' );
}
add_action( 'after_setup_theme', 'wds_remove_parent_theme_nav_menu', 20 );
//end
//remove sidebar
function remove_some_widgets(){
 
    // Unregister some of the TwentyTen sidebars
    unregister_sidebar( 'sidebar-1' );
    unregister_sidebar( 'sidebar-2' );
    unregister_sidebar( 'sidebar-3' );
   
}
//end
add_action( 'widgets_init', 'remove_some_widgets', 11 );
/**
 * Add a widgets.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Top Header', 'twentyseventeen' ),
        'id'            => 'top-header',
        'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
        'before_widget' => '<div class="col phone-email">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Header Social Icon', 'twentyseventeen' ),
        'id'            => 'header-social-icon',
        'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
        'before_widget' => '<div class="col">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Logo', 'twentyseventeen' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Menus', 'twentyseventeen' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Contact Info', 'twentyseventeen' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
   /* register_sidebar( array(
        'name'          => __( 'Subscribe', 'twentyseventeen' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div class="col newsletter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) ); */
    register_sidebar( array(
        'name'          => __( 'Footer Copyright', 'twentyseventeen' ),
        'id'            => 'footer-bottom',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<div class="col">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    

}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

//Display current year
function year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
}
add_shortcode ('year', 'year_shortcode');



function create_posttype() {
    //Display testimonials

    $labels = array(
        'name' => _x('Testimonials', 'Post Type General Name', 'twentyseventeen'),
        'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'twentyseventeen'),
        'menu_name' => __('Testimonials', 'twentyseventeen'),
        'parent_item_colon' => __('Parent Testimonial', 'twentyseventeen'),
        'all_items' => __('All Testimonials', 'twentyseventeen'),
        'view_item' => __('View Testimonial', 'twentyseventeen'),
        'add_new_item' => __('Add New Testimonial', 'twentyseventeen'),
        'add_new' => __('Add New', 'twentyseventeen'),
        'edit_item' => __('Edit Testimonial', 'twentyseventeen'),
        'update_item' => __('Update Testimonial', 'twentyseventeen'),
        'search_items' => __('Search Testimonial', 'twentyseventeen'),
        'not_found' => __('Not Found', 'twentyseventeen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentyseventeen'),
    );
    register_post_type('testimonial', array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonial'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 4,
        'has_archive' => true,
            )
    );
     $args = array(
        'label' => __('Categories', 'twentyseventeen'),
        'public' => true,
        'rewrite' => false,
        'hierarchical' => true
    );
    register_taxonomy('categories', 'testimonial', $args);
    /*end*/
    /*video*/
    $vlabels = array(
        'name' => _x('Videos', 'Post Type General Name', 'twentyseventeen'),
        'singular_name' => _x('video', 'Post Type Singular Name', 'twentyseventeen'),
        'menu_name' => __('Videos', 'twentyseventeen'),
        'parent_item_colon' => __('Parent video', 'twentyseventeen'),
        'all_items' => __('All Videos', 'twentyseventeen'),
        'view_item' => __('View video', 'twentyseventeen'),
        'add_new_item' => __('Add New video', 'twentyseventeen'),
        'add_new' => __('Add New', 'twentyseventeen'),
        'edit_item' => __('Edit video', 'twentyseventeen'),
        'update_item' => __('Update video', 'twentyseventeen'),
        'search_items' => __('Search video', 'twentyseventeen'),
        'not_found' => __('Not Found', 'twentyseventeen'),
        'not_found_in_trash' => __('Not found in Trash', 'twentyseventeen'),
    );
    register_post_type('videos', array(
        'labels' => $vlabels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'videos'),
        'show_in_rest' => true,
        'supports' => array('title'),
        'menu_position' => 4,
        'has_archive' => true,
            )
    );

}

 add_action('init', 'create_posttype');
// end custom posttype

/* testimonial custom field*/

function wporg_add_custom_box() {
   
    add_meta_box(
        'treviews_field',                 // Unique ID
        'Reviews',      // Box title
        'wporg_custom_box_html',  // Content callback, must be of type callable
        'testimonial'                            // Post type
    );
  
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );

function wporg_custom_box_html( $post ) {
    $value = get_post_meta( $post->ID, 'rating_no', true );
    ?>
    <label for="wporg_field">Star Rating : </label>
    <input type="text" name="rating_no" id="rating_no" value="<?php if(isset($value)){echo $value; }?>">
    <?php
}

function wporg_save_postdata( $post_id ) {
    if ( !empty($_POST['rating_no']) ) {
        update_post_meta(
            $post_id,
            'rating_no',
            $_POST['rating_no']
        );
    }
}
add_action( 'save_post', 'wporg_save_postdata' );
/*end testimonal custom field*/
/*testimonial category shortcode*/
function physicians_testimonials(){
    ob_start(); 
    ?>
    <!-- <h1 class="testimonial_heading">Physicians</h1> -->
    <div class="testimonials-cat8">
        <?php
        $args = array( 'post_type' => 'testimonial','order' => 'ASC','tax_query' => array(array('taxonomy' => 'categories','field' => 'term_id','terms' => 8))); 
        $query = new WP_Query( $args );
        $i=0;
        if ( $query->have_posts() ) {
       
            while ($query->have_posts()) : $query->the_post(); 
                ?>
                <div class="tsection_data">             
                    <div class="testimonial_rating" id="trating-cat8">
                        <span id="rno_cat8_<?php echo $i;?>" style='display:none'><?php echo get_post_meta( get_the_ID(), 'rating_no', true )?></span>
                        <span id=cat8_stars_<?php echo $i;?>></span>
                    </div>                  
                    <div class="testimonial_content">
                        <p>
                            <?php echo get_the_content(); ?>
                            <span><a href="<?php echo get_permalink(get_the_ID())?>"> <?php echo '- '.get_the_title(); ?></a></span>
                        </p>
                           
                    </div> 
                </div> 

                <?php
                $i++;
            endwhile;
            /*End of the loop.*/
            wp_reset_postdata();
            ?><?php
        }?>          
    </div> 
    <?php
    $var = ob_get_clean();
    return $var;
}
add_shortcode ('physicians_testimonials', 'physicians_testimonials');

function patients_testimonials(){
    ob_start(); 
    ?>
    <!-- <h1 class="testimonial_heading">Patients</h1> -->
    <div class="testimonials-cat8">
        <?php
        $args = array( 'post_type' => 'testimonial','order' => 'ASC','tax_query' => array(array('taxonomy' => 'categories','field' => 'term_id','terms' => 9))); 
        $query = new WP_Query( $args );
        $i=0;
        if ( $query->have_posts() ) {
       
            while ($query->have_posts()) : $query->the_post(); 
                ?>
                <div class="tsection_data">             
                    <div class="testimonial_rating" id="trating-cat9">
                        <span id="rno_cat9_<?php echo $i;?>" style='display:none'><?php echo get_post_meta( get_the_ID(), 'rating_no', true )?></span>
                        <span id=cat9_stars_<?php echo $i;?>></span>
                    </div>                  
                    <div class="testimonial_content">
                        <p>
                            <?php echo get_the_content(); ?>
                            <span><a href="<?php echo get_permalink(get_the_ID())?>"> <?php echo '- '.get_the_title(); ?></a></span>
                        </p>
                           
                    </div> 
                </div> 

                <?php
                $i++;
            endwhile;
            /*End of the loop.*/
            wp_reset_postdata();
            ?><?php
        }?>          
    </div> 
    <?php
    $var = ob_get_clean();
    return $var;
   
}
add_shortcode ('patients_testimonials', 'patients_testimonials');

/*end shortcodes*/


/* video custom field*/

function video_custom_meta_box() {
   
    add_meta_box(
        'treviews_field',                 // Unique ID
        'Embed Video',      // Box title
        'video_custom_box_html',  // Content callback, must be of type callable
        'videos'                            // Post type
    );
  
}
add_action( 'add_meta_boxes', 'video_custom_meta_box' );

function video_custom_box_html( $post ) {
    $value = get_post_meta( $post->ID, 'video_embed', true );
    ?>
    <textarea name="video_embed" rows="5" cols="100"><?php if(isset($value) && !empty($value)){echo $value;} ?></textarea>
    <?php
}

function video_code_save_postdata( $post_id ) {
    if ( !empty($_POST['video_embed']) ) {
        update_post_meta(
            $post_id,
            'video_embed',
            $_POST['video_embed']
        );
    }
}
add_action( 'save_post', 'video_code_save_postdata' );
/*end video custom field*/
/*video shortcode*/
function HP_video_list($atts){
    ob_start(); 
    if(isset($atts['ids']) && !empty($atts['ids'])){
        $ids = array($atts['ids']);
    }else{
        $ids = array(512,513);
    }
    ?>
    <div class="hp-video-sec">
        <?php
        $args = array('p' => $ids, 'post_type' => 'videos','order' => 'ASC','posts_per_page'=>2); 
        $query = new WP_Query( $args );
        $i=0;
        if ( $query->have_posts() ) {
       
            while ($query->have_posts()) : $query->the_post(); 
                ?>
                <div class="video-listing"> 
                    <?php echo get_post_meta( get_the_ID(), 'video_embed', true )?>
                </div> 

                <?php
                $i++;
            endwhile;
            /*End of the loop.*/
            wp_reset_postdata();
            ?><?php
        }?>          
    </div> 
    <?php
    $var = ob_get_clean();
    return $var;
}
add_shortcode ('HP_video_list', 'HP_video_list');

/* end HP video section shortcode*/


/*Video page*/
function video_listing($atts){
    ob_start(); 
    if(isset($atts['per_page']) && !empty($atts['per_page'])){
        $per_page = $atts['per_page'];
    }else{
        $per_page = 6;
    }
    ?>
    <div class="videos">
        <div class="video_listing">            
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            //$loop = get_posts( array( 'post_type' => 'videos') );
            $loop = wp_count_posts( 'videos' )->publish;
            $args = array( 'post_type' => 'videos','order' => 'ASC','orderby' => 'date', 'paged' => $paged,'posts_per_page'=>$per_page); 
            $vquery = new WP_Query( $args );
            if ( $vquery->have_posts() ) {
           
                while ($vquery->have_posts()) : $vquery->the_post(); 
                    ?>
                    <div class="video_data">                        
                        <div class="video-embed"> 
                            <?php echo get_post_meta( get_the_ID(), 'video_embed', true )?>
                        </div>
                        <h4 class="vidoe_title"><?php echo get_the_title();?></h4> 
                    </div>
                    <?php
                    $i++;
                endwhile;
                /*End of the loop.*/
                ?><?php
            }?> 
        </div>

        <?php
         if($loop > $per_page){ ?>       
            <div class="page-numbers">
                <?php
                $big = 999999999; // need an unlikely integer
                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $vquery->max_num_pages
                            ) );

                wp_reset_postdata();
                ?>
            </div>
        <?php }?>
    </div> 
    <?php
    $var = ob_get_clean();
    return $var;
}
add_shortcode ('video_listing', 'video_listing');
/*end Video page*/