
<!--   Core JS Files   -->
<script src="../../../public/style/admin/assets/js/core/jquery-3.7.1.min.js"></script>
<script src="../../../public/style/admin/assets/js/core/popper.min.js"></script>
<script src="../../../public/style/admin/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="../../../public/style/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="../../../public/style/admin/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="../../../public/style/admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="../../../public/style/admin/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="../../../public/style/admin/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="../../../public/style/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="../../../public/style/admin/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
<script src="../../../public/style/admin/assets/js/plugin/jsvectormap/world.js"></script>

<!-- Sweet Alert -->
<script src="../../../public/style/admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Kaiadmin JS -->
<script src="../../../public/style/admin/assets/js/kaiadmin.min.js"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="../../../public/style/admin/assets/assets/js/setting-demo.js"></script>
<script src="../../../public/style/admin/assets/assets/js/demo.js"></script>
<script>
  $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
    type: "line",
    height: "70",
    width: "100%",
    lineWidth: "2",
    lineColor: "#177dff",
    fillColor: "rgba(23, 125, 255, 0.14)",
  });

  $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
    type: "line",
    height: "70",
    width: "100%",
    lineWidth: "2",
    lineColor: "#f3545d",
    fillColor: "rgba(243, 84, 93, .14)",
  });

  $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
    type: "line",
    height: "70",
    width: "100%",
    lineWidth: "2",
    lineColor: "#ffa534",
    fillColor: "rgba(255, 165, 52, .14)",
  });


  var barChart = document.getElementById("barChart").getContext("2d");
  var doanhthu_tatca_thang = <?php echo json_encode($doanhthu_tatca_thang); ?>;
  
      let doanhThuData = new Array(12).fill(0); // Mảng với 12 phần tử mặc định là 0

      doanhthu_tatca_thang.forEach(item => {
        let thang = parseInt(item.thang.substring(5, 7)); // Lấy số tháng
        doanhThuData[thang - 1] = parseFloat(item.doanh_thu); // Gán doanh thu vào vị trí tương ứng
      });

      console.log(doanhThuData);

      var myBarChart = new Chart(barChart, {
        type: "bar",
        data: {
          labels: [
            "Tháng 1",
            "Tháng 2",
            "Tháng 3",
            "Tháng 4",
            "Tháng 5",
            "Tháng 6",
            "Tháng 7",
            "Tháng 8",
            "Tháng 9",
            "Tháng 10",
            "Tháng 11",
            "Tháng 12",
          ],
          datasets: [{
            label: "Doanh thu của tháng",
            backgroundColor: "rgb(23, 125, 255)",
            borderColor: "rgb(23, 125, 255)",
            data: doanhThuData
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              },
            }, ],
          },
        },
      });
</script>

</body>

</html>