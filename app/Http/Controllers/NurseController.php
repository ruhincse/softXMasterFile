<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        return view('backend.nurse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nurse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function addQutalification(Request $request){




        if ($request->ajax()) {            

            $output  = '<tr id="test_row_'.$request->exam_qty.'">';



            $output .= '<input type="hidden" name="exam_name[]" value="'.$request->examName.'" />';
            $output .= '<td> '.$request->examName.' </td>';
             $output .= '<td >'.$request->examGroup.' <input type="hidden" name="exam_group[]" value="'.$request->examGroup.'" />';
             $output .= '<td >'.$request->examYear.' <input type="hidden" name="exam_year[]" value="'.$request->examYear.'" />';
             $output .= '<td >'.$request->examGrade.' <input type="hidden" name="exam_year[]" value="'.$request->examYear.'" />';
             $output .= '<td >'.$request->universityName.' <input type="hidden" name="exam_board[]" value="'.$request->universityName.'" />';       
             
            $output .= '<td width="10%">
                        <button type="button" class="btn-remove btn btn-sm btn-danger"  data-testid="'.$request->exam_qty.'">
                            Delete
                        </button>
                        </td>';
            $output .= '</tr>';


           


            echo json_encode($output);
        }

    }
}
