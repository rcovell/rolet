<h3 class="extend">
  {{ $title }}
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($answers as $key => $option)
      @if ($loop->index == 0)
        <input type="radio" id="{{ $type }}_{{ $key }}" name="{{ $type }}" value="{{ $key }}" @click="toggleShowQuestions" checked="checked">
      @else
        <input type="radio" id="{{ $type }}_{{ $key }}" name="{{ $type }}" value="{{ $key }}" @click="toggleShowQuestions">
      @endif
      <label class="option" for="{{ $type }}_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
