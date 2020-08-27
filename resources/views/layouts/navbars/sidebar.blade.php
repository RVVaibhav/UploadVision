
<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Vision') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'login') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li>
        <!-- <a data-toggle="collapse" href="#laravelExamples">
            <i class="fab fa-laravel"></i>
          <p>
            {{ __("Laravel Examples") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("User Profile") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
              <a href="">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("User Management") }} </p>
              </a>
            </li>
          </ul>
        </div> -->
      </li>
      <li class = "@if ($activePage == 'users') active @endif">
        <a href="{{ url('/users') }}">
          <i class="now-ui-icons users_single-02"></i>
          <p>{{ __('Users') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'chat') active @endif">
        <a href="{{ url('/chat') }}">
          <i class="now-ui-icons ui-2_chat-round"></i>
          <p>{{ __('Headers') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'userposts') active @endif">
        <a href="{{ url('/userposts') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Post') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'products') active @endif">
        <a href="{{ url('/products') }}">
          <i class="now-ui-icons shopping_box"></i>
          <p>{{ __('Product') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Finance') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notification') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'algorithms') active @endif">
        <a href="{{ url('/algorithms') }}">
          <i class="now-ui-icons business_bulb-63"></i>
          <p>{{ __('Algorithm') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="">
          <i class="now-ui-icons loader_gear"></i>
          <p>{{ __('Settings') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
