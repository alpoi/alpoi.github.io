<script lang="ts">
  import "../app.css";
  import Navigation from "$lib/components/Navigation.svelte";

  let { children } = $props();
</script>

<div class="flex flex-col">
  <Navigation />
  {@render children()}
</div>
