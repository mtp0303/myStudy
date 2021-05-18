//시계
function printClock() {
    
    var clock = document.getElementById("clock");
    if (clock){
        var currentDate = new Date();                          
        var calendar = currentDate.getFullYear() + "-" + (currentDate.getMonth()+1) + "-" + currentDate.getDate()
        var amPm = 'AM';
        var currentHours = addZeros(currentDate.getHours(),2); 
        var currentMinute = addZeros(currentDate.getMinutes() ,2);
        var currentSeconds =  addZeros(currentDate.getSeconds(),2);

        if(currentHours >= 12){ // 시간이 12보다 클 때 PM으로 세팅, 12를 빼줌
            amPm = 'PM';
            currentHours = addZeros(currentHours - 12,2);
        }

        clock.innerHTML = currentHours+":"+currentMinute+":"+currentSeconds +" <span style='font-size:50px;'>"+ amPm+"</span>";

        setTimeout("printClock()",1000); //1초마다 함수 실행
        }
    
}
//자릿수 맞추기
function addZeros(num, digit) {
	  var zero = '';
	  num = num.toString();
	  if (num.length < digit) {
	    for (i = 0; i < digit - num.length; i++) {
	      zero += '0';
	    }
	  }
	  return zero + num;
}
