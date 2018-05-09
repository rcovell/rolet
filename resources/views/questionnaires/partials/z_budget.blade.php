<h3 class="extend">
  Budget
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($budget as $key => $option)
      <input type="radio" id="budget_{{ $key }}" name="budget" value="{{ $key }}">
      <label class="option" for="budget_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
