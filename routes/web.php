<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Get Requets */

Route::get('/',
  function()
  {
    return view('index')->with('titlePrefix', 'Home');
  }
);

Route::get('/sample-designs',
  function()
  {
    return view('sample-designs')->with('titlePrefix', 'Sample Desings');
  }
);

Route::get('/tools-and-techniques',
  function()
  {
    return view('tools-and-techniques')->with('titlePrefix', 'Tools and Techniques');
  }
);

Route::get('/make-appointment',
  function()
  {
    return view('make-appointment')->with('titlePrefix', 'Make Appointment');
  }
);

Route::get('/contact-us',
  function()
  {
    return view('contact-us')->with('titlePrefix', 'Contact Us');
  }
);



/* Post Requests */

Route::post('/make-appointment', 'MakeAppointmentController@postRequestAppointment');

Route::post('/contact-us', 'ContactUsController@postContactUs');
