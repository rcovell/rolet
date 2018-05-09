<h3 class="extend">
  Domain Name
</h3>

<h4 class="center">{{ $question }}</h4>

<div class="row">
  <div class="col-md-6">
    <label for="domain" class="required">Domain Name</label>
    <input
      type="text"
      name="domain"
      id="domain"
      v-validate="'required'"
      data-vv-delay="1000">
    <span v-show="errors.has('questionnaire.domain')" class="text-danger">@{{ errors.first('questionnaire.domain') }}</span>
  </div>
</div>
