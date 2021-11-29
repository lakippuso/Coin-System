var ctx = document.getElementById("graph1");
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Sunday", "Monday" , "Tuesday" , "Wednesday", "Thursday", "Friday", "Saturday"],
datasets: [
{ label: 'Weekly Income',
data: [3000,5000,4000,2500,3600,2900],
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