<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserKategori;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class UserKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserKategori::orderBy('nama_user','asc') ->get();
        return view('welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'id_user' => 'required|exists:users,id',              
                'id_kategori' => 'required|exists:kategori,id',
            ]);
    
           
            $kategori = Kategori::findOrFail($request->id_kategori);
            $idKategori = $kategori->id;
            $namaKategori = $kategori->nama;

            $cariUser = User::findOrFail($request->id_user);
            $idUser = $cariUser->id;
            $namaUser = $cariUser->name;
    
          
            $dataUser = new UserKategori;
            $dataUser->id_user = $idUser;
            $dataUser->nama_user = $namaUser;
            $dataUser-> id_kategori = $idKategori;
            $dataUser-> nama_kategori = $namaKategori;
           
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
            } elseif (isset($e->errors()['id_kategori'])) {
                $message = 'Kategori tidak ditemukan';
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
    public function show($id)
    {
        
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
