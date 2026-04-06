<?php

namespace App\Http\Controllers;

use App\Models\JamSlot;
use App\Models\jadwal;
use App\Models\lapangan;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapangan = Lapangan::with('jadwals')->get();
        $jam_slots_weekday = JamSlot::where('tipe_hari', 'weekday')->get();
        $jam_slots_weekend = JamSlot::where('tipe_hari', 'weekend')->get();

        return view('jadwal.index', compact('lapangan', 'jam_slot_weekday', 'jam_slot_weekend'));
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
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        //
    }
}
