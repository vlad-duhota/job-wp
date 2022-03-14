<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки темы')
	->add_fields(array(
        Field::make('image', 'site_logo')
        ->set_width(10)
        ->set_value_type( 'url'),
		Field::make('text', 'site_logo_text')
        ->set_width(10),
        Field::make('text', 'site_logo_text_span')
        ->set_width(10)
        ->help_text('blue color text'),
        Field::make('text', 'copy_text')
        ->set_width(25),
        Field::make('text', 'copy_symbol')
        ->set_width(10),
        Field::make('text', 'phone')
        ->set_width(20),
        Field::make('text', 'email')
        ->set_width(20),
        Field::make('text', 'login_btn_text')
        ->set_width(10),
        Field::make('text', 'register_btn_text')
        ->set_width(10),
    )
);
  
