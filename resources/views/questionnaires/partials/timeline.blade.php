<h3 class="extend">
  Timeline
</h3>

<h4 class="center">{{ $questionTitle }}</h4>

<div class="question center">
  <p>
    @foreach($timeframes as $key => $timeframe)
      <input type="radio" id="timeframe-{{ $key }}" name="implementation_time" value="{{ $key }}" class="form-radio">
      <label class="option" for="timeframe-{{ $key }}">{{ $timeframe }}</label>
    @endforeach
  </p>
</div>
