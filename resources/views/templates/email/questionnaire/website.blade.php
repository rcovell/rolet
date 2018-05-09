A user has submitted the website questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Timeframe',
  'answer' => $timeframe
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Content',
  'answer' => $content
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Budget',
  'answer' => $budget
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
