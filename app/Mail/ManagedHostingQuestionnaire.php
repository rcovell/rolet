<?php

namespace App\Mail;

use Illuminate\Http\Request;

class ManagedHostingQuestionnaire extends QuestionnaireBase
{
  /**
   * Implementation Time.
   *
   * @var  string  $timeframe
   */
  public $timeframe;

  /**
   * What is the budget.
   *
   * @var  array  $managedHosting
   */
  public $managedHostingNeeds;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Request $request)
  {
    parent::__construct($request);
    $this->timeframe = $this->questionnaireController->getTimeframeDescription($request->timeframe);
    if (!empty($request['managed-hosting-needs'])) {
      foreach ($request['managed-hosting-needs'] as $answer) {
        $this->managedHostingNeeds[] = $this->questionnaireController->getManagedHostingSolutionsDescription($answer);
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
    return $this->view('templates.email.questionnaire.managed-hosting');
  }
}
