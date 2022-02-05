<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendInfo;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function sendMailContact(Request $request, $type = 'stream')
    {
        $nombre = $request->input('full_name');
        $marca = $request->input('marca');
        $modelo = $request->input('modelo');
        $foto = base64_encode(file_get_contents($request->file('foto')));

        Mail::to("jobs@talentscode.com")->send(new SendInfo($nombre, $marca, $modelo, $foto));

        return response()->json([
            "message" => "ok"
        ]);
    }

    public function Ejemplo(Request $request)
    {
        $nombre = $request->input('full_name');
        $marca = $request->input('marca');
        $modelo = $request->input('modelo');
        $imagen = base64_encode(file_get_contents($request->file('foto')));

        return view('contact-mail')
        ->with([
            'nombre' => $nombre,
            'marca' => $marca,
            'modelo' => $modelo,
            'imagen' => $imagen,
        ]);
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
        //
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
