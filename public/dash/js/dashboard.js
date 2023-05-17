google.charts.load('current', {'packages':['gauge', 'corechart', 'table', 'charteditor']});
google.charts.setOnLoadCallback(drawFeedChart);
google.charts.setOnLoadCallback(drawTemperatureChart);
google.charts.setOnLoadCallback(drawWaterChart);
google.charts.setOnLoadCallback(drawTempLine);
google.charts.setOnLoadCallback(drawWaterBarChart);
google.charts.setOnLoadCallback(drawTempTable);
google.charts.setOnLoadCallback(drawWaterTable);
google.charts.setOnLoadCallback(drawAudioTable);
google.charts.setOnLoadCallback(drawFeedTable);

function drawFeedChart() {

    var data = google.visualization.arrayToDataTable([
      ['Label', 'Value'],
      ['Feed', 80]
    ]);

    var options = {
      width: 600, height: 200,
      redFrom: 90, redTo: 100,
      yellowFrom:75, yellowTo: 90,
      majorTicks: ['0', '20', '40', '60', '80', '100'],
      minorTicks: 5,
      title: 'Current Feed Level'
    };

    var chart = new google.visualization.Gauge(document.getElementById('feed_chart'));

    chart.draw(data, options);

    setInterval(function() {
      data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
      chart.draw(data, options);
    }, 13000);
    setInterval(function() {
      data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
      chart.draw(data, options);
    }, 5000);
    setInterval(function() {
      data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
      chart.draw(data, options);
    }, 26000);
  }

  function drawTemperatureChart() {

    var data = google.visualization.arrayToDataTable([
      ['Label', 'Value'],
      ['Temp', 80]
    ]);

    var options = {
      width: 600, height: 200,
      redFrom: 90, redTo: 100,
      yellowFrom:75, yellowTo: 90,
      minorTicks: 5,
      majorTicks: ['0', '20', '40', '60', '80', '100'],

    };

    var chart = new google.visualization.Gauge(document.getElementById('temp_chart'));

    chart.draw(data, options);

    setInterval(function() {
      data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
      chart.draw(data, options);
    }, 13000);
    setInterval(function() {
      data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
      chart.draw(data, options);
    }, 5000);
    setInterval(function() {
      data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
      chart.draw(data, options);
    }, 26000);
  }

  function drawWaterChart() {

    var data = google.visualization.arrayToDataTable([
      ['Label', 'Value'],
      ['Water', 80]
    ]);

    var options = {
      width: 600, height: 200,
      redFrom: 90, redTo: 100,
      yellowFrom:75, yellowTo: 90,
      minorTicks: 5,
      majorTicks: ['0', '20', '40', '60', '80', '100'],
    };

    var chart = new google.visualization.Gauge(document.getElementById('water_chart'));

    chart.draw(data, options);

    setInterval(function() {
      data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
      chart.draw(data, options);
    }, 13000);
    setInterval(function() {
      data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
      chart.draw(data, options);
    }, 5000);
    setInterval(function() {
      data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
      chart.draw(data, options);
    }, 26000);
  }
function drawTempLine(){
        // Define the data for the line graph
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Temperature (°C)'],
          ['00:00', 12],
          ['00:30', 13],
          ['01:00', 13],
          ['01:30', 12],
          ['02:00', 11],
          ['02:30', 10],
          ['03:00', 11],
          ['03:30', 10],
          ['04:00', 9],
          ['04:30', 8],
          ['05:00', 8],
          ['05:30', 9],
          ['06:00', 10],
          ['06:30', 11],
          ['07:00', 12],
          ['07:30', 13],
          ['08:00', 14],
          ['08:30', 14],
          ['09:00', 13],
          ['09:30', 14],
          ['10:00', 15],
          ['10:30', 16],
          ['11:00', 16],
          ['11:30', 15],
          ['12:00', 16],
          ['12:30', 17],
          ['13:00', 18],
          ['13:30', 19],
          ['14:00', 20],
          ['14:30', 21],
          ['15:00', 22],
          ['15:30', 22],
          ['16:00', 21],
          ['16:30', 20],
          ['17:00', 19],
          ['17:30', 18],
          ['18:00', 17],
          ['18:30', 16],
          ['19:00', 15],
          ['19:30', 14],
          ['20:00', 13],
          ['20:30', 12],
          ['21:00', 11],
          ['21:30', 10],
          ['22:00', 9],
          ['22:30', 8],
          ['23:00', 7],
          ['23:30', 6]
        ]);

        // Set the chart options
        var options = {
          title: 'Temperature Variation (Every 30 Minutes)',
          curveType: 'function',
          legend: { position: 'bottom' },
          hAxis: {
            title: 'Time',
            format: 'hh:mm',
            gridlines: {
              count: -1,
              units: {
                minutes: {format: ['hh:mm']}
              }
            },
            minorGridlines: {
              count: -1,
              units: {
                minutes: {format: ['hh:mm']}
              }
            }
          },
          backgroundColor: '#f1f8e9',
          vAxis: {
            title: 'Temperature (°C)'
          }
        };

        // Instantiate and draw the chart
        var chart = new google.visualization.LineChart(document.getElementById('temp_line_chart'));
        chart.draw(data, options);

}

