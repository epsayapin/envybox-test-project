<?php
/**
 * Created by PhpStorm.
 * User: zhenya
 * Date: 25.11.20
 * Time: 14:08
 */

namespace App\Services\Review;


use App\Abstracts\ReviewSaver;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class StorageReviewSaver extends ReviewSaver
{
    public function save() : void
    {
        Storage::put(Carbon::now(), $this->review);
    }
}