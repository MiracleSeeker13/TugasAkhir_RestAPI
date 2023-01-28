<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Http\Resources\BukuResources;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $buku = Buku::select('id_buku','kode_buku','judul','edisi','ISBN','pengarang','penerbit','tahun_terbit','tempat_terbit',
            'bahasa','subjek','jumlah','cover')->get();
            return $this->responseOk($buku, 200);
            }catch(\Throwable $th){
            \Log::error($th->getMessage());
            return $this->responseError("Internal Server Error", 500);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // try{
        //     $movie = Movie::insert([
        //         "movie_name" => $input['movie_name'],
        //         "movie_year" => $input['movie_year'],
        //         "director" => $input['director'],
        //         "genre" => $input['genre']
        //     ]);
        //     return $this->responseOk(null, 200);
        // }catch (\Throwable $th){
        //     \Log::error($th->getMessage());
        //     return $this->responseError("Internal Server Error", 500);
        // }
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
    //     $input = $request->all();
        
    //     try{
    //         $movie = Movie::where('id', $id)->first();
    //         if(empty($movie)){
    //             return response()->json('Data Tidak Ditemukan', 400);
    //         }
    //         $movie->update([
    //             "movie_name" => $input['movie_name'],
    //             "movie_year" => $input['movie_year'],
    //             "director" => $input['director'],
    //             "genre" => $input['genre']                
    //         ]);
    //         return $this->responseOk(null, 200);            
    //     }catch (\Throwable $th){
    //         \Log::error($th->getMessage());
    //         return $this->responseError("Internal Server Error", 500);
    // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //     try{
    //         $movie = Movie::where('id', $id)->first();
    //         if(empty($movie)){
    //             return response()->json('Data Tidak Ditemukan', 400);
    //         }
    //         $movie->delete();
    //         return $this->responseOk(null, 200);           
    //     }catch (\Throwable $th){
    //         \Log::error($th->getMessage());
    //         return $this->responseError("Internal Server Error", 500);
    // }
    }
}
