<template>
  <Layout title="Users Page">
    <Head>
      <title>My App - Users</title>
    </Head>
    <h1 class="text-2xl font-bold">Users</h1>
    <div style="margin-top: 500px">
      <p>The current time is {{ time }}</p>
      <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
  </Layout>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
  components: {
    Link,
  },
  props: {
    time: String,
  },
};
// defineProps({
//   time: String,
// });
</script>
