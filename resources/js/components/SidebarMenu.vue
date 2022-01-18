<template>
  <div>
    <nav
      id="sidebarMenu"
      class="
        sidebar
        d-lg-block
        bg-gray-800
        text-white
        collapse
        simplebar-scrollable-y
      "
      data-simplebar="init"
    >
      <div class="simplebar-wrapper" style="margin: 0px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              class="simplebar-content-wrapper"
              style="height: auto; overflow: hidden scroll"
            >
              <div class="simplebar-content" style="padding: 0px">
                <div class="sidebar-inner px-4 pt-3">
                  <div
                    class="
                      user-card
                      d-flex d-md-none
                      justify-content-between justify-content-md-center
                      pb-4
                    "
                  >
                    <div class="d-flex align-items-center">
                      <div class="avatar-lg me-4">
                        <img
                          src="/assets/img/team/profile-picture-3.jpg"
                          class="card-img-top rounded-circle border-white"
                          alt="Bonnie Green"
                        />
                      </div>
                      <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2>
                        <a
                          href="/pages/examples/sign-in.html"
                          class="
                            btn btn-secondary btn-sm
                            d-inline-flex
                            align-items-center
                          "
                          ><svg
                            class="icon icon-xxs me-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                            ></path>
                          </svg>
                          Sign Out</a
                        >
                      </div>
                    </div>
                    <div class="collapse-close d-md-none">
                      <a
                        href="#sidebarMenu"
                        data-bs-toggle="collapse"
                        data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu"
                        aria-expanded="true"
                        aria-label="Toggle navigation"
                        ><svg
                          class="icon icon-xs"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path></svg
                      ></a>
                    </div>
                  </div>
                  <ul class="nav flex-column pt-3 pt-md-0">
                    <li class="nav-item">
                      <a
                        href="/index.html"
                        class="nav-link d-flex align-items-center"
                        ><span class="sidebar-icon"
                          ><img
                            src="/assets/img/brand/light.svg"
                            alt="Volt Logo"
                            width="20"
                            height="20"
                          /> </span
                        ><span class="mt-1 sidebar-text">Volt Overview</span></a
                      >
                    </li>
                    <!-- dashboards -->
                    <li class="nav-item">
                      <span
                        class="
                          nav-link
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-dashboard"
                      >
                        <span>
                          <span class="sidebar-icon">
                            <svg
                              class="icon icon-xs me-2"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"
                              ></path>
                              <path
                                d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                              ></path>
                            </svg>
                          </span>
                          <span class="sidebar-text">Dashboard</span>
                        </span>
                        <span class="link-arrow">
                          <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </span>
                      <div
                        class="multi-level collapse"
                        role="list"
                        id="submenu-dashboard"
                        aria-expanded="false"
                      >
                        <ul class="flex-column nav">
                          <router-link :to="{ name: 'Sales' }" class="nav-item">
                            <a href="#" class="nav-link">
                              <span class="sidebar-text-contracted">S</span>
                              <span class="sidebar-text">Sales</span>
                            </a>
                          </router-link>
                          <router-link
                            :to="{ name: 'All Bookings' }"
                            class="nav-item"
                          >
                            <a
                              href="/pages/dashboard/traffic-sources.html"
                              class="nav-link"
                              ><span class="sidebar-text-contracted">T</span>
                              <span class="sidebar-text">Bookings</span></a
                            >
                          </router-link>
                          <router-link
                            :to="{ name: 'Reports' }"
                            class="nav-item"
                          >
                            <a
                              href="/pages/dashboard/app-analysis.html"
                              class="nav-link"
                              ><span class="sidebar-text-contracted">P</span>
                              <span class="sidebar-text"> Reports </span>
                            </a>
                          </router-link>
                        </ul>
                      </div>
                    </li>
                    <!-- Users -->
                    <li class="nav-item">
                      <span
                        class="
                          nav-link
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-users"
                      >
                        <span>
                          <span class="sidebar-icon">
                            <svg
                              class="icon icon-xs me-2"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                              ></path>
                            </svg>
                          </span>
                          <span class="sidebar-text">Users</span>
                        </span>
                        <span class="link-arrow">
                          <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </span>
                      <div
                        class="multi-level collapse"
                        role="list"
                        id="submenu-users"
                        aria-expanded="false"
                      >
                        <ul class="flex-column nav">
                          <router-link
                            :to="{ name: 'Administrators' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link">
                              <span class="sidebar-text-contracted">A</span>
                              <span class="sidebar-text">Admins</span>
                            </a>
                          </router-link>
                          <router-link
                            :to="{ name: 'Cashiers' }"
                            class="nav-item"
                          >
                            <a
                              href="/pages/dashboard/traffic-sources.html"
                              class="nav-link"
                              ><span class="sidebar-text-contracted">C</span>
                              <span class="sidebar-text"> Cashiers </span></a
                            >
                          </router-link>
                          <router-link
                            :to="{ name: 'Gamers' }"
                            class="nav-item"
                          >
                            <a
                              href="/pages/dashboard/app-analysis.html"
                              class="nav-link"
                              ><span class="sidebar-text-contracted">G</span>
                              <span class="sidebar-text">
                                Gamers / Customers
                              </span>
                            </a>
                          </router-link>
                        </ul>
                      </div>
                    </li>
                    <!-- Security -->
                    <li class="nav-item">
                      <span
                        class="
                          nav-link
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-security"
                      >
                        <span>
                          <span class="sidebar-icon">
                            <svg
                              class="icon icon-xs me-2"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                              ></path>
                            </svg>
                          </span>
                          <span class="sidebar-text"> Security </span>
                        </span>
                        <span class="link-arrow">
                          <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </span>
                      <div
                        class="multi-level collapse"
                        role="list"
                        id="submenu-security"
                        aria-expanded="false"
                      >
                        <ul class="flex-column nav">
                          <router-link
                            :to="{ name: 'All Roles' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link">
                              <span class="sidebar-text-contracted">A</span>
                              <span class="sidebar-text"> Role </span>
                            </a>
                          </router-link>
                          <router-link
                            :to="{ name: 'All Permissions' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">C</span>
                              <span class="sidebar-text"> Permissions </span></a
                            >
                          </router-link>
                        </ul>
                      </div>
                    </li>
                    <!-- begin::seperator -->
                    <li
                      role="separator"
                      class="dropdown-divider mt-4 mb-3 border-gray-700"
                    ></li>
                    <!-- end::seperator -->
                    <!-- inventory -->
                    <li class="nav-item">
                      <span
                        class="
                          nav-link
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-inventory"
                      >
                        <span>
                          <span class="sidebar-icon">
                            <svg
                              class="icon icon-xs me-2"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"
                              ></path>
                            </svg>
                          </span>
                          <span class="sidebar-text"> Inventory </span>
                        </span>
                        <span class="link-arrow">
                          <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </span>
                      <div
                        class="multi-level collapse"
                        role="list"
                        id="submenu-inventory"
                        aria-expanded="false"
                      >
                        <ul class="flex-column nav">
                          <router-link
                            :to="{ name: 'All Consoles' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link">
                              <span class="sidebar-text-contracted">C</span>
                              <span class="sidebar-text"> Consoles </span>
                            </a>
                          </router-link>
                          <router-link
                            :to="{ name: 'All Screens' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">S</span>
                              <span class="sidebar-text"> Screens </span></a
                            >
                          </router-link>
                          <router-link
                            :to="{ name: 'All Games' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">G</span>
                              <span class="sidebar-text"> Games </span></a
                            >
                          </router-link>
                          <router-link
                            :to="{ name: 'All Stations' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">S</span>
                              <span class="sidebar-text"> Station </span></a
                            >
                          </router-link>
                        </ul>
                      </div>
                    </li>
                    <!-- misc -->
                    <li class="nav-item">
                      <span
                        class="
                          nav-link
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-misc"
                      >
                        <span>
                          <span class="sidebar-icon">
                            <svg
                              class="icon icon-xs me-2"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"
                              ></path>
                            </svg>
                          </span>
                          <span class="sidebar-text"> Miscellaneous </span>
                        </span>
                        <span class="link-arrow">
                          <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </span>
                      <div
                        class="multi-level collapse"
                        role="list"
                        id="submenu-misc"
                        aria-expanded="false"
                      >
                        <ul class="flex-column nav">
                          <router-link
                            :to="{ name: 'All Categories' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link">
                              <span class="sidebar-text-contracted">C</span>
                              <span class="sidebar-text">
                                Game Categories
                              </span>
                            </a>
                          </router-link>
                          <router-link
                            :to="{ name: 'All Brands' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">B</span>
                              <span class="sidebar-text"> TV Brands </span></a
                            >
                          </router-link>
                          <router-link
                            :to="{ name: 'All Types' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">T</span>
                              <span class="sidebar-text"> Types </span></a
                            >
                          </router-link>
                        </ul>
                      </div>
                    </li>
                    <!-- Begin::separator -->
                    <li
                      role="separator"
                      class="dropdown-divider mt-4 mb-3 border-gray-700"
                    ></li>
                    <!-- end::seperator -->
                    <router-link
                      :to="{ name: 'All Invitations' }"
                      class="nav-item"
                    >
                      <a href="#" class="nav-link">
                        <span class="sidebar-icon">
                          <svg
                            class="icon icon-xs me-2"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                            ></path>
                          </svg>
                        </span>
                        <span class="sidebar-text"> Invitations </span>
                      </a>
                    </router-link>
                    <!-- profile with settings-->
                    <li class="nav-item">
                      <span
                        class="
                          nav-link
                          d-flex
                          justify-content-between
                          align-items-center
                        "
                        data-bs-toggle="collapse"
                        data-bs-target="#submenu-profile"
                      >
                        <span>
                          <span class="sidebar-icon">
                            <svg
                              class="icon icon-xs me-2"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                              ></path>
                            </svg>
                          </span>
                          <span class="sidebar-text"> Profile </span>
                        </span>
                        <span class="link-arrow">
                          <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </span>
                      <div
                        class="multi-level collapse"
                        role="list"
                        id="submenu-profile"
                        aria-expanded="false"
                      >
                        <ul class="flex-column nav">
                          <router-link
                            :to="{ name: 'View Profile' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link">
                              <span class="sidebar-text-contracted">O</span>
                              <span class="sidebar-text"> Overview </span>
                            </a>
                          </router-link>
                          <router-link
                            :to="{ name: 'Profile Settings' }"
                            class="nav-item"
                          >
                            <a href="#" class="nav-link"
                              ><span class="sidebar-text-contracted">S</span>
                              <span class="sidebar-text"> Settings </span></a
                            >
                          </router-link>
                        </ul>
                      </div>
                    </li>
                    <!-- Bookings -->
                    <router-link
                      :to="{ name: 'All Bookings' }"
                      class="nav-item"
                    >
                      <a href="/pages/map.html" class="nav-link">
                        <span class="sidebar-icon">
                          <svg
                            class="icon icon-xs me-2"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                        <span class="sidebar-text"> Bookings </span>
                      </a>
                    </router-link>
                    <router-link
                      :to="{ name: 'Previous Bookings' }"
                      class="nav-item"
                    >
                      <a href="/pages/map.html" class="nav-link">
                        <span class="sidebar-icon">
                          <svg
                            class="icon icon-xs me-2"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                        <span class="sidebar-text"> History Bookings </span>
                      </a>
                    </router-link>
                    <li
                      role="separator"
                      class="dropdown-divider mt-4 mb-3 border-gray-700"
                    ></li>
                    <li class="nav-item">
                      <a
                        href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/"
                        target="_blank"
                        class="nav-link d-flex align-items-center"
                        ><span class="sidebar-icon"
                          ><svg
                            class="icon icon-xs me-2"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                        <span class="sidebar-text">
                          Documentation
                          <span
                            class="
                              badge
                              bg-secondary
                              ms-1
                              text-gray-800
                              badge-sm
                            "
                          >
                            v1.4
                          </span>
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard"
                        target="_blank"
                        class="nav-link d-flex align-items-center"
                      >
                        <span class="sidebar-icon">
                          <svg
                            class="icon icon-xs me-2"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                            ></path>
                          </svg>
                        </span>
                        <span class="sidebar-text"> Buy now </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="https://themesberg.com"
                        target="_blank"
                        class="nav-link d-flex align-items-center"
                      >
                        <span class="sidebar-icon">
                          <img
                            src="/assets/img/themesberg.svg"
                            alt="Themesberg Logo"
                            width="28"
                            height="20"
                          />
                        </span>
                        <span class="sidebar-text"> Themesberg</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: 260px; height: 992px"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar"
          style="width: 0px; display: none"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-vertical"
        style="visibility: visible"
      >
        <div
          class="simplebar-scrollbar"
          style="
            height: 114px;
            transform: translate3d(0px, 0px, 0px);
            display: block;
          "
        ></div>
      </div>
    </nav>
  </div>
</template>
