<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 6:08 PM
 */

namespace App\Api\Transformers;

use App\Lesson;
use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract
{
    public function transform(Lesson $lesson)
    {
        return [
            'id' => $lesson['id'],
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'is_free' => $lesson['free'],
        ];
    }
}