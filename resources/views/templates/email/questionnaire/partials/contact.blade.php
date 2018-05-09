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

@isset($input['website'])
  Website: {{ $input['website'] }}
  <br />
@endisset

@isset($input['additional-information'])
  Additional Information: {{ $input['additional-information'] }}
  <br />
@endisset
<br />
