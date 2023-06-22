
google.charts.load("current", {
    packages: ["gauge", "corechart", "table", "charteditor", "line"],
});

google.charts.setOnLoadCallback(drawFeedChart);
google.charts.setOnLoadCallback(drawTemperatureChart);
google.charts.setOnLoadCallback(drawWaterChart);
google.charts.setOnLoadCallback(drawTempLine);
google.charts.setOnLoadCallback(drawWaterBarChart);
google.charts.setOnLoadCallback(drawTempTable);
google.charts.setOnLoadCallback(drawWaterTable);
google.charts.setOnLoadCallback(drawAudioTable);
google.charts.setOnLoadCallback(drawFeedTable);
google.charts.setOnLoadCallback(drawLiveTempChart);
google.charts.setOnLoadCallback(drawLiveFeedChart);
google.charts.setOnLoadCallback(drawLiveWaterChart);
google.charts.setOnLoadCallback(drawDailyTempChart);
google.charts.setOnLoadCallback(drawDailyFeedChart);
google.charts.setOnLoadCallback(drawDailyWaterChart);
google.charts.setOnLoadCallback(drawWeeklyTemperature);
google.charts.setOnLoadCallback(drawWeeklyFeed);
google.charts.setOnLoadCallback(drawWeeklyWater);
google.charts.setOnLoadCallback(temperatureWithWater);
google.charts.setOnLoadCallback(temperatureWeight);
google.charts.setOnLoadCallback(feedWithTemperature);
google.charts.setOnLoadCallback(feedWithWater);



function drawFeedChart() {
    var data = google.visualization.arrayToDataTable([
        ["Label", "Value"],
        ["Feed", 0],
    ]);

    var options = {
        width: 600,
        height: 200,
        redFrom: 90,
        redTo: 100,
        yellowFrom: 75,
        yellowTo: 90,
        majorTicks: ["0", "20", "40", "60", "80", "100"],
        minorTicks: 5,
        title: "Current Feed Level",
    };

    var chart = new google.visualization.Gauge(
        document.getElementById("feed_chart")
    );

    chart.draw(data, options);

    setInterval(function () {
        fetch("http://127.0.0.1:8000/api/feed/current/")
            .then((response) => response.json())
            .then(
                (json) => {
                    console.log(json[0].feedLevelReading)
                    data.setValue(0, 1, json[0].feedLevelReading);
                    chart.draw(data, options);
                });
    }, 3000);
}

function drawTemperatureChart() {
    var data = google.visualization.arrayToDataTable([
        ["Label", "Value"],
        ["Temp", 80],
    ]);

    var options = {
        width: 600,
        height: 200,
        redFrom: 90,
        redTo: 100,
        yellowFrom: 75,
        yellowTo: 90,
        minorTicks: 5,
        majorTicks: ["0", "20", "40", "60", "80", "100"],
    };

    var chart = new google.visualization.Gauge(
        document.getElementById("temp_chart")
    );

    chart.draw(data, options);

    setInterval(function () {
        fetch("http://127.0.0.1:8000/api/temperature/current/")
            .then((response) => response.json())
            .then(
                (json) => {
                    console.log(json[0].temperatureReading)
                    data.setValue(0, 1, json[0].temperatureReading);
                    chart.draw(data, options);
                });
    }, 3000);
}

function drawWaterChart() {
    var data = google.visualization.arrayToDataTable([
        ["Label", "Value"],
        ["Water", 80],
    ]);

    var options = {
        width: 600,
        height: 200,
        redFrom: 90,
        redTo: 100,
        yellowFrom: 75,
        yellowTo: 0,
        minorTicks: 5,
        majorTicks: ["0", "20", "40", "60", "80", "100"],
    };

    var chart = new google.visualization.Gauge(
        document.getElementById("water_chart")
    );

    chart.draw(data, options);

    setInterval(function () {
        fetch("http://127.0.0.1:8000/api/water/current/")
            .then((response) => response.json())
            .then(
                (json) => {
                    console.log(json[0].waterLevelReading)
                    data.setValue(0, 1, json[0].waterLevelReading);
                    chart.draw(data, options);
                });
    }, 3000);
}

