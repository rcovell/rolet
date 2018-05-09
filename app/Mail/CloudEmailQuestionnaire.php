<?php

namespace App\Mail;

use Illuminate\Http\Request;

class CloudEmailQuestionnaire extends QuestionnaireBase
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
   * @var  string  $mailboxSize
   */
  public $mailboxSize;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Request $request)
  {
    parent::__construct($request);
    $this->timeframe = $this->questionnaireController->getTimeframeDescription($request->timeframe);
    $this->mailboxSize = $this->questionnaireController->getMailboxSizesDescription($request['average-mailbox-size']);
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->view('templates.email.questionnaire.email');
  }
}
