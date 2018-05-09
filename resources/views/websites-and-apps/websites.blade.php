@extends('layouts.app')

@section('title', 'Websites')
@section('description', 'Need a new website or have one that needs a facelift? Our designers can create look that represents your company.')
@section('keywords', 'website design, website development, laravel, drupal, wordpress, custom themes, plugins, modules, useability, mobile first')
@section('body_class', 'websites')

@section('page-styles')
  <link href="/css/vendor/prism.css" rel="stylesheet" />
@endsection

@section('page-js-files')
  <script defer src="/js/vendor/prism.js"></script>
@endsection

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Websites
    @endslot
    @slot('pageSubtitle')
      Business Class
    @endslot
    @slot('pageShortDescription')
      !Wix, !Weebly, !Squarespace, etc
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.websites') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Websites are a dime a dozen
          </h2>

          <p class="leader">
            Yea, we just said that.  Really it is true.
          </p>

          <p>
            Everyone knows someone that has a person who knows another person. Is this what you want for your company? If so, we might not be the best option.
          </p>

          <p>
            With over 20 years of experience we can do more.  We create business class websites that take the next step, not based on a theme.  We do more than a brochure that the public sees.  We love solving a business problem or automating a manual process.  Things like this aren't in a theme, they're in your head, and we can make them happen.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6 col-sm-12">
        <div class="column left light-grey">
          <h3 class="extend">
            Content Management Systems
          </h3>

          <p class="leader">
            All the buzz and a great way to manage your website.
          </p>

          <p>
            There are numerous options out there to manage content, from DotNetNuke, Drupal, Keystone, October and Wordpress.  The list could gone and on (think we covered the gambit).
          </p>

          <p>
            We don't focus on them all, just the leaders within the industry.  Our aim is not to tell you the pros and cons of each, they all have there place. What we strive for is to find the best solution for you.
          </p>

          <p>
            We can help you make the decision on what CMS to use and if your website belongs in one at all, not all do.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="column middle">
              <h3 class="extend">
                Themes By
              </h3>

              <p class="leader">
                Everyone and their dog
              </p>

              <p>
                Or Al the office cat, sup Al, can create a website from a theme.
              </p>
              <p>
                We can too.
              </p>
              <p>
                Can they take it the next step?  Go beyond what a theme provides, create one from scratch just for your company?
              </p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="column right">
              <h3 class="extend">
                Plugins & Modules
              </h3>

              <p class="leader">
                Can't find the right one?
              </p>

              <p>
                Is it close to what your looking for but you have to change your business model?
              </p>

              <p>
                We can create or extend plugins & modules to provide the exact functionality you are looking for.
              </p>
            </div>
          </div>
        </div>
        <p>
          If you want more, we can extend your theme or create a custom one.
        </p>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-9 col-xs-12 col-sm-12">
        <div class="row">
          <div class="col-md-8">
            <div class="column left light-grey">
              <h3 class="extend">
                Custom
              </h3>

              <p class="leader">
                Content management systems have their place; managing content.  They are not right for everything.
              </p>
              <p>
                Sure, their functionality can be extended with plugins or modules, but does it make sense for the job?  Not all websites or supporting functionality needs it.
              </p>
              <p>
                Depending on your needs it could take more effort to put it in a CMS then it would to do a custom build or utilize a framework like Laravel to achieve a faster and better result.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="column middle">
              <h3 class="extend">
                APPS
              </h3>

              <p class="leader">
                Is your project more than a website?
              </p>

              <p>
                If so, then you might be looking at a <a href="{{ route('websites-and-apps.web-applications')}}">web application</a>.  Part of what we do is develop web applications that solve business solutions or provide a public facing service (SaaS).  Some don't even have a public facing website.
              </p>
            </div>
          </div>

          <div class="col-md-8">
            <h3>Use the right tool for the job.</h3>

            <h4>Q: Do you use a hammer for a screw?</h4>
          </div>

          <div class="col-md-4">
            <blockquote>
              A: No you don't.
            </blockquote>
          </div>
        </div>
      </div>

      <div class="col-md-3 desktop-only">
        <div class="column right code">
<pre><code class="language-php line-numbers">function acmeBaseAccountSetupWizardForm($form, &$form_state) {
  drupal_add_css(drupal_get_path('module', 'acme_base') . '/css/acme_base.css');

  if (empty($form_state['step'])) {
    $form_state['step'] = 1;
    $form_state['step_information'] = _acme_base_account_setup_wizard_form_steps();
  }

  $step = &$form_state['step'];
  drupal_set_title(t('Account Setup: Step @step', array('@step' => $step)));

  if ((!function_exists($form_state['step_information'][$step]['form'])) && (!empty($form_state['step_information'][$step]['module'])))
    module_load_include('inc', $form_state['step_information'][$step]['module'], $form_state['step_information'][$step]['file']);

  $form = $form_state['step_information'][$step]['form']($form, $form_state);
  $form['form_navigation'] = array(
    '#type' => 'container',
    '#id' => 'form_navigation',
  );
</code></pre>
        </div>
      </div>
    </div>

    <div class="row equalize">
      <div class="col-md-4 col-sm-4 col-xs-12 service">
        <h3 class="extend">Graphic Design</h3>
        <p>
          We might be code-heads, but we're code-heads with make pretty buttons.  As a team we work closely with our designers, photographers and illustrators to create a complete visual message.
        </p>
        <p>
          We assist our clients in communicating an image to both their customers and their employees.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service">
        <h3 class="extend">Content</h3>
        <p>
          Not sure what to say.  We can incorporate fundamental levels of communication from engaging headlines, image-centric content for readability, and clear calls to action.
        </p>
        <p>
          Whether it is one time content creation or frequent updates, we can help with your message.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service">
        <h3 class="extend">Usability</h3>
        <p>
          Your not in business to lose customers with a confusing website or frustrate your employees with a management area that is difficult to use.
        </p>
        <p>
          We're not in business to do that either.  Our focus is on identifying the needs of the website or management area, map out process flows, and ensure that content, navigation and functionality are relavent and easy to use.
        </p>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-8">
        <div class="column left light-grey">
          <h3 class="extend">
            Mobile First
          </h3>

          <p class="leader">
            Mobile usage of the internet has surpassed desktop usage.
          </p>

          <p>
            Search engines show different results for mobile devices. If your website isn't mobile friendly you won't show up. Why create something that automatically eliminates more than half of your customers.
          </p>

          <p>
            You don't have to and shouldn't.  Every website we create starts with the mobile view first.  Is your website mobile ready?
          </p>

          <p>
            Check to see how it looks on various mobile device screen sizes.
          </p>

          <p class="centered-text">
            <a href="{{ route('websites-and-apps.mobile-responsive-test') }}" class="button rounded">Test Your Website</a>
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column right mobile-centered">
          <img src="/images/mobile_phone2.png" />
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need a quote?</h2>

          <p>
            Take a minute to fill out our website project survey so that we can get to know you and your project better.
          </p>

          <a href="{{ route('websites-and-apps.websites.questionnaire') }}" class="button rounded">Tell Us About Your Website</a>
        </div>
      </div>
    </div>
  </div>
@endsection
