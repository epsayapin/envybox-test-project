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

class StorageReviewManager extends ReviewManager
{
    public function saver() : ReviewSaver
    {
        return new StorageReviewSaver($this->review);
    }
}