<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\detail;

class pagesController extends Controller
{
    
    //
    public function index()
    {
      return redirect('/login');
    }

    public function service()
    {
        $data=array(
            'title'=>'services',
            'services'=>['web design','programming','seo']
        );
    	return view('pages.service')->with($data);
    }
    
    public function about()
    {
        $title='About Us';
    	return view('pages.about')->with('title',$title);
    }
     public function addemploy()
    {
        return view('pages.addEmploy') ;
    }
      public function viewdetail()
    {
        $title=' detail of employ';
        $employ=detail::paginate(5);
        return view('pages.viewdetail',compact('employ',$employ));
    }
      public function editemploy($id)
    {
        $employee=detail::find($id);

        return view('pages.updateemploy',compact('employee',$id));
    }
     public function updateemploy(Request $request , $id)
    {
        $employ=detail::find($id);
        $employ->fristname=$request->input('fristname');
        $employ->middlename=$request->input('Middlename');
        $employ->lastname=$request->input('lastname');
        $employ->gender=$request->input('gender');
        $employ->monthly_salary=$request->input('salary');
        $employ->exprience=$request->input('exprience');
        $employ->hiring_data=$request->input('hiring_date');
        $employ->save();
        return redirect('/viewdetail')->with('success','Employee Data Updated  Successfully');
    }
     public function deletemploy($id)
    {
        $employ=detail::find($id);
        $employ->delete();
        return redirect('/viewdetail')->with('success','Employee Data Deleted  Successfully');
    }
         public function save_employ(Request $request)
    {

       // $this->validate($request,[]);
        $employ=new detail();
        $employ->fristname=$request->input('fristname');
        $employ->middlename=$request->input('Middlename');
        $employ->lastname=$request->input('lastname');
        $employ->gender=$request->input('gender');
       // $employ->user_role= 0;
        $employ->monthly_salary=$request->input('salary');
        $employ->exprience=$request->input('exprience');
        $employ->hiring_data=$request->input('hiring_date');
        $employ->save();

        return redirect('/viewdetail')->with('success','Employee Data Added  Successfully');
    }




}