function drawTempLine() {
    // Define the data for the line graph
    var data = google.visualization.arrayToDataTable([
        ["Time", "Temperature (°C)"],
        ["00:00", 12],
        ["00:30", 13],
        ["01:00", 13],
        ["01:30", 12],
        ["02:00", 11],
        ["02:30", 10],
        ["03:00", 11],
        ["03:30", 10],
        ["04:00", 9],
        ["04:30", 8],
        ["05:00", 8],
        ["05:30", 9],
        ["06:00", 10],
        ["06:30", 11],
        ["07:00", 12],
        ["07:30", 13],
        ["08:00", 14],
        ["08:30", 14],
        ["09:00", 13],
        ["09:30", 14],
        ["10:00", 15],
        ["10:30", 16],
        ["11:00", 16],
        ["11:30", 15],
        ["12:00", 16],
        ["12:30", 17],
        ["13:00", 18],
        ["13:30", 19],
        ["14:00", 20],
        ["14:30", 21],
        ["15:00", 22],
        ["15:30", 22],
        ["16:00", 21],
        ["16:30", 20],
        ["17:00", 19],
        ["17:30", 18],
        ["18:00", 17],
        ["18:30", 16],
        ["19:00", 15],
        ["19:30", 14],
        ["20:00", 13],
        ["20:30", 12],
        ["21:00", 11],
        ["21:30", 10],
        ["22:00", 9],
        ["22:30", 8],
        ["23:00", 7],
        ["23:30", 6],
    ]);

    // Set the chart options
    var options = {
        title: "Temperature Variation (Every 30 Minutes)",
        curveType: "function",
        legend: { position: "bottom" },
        hAxis: {
            title: "Time",
            format: "hh:mm",
            gridlines: {
                count: -1,
                units: {
                    minutes: { format: ["hh:mm"] },
                },
            },
            minorGridlines: {
                count: -1,
                units: {
                    minutes: { format: ["hh:mm"] },
                },
            },
        },
        backgroundColor: "#f1f8e9",
        vAxis: {
            title: "Temperature (°C)",
        },
    };

    // Instantiate and draw the chart
    var chart = new google.visualization.LineChart(
        document.getElementById("temp_line_chart")
    );
    chart.draw(data, options);
}

function drawWaterBarChart() {
    var data = google.visualization.arrayToDataTable([
        ["Flock", "Water Consumption"],
        ["Flock A", 50],
        ["Flock B", 75],
        ["Flock C", 60],
        ["Flock D", 80],
        ["Flock E", 70],
    ]);

    var options = {
        title: "Poultry Water Consumption",
        hAxis: { title: "Flock" },
        vAxis: { title: "Water Consumption" },
        legend: { position: "none" },
    };

    var chart = new google.visualization.ColumnChart(
        document.getElementById("water_bar_chart")
    );
    chart.draw(data, options);

    // Refresh the chart data every hour
    setInterval(function () {
        data.setValue(0, 1, Math.floor(Math.random() * 100));
        data.setValue(1, 1, Math.floor(Math.random() * 100));
        data.setValue(2, 1, Math.floor(Math.random() * 100));
        data.setValue(3, 1, Math.floor(Math.random() * 100));
        data.setValue(4, 1, Math.floor(Math.random() * 100));
        chart.draw(data, options);
    }, 3600000);
}

function drawTempTable() {
    // Create a new DataTable object
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Date");
    data.addColumn("number", "Temperature");

    // Create a new Table object and bind it to the HTML element
    var table = new google.visualization.Table(
        document.getElementById("temp_table")
    );

    // Perform an AJAX request to retrieve data from the API endpoint
    $.getJSON("https://apms-production.up.railway.app/api/temperature", function (response) {
        // Loop through the data and add it to the DataTable object
        $.each(response, function (index, value) {
            // Convert the ISO 8601 date string to a standard format
            var date = new Date(value.created_at);
            var formattedDate = date.toLocaleString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
                hour: "numeric",
                minute: "numeric",
                second: "numeric",
                hour12: true,
            });

            // Add the formatted date and temperature to the DataTable
            data.addRow([formattedDate, value.temperatureReading]);
        });

        // Draw the table with the updated data
        table.draw(data, {
            showRowNumber: true,
            width: "100%",
            height: "100%",
            cssClassNames: {
                headerRow: "google-chart-header",
                tableRow: "google-chart-row",
                oddTableRow: "google-chart-row",
                selectedTableRow: "google-chart-selected-row",
                hoverTableRow: "google-chart-hover-row",
                headerCell: "google-chart-header-cell",
                tableCell: "google-chart-cell",
                rowNumberCell: "google-chart-row-number",
            },
        });
    });
}

