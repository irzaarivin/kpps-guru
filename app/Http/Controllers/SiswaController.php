<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa');
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
        $validatedData = $request->validate([
            'file' => 'file|max:10480|required'
        ]);

        $folder = "irzaarivin2005@gmail.com"; //auth()->user()->email;
        $folder = explode('@', $folder);
        $folder = array_shift($folder);
        $folder = explode('.', $folder);
        $folder = array_shift($folder);

        $type = $request->file('file')->store($folder);
        $type = explode('/', $type);
        $type = end($type);
        $type = explode('.', $type);
        $type = end($type);

        if($type == "pdf") {
            $icon = '<i class="fas fa-file-pdf pdf-file"></i>';
        } elseif($type == "docx") {
            $icon = '<i class="fa-solid fa-file-word"></i>';
        } elseif($type == "pptx") {
            $icon = '<i class="fas fa-file-powerpoint ppt-file"></i>';
        } elseif($type == "xlsx") {
            $icon = '<i class="fas fa-file-excel excel-file"></i>';
        } elseif($type == "txt") {
            $icon = '<i class="fas fa-file-alt text-file"></i>';
        } elseif($type == "jpg") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "jpeg") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "png") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "webm") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "svg") {
            $icon = '<i class="fa-solid fa-file-image"></i>';
        } elseif($type == "mp4") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "mp3") {
            $icon = '<i class="fa-solid fa-music"></i>';
        } elseif($type == "mov") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "mkv") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "wmv") {
            $icon = '<i class="fas fa-file-video video-file"></i>';
        } elseif($type == "zip") {
            $icon = '<i class="fas fa-file-archive zip-file"></i>';
        } elseif($type == "rar") {
            $icon = '<i class="fas fa-file-archive zip-file"></i>';
        } else {
            $icon = '<i class="fa-solid fa-file-circle-question"></i>';
        }

        $validatedData['author'] = "M. Irza Arivin Ngibadi"; // auth()->user()->name;
        $validatedData['judul'] = $request->judul;
        $validatedData['link'] = $request->file('file')->store($folder);
        $validatedData['icon'] = $icon;
        $validatedData['type'] = $type;
        $validatedData['email'] = "irzaarivin2005@gmail.com"; //auth()->user()->email;
        $validatedData['visibility'] = $request->visibilitas;

        Document::create($validatedData);

        return redirect('/');
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
