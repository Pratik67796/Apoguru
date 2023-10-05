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

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Total number of subscriptions per parent sub categories against time</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <div id="container" style="width: 900px; height: 500px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
<script>
  
anychart.onDocumentReady(function() {

    // set the data
    var data = {
      header: ["Name", "Suscribers"],
      rows: [
        <?php echo $parent?>
        // ["Saddd", 10],
        // ["Messina (1908)", 87000],
        // ["Ashgabat (1948)", 175000],
        // ["Chile (1960)", 10000],
        // ["Tian Shan (1976)", 242000],
        // ["Armenia (1988)", 25000],
        // ["Iran (1990)", 50000]
    ]};

    // create the chart
   var chart = anychart.bar();

    // add data
    chart.data(data);

    // set the chart title
    chart.title("Total number of subscriptions per parent sub categories against time");


  // draw
  chart.container("container");
  chart.draw();
});
</script>
@endsection