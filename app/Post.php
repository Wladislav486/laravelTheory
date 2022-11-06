<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */
class Post extends Model
{
    /**
     * @var string
     * переопределение названия таблицы
     */
 //   protected $table = 'my_posts';

    /**
     * @var string
     * переопределение первичного ключа
     */
 //   protected $primaryKey = 'post_id';

    /**
     * @var bool
     * переопределение поведения первичного ключа
     * не инкремент, заполняется в ручную
     */
//    public $incrementing = false;

    /**
     * @var string
     * переопределение типа первичного ключа
     */
//    protected $keyType = 'string';

    /**
     * @var bool
     * запрет заполнения created_at и updated_at текущим временем
     */
//    public $timestamps = false;

    /**
     * @var string[]
     * заполнение по дефолту полей
     */
//    protected $attributes = [
//        'content' => 'Lorem ipsum...',
//    ];

    /**
     * @var string[]
     * поля к которым у пользователя есть доступ
     */
    protected $fillable = [
        'title'
    ];

    /**
     * @var array
     * поля к которым у пользователя нет доступа
     */
//    protected $guarded = [
//
//    ];


}
