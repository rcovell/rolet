<li>
  <a href="{{ route ('support') }}" class="nav-fa support-nav-fa{{ Request::is('support*')? ' active' : '' }}">Support</a>
  <ul class="menu secondary">
    <li>
      <a href="{{ route ('support.customer-login') }}" class="{{ Request::is('*customer-login')? 'active' : '' }}">Customer Login</a>
    </li>
    <li>
      <a href="http://kb.rolet.com/" target="_blank">Knowledge Base</a>
    </li>
    {{-- @if (!Request::is('*site-map'))
      <li class="">
        <a href="{{ route ('site-map')}}" class="">Site Map</a>
      </li>
    @endif --}}
  </ul>
</li>
