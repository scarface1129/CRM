<template>
  <nav class="">
    <ul class="flex space-x-6">
      <li>
        <!-- <Link href="/" class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.url === '/'}"> Home </Link> -->
        <NavLink href="/" :active="$page.component === 'Home'"> Home </NavLink>
        <!-- <Link href="/" class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.component === 'Home'}"> Home </Link> -->
      </li>
      <li>
        <!-- <Link href="/users?foo=foodie" class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.url.startsWith('/users')}">Users</Link> -->
        <!-- <Link href="/users?foo=foodie" class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.component === 'Users'}">Users</Link> -->
        <NavLink href="/users" text="Users" :active="$page.component === 'Users'" />
    
    </li>
      <li>
        <!-- <Link href="/settings?hobby=basketball" class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.component === 'Settings'}"
          >Settings</Link
        > -->
        <NavLink href="/settings" text="Settings" :active="$page.component === 'Settings'" />
      </li>
      <!-- <li>
        <Link
          href="/logout"
          method="post"
          :data="{ data: 'foodie' }"
          class="text-blue-500 hover:underline"
          >Logout</Link
        >
      </li> -->
    </ul>
  </nav>
</template>

<script>
// import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";
export default {
  components: {
    // Link,
    NavLink,
  },
};
</script>
