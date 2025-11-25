<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /*
    *    Mass Fillable attributes
    */
    protected $fillable =
    [
        'title',
        'author',
        'genre',
        'pages',
        'availability',
        'description',
        'added_by',
        'current_reader_id',
    ];
    /*
    *    user who added the book relation
    */
    public function creator()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    /*
    *    user who is currently reading the book
    */
    public function currentReader()
    {
        return $this->belongsTo(User::class, 'current_reader_id');
    }
    /*
    *    Reviews relation
    */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'book_id');
    }
}
