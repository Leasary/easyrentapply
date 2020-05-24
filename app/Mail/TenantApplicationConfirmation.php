<?php

namespace App\Mail;

use App\Rental;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TenantApplicationConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Rental
     */
    private Rental $rental;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Rental $rental)
    {
        $this->rental = $rental;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.tenant-application-confirmation')
            ->subject("Application Submitted to {$this->rental->address}");
    }
}
