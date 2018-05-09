@extends('layouts.app')

@section('title', 'Websites and Applications')
@section('description', 'Have an idea for a websites or web applications, we can build it for you.')
@section('keywords', 'websites, web applications, development, mobile first, hacked, custom themes')
@section('body_class', 'websites-and-apps')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Websites and Apps
    @endslot
    @slot('pageSubtitle')
      {{-- Starting with a Blank Canvas? --}}
      Blank Canvas?
    @endslot
    @slot('pageShortDescription')
      {{-- If you have an idea or need help getting one going we can help paint your canvas. --}}
      We can help you paint it.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">Business Class Development</h2>

          <p class="leader">
            With over 20 years of experience in development we have learned how to do it right.
          </p>

          <p>
            Not only for companies, but for individuals too. Websites or web applications, we have the ability to convey your message or solve your problem.
          </p>

          <p>
            Developers by nature, we crafted our hosting solutions to match our development needs. Which came first, the chicken or the egg?  Half of 1, 6 dozen of the other (is that right, probably not)? Matters not (yoda?). Our development matches our hosting solutions, what we need to learn we learn, what we to support we stand up on a new server.  We are developers that know how to make your website or web application work, Period.
          </p>
        </div>
      </div>
    </div>

    <div class="row equalize">
      <div class="col-md-6 col-sm-6 col-xs-12 service">
        <h3 class="extend">
          <a href="{{ route('websites-and-apps.websites') }}">Websites</a>
        </h3>
        <p>
          Everyone is doing it. We do it too, but a bit different.
        </p>
        <p>
          We could use a theme but why? Does that convey who you are?
        </p>
        <p>
          We have designers that can convey your business for who you are. Why fit into a theme that is not you?
        </p>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 service">
        <h3 class="extend">
          <a href="{{ route('websites-and-apps.web-applications') }}">Web Applications</a>
        </h3>
        <p>
          There is more to the Internet than websites.
        </p>
        <p>
          Your business might need to automate a process or provide clients access to their data.
        </p>
        <p>
          With a web application you have more than a marketing website.
        </p>
      </div>
    </div>

    <div class="row equalize">
      <div class="col-md-6 col-sm-6 col-xs-12 service">
        <h3 class="extend">
          <a href="{{ route('websites-and-apps.hacked') }}">Hacked?</a>
        </h3>
        <p>
          Something happened, not sure what. All you know is that you're in trouble.
        </p>
        <p>
          We can help. With over 20 years of development and hosting experience we have seen it all and can identify, fix, and stop hacks.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 service">
        <h3 class="extend">
          <a href="{{ route('websites-and-apps.managed') }}">Managed</a>
        </h3>
        <p>
          Need help maintaining your website? From regular content updates to security updates.
        </p>
        <p>
          We have maintained a wide variety of content management systems and custom websites developed by third party vendors.
        </p>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="column left white no-extend">
          <h3 class="extend">
            Custom designs/themes
          </h3>
          <p class="leader">
            Want to look like everyone else, go to the garden.
          </p>
          <p>
            Want to have your website resemble who you are? Have a say in how it looks and how it represents your company.
          </p>
          <p>
            Our designers will create a website that looks and feels like your company.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="column right white no-extend">
          <h3 class="extend">
            Mobile First
          </h3>
          <p class="leader">
            Every website we create starts with mobile first.
          </p>
          <p>
            Is your website mobile responsive? Check your website to see how it looks on various mobile device screen sizes.
          </p>
          <p class="centered-text">
            <a href="{{ route('websites-and-apps.mobile-responsive-test') }}" class="button rounded">Test Your Website</a>
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="column left white no-extend">
          <h3 class="extend">
            Client Portals
          </h3>
          <p class="leader">
            Extend Your Website
          </p>
          <p>
            Take your marketing website and turn it into a tool for your clients customers.
          </p>
          <p>
            You spent good money to make your website but it is not saving you anything now. Provide your clients access to information they need, allow them to pay invoices online. Automate a process, streamline your business.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="column right white no-extend">
          <h3 class="extend">
            No Content Management System
          </h3>
          <p class="leader">
            It is true
          </p>
          <p>
            Not everyone is using a CMS, and for the record companies are going away from it, due to security or flexibility.
          </p>
          <p>
            Your website doesn't have to be in a CMS either. Static content generators such as Wintersmith or the Laravel MVC framework are great options from the traditional CMS offerings.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column light-blue header">
          <h2 class="extend centered-text">Make your website work for you</h2>
        </div>
      </div>
    </div>
  </div>
@endsection
