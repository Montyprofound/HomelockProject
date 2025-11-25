<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Request;

class NewRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New ' . ucfirst(str_replace('_', ' ', $this->request->service_type)) . ' Request',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-request',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
