<?php namespace Cybeard\Testplugin\Models;

use Model;

/**
 * Comment Model
 */
class Comment extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cybeard_testplugin_comments';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['post_id', 'comment', 'bad_comment'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function scopeIsBad($query)
    {
        return $query->where('bad_comment', 1);
    }

}