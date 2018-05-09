<h3 class="extend">
  Hosting Environment
</h3>

@include ('questionnaires.partials.question')

<div class="answer checkboxes">
  @foreach($environment as $key => $option)
    <p>
      <input type="checkbox" id="environment_{{ $key }}" name="environment[]" value="{{ $key }}">
      <label class="option" for="environment_{{ $key }}">{{ $option }}</label>
    </p>
  @endforeach
</div>
