<template>
    <div>
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">General information</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <div>
                                    <label for="first_name">Name</label>
                                    <input
                                        class="form-control"
                                        id="first_name"
                                        type="text"
                                        placeholder="Enter your full name"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div>
                                    <label for="last_name">@username</label>
                                    <input
                                        class="form-control"
                                        id="last_name"
                                        type="text"
                                        placeholder="Also your last name"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        class="form-control"
                                        id="email"
                                        type="email"
                                        placeholder="name@company.com"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input
                                        class="form-control"
                                        id="phone"
                                        type="number"
                                        placeholder="+12-345 678 910"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <h2 class="h5 my-4">Social Media</h2>
                        <div class="row">
                            <div class="col-sm-3 mb-3">
                                <div class="form-group">
                                    <label for="address">Twitter Handle</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        placeholder="@johndoe"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="col-sm-9 mb-3">
                                <div class="form-group">
                                    <label for="number">Facebook Link</label>
                                    <input
                                        class="form-control"
                                        type="link"
                                        placeholder="http://facebook/me/doe"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button
                                class="btn btn-gray-800 mt-2 animate-up-2"
                                type="submit"
                            >
                                Save all
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card card-body border-0 shadow mb-4 mb-xl-0">
                    <h2 class="h5 mb-4">Alerts &amp; Notifications</h2>
                    <ul class="list-group list-group-flush">
                        <li
                            class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom"
                        >
                            <div>
                                <h3 class="h6 mb-1">Company News</h3>
                                <p class="small pe-4">
                                    Get Rocket news, announcements, and product
                                    updates
                                </p>
                            </div>
                            <div>
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="user-notification-1"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="user-notification-1"
                                    ></label>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom"
                        >
                            <div>
                                <h3 class="h6 mb-1">Account Activity</h3>
                                <p class="small pe-4">
                                    Get important notifications about you or
                                    activity you've missed
                                </p>
                            </div>
                            <div>
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="user-notification-2"
                                        checked="checked"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="user-notification-2"
                                    ></label>
                                </div>
                            </div>
                        </li>
                        <li
                            class="list-group-item d-flex align-items-center justify-content-between px-0"
                        >
                            <div>
                                <h3 class="h6 mb-1">Meetups Near You</h3>
                                <p class="small pe-4">
                                    Get an email when a Dribbble Meetup is
                                    posted close to my location
                                </p>
                            </div>
                            <div>
                                <div class="form-check form-switch">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="user-notification-3"
                                        checked="checked"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="user-notification-3"
                                    ></label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card shadow border-0 text-center p-0">
                            <div
                                class="profile-cover rounded-top"
                                data-background="/assets/img/profile-cover.jpg"
                                style="
                                    background: url('/assets/img/profile-cover.jpg');
                                "
                            ></div>
                            <div class="card-body pb-5">
                                <img
                                    src="/assets/img/team/profile-picture-1.jpg"
                                    class="avatar-xl rounded-circle mx-auto mt-n7 mb-4"
                                    alt="Neil Portrait"
                                />
                                <h4 class="h3">Neil Sims</h4>
                                <h5 class="fw-normal">
                                    Senior Software Engineer
                                </h5>
                                <p class="text-gray mb-4">New York, USA</p>
                                <a
                                    class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2"
                                    href="#"
                                >
                                    <svg
                                        class="icon icon-xs me-1"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                                        />
                                    </svg>
                                    Connect
                                </a>
                                <a class="btn btn-sm btn-secondary" href="#"
                                    >Send Message</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-body border-0 shadow mb-4">
                            <h2 class="h5 mb-4">Select profile photo</h2>
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <img
                                        class="rounded avatar-xl"
                                        src="/assets/img/team/profile-picture-3.jpg"
                                        alt="change avatar"
                                    />
                                </div>
                                <div class="file-field">
                                    <div
                                        class="d-flex justify-content-xl-center ms-xl-3"
                                    >
                                        <div class="d-flex">
                                            <svg
                                                class="icon text-gray-500 me-2"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                            <input type="file" />
                                            <div class="d-md-block text-left">
                                                <div
                                                    class="fw-normal text-dark mb-1"
                                                >
                                                    Choose Image
                                                </div>
                                                <div class="text-gray small">
                                                    JPG, GIF or PNG. Max size of
                                                    800K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-body border-0 shadow">
                            <h2 class="h5 mb-4">Select cover photo</h2>
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <img
                                        class="rounded avatar-xl"
                                        src="/assets/img/profile-cover.jpg"
                                        alt="change cover"
                                    />
                                </div>
                                <div class="file-field">
                                    <div
                                        class="d-flex justify-content-xl-center ms-xl-3"
                                    >
                                        <div class="d-flex">
                                            <svg
                                                class="icon text-gray-500 me-2"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                            <input type="file" />
                                            <div class="d-md-block text-left">
                                                <div
                                                    class="fw-normal text-dark mb-1"
                                                >
                                                    Choose Image
                                                </div>
                                                <div class="text-gray small">
                                                    JPG, GIF or PNG. Max size of
                                                    800K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    setup() {},
};
</script>
