<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalendarEvent;

class CalendarController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function getEvents()
    {
        $calendarEvents = CalendarEvent::all();

        return response()->json($calendarEvents);
    }

    public function getEventInfo($eventId=0)
    {
        $calendarEvent = CalendarEvent::where('id',$id)->first();

        return response()->json($calendarEvent);
    }

    public function addEvent(Request $request)
    {

    }
}
