A user has submitted the custom hosting questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Timeframe',
  'answer' => $timeframe
])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Features', 'answers' => $features])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
