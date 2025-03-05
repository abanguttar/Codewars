// The galactic games have begun!
// It's the galactic games! Beings of all worlds come together to compete in several interesting sports, like nroogring, fredling and buzzing (the beefolks love the last one). However, there's also the traditional marathon run.

// Unfortunately, there have been cheaters in the last years, and the committee decided to place sensors on the track. Committees being committees, they've come up with the following rule:

// A sensor should be placed every 3 and 5 meters from the start, e.g. at 3m, 5m, 6m, 9m, 10m, 12m, 15m, 18m….

// Since you're responsible for the track, you need to buy those sensors. Even worse, you don't know how long the track will be!
//  And since there might be more than a single track, and you can't be bothered to do all of this by hand, you decide to write a program instead.

// Task
// Return the sum of the multiples of 3 and 5 below a number. Being the galactic games, the tracks can get rather large, so your solution should work for really large numbers (greater than 1,000,000).

function hello() {
  console.log("hello");
}

hello();

function solution(number) {
    // k is koefisien number want to count
  function sumMultiples(k, n) {
    const m = Math.floor((n - 1) / k); //count multiples of n
    return (k * m * (m + 1)) / 2;
  }

  const sum3 = sumMultiples(3, number);
  const sum5 = sumMultiples(5, number);
  const sum15 = sumMultiples(15, number);

  return sum3 + sum5 - sum15;
}

console.log(solution(10));
console.log(solution(20));
("9333333166666668");
("9333333166784178");
