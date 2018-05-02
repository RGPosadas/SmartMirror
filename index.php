<!DOCTYPE html>
<html>

<head>
    <!--Link the owfont icons to the weather ID names-->
	<link href="/owfont-master/css/owfont-regular.css" rel="stylesheet" type="text/css">
<style>
	body {
        font-family: "Calibri";
		font-size: 30px;
		background-color: black;
		color: white;
		}
	
	.time {
		position: absolute;
		left: 5px;
		top: 5px;
		font-size: 60px;
	}
	
	.current_date{
		position: absolute;
		left: 5px;
		top: 62px;
	}
	
	.current_weather {
		float: right;
	}
	
	.daily_min_temp {
		float:right;
		color: #82CAFA;
		}

	.daily_max_temp {
		float:right;
		color: #E77471;
		}

	.daily_day {
		float:right;
		}

	.daily_icon {
		float:right;
		}
		
	.border{
		width: 320px;
		border: 0px;
	}
	
	.GC_time{
		float:left;
	}
	
	.GC_title{
		font-size: 25px;
		color: #DCDCDC;
		float:left;
	}
	
	.greeting {
		position:absolute;
		bottom: 40px;
		left: 50%;
		margin-left: -75px;
		}

</style>
</head>

<body>

<!--Refreshes the page by x seconds-->
	<meta http-equiv="refresh" content="60"/>

<!--Sets the date/time-->
	<?php
        date_default_timezone_set('America/New_York');
        error_reporting(0);
		echo '<div class="time">' .date('g:i A'). '</div>';
		echo '<div class="current_date">' .date('l, F d'). '</div>';
	?>                                 


<!--Current weather information from OpenWeatherMap JSON to PHP-->
	<?php
			$json_data0 = file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat=45.4972&lon=-73.6104&appid=17c76c6a0fb63ffe20fef8a999fe1d4b&units=metric');
			$decoded_current_data = json_decode($json_data0, true);
		
			echo '<div class="current_weather">';
			$current_temperature = round($decoded_current_data['main']['temp']);
				if ($current_temperature == "-0") {
				echo "0", "&deg;C", "<br>";
				}
				else {
				echo "$current_temperature", "&deg;C", "<br>";
				}
			echo round($decoded_current_data['wind']['speed']*3.6). " km/h", "<br>";
			echo '</div>';
	?>

	<div style="float:right"> 
		<i class="owf owf-<?php echo $decoded_current_data['weather'][0]['id'];?> owf-3x"></i>
	</div>

<br/><br/><br/>

<!--Daily weather information from OpenWeatherMap JSON to PHP-->
	<!--Sets the daily lows-->
	<div class="daily_min_temp">
		<?php
			$json_data1 = file_get_contents('http://api.openweathermap.org/data/2.5/forecast/daily?q=dollard-des-ormeaux&mode=json&units=metric&cnt=7&appid=867ab0ac78f7cf5d0a66d5b3500b7622');
			$decoded_daily_data = json_decode($json_data1,true);

			$dailymin_temperature_0 = round($decoded_daily_data['list'][0]['temp']['min']);
				if ($dailymin_temperature_0 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_0", "<br>";
				}
			$dailymin_temperature_1 = round($decoded_daily_data['list'][1]['temp']['min']);
				if ($dailymin_temperature_1 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_1", "<br>";
				}
			$dailymin_temperature_2 = round($decoded_daily_data['list'][2]['temp']['min']);
				if ($dailymin_temperature_2 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_2", "<br>";
				}
			$dailymin_temperature_3 = round($decoded_daily_data['list'][3]['temp']['min']);
				if ($dailymin_temperature_3 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_3", "<br>";
				}
			$dailymin_temperature_4 = round($decoded_daily_data['list'][4]['temp']['min']);
				if ($dailymin_temperature_4 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_4", "<br>";
				}
			$dailymin_temperature_5 = round($decoded_daily_data['list'][5]['temp']['min']);
				if ($dailymin_temperature_5 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_5", "<br>";
				}
			$dailymin_temperature_6 = round($decoded_daily_data['list'][6]['temp']['min']);
				if ($dailymin_temperature_6 == "-0") {
				echo "0", "<br>";
				} else {
				echo "$dailymin_temperature_6", "<br>";
				}
		?>
	</div>
	
	<!--Sets the daily highs-->
	<div class="daily_max_temp">
		<?php
			$json_data1 = file_get_contents('http://api.openweathermap.org/data/2.5/forecast/daily?q=dollard-des-ormeaux&mode=json&units=metric&cnt=7&appid=867ab0ac78f7cf5d0a66d5b3500b7622');
			$decoded_daily_data = json_decode($json_data1,true);

			$dailymax_temperature_0 =  round($decoded_daily_data['list'][0]['temp']['max']);
				if ($dailymax_temperature_0 == "-0") {
				echo "0", "<br>", " ";
				} else {
				echo "$dailymax_temperature_0", " ", "<br>";
				}
			$dailymax_temperature_1 =  round($decoded_daily_data['list'][1]['temp']['max']);
				if ($dailymax_temperature_1 == "-0") {
				echo "0", " ", "<br>";
				} else {
				echo "$dailymax_temperature_1", " ", "<br>";
				}
			$dailymax_temperature_2 =  round($decoded_daily_data['list'][2]['temp']['max']);
				if ($dailymax_temperature_2 == "-0") {
				echo "0", " ", "<br>";
				} else {
				echo "$dailymax_temperature_2", " ", "<br>";
				}
			$dailymax_temperature_3 =  round($decoded_daily_data['list'][3]['temp']['max']);
				if ($dailymax_temperature_3 == "-0") {
				echo "0", " ", "<br>";
				} else {
				echo "$dailymax_temperature_3", " ", "<br>";
				}
			$dailymax_temperature_4 =  round($decoded_daily_data['list'][4]['temp']['max']);
				if ($dailymax_temperature_4 == "-0") {
				echo "0", " ", "<br>";
				} else {
				echo "$dailymax_temperature_4", " ", "<br>";
				}
			$dailymax_temperature_5 =  round($decoded_daily_data['list'][5]['temp']['max']);
				if ($dailymax_temperature_5 == "-0") {
				echo "0", " ", "<br>";
				} else {
				echo "$dailymax_temperature_5", " ", "<br>";
				}
			$dailymax_temperature_6 =  round($decoded_daily_data['list'][6]['temp']['max']);
				if ($dailymax_temperature_6 == "-0") {
				echo "0", " ", "<br>";
				} else {
				echo "$dailymax_temperature_6", " ", "<br>";
				}
		?>
	</div>

	<!--Sets the corresponding days to the daily forecasts-->
	<div class="daily_day">
		<?php
			echo date('D'). "<br>";
			echo date(('D'), strtotime("+1 days")). " " ,"<br>";
			echo date(('D'), strtotime("+2 days")). " " ,"<br>";
			echo date(('D'), strtotime("+3 days")). " " ,"<br>";
			echo date(('D'), strtotime("+4 days")). " " ,"<br>";
			echo date(('D'), strtotime("+5 days")). " " ,"<br>";
			echo date(('D'), strtotime("+6 days")). " " ,"<br>";
		?>
	</div>

	<!--Sets the corresponding icon to the weather-->
	<div class="daily_icon"> 
		<i class="owf owf-<?php echo $decoded_daily_data['list'][0]['weather'][0]['id'];?> owf-lg"></i> <br/>
		<i class="owf owf-<?php echo $decoded_daily_data['list'][1]['weather'][0]['id'];?> owf-lg"></i> <br/>
		<i class="owf owf-<?php echo $decoded_daily_data['list'][2]['weather'][0]['id'];?> owf-lg"></i> <br/>
		<i class="owf owf-<?php echo $decoded_daily_data['list'][3]['weather'][0]['id'];?> owf-lg"></i> <br/>
		<i class="owf owf-<?php echo $decoded_daily_data['list'][4]['weather'][0]['id'];?> owf-lg"></i> <br/>
		<i class="owf owf-<?php echo $decoded_daily_data['list'][5]['weather'][0]['id'];?> owf-lg"></i> <br/>
		<i class="owf owf-<?php echo $decoded_daily_data['list'][6]['weather'][0]['id'];?> owf-lg"></i> <br/>
	</div>

