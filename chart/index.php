<?php

$data= [29, 30, 31, 36, 28, 27];
$data1 = [5, 30, 35, 26, 18, 17];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>CodePen - Chart.js 3.8 Creating a Simple Line Chart (base)</title>
</head>

<body>
  <!-- partial:index.partial.html -->
  <canvas id="line-chart"></canvas>
  <!-- partial -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- <script  src="./script.js"></script> -->
  <script>
  <?php echo json_encode($data)?>



  const graph = document.getElementById("line-chart");
  const xname = ["1월", "2월", "3월", "4월", "5월", "6월"];




  // let data2023 = {
  //   label: "2023",
  //   data: <?php echo json_encode($data)?>,
  // };

  let data2022 = {
    label: "2022",
    data: <?php echo json_encode($data1)?>
  };

  let config = {
    type: "line",
    data: {
      labels: xname,
      datasets: [data2022],
    },
  };

  new Chart(graph, config);
  </script>
</body>

</html>