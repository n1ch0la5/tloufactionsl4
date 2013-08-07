<!-- Navigation -->
   <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="/">
            TLOUFACTIONS.COM
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
     <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li><a href="/loadout-builder/">Loadout Builder</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Database</a>
          <ul class="dropdown">
            <li><a href="#">Survival Skills</a></li>
            <li><a href="#">Weapons</a></li>
            <li><a href="#">Purchased Weapons</a></li>
          </ul>
        </li>
        <li><a href="#">Discussion</a></li>
        <li class="divider"></li>
        <li class="has-dropdown has-dropdown-custom">
          <a href="#" class="user_account_icon foundicon-settings"></a>
          <ul class="dropdown account_settings">
            <li>
              {{ Form::open(array('url' => 'auth/login', 'id' => 'form_login')) }}
                <ul>
                    <li>
                      {{ Form::text('identity', null, array('placeholder' => 'Username/Email')) }}
                    </li>
                    <li>
                      {{ Form::password('password', array('placeholder' => '&#9679;&#9679;&#9679;&#9679;&#9679;')) }}
                    </li>
                    <li>
                      {{ Form::submit('Login', array('class' => 'small secondary button')) }}
                    </li>
                </ul>
              {{ Form::close() }}
            </li>
          </ul>
        </li>
      </ul>
    </section>
  </nav>
 <!-- End Top Bar -->