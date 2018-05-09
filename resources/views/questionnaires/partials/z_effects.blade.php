<h3 class="extend">
  Effects of Hack
</h3>

@include ('questionnaires.partials.question')

<div class="answer checkboxes">
  @foreach($effects as $key => $option)
    <p>
      <input type="checkbox" id="effects_{{ $key }}" name="effects[]" value="{{ $key }}">
      <label class="option" for="effects_{{ $key }}">{{ $option }}</label>
    </p>
  @endforeach
</div>
