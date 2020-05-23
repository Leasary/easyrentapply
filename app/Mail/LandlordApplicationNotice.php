<?php

namespace App\Mail;

use App\Application;
use App\Rental;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LandlordApplicationNotice extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Rental
     */
    private Rental $rental;
    private Application $application;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Rental $rental, Application $application)
    {
        $this->rental = $rental;
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.landlord-application-notice')->with([
            'rental' => $this->rental,
            'application' => $this->application
        ]);
    }
}
