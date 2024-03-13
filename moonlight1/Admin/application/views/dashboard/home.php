<!-- CONTENT -->
<script src="<?php echo base_url()?>assets/pie/modernizr.min.js"></script>
<script src="<?php echo base_url()?>assets/pie/jquery.min.js"></script>
        <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Dashboard</h1>
                            <small class="text-muted">Welcome to Webmarket application</small>
                        </div>
                    </div>
                </div>
				
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
            <a href="<?php echo site_url() ?>/usercontrol/" style="text-decoration:none;color:#FFFFFF">
						    <div class="boxs-body text-center">
								 <i class="fa fa-users fa-3x"></i>
                                <h3 class="mt-0"><?php echo count($totalUser); ?></h3>
                                <p>Total User</p>
           					</div>
						  </a>	
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                     <a href="<?php echo site_url() ?>/orderControl/" style="text-decoration:none;color:#FFFFFF">
						    <div class="boxs-body text-center">
							 <i class="fa fa-shopping-cart fa-3x"></i>
                                <h3 class="mt-0"><?php echo count($totalOrder); ?></h3>
                                <p>Orders</p>
                            </div>
					</a>		
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
        <a href="<?php echo site_url() ?>/" style="text-decoration:none;color:#FFFFFF">

		                    <div class="boxs-body text-center">
								<i class="glyphicon glyphicon-signal fa-3x"></i>
                                <h3 class="mt-0"> <?php echo count($totalUserOnline);?></h3>
                                <p>Online User</p>
                            </div>
		</a>					
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
		<a href="<?php echo site_url() ?>/feedbackcontrol" style="text-decoration:none;color:#FFFFFF">
                            <div class="boxs-body text-center">
								 <i class="fa fa-comments fa-3x"></i>
                                <h3 class="mt-0"><?php echo count($totalFeed) ?></h3>
                                <p>Total Feedbacks</p>
                            </div>
						</a>	
                            
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-cyan">
                                    <strong>My </strong>Order</h3>
			
				            </div>
                            <div class="boxs-body">
                                <div class="row">

<!--Chart --->						<div id="live-poll-area">
										<div class="graph-container">
											<div class="graph"></div>
										</div>
										<div class="answer-list"></div>
										
									</div>
<!--Chart --->	
								</div>
                                
                            </div>
                        </section>
                    </div>
                    
                </div>
                
                
                
                
                
                
                
            </div>
        </section>
    </div>

<style>

#live-poll-area {
  overflow: auto;
}
.graph-container {
  display: none;
}
.canvas .graph-container {
  display: block;
}
.graph-container .graph {
  width: 310px;
  margin: 0 auto 25px auto;
}
.graph-container .graph canvas {
  max-width: 310px;
  height: auto;
}
.bar-chart {
  list-style-type: none;
  margin: 0 auto;
  padding: 0;
  max-width: 244px;
}
.bar-chart li {
  margin: 0;
  padding: 0;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.45;
  overflow: auto;
}
.bar-chart span {
  display: block;
}
.bar-chart .label {
  font-weight: 700;
  width: 70%;
  float: left;
}
.bar-chart .percentage {
  width: 30%;
  float: right;
  font-size: 12px;
  text-align: right;
}
.bar-chart .bar-track {
  clear: both;
  display: block;
  background: #e6f0f2;
  box-shadow: 0 2px 0 #cccccc;
  height: 5px;
  overflow: visible;
  margin-bottom: 20px;
}
.bar-chart .bar {
  display: block;
  height: 5px;
}
.bar-chart .answer-0 .bar {
  background-color: #ce0f42;
  box-shadow: 0 2px 0 #99102e;
}
.bar-chart .answer-1 .bar {
  background-color: #72be44;
  box-shadow: 0 2px 0 #538e32;
}
.bar-chart .answer-2 .bar {
  background-color: #f15637;
  box-shadow: 0 2px 0 #bd4429;
}
.bar-chart .answer-3 .bar {
  background-color: #8b1851;
  box-shadow: 0 2px 0 #53002c;
}

@media only screen and (min-width: 900px) {
  .canvas .graph-container .graph {
    margin: 0 30px;
    padding: 0;
    float: left;
  }
  .canvas .bar-chart {
    float: left;
    min-width: 244px;
  }
}
</style>
<script>
var percentageArray = new Array();
percentageArray.push(<?php echo number_format((count($orderPending)/count($totalOrder)*100),2); ?>);
percentageArray.push(<?php echo number_format((count($orderConfirm)/count($totalOrder)*100),2); ?>);
percentageArray.push(<?php echo number_format((count($orderDelivered)/count($totalOrder)*100),2); ?>);
percentageArray.push(<?php echo number_format((count($orderDispatch)/count($totalOrder)*100),2); ?>);

