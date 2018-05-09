Know Technology: {{ $knowTechnology }}
<br />
@isset($technology)
  Technology:
  <br />
  @foreach ($technology as $answer)
    @if (!$loop->last)
      {{ $answer }},
    @else
      {{ $answer }}
    @endif
  @endforeach
  <br />
@endisset
<br />
