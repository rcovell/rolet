@isset($answers)
  {{ $question }}:
  <br />
  @foreach ($answers as $answer)
    @if (!$loop->last)
      {{ $answer }},
    @else
      {{ $answer }}
    @endif
  @endforeach
  <br />
  <br />
@endisset
