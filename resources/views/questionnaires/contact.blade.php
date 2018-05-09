<form method="post" action="{{ route ('company.contact.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
  <div class="row">
    <div class="col-md-6">
      <label for="name" class="required">Name</label>
      <input
        type="text"
        name="name"
        id="name"
        v-validate="'required|alpha_spaces'"
        data-vv-delay="1000">
      <span v-show="errors.has('contact.name')" class="text-danger">@{{ errors.first('contact.name') }}</span>
    </div>
    <div class="col-md-6">
      <label for="company-name">Company Name</label>
      <input v-validate:name="'alpha_spaces'" type="text" name="company-name" id="company-name">
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
      <span v-show="errors.has('contact.email-address')" data-vv-as="email address" data-vv-name="email address" class="text-danger">@{{ errors.first('contact.email-address') }}</span>
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
      <span v-show="errors.has('contact.phone-number')" data-vv-as="phone number" data-vv-name="phone number" class="text-danger">@{{ errors.first('contact.phone-number') }}</span>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <label for="note">Note</label>
      <textarea name="note" id="note" class="full"></textarea>
    </div>
  </div>

  <div class="row theme">
    <div class="col-md-12">
      <div class="column light-grey call-to-action">
        @include('questionnaires.partials.recaptcha', ['inputValue' => 'Send Note'])
        <p v-show="errors.any('contact')" class="text-danger">Note has errors.</p>
        {{ csrf_field() }}
      </div>
    </div>
  </div>
</form>
