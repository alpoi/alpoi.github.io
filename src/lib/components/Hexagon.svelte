<div class="hexagon -mx-2.5 -mb-7.5 h-24 w-24 bg-[#e1c584]">
  <div class="hexagon hexagon-inner m-2 h-20 w-20 bg-[#c89660]"></div>
</div>

<style>
  .hexagon-inner {
    filter: drop-shadow(inset 0 4px 8px #0f2c2e 0.4)
      drop-shadow(inset 0 -4px 8px #0f2c2e 0.4)
      drop-shadow(inset 4px 0 8px #0f2c2e 0.3)
      drop-shadow(inset -4px 0 8px #0f2c2e 0.3);
  }

  .hexagon {
    --r: 0.15;
    --a: 30deg;
    --i: 60deg;
    --c: 50%;

    --Ma: var(--i) * var(--r) / 2;
    --Mr: var(--c) * cos(var(--i) / 2) / cos(var(--i) * (1 - var(--r)) / 2);

    /* prettier-ignore */
    clip-path: shape(
      from 
        calc(var(--c) + var(--Mr) * cos(var(--a) - var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(var(--a) - var(--Ma))),
      curve to 
        calc(var(--c) + var(--Mr) * cos(var(--a) + var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(var(--a) + var(--Ma))) 
      with
        calc(var(--c) + var(--c) * cos(var(--a)))
        calc(var(--c) + var(--c) * sin(var(--a))),

      line to 
        calc(var(--c) + var(--Mr) * cos(var(--i) + var(--a) - var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(var(--i) + var(--a) - var(--Ma))),
      curve to 
        calc(var(--c) + var(--Mr) * cos(var(--i) + var(--a) + var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(var(--i) + var(--a) + var(--Ma))) 
      with
        calc(var(--c) + var(--c) * cos(var(--i) + var(--a)))
        calc(var(--c) + var(--c) * sin(var(--i) + var(--a))),

      line to
        calc(var(--c) + var(--Mr) * cos(2 * var(--i) + var(--a) - var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(2 * var(--i) + var(--a) - var(--Ma))),
      curve to
        calc(var(--c) + var(--Mr) * cos(2 * var(--i) + var(--a) + var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(2 * var(--i) + var(--a) + var(--Ma)))
      with 
        calc(var(--c) + var(--c) * cos(2 * var(--i) + var(--a)))
        calc(var(--c) + var(--c) * sin(2 * var(--i) + var(--a))),

      line to
        calc(var(--c) + var(--Mr) * cos(3 * var(--i) + var(--a) - var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(3 * var(--i) + var(--a) - var(--Ma))),
      curve to
        calc(var(--c) + var(--Mr) * cos(3 * var(--i) + var(--a) + var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(3 * var(--i) + var(--a) + var(--Ma)))
      with 
        calc(var(--c) + var(--c) * cos(3 * var(--i) + var(--a)))
        calc(var(--c) + var(--c) * sin(3 * var(--i) + var(--a))),

      line to
        calc(var(--c) + var(--Mr) * cos(4 * var(--i) + var(--a) - var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(4 * var(--i) + var(--a) - var(--Ma))),
      curve to
        calc(var(--c) + var(--Mr) * cos(4 * var(--i) + var(--a) + var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(4 * var(--i) + var(--a) + var(--Ma)))
      with
        calc(var(--c) + var(--c) * cos(4 * var(--i) + var(--a)))
        calc(var(--c) + var(--c) * sin(4 * var(--i) + var(--a))),

      line to
        calc(var(--c) + var(--Mr) * cos(5 * var(--i) + var(--a) - var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(5 * var(--i) + var(--a) - var(--Ma))),
      curve to
        calc(var(--c) + var(--Mr) * cos(5 * var(--i) + var(--a) + var(--Ma)))
        calc(var(--c) + var(--Mr) * sin(5 * var(--i) + var(--a) + var(--Ma)))
      with
        calc(var(--c) + var(--c) * cos(5 * var(--i) + var(--a)))
        calc(var(--c) + var(--c) * sin(5 * var(--i) + var(--a)))
    );
  }
</style>
