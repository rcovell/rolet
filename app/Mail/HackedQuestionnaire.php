<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Http\Controllers\QuestionnaireController;

class HackedQuestionnaire extends Mailable
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
   * Hove time.
   *
   * @var  string  $time
   */
  public $time;

  /**
   * Do they have backups.
   *
   * @var  string  $backups
   */
  public $backups;

  /**
   * What are the effects.
   *
   * @var  array  $effects
   */
  public $effects;
  /**
   * What is the environment.
   *
   * @var  array  $environment
   */
  public $environment;
  /**
   * What is are the nuts and bolts.
   *
   * @var  array  $nutsAndBolts
   */
  public $nutsAndBolts;
  /**
   * Anything else.
   *
   * @var  array  $otherHacked
   */
  public $otherHacked;


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
    $this->time = $questionnaireController->getTimeDescription($request->time);
    $this->backups = $questionnaireController->getBackupsDescription($request->backups);
    if (!empty($request->effects)) {
      foreach ($request->effects as $answer) {
        $this->effects[] = $questionnaireController->getEffectsDescription($answer);
      }
    }
    if (!empty($request->environment)) {
      foreach ($request->environment as $answer) {
        $this->environment[] = $questionnaireController->getEnvironmentDescription($answer);
      }
    }
    if (!empty($request->nutsandbolts)) {
      foreach ($request->nutsandbolts as $answer) {
        $this->nutsAndBolts[] = $questionnaireController->getNutsAndBoltsDescription($answer);
      }
    }
    if (!empty($request->otherhacked)) {
      foreach ($request->otherhacked as $answer) {
        $this->otherHacked[] = $questionnaireController->getOtherHackedDescription($answer);
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
    return $this->view('templates.email.questionnaire.hacked');
  }

  protected function questionnaireController() {
    return new QuestionnaireController();
  }
}
