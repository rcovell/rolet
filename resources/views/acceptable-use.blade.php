@extends('layouts.app')

@section('title', 'Acceptable Use')
@section('description', 'Rolet acceptable use information.')
@section('keywords', 'acceptable use')
@section('body_class', 'acceptable-use')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Acceptable Use
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('acceptable-use') }}

	<div class="container">
	  <div class="row theme">
	    <div class="col-md-12">
				<div class="column first">
          <h2 class="extend">ACCEPTABLE USE POLICY FOR ROLET INTERNET SERVICES, INC</h2>

          <p>
            Rolet's Acceptable Use Policy (the "Policy") for Rolet Internet Services is designed to help protect Rolet, Rolet's customers and the Internet community in general from irresponsible or, in some cases, illegal activities. The Policy is a non-exclusive list of the actions prohibited by Rolet. Rolet reserves the right to modify the Policy at any time, effective upon posting.</p>
          </p>

  				<b>Prohibited Uses of Rolet's Systems, Products and Services</b>

  				<ol>
  					<li>Transmission, distribution or storage of any material in violation of any applicable law or regulation is prohibited. This includes, without limitation, material protected by copyright, trademark, trade secret or other intellectual property right used without proper authorization, and material that is obscene, defamatory, constitutes an illegal threat, or violates export control laws.</li>
  					<li>Sending unsolicited mail messages, including the sending of "junk mail" or other advertising material to individuals who did not specifically request such material ("e-mail spam"). This includes, but is not limited to, bulk-mailing of commercial advertising, informational announcements, and political tracts. It also includes posting the same or similar message to one or more newsgroups (excessive cross-posting or multiple-posting). Rolet accounts or services may not be used to collect replies to messages sent from another Internet Service Provider where those messages violate this Policy or that of the other provider.</li>
  					<li>Unauthorized use, or forging, of mail header information (e.g. "spoofing").</li>
  					<li>Unauthorized attempts by a user to gain access to any account or computer resource not belonging to that user (e.g., "cracking").</li>
  					<li>Obtaining or attempting to obtain service by any means or device with intent to avoid payment.</li>
  					<li>Unauthorized access, alteration, destruction, or any attempt thereof, of any information of any Rolet customers or end-users by any means or device.</li>
  					<li>Knowingly engage in any activities that will cause a denial-of-service (e.g., synchronized number sequence attacks) to any Rolet customers or end-users whether on the Rolet network or on another provider's network.</li>
  					<li>Using Rolet's Products and Services to interfere with the use of the Rolet network by other customers or authorized users.</li>
  				</ol>

          <p>
            Each Rolet customer is responsible for the activities of its customer base/representatives or end-users and, by accepting service from Rolet, is agreeing to ensure that its customers/representatives or end-users abide by this Policy. Complaints about customers/representatives or end-users of a Rolet customer will investigated and with action taken. If violations of the Rolet Acceptable Use Policy occur, Rolet reserves the right to terminate services with or take action to stop the offending customer from violating the Acceptable Use Policy as Rolet deems appropriate, without notice.
          </p>

  				<p>
            <b>Report Policy violations to:</b> <a href="mailto:&#97;&#98;&#117;&#115;&#101;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;">&#97;&#98;&#117;&#115;&#101;&#64;&#114;&#111;&#108;&#101;&#116;&#46;&#99;&#111;&#109;</a>
          </p>
				</div>
			</div>
		</div>
	</div>
@endsection
