<h3 class="extend">
  {{ $title }}
</h3>

@include ('questionnaires.partials.question')

<div class="answer dropdown">
  <select name="{{ $type }}">
    @foreach($answers as $key => $option)
      @if ($selected == $loop->index)
        <option value="{{ $key }}" selected="selected">
          {{ $option }}
        </option>
      @else
        <option value="{{ $key }}">
          {{ $option }}
        </option>
      @endif
    @endforeach
  </select>
</div>
