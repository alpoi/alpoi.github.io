<script lang="ts">
  import { page } from "$app/state";
  import bee from "$lib/assets/bumblebee.gif";
</script>

<div class="flex flex-col items-center py-10 text-[#ecddba]">
  <h1 class="text-6xl font-extrabold">
    ERROR {page.status}
  </h1>
  <p class="mt-4 text-4xl font-bold">
    {page.error?.message || ""}
  </p>
  <a href="/">
    <img src={bee} alt="Bee" />
  </a>
</div>

<svelte:head>
  <title>{page.status} • Portfolio • Angus Pointer</title>
</svelte:head>

<style>
  img {
    filter: drop-shadow(0 0 2rem rgba(0, 0, 0, 0.5));
  }
</style>
