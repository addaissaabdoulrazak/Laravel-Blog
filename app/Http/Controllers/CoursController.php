<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function addCourse()
    {
    
        return view("admin.ajouterCours");
    }
    public function save(Request $request)
    {
        $request->validate([
            "course_name" => "required",
            // "icon_url" => "image|nullable|max:1999",
            "description" => "required",
            "course_text" => "required",
        ]);
        $course =new Cours();
        $course->nom =$request->input('course_name');
        $course->icone =$request->input('icon_url');
        $course->description =$request->input('description');
        $course->texte =$request->input('course_text');
        // dd(  $course);
        $course->save();
        return redirect("/addCourse")->with('status',"le cours a été ajouter avec succèss");
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

       return redirect("/");
   }

   public function showTableCourse()
   {
    $list_courses=Cours::get();
       return view('admin.list_courses')->with('list_courses', $list_courses);
   }

}
