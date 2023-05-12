<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor ->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect()->back()->with('message', 'doctor added successfully');
    }
    public function show_appointments()
    {
        $data = Appointment::all();

        return view('admin.show_appointments', compact('data') );
    }
    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
    public function cancelled($id)
    {
        $data=appointment::find($id);
        $data->status='cancelled';
        $data->save();
        return redirect()->back();
    }
    public function show_doctors()
    {
        $data = Doctor::all();
        return view('admin.doctors', compact('data'));
    }
    public function delete_doctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'doctor deleted successfully');
    }
    public function update_doctor( $id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
public function editDoctor(Request $request, $id)
{
    $data = Doctor::find($id);
    $data->name = $request->name;
    $data->phone = $request->phone;
    $data->speciality = $request->speciality;
    $data->room = $request->room;
    $image = $request->file;
    if ($image) {
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $data->image = $imagename;
    }

    $data->save();
    return redirect()->back()->with('message', 'doctor updated successfully');
}


}
