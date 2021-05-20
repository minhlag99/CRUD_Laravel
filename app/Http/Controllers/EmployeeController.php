<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all(); //fetch all blog posts from DB;
	    return view('contents.list',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEmployee = Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            
        ]);
        if( $newEmployee){
            $message='Success!';
            $employees = Employee::all();
            return view('contents.list',compact('message'))->with('employees',$employees);
        }
        else{
            $message='Fail!';
            return Redirect('/employee/create')->with(compact('message'));
        }
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
        $getData = DB::table('employees')->select()->where('id',$id)->get();
	    return view('contents.edit')->with('getEmployee',$getData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updateData = DB::table('employees')->where('id', $request->id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email
        ]);
        
        //Kiểm tra lệnh update để trả về một thông báo
        if( $updateData){
            $message='Success!';
            $employees = Employee::all();
            return view('contents.list',compact('message'))->with('employees',$employees);
        }
        else{
            $message='Fail!';
            return Redirect('/employee')->with(compact('message'));
        }
        
        //Thực hiện chuyển trang
        return redirect('hocsinh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = DB::table('employees')->where('id', '=', $id)->delete();
        return redirect('employee');
    }
}
