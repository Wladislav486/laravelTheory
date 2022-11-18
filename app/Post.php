<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

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
        'title', 'content', 'rubric_id'
    ];

    /**
     * @var array
     * поля к которым у пользователя нет доступа
     */
//    protected $guarded = [
//
//    ];



    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function getPostDate()
    {
        return \Carbon\Carbon::parse($this->created_at)->diffForHumans();
    }



    /**
     * mutator
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
    }

    /**
     * Accessor
     */
    public function getTitleAttribute($value)
    {

        return Str::upper($value);
    }


}
