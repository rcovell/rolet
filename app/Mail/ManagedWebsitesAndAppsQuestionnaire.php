<?php

namespace App\Mail;

use Illuminate\Http\Request;

class ManagedWebsitesAndAppsQuestionnaire extends QuestionnaireBase
{
  /**
   * Implementation Time.
   *
   * @var  string  $timeframe
   */
  public $timeframe;

  /**
   * What is the needs.
   *
   * @var  array  $managedWebsiteAndAppsNeeds
   */
  public $managedWebsitesAndAppsNeeds;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Request $request)
  {
    parent::__construct($request);
    $this->timeframe = $this->questionnaireController->getTimeframeDescription($request->timeframe);
    if (!empty($request['managed-websites-and-apps-needs'])) {
      foreach ($request['managed-websites-and-apps-needs'] as $answer) {
        $this->managedWebsitesAndAppsNeeds[] = $this->questionnaireController->getManagedWebsitesAndAppsSolutionsDescription($answer);
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
    return $this->view('templates.email.questionnaire.managed-websites-and-apps');
  }
}
