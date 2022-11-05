<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
       
        $validator = validator::make($request->all(), [

    'name' => 'required|max:255',
    'roll' => 'required|unique:students|max:255',
    'registion' => 'required|max:255',
    'depatment' => 'required',
    'semester' => 'required|max:255',
    'session' => 'required|max:255',
    'phone' => 'required|max:255',
    'email' => 'required|max:80',
    'password' => 'required|min:6|max:12',
    
]);


if($validator->fails()){
    // dd($validator->getMessageBag());
   return redirect(url('/'))->withErrors($validator)->withInput();
}




     //insert data
    $student = new Student();
    $student->name = $request->name;
    $student->roll = $request->roll;
    $student->registion = $request->registion;
    $student->depatment = $request->depatment;
    $student->semester = $request->semester;
    $student->session = $request->session;
    $student->phone = $request->phone;
    $student->email = $request->email;
    $student->password = $request->password;
  
    $student->save();
    session()->flash('msg','Student Successfully Added');
    return redirect()->back();
}


 
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $students = student::all();
        //return $students;
       return view('student/studentlist_view',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edits($student_id)
    {
        $studentEdit= student::find($student_id);
        return view('student/studentedit',compact('studentEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'roll' => 'required|max:255', 
            'registion' => 'required|max:255',
            'depatment' => 'required',
            'semester' => 'required',
            'session' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $validator->validated();
        if($validator->fails()){
            return redirect(url('/studentedit'))->withErrors($validator)->withInput();
        }

        //update

        $UpdateData = student::find($id);
        $UpdateData->name = $request->name;
        $UpdateData->roll = $request->roll;
        $UpdateData->registion = $request->registion;
        $UpdateData->depatment = $request->depatment;
        $UpdateData->semester = $request->semester;
        $UpdateData->session = $request->session;
        $UpdateData->phone = $request->phone;
        $UpdateData->email = $request->email;
        $UpdateData->password = $request->password;
        $UpdateData->save();
        session()->flash('msg','Student Updated Successfully');
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //DB::table('students')->where('id',$id)->delete();
        // $student=Student::find($id);
        // $student->delete();
        Student::destroy($id);
        return redirect()->back()->with('msg','Student Deleted Successfully');
    }
}
