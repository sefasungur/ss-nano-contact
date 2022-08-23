<?php
/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
    die;
}
/* Get Codestar Framework*/
require_once __DIR__ .'/codestar/codestar-framework.php';

if( class_exists( 'CSF' ) ) {
    $prefix = 'ss-nano-contact';
    CSF::createOptions( $prefix, array(
        'menu_title'        => 'SS Nano Contact',
        'menu_slug'         => 'ss-nano-contact',
        'menu_type'         => 'submenu',
        'menu_parent'       => 'options-general.php',
        'framework_title'   => 'SS Nano Contact',
        'nav'               => 'normal',
        'theme'             => 'light',
        'class'             => 'ss-nano-contact-wrapper',
        'footer_text'       => '&copy; '.date("Y"). ' <a href="https://www.nanomedya.com" target="_blank">nano</a> | Powered by <a href="https://sefa.dev" target="_blank">SS</a> | Version: '.sncPluginInfo("Version"),
    ) );

    CSF::createSection( $prefix, array(
        'title'         => __('Set Buttons','ss-nano-contact'),
        'fields' => array(
            array(
                'id'            => 'buttons',
                'type'          => 'repeater',
                'title'         => __('Buttons','ss-nano-contact'),
                'button_title'  => '<i class="fas fa-plus"></i> '. __('Add new button','ss-nano-contact'),
                'fields' => array(
                    array(
                        'id'    => 'icon',
                        'type'  => 'icon',
                        'title' => __('Icon','ss-nano-contact')
                    ),
                    array(
                        'id'      => 'title',
                        'type'    => 'text',
                        'title'   => __('Title','ss-nano-contact')
                    ),
                    array(
                        'id'      => 'background-color',
                        'type'    => 'color',
                        'title'   => __('Button BG Color','ss-nano-contact')
                    ),
                    array(
                        'id'      => 'icon-color',
                        'type'    => 'color',
                        'title'   => __('Icon Color','ss-nano-contact')
                    ),
                    array(
                        'id'      => 'url',
                        'type'    => 'text',
                        'title'   => __('URL','ss-nano-contact')
                    ),
                    array(
                        'id'      => 'blank-page',
                        'type'    => 'checkbox',
                        'title'   => __('Open New Page?','ss-nano-contact'),
                        'label'   => __('This link open blank page','ss-nano-contact')
                    ),
                ),
                'default'   => array(
                    array(
                        'icon'              => 'fab fa-whatsapp',
                        'title'             => 'Whatsapp',
                        'background-color'  => '#25D366',
                        'icon-color'        => '#FFFFFF',
                        'url'               => __('https://wa.me/905551234567?text=Hello','ss-nano-contact'),
                        'blank-page'        => true
                    )
                ),
            ),
        )
    ) );

    CSF::createSection( $prefix, array(
        'title'  => __('Settings','ss-nano-contact'),
        'fields' => array(
            array(
                'id'          => 'snc-active',
                'type'        => 'button_set',
                'title'       => __('SS Nano Contact Enable?','ss-nano-contact'),
                'options'     => array(
                    'enabled' => __('Enabled','ss-nano-contact'),
                    'disabled'=> __('Disabled', 'ss-nano-contact')
                ),
                'default'     => 'enabled'
            ),
            array(
                'id'          => 'snc-position-vh',
                'type'        => 'select',
                'title'       => __('Buttons Position','ss-nano-contact'),
                'placeholder' => __('Select an option','ss-nano-contact'),
                'options'     => array(
                    'vertical'      => __('Vertical','ss-nano-contact'),
                    'horizontal'  => __('Horizontal','ss-nano-contact'),
                ),
                'default'      => 'horizontal'
            ),
            array(
                'id'           => 'snc-location-vertical',
                'type'         => 'select',
                'title'        => __('Buttons Location Vertical','ss-nano-contact'),
                'placeholder'  => __('Select an option','ss-nano-contact'),
                'options'      => array(
                    'top'      => __('Top','ss-nano-contact'),
                    'bottom'   => __('Bottom','ss-nano-contact'),
                    'v-center'   => __('Center','ss-nano-contact'),
                ),
                'default'      => 'bottom'
            ),
            array(
                'id'           => 'snc-location-horizontal',
                'type'         => 'select',
                'title'        => __('Buttons Location Horizontal','ss-nano-contact'),
                'placeholder'  => __('Select an option','ss-nano-contact'),
                'options'      => array(
                    'left'     => __('Left','ss-nano-contact'),
                    'right'    => __('Right','ss-nano-contact'),
                    'h-center'   => __('Center','ss-nano-contact'),
                ),
                'default'      => 'left'
            ),
            array(
                'id'           => 'snc-position',
                'type'         => 'select',
                'title'        => __('Buttons Wrapper type','ss-nano-contact'),
                'placeholder'  => __('Select an option','ss-nano-contact'),
                'options'      => array(
                    'regular'  => __('Regular','ss-nano-contact'),
                    'fixed'    => __('Fixed','ss-nano-contact')
                ),
                'default'      => 'regular'
            ),
            array(
                'id'      => 'snc-default-class',
                'type'    => 'text',
                'title'   => __('Default Class','ss-nano-contact'),
                'default' => 'ss-nano-contact'
            ),
            array(
                'id'      => 'snc-custom-css',
                'type'    => 'textarea',
                'title'   => __('Custom CSS','ss-nano-contact')
            ),
        )
    ) );
    CSF::createSection( $prefix, array(
        'title'  => __('Backup','ss-nano-contact'),
        'fields' => array(
            array(
                'type' => 'backup',
            ),
        )
    ));

    CSF::createSection( $prefix, array(
        'title'  => __('About','ss-nano-contact'),
        'fields' => array(
            array(
                'type'    => 'content',
                'content' =>
                     '<h3>'.sncPluginInfo("Name").'</h3>'.
                     '<p>'.sncPluginInfo("Description").'</p>',
            ),
            array(
                'type'    => 'content',
                'content' =>
                      '<p>'.sprintf('<strong>'.__('Minimum WP Version','ss-nano-contact').':</strong> %s',sncPluginInfo("RequiresWP")).'</p>'
                     .'<p>'.sprintf('<strong>'.__('Minimum PHP Version','ss-nano-contact').':</strong> %s',sncPluginInfo("RequiresPHP")).'</p>'
                     .'<p>'.sprintf(__('Using this email for support: %s','ss-nano-contact'),'info@sefa.dev').'</p>'
            )
        )
    ));
}

/* SNC Get Settings Value */
if ( ! function_exists( 'sncOption' ) ) {
    function sncOption( $option = '', $default = null ) {
        $options = get_option( 'ss-nano-contact' );
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}