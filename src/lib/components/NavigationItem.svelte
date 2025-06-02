<script lang="ts">
  let {
    name,
    href,
    newTab = false,
    active = false,
    onclick,
  }: {
    name: string;
    href: string;
    newTab?: boolean;
    active?: boolean;
    onclick: () => void;
  } = $props();
</script>

<a
  class="
    my-4 px-4 py-4
    text-[#ecddba]
  "
  class:active
  {href}
  aria-label={name}
  {...!newTab && { onclick }}
  {...newTab && { target: "_blank", rel: "noopener noreferrer" }}
>
  {name}
</a>

<style>
  .active {
    position: relative;
  }

  .active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: radial-gradient(circle at 50%, #3d7085, #64988e);
  }
</style>
