<h3 class="extend">
  Mailbox Size
</h3>

@include ('questionnaires.partials.question')

<div class="answer">
  <p>
    @foreach($mailboxSizes as $key => $option)
      <input type="radio" id="average-mailbox-size_{{ $key }}" name="average-mailbox-size" value="{{ $key }}">
      <label class="option" for="average-mailbox-size_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
