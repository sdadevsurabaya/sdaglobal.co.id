<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\EmailSender;

class ContactUsModel extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = [
        'nama',
        'email',
        'phone',
        'subject',
        'pesan',
        'sudah_baca',
    ];

    public static function boot() {
        parent::boot();
        static::created(function ($item) {

            // $nama = $item->nama;
            // $email = $item->email;
            // $phone = $item->phone;
            // $subject = $item->subject;
            // $pesan = $item->pesan;

            // $pengirim = $item->email;
            // Mail::to('andrik.suprayitno@gmail.com')
                // ->bcc('andrik.suprayitno@gmail.com')
                // ->bcc('alimasudd.dev@gmail.com')
                // ->bcc('sgi.webdev@gmail.com')
                // ->send(new EmailSender($item));
        });
    }
}
