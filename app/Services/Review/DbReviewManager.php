<?php
/**
 * Created by PhpStorm.
 * User: zhenya
 * Date: 25.11.20
 * Time: 14:07
 */

namespace App\Services\Review;


use App\Abstracts\ReviewManager;
use App\Abstracts\ReviewSaver;

class DbReviewManager extends ReviewManager
{
    public function saver() : ReviewSaver
    {
        return new DbReviewSaver($this->review);
    }
}