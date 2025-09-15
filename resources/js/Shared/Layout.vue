<template>
  <Head>
    <title head-key="title">My App</title>
    <meta
      name="description"
      content="My App Description"
      head-key="description"
    />
  </Head>
  <section class="p-6 bg-gray-200">
    <header class="flex justify-between">
      <div class="flex items-center">
        <h1 class="font-bold text-lg">My App</h1>

        <p class="text-sm ml-4">Welcome Back, {{ username }}</p>
      </div>

      <Nav />
    </header>
  </section>

  <section class="container p-6">
    <div class="mx-w-3xl mx-auto">
      <!-- <iframe
      class="mb-6"
        width="100%"
        frameborder="no"
        scrolling="no"
        seamless
        src="https://player.simplecast.com/b3e958df-671c-486a-9eaf-b077df45a0e3?dark=false"
      ></iframe> -->
      <slot />
    </div>
  </section>
</template>

<script>
import Nav from "./Nav.vue";
import { Head } from "@inertiajs/vue3";
export default {
  components: {
    Nav,
    Head,
  },
  computed: {
    username() {
      return this.$page.props.auth.user.username;
    },
  },
};
</script>