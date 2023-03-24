$(function () {
  let hours = [];
  let languages = [];
  let set_colors = [];

  $.ajax({
    type: "GET",
    url: "http://localhost/pie1_data",
    dataType: "json",
    async: false,
  }).then(
    function (json) {
      const lenJSON = json.length;
      for(var i=0 ; i<lenJSON ; i++){
        languages.push(json[i].name);
        set_colors.push(json[i].color);
        hours.push(json[i].hours);
      }

      var options = {
        series: hours,
        chart: {
          height: 500,
          type: 'donut',
        },
        stroke: {
          width: 0,
        },
        plotOptions: {
          pie: {
            donut: {
              size:'45px',
              labels: {
                show: true,
                total: {
                  showAlways: false,
                  show: false
                }
              }
            }
          }
        },

        labels: languages,
        colors: set_colors,

        dataLabels: {
          style: {
            fontSize: '0.8rem',
          }
        },

        states: {
          hover: {
            filter: 'none'
          }
        },

        legend: {
          position: 'bottom',
          horizontalAlign: 'left', 
          fontSize: '15px',
        },

        responsive: [{
          breakpoint: 480,
          options: {
            plotOptions: {
              pie: {
              offsetY: 0
              }
            },
            title: {
              style: {
                fontSize: '13px',
                color:  '#263238'
              }
            },
            chart: {
            },
            legend: {
                position: 'bottom',
                fontSize: '8px',
            }
          }
        }]
      };
      
      var chart = new ApexCharts(document.querySelector("#circle-charts1"), options);
      chart.render(); 
    }
  );
}); 