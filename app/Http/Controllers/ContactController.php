<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use \App\Http\Models\Contact;

class ContactController extends Controller
{
    //
    public function get_index(){
        return view('contact');
    }
    
    public function post_save_message(Request $request) {
//        $test = \DB::table('contact')->get();
//        print_R($test);die;
        try {
            
            \DB::beginTransaction();
//            
            $contact = new Contact;
//            $contact->setConnection('mysql_test');
            $contact->fill([
//                "id"                => '1',
                "name"              => $request->name,
                "email"             => $request->email,
                "phone"             => $request->phone,
                "message"           => $request->message,
            ])->save();
//
            \DB::commit();
            return json_encode(true);

        } catch (Exception $e) {
            \DB::rollback();
            return json_encode(false);   
        }
    }
}
