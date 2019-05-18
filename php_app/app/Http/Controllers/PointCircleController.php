<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Circle;
use App\Classes\Point;


class PointCircleController extends Controller{
    /**
     * Display a point and circle intersection form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('pointcircle');
    }

    /**
     * Show if a point and circle are intersecting.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'point_x'=>'required|integer',
            'point_y'=> 'required|integer',
            'circle_point_r' => 'required|integer',
            'circle_point_x' => 'required|integer',
            'circle_point_y' => 'required|integer'
        ]);

        $point = new Point($request->get('point_x'), $request->get('point_y'));
        $circle_center_point = new Point($request->get('circle_point_x'), $request->get('circle_point_y'));
        $circle = new Circle($circle_center_point, $request->get('circle_point_r'));

        $does_intersect = $point->intersect($circle);
        $success_message = "Point and Circle Do " . ($does_intersect ? "Not " : "") . "Intersect";
        return redirect('/pointcircle')->with('success', $success_message);
    }
}