function drawWaterTable() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Date");
    data.addColumn("number", "Water Level(ml)");

    // Perform an AJAX request to retrieve data from the API endpoint
    $.getJSON("https://apms-production.up.railway.app/api/water", function (response) {
        // Loop through the data and add it to the DataTable object
        $.each(response, function (index, value) {
            var date = new Date(value.created_at);
            var formattedDate = date.toLocaleDateString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
            });
            data.addRow([formattedDate, value.waterLevelReading]);
        });

        // Create a new Table object and bind it to the HTML element
        var table = new google.visualization.Table(
            document.getElementById("water_table")
        );

        // Draw the table with the updated data
        table.draw(data, {
            showRowNumber: true,
            width: "100%",
            height: "100%",
            cssClassNames: {
                headerRow: "google-chart-header",
                tableRow: "google-chart-row",
                oddTableRow: "google-chart-row",
                selectedTableRow: "google-chart-selected-row",
                hoverTableRow: "google-chart-hover-row",
                headerCell: "google-chart-header-cell",
                tableCell: "google-chart-cell",
                rowNumberCell: "google-chart-row-number",
            },
        });
    });
}

function drawAudioTable() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Date");
    data.addColumn("number", "Audio File");

    // Add your temperature readings to the data table
    data.addRows([
        ["2023-04-01", 20.5],
        ["2023-04-02", 22.1],
        ["2023-04-03", 23.8],
        ["2023-04-04", 22.4],
        ["2023-04-05", 20.7],
        ["2023-04-06", 18.9],
        ["2023-04-07", 21.3],
        ["2023-04-08", 24.6],
        ["2023-04-09", 23.2],
        ["2023-04-10", 21.1],
        ["2023-04-11", 19.8],
        ["2023-04-12", 22.7],
        ["2023-04-13", 24.1],
        ["2023-04-14", 22.3],
        ["2023-04-15", 20.9],
    ]);

    var table = new google.visualization.Table(
        document.getElementById("audio_table")
    );

    table.draw(data, {
        showRowNumber: true,
        width: "100%",
        height: "100%",
        cssClassNames: {
            headerRow: "google-chart-header",
            tableRow: "google-chart-row",
            oddTableRow: "google-chart-row",
            selectedTableRow: "google-chart-selected-row",
            hoverTableRow: "google-chart-hover-row",
            headerCell: "google-chart-header-cell",
            tableCell: "google-chart-cell",
            rowNumberCell: "google-chart-row-number",
        },
    });
}

function drawFeedTable() {
    var data = new google.visualization.DataTable();
    data.addColumn("string", "Date");
    data.addColumn("number", "Feed Amount(Kgs)");

    // Perform an AJAX request to retrieve data from the API endpoint
    $.getJSON("https://apms-production.up.railway.app/api/feed", function (response) {
        // Loop through the data and add it to the DataTable object
        $.each(response, function (index, value) {
            var date = new Date(value.created_at);
            var formattedDate = date.toLocaleDateString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric",
                hour: "numeric",
                minute: "numeric",
                second: "numeric",
                hour12: true,
            });
            data.addRow([formattedDate, value.feedLevelReading]);
        });

        // Create a new Table object and bind it to the HTML element
        var table = new google.visualization.Table(
            document.getElementById("feed_table")
        );

        // Draw the table with the updated data
        table.draw(data, {
            showRowNumber: true,
            width: "100%",
            height: "100%",
            cssClassNames: {
                headerRow: "google-chart-header",
                tableRow: "google-chart-row",
                oddTableRow: "google-chart-row",
                selectedTableRow: "google-chart-selected-row",
                hoverTableRow: "google-chart-hover-row",
                headerCell: "google-chart-header-cell",
                tableCell: "google-chart-cell",
                rowNumberCell: "google-chart-row-number",
            },
        });
    });
}

