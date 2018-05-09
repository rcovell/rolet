<vue-recaptcha
  ref="invisibleRecaptcha"
  @verify="onVerify"
  @expired="onExpired"
  size="invisible"
  sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
</vue-recaptcha>
<input type="submit" name="submitElement" value="{{ $inputValue }}" class="button rounded" v-on:click="onSubmit">
