<h3 class="extend">
  Timeframe
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($timeframes as $key => $option)
      <input type="radio" id="timeframe_{{ $key }}" name="timeframe" value="{{ $key }}">
      <label class="option" for="timeframe_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
