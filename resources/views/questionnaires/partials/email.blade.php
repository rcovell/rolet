<h3 class="extend">
  Email Information
</h3>

<h4 class="center">{{ $question }}</h4>

<div class="row">
  <div class="col-md-4 number-accounts">
    <p>
      <input type="checkbox" id="rolet-email" name="rolet-email" value="1" @click="toggleShowAccountNumber('rolet')">
      <label class="option" for="rolet-email">Rolet Email</label>
    </p>
    <div class="row" v-show="showRoletAccountNumber">
      <div class="col-md-12">
        <label for="rolet-number">Number Accounts</label>
        <input v-validate="'number'" type="number" name="rolet-number" id="rolet-number" value="1">
      </div>
    </div>
  </div>

  <div class="col-md-4 number-accounts">
    <p>
      <input type="checkbox" id="google-apps-email" name="google-apps-email" value="1" @click="toggleShowAccountNumber('google')">
      <label class="option" for="google-apps-email">Google Apps</label>
    </p>
    <div class="row" v-show="showGoogleAccountNumber">
      <div class="col-md-12">
        <label for="google-apps-number">Number Accounts</label>
        <input v-validate="'number'" type="number" name="google-apps-number" id="google-apps-number" value="1">
      </div>
    </div>
  </div>

  <div class="col-md-4 number-accounts">
    <p>
      <input type="checkbox" id="office-365-email" name="office-365-email" value="1" @click="toggleShowAccountNumber('office')">
      <label class="option" for="office-365-email">Office 365</label>
    </p>
    <div class="row" v-show="showOfficeAccountNumber">
      <div class="col-md-12">
        <label for="office-365-number">Number Accounts</label>
        <input v-validate="'number'" type="number" name="office-365-number" id="office-365-number" value="1">
      </div>
    </div>
  </div>
</div>
