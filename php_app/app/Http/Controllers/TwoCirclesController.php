<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Circle;
use App\Classes\Point;


class TwoCirclesController extends Controller{
    /**
     * Display a two circles intersection form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('twocircles');
    }

    /**
     * Show if two circles are intersecting.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'circle1_x'=>'required|integer',
            'circle1_y'=> 'required|integer',
            'circle1_r' => 'required|integer',
            'circle2_x' => 'required|integer',
            'circle2_y' => 'required|integer',
            'circle2_r' => 'required|integer'
        ]);

        $circle1_center = new Point($request->get('circle1_x'), $request->get('circle1_y'));
        $circle1 = new Circle($circle1_center, $request->get('circle1_r'));

        $circle2_center = new Point($request->get('circle2_x'), $request->get('circle2_y'));
        $circle2 = new Circle($circle2_center, $request->get('circle2_r'));

        $does_intersect = $circle1->intersect($circle2);
        $success_message = "The Two Circles Do " . ($does_intersect ? "Not " : "") . "Intersect";
        return redirect('/twocircles')->with('success', $success_message);
    }
}
