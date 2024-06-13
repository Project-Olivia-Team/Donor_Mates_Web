document.addEventListener("DOMContentLoaded", function () {
    var sidebarToggle = document.querySelector(".navbar-toggler");
    var sidebar = document.querySelector("#sidebarMenu");

    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("show");
    });

    var table = $("#userTable").DataTable({
        dom: 't<"bottom"p>',
        pageLength: 10,
        paging: true,
        info: false,
    });

    $("#customSearchButton").on("click", function () {
        table.search($("#customSearchBox").val()).draw();
    });

    $("#customSearchBox").on("keypress", function (e) {
        if (e.which === 13) {
            table.search(this.value).draw();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("donorChart").getContext("2d");
    var donorChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            datasets: [
                {
                    label: "Jumlah Pendonor",
                    data: [30, 25, 20, 35, 40, 45, 50, 55, 60, 65, 70, 75],
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
});
