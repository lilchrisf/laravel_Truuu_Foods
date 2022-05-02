<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ContactModel::all();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view('contact', compact('contact','cartcount'));
    }

    public function contactForm()
    {
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view('contact', compact('cartcount'));
    }

    public function store(Request $request)
    {
            $product = new ContactModel;
            $product->name = $request->input('name');
            $product->email = $request->input('email');
            $product->phone = $request->input('phone');
            $product->subject = $request->input('subject');
            $product->message = $request->input('message');
            $product->save();
            return redirect()->back()->with(['success' => 'Message send Successfully']);
    }

        public function create()
        {
            return view('dashboard');
        }




    public function destroy(ContactModel $contact)
    {
        $contact->delete();

        return redirect()->route('message')
            ->with('success','Category deleted successfully');
    }


    public function messageList()
    {
        $messages = ContactModel::all();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view('dashmessage', compact('messages','cartcount'));
    }
}
