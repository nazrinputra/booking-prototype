<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookings.index', [
            'bookings' => Booking::with('room', 'user')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserved = Booking::where('date', $request->get('date'))->where('room_id', $request->get('room_id'))->first();
        if ($reserved) {
            return redirect()->back()->with('danger', 'Room was reserved on that date');
        } else {
            Booking::create([
                'user_id' => Auth::user()->id,
                'room_id' => $request->get('room_id'),
                'date' => $request->get('date'),
            ]);
        }

        return redirect()->route('bookings')->with('success', 'Booking created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', [
            'booking' => $booking,
            'rooms' => Room::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $reserved = Booking::where('date', $request->get('date'))->where('room_id', $request->get('room_id'))->first();
        if ($reserved && $reserved->id != $booking->id) {
            return redirect()->back()->with('danger', 'Room was reserved on that date');
        } else {
            $booking->update([
                'user_id' => Auth::user()->id,
                'room_id' => $request->get('room_id'),
                'date' => $request->get('date'),
            ]);
        }

        return redirect()->back()->with('success', 'Booking updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
