<script lang="ts">
  import Icon from "$lib/components/Icon.svelte";
  let { name, href, icon }: { name: string; href: string; icon: string } =
    $props();
</script>

<a
  class="flex w-50 flex-row rounded-full bg-[#0f2c2e] px-4 py-3 text-[#ecddba]"
  {href}
  aria-label={name}
  target="_blank"
  rel="noopener noreferrer"
>
  <span class="flex-none"><Icon class="h-7 w-7" name={icon} /></span>
  <span class="flex flex-1 items-center justify-center">{name}</span>
</a>
