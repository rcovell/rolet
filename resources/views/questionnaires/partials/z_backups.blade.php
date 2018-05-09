<h3 class="extend">
  First things first
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($backups as $key => $option)
      <input type="radio" id="backups_{{ $key }}" name="backups" value="{{ $key }}">
      <label class="option" for="backups_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
