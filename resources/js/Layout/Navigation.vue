<template>
    <nav class="navbar navbar-expand-md navbar-sticky sticky-top text-white">
        <div class="container">
            <button
                class="navbar-toggler bg-outline-transparent p-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><Link href="/">Home</Link></li>
                    <li class="nav-item">
                        <Link href="/about-me">About Me</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/portfolio">Portfolio</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/contact">Contact</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
