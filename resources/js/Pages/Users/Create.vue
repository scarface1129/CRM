<template>
  <Head title="Create User" />
  <!-- <Layout> -->
  <h1 class="text-2xl font-bold">Create User</h1>

  <form method="POST" action="/users/create">
    @csrf
    <div class="mb-4">
      <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
      <input
        type="text"
        id="name"
        name="name"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required
      />
    </div>
    <div class="mb-4">
      <label for="email" class="block text-gray-700 font-bold mb-2"
        >Email</label
      >
      <input
        type="email"
        id="email"
        name="email"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required
      />
    </div>
    <div class="mb-4">
      <label for="password" class="block text-gray-700 font-bold mb-2"
        >Password</label
      >
      <input
        type="password"
        id="password"
        name="password"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required
      />
    </div>
    <div class="mb-4">
      <label
        for="password_confirmation"
        class="block text-gray-700 font-bold mb-2"
        >Confirm Password</label
      >
      <input
        type="password"
        id="password_confirmation"
        name="password_confirmation"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required
      />
    </div>
    <div class="flex items-center justify-between">
      <button
        type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
      >
        Create User
      </button>
    </div>
  </form>
</template>

<script>
export default {};
</script>
