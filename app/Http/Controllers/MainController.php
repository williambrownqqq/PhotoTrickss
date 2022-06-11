<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Http\Controllers\Review;
use App\Http\Requests\MainRequest;
use App\Models\Comment;
use App\Models\Course;

class MainController extends Controller
{

    // public function courses(){
    //     $courses = new Course();
    //     $data = $courses->getCourses();
    //     return view('pets', ['data'=>$data]);
    // }

    // public function index(){
    //     $courses = new Course();
    //     $data = $courses->getCourses();
    //     $reviews = new ModelsReview();
    //     $data2 = $reviews->getReviews();
    //     return view('index', ['data'=>$data, 'data2'=>$data2]);
    // }

    // public function course($course){
    //     $courses = new Course();
    //     $course = $courses->getByName($course);
    //     return view('index', compact('index'));
    // }
    public function comment(MainRequest $request){
        $comment = new Comment();
        $data = $comment->getComment($request);
    }

    public static function index(){
        return view('index');
    }

    public static function collabs(){
        return view('collabs');
    }

    public static function contacts(){
        return view('contacts');
    }

    public static function gallery(){
        return view('gallery');
    }

    public function feedback(MainRequest $request) {

        // $request->validate([ // Request $request
        //     'name' =>  'required|min:5|max:50',
        //     'email' =>  'required|regex:/[0-9a-z]+@[a-z]/',
        //     'social-network'=> 'required|min:5|max:50',
        //     'commentInput'=> 'required|min:1|max:500',
        // ]);
        
        
        $this->comment($request);
        return MainController::index();

        // dd($request);
    }
}
