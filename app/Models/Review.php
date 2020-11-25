<?php

namespace App\Models;

use App\Services\Review\DbReviewManager;
use App\Services\Review\StorageReviewManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "text",
        "phone"
    ];
}
