@isset($otherHacked)
  Other Hacked:
  <br />
  @foreach ($otherHacked as $answer)
    @if (!$loop->last)
      {{ $answer }},
    @else
      {{ $answer }}
    @endif
  @endforeach
  <br />
  <br />
@endisset
