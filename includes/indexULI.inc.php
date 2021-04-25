<div class="cMainAngemeldet">
    
<div class="cRechner">
	<h2>Rechner</h2>
	<form>
	<input id="idRechnerInput1" type="text" placeholder="erste Zahl" onchange="inputCheck1()">
	<select name="Op" id="idOperatorsCalc">
		<option value="add">+</option>
		<option value="min">-</option>
		<option value="mul">*</option>
		<option value="div">/</option>
	</select>
	<input id="idRechnerInput2" type="text" placeholder="zweite Zahl" onchange="inputCheck2()">
	<button type="button" onclick="ausrechnen()">Calc</button>
	</form>
</div>


<div class="cButtonAlert">
	<h2>Einen Alarm ausgeben</h2>
	<p>Was in<input id="idInputAlert" type="text" placeholder="diesen Feld">eingegeben wird,</p>
	<p>wird mit<button type="button" onclick="sendAlert()">diesen Button</button>wieder ausgegeben</p>
</div>


<div>
	<h2>Sonstige coole Sachen</h2>
	<button type="button" onclick="hideDiv('hideMe')">click mich</button>
</div>


<div id="hideMe" onclick="changeColor()">
		<p>und jetzt click mich</p>
</div>


<div>
	<button type="button" onclick="showDate()">Datum aktualisieren</button>
	<p class="cDate">Datum: <span id="idDate"></span></p>
</div>

<div onclick="testForSchleife()">
	<p class="cElementForSchleife">Ich bin das erste Element</p>
	<p class="cElementForSchleife">Ich bin das zweite Element</p>
	<p class="cElementForSchleife">Und ich bin das dritte Element</p>
</div>
			
<div>
	<h2>Anmeldung Überprüfen</h2>
	<button type="button" onclick="checkLogin()">Anmedlung überprüfen</button>
	<div id="idCheckLogin">
		<p>angemeldet als <?php echo($_SESSION['ghs_t_username']); ?></p>
</div>

</div>