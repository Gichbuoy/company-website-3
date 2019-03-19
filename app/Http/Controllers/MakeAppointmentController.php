<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakeAppointmentController extends Controller
{
  public function postRequestAppointment(Request $request)
  {
    try
    {
      DB::insert('insert into T_NAME(first_name, middle_name, last_name,
        phone, email, appointment_type, details) values(?, ?, ?, ?, ?, ?, ?)',
        [$request->firstName, $request->middleName, $request->lastName, $request->phone, $request->email,
          $request->appointmentType, $request->details]);

      return response([
        'status' => 'success'
      ]);
    }
    catch(Exception $e)
    {
      return response([
        'status' => 'fail'
      ]);
    }
  }
}
