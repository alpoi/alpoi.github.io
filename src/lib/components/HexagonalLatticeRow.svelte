<script lang="ts">
  import { repeat } from "$lib/util/repeat.svelte";
  import Hexagon from "$lib/components/Hexagon.svelte";

  let { count }: { count: number } = $props();
</script>

<div class="flex flex-row justify-center gap-0">
  {#each repeat(count)}
    <Hexagon />
  {/each}
</div>
