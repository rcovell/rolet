<h3 class="extend">
  Other
</h3>

@include ('questionnaires.partials.question')

<div class="answer checkboxes">
  @foreach($otherHacked as $key => $option)
    <p>
      <input type="checkbox" id="otherhacked_{{ $key }}" name="otherhacked[]" value="{{ $key }}">
      <label class="option" for="otherhacked_{{ $key }}">{{ $option }}</label>
    </p>
  @endforeach
</div>
