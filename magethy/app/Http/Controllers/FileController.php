<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto')) ;
        $files=DB::table('files')
                    ->select('id','name','work_days_id') 
                    ->where('name','LIKE','%'.$texto.'%')
                    ->orderBy('name','asc')
                    ->paginate(5);

        return view('files.index', compact('files','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file= File::create([
            'name'=>$request->input('name'),
            'work_days_id'=>$request->input('work_days_id')
               
        ]);
        
        return redirect()->route('files.index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file =File::find($id);
        return view('files.show', compact('file'));
    
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = File::find($id);
        return view('files.edit', compact('file'));
    
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
        $file= File::find($id)->update([
            'name'=>$request->input('name'),
            'work_days_id'=>$request->input('work_days_id')
            
        ]);
        return redirect()->route('files.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file= File::find($id)->delete($id);
        return redirect()->route('files.index');
    
    }
}
