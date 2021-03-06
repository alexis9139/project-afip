<?php

namespace Modules\Authentication\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class ForgotPasswordEmail extends Mailable
{
  use Queueable, SerializesModels;

  public $usuario;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($usuario)
  {
    $this->usuario = $usuario;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->view('emails.forgotpassword')->with([
      'fecha_actual' => Carbon::now(),
    ]);
  }
}
