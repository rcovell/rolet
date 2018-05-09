@extends('layouts.app')

@section('title', '404')
@section('body_class', 'page-not-found')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Whoops
    @endslot
    @slot('pageSubtitle')
      We couldn't find
    @endslot
    @slot('pageShortDescription')
      What your looking for
    @endslot
  @endcomponent

  {{-- {{ Breadcrumbs::render('site-map') }} --}}

  <div class="container page-not-found">
    <div class="row theme">
	    <div class="col-md-12 text-center">
        <h2>Oops, the page you were looking for no longer exists.</h2>
        <p>
          Please reference the below areas of our website.
        </p>
      </div>
    </div>

    <div class="row theme">
	    <div class="col-md-6">
				<div class="column middle">
          <h3 class="extend"><a href="{{ route('home') }}">Rolet Home</a></h3>
          <p>
            Great starting place.
          </p>
				</div>
			</div>

      <div class="col-md-6">
				<div class="column middle">
          <h3 class="extend"><a href="{{ route('hosting') }}">Hosting</a></h3>
          <p>
            Cloud Servers, custom hosting, cPanel website hosting, website migration, and managed solutions.
          </p>
				</div>
			</div>

      <div class="col-md-6">
				<div class="column middle first">
          <h3 class="extend"><a href="{{ route('email') }}">Email</a></h3>
          <p>
            POP3, IMAP, SMTP, G Suite, Office 365, continuity, and transactional solutions.
          </p>
				</div>
			</div>

      <div class="col-md-6">
        <div class="column middle first">
          <h3 class="extend"><a href="{{ route('websites-and-apps') }}">Websites and Apps</a></h3>
          <p>
            Design, development, website, web applications, hacked websites, and migration solutions.
          </p>
				</div>
			</div>

      <div class="col-md-6">
				<div class="column middle first">
          <h3 class="extend"><a href="{{ route('support.customer-login') }}">Customer Login</a></h3>
          <p>
            Login to your services with Rolet.
          </p>
				</div>
			</div>

      <div class="col-md-6">
				<div class="column middle first">
          <h3 class="extend"><a href="{{ route('support') }}">Get Support</a></h3>
          <p>
            Find an answer to a question.
          </p>
				</div>
			</div>

      <div class="col-md-6">
				<div class="column middle first">
          <h3 class="extend"><a href="{{ route('company.contact') }}">Contact</a></h3>
          <p>
            Find an email address or phone number for Rolet.Contact
          </p>
				</div>
			</div>
    </div>
  </div>
@endsection
