<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
class EmailSakramenPenguatan extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('skripsivira32@gmail.com')
            ->view('email.sakramen_mail')
            ->with(
            [
                'nama_sakramen' => 'Penguatan/Krisma',
                'batas_konfirmasi' => Carbon::now()->addDays(3)
            ]);
        
    }
}