<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Line;
use App\Classes\Point;


class TwoLinesController extends Controller{
    /**
     * Display a two lines intersection form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('twolines');
    }

    /**
     * Show if two lines are intersecting.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'line1_x1'=>'required|integer',
            'line1_y1'=> 'required|integer',
            'line1_x2' => 'required|integer',
            'line1_y2' => 'required|integer',

            'line2_x1'=>'required|integer',
            'line2_y1'=> 'required|integer',
            'line2_x2' => 'required|integer',
            'line2_y2' => 'required|integer',
        ]);
        
        $line1_point1 = new Point($request->get('line1_x1'), $request->get('line1_y1'));
        $line1_point2 = new Point($request->get('line1_x2'), $request->get('line1_y2'));
        $line1 = new Line($line1_point1, $line1_point2);
        
        $line2_point1 = new Point($request->get('line2_x1'), $request->get('line2_y1'));
        $line2_point2 = new Point($request->get('line2_x2'), $request->get('line2_y2'));
        $line2 = new Line($line2_point1, $line2_point2);

        $does_intersect = $line1->intersect($line2);
        $success_message = "The Two Lines Do " . ($does_intersect ? "Not " : "") . "Intersect";
        return redirect('/twolines')->with('success', $success_message);
    }
}