var answerArray = new Array();
answerArray.push('Order Pending');
answerArray.push('Order Confirm');
answerArray.push('Order Delivered');
answerArray.push('Order Dispatch');


$.fn.createBarchart = function (optionvariables) {
  var chartContainer = $(this);
  var defaults = {
    'maxWidth': 244
  };
  var options = $.extend({}, defaults, optionvariables);
  var self = $(this),
      graphContainer = self.parent().find('.graph-container .graph'),
      barChart = $('<ul/>', { class: 'bar-chart' });
    
  barChart.appendTo(chartContainer);
    
  $.each(answerArray, function(index, value) {
    var chartAnswer = $('<li/>', { class: 'answer-' + index }),
        answerLabel = $('<span/>', { class: 'label', text: value }),
        percentageValue = percentageArray[index].toString(),
        answerPercentage = $('<span/>', { class: 'percentage', text: percentageValue.replace('.', ',') + '%' }),
        barTrack = $('<span/>', { class: 'bar-track' }),
        bar = $('<span />', { class: 'bar', style: 'width: ' + percentageValue + '%;' });
    
    chartAnswer.appendTo(barChart);
    answerLabel.appendTo(chartAnswer);
    answerPercentage.appendTo(chartAnswer);
    barTrack.appendTo(chartAnswer);
    bar.appendTo(barTrack);
  });
  
  if($('html').hasClass('canvas')) {
    barChart.chart(
      {
        graphContainer: graphContainer
      }
    );
  }
};

$.fn.chart = function (optionvariables) {
  var chart = $(this);
  var defaults = {
    'canvasSize': 220,
    'graphContainer': $('.graph-container .graph')
  };
  var options = $.extend({}, defaults, optionvariables);
  
  return chart.each(function () {
    var listItem = chart.find('li'),
        listItems = listItem.length,
        canvas = document.createElement('canvas'),
        canvasWidth = options.canvasSize,
        canvasHeight = options.canvasSize,
        graphContainer = options.graphContainer,
        total = 0,
        totalPercentage = 0,
        data = [],
        newData = [],
        i = 0,
        startingAngle,
        arcSize,
        endingAngle;

    $.each(percentageArray, function(index, value) {
      newData.push(3.6 * value);
    });
    
    function sumTo(a, i) {
      var sum = 0;
      for (var j = 0; j < i; j++) {
        sum += a[j];
      }
      return sum - 90;
    }
    
    function degreesToRadians(degrees) {
      return ((degrees * Math.PI)/180);
    }
    
    canvas.setAttribute('width', canvasWidth);
    canvas.setAttribute('height', canvasHeight);
    canvas.setAttribute('id', 'chartCanvas');
    graphContainer.append(canvas);
    
    var cvs = document.getElementById('chartCanvas'),
        ctx = cvs.getContext('2d'),
        centerX = canvasWidth / 2,
        centerY = canvasHeight / 2,
        radius = canvasWidth / 2;
    
    ctx.clearRect(0, 0, canvasWidth, canvasHeight);
    
    listItem.each(function(e) {
      startingAngle = degreesToRadians(sumTo(newData, i));
      arcSize = degreesToRadians(newData[i]);
      endingAngle = startingAngle + arcSize;
      ctx.beginPath();
      ctx.moveTo(centerX, centerY);
      ctx.arc(centerX, centerY, radius, startingAngle, endingAngle, false);
      ctx.closePath();
      ctx.fillStyle = $(this).find('.bar').css('backgroundColor');
      ctx.fill();
      ctx.restore();
      i++;
    });
    
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius * .45, 0, 2 * Math.PI, false);
    ctx.closePath();
    ctx.fillStyle = $('body').css('backgroundColor');
    ctx.fill();
  });
};

$('#live-poll-area .answer-list').createBarchart();
</script>
    <!-- Vendor JavaScripts -->
    <script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="<?php echo base_url();?>assets/bundles/flotscripts.bundle.js"></script>    
    <script src="<?php echo base_url();?>assets/bundles/d3cripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/sparkline.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/raphael.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/morris.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/js/page/index.js"></script>     
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:55:29 GMT -->
</html>