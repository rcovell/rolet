<h3 class="extend">
  Email Information
</h3>

<h4 class="center">{{ $question }}</h4>

<div class="row">
  <div class="col-md-6">
    <label for="domain-name" class="required">Domain Name</label>
    <input
      type="text"
      name="domain-name"
      id="domain-name"
      v-validate="'required'"
      data-vv-delay="1000">
    <span v-show="errors.has('questionnaire.domain-name')" class="text-danger">@{{ errors.first('questionnaire.domain-name') }}</span>
  </div>
  <div class="col-md-6">
    <label for="company-name">Number Accounts</label>
    <input v-validate="'number'" type="number" name="number" id="number">
  </div>
</div>

{{-- <div class="row">
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
    <label for="website">Existing Website (optional)</label>
    <input type="text" name="website" id="website" placeholder="http://www.rolet.com">
  </div>
</div> --}}

{{-- @isset($additionalInformation)
  <div class="row">
    <div class="col-md-12">
      <label for="additional-information">{{ $additionalInformation }}</label>
      <textarea name="additional-information" id="additional-information" class="full"></textarea>
    </div>
  </div>
@endisset --}}
