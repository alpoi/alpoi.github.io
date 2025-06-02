<script lang="ts">
  import HexagonalLattice from "$lib/components/HexagonalLattice.svelte";
  import ExternalLinkMenu from "$lib/components/ExternalLinkMenu.svelte";
</script>

<div class="flex flex-col items-center py-10">
  <HexagonalLattice counts={[1, 2, 3, 4]} />
  <h1 class="pt-10 text-5xl font-extrabold text-[#ecddba]">Angus Pointer</h1>
  <h2 class="pb-5 text-3xl font-bold text-[#ecddba]">Software Engineer</h2>
  <ExternalLinkMenu />
</div>

<svelte:head>
  <title>Portfolio • Angus Pointer</title>
</svelte:head>
