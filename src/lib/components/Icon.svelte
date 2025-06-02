<script lang="ts">
  let props = $props();
</script>

<svg class={`fill-current ${props.class}`}>
  <use xlink:href={`/icons.svg#${props.name}`} />
</svg>
