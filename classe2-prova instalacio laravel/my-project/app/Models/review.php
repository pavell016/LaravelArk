<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /*
    *    Mass Fillable attributes
    */
    protected $fillable =
    [
        'book_id',
        'user_id',
        'rating',
        'comment',
    ];
    /*
    *    Book relation
    */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    /*
    *    User relation
    */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
