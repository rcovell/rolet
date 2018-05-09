@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('description', 'Rolet Privacy Policy.')
@section('keywords', 'privacy policy')
@section('body_class', 'privacy-policy')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Privacy Policy
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('privacy-policy') }}

	<div class="container">
	  <div class="row theme">
	    <div class="col-md-12">
				<div class="column first">
					<h2 class="extend">PRIVACY POLICY FOR ROLET INTERNET SERVICES, INC</h2>

					<h3 class="extend">General</h3>

					Rolet respects the privacy of every individual who visits our Web sites, responds to our interactive advertisements or sends us e-mail. This Privacy Statement outlines the information Rolet will collect and how we will use that information. This Statement will also instruct you on what to do if you do not want your personal information collected or shared when you visit Rolet Web sites, respond to our Web-based advertisements or send us email.

					<h3 class="extend">Security</h3>

					All order forms on rolet.com utilize a Secure Socket Layer (SSL) protocol to provide "secure sessions" for our visitors. Through the "secure session," information that you input into a rolet.com order form will be sent and will arrive privately and unaltered at a Rolet server. This security prohibits other companies and Web users from being able to access your information.

					<h3 class="extend">Personally-Identifiable Information</h3>

					Rolet will not collect any personally-identifiable information about you (that is, your name, address, telephone number, or email address) unless you provide it to us voluntarily.

					The following are some examples of when Rolet may require that you provide personally-identifiable information:

					<ol>
						<li>To complete an online order for a product or service (if you do not wish to complete an online order form, we will always provide an option for you to complete an order by calling our office number listed at the bottom of this Statement)</li>
						<li>To enter an online contest or sweepstakes (if you do not wish to complete an online contest or sweepstakes form, we will always provide an option for you to enter by mailing a 3 x 5 card to a specific address)</li>
						<li>to request more information about new or current Rolet products or services</li>
					</ol>

					If you do not want your personally-identifiable information collected, please do not submit it to us. If you have already submitted this information and would like for us to remove it from our records, please contact us at the email address listed at the bottom of this Statement. We will use reasonable efforts to delete your information from our existing files.

					When you do provide us with personally-identifiable information, we may use that information in the following ways, unless stated otherwise:

					<ol>
						<li>We may store and process that information to better understand all customer needs and how we can improve our products and services for all customers</li>
						<li>We may use that information to contact you with new promotions and announcements if you have previously provided your permission and if the promotions and announcements are in your interest</li>
						<li>We may contact you if we have questions about your account</li>
					</ol>

					Rolet will not sell personally-identifiable information to third parties, unless stated at the time of collection. We may share information with business partners. We are committed to giving you the choice whether or not we use your information for marketing purposes or share information with business partners.


					<h3 class="extend">Children</h3>

					Rolet has no intention of providing services to individuals under 18 years of age without consent of a parent or guardian. A parent or guardian of that child should contact us at the email address or phone number listed at the bottom of this Statement.

					Rolet has no intention of collecting any personally-identifiable information (that is, name, address, telephone number, or email address) from individuals under 18 years of age. Where appropriate, Rolet will specifically instruct children not to submit such information on our Web sites or advertisements without consent of a parent or guardian. If a child has provided us with personally-identifiable information without the consent of a parent or guardian, a parent or guardian of that child should contact us at the email address listed at the bottom of this Statement if they would like this information deleted from our records. We will use reasonable efforts to delete the child's information from our existing files.

					<h3 class="extend">Non-Personally-Identifiable Information Collected Automatically</h3>

					In some cases, we may collect information about you that is not personally-identifiable. Examples of this type of information include the type of Internet Browser you are using, the type of computer operating system you are using, and the domain name of the Web site and/or Internet Service Provider from which you linked to our site or advertisement.

					Similar to personally identifiable information, we will not sell non-personally-identifiable information to third parties, unless stated at the time of collection. We may share non-personally identifiable information with business partners.

					<h3 class="extend">Use of Cookies</h3>

					When you view one of our Web sites or advertisements, we may store some information on your computer. This information will be in the form of a "Cookie" or similar file and will be used to determine ways to improve our Web sites, advertisements, products or services. For example, Cookies allow us to tailor a Web site to better match your interests and preferences. With most Internet Browsers, you can erase Cookies from your computer hard drive, block all Cookies, or receive a warning before a Cookie is stored. Please refer to your Browser instructions or help screen to learn more about these functions.

					<h3 class="extend">Who to Contact</h3>

					If you have submitted personally-identifiable information through a Rolet Web site or interactive advertisement, and would like that information deleted from our records, please contact us at our email address, <a href="mailto:&#112;&#114;&#105;&#118;&#97;&#99;&#121;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;">&#112;&#114;&#105;&#118;&#97;&#99;&#121;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;</a> or call our office at <a href="tel:816-471-1095">816-471-1095</a>. We will use reasonable efforts to delete this information from our existing files.
				</div>
			</div>
		</div>
	</div>
@endsection
