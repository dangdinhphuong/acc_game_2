<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data=$data;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        $data = $this->data;
        // return $this->subject('Xác nhận tài khoản ')
        //     ->view('page.emailVerification', compact('data'))
        //     ->from('no-reply@gmail.com', 'Ogami');
        return $this->subject($data['subject'])
        ->view($data['view'], compact('data'))
        ->from(env('MAIL_FROM_ADDRESS', "no-reply@gmail.com"), env('MAIL_FROM_NAME', "no-reply"));
    }
}
