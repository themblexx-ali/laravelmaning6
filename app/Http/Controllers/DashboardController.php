<?php

namespace App\Http\Controllers;

use App\Models\JamSlot;
use App\Models\dashboard;
use App\Models\Jadwal;
use App\Models\Booking;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        $booking = Booking::all();

        return view('dashboard', compact('jadwal', 'booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        // toggle status
        $jadwal->status = $jadwal->status == 'tersedia' ? 'penuh' : 'tersedia';

        $jadwal->save();

        return back()->with('success', 'Status berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
