@isset($other)
  Other Hacked:
  <br />
  @foreach ($other as $answer)
    @if (!$loop->last)
      {{ $answer }},
    @else
      {{ $answer }}
    @endif
  @endforeach
  <br />
  <br />
@endisset
