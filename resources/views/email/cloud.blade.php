@extends('layouts.app')

@section('title', 'Cloud Email')
@section('description', 'Business class email solutions. Providing cloud based email solutions including G Suite, Office 365, POP3, IMAP, STMP, and Hybrid.')
@section('keywords', 'pop3, imap, smtp, cyrus, sendmail, g suite, office 365, hybrid')
@section('body_class', 'cloud-email')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Cloud Email
    @endslot
    @slot('pageSubtitle')
      Everyone is doing it
    @endslot
    @slot('pageShortDescription')
      Do it better than they are!
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('email.cloud') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Solid email is more important than your website!
          </h2>
          <p class="leader">
          </p>
          <p>
            Huh, what say you? We get more customers with bad email stories than those with bad hosting stories.
          </p>
          <p>
            If you can't communicate with your customers, you might as well not be in business.
          </p>
          <p>
            As more companies move to Cloud Email their cost are becoming more expensive then the hosting for their website. Save money by incorporating our hybrid email solution with your collaborative email service.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-8">
        <div class="column left light-grey header">
          <h2 class="extend">{{ config('app.name') }} Email</h2>

          <p>
            Email and only email. For companies that don't need the bells and whistles of collaborative solutions. Save your company money and take the pain and cost out of email.
          </p>

          <p>
            Built on clusters of Cyrus and Sendmail servers, some of the internets most trusted and oldest names. Simple, fast and reliable. It just works.
          </p>

          <div class="row equalize no-extend">
            <div class="col-md-6 col-sm-6 service">
              <h3>Simple Web Interface</h3>
              <p>
                Manage all aspects of your account from your Client Interface. Quickly add accounts, email addresses and lists. Configure spam settings and manage quarantine.
              </p>
            </div>

            <div class="col-md-6 col-sm-6 service">
              <h3>Aggregate Storage</h3>
              <p>
                We view storage as a pool for the company. Not all users use their email the same. Give more to the heavy users and less to the ones that don't need it.
              </p>
            </div>

            <div class="col-md-6 col-sm-6 service">
              <h3>Secure Business Email</h3>
              <p>
                The only one who should read your email is you.
              </p>
              <p>
                Send and receive your email using POP3S, IMAPS and SMTPS (SSL/TLS). If you just want POP3, IMAP and SMTP. We have that too.
              </p>
            </div>

            <div class="col-md-6 col-sm-6 service">
              <h3>@YourDomain.com</h3>
              <p>
                Does yourname@gmail.com convey your company? Stop selling another companies product and sell yours. We'll get you a domain and send your email to it.
              </p>
            </div>

            <div class="col-md-6 col-sm-6 service">
              <h3>Easy Setup & Migration</h3>
              <p>
                Get the help and support you need to setup your account with nearly every email client.
              </p>
              <p>
                Need help migrating. Guess what, we made a <a href="{{ route('email.continuity') }}">tool</a> for that.
              </p>
            </div>

            <div class="col-md-6 col-sm-6 service">
              <h3>SMTP Servers</h3>
              <p>
                Load balanced SMTP servers are employed to ensure your email is always delivered. Email from your web applications, favorite email client, and of course your in-house printer.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column right">
          <div class="row">
            <div class="col-md-12">
              <h2 class="extend">Need Collaboration?</h2>
            </div>
          </div>
          <div class="row header-margin-bottom">
            <div class="col-md-6 col-sm-6">
              <img src="{{ asset('images/logo_g_suite_wordmark_dark_rgb-40h.png') }}" border="0">
            </div>
            <div class="col-md-6 col-sm-6">
              <img src="{{ asset('images/office365-50h.png') }}" border="0">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>
                No need to sell you on either of the above companies, they are who they are and do what they do.
              </p>
              <p>
                We are resellers of the leading business class collaboration email solutions. If your looking for either of the above or need help with an existing setup <a href="{{ route('email.cloud.questionnaire') }}">let us know</a> how we can help.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="column right light-grey">
                <h2 class="extend">Hybrid Email</h2>
                <p>
                  Why use G Suite or Office 365 for everyone when everyone doesn't need it.  Target the individuals that need to collaborate and utilize {{ config('app.name') }} Email for everyone / thing else.
                </p>

                <ul class="question">
                  <li>Does your printer really need G Suite?</li>
                </ul>

                {{-- <h4 class="question">
                  Does your printer really need a G Suite account?
                </h4> --}}
                <blockquote>
                  A: Probably not.
                </blockquote>
                <p>
                  Save a substantial amount by choosing our hybrid email solution.
                </p>
                <p>
                  Collaboration only works if it is used.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need Email?</h2>

          <p>
            Take a minute to fill out our email questionnaire so that we can identify your needs.
          </p>

          <a href="{{ route('email.cloud.questionnaire') }}" class="button rounded">Tell us what your looking for</a>
        </div>
      </div>
    </div>
  </div>
@endsection
