@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Rolet contact information.')
@section('keywords', 'contact')
@section('body_class', 'questionnaire contact')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Contact
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('contact') }}

  @include('partials.message')

	<div class="container">
	  <div class="row theme">
	    <div class="col-md-8">
				<div class="column left first">
          <h2 class="extend">Drop Us a Note</h2>
          @include ('questionnaires.contact')
				</div>
			</div>
      <div class="col-md-4">
				<div class="column light-grey right first">
          <h2 class="extend">Email/Phone/Address</h2>

  				<div class="line-items contact">
  					<div class="line-item">
  						<div class="inner">
  							<div class="q">Support:</div>
  							<div class="a"><a href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;</a></div>
  						</div>
  					</div>
  					<div class="line-item">
  						<div class="inner">
  							<div class="q">Sales:</div>
  							<div class="a"><a href="mailto:&#115;&#97;&#108;&#101;&#115;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;">&#115;&#97;&#108;&#101;&#115;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;</a></div>
  						</div>
  					</div>


  					<div class="line-item">
  						<div class="inner">
  							<div class="q">General:</div>
  							<div class="a"><a href="mailto:&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;">&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;</a></div>
  						</div>
  					</div>

  					<div class="line-item">
  						<div class="inner">
  							<div class="q">Phone:</div>
  							<div class="a"><a href="tel:816-471-1095">816-471-1095</a></div>
  						</div>
  					</div>
  				</div>

          <p>
            <b>Corporate Headquarters:</b>
            {{-- <br />
    				Rolet --}}
            <br />
    				1600 Genessee St.
            <br />
    				Suite 810
            <br />
    				Kansas City, MO 64102
          </p>

          <p>
            <b>Billing Address:</b>
            {{-- <br />
    				Rolet --}}
            <br />
    				4741 Central
            <br />
    				Suite 352
            <br />
    				Kansas City, MO 64112-1533
          </p>
				</div>
			</div>
		</div>
	</div>
@endsection
