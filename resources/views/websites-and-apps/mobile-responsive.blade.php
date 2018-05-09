@extends('layouts.app')

@section('title', 'Mobile Responsive')
@section('description', 'Is your website mobile responsive? Use our mobile responsive app to find out.')
@section('keywords', 'mobile responsive, mobile ready, mobile first, test mobile responsive, test mobile ready')
@section('body_class', 'mobile-responsive')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Mobile Responsive
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.mobile-responsive-test') }}

	<div class="container">
	  <div class="row theme">
	    <div class="col-md-12">
        <div class="column single first light-blue pos-relative">
          <h3 class="extend">Is Your Website Mobile Responsive?</h3>

          <h4 class="extend">Enter your website address below to see how it looks in various mobile screen sizes.</h4>

          <browser save-url="{{ route('send-mobile-test') }}"></browser>
        </div>
			</div>
		</div>

    <div class="row theme">
	    <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">Q: Why Should I Worry About It?</h2>

          <blockquote>
            A: If you don't care about customers from mobile devices then you shouldn't.
          </blockquote>
        </div>
			</div>

      <div class="col-md-6">
        <div class="column right light-grey">
          <p>
            Users are now browsing the web on mobile devices more often than their desktop computer. If your website is not mobile responsive you are potentially losing the ever expanding market of mobile users.
          </p>

          <p>
            Many search engines, including Google, have changed their search results from mobile devices to only include websites that are mobile responsive.
          </p>
        </div>
			</div>
		</div>

	  <div class="row theme">
	    <div class="col-md-12">
        <div class="column full light-grey">
          <h2 class="extend">Hey, My website is mobile responsive. What gives?</h2>

          <p>
            You might be seeing a horizontal scrollbar due to the way your mobile responsive website was created. Some web design firms implement responsive websites based on the type of device accessing it. At Rolet, we don't believe this is the right approach. Once a new device is released, with a bigger screen, your website is already out of date. We believe the proper way to create responsive websites is to based it on the available screen size, not the device. We are certain a new iPhone or iPad is on the way, but we have no idea how big or small it will be. In the future we can always determine the available screen size but not the device.
          </p>
        </div>
			</div>
		</div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Website didn't look quite right?</h2>

          <p>
            Take a minute to fill out our website project survey so that we can take a look and get that thing responsive.
          </p>

          <a href="{{ route('websites-and-apps.websites.questionnaire') }}" class="button rounded">Tell Us About Your Website</a>
        </div>
      </div>
    </div>
	</div>
@endsection
