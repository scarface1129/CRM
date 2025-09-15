<template>
  <Head title="Users" />
  <h1 class="text-2xl font-bold">Users</h1>
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
  <div class="flex items-center space-x-2 mt-4">
    <Link
      v-for="(link, index) in users.links"
      :key="index"
      :href="link.url ?? ''"
      class="px-3 py-1 rounded border text-sm"
      :class="{
        'bg-gray-200 text-gray-500 pointer-events-none': !link.url, // disabled
        'bg-blue-500 text-white font-bold': link.active, // active
        'hover:bg-gray-100': link.url && !link.active, // hover
      }"
      preserve-scroll
    >
      <span v-html="link.label"></span>
    </Link>
  </div>
</template>

<script setup>
defineProps({
  users: Object,
});
</script>
