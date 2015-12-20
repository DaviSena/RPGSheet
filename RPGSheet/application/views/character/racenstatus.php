<!DOCTYPE html>
<html>
	<head>
		<?php echo link_tag('assets/css/principal.css'); ?>
	</head>
	
	<body>
		<section id="points">
			Choose Your Campaing Type:
			<select class="element" onchange="changePoints(this.value)">
			  <option value="10">Low Fantasy - 10 points</option>
			  <option value="15">Standard Fantasy - 15 points</option>
			  <option value="20">High Fantasy - 20 points</option>
			  <option value="25">Epic Fantasy - 25 points</option>
			</select>
			<br>
			<br>
			
			Remaining Points: <input id="totalPoints" type="text" value="0/10">
		</section>
		
		<section id="attributes">
			<table>
				<tr>
					<td>Strength</td>
					<td><button type="button" onclick="addPoint('strength')">+</button></td>
					<td><input id="strength" type="text" value="10" readonly></td>
					<td><button type="button" onclick="subPoint('strength')">-</button></td>
				</tr> 
				<tr>
					<td>Dexterity</td>
					<td><button type="button" onclick="addPoint('dexterity')">+</button></td>
					<td><input id="dexterity" type="text" value="10" readonly></td>
					<td><button type="button" onclick="subPoint('dexterity')">-</button></td>
				</tr>
				<tr>
					<td>Constitution</td>
					<td><button type="button" onclick="addPoint('constitution')">+</button></td>
					<td><input id="constitution" type="text" value="10" readonly></td>
					<td><button type="button" onclick="subPoint('constitution')">-</button></td>
				</tr>
				<tr>
					<td>Intelligence</td>
					<td><button type="button" onclick="addPoint('intelligence')">+</button></td>
					<td><input id="intelligence" type="text" value="10" readonly></td>
					<td><button type="button" onclick="subPoint('intelligence')">-</button></td>
				</tr>
				<tr>
					<td>Charisma</td>
					<td><button type="button" onclick="addPoint('charisma')">+</button></td>
					<td><input id="charisma" type="text" value="10" readonly></td>
					<td><button type="button" onclick="subPoint('charisma')">-</button></td>
				</tr>
				<tr>
					<td>Wisdown</td>
					<td><button type="button" onclick="addPoint('wisdown')">+</button></td>
					<td><input id="wisdown" type="text" value="10" readonly></td>
					<td><button type="button" onclick="subPoint('wisdown')">-</button></td>
				</tr>				
			</table>
		</section>
	</body>

</html>

<script>
var totalPoints = 10;
var buyedPoints = 0;
var strengthCost = 0;
var dexterityCost = 0;
var constitutionCost = 0;
var intteligenceCost = 0;
var charismaCost = 0;
var wisdownCost = 0;


function changePoints(val){
	buyedPoints = parseInt(strengthCost) + parseInt(dexterityCost) + parseInt(constitutionCost) +
				  parseInt(intteligenceCost) + parseInt(charismaCost) + parseInt(wisdownCost);  

	
	totalPoints = parseInt(val);
	document.getElementById("totalPoints").value = buyedPoints + "/" + totalPoints; 
}

function addPoint(val){
	if(parseInt(document.getElementById(val).value) < 18){
		document.getElementById(val).value = (parseInt(document.getElementById(val).value) + 1);
	}
	calculateCost(val);
}

function subPoint(val){
	if(parseInt(document.getElementById(val).value) > 7){
		document.getElementById(val).value = (parseInt(document.getElementById(val).value) - 1);
	}
	calculateCost(val); 
}

function calculateCost(val){
	var variableCost = val + "Cost";
	switch(parseInt(document.getElementById(val).value)) {
	    case 7:
	    	eval(variableCost + " = parseInt(-4)");
	        break;
	    case 8:
	    	eval(variableCost + " = parseInt(-2)");
	        break;
	    case 9:
	    	eval(variableCost + " = parseInt(-1)");
	        break;
	    case 10:
	    	eval(variableCost + " = parseInt(0)");
	        break;
	    case 11:
		    eval(variableCost + " = parseInt(1)");
	        break;
	    case 12:
	    	eval(variableCost + " = parseInt(2)");
	        break;
	    case 13:
	    	eval(variableCost + " = parseInt(3)");
	        break;
	    case 14:
	    	eval(variableCost + " = parseInt(5)");
	        break;
	    case 15:
	    	eval(variableCost + " = parseInt(7)");
	        break;
	    case 16:
	    	eval(variableCost + " = parseInt(10)");
	        break;
	    case 17:
	    	eval(variableCost + " = parseInt(13)");
	        break;
	    case 18:
	    	eval(variableCost + " = parseInt(17)");
	        break;
	     
	}
	
	changePoints(totalPoints);
}

</script>