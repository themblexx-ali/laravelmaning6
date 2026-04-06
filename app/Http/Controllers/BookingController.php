<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\JamSlot;
use App\Models\lapangan;
use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function booking($id)
    {
        $jadwal = Jadwal::FindOrFail($id);
        $jam = JamSlot::where('tipe_hari', $jadwal->tipe_hari)->get();
        return view('booking.index', compact('jadwal', 'jam'));
    }
    public function index()
    {
        $lapangan = Lapangan::first();
        return view('booking.index', compact('lapangan'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $tanggal = $request->tanggal;

        $hari = date('l', strtotime($tanggal));
        $tipe = in_array($hari, ['Saturday', 'Sunday']) ? 'weekend' : 'weekday';

        $jam = JamSlot::where('tipe_hari', $tipe)->orderBy('jam')->get();

        return view('booking.create', compact('jam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->jam as $jam) {

            $cek = Booking::where('tanggal', $request->tanggal)
                ->where('jam', $jam)
                ->exists();

            if ($cek) {
                return back()->with('error', 'Ada jam yang sudah dibooking');
            }

            Booking::create([
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
                'tanggal' => $request->tanggal,
                'jam' => $jam,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
