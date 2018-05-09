<h3 class="extend">
  Nuts & Bolts
</h3>

@include ('questionnaires.partials.question')

<div class="answer checkboxes">
  @foreach($nutsAndBolts as $key => $option)
    <p>
      <input type="checkbox" id="nutsandbolts_{{ $key }}" name="nutsandbolts[]" value="{{ $key }}">
      <label class="option" for="nutsandbolts_{{ $key }}">{{ $option }}</label>
    </p>
  @endforeach
</div>
