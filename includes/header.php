<p>Airline Management System</p>
<img src="airline.jpg"  >
<div id="date">
	<script>
		date=new Date();
		day=date.getDate();
		month=date.getMonth()+1;
		year=date.getFullYear();
		document.write("Todays Date is "+day+" / "+month+" / "+year+" <br><br>");
		
		
		time=new Date();
		hours=time.getHours();
		minute=time.getMinutes();
		second=time.getSeconds();
		
		if(minute<10)
		{
			minute="0 "+minute;
		}
		if(second<10)
		{
			second="0 "+second;
			
			
		}
		
		if(hours<12)
		{
			sort="AM";
			
		}
		else
		{
			sort="PM";
		}
		
		if(hours>12)
		{
			hours=hours-12;
		}
		
		document.write("Time  "+hours+":"+minute+":"+second+":"+sort);
	</script>
</div>