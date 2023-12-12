<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    //
    public function index()
    {
        //
        $lessons = Lesson::all();
        if ($lessons) {
            return response()->json([
                'data' => $this->transformCollection($lessons)
            ], 200
            );
        } else {
            return response()->json([
                'message' => 'No lessons found',
            ], 404
            );
        }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //
        $lesson = Lesson::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return response()->json($lesson);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $lesson = Lesson::find($id);
        if ($lesson) {
            return response()->json([
                'data' => $this->transform($lesson)
            ], 200
            );
        } else {
            return response()->json([
                'error' => [
                    'message' => 'Lesson does not exist',
                    'code' => '215'
                ]
            ], 404
            );
        }
    }

    private function transformCollection($lessons){
        return array_map([$this, 'transform'], $lessons->toArray());
    }


    private function transform($lesson){
            return [
                'title' => $lesson['title'],
                'body' => $lesson['body'],
                'active' => (boolean) $lesson['is_published'],
            ];
    }
}
