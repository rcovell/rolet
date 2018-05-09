<h3 class="extend">
  {{ $title }}
</h3>

@include ('questionnaires.partials.question')

<div class="answer radios">
    @foreach($answers as $key => $option)
      <p>
        @if ($selected == $loop->index)
          <input type="radio" id="{{ $type }}_{{ $key }}" name="{{ $type }}" value="{{ $key }}" checked="checked">
        @else
          <input type="radio" id="{{ $type }}_{{ $key }}" name="{{ $type }}" value="{{ $key }}">
        @endif
        <label class="option" for="{{ $type }}_{{ $key }}">{{ $option }}</label>
      </p>
    @endforeach
</div>
