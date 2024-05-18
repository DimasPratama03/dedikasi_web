<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FullyFundedPremium;

class FullyFundedPremiumController extends Controller
{
    public function index()
    {
        $data = FullyFundedPremium::all();
        return view('fully-funded-premium.index', compact('data'));
    }

    public function create()
    {
        return view('fully-funded-premium.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string',
            'domisili' => 'required|string',
            'instansi' => 'required|string',
            'nomor_whatsapp' => 'required|string',
            'username_instagram' => 'required|string',
            'alasan_mengikuti' => 'required|string',
            'divisi' => 'required|string',
            'alasan_divisi' => 'required|string',
            'riwayat_penyakit' => 'nullable|string',
            'kondisi_lapangan' => 'nullable|string',
        ]);

        FullyFundedPremium::create($request->all());

        return redirect()->route('fully-funded-premium.index')->with('success', 'Data successfully added.');
    }

    public function edit($id)
    {
        $data = FullyFundedPremium::findOrFail($id);
        return view('fully-funded-premium.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string',
            'domisili' => 'required|string',
            'instansi' => 'required|string',
            'nomor_whatsapp' => 'required|string',
            'username_instagram' => 'required|string',
            'alasan_mengikuti' => 'required|string',
            'divisi' => 'required|string',
            'alasan_divisi' => 'required|string',
            'riwayat_penyakit' => 'nullable|string',
            'kondisi_lapangan' => 'nullable|string',
        ]);

        $data = FullyFundedPremium::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('fully-funded-premium.index')->with('success', 'Data successfully updated.');
    }

    public function destroy($id)
    {
        $data = FullyFundedPremium::findOrFail($id);
        $data->delete();

        return redirect()->route('fully-funded-premium.index')->with('success', 'Data successfully deleted.');
    }
}
