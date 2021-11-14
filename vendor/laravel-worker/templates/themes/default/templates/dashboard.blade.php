@include('themes.'.$app_theme.'.partials.topbar')
<div class="p-2 inline-block w-full h-full">
    @for ($i = 1; $i <= 30; $i++)
        <div class="inline-block w-60 h-64">
            <div class="bg-blue-500 m-1 rounded-lg overflow-hidden">
                <div class="p-2 text-center bg-blue-400 justify-center text-sm font-medium text-blue-900">Pie chart</div>
                <canvas class="p-2 bg-blue-300" id="chart_{{ $i }}"></canvas>
            </div>
        </div>
    @endfor
</div>


    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart pie -->
    <script>
        const labelsBarChart = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        const dataBarChart = {
            labels: labelsBarChart,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'hsl(252, 82.9%, 67.8%)',
                borderColor: 'hsl(252, 82.9%, 67.8%)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const configBarChart = {
            type: 'bar',
            data: dataBarChart,
            options: {}
        };

        const dataPie = {
            labels: [
                'JavaScript',
                'Python',
                'Ruby'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(133, 105, 241)',
                    'rgb(164, 101, 241)',
                    'rgb(101, 143, 241)'
                ],
                hoverOffset: 4
            }]
        };

        const configPie = {
            type: 'pie',
            data: dataPie,
            options: {}
        };


        @for ($i = 1; $i <= 30; $i++)
            var chartBar = new Chart(
            document.getElementById('chart_{{ $i }}')
            ,{{ collect(['configPie', 'configPie'])->random() }}
            );
        @endfor
    </script>
