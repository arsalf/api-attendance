<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    //
    public function list($jadwal_id, $kelas)
    {
        // list mahasiswa dengan jadwal dan kelas tertentu
        $data = DB::select('select `mahasiswa`.*, `absensi`.`status`, `absensi`.`keterlambatan` from `mahasiswa` left join (SELECT * FROM `absensi` WHERE `jadwal_id` = ?) AS `absensi` ON `mahasiswa`.`nim` = `absensi`.`mahasiswa_nim` WHERE `mahasiswa`.`kelas_kode` = ?', [$jadwal_id, $kelas]);

        // $query = DB::getQueryLog();

        // dd($data);

        // return json
        return response()->json([
            'message' => 'List mahasiswa',
            'data' => $data
        ], 200);
    }

    public function isAbsenToday($jadwal, $nim)
    {
        $data = Absensi::where('jadwal_id', $jadwal)->where('mahasiswa_nim', $nim)->first();

        if ($data) {
            return response()->json([
                'message' => 'Presensi berhasil',
                'data' => [
                    'status' => $data->status,
                    'keterlambatan' => $data->keterlambatan
                ]
            ], 200);
        } else {
            return response()->json([
                'message' => 'Presensi berhasil',
                'data' => [
                    'status' => 0,
                    'keterlambatan' => 0
                ]
            ], 200);
        }
    }
}
