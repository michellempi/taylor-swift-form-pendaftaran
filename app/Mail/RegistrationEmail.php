<?php

namespace App\Mail;

use App\Models\ConcertRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ConcertRegistration $registration) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pendaftaran konser demo berhasil',
            to: $this->registration->email,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail-template.registration-successful',
            with: [
                'userName' => $this->registration->full_name,
                'ticketCategory' => ConcertRegistration::TICKET_CATEGORIES[$this->registration->ticket_category]['label'],
                'ticketQuantity' => $this->registration->ticket_quantity,
                'eventDate' => '18 Juli 2027',
                'eventTime' => '18.00 WIB',
                'eventVenue' => 'Luminous Garden, Jakarta',
                'totalPrice' => number_format(
                    $this->registration->unit_price * $this->registration->ticket_quantity,
                    0,
                    ',',
                    '.',
                ),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
