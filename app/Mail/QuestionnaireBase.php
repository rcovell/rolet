<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Http\Controllers\QuestionnaireController;

class QuestionnaireBase extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Form request information.
   *
   * @param  \Illuminate\Http\Request  $request
   */
  public $request;

  /**
   * All form variables.
   *
   * @var  array  $input
   */
  public $input;

  /**
   * Access to controller for all questionnaires.
   *
   * @var  App\Http\Controllers\QuestionnaireController  $questionnaireController
   */
  public $questionnaireController;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Request $request)
  {
    $this->request = $request;
    $this->input = $request->all();
    $this->questionnaireController = $this->QuestionnaireController();
  }

  private function questionnaireController() {
    return new QuestionnaireController();
  }
}