function drawLiveTempChart() {
    // Create data object with default value
    let data = google.visualization.arrayToDataTable([
        ["Time", "Temperature"],
        [0, 0],
    ]);

    // Create options object with titles, colors, etc.
    let options = {
        title: "Temperature Status",
        hAxis: {
            textPosition: "none",
        },
        vAxis: {
            title: "Temperature",
        },
    };

    // Draw chart on load
    let chart = new google.visualization.LineChart(
        document.getElementById("chart_div")
    );
    chart.draw(data, options);

    let index = 0;
    let maxDatas = 50;

    // Update the chart every 100 milliseconds (or any desired interval)
    setInterval(function () {
        // Instead of this random value, you can replace it with your actual CPU temperature data
        let randomTemperature = Math.random() * 80; // Replace this with actual CPU temperature value

        if (data.getNumberOfRows() > maxDatas) {
            data.removeRows(0, data.getNumberOfRows() - maxDatas);
        }

        data.addRow([index, randomTemperature]);
        chart.draw(data, options);

        index++;
    }, 100);
}

function drawLiveWaterChart() {
    // Create data object with default value
    let data = google.visualization.arrayToDataTable([
        ["Time", "Water Level"],
        [0, 0],
    ]);

    // Create options object with titles, colors, etc.
    let options = {
        title: "Water Level",
        hAxis: {
            textPosition: "none",
        },
        vAxis: {
            title: "Water Consumption Rate",
        },
    };

    // Draw chart on load
    let chart = new google.visualization.LineChart(
        document.getElementById("live_water_chart")
    );
    chart.draw(data, options);

    let index = 0;
    let maxDatas = 50;

    // Update the chart every 100 milliseconds (or any desired interval)
    setInterval(function () {
        // Instead of this random value, you can replace it with your actual CPU temperature data
        let randomWater = Math.random() * 80; // Replace this with actual CPU Water value

        if (data.getNumberOfRows() > maxDatas) {
            data.removeRows(0, data.getNumberOfRows() - maxDatas);
        }

        data.addRow([index, randomWater]);
        chart.draw(data, options);

        index++;
    }, 100);
}

function drawLiveFeedChart() {
    // Create data object with default value
    let data = google.visualization.arrayToDataTable([
        ["Time", "Feed"],
        [0, 0],
    ]);

    // Create options object with titles, colors, etc.
    let options = {
        title: "Feeding Status",
        hAxis: {
            textPosition: "none",
        },
        vAxis: {
            title: "Feed Level",
        },
    };

    // Draw chart on load
    let chart = new google.visualization.LineChart(
        document.getElementById("live_feed_chart")
    );
    chart.draw(data, options);

    let index = 0;
    let maxDatas = 50;

    // Update the chart every 100 milliseconds (or any desired interval)
    setInterval(function () {
        // Instead of this random value, you can replace it with your actual CPU temperature data
        let randomTemperature = Math.random() * 80; // Replace this with actual CPU temperature value

        if (data.getNumberOfRows() > maxDatas) {
            data.removeRows(0, data.getNumberOfRows() - maxDatas);
        }

        data.addRow([index, randomTemperature]);
        chart.draw(data, options);

        index++;
    }, 100);
}

function drawDailyTempChart() {
    // Sample data
    const temperatureData = [
        { time: "09:00", temperature: 20 },
        { time: "12:00", temperature: 24 },
        { time: "15:00", temperature: 26 },
        { time: "18:00", temperature: 22 },
        { time: "21:00", temperature: 18 },
    ];

    // Extract labels and values from the data
    const labels = temperatureData.map((data) => data.time);
    const values = temperatureData.map((data) => data.temperature);

    // Create the chart
    const ctx = document
        .getElementById("dailyTemperatureChart")
        .getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Temperature",
                    data: values,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                },
            },
        },
    });
}

function drawDailyWaterChart() {
    // Sample data
    const waterData = [
        { time: "09:00", water: 20 },
        { time: "12:00", water: 24 },
        { time: "15:00", water: 26 },
        { time: "18:00", water: 22 },
        { time: "21:00", water: 18 },
    ];

    // Extract labels and values from the data
    const labels = waterData.map((data) => data.time);
    const values = waterData.map((data) => data.water);

    // Create the chart
    const ctx = document.getElementById("dailyWaterChart").getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Water Consumption",
                    data: values,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                },
            },
        },
    });
}

function drawDailyFeedChart() {
    // Sample data
    const feedData = [
        { time: "09:00", feed: 20 },
        { time: "12:00", feed: 24 },
        { time: "15:00", feed: 26 },
        { time: "18:00", feed: 22 },
        { time: "21:00", feed: 18 },
    ];

    // Extract labels and values from the data
    const labels = feedData.map((data) => data.time);
    const values = feedData.map((data) => data.feed);

    // Create the chart
    const ctx = document.getElementById("dailyFeedChart").getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "feed",
                    data: values,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                },
            },
        },
    });
}

