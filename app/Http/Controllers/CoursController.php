<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function showCours()
    {
    
        return view("admin.showCours");
    }
    public function save(Request $req)
    {
    //check your file extension to secure your application
        $req->validate([
            "course_name" => "required",
            "icon_url" => 'image|mimes:csv,txt,xlx,xls,pdf,jpeg,jpg|max:2048',
            "description" => "required",
            "course_text" => "required",
        ]);

        if($req->hasFile('icon_url')) {
            
            $fileNameWithExtension = time().'_'.$req->file('icon_url')->getClientOriginalName();
            
            $req->file('icon_url')->storeAs('uploads', $fileNameWithExtension, 'public');
        
        }else{
            $fileNameWithExtension="no image";
        }
        // 
        $course =new Cours();
        $course->nom =$req->input('course_name');
        $course->icone =$fileNameWithExtension;
        $course->description =$req->input('description');
        $course->texte =$req->input('course_text');

        
        $course->save();
        return redirect()->route('cours.show')->with('status',"le cours a été ajouter avec succèss");
  

}
    public function getCoursById($id)
    {
       $itemCourse=Cours::find($id);
        return view("cours")->with("itemCourse",$itemCourse);
    }

    public function edit($id)
    {
        $itemCourse=Cours::find($id);
        return view("admin.updateCourse")->with("itemCourse",$itemCourse);
    }


    public function updateCours(Request $request, $id)
    {
       $request->validate([
          'course_name' => 'required',
          'description' => 'required',
          'course_text' => 'required',
       ]);

       $cours= Cours::find($id);
       $cours->nom=$request->input('course_name');
       $cours->description=$request->input('description');
       $cours->texte=$request->input('course_text');
       $cours->icone=$request->input('icon_url');
       //dd($cours);

       $cours->update();

        return back()->with('status', "Cours $cours->nom modifier avec success");
    }

   public function deleteCours($id)
   {
       $cours_item=Cours::find($id);
          $cours_item->delete();

       return back()->with("status","Supprimer avec succèss");
   }

   public function showTableCourse()
   {
    $list_courses=Cours::get();
       return view('admin.list_courses')->with('list_courses', $list_courses);
   }

}
