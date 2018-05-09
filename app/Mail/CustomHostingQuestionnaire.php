<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Http\Controllers\QuestionnaireController;

class CustomHostingQuestionnaire extends Mailable
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
   * Selected features.
   *
   * @var  array  $features
   */
  public $features;

  /**
   * Implementation Time.
   *
   * @var  string  $timeframe
   */
  public $timeframe;

  /**
   * Does the client have content.
   *
   * @var  string  $content
   */
  // public $content;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Request $request)
  {
    $this->request = $request;
    $this->input = $request->all();
    $questionnaireController = $this->questionnaireController();
   $this->timeframe = $questionnaireController->getTimeframeDescription($request->timeframe);
    if (!empty($request->features)) {
      foreach ($request->features as $answer) {
        $this->features[] = $questionnaireController->getCustomHostingFeaturesDescription($answer);
      }
    }
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->view('templates.email.questionnaire.custom-hosting');
  }

  protected function questionnaireController() {
    return new QuestionnaireController();
  }
}
