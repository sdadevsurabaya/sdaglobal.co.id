<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    // public $nama;
    // public $email;
    // public $subject;
    // public $pesan;
    // public $phone;
    /**
     * Create a new message instance.
     */
    // public function __construct($nama, $email, $phone, $subject, $pesan)
    // {
    //     $this->nama = $nama;
    //     $this->email = $email;
    //     $this->phone = $phone;
    //     $this->subject = $subject;
    //     $this->pesan = $pesan;
    // }

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Email Sender',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $mail = $this->subject($this->subjectmail)
        //     ->view('front.layout.emails.mailtemplate') // Pastikan 'mailtemplate' view ada
        //     ->with([
        //         'mailtittle' => $this->bodymail['mailtittle'],
        //         'mailbody' => $this->bodymail['mailbody'],
        //     ]);

        // if ($this->bccmail !== null) {
        //     $mail->bcc($this->bccmail);
        // }

        // return $mail;

        // dd($this->data["nama"]);

        return $this->subject('Contact US - New Message')
                    ->view('front.layout.emails.mailtemplate')
                    ->with([
                        'nama' => $this->data["nama"],
                        'email' => $this->data["email"],
                        'phone' => $this->data["phone"],
                        'subject' => $this->data["subject"],
                        'pesan' => $this->data["pesan"],
                        'usernama' => $this->data["usernama"],
                    ])
                    ;
    }
}
