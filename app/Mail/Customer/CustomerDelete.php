<?php

namespace App\Mail\Customer;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerDelete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        return $this->subject('Delete Customer')->view('email-templates.customer.customer-delete', ['name' => $name]);
    }
}
