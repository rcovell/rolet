A user has submitted the application questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Timeframe',
  'answer' => $timeframe
])
@include('templates.email.questionnaire.partials.technology')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Budget',
  'answer' => $budget
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
