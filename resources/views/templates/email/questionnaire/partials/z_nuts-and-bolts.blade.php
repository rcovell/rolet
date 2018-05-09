@isset($nutsAndBolts)
  Nuts and Bolts:
  <br />
  @foreach ($nutsAndBolts as $answer)
    @if (!$loop->last)
      {{ $answer }},
    @else
      {{ $answer }}
    @endif
  @endforeach
  <br />
  <br />
@endisset
