<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index() {
        return view('pages.login');
   }
   public function storekeeper() {
       $data=array(
        'title' => 'panel',
        'panel'=>['Add / Remove goods','Assign consignment
to employee']
       );
    return view('pages.storekeeper')->with($data);
}
}
