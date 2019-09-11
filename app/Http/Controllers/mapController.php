<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinates = \DB::select('SELECT u.id, u.lat, u.lon FROM users AS u');
        return view('map/map', ['coordinates' => $coordinates]);
    }

    public function ajax()
    {
        $coordinates = \DB::select('SELECT u.id, u.lat, u.lon, u.name FROM users AS u');
        return $coordinates;
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
        $user = auth()->user();
        $userId = $user->id;
        // locatie ophalen en opslaan in het database
        \DB::table('users')
            ->where('id', $userId)
            ->update([
                'lon' => $request->longitude,
                'lat' => $request->latitude

            ]);
        return redirect()->route('map.index');

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
