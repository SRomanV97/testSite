<footer class="container pt-4 my-md-5 pt-md-5 border-top">
  <script>
	
	  var months = new Array(13);
	  months[1] = "января";
	  months[2] = "февраля";
	  months[3] = "марта";
	  months[4] = "апреля";
	  months[5] = "мая";
	  months[6] = "июня";
	  months[7] = "июля";
	  months[8] = "августа";
	  months[9] = "сентября";
	  months[10] = "октября";
	  months[11] = "ноября";
	  months[12] = "декабря";
	  
	  var time = new Date();
	  var thismonth = months[time.getMonth() + 1];
	  var date = time.getDate();
	  var thisyear = time.getYear();
	  var day = time.getDay() + 1;
	  
	  if (thisyear < 2000)
      	  thisyear = thisyear + 1900;
  	  if (day == 1) DayofWeek = "Воскресенье";
  	  if (day == 2) DayofWeek = "Понедельник";
  	  if (day == 3) DayofWeek = "Вторник";
      if (day == 4) DayofWeek = "Среда";
      if (day == 5) DayofWeek = "Четверг";
      if (day == 6) DayofWeek = "Пятница";
      if (day == 7) DayofWeek = "Суббота";
	  
	</script> 
	
	<script>
	
	   setInterval(function(){
		   var cd = new Date();
		   var clockdat = document.getElementById("clockdat");
		   clockdat.innerHTML = cd.toLocaleTimeString();
	   }, 1000);	
		
	</script>
	
	<div class = "advantage flex">
		<span>Сегодня: 
			<script>
				
				document.write(date+" ");
				document.write(thismonth+" "+thisyear+" "+"года"+"-"+DayofWeek);
			
			</script>
			<span class = "spancolor" id="clockdat"></span>
		</span>
	</div>
  </footer>