function drawWeeklyTemperature() {
    // Sample data for a week
    const temperatureData = [
        { day: "Monday", temperature: 20 },
        { day: "Tuesday", temperature: 24 },
        { day: "Wednesday", temperature: 26 },
        { day: "Thursday", temperature: 22 },
        { day: "Friday", temperature: 18 },
        { day: "Saturday", temperature: 22 },
        { day: "Sunday", temperature: 25 },
    ];

    // Extract labels and values from the data
    const labels = temperatureData.map((data) => data.day);
    const values = temperatureData.map((data) => data.temperature);

    // Create the chart
    const ctx = document
        .getElementById("weeklyTemperatureChart")
        .getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Temperature",
                    data: values,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                },
            },
        },
    });
}

function drawWeeklyWater() {
    // Sample data for a week
    const waterData = [
        { day: "Monday", water: 20 },
        { day: "Tuesday", water: 24 },
        { day: "Wednesday", water: 26 },
        { day: "Thursday", water: 22 },
        { day: "Friday", water: 18 },
        { day: "Saturday", water: 22 },
        { day: "Sunday", water: 25 },
    ];

    // Extract labels and values from the data
    const labels = waterData.map((data) => data.day);
    const values = waterData.map((data) => data.water);

    // Create the chart
    const ctx = document.getElementById("weeklyWaterChart").getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "water",
                    data: values,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                },
            },
        },
    });
}

function drawWeeklyFeed() {
    // Sample data for a week
    const feedData = [
        { day: "Monday", feed: 20 },
        { day: "Tuesday", feed: 24 },
        { day: "Wednesday", feed: 26 },
        { day: "Thursday", feed: 22 },
        { day: "Friday", feed: 18 },
        { day: "Saturday", feed: 22 },
        { day: "Sunday", feed: 25 },
    ];

    // Extract labels and values from the data
    const labels = feedData.map((data) => data.day);
    const values = feedData.map((data) => data.feed);

    // Create the chart
    const ctx = document.getElementById("weeklyFeedChart").getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "feed",
                    data: values,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: Math.max(...values) + 5,
                },
            },
        },
    });
}

function temperatureWithWater() {
    // Sample data for temperature and water levels per hour for 12 hours
    const data = [
        { time: "01:00", temperature: 20, waterLevel: 50 },
        { time: "02:00", temperature: 24, waterLevel: 55 },
        { time: "03:00", temperature: 26, waterLevel: 60 },
        { time: "04:00", temperature: 22, waterLevel: 58 },
        { time: "05:00", temperature: 18, waterLevel: 52 },
        { time: "06:00", temperature: 22, waterLevel: 54 },
        { time: "07:00", temperature: 25, waterLevel: 57 },
        { time: "08:00", temperature: 27, waterLevel: 60 },
        { time: "09:00", temperature: 28, waterLevel: 58 },
        { time: "10:00", temperature: 26, waterLevel: 55 },
        { time: "11:00", temperature: 24, waterLevel: 51 },
        { time: "12:00", temperature: 22, waterLevel: 48 },
    ];

    // Extract labels, temperature, and water level values from the data
    const labels = data.map((dataPoint) => dataPoint.time);
    const temperatures = data.map((dataPoint) => dataPoint.temperature);
    const waterLevels = data.map((dataPoint) => dataPoint.waterLevel);

    // Create the chart
    const ctx = document
        .getElementById("temperatureWaterChart")
        .getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Temperature",
                    data: temperatures,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
                {
                    label: "Water Level",
                    data: waterLevels,
                    borderColor: "rgb(54, 162, 235)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax:
                        Math.max(
                            Math.max(...temperatures),
                            Math.max(...waterLevels)
                        ) + 10,
                },
            },
            plugins: {
                title: {
                    display: true,
                    text: "Temperature and Water Level per Hour",
                },
            },
        },
    });
}

