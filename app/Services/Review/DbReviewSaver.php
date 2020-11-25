<?php
/**
 * Created by PhpStorm.
 * User: zhenya
 * Date: 25.11.20
 * Time: 14:07
 */

namespace App\Services\Review;


use App\Abstracts\ReviewSaver;

class DbReviewSaver extends ReviewSaver
{
    public function save() : void
    {
        $this->review->save();
    }
}