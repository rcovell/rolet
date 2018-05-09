@if(Session::has('message'))
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info">
          {{ Session::get('message') }}
        </div>
      </div>
    </div>
  </div>
@endif

@if(Session::has('questionnaireMessage'))
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info questionnaire-info">
          {{ Session::get('questionnaireMessage') }}
        </div>
      </div>
    </div>
  </div>
@endif
