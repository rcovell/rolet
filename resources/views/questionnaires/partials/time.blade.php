<h3 class="extend">
  Time
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($time as $key => $option)
      @if ($option == "Have Time")
        <input type="radio" id="time_{{ $key }}" name="time" value="{{ $key }}" @click="toggleShowQuestions" checked="checked">
      @else
        <input type="radio" id="time_{{ $key }}" name="time" value="{{ $key }}" @click="toggleShowQuestions">
      @endif
      <label class="option" for="time_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
