<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    //
    public function show($kode)
    {
        $data = Jadwal::with("kelas", "mata_kuliah")->where('kode_jadwal', $kode)->first();

        // return json
        return response()->json([
            'message' => 'List mahasiswa',
            'data' => $data
        ], 200);
    }

    public function presensi(Request $request, $jadwal, $nim)
    {
        $data = Absensi::where('jadwal_id', $jadwal)->where('mahasiswa_nim', $nim)->first();

        if ($data) {
            $data->update([
                'status' => $request->status,
                'keterlambatan' => $request->keterlambatan,
            ]);
        } else {
            $data = Absensi::create([
                'jadwal_id' => $jadwal,
                'mahasiswa_nim' => $nim,
                'status' => $request->status,
                'keterlambatan' => $request->keterlambatan
            ]);
        }

        // return json
        return response()->json([
            'message' => 'Presensi berhasil',
            'data' => $data
        ], 200);
    }

    public function presensiHadirSemua(Request $req)
    {
        $kelas = Jadwal::find($req->jadwal_id)->kelas_kode;

        $mahasiswa = DB::table('mahasiswa')
            ->select('mahasiswa.*')
            ->where('mahasiswa.kelas_kode', $kelas)
            ->get();
        // return $mahasiswa;
        foreach ($mahasiswa as $mhs) {
            $data = Absensi::where('jadwal_id', $req->jadwal_id)->where('mahasiswa_nim', $mhs->nim)->first();

            if ($data) {
                $data->update([
                    'status' => "hadir",    
                    'keterlambatan' => null
                ]);
            } else {
                $data = Absensi::create([
                    'jadwal_id' => $req->jadwal_id,
                    'mahasiswa_nim' => $mhs->nim,
                    'status' => "hadir"                    
                ]);
            }
        }

        // return json
        return response()->json([
            'message' => 'Presensi berhasil',
            'data' => $data
        ], 200);
    }
}
