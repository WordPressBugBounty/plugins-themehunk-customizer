<?php
$wp_customize->add_setting( 'big_store_disable_top_slider_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'big_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'big_store_disable_top_slider_sec', array(
                'label'                 => esc_html__('Disable Section (Pro)', 'big-store'),
                'type'                  => 'checkbox',
                'section'               => 'big_store_top_slider_section',
                'settings'              => 'big_store_disable_top_slider_sec',
            ) ) );

if(class_exists('Big_Store_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'big_store_top_slide_layout', array(
                'default'           => 'slide-layout-3',
                'sanitize_callback' => 'big_store_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Big_Store_WP_Customize_Control_Radio_Image(
                $wp_customize, 'big_store_top_slide_layout', array(
                    'label'    => esc_html__( 'Slider Layout', 'big-store' ),
                    'section'  => 'big_store_top_slider_section',
                    'choices'  => array(
                        'slide-layout-1'   => array(
                            'url' => BIG_STORE_SLIDER_LAYOUT_1,
                        ),
                        'slide-layout-2'   => array(
                            'url' =>BIG_STORE_SLIDER_LAYOUT_3,
                        ),
                        'slide-layout-3' => array(
                            'url' => BIG_STORE_SLIDER_LAYOUT_2,
                        ),
                        'slide-layout-4' => array(
                            'url' => BIG_STORE_SLIDER_LAYOUT_4,
                        ),
                             
                    ),
                )
            )
        );
} 
//Slider Content Via Repeater
      if ( class_exists( 'Big_Store_Repeater' ) ){
            $wp_customize->add_setting(
             'big_store_top_slide_content', array(
             'sanitize_callback' => 'big_store_repeater_sanitize',  
             'default'           => Big_Store_Top_Slider_Default_Setting_Models::instance()->get_slider_default(),
                )
            );
            $wp_customize->add_control(
                new Big_Store_Repeater(
                    $wp_customize, 'big_store_top_slide_content', array(
                        'label'                                => esc_html__( 'Slide Content', 'big-store' ),
                        'section'                              => 'big_store_top_slider_section',
                        'add_field_label'                      => esc_html__( 'Add new Slide', 'big-store' ),
                        'item_name'                            => esc_html__( 'Slide', 'big-store' ),
                        
                        'customizer_repeater_title_control'    => true,   
                        'customizer_repeater_subtitle_control'    => true, 
                        'customizer_repeater_text_control'    => true,  
                        'customizer_repeater_image_control'    => true, 
                        'customizer_repeater_logo_image_control'    => false,  
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => false,  
                                         
                        
                    ),'big_store_top_slide_content'
                )
            );
        }

  // Add an option to disable the logo.
  $wp_customize->add_setting( 'big_store_top_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'big_store_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Big_Store_Toggle_Control( $wp_customize, 'big_store_top_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play (Pro)', 'big-store' ),
    'section'     => 'big_store_top_slider_section',
    'type'        => 'toggle',
    'settings'    => 'big_store_top_slider_optn',
  ) ) );

$wp_customize->add_setting('big_store_slider_speed', array(
        'default' =>'3000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_number',
));
$wp_customize->add_control( 'big_store_slider_speed', array(
        'label'    => __('Speed', 'big-store'),
        'description' =>__('Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000','big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'        => 'number',
));
// slider-layout-2
$wp_customize->add_setting('big_store_top_slider_2_title', array(
    'sanitize_callback' => 'big_store_sanitize_text',
    ));
$wp_customize->add_control(new Big_Store_Misc_Control( $wp_customize, 'big_store_top_slider_2_title',
            array(
        'section'    => 'big_store_top_slider_section',
        'type'      => 'pro-text',
        'label'       => esc_html__( 'First Column', 'big-store' ),
    )));
$wp_customize->add_setting('big_store_lay2_adimg', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'big_store_lay2_adimg', array(
        'label'          => __('Image 1', 'big-store'),
        'section'        => 'big_store_top_slider_section',
        'settings'       => 'big_store_lay2_adimg',
 )));
$wp_customize->add_setting('big_store_lay2_url', array(
        'default' =>'',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
));
$wp_customize->add_control( 'big_store_lay2_url', array(
        'label'    => __('url', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));
$wp_customize->add_setting('big_store_lay2_adimg2', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'big_store_lay2_adimg2', array(
        'label'          => __('Image 2', 'big-store'),
        'section'        => 'big_store_top_slider_section',
        'settings'       => 'big_store_lay2_adimg2',
 )));
$wp_customize->add_setting('big_store_lay2_url2', array(
        'default' =>'',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
));
$wp_customize->add_control( 'big_store_lay2_url2', array(
        'label'    => __('url', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));
// third coloum image
$wp_customize->add_setting('big_store_top_slider_2_title2', array(
    'sanitize_callback' => 'big_store_sanitize_text',
    ));
$wp_customize->add_control(new Big_Store_Misc_Control( $wp_customize, 'big_store_top_slider_2_title2',
            array(
        'section'    => 'big_store_top_slider_section',
        'type'      => 'pro-text',
        'label'       => esc_html__( 'Third Column', 'big-store' ),
    )));
$wp_customize->add_setting('big_store_lay2_adimg3', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'big_store_lay2_adimg3', array(
        'label'          => __('Image', 'big-store'),
        'section'        => 'big_store_top_slider_section',
        'settings'       => 'big_store_lay2_adimg3',
 )));
