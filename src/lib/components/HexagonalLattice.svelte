<script lang="ts">
  import HexagonalLatticeRow from "$lib/components/HexagonalLatticeRow.svelte";
  let { counts }: { counts: number[] } = $props();
</script>

<div class="mb-5 flex flex-col items-center drop-shadow-lg drop-shadow-black">
  {#each counts as count}
    <HexagonalLatticeRow {count} />
  {/each}
</div>
