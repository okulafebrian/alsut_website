<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningManagementController extends Controller
{
    return view('members.index', [
            'members' => Member::all(),
        ]);
}
