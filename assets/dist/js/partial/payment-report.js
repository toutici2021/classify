
$.get(site_url+'/report/get-monthly-payment-report/',function (data) {
    var values = [];
    jQuery.each(data, function(index, item) {
        values.push(item['amount']);
    });
    // start line chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [
                {
                    label: "",
                    backgroundColor: [
                        'rgba(220,53,69,0.18)',
                        'rgba(220,53,69,0.18)',
                        'rgba(220,53,69,0.18)',
                        'rgba(220,53,69,0.18)',
                        'rgba(220,53,69,0.18)',
                        'rgba(220,53,69,0.18)'
                    ],
                    borderColor: [
                        '#b50516',
                        '#b50516',
                        '#b50516',
                        '#b50516',
                        '#b50516',
                        '#b50516'
                    ],
                    borderWidth: 1,
                    data:values
        }
]
},
    options: {
        legend: {display: false},
        title: {
            display: true
        }
    }
});
});


