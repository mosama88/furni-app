<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ThemeController extends Controller
{
    public function about(){
        return view('theme.about');
    }

    public function services(){
        return view('theme.services');
    }

    public function contact(){
        $categories = Category::get();
        return view('theme.contact', compact('categories'));
    }


    public function store(storeContactRequest $request){
        $validateData = $request->validated();


        // ([
        //     'fname' => 'required|string|min:3|max:50',
        //     'lname' => 'required|string|min:3|max:50',
        //     'email' => 'required|email|min:3|max:50',
        //     'message' => 'nullable|string|min:10|max:1500',
        // ],[
        //     'fname.required'=>'First Name Field Is Required' 
        // ]);
        Contact::create($validateData);
        return redirect('displayContact')->with('status', 'Data Has Been Sent Successfully');
    }


    public function display(){
        $contacts = Contact::paginate(5);
        return view('theme.displayContact',compact('contacts'));
    }
}


