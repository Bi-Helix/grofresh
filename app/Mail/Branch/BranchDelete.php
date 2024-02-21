<?php

namespace App\Mail\Branch;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BranchDelete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $branch;

    public function __construct($branch)
    {
        $this->branch = $branch;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $branch = $this->branch;
        return $this->subject('Delete Branch')->view('email-templates.branch.branch-delete', ['branch' => $branch]);
    }
}
