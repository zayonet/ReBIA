<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\user;

class UserRegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;
     
    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this
                ->subject('Conta criada com successo')
                ->replyTo('zayonet4@gmail.com')
                ->from('zayonet4@gmail.com', 'ReBIA')
                ->view('emails.confirmation-register')->with(['user' => $this->user]);
    }
}
