<template>
<!--    <div class="font-bold m-4">-->
<!--      Dashboard : {{ $auth.user.name }} , Email : {{ $auth.user.email }}-->
<!--      <div>-->
<!--        <button type="button" class=" bg-red-700 text-white rounded p-3" @click="logoutMethod">Logout</button>-->
<!--      </div>-->
<!--    </div>-->

<!--  <div>-->


    <!-- component -->
    <div class="h-screen flex items-center justify-center">

      <card class="flex flex-col rounded-lg shadow-lg w-1/2 p-10 bg-white">

        <!-- Logo -->
        <div class="flex justify-center">
          <img src="https://ssl.gstatic.com/subscriptions/management/home/logo_one_48dp_1147f17d6d2f67ab3a9ce3c55600631b.svg" class="w-20 h-20"/>
        </div>

        <!-- Title -->
        <p class="text-center text-gray-800 text-4xl mt-8">Welcome In Dashboard </p>

        <!-- Description -->
        <p class="text-center text-gray-700 font-light mt-5">
            Name : {{ $auth.user.name }} <br>
            Email : {{ $auth.user.email }}

        </p>

        <!-- Buttons -->
        <div class="flex flex-row-reverse mt-14 items-end gap-5">

          <button class="hover:bg-blue-700 bg-blue-600 text-gray-100 p-4 rounded" @click="logoutMethod">
            Logout
          </button>

          <button class="text-gray-600 hover:bg-gray-100 hover:text-gray-700 py-4 px-2">
            No thanks
          </button>

        </div>

      </card>

    </div>




  </div>





</template>

<script>
export default {
  name: "dashboard",
  middleware: 'auth',
  methods : {
    async logoutMethod() {
        this.$auth.logout();
        this.$router.push('/login');
    }
  },
}
</script>

<style scoped>

</style>
