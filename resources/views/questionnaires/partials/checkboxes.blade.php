<h3 class="extend">
  {{ $title }}
</h3>

@include ('questionnaires.partials.question')

<div class="answer checkboxes">
  @include('questionnaires.partials.checkboxes-base')
  {{-- @foreach($answers as $key => $option)
    @if (is_array($option))
      @isset ($option['category'])
        <h4 class="checkbox-category">{{ $option['category'] }}</h4>
      @endisset
      @isset ($option['note'])
        <i class="checkbox-note">{{ $option['note'] }}</i>
      @endisset
    @else
      <p>
        <input type="checkbox" id="{{ $type }}_{{ $key }}" name="{{ $type }}[]" value="{{ $key }}">
        <label class="option" for="{{ $type }}_{{ $key }}">{{ $option }}</label>
      </p>
    @endif
  @endforeach --}}
</div>
