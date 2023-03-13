<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class forMeson extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $numero_personas;
    public $fecha;
    public $hora;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $numero_personas, $fecha, $hora)
    {
        $this->name = $name;
        $this->email = $email;
        $this->numero_personas = $numero_personas;
        $this->fecha = $fecha;
        $this->hora = $hora;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: "$this->name esta reservando!",
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'components.mails.new-reserve-restaurant',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
