<template>
  <Head title="Users" />
  <div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Users</h1>
    <input v-model="search" type="text" placeholder="Search..." class="border px-2 rounded-lg"/>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full divide-y-2 divide-gray-200">
      <thead class="ltr:text-left rtl:text-right">
        <tr class="*:font-medium *:text-gray-900">
          <th class="px-3 py-2 whitespace-nowrap">ID</th>
          <th class="px-3 py-2 whitespace-nowrap">Username</th>
          <th class="px-3 py-2 whitespace-nowrap">Emain</th>
          <th class="px-3 py-2 whitespace-nowrap">Created At</th>
          <th class="px-3 py-2 whitespace-nowrap"></th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200 *:even:bg-gray-50">
        <tr
          v-for="user in users.data"
          :key="user.id"
          class="*:text-gray-900 *:first:font-medium"
        >
          <td class="px-3 py-2 whitespace-nowrap">{{ user.id }}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{ user.name }}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{ user.email }}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{ user.created_at }}</td>
          <Link
            :href="`/users/${user.id}/edit`"
            class="px-3 py-2 whitespace-nowrap"
            >Edit</Link
          >
        </tr>
      </tbody>
    </table>
  </div>
  <Pagination :links="users.links" />
</template>

<script setup>
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';
let props = defineProps({
  users: Object,
  filters: Object,
});

let search = ref(props.filters.search || '');
watch(search, value => {
  router.get('/users', { search: value }, { preserveState: true, replace: true });
})
</script>
