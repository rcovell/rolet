<h3 class="extend">
  Technology
</h3>

@include ('questionnaires.partials.question')

@include('questionnaires.partials.technology-toggle')

<div class="answer checkboxes" v-show="showTechnology">
  @include('questionnaires.partials.checkboxes-base', [
    'answers' => $technology,
    'type' => 'technology'
  ])
  {{-- @foreach($technology as $key => $option)
    <p>
      <input type="checkbox" id="technology_{{ $key }}" name="technology[]" value="{{ $key }}">
      <label class="option" for="technology_{{ $key }}">{{ $option }}</label>
    </p>
  @endforeach --}}
</div>
