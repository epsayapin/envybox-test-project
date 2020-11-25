<?php
/**
 * Created by PhpStorm.
 * User: zhenya
 * Date: 25.11.20
 * Time: 14:01
 */

namespace App\Abstracts;


use App\Models\Review;

abstract class ReviewManager
{
    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public abstract function saver() : ReviewSaver;
}