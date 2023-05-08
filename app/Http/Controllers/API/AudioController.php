<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audio;
use getID3;

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
        $getID3 = new getID3;
        $request -> validate([
            'audioFile'=>'required',
            'audioResult'=>'required'
        ]);
        $filename = "";
        if($request->hasFile('audioFile')){
            $newAudioName = $request->audioFile->getClientOriginalName();
            $request->audioFile->move(public_path('audios'), $newAudioName);
            // Analyze the audio file to get its duration
            $fileInfo = $getID3->analyze(public_path('audios/' . $newAudioName));
            $filepath = $fileInfo['filepath'];
            $size = $fileInfo['filesize'];
            $duration = $fileInfo['playtime_seconds'];
        } else {
            $filename = Null;
        }
        $audios->audioResult = $request->audioResult;
        $audios->audioFile = $newAudioName;
        $audios->duration = $duration;
        $audios->size = $size;
        $audios->filepath = $filepath;
        $audios->systemId = $request->systemId;
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
