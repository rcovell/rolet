@extends('layouts.app')

@section('title', 'Support')
@section('description', 'Rolet support information.')
@section('keywords', 'support')
@section('body_class', 'support')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Support
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('support') }}

	<div class="container">
	  <div class="row theme equalize">
	    <div class="col-md-6">
				<div class="column left first">
          <h2 class="extend">Search Reference Material</h2>

          <p>
            We have collected and extensive set of information regarding our services and common issues. Our FAQ will address common questions with services we offer. If you are experience techinical difficulty with one of our services the Knowledge Base will most likely contain the answer.
          </p>
        </div>
      </div>

      <div class="col-md-6">
				<div class="column right first">
          <h2 class="extend">Chat With Us</h2>

          <p>
            If our on-line reference material does not answer your question we have multiple options for contacting one of our support engineers.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
	    <div class="col-md-6">
				<div class="column left first">
          {{-- <p>
            <a href="faq">Frequently Asked Questions</a>
          </p> --}}
          <p>
    				<a href="http://kb.rolet.com">Knowledge Base</a>
          </p>
        </div>
      </div>

      <div class="col-md-6">
				<div class="column right first hide-hidden-div">
          <p>
            <script language="JavaScript" src="http://support.rolet.com/js/status_image.php?base_url=http://support.rolet.com&l=rolet&x=1&deptid=0&text=Live+Support"></script>
          </p>
          <p>
    				<a href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;</a>
          </p>
          <p>
    				<a href="tel://816-471-1095">816-471-1095</a>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
