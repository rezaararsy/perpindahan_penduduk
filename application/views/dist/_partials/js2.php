<script>
    const ctxz = document.getElementById('myChart99').getContext('2d');
          const myChart2 = new Chart(ctxz, {
              type: 'bar',
              data: {
                labels: ['Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September','Oktober','November','Desember'],
                  datasets: [{
                      label: 'Perpindahan Datang Penduduk Kota Malang 2022',
                      data: [<?php echo $pindahdatang['3']; ?> , <?php echo $pindahdatang['4']; ?> , <?php echo $pindahdatang['5']; ?>,<?php echo $pindahdatang['6']; ?>,<?php echo $pindahdatang['7']; ?>,<?php echo $pindahdatang['8']; ?>,<?php echo $pindahdatang['9']; ?>,<?php echo $pindahdatang['10']; ?>,<?php echo $pindahdatang['11']; ?>,<?php echo $pindahdatang['12']; ?>],
                      borderWidth: 2,
                      backgroundColor: 'rgb(0,37,68)',
                      borderWidth: 0,
                      borderColor: 'transparent',
                      pointBorderWidth: 0,
                      pointRadius: 3.5,
                      pointBackgroundColor: 'transparent',
                      pointHoverBackgroundColor: 'white',
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });



          const ctxza = document.getElementById('myChart999').getContext('2d');
          const myChart3 = new Chart(ctxza, {
              type: 'bar',
              data: {
                labels: ['Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September','Oktober','November','Desember'],
                  datasets: [{
                      label: 'Perpindahan Keluar Penduduk Kota Malang 2022',
                      data: [<?php echo $pindahkeluar['3']; ?> , <?php echo $pindahkeluar['4']; ?> , <?php echo $pindahkeluar['5']; ?>,<?php echo $pindahkeluar['6']; ?>,<?php echo $pindahkeluar['7']; ?>,<?php echo $pindahkeluar['8']; ?>,<?php echo $pindahkeluar['9']; ?>,<?php echo $pindahkeluar['10']; ?>,<?php echo $pindahkeluar['11']; ?>,<?php echo $pindahkeluar['12']; ?>],
                      borderWidth: 2,
                      backgroundColor: 'rgb(252,84,75)',
                      borderWidth: 0,
                      borderColor: 'transparent',
                      pointBorderWidth: 0,
                      pointRadius: 3.5,
                      pointBackgroundColor: 'transparent',
                      pointHoverBackgroundColor: 'white',
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });

          const ctxz11 = document.getElementById('myChart11').getContext('2d');
          var myChart = new Chart(ctxz11, {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                  <?php echo $pindahluarblimbing; ?>,
                  <?php echo $pindahdatangblimbing; ?>,,
                ],
                backgroundColor: [
                  'rgb(0,37,68)',
                  'rgb(252,84,75)',
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Pindah Datang',
                'Pindah Keluar'
              ],
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
            }
          });

          const ctxz12 = document.getElementById('myChart12').getContext('2d');
          var myChart = new Chart(ctxz12, {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                  <?php echo $pindahluarklojen; ?>,
                  <?php echo $pindahdatangklojen; ?>,,
                ],
                backgroundColor: [
                  'rgb(0,37,68)',
                  'rgb(252,84,75)',
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Pindah Datang',
                'Pindah Keluar'
              ],
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
            }
          });

          const ctxz13 = document.getElementById('myChart13').getContext('2d');
          var myChart = new Chart(ctxz13, {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                  <?php echo $pindahluarkedungkandang; ?>,
                  <?php echo $pindahdatangkedungkandang; ?>,,
                ],
                backgroundColor: [
                  'rgb(0,37,68)',
                  'rgb(252,84,75)',
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Pindah Datang',
                'Pindah Keluar'
              ],
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
            }
          });

          const ctxz14 = document.getElementById('myChart14').getContext('2d');
          var myChart = new Chart(ctxz14, {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                  <?php echo $pindahluarsukun; ?>,
                  <?php echo $pindahdatangsukun; ?>,,
                ],
                backgroundColor: [
                  'rgb(0,37,68)',
                  'rgb(252,84,75)',
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Pindah Datang',
                'Pindah Keluar'
              ],
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
            }
          });

          const ctxz15 = document.getElementById('myChart15').getContext('2d');
          var myChart = new Chart(ctxz15, {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                  <?php echo $pindahluarlowokwaru; ?>,
                  <?php echo $pindahdatanglowokwaru; ?>,,
                ],
                backgroundColor: [
                  'rgb(0,37,68)',
                  'rgb(252,84,75)',
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Pindah Datang',
                'Pindah Keluar'
              ],
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
            }
          });




          
</script>