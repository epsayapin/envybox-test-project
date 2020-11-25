<?php
/**
 * Created by PhpStorm.
 * User: zhenya
 * Date: 25.11.20
 * Time: 14:02
 */

namespace App\Abstracts;


use App\Models\Review;

abstract class ReviewSaver
{
    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public abstract function save() : void;
}