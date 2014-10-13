<?$date = date_create('2014-09-14');
				date_add($date, date_interval_create_from_date_string('100 day'));
				echo date_format($date, 'Y-m-d');?>