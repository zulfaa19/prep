<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\DetailMentor;
use App\Models\User;
use Illuminate\Http\Request;

class DetailMentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DetailMentor::orderBy('nama_user','asc') ->get();
        // return view('your_blade_view', compact('apiResult'));
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createDetailMentor(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'id_user' => 'required|exists:users,id',              
                'deskripsi' => 'required|string',
            ]);
    
           

            $cariUser = User::findOrFail($request->id_user);
            $idUser = $cariUser->id;
            $namaUser = $cariUser->name;
    
          
            $dataUser = new DetailMentor;
            $dataUser->id_user = $idUser;
            $dataUser->nama_user = $namaUser;
            $dataUser->deskripsi = $request -> deskripsi;
           
            $dataUser->save();
    
           
            return response()->json([
                'status' => true,
                'message' => 'Sukses memasukkan data'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangkap exception jika validasi gagal
            $message = '';
            if (isset($e->errors()['id_user'])) {
                $message = 'User tidak ditemukan';
            } else {
                $message = 'Terjadi kesalahan validasi';
            }

            return response()->json([
                'status' => false,
                'message' => $message
            ], 422); // 422 adalah kode status untuk Unprocessable Entity
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function findDetailByUserId($id)
    {
        try {
           
            $detailMentor = DetailMentor::where('id_user', $id)->firstOrFail();
    
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $detailMentor,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404); // 404 adalah kode status untuk Not Found
        }
    }

    public function CariDetailMentor($id)
    {
        try {
            // Cari detail mentor berdasarkan id_user
            $detailMentor = DetailMentor::where('id_user', $id)->firstOrFail();

            // Mengembalikan respons tampilan
            return view('detailmentor', ['detailMentor' => $detailMentor]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Tangkap exception jika data tidak ditemukan
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404); // 404 adalah kode status untuk Not Found
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
