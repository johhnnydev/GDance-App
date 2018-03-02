<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointments;
use App\User;
use Auth;


class AppointmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointments::all();
        // change the user id to name of the user
        foreach ($appointments as $appointment) {
            $id = $appointment->user_id;
            $appointment->user_id = User::find($id)->name;
        }
        // echo User::find($appointments[1]->user_id)->name;
        // return $appointments[1]->user_id;
        return view('appointments.showAppointments', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // students only 
        // return 'faaaaaaaaaak';
        return view('appointments.showAppointmentsForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ONLY STUDENTS CAN SET AN APPOINTMENTS
        // return $request->all();
        $this->validate($request,[
            'agenda' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);
        // return $request->all();
        $appointment = new Appointments;
        $appointment->agenda = $request->input('agenda');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->status = 'Pending'; //default
        $appointment->user_id = auth()->user()->id; //default
        // return $appointment;
        // date in 12 hour format
        // return date('g:i a', strtotime($appointment->time));
        $appointment->save();
        return redirect('/studentappointments');
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
        $appointment = Appointments::find($id);
        // return $appointment;
        return view('appointments.showEditAppointmentsForm', compact('appointment'));
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
        $appointment = Appointments::find($id);
        $appointment->status = $request->input('status');
        $appointment->save();
        return redirect('/appointments')->with('success', 'update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointments::find($id);
        $appointment->delete();
        return redirect('/studentappointments')->with('success', 'Appointment Cancelled');
        // return 'Appointment Cancelled';
    }
}