$wp_customize->add_setting('big_store_lay2_url3', array(
        'default' =>'',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
));
$wp_customize->add_control( 'big_store_lay2_url3', array(
        'label'    => __('url', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));
// slider-layout-3
$wp_customize->add_setting('big_store_lay3_adimg', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'big_store_lay3_adimg', array(
        'label'          => __('Image 1', 'big-store'),
        'section'        => 'big_store_top_slider_section',
        'settings'       => 'big_store_lay3_adimg',
 )));
$wp_customize->add_setting('big_store_lay3_url', array(
        'default' =>'',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
));
$wp_customize->add_control( 'big_store_lay3_url', array(
        'label'    => __('url', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));
$wp_customize->add_setting('big_store_lay3_adimg2', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'big_store_lay3_adimg2', array(
        'label'          => __('Image 2', 'big-store'),
        'section'        => 'big_store_top_slider_section',
        'settings'       => 'big_store_lay3_adimg2',
 )));
$wp_customize->add_setting('big_store_lay3_2url', array(
        'default' =>'',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
));
$wp_customize->add_control( 'big_store_lay3_2url', array(
        'label'    => __('url', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));

$wp_customize->add_setting('big_store_lay3_adimg3', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'big_store_lay3_adimg3', array(
        'label'          => __('Image 3', 'big-store'),
        'section'        => 'big_store_top_slider_section',
        'settings'       => 'big_store_lay3_adimg3',
 )));
$wp_customize->add_setting('big_store_lay3_3url', array(
        'default' =>'',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
));
$wp_customize->add_control( 'big_store_lay3_3url', array(
        'label'    => __('url', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));
$wp_customize->add_setting('big_store_lay3_heading_txt', array(
        'default' =>__('Market','big-store'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_text',
         'transport'         => 'postMessage',
));
$wp_customize->add_control( 'big_store_lay3_heading_txt', array(
        'label'    => __('category Heading', 'big-store'),
        'section'  => 'big_store_top_slider_section',
         'type'    => 'text',
));
// Include category
if (class_exists( 'Big_Store_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('big_store_include_category_slider', array(
        'default'           => '',
        'sanitize_callback' => 'big_store_checkbox_explode'
    ));
    $wp_customize->add_control(new Big_Store_Customize_Control_Checkbox_Multiple(
            $wp_customize,'big_store_include_category_slider', array(
        'settings'=> 'big_store_include_category_slider',
        'label'   => __( 'Choose Categories To Include', 'big-store' ),
        'section' => 'big_store_top_slider_section',
        'choices' => big_store_get_category_id(array('taxonomy' =>'product_cat'),false),
        ) 
    ));

}  

 $wp_customize->add_setting( 'big_store_lay3_bg_background_image_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_setting( 'big_store_lay3_bg_background_image_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'big_store_lay3_bg_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'big_store_lay3_bg_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'big_store_lay3_bg_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'big_store_lay3_bg_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    // Registers example_background control
    $wp_customize->add_control(
        new Big_Store_Customize_Custom_Background_Control(
            $wp_customize,
            'big_store_lay3_bg_img',
            array(
                'label'     => esc_html__( 'Background Image', 'big-store' ),
                'section'   => 'big_store_top_slider_section',
                'settings'    => array(
                    'image_url' => 'big_store_lay3_bg_background_image_url',
                    'image_id' => 'big_store_lay3_bg_background_image_id',
                    'repeat' => 'big_store_lay3_bg_background_repeat', // Use false to hide the field
                    'size' => 'big_store_lay3_bg_background_size',
                    'position' => 'big_store_lay3_bg_background_position',
                    'attach' => 'big_store_lay3_bg_background_attach'
                )
            )
        )
    );

$wp_customize->add_setting('big_store_lay3_bg_img_ovrly', array(
        'default'        => '#eaeaea',
        'capability'     => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'big_store_sanitize_color'
    ));
$wp_customize->add_control( 
    new  Big_Store_Customizer_Color_Control($wp_customize,'big_store_lay3_bg_img_ovrly', array(
        'label'      => __('Slider Image Overlay Color', 'big-store' ),
        'section'    => 'big_store_top_slider_section',
        'settings'   => 'big_store_lay3_bg_img_ovrly',
    ) ) ); 
$wp_customize->add_setting('big_store_top_slider_doc', array(
    'sanitize_callback' => 'big_store_sanitize_text',
    ));
$wp_customize->add_control(new Big_Store_Misc_Control( $wp_customize, 'big_store_top_slider_doc',
            array(
        'section'    => 'big_store_top_slider_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/big-store/#top-slider',
        'description' => esc_html__( 'To know more go with this', 'big-store' ),
        'priority'   =>100,
    )));