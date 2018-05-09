<li>
  <a href="{{ route('hosting') }}"
    @if ($primary)
      v-on:mouseover="showSubNavigation('hosting')"
      v-on:mouseout="resetSubNavigation()"
    @endif
    title="View solutions for website and server hosting."
    class="nav-fa hosting-nav-fa{{ Request::is('hosting*')? ' active' : '' }}">
      <span class="link-text">Hosting</span>
  </a>
  <div
    @if ($primary)
      {{-- v-show="currentMenuItem === 'hosting'" --}}
      v-show="isSubNavigationShowing('hosting')"
      style="display:none;"
    @endif
    class="secondary-menu-container">
    <ul class="menu secondary">
      <li><a href="{{ route('hosting.cpanel') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('hosting/cpanel')? 'active' : '' }}">cPanel</a></li>
      <li><a href="{{ route('hosting.custom') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('hosting/custom*')? 'active' : '' }}">Custom</a></li>
      <li>
        <a href="{{ route('hosting.cloud-servers') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('hosting/cloud-servers*')? 'active' : '' }}">Cloud Servers</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('hosting.cloud-servers.questionnaire') }}">Looking for a Cloud Server?</a>
            </li>
          </ul>
        @endif
      </li>
      {{-- <li><a href="{{ route('hosting.colocated') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('hosting/colocated')? 'active' : '' }}">D - Colocated</a></li> --}}
      <li>
        <a href="{{ route('hosting.migration') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('hosting/migration')? 'active' : '' }}">Migration</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('hosting.migration.questionnaire') }}">Need to Move?</a>
            </li>
          </ul>
        @endif
      </li>
      <li>
        <a href="{{ route('hosting.managed') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('hosting/managed*')? 'active' : '' }}">Managed</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('hosting.managed.questionnaire') }}">Need to Help?</a>
            </li>
          </ul>
        @endif
      </li>
    </ul>
  </div>
</li>
