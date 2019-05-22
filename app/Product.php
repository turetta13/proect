<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    public static $categoriesTort = [
        'hp' => 'День Рождения',
        '8march' => '8 марта',
        'named' => 'Именные',
        'child' => 'Детские',
        'wedding' => 'Свадьба'
    ];

    public static $categoriesTortSostav = [
        'medovik' => 'Медовик',
        'napoleon' => 'Наполеон',
        'biskvit' => 'Бисквит',
    ];

    public static $categoriesPiroj = [
        'cupcake' => 'Капкейки',
        'beze' => 'Безе',
        'pavlova' => 'Десерт Павлова',
    ];

    public static $categoriesCandybar = [
        'сandybar' => 'Кенди Бар',

    ];

    public static $categoriesOther= [
        'pryanik' => 'Пряники',
        'zefir' => 'Зефир',
        'postila' => 'Постила',
        'chetvertinka' => 'Торт Четвертинки',
    ];
}
