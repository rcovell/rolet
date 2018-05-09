@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Business class internet services based in Kansas City, Mo.')
@section('keywords', 'hosting, email, development, automation, websites, web apps, web applications, applications, migration, mobile responsive')
@section('body_class', 'home')

@section('page-styles')
  <link href="/css/vendor/prism.css" rel="stylesheet" />
@endsection

@section('page-js-files')
  <script defer src="/js/vendor/prism.js"></script>
@endsection

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Full Service
    @endslot
    @slot('pageSubtitle')
      Hosting and Development
    @endslot
    @slot('pageShortDescription')
      Create something beautiful, make it useful and make it work.
    @endslot
  @endcomponent

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Kansas City Based Hosting and Development
          </h2>
          <p class="leader">
            Over 20 years of experience in hosting and web development.
          </p>
          <p>
            A boutique company that has its core in hosting and development. We offer numerous business solutions in hosting, email and development services.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6 col-md-offset-6">
        <div class="column right light-grey header">
  				<h2 class="extend">Business Class Hosting</h2>
    		</div>
     	</div>
    </div>

    <div class="row equalize">
      <div class="col-md-4 col-sm-4 col-xs-12 service">
        <h3 class="extend"><a href="{{ route('hosting.cpanel') }}">cPanel</a></h3>
        <p>
          Odds are this is what is running your webiste now.  The worlds most widely used hosting control panel.
        </p>
        <p>
          Most other companies use it, so do we.
        </p>
        <p>
          If your used to having everything in one place, this is for you.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service">
        <h3 class="extend"><a href="{{ route('hosting.custom') }}>">Custom</a></h3>
        <p>
          cPanel not for you?  You don't login to your control panel just for fun?
        </p>
        <p>
          Have hosting requirements that provide expertise to setup and maintain?
        </p>
        <p>
          Just let us know what your looking for and we'll get it up and running.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service">
        <h3 class="extend"><a href="{{ route('hosting.cloud-servers') }}">Cloud Servers</a></h3>
        <p>
          Just like virtual private servers, but some marketing genious thought cloud sounded better.
        </p>
        <p>
          So we now call them cloud servers, same thing different name. Pick your flavor and customize it to your specifications.
        </p>
        {{-- <p>
          Need help with that?  Our team of experts can get it setup for you.
        </p> --}}
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-8">
        <div class="column left light-blue">
          <h2 class="extend">Business Class Development</h2>
          <div class="row equalize">
            <div class="col-md-6 col-sm-6">
              <h3 class="no-extend">
                <a href="{{ route('websites-and-apps.websites') }}">Websites</a>
              </h3>
              <p>
                Everyone is doing it. We do it too, but a bit different.
              </p>
              <p>
                We can grab a them for you if you want, but why? Does that convey your company?
              </p>
              <p>
                Let our designers make a theme that convey's your business. Why fit into a theme that is not you?
              </p>
            </div>

            <div class="col-md-6 col-sm-6">
              <h3 class="no-extend">
                <a href="{{ route('websites-and-apps.web-applications') }}">Web Applications</a>
              </h3>
              <p>
                We love solving problems, automating processes.
              </p>
              <p>
                The Internet is more than websites.
              </p>
              <p>
                Your business might need to automate a process or provide clients access to their data.
              </p>
              <p>
                With a web application you have more than a marketing website.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 desktop-only">
        <div class="column right code light-grey">
<pre><code class="language-javascript line-numbers">Vue.use(VueCharts);
Vue.use(VueMaterial);
Vue.use(VeeValidate);
Vue.material.inkRipple = true;
Vue.component('amortization-table', require('./components/AmortizationTable.vue'));
Vue.component('update-account-information', require('./components/UpdateAccountInformation.vue'));

import Vuex from 'vuex';
Vue.use(Vuex);
const store = new Vuex.Store({
  state: {
    loanTerm: 0,

</code></pre>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6 col-md-offset-6">
        <div class="column right light-grey header">
  				<h2 class="extend">Business Class Email</h2>
    		</div>
     	</div>
    </div>

    <div class="row equalize">
      <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
        <h3 class="extend"><a href="{{ route('email.cloud') }}">G Suite or Office 365</a></h3>
        <p>
          The leaders in collaborative email solutions.
        </p>
        <p>
          Authorized resellers of the two most popular collaborative email services.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
        <h3 class="extend"><a href="{{ route('email.cloud') }}">Rolet Email</a></h3>
        <p>
          POP / IMAP / SMTP.  Three oldies but goodies.
        </p>
        <p>
          Tried and true. If your company doesn't need collabortive email this is the solution for you.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
        <h3 class="extend"><a href="{{ route('email.cloud') }}">Hybrid</a></h3>
        <p>
          Need a little bit of both?
        </p>
        <p>
          Why not. You have the flexibility to combine {{ config('app.name') }} Email with G Suite or Office 365.
        </p>
      </div>
    </div>

{{--
count: 0,
    Vue.component('get-account-information', require('./components/GetAccountInformation.vue'));
 --}}
    {{-- <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
      <h3 class="extend">
        <a href="{{ route('websites-and-apps.hacked') }}">Hacked?</a>
      </h3>
      <p>
        Something happened, not sure what. All you know is that you're in trouble.
      </p>
      <p>
        We can help. With over 20 years of development and hosting experience we have seen it all and can identify, fix, and stop hacks.
      </p>
    </div> --}}

    {{-- Vue.component('amortization-summary', require('./components/AmortizationSummary.vue'));
    Vue.component('amortization-input', require('./components/AmortizationInput.vue'));
    Vue.component('update-contact-information', require('./components/UpdateContactInformation.vue')); --}}

    {{-- <div class="row">
      <div class="col-md-12">
        <p>Message to intertwine through out website:</p>
        <ul>
          <li>Kansas City</li>
          <li>Full service (not the plumber that does electric work)</li>
          <li>Boutique (not the big one on the block, attention to detail)</li>
          <li>Unique capabilities of being able to design, develop (code) and host (in one place)</li>
        </ul>
        <p>
          <b>Hosting Products</b>
        </p>
        <ul>
          <li>Migration</li>
          <li>Custom - no cPanel overhead</li>
          <li>Load Balancing with Nginx
            <ul>
              <li>Long lived high traffic sites</li>
              <li>Short term viral marketing sites</li>
              <li>Local - Apache/node.js/IIS</li>
              <li>External - AWS/Azure/etc</li>
            </ul>
          </li>
        </ul>
        <p><b>Email Products</b></p>
        <ul>
          <li>Hybrid</li>
          <li>Transactional</li>
          <li>Continuity</li>
          <li>Advanced Mail Security</li>
        </ul>
        <p>
          <b>Websites and Apps</b>
        </p>
        <ul>
          <li>Custom designs/themes</li>
          <li>Custom backend managers on top of CMS</li>
          <li>Website without CMS</li>
          <li>Make your website work for you</li>
          <li>Hacked?</li>
        </ul>
      </div>
    </div> --}}
  </div>

  {{-- <div class="title m-b-md">
      Laravel
  </div>

  <div class="links">
      <a href="https://laravel.com/docs">Documentation</a>
      <a href="https://laracasts.com">Laracasts</a>
      <a href="https://laravel-news.com">News</a>
      <a href="https://forge.laravel.com">Forge</a>
      <a href="https://github.com/laravel/laravel">GitHub</a>
  </div> --}}
@endsection
