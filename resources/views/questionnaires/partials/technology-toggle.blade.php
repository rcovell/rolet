<div class="answer">
  <p>
    @foreach($knowTechnology as $key => $option)
      @if ($option == "Yes, we know")
        <input type="radio" id="know-technology_{{ $key }}" name="know-technology" value="{{ $key }}" @click="toggleShowTechnology('yes')" checked="checked">
      @else
        <input type="radio" id="know-technology_{{ $key }}" name="know-technology" value="{{ $key }}" @click="toggleShowTechnology('no')">
      @endif
      <label class="option" for="know-technology_{{ $key }}">{{ $option }}</label>
    @endforeach
  </p>
</div>
