<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\JamSlot;
use App\Models\Lapangan;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // masuk dari klik "buat pesanan"
    public function booking($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jam = JamSlot::where('tipe_hari', $jadwal->tipe_hari)->get();

        return view('booking.index', compact('jadwal', 'jam'));
    }

    // form isi booking
    public function create(Request $request)
    {
        $jam = JamSlot::FindOrFail($request->jam_slot_id);

        return view('booking.create', compact('jam'));
    }

    // simpan booking
    public function store(Request $request)
    {
        // dd($request->all());
        // VALIDASI
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'tanggal' => 'required|date',
            'jam_slot_id' => 'required',
            'pembayaran' => 'required',
        ]);

        // CEK BENTROK
        $cek = Booking::where('jam_slot_id', $request->jam_slot_id)
            ->where('tanggal', $request->tanggal)
            ->exists();

        if ($cek) {
            return back()->with('error', 'Jam sudah dibooking!');
        }

        // SIMPAN
        Booking::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'tanggal' => $request->tanggal,
            'jam_slot_id' => $request->jam_slot_id,
            'pembayaran' => $request->pembayaran,
        ]);
        return redirect()->back()->with('success', 'Booking berhasil!');

        return redirect('/')->with('success', 'Booking berhasil!');
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
