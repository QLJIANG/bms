<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Transformers\LessonTransformer;
use App\Http\Requests\LessonIndexRequest;
use App\Http\Requests\LessonStoreRequest;
use App\Lesson;
use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Http\Request;

/**
 * Class LessonController
 * @package App\Api\Controllers
 * @resource("Lessons", uri="/lessons")
 */
class LessonController extends ApiController
{
    public function __construct()
    {
//        $this->middleware('auth.basic');
    }

    public function index(LessonIndexRequest $request)
    {
        $lessons = Lesson::paginate(10);

//        return $this->response->collection($lessons, new LessonTransformer());
        return $this->response->paginator($lessons, new LessonTransformer());
//        return $this->paginator($lessons, new LessonTransformer());
    }

    public function store(LessonStoreRequest $request)
    {
        return $this->response->noContent();
    }

    public function show($id, LessonTransformer $lessonTransformer)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            $this->response->errorNotFound('课程不存在');
        }
        return $this->response->item($lesson, $lessonTransformer);
    }
}