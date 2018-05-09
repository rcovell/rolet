<h3 class="extend">
  Proxmox VE
</h3>

@include ('questionnaires.partials.question')

<div class="answer checkboxes">
  @foreach($answers as $key => $option)
    <p>
      <input type="checkbox" id="{{ $type }}_{{ $key }}" name="{{ $type }}[]" value="{{ $key }}">
      <label class="option" for="{{ $type }}_{{ $key }}">{{ $option }}</label>
    </p>
  @endforeach
</div>
