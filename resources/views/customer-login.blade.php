@extends('layouts.app')

@section('title', 'Customer Login')
@section('description', 'Login to your Rolet services.')
@section('keywords', 'customer login, login')
@section('body_class', 'customer-login')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Customer Login
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('support.customer-login') }}

	<div class="container">
	  <div class="row theme">
	    <div class="col-md-4 col-sm-4">
				<div class="column left first">
          <h2 class="extend">Client Interface</h2>
					<p>
						View and update your account information, manage {{ config('app.name') }} Email, DNS and more.
					</p>
					<p>
						<a href="https://clients.rolet.com" target="_blank">Login to your Client Interface</a>
					</p>
				</div>
			</div>

      <div class="col-md-4 col-sm-4">
				<div class="column middle first">
          <h2 class="extend">Microsoft Exchange</h2>
					<p>
						Access your Exchange Email account securely using Outlook Web Access.
					</p>
					<p>
						<a href="https://outlook2.rolet.com" target="_blank" class="centered">Login to your Microsoft Exchange account</a>
					</p>
				</div>
			</div>

      <div class="col-md-4 col-sm-4">
				<div class="column right first">
          <h2 class="extend">{{ config('app.name') }} Email</h2>
					<p>
						Access your {{ config('app.name') }} Email account securely using our webmail interface.
					</p>
					<p>
						<a href="https://webmail.rolet.com" target="_blank" class="align-center">Login to your Rolet Email account</a>
					</p>
				</div>
			</div>
		</div>

    <div class="row theme">
	    <div class="col-md-6 col-sm-6">
				<div class="column left white">
					<h4 class="extend">Website need a facelift?</h4>
					<p>
						We can help out.  We have been creating website for years.  Whether it is Wordpress, Drupal, Laravel or a Custom website; our website design team can give you a fresh look and feel or add functionality.
					</p>
					<p>
						<a href="{{ route ('websites-and-apps.websites')}}" target="_blank">Click for more information</a>
					</p>
				</div>
			</div>

      <div class="col-md-6 col-sm-6">
				<div class="column right">
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('images/logo_g_suite_wordmark_dark_rgb-40h.png') }}" border="0">
						</div>
						<div class="col-md-6">
							<img src="{{ asset('images/office365-50h.png') }}" border="0">
						</div>
					</div>
					<p>
						Thinking of putting your Email in the Cloud? Rolet is an authorized reseller of both G Suite and Office 365 and can provide solution.
					</p>
					<p>
						<a href="{{ route ('email.cloud') }}" target="_blank">Click for more information</a>
					</p>
				</div>
			</div>
    </div>
	</div>
@endsection
