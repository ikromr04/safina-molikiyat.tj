function getCombinations(n, k) {
  function helper(n, k, prefix = []) {
    if (k === 1) return [[...prefix, n]];
    const results = [];
    for (let i = 1; i <= n - k + 1; i++) {
      results.push(...helper(n - i, k - 1, [...prefix, i]));
    }
    return results;
  }
  return helper(n, k);
}

export function findOptimalCabinets(N, D, C, K) {
  const requiredTotal = N * D;
  const sortedCabinets = K.sort((a, b) => a - b);
  const maxCabinets = sortedCabinets.length;

  for (let c = C; c <= maxCabinets; c++) {
    const splits = getCombinations(N, c);
    let best = null;
    let minWaste = Infinity;

    for (const split of splits) {
      const requiredAreas = split.map(n => n * D);
      const available = [...sortedCabinets];
      const chosen = [];

      let valid = true;

      for (const area of requiredAreas) {
        const match = available.find(k => k >= area);
        if (match !== undefined) {
          chosen.push(match);
          available.splice(available.indexOf(match), 1);
        } else {
          valid = false;
          break;
        }
      }

      if (valid) {
        const total = chosen.reduce((a, b) => a + b, 0);
        const waste = total - requiredTotal;
        if (waste < minWaste) {
          minWaste = waste;
          best = {
            split,
            selected: chosen,
            totalArea: total,
            waste,
            adjustedCabinets: c
          };
        }
      }
    }

    if (best) return best;
  }

  return null;
}
