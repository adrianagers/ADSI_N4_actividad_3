<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto')) ;
        $students=DB::table('students') 
                    ->select('id','name','lastname','email','phone','work_days_id','files_id','teachers_id') 
                    ->where('name','LIKE','%'.$texto.'%')
                    ->orwhere('lastname','LIKE','%'.$texto.'%')
                    ->orwhere('email','LIKE','%'.$texto.'%')
                    ->paginate(5);

        return view('students.index', compact('students','texto'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student= Student::create([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'work_days_id'=>$request->input('work_days_id'),
            'files_id'=>$request->input('files_id'),
            'teachers_id'=>$request->input('teachers_id')   
        ]);
        
        return redirect()->route('students.index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student =Student::find($id);
        return view('students.show', compact('student'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    
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
        $student= Student::find($id)->update([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'work_days_id'=>$request->input('work_days_id'),
            'files_id'=>$request->input('files_id'),
            'teachers_id'=>$request->input('teachers_id')
               
            
        ]);
        return redirect()->route('students.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student= Student::find($id)->delete($id);
        return redirect()->route('students.index');
    
    }
}
