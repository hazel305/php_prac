const graph = document.getElementById("line-chart");
const xname = ["1월", "2월", "3월", "4월", "5월", "6월"];
let data2023 = {
  label: "2023",
  data: [29, 30, 31, 36, 28, 27],
};

// let data2022 = {
//   label: "2022",
//   data: [29, 30, 30, 26, 18, 17],
// };

let config = {
  type: "line",
  data: {
    labels: xname,
    datasets: [data2023],
  },
};

new Chart(graph, config);
