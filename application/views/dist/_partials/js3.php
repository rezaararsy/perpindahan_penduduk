<script>
    const ctxp1 = document.getElementById('myChartp1').getContext('2d');
          const myChartp1 = new Chart(ctxp1, {
              type: 'bar',
              data: {
                  labels: ['Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September','Oktober','November'],
                  datasets: [{
                      label: 'Perpindahan Datang Penduduk Kota Malang 2022',
                      data: [<?php echo $pindahdatang['3']; ?> , <?php echo $pindahdatang['4']; ?> , <?php echo $pindahdatang['5']; ?>,<?php echo $pindahdatang['6']; ?>,<?php echo $pindahdatang['7']; ?>,<?php echo $pindahdatang['8']; ?>,<?php echo $pindahdatang['9']; ?>,<?php echo $pindahdatang['10']; ?>,<?php echo $pindahdatang['11']; ?>],
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



          const ctxp2 = document.getElementById('myChartp2').getContext('2d');
          const myChartp2 = new Chart(ctxp2, {
              type: 'bar',
              data: {
                  labels: ['Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus','September','Oktober','November'],
                  datasets: [{
                      label: 'Perpindahan Keluar Penduduk Kota Malang 2022',
                      data: [<?php echo $pindahkeluar['3']; ?> , <?php echo $pindahkeluar['4']; ?> , <?php echo $pindahkeluar['5']; ?>,<?php echo $pindahkeluar['6']; ?>,<?php echo $pindahkeluar['7']; ?>,<?php echo $pindahkeluar['8']; ?>,<?php echo $pindahkeluar['9']; ?>,<?php echo $pindahkeluar['10']; ?>,<?php echo $pindahkeluar['11']; ?>],
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
</script>