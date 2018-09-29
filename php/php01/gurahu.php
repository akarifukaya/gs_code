<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
入力した予定をグラフに反映する予定でした………<br>






<canvas id="myChart"></canvas>
<ul>
<li><a href="karennda.php">戻る</a></li>
</ul>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
new Chart(document.getElementById("myChart"), {
  type: "doughnut",
  data: {
    labels: ["赤", "青", "黄色"],
    datasets: [
      {
        data: [300, 50, 100],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)"
        ]
      }
    ]
  }
});
</script>

</body>
