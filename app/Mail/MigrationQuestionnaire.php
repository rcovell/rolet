<?php

namespace App\Mail;

use Illuminate\Http\Request;

class MigrationQuestionnaire extends QuestionnaireBase
{
  /**
   * Implementation Time.
   *
   * @var  string  $timeframe
   */
  public $timeframe;

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
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Request $request)
  {
    parent::__construct($request);
    $this->timeframe = $this->questionnaireController->getTimeframeDescription($request->timeframe);
    if (!empty($request->environment)) {
      foreach ($request->environment as $answer) {
        $this->environment[] = $this->questionnaireController->getEnvironmentDescription($answer);
      }
    }
    if (!empty($request->nutsandbolts)) {
      foreach ($request->nutsandbolts as $answer) {
        $this->nutsAndBolts[] = $this->questionnaireController->getNutsAndBoltsForMigrationDescription($answer);
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
    return $this->view('templates.email.questionnaire.migration');
  }
}
