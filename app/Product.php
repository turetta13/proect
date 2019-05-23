<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    public static $categories = array(
        'tort' => array('hp' => 'День Рождения',
            '8march' => '8 марта',
            'named' => 'Именные',
            'child' => 'Детские',
            'wedding' => 'Свадьба'),

        'sostav' => array('medovik' => 'Медовик',
            'napoleon' => 'Наполеон',
            'biskvit' => 'Бисквит'),

        'piroj' => array('cupcake' => 'Капкейки',
            'beze' => 'Безе',
            'pavlova' => 'Десерт Павлова'),

        'candybar' => array('сandybar' => 'Кенди Бар'),

        'other' => array('pryanik' => 'Пряники',
            'zefir' => 'Зефир',
            'postila' => 'Пастила',
            'chetvertinka' => 'Торт Четвертинки')
    );
}