<!--Google Calendar API-->
		<?php
			$json_data2 = file_get_contents('https://www.googleapis.com/calendar/v3/calendars/ritchelle.posadas%40gmail.com/events?key=AIzaSyBXlbkrZmKw5rYG8KaXHSwGZB1sicBgV0o');
			$decoded_calendar_data = json_decode($json_data2, true);

			echo "Today's events...", "<br>", "<br>";
			
			/*Gets all event informations. $i variable to any number*/
			$array_calendar = array();
    
			for ($i = 0; $i < count($decoded_calendar_data['items']); $i++) 
			{
                
                if (strcmp(date('M d Y',strtotime($decoded_calendar_data['items'][$i]['start']['dateTime'])),(date('M d Y',strtotime("today")))) == 0)
                {
                    $array_calendar[$i]['date'] = date('M d', strtotime($decoded_calendar_data['items'][$i]['start']['dateTime']));
                    //echo "<br/>";
                    
                    $array_calendar[$i]['title'] = $decoded_calendar_data['items'][$i]['summary'];
                    //echo "<br/>";
                    
                    $array_calendar[$i]['start'] = date('g:i A', strtotime($decoded_calendar_data['items'][$i]['start']['dateTime']));
                    //echo "<br/>";
                    
                    $array_calendar[$i]['end'] = date('g:i A', strtotime($decoded_calendar_data['items'][$i]['end']['dateTime']));
                    //echo count($array_calendar)."<br/>";
                    //echo "<br/>";
                    //echo "<br/>";
                }
            }
			
			/*Compares the time value of each event, giving each event a specific number*/
			function SortDate($a, $b) 
			{
				$a = strtotime($a['start']);
				$b = strtotime($b['start']);
				
				if ($a == $b)
				{
					return 0;
				}
				if ($a < $b)
				{
					return -1;
				}
				if ($a > $b)
				{
					return 1;
				}
			}
			usort($array_calendar, "SortDate"); /*Sorts the events using the numbers outputted by the comparator*/
			
            //echo "<br/>".count($array_calendar);
			/*Shows a maximum of only 6 events for the day*/
			//$array_calendar = array_slice($array_calendar, 0, 6);
			for ($i = 0; $i < count($array_calendar); $i++)
            {
					echo '<div class="border">';
					echo '<div class="GC_time">' .$array_calendar[$i]['start']. " - " .$array_calendar[$i]['end']. '</div>';
					echo "<br>", '<div class="GC_title">' .$array_calendar[$i]['title']. '</div>', "<br>", "<br>";
			}

		?>



<!--Sets the messages during specific time intervals-->
	<div class="greeting">
		<?php
			$time=date('G');
		
			if ($time<"8") 
            {
			echo "Good morning!";
			}
		
			elseif ($time<"12") 
            {
			echo "Have a nice day!";
			}
				
			elseif ($time<"16") 
            {
			echo "Good afternoon!";
			}
	
			elseif ($time<"18") 
            {
			echo "Welcome back!";
			}
		
			else  
            {
			echo "Good evening!";
			}
		?>                              
	</div>


<!--</font>-->
</body>

</html>
