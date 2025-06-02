<script lang="ts">
  import NavigationItem from "$lib/components/NavigationItem.svelte";

  const items = [
    { name: "Home", href: "/" },
    { name: "Projects", href: "/projects" },
    { name: "Tech", href: "/tech" },
    { name: "Resume", href: "/resume.pdf", newTab: true },
  ];

  let currentPath = $state();
  $effect(() => {
    currentPath = window.location.pathname;
  });
</script>

<nav class="mb-5 flex flex-row justify-center bg-[#0f2c2e] px-8">
  <div class="flex flex-row">
    {#each items as item}
      <NavigationItem
        {...item}
        active={currentPath === item.href}
        onclick={() => (currentPath = item.href)}
      />
    {/each}
  </div>
</nav>
