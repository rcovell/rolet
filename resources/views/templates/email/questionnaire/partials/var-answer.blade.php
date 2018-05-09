@isset($answer)
  {{ $title }}:
  @if (!empty($break))
    <br />
  @endif
  {{ $answer }}
  <br />
  <br />
@endisset
