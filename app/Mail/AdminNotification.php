<?php

namespace App\Mail;

use App\Models\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Request $request)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Request - ' . $this->request->service_display,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin-notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
