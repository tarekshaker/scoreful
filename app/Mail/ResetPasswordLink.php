<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordLink extends Mailable
{
    use Queueable, SerializesModels;

    public string $resetUrl;
    public string $appName;

    /**
     * Create a new message instance.
     */
    public function __construct(string $resetUrl)
    {
        $this->resetUrl = $resetUrl;
        $this->appName = config('app.name');
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        return $this->subject('Reset your password')
                    ->view('emails.password-reset')
                    ->with([
                        'resetUrl' => $this->resetUrl,
                        'appName' => $this->appName,
                    ]);
    }
}
