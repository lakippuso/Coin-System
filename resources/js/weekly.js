makeChart();

function makeChart() {
    $.ajax({
        url: "includes/load-weekly.php",
        method: "POST",
        data:{action:"fetch"},
        success: function(data){
            var ctx = document.getElementById("graph1");
            console.log(data);
            var values = JSON.parse(data);
            console.log(values['data']);
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: values["label"],
                    datasets: [{ 
                        label: 'Weekly Income',
                        data: values["data"],
                        backgroundColor :['rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth : 1
                        }
                    ]
                },
                options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
                }
            });
        }

    })
}