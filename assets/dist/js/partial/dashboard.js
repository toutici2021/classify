$(function () {
    $(".enquiry-reply").on("click", function (e) {
        e.preventDefault();
        $("#enquiry-reply-email-to").val(($(this).data('email')));
        $("#enquiry-reply-modal").show();
        $('.message_content').summernote({
            dialogsInBody: true,
            height: '350px'
        });
    });
});

$.get('chart/get-monthly-revenue/',function (data) {
    var labels = [];
    var values = [];
    jQuery.each(data, function(index, item) {
        labels.push(item['month']);
        values.push(item['amount']);
    });
    // start line chart
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    data: values,
                    borderColor: "#cc2424",
                    fill: false
                }
            ]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: 'Monthly revenue in last 12 months'
            }
        }
    });
});
