<template>
  <div>
    <div class=" p-4 bg-gray-600 text-white">
      <NuxtLink to="/" class="p-2 bg-red-600 text-white rounded">Home</NuxtLink>

      <NuxtLink to="/login" class="p-2 bg-red-600 text-white rounded" v-if="$auth.loggedIn == false">Login</NuxtLink>
      <NuxtLink to="/register" class="p-2 bg-red-600 text-white rounded" v-if="$auth.loggedIn == false">Register</NuxtLink>

      <NuxtLink to="/dashboard" class="p-2 bg-red-600 text-white rounded" v-if="$auth.loggedIn == true">Dashboard</NuxtLink>

      <Nuxt />
    </div>
  </div>
</template>
<script>
  export default {
      auth:false
  }
</script>
