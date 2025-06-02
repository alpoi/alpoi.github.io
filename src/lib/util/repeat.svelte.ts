export function* repeat(count: number): Generator<number> {
  for (let i = 0; i < count; i++) {
    yield i;
  }
}
