<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class KichHoatTaiKhoan extends Mailable
{
    use Queueable, SerializesModels;

    public $hash_active;
    public $name;

    public function __construct($hash_active, $name)
    {
        $this->hash_active   = $hash_active;
        $this->name = $name;
    }

    public function build() {
        return $this->subject("Kích Hoạt Tài Khoản DZFullStack 16")->view('mail_kich_hoat_tai_khoa', ['hash_active' => $this->hash_active, 'name' => $this->name]);
    }
}