function drawWaterBarChart() {
  var data = google.visualization.arrayToDataTable([
      ['Flock', 'Water Consumption'],
      ['Flock A', 50],
      ['Flock B', 75],
      ['Flock C', 60],
      ['Flock D', 80],
      ['Flock E', 70]
  ]);

  var options = {
      title: 'Poultry Water Consumption',
      hAxis: {title: 'Flock'},
      vAxis: {title: 'Water Consumption'},
      legend: {position: 'none'}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('water_bar_chart'));
  chart.draw(data, options);

  // Refresh the chart data every hour
  setInterval(function() {
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
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Temperature');

    // Create a new Table object and bind it to the HTML element
    var table = new google.visualization.Table(document.getElementById('temp_table'));

    // Perform an AJAX request to retrieve data from the API endpoint
    $.getJSON('https://apms-production.up.railway.app/api/temperature', function(response) {
      // Loop through the data and add it to the DataTable object
      $.each(response, function(index, value) {
        // Convert the ISO 8601 date string to a standard
        var date = new Date(value.created_at);
        var formattedDate = date.toLocaleString('en-US', {
          year: 'numeric',
          month: 'long',
          day: 'numeric',
          hour: 'numeric',
          minute: 'numeric',
          second: 'numeric',
          hour12: true
        });

        // Add the formatted date and temperature to the DataTable
        data.addRow([formattedDate, value.temperatureReading]);
      });

      // Draw the table with the updated data
      table.draw(data, {
        showRowNumber: true,
        width: '100%',
        height: '100%',
        cssClassNames: {
          'headerRow': 'google-chart-header',
          'tableRow': 'google-chart-row',
          'oddTableRow': 'google-chart-row',
          'selectedTableRow': 'google-chart-selected-row',
          'hoverTableRow': 'google-chart-hover-row',
          'headerCell': 'google-chart-header-cell',
          'tableCell': 'google-chart-cell',
          'rowNumberCell': 'google-chart-row-number'
        }
      });
    });
  }

  function drawWaterTable(){
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Water Level(ml)');

    // Perform an AJAX request to retrieve data from the API endpoint
    $.getJSON('http://127.0.0.1:8000/api/water', function(response) {
        // Loop through the data and add it to the DataTable object
        $.each(response, function(index, value) {
            var date = new Date(value.created_at);
            var formattedDate = date.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            data.addRow([formattedDate, value.waterLevelReading]);

        });

        // Create a new Table object and bind it to the HTML element
        var table = new google.visualization.Table(document.getElementById('water_table'));

        // Draw the table with the updated data
        table.draw(data, {
            showRowNumber: true,
            width: '100%',
            height: '100%',
            cssClassNames: {
                'headerRow': 'google-chart-header',
                'tableRow': 'google-chart-row',
                'oddTableRow': 'google-chart-row',
                'selectedTableRow': 'google-chart-selected-row',
                'hoverTableRow': 'google-chart-hover-row',
                'headerCell': 'google-chart-header-cell',
                'tableCell': 'google-chart-cell',
                'rowNumberCell': 'google-chart-row-number'
            }
        });
    });
}


function drawAudioTable()
{
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Audio File');

    // Add your temperature readings to the data table
    data.addRows([
      ['2023-04-01', 20.5],
      ['2023-04-02', 22.1],
      ['2023-04-03', 23.8],
      ['2023-04-04', 22.4],
      ['2023-04-05', 20.7],
      ['2023-04-06', 18.9],
      ['2023-04-07', 21.3],
      ['2023-04-08', 24.6],
      ['2023-04-09', 23.2],
      ['2023-04-10', 21.1],
      ['2023-04-11', 19.8],
      ['2023-04-12', 22.7],
      ['2023-04-13', 24.1],
      ['2023-04-14', 22.3],
      ['2023-04-15', 20.9]
    ]);

    var table = new google.visualization.Table(document.getElementById('audio_table'));

    table.draw(data, {
        showRowNumber: true,
        width: '100%',
        height: '100%',
    cssClassNames: {
      'headerRow': 'google-chart-header',
      'tableRow': 'google-chart-row',
      'oddTableRow': 'google-chart-row',
      'selectedTableRow': 'google-chart-selected-row',
      'hoverTableRow': 'google-chart-hover-row',
      'headerCell': 'google-chart-header-cell',
      'tableCell': 'google-chart-cell',
      'rowNumberCell': 'google-chart-row-number'
    }
  });
}

function drawFeedTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Feed Amount(Kgs)');

    // Perform an AJAX request to retrieve data from the API endpoint
    $.getJSON('http://127.0.0.1:8000/api/feed', function(response) {
      // Loop through the data and add it to the DataTable object
      $.each(response, function(index, value) {
        var date = new Date(value.created_at);
        var formattedDate = date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: true
        });
        data.addRow([formattedDate, value.reading]);
      });

      // Create a new Table object and bind it to the HTML element
      var table = new google.visualization.Table(document.getElementById('feed_table'));

      // Draw the table with the updated data
      table.draw(data, {
        showRowNumber: true,
        width: '100%',
        height: '100%',
        cssClassNames: {
          'headerRow': 'google-chart-header',
          'tableRow': 'google-chart-row',
          'oddTableRow': 'google-chart-row',
          'selectedTableRow': 'google-chart-selected-row',
          'hoverTableRow': 'google-chart-hover-row',
          'headerCell': 'google-chart-header-cell',
          'tableCell': 'google-chart-cell',
          'rowNumberCell': 'google-chart-row-number'
        }
      });
    });
  }

$(document).ready(function () {
    $('#example').DataTable();
});
