<template>
  <div class="flex items-center space-x-2 mt-4">
    <Link
      v-for="(link, index) in links"
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

<script>
export default {
    props: {
        links: Array,
    }
}
</script>