<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audio;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all audio levels
        $audio = Audio::all();
        return response()->json($audio);
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
        $audios = new Audio();
        $request -> validate([
            'audioFile'=>'required',
            'audioResult'=>'required'
        ]);
        $filename = "";
        if($request->hasFile('audioFile')){
            $newAudioName = time() . '-' . $request->name . '.' . $request->audio->extension();
        $request->audio->move(public_path('audios'), $newAudioName);
        } else {
            $filename = Null;
        }
        $audios->audioResult = $request->audioResult;
        $audios->audio = $newAudioName;
        $result = $audios->save();

        if ($result) {
            return response()->json(['success'=>true]);
        } else {
            return response()->json(['success'=>false]);
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
