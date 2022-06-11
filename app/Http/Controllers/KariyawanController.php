<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Kariyawan;
use Illuminate\Http\Request;

class KariyawanController extends Controller
{
    public function get()

    {

        Kariyawan::latest()->get();

    }
    public function store(Request $request)

    {

        $jabatan = Jabatan::findOrFail(request('jabatan'));


        $kariyawan = Kariyawan::create([

            'name' => ['required'],
            'jabatan_id' => ['required'],
            'gajih' => ['required']
        ]);
        return response()->json([
            'message' => "berhasil Tambah data",
            'kariyawan' => $kariyawan
        ]);



    }

    public function update(Request $request,$id)

    {

        $kariyawan = Kariyawan::find($id)->update([
            'name' => $request->name,
            'jabatan_id' => $request->jabatan_id,
            'gajih' => $request->gajih
        ]);
        return response()->json([
            'message' => "berhasil update",
            'kariyawan' => $kariyawan,
        ]);

    }

    public function delete($id)

    {

        $kariyawan = Kariyawan::find($id)->delete();
        return response()->json([
            'message' => "berhasil menhapus",
            'kariyawa' => $kariyawan
        ]);

    }
}
