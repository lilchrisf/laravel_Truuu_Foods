<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::latest()->paginate(5);

        return view('dashmembers',compact('members'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function memberList()
    {
        $members = User::all();

        return view('dashmembers', compact('members'));
    }
}
