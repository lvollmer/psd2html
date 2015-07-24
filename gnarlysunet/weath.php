<?php require 'header.php'; ?>

<div class="container">    
    <div class="row">
		<div class="hor-space"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hour-forcast-left">
            <div class="max-width">
                <img src="images/songs.jpg" width="300" height="250" alt=" " class="img-responsive"/>
				<div class="hor-space"></div>
                <h3 class="black-title">More Info on City, State, Country (Zip Code)</h3>
				<?php include './inc/nav-sidebar.php'; ?>
				
            </div>            
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 hour-forcast-right">
			<div class="row max-width">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="black-title">Hourly Weather Forecast for City, State, Country (Zip Code)</h2>					
					</div>
				</div>
				<script type="text/javascript">
					$(function() {
						var $items = $('#vtab>ul>li');
						$items.mouseover(function() {
							$items.removeClass('selected');
							$(this).addClass('selected');

							var index = $items.index($(this));
							$('#vtab-right>div').hide().eq(index).show();
						}).eq(1).mouseover();
					});
					$(document).ready(function() {
						$('#hour-forcast-options').change(function(e) {
							var index = $("#hour-forcast-options").val();
							$('#vtab-right>div').hide().eq(index).show();
						});
					});
				</script>
				<div class="row vtab">
					<div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
						<div id="vtab">
							<select id="hour-forcast-options" class="form-control">
								<option value="0">Current Temperature</option>
								<option value="1">Hourly Forecast</option>
								<option value="2">Tomorrow's Weather Forecast</option>
								<option value="3">Weekend Forecast</option>
								<option value="4">5 Day Forecast</option>
								<option value="5">10 Day Forecast</option>
								<option value="6">Hourly Forecast</option>
								<option value="7">Wind Speed</option>
								<option value="8">Cloud Cover (%)</option>
								<option value="9">Chance of Precipitation (%)</option>
								<option value="10">Current Humidity</option>
								<option value="11">Dew Point</option>
								<option value="12">Average Monthly Temperatures</option>
								<option>All Time Highs and Lows for Today</option>
							</select>							
						</div>
					</div>
					<div class="col-lg-4 col-md-4 hidden-sm hidden-xs">						
						<div class="vtab-left" id="vtab">
							<ul>
								<li>Current Temperature</li>
								<li>Hourly Forecast</li>
								<li>Tomorrow's Weather Forecast</li>
								<li>Weekend Forecast</li>
								<li>5 Day Forecast</li>
								<li>10 Day Forecast</li>
								<li>Hourly Forecast</li>
								<li>Wind Speed</li>
								<li>Cloud Cover (%)</li>
								<li>Chance of Precipitation (%)</li>
								<li>Current Humidity</li>
								<li>Dew Point</li>
								<li>Average Monthly Temperatures</li>
								<li>All Time Highs and Lows for Today</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="vtab-right" id="vtab-right">
							<?php include './inc/hour-forcast-weather.php'; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="search-section">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 search-section-left">
									<h2>Link to something</h2>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 search-section-center">
									<input type="text" name="Search to See Weather in Another Location" id="Search to See Weather in Another Location" class="form-control" onblur="if (this.value == '')
												this.value = 'Search to See Weather in Another Location';" value="Search to See Weather in Another Location" onfocus="if (this.value == 'Search to See Weather in Another Location')
															this.value = '';"/>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 search-section-right text-center">
									<input type="button" name="search2" id="search2" value="Search Now" class="btn">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?php include './inc/box-blogs.php'; ?>
					</div>					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<?php include './inc/box-pictures.php'; ?>
					</div>					
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hour-forcast-right-bottom">
						<img src="images/add.gif" width="690" height="90" class="img-responsive">
					</div>
				</div>
			</div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>