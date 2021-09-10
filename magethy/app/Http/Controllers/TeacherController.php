<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto')) ;
        $teachers=DB::table('teachers')
        ->select('id','name','lastname','phone','email','work_days_id','files_id')
        ->where('name','LIKE','%'.$texto.'%')
        ->orwhere('lastname','LIKE','%'.$texto.'%') 
        ->orwhere('email','LIKE','%'.$texto.'%') 
        ->orderBy('name','asc')
        ->paginate(5);

        return view('teachers.index', compact('teachers','texto'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher= Teacher::create([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'work_days_id'=>$request->input('work_days_id'),
            'files_id'=>$request->input('files_id')
            
               
        ]);
        
        return redirect()->route('teachers.index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show', compact('teacher'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit', compact('teacher'));
    
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
        $teacher= Teacher::find($id)->update([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'work_days_id'=>$request->input('work_days_id'),
            'files_id'=>$request->input('files_id')
                           
            
        ]);
        return redirect()->route('teachers.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher= Teacher::find($id)->delete($id);
        return redirect()->route('teachers.index');
    }
}
