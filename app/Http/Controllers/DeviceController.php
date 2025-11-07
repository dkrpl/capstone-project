<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::latest()->paginate(10);
        return view('device.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('device.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'uuid'         => 'required|unique:devices,uuid',
            'nama_device'   => 'required|string',
            'lokasi'         => 'required|string',
            'status'         => 'required|in:aktif,nonaktif'
        ]);


        //create product
        Device::create([
            'uuid'         => $request->uuid,
            'nama_device'   => $request->nama_device,
            'lokasi'         => $request->lokasi,
            'status'         => $request->status
        ]);

        //redirect to index
        return redirect()->route('devices.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
