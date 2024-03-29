<nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-light navbar-shadow fixed-top">
  <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
      <ul class="nav navbar-nav d-xl-none">
        <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
              data-feather="menu"></i></a></li>
      </ul>
      <ul class="nav navbar-nav bookmark-icons">
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/email')}}" data-toggle="tooltip"
            data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/chat')}}" data-toggle="tooltip"
            data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/calendar')}}" data-toggle="tooltip"
            data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/todo')}}" data-toggle="tooltip"
            data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link bookmark-star">
            <i class="ficon text-warning" data-feather="star"></i>
          </a>
          <div class="bookmark-input search-input">
            <div class="bookmark-input-icon">
              <i data-feather="search"></i>
            </div>
            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
            <ul class="search-list search-list-bookmark"></ul>
          </div>
        </li>
      </ul>
    </div>
    <ul class="nav navbar-nav align-items-center mx-auto">
      <li class="nav-item d-none d-lg-block">
        <span class="nav-link h5">
          <script type="text/javascript">
            var day = new Date();
        var hr = day.getHours();
        if (hr >= 0 && hr < 12) {
            document.write("Good Morning!");
        } else if (hr == 12) {
            document.write("Good Noon!");
        } else if (hr >= 12 && hr <= 16) {
            document.write("Good Afternoon!");
        } else {
            document.write("Good Evening!");
        }
          </script>
        </span class="nav-link h5">
      </li>
    </ul>
    <ul class="nav navbar-nav align-items-center">
      <li class="nav-item dropdown dropdown-language">
        <a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="flag-icon flag-icon-us"></i>
          <span class="selected-language">English</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
          <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
            <i class="flag-icon flag-icon-us"></i> English
          </a>
        </div>
      </li>
      <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
            data-feather="{{  auth()->user()->is_dark_mode == 1 ? 'sun' : 'moon' }}"></i></a>
      </li>
      <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
            data-feather="search"></i></a>
        <div class="search-input">
          <div class="search-input-icon"><i data-feather="search"></i></div>
          <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
            data-search="search">
          <div class="search-input-close"><i data-feather="x"></i></div>
          <ul class="search-list search-list-main"></ul>
        </div>
      </li>
      <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);"
          data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
            class="badge badge-pill badge-danger badge-up">5</span></a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
          <li class="dropdown-menu-header">
            <div class="dropdown-header d-flex">
              <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
              <div class="badge badge-pill badge-light-primary">2 New</div>
            </div>
          </li>
          <li class="scrollable-container media-list">
            <a class="d-flex" href="javascript:void(0)">
              <div class="media d-flex align-items-start">
                <div class="media-left">
                  <div class="avatar"><img src="{{ auth()->user()->profile_photo_url }}" alt="avatar" width="32"
                      height="32"></div>
                </div>
                <div class="media-body">
                  <p class="media-heading"><span class="font-weight-bolder">Congratulation {{ Auth::user()->name }}
                      🎉</span>winner!</p>
                  <small class="notification-text"> Won the monthly best seller badge.</small>
                </div>
              </div>
            </a>
            <div class="media d-flex align-items-center">
              <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
              <div class="custom-control custom-control-primary custom-switch">
                <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                <label class="custom-control-label" for="systemNotification"></label>
              </div>
            </div>
            <a class="d-flex" href="javascript:void(0)">
              <div class="media d-flex align-items-start">
                <div class="media-left">
                  <div class="avatar bg-light-warning">
                    <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                  </div>
                </div>
                <div class="media-body">
                  <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small
                    class="notification-text"> BLR Server using high memory</small>
                </div>
              </div>
            </a>
          </li>
          <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all
              notifications</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown dropdown-user">
        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="user-nav d-sm-flex d-none">
            <span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span>
            <span class="user-status">Admin</span>
          </div>
          <span class="avatar">
            <img class="round" src="{{ auth()->user()->profile_photo_url }}" alt="avatar" height="40" width="40">
            <span class="avatar-status-online"></span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
          <a class="dropdown-item" href="{{route('profile.show')}}">
            <i class="mr-50" data-feather="user"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('page/account-settings')}}">
            <i class="mr-50" data-feather="settings"></i> Settings
          </a>
          <a class="dropdown-item" href="{{url('page/faq')}}">
            <i class="mr-50" data-feather="help-circle"></i> FAQ
          </a>
          <a class="dropdown-item" href="javascript:()"
            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <i class="mr-50" data-feather="power"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>

{{-- Search Start Here --}}
<ul class="main-search-list-defaultlist d-none">
  <li class="d-flex align-items-center">
    <a href="javascript:void(0);">
      <h6 class="section-label mt-75 mb-0">Files</h6>
    </a>
  </li>
  <li class="d-flex align-items-center">
    <a href="javascript:void(0);">
      <h6 class="section-label mt-75 mb-0">Users</h6>
    </a>
  </li>
</ul>

{{-- if main search not found! --}}
<ul class="main-search-list-defaultlist-other-list d-none">
  <li class="auto-suggestion justify-content-between">
    <a class="d-flex align-items-center justify-content-between w-100 py-50">
      <div class="d-flex justify-content-start">
        <span class="mr-75" data-feather="alert-circle"></span>
        <span>No results found.</span>
      </div>
    </a>
  </li>
</ul>
{{-- Search Ends --}}
<!-- END: Header-->