      </div>
    </div>
    
  </div>
  <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> 
              <b></b>
            </span>
          </div>
        </div>
        </footer>
      <!-- Footer -->
  
  
  <script src="<?php echo base_url() ?>assets/select2-4.0.13/dist/js/select2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modernize/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modernize/assets/js/sidebarmenu.js"></script>
  <script src="<?php echo base_url() ?>assets/modernize/assets/js/app.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modernize/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modernize/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?php echo base_url() ?>assets/modernize/assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        
        $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    
    // var xValues = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];
    // var yValues = [55, 49, 44, 24, 15];
    // var barColors = [
    //   "#b91d47",
    //   "#00aba9",
    //   "#2b5797",
    //   "#e8c3b9",
    //   "#1e7145"
    // ];

    // new Chart("myChart", {
    //   type: "pie",
    //   data: {
    //     labels: xValues,
    //     datasets: [{
    //       backgroundColor: barColors,
    //       data: yValues
    //     }]
    //   },
    //   options: {
    //     title: {
    //       display: true,
    //       text: "World Wide Wine Production 2018"
    //     }
    //   }
    // });

      //paginasi
  // Jumlah item per halaman
  var itemsPerPage = 4;
  var currentPage = 1;
  
  function showPage(page) {
      var rows = $("#myTable tr");
      var startIndex = (page - 1) * itemsPerPage;
      var endIndex = startIndex + itemsPerPage;
  
      rows.hide();
      rows.slice(startIndex, endIndex).show();
  
      $("#paginationStatus").text("Page " + currentPage + " of " + Math.ceil(rows.length / itemsPerPage));
  }
  
  $(document).ready(function() {
      showPage(currentPage);
  
      $("#nextPage").click(function() {
          var rows = $("#myTable tr");
          var totalPages = Math.ceil(rows.length / itemsPerPage);
  
          if (currentPage < totalPages) {
              currentPage++;
              showPage(currentPage);
          }
      });
  
      $("#prevPage").click(function() {
          if (currentPage > 1) {
              currentPage--;
              showPage(currentPage);
          }
      });
  });
    
  </script>

</body>

</html>