A user has submitted the contact questionnaire:

<br />
<br />

@isset($input['name'])
  Name: {{ $input['name'] }}
  <br />
@endisset

@isset($input['company-name'])
  Company Name: {{ $input['company-name'] }}
  <br />
@endisset

@isset($input['email-address'])
  Email Address: {{ $input['email-address'] }}
  <br />
@endisset

@isset($input['phone-number'])
  Phone Number: {{ $input['phone-number'] }}
  <br />
@endisset

@isset($input['note'])
  Note: {{ $input['note'] }}
  <br />
@endisset
<br />
