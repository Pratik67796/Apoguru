@extends('admin.layouts.master')

@section('title')
apoGuru - Graph
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Pai-Graphs</h2>
        </div>

     

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Courses per child subcategory</h2>
                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <div id="piechart" style="width: 900px; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</section>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
        <?php echo $childcat?>
    //   ['Work',     11],
    //   ['Eat',      2],
    //   ['Commute',  2],
    //   ['Watch TV', 2],
    //   ['Sleep',    7]
    ]);

    var options = {
      title: 'Courses per child subcategory'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

@endsection
