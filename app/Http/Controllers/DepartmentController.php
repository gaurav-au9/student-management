<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\facades\storage;
use Illuminate\Support\facades\file;

// use Illuminate\Support\Facades\Input;
use Image;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();
        return view('backend.department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,gif,jpeg,svg|max:2048',
            
        
        ]);
        
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

          $image = $request->file('images');
          if($image!="")
          {
            $filename = time().'. '.$request->image->getClientOriginalExtension();

            storage::disk('public')->put($image->getfilename().'.'.$filename, file::get($image));
            $destinationpath = public_path('images');
            
          }

//         if( $request->hasFile('image')){ 
//         $image = $request->file('image'); 
//         $fileName = $image->getClientOriginalName();
//     $fileExtension = $image->getClientOriginalExtension();
        
    
// }
        // if($request->hasfile('image'))
        // {
        //     $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());

        //     // $image->image = 'images' . $request->file('image')->getClientOriginalName();
        // }

        // $imageName = time().'.'.request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('images'), $imageName);


        

        Department::create($request->all());
        dd($request);
        


        return redirect()->route('department.index')->with('status','Department Added Successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);
        return view('backend.department.view',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('backend.department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,
            ['name' => 'required'

        ]);

        Department::find($id)->update($request->all());
        return redirect()->route('department.index')->with('status','updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::find($id)->delete();
        return redirect()->route('department.index')->with('status','deleted successfully');
    }
}
