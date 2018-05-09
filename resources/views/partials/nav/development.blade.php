<li>
  <a
    @if ($primary)
      v-on:mouseover="showSubNavigation('websites-and-apps')"
      v-on:mouseout="resetSubNavigation()"
    @endif
    href="/websites-and-apps"
    title="View solutions for Websites and Web Applications."
    class="nav-fa dd-nav-fa">
      <span class="link-text">Websites and Apps</span>
  </a>
  <div
    @if ($primary)
      v-show="currentMenuItem === 'websites-and-apps'"
      style="display:none;"
    @endif
    class="secondary-menu-container">
    <ul class="menu secondary">
      <li><a href="/websites-and-apps/websites" title="Websites" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()">Websites</a></li>
      <li><a href="/websites-and-apps/apps" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()">Apps</a></li>
      <li><a href="/websites-and-apps/drupal" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()">Drupal</a></li>
      <li><a href="/websites-and-apps/wordpress" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()">Wordpress</a></li>
      <li><a href="/websites-and-apps/managed" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()">Managed</a></li>
      <li><a href="/websites-and-apps/hacked" title="Has your website been hacked?  We can help!" v-on:mouseover="cancelResetSubNavigation()" v-on:mouseout="resetSubNavigation()">Hacked?</a></li>
    </ul>
  </div>
</li>
