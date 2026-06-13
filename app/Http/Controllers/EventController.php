<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function show(Event $event)
    {
        return view('event-detail', compact('event'));
    }
    //halaman Checkout
    public function checkout()
    {
        return View("checkout");
    }

    public function ticket()
    {
        return view('ticket'); 
    }
}