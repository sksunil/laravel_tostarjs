<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {

        $name = $request->get('name');

        if ($name == "info") {
            $notification = array(
                'message' => 'I am a info message!',
                'alert-type' => 'info'
            );
        } else if ($name == "success") {
            $notification = array(
                'message' => 'I am a successful message!',
                'alert-type' => 'success'
            );
        } else if ($name == "warning") {
            $notification = array(
                'message' => 'Warning message!',
                'alert-type' => 'warning'
            );
        } else {
            $notification = array(
                'message' => 'Error message',
                'alert-type' => 'error'
            );
        }

        return back()->with($notification);
    }


    public function se()
    {

        $notification = array(
            'message' => 'Data Insert successfully message',
            'alert-type' => 'warning'
        );
        return back()->with($notification);

    }
}
