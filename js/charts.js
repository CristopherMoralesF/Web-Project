
function loadCantidadPost(){

}
const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Cantidad de post',
        backgroundColor: '#009688',
        borderColor: '#32A89C',
        data: [0, 10, 5, 2, 20, 30, 45],
        pointStyle: 'circle',
        pointRadius: 10,
        pointHoverRadius: 15
    }]
};

const config = {
  type: 'line',
  data: data,
  options: {
    maintainAspectRatio: false,
    responsive: true,
    plugins: {
      title: {
        display: false
      }
    }
  }
};

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);