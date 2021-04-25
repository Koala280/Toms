window.onscroll = function() {scrollanimation()};

function scrollanimation() {
    if (document.body.scrollTop || document.documentElement.scrollTop) {
        document.getElementById("idNav").className = "dark";
    } else {
        document.getElementById("idNav").className = "";
    }
}

function sendAlert() {
    var buttonAlert_E = document.getElementById('idInputAlert').value;
    alert(buttonAlert_E);
}

function changeColor() {
    document.getElementById("hideMe").style.color = "#ff0000";
}

function hideDiv() {
    var hide_E = document.getElementById("hideMe");
    hide_E.style.display = hide_E.style.display == 'block' ? 'none' : 'block';

}

function showDate() {
    var now = new Date(),
		mySecs = now.getSeconds(),
		curHour = now.getHours(),
		curMin = now.getMinutes(),
		day = now.getDay(),
		date = now.getDate(),
		year = now.getFullYear(),
		month = now.getMonth();
		days = new Array();
			days[0] = "Sonntag";
			days[1] = "Montag";
			days[2] = "Dienstag";
			days[3] = "Mittwoch";
			days[4] = "Donnerstag";
			days[5] = "Freitag";
			days[6] = "Samstag";
		var suffix = "AM";

			if(mySecs < 10) {
				mySecs = "0" + mySecs;
			}

			if(curMin < 10) {
				curMin = "0" + curMin;
			}

			if(curHour == 12 && curMin >= 1) {
				suffix = "PM";
			}

			if(curHour == 24 && curMin >= 1) {
				curHour -= 12;
				suffix = "AM";
			}

			if(curHour > 12) {
				curHour -= 12;
				suffix = "PM";
			}

document.getElementById('idDate').innerHTML = ("Wir haben " + days[day] + ", den " + (month +1) + ". " + date + ". "  + year + "     und es ist " + curHour + "." + curMin + ":" + mySecs + " " + suffix + " Uhr");

}

function testForSchleife() {
    var changeFontSize_E = document.getElementsByClassName('cElementForSchleife');
    for (var i = 0; i < changeFontSize_E.length; i++) {
      changeFontSize_E[i].style.color = "blue";
      changeFontSize_E[i].innerHTML = "ich bin immernoch das selbe Element";
    }
}

function ausrechnen() {
    var
    zahl1_I = parseFloat(document.querySelector('#idRechnerInput1').value),
    zahl2_I = parseFloat(document.querySelector('#idRechnerInput2').value),
    operator_E = document.querySelector('#idOperatorsCalc').value,
    rechnung_I;

    if (operator_E == "add") {
        rechnung_I = zahl1_I + zahl2_I;
    } else if (operator_E == "min") {
        rechnung_I = zahl1_I - zahl2_I;
    } else if (operator_E == "mul") {
        rechnung_I = zahl1_I * zahl2_I;
    } else if (operator_E == "div") {
        rechnung_I = zahl1_I / zahl2_I;
    }
    alert (rechnung_I);
}


function inputCheck1() {
    var newVal = document.getElementById('idRechnerInput1').value;
    document.getElementById('idRechnerInput1').value = newVal.replace(/[^0-9]+\./g, "")   
}

function inputCheck2() {
    var newVal1 = document.getElementById('idRechnerInput2').value;
    document.getElementById('idRechnerInput2').value = newVal1.replace(/[^0-9]+\./g, "")  
}

function checkLogin() {
    $checkLogin = document.getElementById('idCheckLogin');
    document.getElementById('idCheckLogin').style.display = "block";
}