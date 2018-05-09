<li>
  <a href="{{ route('email') }}"
    @if ($primary)
      v-on:mouseover="showSubNavigation('email')"
      v-on:mouseout="resetSubNavigation()"
    @endif
    title="View solutions for email."
    class="nav-fa email-nav-fa{{ Request::is('email*')? ' active' : '' }}">
      <span class="link-text">Email</span>
  </a>
  <div
    @if ($primary)
      {{-- v-show="currentMenuItem === 'email'" --}}
      v-show="isSubNavigationShowing('email')"
      style="display:none;"
    @endif
    class="secondary-menu-container">
    <ul class="menu secondary">
      <li>
        <a href="{{ route('email.cloud') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('email/cloud')? 'active' : '' }}">Cloud</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('email.cloud.questionnaire') }}">Need Email?</a>
            </li>
          </ul>
        @endif
      </li>
      {{-- <li><a href="{{ route('email.hybrid') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('email/hybrid')? 'active' : '' }}">Hybrid</a></li> --}}
      <li><a href="{{ route('email.continuity') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('email/continuity')? 'active' : '' }}">Continuity</a></li>
      <li><a href="{{ route('email.transactional') }}" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('email/transactional')? 'active' : '' }}">Transactional</a></li>
    </ul>
  </div>
</li>
