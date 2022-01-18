<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0"
      href=" https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html " target="_blank">
      <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Eanno Gaming Dash</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto h-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active"
          aria-controls="dashboardsExamples" role="button" aria-expanded="false">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>shop </title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(0.000000, 148.000000)">
                      <path class="color-background"
                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                        opacity="0.598981585"></path>
                      <path class="color-background"
                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Dashboards</span>
        </a>
        <div class="collapse" id="dashboardsExamples">
          <ul class="nav ms-4 ps-3">
            @role('super-admin|cashier')
              <li class="nav-item">
                <router-link :to="{name:'all_bookings'}" class="nav-link">
                  <span class="sidenav-mini-icon"> A </span>
                  <span class="sidenav-normal"> All Bookings </span>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link :to="{name:'stats'}" class="nav-link">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> Analytics </span>
                </router-link>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../../pages/dashboards/smart-home.html">
                  <span class="sidenav-mini-icon"> S </span>
                  <span class="sidenav-normal"> System </span>
                </a>
              </li>
              <li class="nav-item ">
                <router-link :to="{name:'pending'}" class="nav-link " href="#">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Pending Booking </span>
                </router-link>
              </li>
            @endrole
            <li class="nav-item ">
              <router-link :to="{name:'my_bookings'}" class="nav-link " href="#">
                <span class="sidenav-mini-icon"> B </span>
                <span class="sidenav-normal"> Bookings </span>
              </router-link>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Settings</h6>
      </li>
      @hasanyrole('super-admin|cashier')
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#userPages" class="nav-link " aria-controls="userPages" role="button"
            aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background"
                          d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                          opacity="0.6"></path>
                        <path class="color-background"
                          d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
          <div class="collapse " id="userPages">
            <ul class="nav ms-4 ps-3">
              @hasanyrole('cashier|super-admin')
                @hasrole('super-admin')
                  <li class="nav-item ">
                    <router-link :to="{name:'all_users'}" class="nav-link">
                      <span class="sidenav-mini-icon"> U </span>
                      <span class="sidenav-normal"> All Users</span>
                    </router-link>
                  </li>
                  <li class="nav-item ">
                    <router-link :to="{name:'all_admins'}" class="nav-link">
                      <span class="sidenav-mini-icon"> A </span>
                      <span class="sidenav-normal"> Admins </span>
                    </router-link>
                  </li>
                  <li class="nav-item ">
                    <router-link :to="{name:'all_cashiers'}" class="nav-link">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal"> Cashiers </span>
                    </router-link>
                  </li>
                @endhasrole
                <li class="nav-item ">
                  <router-link :to="{name:'all_gamers'}" class="nav-link">
                    <span class="sidenav-mini-icon"> G </span>
                    <span class="sidenav-normal"> Gamers </span>
                  </router-link>
                </li>
              @endhasanyrole
            </ul>
          </div>
        </li>
      @endhasanyrole
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#profilePages" class="nav-link " aria-controls="profilePages"
          role="button" aria-expanded="false">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>office</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="office" transform="translate(153.000000, 2.000000)">
                      <path class="color-background"
                        d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                        opacity="0.6"></path>
                      <path class="color-background"
                        d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
        <div class="collapse " id="profilePages">
          <ul class="nav ms-4 ps-3">
            <li class="nav-item ">
              <router-link :to="{name:'my_account'}" class="nav-link">
                <span class="sidenav-mini-icon"> A </span>
                <span class="sidenav-normal"> My Account </span>
              </router-link>
            </li>
            <li class="nav-item ">
              <router-link :to="{name:'edit_my_account'}" class="nav-link">
                <span class="sidenav-mini-icon"> e </span>
                <span class="sidenav-normal"> Edit My Account </span>
              </router-link>
            </li>
          </ul>
        </div>
      </li>
      @hasanyrole('super-admin|cashier')
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#settingsPages" class="nav-link " aria-controls="settingsPages"
            role="button" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background"
                          d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                          opacity="0.6"></path>
                        <path class="color-background"
                          d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Security</span>
          </a>
          <div class="collapse " id="settingsPages">
            <ul class="nav ms-4 ps-3">
              <li class="nav-item ">
                <router-link :to="{name:'roles'}" class="nav-link">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal"> Roles </span>
                </router-link>
              </li>
              <li class="nav-item ">
                <router-link :to="{name:'permissions'}" class="nav-link">
                  <span class="sidenav-mini-icon"> P </span>
                  <span class="sidenav-normal"> Permissions </span>
                </router-link>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link "
            aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(304.000000, 151.000000)">
                        <polygon class="color-background" opacity="0.596981957"
                          points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                        </polygon>
                        <path class="color-background"
                          d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                          opacity="0.596981957"></path>
                        <path class="color-background"
                          d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Invitations</span>
          </a>
          <div class="collapse " id="applicationsExamples">
            <ul class="nav ms-4 ps-3">
              <li class="nav-item ">
                <router-link :to="{name:'all_requests'}" class="nav-link">
                  <span class="sidenav-mini-icon"> R </span>
                  <span class="sidenav-normal"> All Requests </span>
                </router-link>
              </li>
            </ul>
          </div>
        </li>
      @endhasanyrole
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#stationPages" class="nav-link " aria-controls="stationPages"
          role="button" aria-expanded="false">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
            <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>basket</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="basket" transform="translate(153.000000, 450.000000)">
                      <path class="color-background"
                        d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z"
                        opacity="0.595377604"></path>
                      <path class="color-background"
                        d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Gaming Arena</span>
        </a>
        <div class="collapse " id="stationPages">
          <ul class="nav ms-4 ps-3">
            <li class="nav-item ">
              <router-link :to="{name:'settings_pricing'}" class="nav-link ">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal"> Pricing </span>
              </router-link>
            </li>
            <li class="nav-item ">
              <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal"> Games <b class="caret"></b></span>
              </a>
              <div class="collapse " id="productsExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <router-link :to="{name:'all_games'}" class="nav-link ">
                      <span class="sidenav-mini-icon text-xs"> I </span>
                      <span class="sidenav-normal"> Games </span>
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link :to="{name:'game_categories'}" class="nav-link">
                      <span class="sidenav-mini-icon text-xs"> E </span>
                      <span class="sidenav-normal"> Game Categories </span>
                    </router-link>
                  </li>
                </ul>
              </div>
            </li>
            @hasanyrole('super-admin|cashier')
              <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#stationsPage">
                  <span class="sidenav-mini-icon"> O </span>
                  <span class="sidenav-normal"> Station <b class="caret"></b></span>
                </a>
                <div class="collapse " id="stationsPage">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <router-link :to="{name:'all_stations'}" class="nav-link ">
                        <span class="sidenav-mini-icon text-xs"> O </span>
                        <span class="sidenav-normal"> All Stations </span>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link :to="{name:'all_screens'}" class="nav-link ">
                        <span class="sidenav-mini-icon text-xs"> O </span>
                        <span class="sidenav-normal"> All Screens </span>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link :to="{name:'all_consoles'}" class="nav-link ">
                        <span class="sidenav-mini-icon text-xs"> O </span>
                        <span class="sidenav-normal"> All Consoles </span>
                      </router-link>
                    </li>
                  </ul>
                </div>
              </li>
            @endhasanyrole
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer mx-3 mt-3 pt-3">
    <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
      <div class="full-background"
        style="background-image: url('{{ asset('assets/img/curved-images/white-curved.jpeg') }}')"></div>
      <div class="card-body text-start p-3 w-100">
        <div
          class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
          <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
        </div>
        <div class="docs-info">
          <a href="{{ url('/logout') }}" class="btn btn-white btn-sm w-100 mb-0">Logout</a>
        </div>
      </div>
    </div>
  </div>
</aside>
