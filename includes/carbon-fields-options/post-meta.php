<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
    exit;
}

Container::make('post_meta', 'section hero')
    ->show_on_page(11)
    ->add_fields(array(
    Field::make('text', 'site_offer'),
    Field::make('text', 'hero_subtitle'),
    Field::make( 'complex', 'label_block')
     ->add_fields( array(
        Field::make( 'text', 'label' ),
     )),

     Field::make('text', 'search_text'),
     Field::make('text', 'search_btn_text'),
     Field::make('image', 'search_btn_img')     
     ->set_value_type( 'url'),
     Field::make('image', 'hero_img')
     ->set_value_type( 'url'),

    )
);

Container::make('post_meta', 'section categories')
    ->show_on_page(11)
    ->add_fields(array(
    Field::make('text', 'categories_title'),
    Field::make('complex', 'categories')
     ->add_fields( array(
        Field::make('text', 'category_name' ),
        Field::make('image', 'category_photo' )
        ->set_value_type( 'url'),
     )),
    )
);

Container::make('post_meta', 'mail')
    ->show_on_page(11)
    ->add_fields(array(
        Field::make('text', 'mail_title'),
        Field::make('text', 'mail_subtitle'),
        Field::make('text', 'mail_form_text'),
        Field::make('text', 'mail_form_btn_text'),
        Field::make('image', 'mail_form_btn_img')
        ->set_value_type('url'),
    )
);


