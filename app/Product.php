<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'category', 
        'image',
        'description',
        'price',
        'comment',
        'category_id'
    ];

     /**
     * Get the user that owns the phone.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
