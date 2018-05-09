<li>
  <a
    @if ($primary)
      v-on:mouseover="showSubNavigation('websites-and-apps')"
      v-on:mouseout="resetSubNavigation()"
    @endif
    href="/websites-and-apps"
    title="View solutions for Websites and Web Applications."
    class="nav-fa dd-nav-fa{{ Request::is('websites-and-apps*')? ' active' : '' }}">
      <span class="link-text">Websites and Apps</span>
  </a>

  <div
    @if ($primary)
      {{-- v-show="currentMenuItem === 'websites-and-apps'" --}}
      v-show="isSubNavigationShowing('websites-and-apps')"
      style="display:none;"
    @endif
    class="secondary-menu-container">
    <ul class="menu secondary">
      <li>
        <a href="{{ route ('websites-and-apps.websites') }}" title="Upgrade or make a new website" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('websites-and-apps/websites*')? 'active' : '' }}">Websites</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('websites-and-apps.websites.questionnaire') }}">Need a Website?</a>
            </li>
          </ul>
        @endif
      </li>
      <li>
        <a href="{{ route ('websites-and-apps.web-applications') }}" title="Have something more than a website?" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('websites-and-apps/web-applications*')? 'active' : '' }}">Web Applications</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('websites-and-apps.web-applications.questionnaire') }}">Have more than a Website?</a>
            </li>
          </ul>
        @endif
      </li>
      <li>
        <a href="{{ route ('websites-and-apps.hacked') }}" title="Has your website been hacked?  We can help!" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('websites-and-apps/hacked*')? 'active' : '' }}">Hacked?</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('websites-and-apps.hacked.questionnaire') }}">We can Help!</a>
            </li>
          </ul>
        @endif
      </li>
      <li>
        <a href="{{ route ('websites-and-apps.managed') }}" title="Need some help?" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()" class="{{ Request::is('websites-and-apps/managed*')? 'active' : '' }}">Managed</a>
        @if (Request::is('site-map'))
          <ul class="menu tertiary">
            <li>
              <a href="{{ route('websites-and-apps.managed.questionnaire') }}">We can Help!</a>
            </li>
          </ul>
        @endif
      </li>
    </ul>
  </div>
</li>
