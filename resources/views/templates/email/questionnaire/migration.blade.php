A user has submitted the migration questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Timeframe',
  'answer' => $timeframe
])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Environment', 'answers' => $environment])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Nuts and Bolts', 'answers' => $nutsAndBolts])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
