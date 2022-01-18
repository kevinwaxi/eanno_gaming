import Router from "vue-router";
import Vue from "vue";

Vue.use(Router);

const routes = [
    {
        path: "/error",
        component: () => import("@pages/errors/index.vue"),
        children: [
            {
                path: "notfound",
                name: "NotFound",
                component: () => import("@pages/errors/not_found.vue"),
            },
            {
                path: "unauthorized",
                name: "NotAuthorized",
                component: () => import("@pages/errors/unauthorized.vue"),
            },
            {
                path: "unauthenticated",
                name: "NotAuthenticated",
                component: () => import("@pages/errors/unauthenticated.vue"),
            },
        ],
    },
    {
        path: "/admin",
        component: () => import("@pages/admin/index.vue"),
        children: [
            {
                path: "dashboards",
                component: () => import("@pages/admin/dashboards/index.vue"),
                children: [
                    {
                        path: "all_bookings",
                        name: "All Bookings",
                        component: () =>
                            import("@pages/admin/dashboards/allBookings.vue"),
                    },
                    {
                        path: "reports",
                        name: "Reports",
                        component: () =>
                            import("@pages/admin/dashboards/reports.vue"),
                    },
                    {
                        path: "sales",
                        name: "Sales",
                        component: () =>
                            import("@pages/admin/dashboards/sales.vue"),
                    },
                ],
            },
            {
                path: "users",
                component: () => import("@pages/admin/users/index.vue"),
                children: [
                    {
                        path: "admins",
                        name: "Administrators",
                        component: () =>
                            import("@pages/admin/users/admins.vue"),
                    },
                    {
                        path: "cashiers",
                        name: "Cashiers",
                        component: () =>
                            import("@pages/admin/users/cashiers.vue"),
                    },
                    {
                        path: "gamers",
                        name: "Gamers",
                        component: () =>
                            import("@pages/admin/users/gamers.vue"),
                    },
                    {
                        path: "profile",
                        name: "User Profile",
                        component: () =>
                            import("@pages/admin/users/profile.vue"),
                    },
                    {
                        path: "settings",
                        name: "User Settings",
                        component: () =>
                            import("@pages/admin/users/settings.vue"),
                    },
                ],
            },
            {
                path: "settings",
                component: () =>
                    import("@pages/admin/settings/security/index.vue"),
                children: [
                    {
                        path: "security",
                        component: () =>
                            import("@pages/admin/settings/security/index.vue"),
                        children: [
                            {
                                path: "roles",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/security/roles/index.vue"
                                    ),
                                children: [
                                    {
                                        path: "all",
                                        name: "All Roles",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/security/roles/all.vue"
                                            ),
                                    },
                                    {
                                        path: "edit",
                                        name: "Edit Role",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/security/roles/edit.vue"
                                            ),
                                    },
                                    {
                                        path: "show",
                                        name: "Show Role",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/security/roles/show.vue"
                                            ),
                                    },
                                ],
                            },
                            {
                                path: "permissions",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/security/permissions/index.vue"
                                    ),
                                children: [
                                    {
                                        path: "all",
                                        name: "All Permissions",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/security/permissions/all.vue"
                                            ),
                                    },
                                    {
                                        path: "edit",
                                        name: "Edit Permission",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/security/permissions/edit.vue"
                                            ),
                                    },
                                    {
                                        path: "show",
                                        name: "Show Permission",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/security/permissions/show.vue"
                                            ),
                                    },
                                ],
                            },
                        ],
                    },
                    {
                        path: "inventories",
                        component: () =>
                            import("@pages/admin/settings/inventory/index.vue"),
                        children: [
                            {
                                // Consoles
                                path: "consoles",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/inventory/consoles/index.vue"
                                    ),
                                children: [
                                    {
                                        path: "all",
                                        name: "All Consoles",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/consoles/all.vue"
                                            ),
                                    },
                                    {
                                        path: "show",
                                        name: "Show Consoles",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/consoles/show.vue"
                                            ),
                                    },
                                    {
                                        path: "edit",
                                        name: "Edit Consoles",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/consoles/edit.vue"
                                            ),
                                    },
                                ],
                            },
                            {
                                // screen
                                path: "screens",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/inventory/screens/index.vue"
                                    ),
                                children: [
                                    {
                                        path: "all",
                                        name: "All Screens",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/screens/all.vue"
                                            ),
                                    },
                                    {
                                        path: "show",
                                        name: "Show Screens",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/screens/show.vue"
                                            ),
                                    },
                                    {
                                        path: "edit",
                                        name: "Edit Screens",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/screens/edit.vue"
                                            ),
                                    },
                                ],
                            },
                            {
                                // Games
                                path: "games",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/inventory/games/index.vue"
                                    ),
                                children: [
                                    {
                                        path: "all",
                                        name: "All Games",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/games/all.vue"
                                            ),
                                    },
                                    {
                                        path: "show",
                                        name: "Show Games",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/games/show.vue"
                                            ),
                                    },
                                    {
                                        path: "edit",
                                        name: "Edit Games",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/games/edit.vue"
                                            ),
                                    },
                                ],
                            },
                            {
                                // stations
                                path: "stations",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/inventory/stations/index.vue"
                                    ),
                                children: [
                                    {
                                        path: "all",
                                        name: "All Stations",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/stations/all.vue"
                                            ),
                                    },
                                    {
                                        path: "show",
                                        name: "Show Stations",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/stations/show.vue"
                                            ),
                                    },
                                    {
                                        path: "edit",
                                        name: "Edit Stations",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/stations/edit.vue"
                                            ),
                                    },
                                ],
                            },
                            {
                                path: "misc",
                                component: () =>
                                    import(
                                        "@pages/admin/settings/inventory/misc/index.vue"
                                    ),
                                children: [
                                    // category
                                    {
                                        path: "categories",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/misc/category/index.vue"
                                            ),
                                        children: [
                                            {
                                                path: "all",
                                                name: "All Categories",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/category/all.vue"
                                                    ),
                                            },
                                            {
                                                path: "show",
                                                name: "Show Categories",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/category/show.vue"
                                                    ),
                                            },
                                            {
                                                path: "edit",
                                                name: "Edit Categories",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/category/edit.vue"
                                                    ),
                                            },
                                        ],
                                    },
                                    // brand
                                    {
                                        path: "brands",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/misc/brand/index.vue"
                                            ),
                                        children: [
                                            {
                                                path: "all",
                                                name: "All Brands",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/brand/all.vue"
                                                    ),
                                            },
                                            {
                                                path: "show",
                                                name: "Show Brand",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/brand/show.vue"
                                                    ),
                                            },
                                            {
                                                path: "edit",
                                                name: "Edit Brand",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/brand/edit.vue"
                                                    ),
                                            },
                                        ],
                                    },
                                    // type
                                    {
                                        path: "types",
                                        component: () =>
                                            import(
                                                "@pages/admin/settings/inventory/misc/type/index.vue"
                                            ),
                                        children: [
                                            {
                                                path: "all",
                                                name: "All Types",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/type/all.vue"
                                                    ),
                                            },
                                            {
                                                path: "show",
                                                name: "Show Types",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/type/show.vue"
                                                    ),
                                            },
                                            {
                                                path: "edit",
                                                name: "Edit Types",
                                                component: () =>
                                                    import(
                                                        "@pages/admin/settings/inventory/misc/type/edit.vue"
                                                    ),
                                            },
                                        ],
                                    },
                                ],
                            },
                        ],
                    },
                ],
            },
            {
                path: "invitations",
                component: () => import("@pages/admin/invitations/index.vue"),
                children: [
                    {
                        path: "pending",
                        name: "Pending Invitations",
                        component: () =>
                            import("@pages/admin/invitations/pending.vue"),
                    },
                    {
                        path: "all",
                        name: "All Invitations",
                        component: () =>
                            import("@pages/admin/invitations/all.vue"),
                    },
                    {
                        path: "Approved",
                        name: "Approved Invitations",
                        component: () =>
                            import("@pages/admin/invitations/approved.vue"),
                    },
                    {
                        path: "accepted",
                        name: "Accepted Invitations",
                        component: () =>
                            import("@pages/admin/invitations/accepted.vue"),
                    },
                ],
            },
        ],
    },
    {
        path: "/user",
        component: () => import("@pages/user/index.vue"),
        children: [
            {
                path: "profile",
                component: () => import("@pages/user/profile/index.vue"),
                children: [
                    {
                        path: "view",
                        name: "View Profile",
                        component: () => import("@pages/user/profile/view.vue"),
                    },
                    {
                        path: "settings",
                        name: "Profile Settings",
                        component: () =>
                            import("@pages/user/profile/settings.vue"),
                    },
                ],
            },
            {
                path: "bookings",
                component: () => import("@pages/user/bookings/index.vue"),
                children: [
                    {
                        path: "all",
                        name: "All Bookings",
                        component: () => import("@pages/user/bookings/all.vue"),
                    },
                    {
                        path: "previous",
                        name: "Previous Bookings",
                        component: () =>
                            import("@pages/user/bookings/previous.vue"),
                    },
                ],
            },
        ],
    },
];

export default new Router({
    mode: "history",
    history: true,
    base: "/",
    linkExactActiveClass: "active",
    routes,
});
