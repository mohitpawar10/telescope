<?php

namespace App\Mail;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Telescope\IncomingExceptionEntry;

class TelescopeException extends Mailable
{
    use Queueable, SerializesModels;

    public $exception;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(IncomingExceptionEntry $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('exception.telescope');
    }
}
