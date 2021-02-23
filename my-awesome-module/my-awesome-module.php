<?php 

class MyAwesomeModule extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'My Awesome Module', 'fl-builder' ),
            'description'     => __( 'A totally awesome module!', 'fl-builder' ),
            'group'           => __( 'My Awesome Plugin', 'fl-builder' ),
            'category'        => __( 'My Awesome Plugin base', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'my-awesome-module/',
            'url'             => MY_MODULES_URL . 'my-awesome-module/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
        
        $this->add_css('example-lib', $this->url . 'css/frontend.css');
        $this->add_css('example-lib', $this->url . 'includes/frontend.css.php');

        $this->add_css('font-awesome');

    }
    public function example_method(){
        return "Amir Made This On an Island!";
    }

}

FLBuilder::register_module( 'MyAwesomeModule', array(
    'my-tab-1'      => array(
        'title'         => __( 'Single Restaurant', 'fl-builder' ),
        'sections'      => array(
            'my-section-1'  => array(
                'title'         => __( 'Restaurant Locations', 'fl-builder' ),
                'fields'        => array(
                    'my_field_0'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Map Title', 'fl-builder' ),
                        'responsive'  => true,
                    ),
                    'my_field_1'     => array(
                        'type'          => 'text',
                        'label'         => __( 'City', 'fl-builder' ),
                    ),
                    'my_field_2'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Restaurant Name', 'fl-builder' ),
                    ),
                    'my_field_3'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Restaurant Description', 'fl-builder' ),
                    ),
                    'my_field_4'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Lat', 'fl-builder' ),
                    ),
                    'my_field_5'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Lng', 'fl-builder' ),
                    ),
                    'my_field_6'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Restaurant', 'fl-builder' ),
                        'multiple'      => true,
                    ),
                    'Desc'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Restaurant Descriptions', 'fl-builder' ),
                        'multiple'      => true,
                    ),
                    'my_field_7'     => array(
                        'type'          => 'text',
                        'label'         => __( 'APIKey', 'fl-builder' ),
                        
                    ),
                    'my_field_8'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Restaurant Name Font Size', 'fl-builder' ),
                        'responsive'    => true,
                        'default'       => 34,

                        
                    )



                )
            )
        )
    ),
    'multiple'      => array( // Tab
        'title'         => __('Multiple Restaurants', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Multiple Example', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'my_form_field' => array(
                        'type'          => 'form',
                        'label'         => __('Restaurant', 'fl-builder'),
                        'form'          => 'my_form_field', // ID of a registered form.
                        'preview_text'  => 'label', // ID of a field to use for the preview text.
                        'multiple'      => true,
                      )
                )
            )
        )
    ),

) );


FLBuilder::register_settings_form('my_form_field', array(
    'title' => __('My Form Field', 'fl-builder'),
    'tabs'  => array(
      'general'      => array(
        'title'         => __('General', 'fl-builder'),
        'sections'      => array(
          'general'       => array(
            'title'         => '',
            'fields'        => array(
              'RName'         => array(
                'type'          => 'text',
                'label'         => __('Restaurant Name', 'fl-builder')
              ),
              'RDesc'         => array(
                'type'          => 'text',
                'label'         => __('Restaurant Description', 'fl-builder')
              ), 
              'RLat'         => array(
                'type'          => 'text',
                'label'         => __('Latitude', 'fl-builder')
              ),
              'RLng'         => array(
                'type'          => 'text',
                'label'         => __('Longitude', 'fl-builder')
              ),

            )
          ),
        )
      )
    )
  ));
 ?>