<script lang="ts">
  import ExternalLinkItem from "./ExternalLinkItem.svelte";

  let links = [
    {
      name: "GitHub",
      href: "https://github.com/alpoi",
      icon: "github",
    },
    {
      name: "LinkedIn",
      href: "https://linkedin.com/in/alpoi",
      icon: "linkedin",
    },
  ];
</script>

<div class="flex flex-col items-center justify-center gap-2">
  {#each links as link}
    <ExternalLinkItem {...link} />
  {/each}
</div>
