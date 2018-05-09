@isset($environment)
  Environment:
  <br />
  @foreach ($environment as $answer)
    @if (!$loop->last)
      {{ $answer }},
    @else
      {{ $answer }}
    @endif
  @endforeach
  <br />
  <br />
@endisset
