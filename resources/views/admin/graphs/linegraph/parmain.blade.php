@extends('admin.layouts.master')

@section('title')
apoGuru - Graph
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Line-Graphs</h2>
        </div>
        <body>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </body>
    </div>
</section>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        theme:"light2",
        animationEnabled: true,
        title:{
            text: "Total number of subscriptions per main categories against time"
        },
        axisY :{
            title: "Number of Viewers",
            suffix: "mn"
        },
        toolTip: {
            shared: "true"
        },
        legend:{
            cursor:"pointer",
            itemclick : toggleDataSeries
        },
        data: [{
            type: "spline",
            visible: false,
            showInLegend: true,
            yValueFormatString: "##.00mn",
            name: "Season 1",
            dataPoints: [
                { label: "Ep. 1", y: 2.22 },
                { label: "Ep. 2", y: 2.20 },
                { label: "Ep. 3", y: 2.44 },
                { label: "Ep. 4", y: 2.45 },
                { label: "Ep. 5", y: 2.58 },
                { label: "Ep. 6", y: 2.44 },
                { label: "Ep. 7", y: 2.40 },
                { label: "Ep. 8", y: 2.72 },
                { label: "Ep. 9", y: 2.66 },
                { label: "Ep. 10", y: 3.04 }
            ]
        },
        {
            type: "spline", 
            showInLegend: true,
            visible: false,
            yValueFormatString: "##.00mn",
            name: "Season 2",
            dataPoints: [
                { label: "Ep. 1", y: 3.86 },
                { label: "Ep. 2", y: 3.76 },
                { label: "Ep. 3", y: 3.77 },
                { label: "Ep. 4", y: 3.65 },
                { label: "Ep. 5", y: 3.90 },
                { label: "Ep. 6", y: 3.88 },
                { label: "Ep. 7", y: 3.69 },
                { label: "Ep. 8", y: 3.86 },
                { label: "Ep. 9", y: 3.38 },
                { label: "Ep. 10", y: 4.20 }
            ]
        },]
    });
    chart.render();
    
    function toggleDataSeries(e) {
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        chart.render();
    }
    
    }
    </script>
@endsection
