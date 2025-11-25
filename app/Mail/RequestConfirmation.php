<?php

namespace App\Mail;

use App\Models\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Request $request)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request Confirmation - Homelock Services',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.request-confirmation',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