function feedWithWater() {
    // Sample data for temperature and water levels per hour for 12 hours
    const data = [
        { time: "01:00", feed: 20, waterLevel: 50 },
        { time: "02:00", feed: 24, waterLevel: 55 },
        { time: "03:00", feed: 26, waterLevel: 60 },
        { time: "04:00", feed: 22, waterLevel: 58 },
        { time: "05:00", feed: 18, waterLevel: 52 },
        { time: "06:00", feed: 22, waterLevel: 54 },
        { time: "07:00", feed: 25, waterLevel: 57 },
        { time: "08:00", feed: 27, waterLevel: 60 },
        { time: "09:00", feed: 28, waterLevel: 58 },
        { time: "10:00", feed: 26, waterLevel: 55 },
        { time: "11:00", feed: 24, waterLevel: 51 },
        { time: "12:00", feed: 22, waterLevel: 48 },
    ];

    // Extract labels, feed, and water level values from the data
    const labels = data.map((dataPoint) => dataPoint.time);
    const feeds = data.map((dataPoint) => dataPoint.feed);
    const waterLevels = data.map((dataPoint) => dataPoint.waterLevel);

    // Create the chart
    const ctx = document.getElementById("feedWaterChart").getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "feed",
                    data: feeds,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
                {
                    label: "Water Level",
                    data: waterLevels,
                    borderColor: "rgb(54, 162, 235)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax:
                        Math.max(Math.max(...feeds), Math.max(...waterLevels)) +
                        10,
                },
            },
            plugins: {
                title: {
                    display: true,
                    text: "feed and Water Level per Hour",
                },
            },
        },
    });
}

function temperatureWeight() {
    // Sample data for temperature and weight per hour for 12 hours
    const data = [
        { time: "01:00", temperature: 20, weight: 70 },
        { time: "02:00", temperature: 24, weight: 72 },
        { time: "03:00", temperature: 26, weight: 71 },
        { time: "04:00", temperature: 22, weight: 69 },
        { time: "05:00", temperature: 18, weight: 68 },
        { time: "06:00", temperature: 22, weight: 70 },
        { time: "07:00", temperature: 25, weight: 72 },
        { time: "08:00", temperature: 27, weight: 73 },
        { time: "09:00", temperature: 28, weight: 71 },
        { time: "10:00", temperature: 26, weight: 69 },
        { time: "11:00", temperature: 24, weight: 68 },
        { time: "12:00", temperature: 22, weight: 70 },
    ];

    // Extract labels, temperature, and weight values from the data
    const labels = data.map((dataPoint) => dataPoint.time);
    const temperatures = data.map((dataPoint) => dataPoint.temperature);
    const weights = data.map((dataPoint) => dataPoint.weight);

    // Create the chart
    const ctx = document
        .getElementById("temperatureWeightChart")
        .getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Temperature",
                    data: temperatures,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
                {
                    label: "Weight",
                    data: weights,
                    borderColor: "rgb(54, 162, 235)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax:
                        Math.max(
                            Math.max(...temperatures),
                            Math.max(...weights)
                        ) + 10,
                },
            },
        },
    });
}

function feedWithTemperature() {
    // Sample data for temperature and weight per hour for 12 hours
    const data = [
        { time: "01:00", temperature: 20, feed: 70 },
        { time: "02:00", temperature: 24, feed: 72 },
        { time: "03:00", temperature: 26, feed: 71 },
        { time: "04:00", temperature: 22, feed: 69 },
        { time: "05:00", temperature: 18, feed: 68 },
        { time: "06:00", temperature: 22, feed: 70 },
        { time: "07:00", temperature: 25, feed: 72 },
        { time: "08:00", temperature: 27, feed: 73 },
        { time: "09:00", temperature: 28, feed: 71 },
        { time: "10:00", temperature: 26, feed: 69 },
        { time: "11:00", temperature: 24, feed: 68 },
        { time: "12:00", temperature: 22, feed: 70 },
    ];

    // Extract labels, temperature, and feed values from the data
    const labels = data.map((dataPoint) => dataPoint.time);
    const temperatures = data.map((dataPoint) => dataPoint.temperature);
    const feeds = data.map((dataPoint) => dataPoint.feed);

    // Create the chart
    const ctx = document
        .getElementById("feedTemperatureChart")
        .getContext("2d");
    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Temperature",
                    data: temperatures,
                    borderColor: "rgb(75, 192, 192)",
                    fill: false,
                },
                {
                    label: "feed",
                    data: feeds,
                    borderColor: "rgb(54, 162, 235)",
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax:
                        Math.max(
                            Math.max(...temperatures),
                            Math.max(...feeds)
                        ) + 10,
                },
            },
        },
    });
}
