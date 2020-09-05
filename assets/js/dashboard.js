// Bar chart
var ctx = document.getElementById('BarChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Design', 'Development', 'Sales', 'Support', 'Quality Assurance', 'Management'],
        datasets: [{
            label: ' ',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        responsive: true
    }
});


// For a doughnut chart
var ctx = document.getElementById('DoughnutChart');
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Present', 'Absent'],        
        datasets: [{
            data: [50, 5],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'

            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});

