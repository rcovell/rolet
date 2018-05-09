<h3 class="extend">
  Content
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($content as $key => $option)
      <input type="radio" id="content_{{ $key }}" name="content" value="{{ $key }}">
      <label class="option" for="content_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
