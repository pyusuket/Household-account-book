<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-500 ">
        <div class="flex justify-between w-7/12 mx-auto">
            <a href="{{ route("dashboard" , $prev) }}"><<</a>
            <div class=" text-center text-gray-200">{{$displayDate}}</div>
            <a href="{{ route("dashboard" , $next) }}">>></a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="donutchart" style="width: 500px; height: 500px;"></div>
                <div id="donutchart1" style="width: 500px; height: 500px;"></div>
            </div>
            <div>
                <div id="donutchart2" style="width: 500px; height: 500px;"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable({!! $items !!});

        var options = {
          title: '変動費',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);

        var data1 = google.visualization.arrayToDataTable({!! $items1 !!});

        var options1 = {
          title: '固定費',
          pieHole: 0.4,
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart1.draw(data1, options1);

        var data2 = google.visualization.arrayToDataTable({!! $items2 !!});

        var options2 = {
          title: '収入',
          pieHole: 0.4,
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart2.draw(data2, options2);

      }
    </script>

</x-app-layout>
