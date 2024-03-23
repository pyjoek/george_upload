<?php

namespace App\Http\Controllers;

use App\Models\Gog;
use Illuminate\Http\Request;

class GogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Gog::all();
        return view('resa', ['datas' => $datas]);
    }

    public function ndex()
    {
        $datas = Gog::all();
        return response()->json($datas);
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
        $request->validate([
            'file' => 'required|max:2048', // adjust max size as needed
        ]);

        // $filename = time() . '.' . $request->file->extension();
        $filename = $request->file->getClientOriginalName();
        $request->file->move(public_path(''), $filename);

        // $file = $request->file('file');
        // $filename = $file->getClientOriginalName();
        // $file->storeAs('uploads', $filename);

        $datas = new Gog();
        $datas->compN = $request->compN;
        $datas->contP = $request->contP;
        $datas->phone = $request->phone;
        $datas->email = $request->email;
        $datas->area = $request->area;
        $datas->special = $request->special;
        $datas->product = $request->product;
        $datas->country = $request->country;
        $datas->city = $request->city;
        $datas->whatsap = $request->whatsap;
        $datas->file = $filename;
        $datas->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gog  $gog
     * @return \Illuminate\Http\Response
     */
    public function show(Gog $gog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gog  $gog
     * @return \Illuminate\Http\Response
     */
    public function edit(Gog $gog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gog  $gog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gog $gog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gog  $gog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gog $gog)
    {
        //
    }
}
