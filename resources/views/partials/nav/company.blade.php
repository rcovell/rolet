<li>
  <a href="{{ route ('company') }}" class="nav-fa contact-nav-fa{{ Request::is('company*')? ' active' : '' }}">Company</a>
  <ul class="menu secondary">
    <li class="">
      <a href="tel:1-816-471-1095" class="">816-471-1095</a>
    </li>
    <li class="">
      <a href="{{ route ('company.contact') }}" title="Find contact information for Rolet." class="{{ Request::is('*contact')? 'active' : '' }}">Contact</a>
    </li>
    {{-- <li class="">
      <a href="http://blog.rolet.com" target="_blank" class="">Blog</a>
    </li> --}}
    <li class="">
      <a href="{{ route('company.acceptable-use') }}" class="{{ Request::is('*acceptable-use')? 'active' : '' }}">Acceptable Use</a>
    </li>
    <li class="">
      <a href="{{ route('company.privacy-policy') }}" class="{{ Request::is('*privacy-policy')? 'active' : '' }}">Privacy Policy</a>
    </li>
  </ul>
</li>
