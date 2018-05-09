A user has submitted the hacked questionnaire:

<br />
<br />

@include('templates.email.questionnaire.partials.contact')
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Have Time',
  'answer' => $time
])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Backups',
  'answer' => $backups
])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Effects of Hack', 'answers' => $effects])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Environment', 'answers' => $environment])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Nuts and Bolts', 'answers' => $nutsAndBolts])
@include('templates.email.questionnaire.partials.checkboxes', ['question' => 'Other Hacked', 'answers' => $otherHacked])
@include('templates.email.questionnaire.partials.var-answer', [
  'title' => 'Additional',
  'answer' => $request->additional,
  'break' => true
])
