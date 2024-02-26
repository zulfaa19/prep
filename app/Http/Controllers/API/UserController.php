<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('name','asc') ->get();
        return view('welcome', compact('data'));
        // return view('your_blade_view', compact('apiResult'));
        // return response()->json([
        //     'status' => true,
        //     'message' => 'Data ditemukan',
        //     'data' => $data
        // ], 200);
    }

    public function indexApi()
    {
        $data = User::orderBy('id','asc') ->get();
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
    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email', // Memastikan email unik

            ]);



            // Membuat instance model User
            $dataUser = new User;
            $dataUser->name = $request->name;
            $dataUser->email = $request->email;
            $dataUser->roles = 'instructor';
            $dataUser->save();

            return response()->json([
                'status' => true,
                'message' => 'Sukses memasukkan data'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangkap exception jika validasi gagal
            return response()->json([
                'status' => false,
                'message' => 'gagal '
            ], 422); // 422 adalah kode status untuk Unprocessable Entity
        }
    }


    public function store1(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email', // Memastikan email unik
                'id_kategori' => 'required|exists:kategori,id', // Memastikan ID kategori terdaftar dalam tabel categories
            ]);

            // Mengambil nama kategori berdasarkan ID
            $kategori = Kategori::findOrFail($request->id_kategori);
            $namaKategori = $kategori->nama;

            // Membuat instance model User
            $dataUser = new User;
            $dataUser->name = $request->name;
            $dataUser->email = $request->email;
            $dataUser-> id_kategori = $request->id_kategori;
            $dataUser->nama_kategori = $namaKategori; // Menggunakan nama kategori

            // Menyimpan data pengguna
            $dataUser->save();

            // Mengembalikan respons sukses
            return response()->json([
                'status' => true,
                'message' => 'Sukses memasukkan data'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangkap exception jika validasi gagal
            return response()->json([
                'status' => false,
                'message' => 'Kategori tidak ditemukan'
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
