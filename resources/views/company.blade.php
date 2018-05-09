@extends('layouts.app')

@section('title', 'Company')
@section('description', 'Rolet company information.')
@section('keywords', 'company information')
@section('body_class', 'company')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Company
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('company') }}

	<div class="container">
	  <div class="row theme">
	    <div class="col-md-12">
				<div class="column first">
          <img src="{{ asset('images/P100.jpg') }}" class="content-image" />
  				<p class="dob">
    				DOB: 09/1995
    				Weight: 21 lb 5 oz
  				</p>
  				<p class="dob_notes">NOTES: Healthy & Hungry</p>
          <p>
            Rolet Hosting & Interactive was born in 1995.  The company was started in an apartment building on the Plaza in Kansas City, Missouri.  At that time we used a screaming Pentium 100 MHz server running over a dual channel ISDN line (those were the days <i class="fa fa-smile"></i>).</p>
          </p>
          <p>
            We are still located in Kansas City, Missouri but have since upgraded from our apartment building and even replaced our P100 (still around for memories).  Our data center is now located in the heart of downtown.  You could even say we still live there.
          </p>
          <p>
            Rolet is comprised of a small set of high-energy engineers and dynamic designers who eat and sleep the Internet.  Our engineers are among the best around.  If they don’t know it then they learn it.  Our designers’ creativity is unmatched.  Known for getting it right the first time.
          </p>
          <p>
            As a group we discuss projects "over the walls", constantly come up with new ideas, learn and implement new technologies, and develop new business strategies. Most importantly, we are productive and always have the client in mind.
          </p>
          <p>
            Since our start we have focused on Small to Medium sized businesses.  This remains true today but our reach has grown from local to national and now international.
          </p>
				</div>
			</div>
		</div>
	</div>
@endsection
