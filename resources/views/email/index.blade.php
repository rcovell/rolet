@extends('layouts.app')

@section('title', 'Email')
@section('description', 'Business class email solutions. Providing cloud based email solutions including G Suite, Office 365, continuity, and transactional.')
@section('keywords', 'pop3, imap, smtp, g suite, office 365, continuity, transactional, cyrus, sendmail')
@section('body_class', 'email')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Email
    @endslot
    @slot('pageSubtitle')
      More than your desktop
    @endslot
    @slot('pageShortDescription')
      Traditional, collaboration, continuity, transactional.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('email') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Beyond hitting send
          </h2>
          <p class="leader">
            You might still do it, but there is more to email than what is visible.
          </p>
          <p>
            Email has evolved. Someone or something still hits send, and it needs to be delivered. But <span class="italic">how</span> it is delivered is what matters. Our services allow email to be delivered to more than one place, saved in the event it can't be, or moved when it needs to be. We don't offer just email, we offer email solutions.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left light-blue header">
  				<h2 class="extend">Solutions</h2>
    		</div>
     	</div>
    </div>

    <div class="row equalize">
      <div class="col-md-4 col-sm-4 service">
        <h3 class="extend"><a href="{{ route('email.cloud') }}">G Suite or Office 365</a></h3>
        <p>
          The leaders in collaborative email solutions.
        </p>
        <p>
          Authorized resellers of the two most popular collaborative email services.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 service">
        <h3 class="extend"><a href="{{ route('email.cloud') }}">Rolet Email</a></h3>
        <p>
          POP / IMAP / SMTP.  Three oldies but goodies.
        </p>
        <p>
          Tried and true. If your company doesn't need collabortive email this is the solution for you.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 service">
        <h3 class="extend"><a href="{{ route('email.cloud') }}">Hybrid</a></h3>
        <p>
          Need a little bit of both?
        </p>
        <p>
          Why not. You have the flexibility to combine {{ config('app.name') }} Email with G Suite or Office 365.
        </p>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left white no-extend">
          <h3 class="extend">
            <a href="{{ route ('email.continuity') }}">Continuity</a>
          </h3>
          <p class="leader">
            Loosing Email?
          </p>
          <p>
            Even with the big guys, server downtime happens. They get overloaded or have to deal with an occasional DOS.
          </p>
          <p>
            Add continuity to your email service to make sure you don't miss another email.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="column right white no-extend">
          <h3 class="extend">
            <a href="{{ route ('email.transactional') }}" class="learn-more">Transactional</a>
          </h3>
          <p class="leader">
            Need to send email?
          </p>
          <p>
            If you need to send email from your website, server, printer, or application our transactional email service can do it for you.
          </p>
          <p>
            Hitting send doesn't need a finger, just a reason.
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
