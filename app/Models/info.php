<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class info extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
