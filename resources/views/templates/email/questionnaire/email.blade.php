A user has submitted the cloud email questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Timeframe',
  'answer' => $timeframe
])
@isset($input['domain'])
  @include('templates.email.questionnaire.partials.var-answer', [
    'title' => 'Domain Name',
    'answer' => $input['domain']
  ])
@endisset
@include('templates.email.questionnaire.partials.email')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
