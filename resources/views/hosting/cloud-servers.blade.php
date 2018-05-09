@extends('layouts.app')

@section('title', 'Cloud Servers')
@section('description', 'Linux or Windows based cloud servers. Single instance or entire server.')
@section('keywords', 'cloud servers, vps, virtual private servers, linux, windows, xen, kvm, hyper-v, proxmox')
@section('body_class', 'cloud-servers')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Cloud Servers
    @endslot
    @slot('pageSubtitle')
      Up Up in the clouds
    @endslot
    @slot('pageShortDescription')
      Cloud everything is all the rage right now.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('hosting.cloud-servers') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column first">
          <h2 class="extend">
            Built for Developers. Available for Everyone.
          </h2>
          <p class="leader">
            Put this in the cloud, put that in the cloud.
          </p>
          <p>
            Our cloud servers are built from the ground up by expert engineers and application developers at Rolet. They’ve been used and abused by our toughest critics: us. Leverage server class hardware, fast networks and our expertise for a low cost, efficient alternative to dedicated servers. Choose the package that’s right for you and setup your own cloud server instance in less than 5 minutes.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4 col-sm-6">
        <div class="column left white no-extend">
          <h3 class="extend">
            Instance
          </h3>
          <p class="leader">
            Configure for your needs
          </p>
          <p>
            Don't need an entire server.  Stand up a Rolet Cloud server based on the KVM Hypervisor.
          </p>
          <p>
            Need something more customized.  Let us <a href="{{ route ('hosting.cloud-servers.questionnaire') }}">know</a> and we'll create a roadmap to get you what you need.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="column middle white no-extend">
          <h3 class="extend">
            Server
          </h3>
          <p class="leader">
            Provision as you see fit
          </p>
          <p>
            Choose your hypervisor or use Proxmox.  We'll stand up a server based on server class hardward for unmatched performance.
          </p>
          <p>
            Not sure, but you know just one instance will work?  Fill out our <a href="{{ route ('hosting.cloud-servers.questionnaire') }}">questionnaire</a> and we'll figure it out together.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="column right white no-extend">
          <h3 class="extend">
            Proxmox-VE
          </h3>
          <p class="leader">
            Enterprise-grade virtualization
          </p>
          <p>
            Proxmox-VE can easily handle the most demanding server infrastructure. Based on the mature and trusted KVM hypervisor, the software provides a highly stable and resilient environment that is extraordinarily easy to setup and administer.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left light-blue header">
  				<h2 class="extend">Rolet Cloud Servers</h2>
    		</div>
     	</div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4 col-xs-12">
    		<div class="column left light-grey">
  				<h2 class="extend">CS 256</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
    					<div class="yearly">24</div>
    					<div class="you-save">(save $48)</div>
    					<div class="monthly">240</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights">
    					<div class="line-item">
    						<div class="inner">
                  <div class="q"><i class="fa fa-th-large"></i>256 MB</div>
    							<div class="a">Memory</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-hdd-o"></i>10 GB</div>
    							<div class="a">Storage</div>
    						</div>
    					</div>
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-arrows-h"></i>150 GB</div>
    							<div class="a">Transfer</div>
    						</div>
    					</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
      				<a title="Activate  Cloud Server 256" href="https://activate.rolet.com/service/pg/9cdef677d841eca20f06c63a7cd83696" class="button rounded">Activate</a>
      			</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">CentOS 6</div>
    						</div>
    					</div>
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">Webmin</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">Dedicated IP</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">SSH Access</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">KVM Hypervisor</div>
    						</div>
    					</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xs-12">
    		<div class="column middle light-blue">
  				<h2 class="extend">CS 512</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="yearly">40</div>
              <div class="you-save">(save $80)</div>
              <div class="monthly">400</div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-th-large"></i>512 MB</div>
                  <div class="a">Memory</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-hdd-o"></i>20 GB</div>
                  <div class="a">Storage</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-arrows-h"></i>300 GB</div>
                  <div class="a">Transfer</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate  Cloud Server 512" href="https://activate.rolet.com/service/pg/2093b1cc8bfc3b89cfe0c08fc681b387" class="button rounded popular">Activate</a>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">CentOS 6</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">Webmin</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">Dedicated IP</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">SSH Access</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">KVM Hypervisor</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xs-12">
    		<div class="column right light-grey">
  				<h2 class="extend">CS 1024</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="yearly">70</div>
              <div class="you-save">(save $140)</div>
              <div class="monthly">700</div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-th-large"></i>1024 MB</div>
                  <div class="a">Memory</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-hdd-o"></i>40 GB</div>
                  <div class="a">Storage</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-arrows-h"></i>600 GB</div>
                  <div class="a">Transfer</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate  Cloud Server 1024 Cloud Server" href="https://activate.rolet.com/service/pg/dc88c4cde153f783a7db065cf58d6ca1" class="button rounded">Activate</a>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">CentOS 6</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">Webmin</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">Dedicated IP</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">SSH Access</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">KVM Hypervisor</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left">
          <h3 class="extend">Available Plans</h3>
          <table cellpadding="0" cellspacing="0" border="0" class="highlights forced-cols available-cloud-plans">
            <tr class="titles first">
              <td class="col1 one-sixth first">Plan</td>
              <td class="col2 one-sixth">RAM</td>
              <td class="col3 one-sixth">Storage</td>
              <td class="col4 one-sixth">Bandwidth</td>
              <td class="col5 one-sixth">Monthly</td>
              <td class="col6 one-sixth last">Yearly</td>
            </tr>
            <tr class="details odd">
              <td class="first">256</td>
              <td>256 MB</td>
              <td>10 GB</td>
              <td>150 GB</td>
              <td>$24</td>
              <td class="last">$240</td>
            </tr>
            <tr class="details even">
              <td class="first">512</td>
              <td>512 MB</td>
              <td>20 GB</td>
              <td>300 GB</td>
              <td>$40</td>
              <td class="last">$400</td>
            </tr>
            <tr class="details odd">
              <td class="first">1GB</td>
              <td>1024 MB</td>
              <td>40 GB</td>
              <td>500 GB</td>
              <td>$70</td>
              <td class="last">$700</td>
            </tr>
            <tr class="details even">
              <td class="first">2GB</td>
              <td>2048 MB</td>
              <td>80 GB</td>
              <td>1200 GB</td>
              <td>$130</td>
              <td class="last">$1300</td>
            </tr>
            <tr class="details odd">
              <td class="first">3GB</td>
              <td>3072 MB</td>
              <td>120 GB</td>
              <td>1800 GB</td>
              <td>$190</td>
              <td class="last">$1900</td>
            </tr>
            <tr class="details even">
              <td class="first">4GB</td>
              <td>4096 MB</td>
              <td>160 GB</td>
              <td>2500 GB</td>
              <td>$250</td>
              <td class="last">$2500</td>
            </tr>
            <tr class="details odd">
              <td class="first">8GB</td>
              <td>8192 MB</td>
              <td>320 GB</td>
              <td>2500 GB</td>
              <td>$500</td>
              <td class="last">$5000</td>
            </tr>
            <tr class="details even">
              <td class="first">15.5GB</td>
              <td>15872 MB</td>
              <td>620 GB</td>
              <td>2500 GB</td>
              <td>$1000</td>
              <td class="last">$10000</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="column right">
          <h3 class="extend">Available Options</h3>
          <table cellpadding="0" cellspacing="0" border="0" class="highlights forced-cols available-oses">
            <tr class="titles first">
              <td class="col1 five-sixth first">Operating System</td>
              <td class="col2 one-sixth last">Monthly</td>
            </tr>
            <tr class="details odd">
              <td class="first">Microsoft Windows Server 2008</td>
              <td class="last number">$25</td>
            </tr>
            <tr class="details even">
              <td class="first">Microsoft Windows Server 2012</td>
              <td class="last number">$35</td>
            </tr>
            <tr class="details odd">
              <td class="first">Red Hat EL 6.x</td>
              <td class="last number">$25</td>
            </tr>
            <tr class="details even">
              <td class="first">Red Hat EL 7.x</td>
              <td class="last number">$35</td>
            </tr>
            <tr class="details odd">
              <td class="first">CentOS 6/7</td>
              <td class="last number">$0</td>
            </tr>
            <tr class="details even">
              <td class="first">Ubuntu 12/14/16</td>
              <td class="last number">$0</td>
            </tr>
            <tr class="details odd">
              <td class="first">cPanel – WHM VPS Optimized2&reg;</td>
              <td class="last number">$35</td>
            </tr>
            <tr class="details even">
              <td class="first">Fantasico De Luxe – autoinstaller</td>
              <td class="last number">$15</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need a Custom Cloud Instance or Server?</h2>

          <p>
            Take a minute to fill out our cloud hosting questionnaire so that we can identify your needs.
          </p>

          <a href="{{ route ('hosting.cloud-servers.questionnaire') }}" class="button rounded">Tell us what your looking for</a>
        </div>
      </div>
    </div>
  </div>
@endsection
