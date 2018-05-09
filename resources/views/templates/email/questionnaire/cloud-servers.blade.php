A user has submitted the cloud servers questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Timeframe',
  'answer' => $timeframe
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Operating System',
  'answer' => $operatingSystem
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Hypervisor',
  'answer' => $hypervisor
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Proxmox VE',
  'answer' => $proxmox
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Memory',
  'answer' => $memory
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Storage',
  'answer' => $storage
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
