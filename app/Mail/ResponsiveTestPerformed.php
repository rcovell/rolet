<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResponsiveTestPerformed extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Website test was performed on.
   *
   * @var $websitUrl
   */
  public $websiteUrl;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->view('templates.email.responsive-test');
  }
}
