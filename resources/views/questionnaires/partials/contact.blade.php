<h3 class="extend">
  Contact Information
</h3>

<h4 class="center">{{ $question }}</h4>

<div class="row">
  <div class="col-md-6">
    <label for="name" class="required">Name</label>
    <input
      type="text"
      name="name"
      id="name"
      v-validate="'required|alpha_spaces'"
      data-vv-delay="1000">
    <span v-show="errors.has('questionnaire.name')" class="text-danger">@{{ errors.first('questionnaire.name') }}</span>
  </div>
  <div class="col-md-6">
    <label for="company-name">Company Name</label>
    <input v-validate="'alpha_spaces'" type="text" name="company-name" id="company-name">
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <label for="email-address" class="required">Email Address</label>
    <input
      type="text"
      name="email-address"
      id="email-address"
      placeholder="test@test.com"
      v-validate="'required|email'"
      data-vv-delay="1000">
    <span v-show="errors.has('questionnaire.email-address')" data-vv-as="email address" data-vv-name="email address" class="text-danger">@{{ errors.first('questionnaire.email-address') }}</span>
  </div>
  <div class="col-md-6">
    <label for="phone-number" class="required">Phone Number</label>
    <input
      type="text"
      name="phone-number"
      id="phone-number"
      placeholder="555-123-4567"
      v-validate="'required'"
      data-vv-delay="1000">
    <span v-show="errors.has('questionnaire.phone-number')" data-vv-as="phone number" data-vv-name="phone number" class="text-danger">@{{ errors.first('questionnaire.phone-number') }}</span>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    @if(empty($requiredWebsite))
      <label for="website">Existing Website (optional)</label>
      <input type="text" name="website" id="website" placeholder="{{ env('APP_URL') }}">
    @elseif($requiredWebsite)
      <label for="website" class="required">Existing Website</label>
      <input
        type="text"
        name="website"
        id="website"
        placeholder="{{ env('APP_URL') }}"
        v-validate="'required'"
        data-vv-delay="1000">
      <span v-show="errors.has('questionnaire.website')" data-vv-as="website" data-vv-name="website" class="text-danger">@{{ errors.first('questionnaire.website') }}</span>
    @else
      <label for="website">Existing Website (optional)</label>
      <input type="text" name="website" id="website" placeholder="{{ env('APP_URL') }}">
    @endif
  </div>
</div>


@isset($additionalInformation)
  <div class="row">
    <div class="col-md-12">
      <label for="additional-information">{{ $additionalInformation }}</label>
      <textarea name="additional-information" id="additional-information" class="full"></textarea>
    </div>
  </div>
@endisset
