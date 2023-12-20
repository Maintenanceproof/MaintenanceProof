const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Maintenance', 'Inspections', 'Achats'],
      datasets: [{
        label: 'Requêtes Due',
        data: [12, 9, 3 ],
        backgroundColor:[
            "orange",
            "black",
            "#9c9c9c"
            
        ],
       
        borderWidth: 1
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

  const dct = document.getElementById('doughnutChart');

  new Chart(dct, {
    type: 'doughnut',
    data: {
      labels: ['Louées', 'Vacantes', 'En rénovation'],
      datasets: [{
        label: 'Occupation des unités',
        data: [12, 9, 3 ],
        backgroundColor:[
            "orange",
            "black",
            "#9c9c9c"
            
        ],
       
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        },
      
      }
    }
  });


  const cct = document.getElementById('cChart');

  new Chart(cct, {
    type: 'polarArea',
    data: {
      labels: ['Électricité', 'Gas', 'Fuel'],
      datasets: [{
        label: 'Consommation énergie',
        data: [12, 9, 3 ],
        backgroundColor:[
            "orange",
            "black",
            "#9c9c9c"
            
        ],
       
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        },
      
      }
    }
  });