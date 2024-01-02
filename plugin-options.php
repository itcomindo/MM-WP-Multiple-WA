<?php

/**
 * Plugin Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'mmwpwa_plugin_options');
function mmwpwa_plugin_options()
{
    Container::make('theme_options', 'MM WP WA')
        ->add_fields([
            //separator config
            Field::make('separator', 'mmwpwa_separator_one', 'WhatsApp Configuration')
                ->set_classes('mmwpwa-separator'),


            //select style from style 1 to style 5
            Field::make('select', 'mmwpwa_style', 'Style')
                ->add_options([
                    //style 1
                    'mmwpwa-style-1' => 'Style 1',

                    //style 2
                    'mmwpwa-style-2' => 'Style 2',

                    //style 3
                    'mmwpwa-style-3' => 'Style 3',

                    //style 4
                    'mmwpwa-style-4' => 'Style 4',

                    //style 5
                    'mmwpwa-style-5' => 'Style 5',

                ])
                ->set_default_value('mmwpwa-style-1'),


            //enabling logo
            Field::make('checkbox', 'mmwpwa_logo', 'Logo')
                ->set_option_value('yes')
                ->set_default_value(false)
                ->set_help_text('Enable logo size 100x100px'),

            //logo image
            Field::make('image', 'mmwpwa_logo_image', 'Logo Image')
                ->set_value_type('url')
                ->set_help_text('Logo size 100x100px'),





            Field::make('select', 'mmwpwa_location', 'Location')
                ->add_options([
                    //bottom left
                    'bottom-left' => 'Bottom Left',

                    //bottom right
                    'bottom-right' => 'Bottom Right',

                    //bottom center
                    'bottom-center' => 'Bottom Center',

                    //floating left
                    'floating-left' => 'Floating Left',

                    //floating right
                    'floating-right' => 'Floating Right',

                ])
                ->set_default_value('bottom-right'),




            //enabling greeting message callout
            Field::make('checkbox', 'mmwpwa_greeting_message', 'Greeting Message')
                ->set_option_value('yes')
                ->set_default_value(false)
                ->set_help_text('Enable greeting message callout'),

            //greeting message textarea maxLength 100 characters
            Field::make('textarea', 'mmwpwa_greeting_message_text', 'Greeting Message Text')
                ->set_attribute('maxLength', 100)
                ->set_default_value('Hi, how can we help you?')
                ->set_help_text('Max 100 characters'),


            //disable greeting on mobile
            Field::make('checkbox', 'mmwpwa_disable_greeting_on_mobile', 'Disable Greeting On Mobile')
                ->set_option_value('yes')
                ->set_default_value(false)
                ->set_help_text('Disable greeting message on mobile < 768px'),


            //include post title or product title in single.php or product.php
            Field::make('checkbox', 'mmwpwa_include_post_title', 'Include Post Title')
                ->set_option_value('yes')
                ->set_default_value(false)
                ->set_help_text('Include post title or product title in single.php or product.php, artinya akan menyertakan judul post atau nama produk (woocommerce) didalam pesan WhatsApp'),


            //default load open or close
            Field::make('select', 'mmwpwa_default_load', 'Default Load')
                ->add_options([
                    //open
                    'open' => 'Open',

                    //close
                    'close' => 'Close',

                ])
                ->set_default_value('open'),




            //separator whatsapp number
            Field::make('separator', 'mmwpwa_separator_two', 'WhatsApp Number')
                ->set_classes('mmwpwa-separator'),
            Field::make('complex', 'mmwpwa', 'Whatsapp Box')
                ->add_fields([

                    //enable or disable
                    Field::make('checkbox', 'mmwpwa_enable', 'Enable This Person')
                        ->set_option_value('yes')
                        ->set_default_value(false)
                        ->set_help_text('Enable WhatsApp Box'),


                    //name
                    Field::make('text', 'mmwpwa_name', 'Name')
                        ->set_default_value('Your Name')
                        ->set_help_text('Name, kosongkan jika tidak ingin menampilkan'),

                    //position
                    Field::make('text', 'mmwpwa_position', 'Position')
                        ->set_default_value('Customer Service')
                        ->set_help_text('Position, kosongkan jika tidak ingin menampilkan'),

                    //show number
                    Field::make('checkbox', 'mmwpwa_show_number', 'Show Number')
                        ->set_option_value('yes')
                        ->set_default_value(false)
                        ->set_help_text('pilih untuk menampilkan nomor telepon'),


                    //whatsapp number
                    Field::make('text', 'mmwpwa_number', 'WhatsApp Number')
                        ->set_default_value('6281234567890')
                        ->set_help_text('WhatsApp Number, kosongkan jika tidak ingin menampilkan'),

                    //phone number
                    Field::make('text', 'mmwpwa_phone_number', 'Phone Number')
                        ->set_default_value('6281234567890')
                        ->set_help_text('Phone Number, kosongkan jika tidak ingin menampilkan'),

                    //email
                    Field::make('text', 'mmwpwa_email', 'Email')
                        ->set_default_value('admin@yourdomain.com')
                        ->set_help_text('Isi email Email, kosongkan jika tidak ingin menampilkan'),


                    //default whatsapp message
                    Field::make('text', 'mmwpwa_default_message', 'Default WhatsApp Message')
                        ->set_default_value('Hi, I want to ask about your product')
                        ->set_help_text('Default WhatsApp Message'),


                    //disable on day: sunday, monday, tuesday, wednesday, thursday, friday, saturday
                    Field::make('multiselect', 'mmwpwa_disable_on_day', 'Disable On Day')
                        ->add_options([
                            'sunday' => 'Sunday',
                            'monday' => 'Monday',
                            'tuesday' => 'Tuesday',
                            'wednesday' => 'Wednesday',
                            'thursday' => 'Thursday',
                            'friday' => 'Friday',
                            'saturday' => 'Saturday',
                        ])
                        ->set_default_value(['sunday', 'saturday'])
                        ->set_help_text('Disable on day'),








                ]),




            //separator style
            Field::make('separator', 'mmwpwa_separator_three', 'WhatsApp Style')
                ->set_classes('mmwpwa-separator'),


            //greeting background color default is #333333
            Field::make('color', 'mmwpwa_greeting_background_color', 'Greeting Background Color')
                ->set_default_value('#333333')
                ->set_help_text('Default: #333333'),


            //greeting text color default is #f0f0f0
            Field::make('color', 'mmwpwa_greeting_text_color', 'Greeting Text Color')
                ->set_default_value('#f0f0f0')
                ->set_help_text('Default: #f0f0f0'),

            //container background color
            Field::make('color', 'mmwpwa_container_background_color', 'Container Background Color')
                ->set_default_value('#dddddd')
                ->set_help_text('Default: #dddddd'),

            //container inner background color
            Field::make('color', 'mmwpwa_container_inner_background_color', 'Container Inner Background Color')
                ->set_default_value('#eeeeee')
                ->set_help_text('Default: #eeeeee'),












        ]);
}



//get mmwpwa_style
function mmwpwa_get_style()
{
    $mmwpwa_style = carbon_get_theme_option('mmwpwa_style');
    return $mmwpwa_style;
}

//add mmwpwa_get_style() class to boddy
add_filter('body_class', 'mmwpwa_body_class');
function mmwpwa_body_class($classes)
{
    $classes[] = mmwpwa_get_style();
    return $classes;
}
