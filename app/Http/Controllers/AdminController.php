<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function project(){

        $allprojects = Project::all();
        return view('project',compact('allprojects')); 
    }
    public function vAddproject(){
        return view('admin.addproject');
    }

    // for viewing add skill page
    public function vaddskill(){
        return view('admin.addskill');
    }
    // add skill to skill page

    public function Addskill(request $request){
        $skill= new Skill();
        $skill->title= $request->has('title')? $request->get('title'):'';
        $skill->category= $request->has('category')? $request->get('category'):'';
        $skill->description= $request->has('description')? $request->get('description'):'';
        if($request->hasFile('image')){
            $files = $request->file('image');
            $imageLocation= array();
            $i=0;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileName= 'skill_'. time() . ++$i . '.' . $extension;
                $location= '/skills/uploads/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[]= $location. $fileName;
            }

            $skill->image= implode('|', $imageLocation);
            $skill->save();
            return back()->with('success', 'skill Successfully Saved!');
        } else{
            return back()->with('error', 'skill was not saved');
        }
    }
    public function addprojectdbms(Request $request){
        $project= new Project();
        $project->ptitle= $request->has('ptitle')? $request->get('ptitle'):'';
        $project->fend= $request->has('fend')? $request->get('fend'):'';
        $project->bend= $request->has('bend')? $request->get('bend'):'';
        $project->dbms= $request->has('dbms')? $request->get('dbms'):'';
        $project->pdescription= $request->has('pdescription')? $request->get('pdescription'):'';
        if($request->hasFile('image')){
            $files = $request->file('image');
            $imageLocation= array();
            $i=0;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileName= 'project_'. time() . ++$i . '.' . $extension;
                $location= '/project/uploads/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[]= $location. $fileName;
            }

            $project->image= implode('|', $imageLocation);
            $project->save();
            return back()->with('success', 'project Successfully Saved!');
        } else
            return back()->with('error', 'project was not saved');
    }

    // Specfic project view
    public function projectView($id){
        $data = DB::table('projects')->where('id',$id)->get();
        return view('projectView',compact('data'));
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
}
