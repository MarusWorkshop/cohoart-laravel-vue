<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function hub()
    {
        return Inertia::render('Hub', [
            'currentPage' => 'Hub'
        ]);
    }

    public function profile()
    {

        return Inertia::render('Profile');
    }
}
