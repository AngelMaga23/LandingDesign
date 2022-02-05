<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInfo extends Mailable
{
    use Queueable, SerializesModels;

    protected $nombre;
    protected $marca;
    protected $modelo;
    protected $imagen;

    public function __construct($nombre, $marca, $modelo, $imagen)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->imagen = $imagen;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->view('contact-mail')
        ->with([
            'nombre' => $this->nombre,
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'imagen' => $this->imagen,
        ]);
    }
}
