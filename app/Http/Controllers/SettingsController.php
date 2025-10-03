<?php

namespace App\Http\Controllers;

use index;
use Inertia\Inertia;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return Inertia::render('Settings/Index');
    }
}
