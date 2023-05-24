<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    public function publisher() : BelongsTo{
        return $this->belongsTo(Publisher::class);
    }

    public function categories() : BelongsToMany{
        return $this->belongsToMany(Category::class, 'book_categories', 'books_id', 'category_id');
    }


}
