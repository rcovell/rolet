Email information
<br />
@isset($input['rolet-email'])
  Rolet Email: Yes
  <br />

  @isset($input['rolet-number'])
    Number: {{ $input['rolet-number'] }}
    <br />
  @endisset
@endisset

@isset($input['google-apps-email'])
  Google Apps: Yes
  <br />

  @isset($input['google-apps-number'])
    Number: {{ $input['google-apps-number'] }}
    <br />
  @endisset
@endisset

@isset($input['office-365-email'])
  Office 365: Yes
  <br />

  @isset($input['office-365-number'])
    Number: {{ $input['office-365-number'] }}
    <br />
  @endisset
@endisset

@isset($mailboxSize)
  <br />
  Average Account Mailbox Size: {{ $mailboxSize }}
  <br />
@endisset
<br />
