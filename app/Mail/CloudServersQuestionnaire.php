<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Http\Controllers\QuestionnaireController;

class CloudServersQuestionnaire extends Mailable
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
   * Implementation Time.
   *
   * @var  string  $timeframe
   */
  public $timeframe;

  /**
   * What is the operating system.
   *
   * @var  string  $operatingSystem
   */
  public $operatingSystem;

  /**
   * What is the hypervisor.
   *
   * @var  string  $hypervisor
   */
  public $hypervisor;

  /**
   * What is the proxmox.
   *
   * @var  string  $proxmox
   */
  public $proxmox;

  /**
   * What is the memory.
   *
   * @var  string  $memory
   */
  public $memory;

  /**
   * What is the storage.
   *
   * @var  string  $storage
   */
  public $storage;

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
    $this->operatingSystem = $questionnaireController->getOperatingSystemDescription($request->operatingsystems);
    $this->hypervisor = $questionnaireController->getHyperVisorDescription($request->hypervisor);
    $this->proxmox = $questionnaireController->getProxmoxDescription($request->proxmox);
    $this->memory = $questionnaireController->getMemoryDescription($request->memory);
    $this->storage = $questionnaireController->getStorageDescription($request->storage);
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->view('templates.email.questionnaire.cloud-servers');
  }

  protected function questionnaireController() {
    return new QuestionnaireController();
  }
}
