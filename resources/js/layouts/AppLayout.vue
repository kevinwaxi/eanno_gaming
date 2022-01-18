<template>
    <div>
        <navbar />
        <sidebar-menu />
        <main class="content">
            <navbar-not />

            <!-- content here -->
            <transition
                name="fade"
                mode="out-in"
                @beforeLeave="beforeLeave"
                @enter="enter"
                @afterEnter="afterEnter"
            >
                <router-view></router-view>
            </transition>
            <!-- begin :: Footer -->
            <footer />
            <!-- end ::Footer -->
        </main>
    </div>
</template>
<script>
import Navbar from "@components/Navbar.vue";
import Footer from "@components/Footer.vue";
import SidebarMenu from "@components/SidebarMenu.vue";
import NavbarNot from "@/components/NavbarNot.vue";
export default {
    components: { SidebarMenu, Footer, Navbar, NavbarNot },
    props: ["user"],
    data() {
        return {
            prevHeight: 0,
        };
    },
    methods: {
        beforeLeave(element) {
            this.prevHeight = getComputedStyle(element).height;
        },
        enter(element) {
            const { height } = getComputedStyle(element);

            element.style.height = this.prevHeight;

            setTimeout(() => {
                element.style.height = height;
            });
        },
        afterEnter(element) {
            element.style.height = "auto";
        },
    },
};
</script>
<style>
.fade-enter-active,
.fade-leave-active {
    transition-duration: 0.3s;
    transition-property: height, opacity;
    transition-timing-function: ease;
    overflow: hidden;
}

.fade-enter,
.fade-leave-active {
    opacity: 0;
}
</style>
