
<html lang="en">
<head>
<!-- Basic info
================================================== -->
<meta charset="utf-8">
<title>Difference Amplifier </title>
<meta name="description" content="Processing">
<!-- favicons
================================================== -->
<link rel="icon" type="image/png" href="favicon.png">
<!--- CSS
================================================== -->
<link rel="stylesheet" href="css/process.css">

<!-- mobile specific metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	  #alert {
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 16px;
	    background-color: #ddd;
	    color: #333;
	    padding: 5px;
	    font-weight: bold;
	  }
	</style>
	
	<script src="js/raphael.js"></script>
	<!-- <script src="scale.raphael.js"></script> -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
	<script src="js/color.jquery.js"></script>
	<script src="js/jquery.usmap.js"></script>
	<!--<script src="js/info.js"></script>-->

	
	<script>
		function getName(nameWant, Obj) {
			for (var result in Obj)
			{
				if (nameWant == result)
				{
					return Ojb.result;
				}
			}
		}
		var num_1 = window.localStorage.getItem("v1");
		var num_2 = window.localStorage.getItem("v2");
	</script>


	

	<script>
	$(document).ready(function() {
		var limit_1 = 2;
		var limit_2 = 6;
		const agg = {};
		const agg2 = {};
		//~ for (var state in num_1)
		//~ {
			//~ if (num_1[state] > limit_2)
			//~ {
				//~ const stateName = "'"+state+"'";
				//~ const new_agg = {
					//~ stateName : {fill: '#FF0000'}
				//~ };
				//~ $.extend(agg, new_agg);
			//~ }
			//~ else if (num_1[state] > limit_1)
			//~ {
				//~ const stateName = "'"+state+"'";
				//~ const new_agg = {
					//~ stateName : {fill: '#FFA500'}
				//~ };
				//~ $.extend(agg, new_agg);
			//~ }
			//~ else {
				//~ const stateName = "'"+state+"'";
				//~ const new_agg = {
					//~ stateName : {fill: '#7CFC00'}
				//~ };
				//~ $.extend(agg, new_agg);
			//~ }
		//~ }
		// map#1 recolor
		if (num_1.HI > limit_2)
		{
			const new_agg = {
				'HI' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.HI > limit_1)
		{
			const new_agg = {
				'HI' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'HI' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.AK > limit_2)
		{
			const new_agg = {
				'AK' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.AK > limit_1)
		{
			const new_agg = {
				'AK' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'AK' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.FL > limit_2)
		{
			const new_agg = {
				'FL' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.FL > limit_1)
		{
			const new_agg = {
				'FL' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'FL' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.SC > limit_2)
		{
			const new_agg = {
				'SC' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.SC > limit_1)
		{
			const new_agg = {
				'SC' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'SC' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.GA > limit_2)
		{
			const new_agg = {
				'GA' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.GA > limit_1)
		{
			const new_agg = {
				'GA' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'GA' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.AL > limit_2)
		{
			const new_agg = {
				'AL' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.AL > limit_1)
		{
			const new_agg = {
				'AL' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'AL' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.NC > limit_2)
		{
			const new_agg = {
				'NC' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.NC > limit_1)
		{
			const new_agg = {
				'NC' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'NC' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.TN > limit_2)
		{
			const new_agg = {
				'TN' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.TN > limit_1)
		{
			const new_agg = {
				'TN' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'TN' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.RI > limit_2)
		{
			const new_agg = {
				'RI' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.RI > limit_1)
		{
			const new_agg = {
				'RI' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'RI' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.CT > limit_2)
		{
			const new_agg = {
				'CT' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.CT > limit_1)
		{
			const new_agg = {
				'CT' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'CT' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.MA > limit_2)
		{
			const new_agg = {
				'MA' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.MA > limit_1)
		{
			const new_agg = {
				'MA' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'MA' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.ME > limit_2)
		{
			const new_agg = {
				'ME' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.ME > limit_1)
		{
			const new_agg = {
				'ME' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'ME' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.NH > limit_2)
		{
			const new_agg = {
				'NH' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.NH > limit_1)
		{
			const new_agg = {
				'NH' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'NH' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.VT > limit_2)
		{
			const new_agg = {
				'VT' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.VT > limit_1)
		{
			const new_agg = {
				'VT' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'VT' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}
		
		if (num_1.NY > limit_2)
		{
			const new_agg = {
				'NY' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.NY > limit_1)
		{
			const new_agg = {
				'NY' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'NY' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.NJ > limit_2)
		{
			const new_agg = {
				'NJ' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.NJ > limit_1)
		{
			const new_agg = {
				'NJ' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'NJ' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.PA > limit_2)
		{
			const new_agg = {
				'PA' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.PA > limit_1)
		{
			const new_agg = {
				'PA' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'PA' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.DE > limit_2)
		{
			const new_agg = {
				'DE' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.DE > limit_1)
		{
			const new_agg = {
				'DE' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'DE' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.MD > limit_2)
		{
			const new_agg = {
				'MD' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.MD > limit_1)
		{
			const new_agg = {
				'MD' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'MD' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.WV > limit_2)
		{
			const new_agg = {
				'WV' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.WV > limit_1)
		{
			const new_agg = {
				'WV' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'WV' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.KY > limit_2)
		{
			const new_agg = {
				'KY' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.KY > limit_1)
		{
			const new_agg = {
				'KY' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'KY' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.OH > limit_2)
		{
			const new_agg = {
				'OH' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.OH > limit_1)
		{
			const new_agg = {
				'OH' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'OH' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.MI > limit_2)
		{
			const new_agg = {
				'MI' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.MI > limit_1)
		{
			const new_agg = {
				'MI' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'MI' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.WY > limit_2)
		{
			const new_agg = {
				'WY' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.WY > limit_1)
		{
			const new_agg = {
				'WY' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'WY' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.IN > limit_2)
		{
			const new_agg = {
				'IN' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.IN > limit_1)
		{
			const new_agg = {
				'IN' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'IN' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.IL > limit_2)
		{
			const new_agg = {
				'IL' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.IL > limit_1)
		{
			const new_agg = {
				'IL' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'IL' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.MN > limit_2)
		{
			const new_agg = {
				'MN' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.MN > limit_1)
		{
			const new_agg = {
				'MN' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'MN' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.WI > limit_2)
		{
			const new_agg = {
				'WI' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.WI > limit_1)
		{
			const new_agg = {
				'WI' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'WI' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.MO > limit_2)
		{
			const new_agg = {
				'MO' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.MO > limit_1)
		{
			const new_agg = {
				'MO' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'MO' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.AR > limit_2)
		{
			const new_agg = {
				'AR' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.AR > limit_1)
		{
			const new_agg = {
				'AR' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'AR' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.OK > limit_2)
		{
			const new_agg = {
				'OK' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.OK > limit_1)
		{
			const new_agg = {
				'OK' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'OK' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.KS > limit_2)
		{
			const new_agg = {
				'KS' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.KS > limit_1)
		{
			const new_agg = {
				'KS' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'KS' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.LA > limit_2)
		{
			const new_agg = {
				'LA' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.LA > limit_1)
		{
			const new_agg = {
				'LA' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'LA' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.VA > limit_2)
		{
			const new_agg = {
				'VA' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.VA > limit_1)
		{
			const new_agg = {
				'VA' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'VA' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.DC > limit_2)
		{
			const new_agg = {
				'DC' : {fill: '#FF0000'}
			};
			$.extend(agg, new_agg);
		}
		else if (num_1.DC > limit_1)
		{
			const new_agg = {
				'DC' : {fill: '#FFA500'}
			};
			$.extend(agg, new_agg);
		}
		else {
			const new_agg = {
				'DC' : {fill: '#7CFC00'}
			};
			$.extend(agg, new_agg);
		}

		if (num_1.MT > limit_2){const new_agg = {'MT' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.MT > limit_1){const new_agg = {'MT' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'MT' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.ID > limit_2){const new_agg = {'ID' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.ID > limit_1){const new_agg = {'ID' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'ID' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.WA > limit_2){const new_agg = {'WA' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.WA > limit_1){const new_agg = {'WA' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'WA' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.TX > limit_2){const new_agg = {'TX' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.TX > limit_1){const new_agg = {'TX' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'TX' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.CA > limit_2){const new_agg = {'CA' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.CA > limit_1){const new_agg = {'CA' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'CA' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.AZ > limit_2){const new_agg = {'AZ' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.AZ > limit_1){const new_agg = {'AZ' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'AZ' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.NV > limit_2){const new_agg = {'NV' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.NV > limit_1){const new_agg = {'NV' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'NV' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.UT > limit_2){const new_agg = {'UT' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.UT > limit_1){const new_agg = {'UT' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'UT' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.CO > limit_2){const new_agg = {'CO' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.CO > limit_1){const new_agg = {'CO' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'CO' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.NM > limit_2){const new_agg = {'NM' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.NM > limit_1){const new_agg = {'NM' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'NM' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.OR > limit_2){const new_agg = {'OR' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.OR > limit_1){const new_agg = {'OR' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'OR' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.ND > limit_2){const new_agg = {'ND' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.ND > limit_1){const new_agg = {'ND' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'ND' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.SD > limit_2){const new_agg = {'SD' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.SD > limit_1){const new_agg = {'SD' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'SD' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.NE > limit_2){const new_agg = {'NE' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.NE > limit_1){const new_agg = {'NE' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'NE' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.IA > limit_2){const new_agg = {'IA' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.IA > limit_1){const new_agg = {'IA' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'IA' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		if (num_1.MS > limit_2){const new_agg = {'MS' : {fill: '#FF0000'}};$.extend(agg, new_agg);}else if (num_1.MS > limit_1){const new_agg = {'MS' : {fill: '#FFA500'}};$.extend(agg, new_agg);}else {const new_agg = {'MS' : {fill: '#7CFC00'}};$.extend(agg, new_agg);}
		
		//map#2 recolor
		
				if (num_2.HI > limit_2)
		{
			const new_agg = {
				'HI' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.HI > limit_1)
		{
			const new_agg = {
				'HI' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'HI' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.AK > limit_2)
		{
			const new_agg = {
				'AK' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.AK > limit_1)
		{
			const new_agg = {
				'AK' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'AK' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.FL > limit_2)
		{
			const new_agg = {
				'FL' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.FL > limit_1)
		{
			const new_agg = {
				'FL' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'FL' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.SC > limit_2)
		{
			const new_agg = {
				'SC' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.SC > limit_1)
		{
			const new_agg = {
				'SC' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'SC' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.GA > limit_2)
		{
			const new_agg = {
				'GA' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.GA > limit_1)
		{
			const new_agg = {
				'GA' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'GA' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.AL > limit_2)
		{
			const new_agg = {
				'AL' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.AL > limit_1)
		{
			const new_agg = {
				'AL' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'AL' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.NC > limit_2)
		{
			const new_agg = {
				'NC' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.NC > limit_1)
		{
			const new_agg = {
				'NC' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'NC' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.TN > limit_2)
		{
			const new_agg = {
				'TN' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.TN > limit_1)
		{
			const new_agg = {
				'TN' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'TN' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.RI > limit_2)
		{
			const new_agg = {
				'RI' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.RI > limit_1)
		{
			const new_agg = {
				'RI' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'RI' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.CT > limit_2)
		{
			const new_agg = {
				'CT' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.CT > limit_1)
		{
			const new_agg = {
				'CT' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'CT' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.MA > limit_2)
		{
			const new_agg = {
				'MA' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.MA > limit_1)
		{
			const new_agg = {
				'MA' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'MA' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.ME > limit_2)
		{
			const new_agg = {
				'ME' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.ME > limit_1)
		{
			const new_agg = {
				'ME' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'ME' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.NH > limit_2)
		{
			const new_agg = {
				'NH' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.NH > limit_1)
		{
			const new_agg = {
				'NH' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'NH' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.VT > limit_2)
		{
			const new_agg = {
				'VT' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.VT > limit_1)
		{
			const new_agg = {
				'VT' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'VT' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}
		
		if (num_2.NY > limit_2)
		{
			const new_agg = {
				'NY' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.NY > limit_1)
		{
			const new_agg = {
				'NY' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'NY' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.NJ > limit_2)
		{
			const new_agg = {
				'NJ' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.NJ > limit_1)
		{
			const new_agg = {
				'NJ' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'NJ' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.PA > limit_2)
		{
			const new_agg = {
				'PA' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.PA > limit_1)
		{
			const new_agg = {
				'PA' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'PA' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.DE > limit_2)
		{
			const new_agg = {
				'DE' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.DE > limit_1)
		{
			const new_agg = {
				'DE' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'DE' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.MD > limit_2)
		{
			const new_agg = {
				'MD' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.MD > limit_1)
		{
			const new_agg = {
				'MD' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'MD' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.WV > limit_2)
		{
			const new_agg = {
				'WV' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.WV > limit_1)
		{
			const new_agg = {
				'WV' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'WV' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.KY > limit_2)
		{
			const new_agg = {
				'KY' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.KY > limit_1)
		{
			const new_agg = {
				'KY' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'KY' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.OH > limit_2)
		{
			const new_agg = {
				'OH' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.OH > limit_1)
		{
			const new_agg = {
				'OH' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'OH' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.MI > limit_2)
		{
			const new_agg = {
				'MI' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.MI > limit_1)
		{
			const new_agg = {
				'MI' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'MI' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.WY > limit_2)
		{
			const new_agg = {
				'WY' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.WY > limit_1)
		{
			const new_agg = {
				'WY' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'WY' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.IN > limit_2)
		{
			const new_agg = {
				'IN' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.IN > limit_1)
		{
			const new_agg = {
				'IN' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'IN' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.IL > limit_2)
		{
			const new_agg = {
				'IL' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.IL > limit_1)
		{
			const new_agg = {
				'IL' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'IL' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.MN > limit_2)
		{
			const new_agg = {
				'MN' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.MN > limit_1)
		{
			const new_agg = {
				'MN' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'MN' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.WI > limit_2)
		{
			const new_agg = {
				'WI' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.WI > limit_1)
		{
			const new_agg = {
				'WI' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'WI' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.MO > limit_2)
		{
			const new_agg = {
				'MO' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.MO > limit_1)
		{
			const new_agg = {
				'MO' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'MO' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.AR > limit_2)
		{
			const new_agg = {
				'AR' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.AR > limit_1)
		{
			const new_agg = {
				'AR' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'AR' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.OK > limit_2)
		{
			const new_agg = {
				'OK' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.OK > limit_1)
		{
			const new_agg = {
				'OK' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'OK' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.KS > limit_2)
		{
			const new_agg = {
				'KS' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.KS > limit_1)
		{
			const new_agg = {
				'KS' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'KS' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.LA > limit_2)
		{
			const new_agg = {
				'LA' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.LA > limit_1)
		{
			const new_agg = {
				'LA' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'LA' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.VA > limit_2)
		{
			const new_agg = {
				'VA' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.VA > limit_1)
		{
			const new_agg = {
				'VA' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'VA' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.DC > limit_2)
		{
			const new_agg = {
				'DC' : {fill: '#FF0000'}
			};
			$.extend(agg2, new_agg);
		}
		else if (num_2.DC > limit_1)
		{
			const new_agg = {
				'DC' : {fill: '#FFA500'}
			};
			$.extend(agg2, new_agg);
		}
		else {
			const new_agg = {
				'DC' : {fill: '#7CFC00'}
			};
			$.extend(agg2, new_agg);
		}

		if (num_2.MT > limit_2){const new_agg = {'MT' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.MT > limit_1){const new_agg = {'MT' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'MT' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.ID > limit_2){const new_agg = {'ID' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.ID > limit_1){const new_agg = {'ID' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'ID' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.WA > limit_2){const new_agg = {'WA' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.WA > limit_1){const new_agg = {'WA' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'WA' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.TX > limit_2){const new_agg = {'TX' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.TX > limit_1){const new_agg = {'TX' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'TX' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.CA > limit_2){const new_agg = {'CA' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.CA > limit_1){const new_agg = {'CA' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'CA' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.AZ > limit_2){const new_agg = {'AZ' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.AZ > limit_1){const new_agg = {'AZ' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'AZ' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.NV > limit_2){const new_agg = {'NV' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.NV > limit_1){const new_agg = {'NV' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'NV' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.UT > limit_2){const new_agg = {'UT' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.UT > limit_1){const new_agg = {'UT' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'UT' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.CO > limit_2){const new_agg = {'CO' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.CO > limit_1){const new_agg = {'CO' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'CO' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.NM > limit_2){const new_agg = {'NM' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.NM > limit_1){const new_agg = {'NM' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'NM' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.OR > limit_2){const new_agg = {'OR' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.OR > limit_1){const new_agg = {'OR' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'OR' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.ND > limit_2){const new_agg = {'ND' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.ND > limit_1){const new_agg = {'ND' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'ND' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.SD > limit_2){const new_agg = {'SD' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.SD > limit_1){const new_agg = {'SD' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'SD' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.NE > limit_2){const new_agg = {'NE' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.NE > limit_1){const new_agg = {'NE' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'NE' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.IA > limit_2){const new_agg = {'IA' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.IA > limit_1){const new_agg = {'IA' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'IA' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		if (num_2.MS > limit_2){const new_agg = {'MS' : {fill: '#FF0000'}};$.extend(agg2, new_agg);}else if (num_2.MS > limit_1){const new_agg = {'MS' : {fill: '#FFA500'}};$.extend(agg2, new_agg);}else {const new_agg = {'MS' : {fill: '#7CFC00'}};$.extend(agg2, new_agg);}
		
		
		$('#map').usmap({
			'stateSpecificStyles': agg,
			'click' : function(event, data) {
				var sn = data.name;
				var num = 0;
				for (var state in num_1)
				{
					if (state = sn)
					{
						num = num_1[state];
					}
				}
			$('#alert')
				.text('Total '+num+' tweets for #1 keyword in '+sn)
				.stop()
				.css('backgroundColor', '#ff0')
				.animate({backgroundColor: '#ddd'}, 700);
			},
			stateHoverStyles: {fill: 'white'}
		},
		

		);
		
		$('#map2').usmap({
			'stateSpecificStyles': agg2,
			'click' : function(event, data) {
				var sn = data.name;
				var num = 0;
				for (var state in num_2)
				{
					if (state = sn)
					{
						num = num_2[state];
					}
				}
			$('#alert')
				.text('Total '+num+' tweets for #2 keyword in '+sn)
				.stop()
				.css('backgroundColor', '#ff0')
				.animate({backgroundColor: '#ddd'}, 700);
			},
			stateHoverStyles: {fill: 'white'}
		},
		

		);
		
		}
			
	);
	</script>

</head>

<body class="bg-1" onload="Getkey()">

<header>
	<div class="row">
		<div class="main-title-1"><b>Difference Amplifier</b> <img src="images/logo1.png" alt="logo" style="width: 3.5rem;height:3.5rem;"> </div>
		<div class="item row">
			<a href="index.html"><b>home</b></a>
			<a href="mailto: siso8575@colorado.edu" target="_top"><b>contact us</b></a>
		</div>
	</div>
</header>

<main style="margin-bottom: 10rem;">
        <center>
        <p>Processing... Please Wait... </p >
        <?php
                $key1 = $_REQUEST['key1'];
                $key2 = $_REQUEST['key2'];
                echo 'Your keywords are "' . $key1 .'" and "' . $key2 . '". ';
                echo "<br />";
                $val = shell_exec("python ./python/tweeter_api.py $key1 $key2");
                $val = shell_exec(" ~/spark-2.3.0-bin-hadoop2.7/bin/spark-submit --master \"local[4]\"  --packages org.mongodb.spark:mongo-spark-connector_2.11:2.2.0  ~/mongo_spark.py");
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $filter = [];
        $options = [
            'projection' => ['_id' => 0],
            'sort' => ['place' => 1],
        ];
        $query = new MongoDB\Driver\Query($filter, $options);
        $cursor = $manager->executeQuery('data_from_tweeter.output', $query);
        $num_1 = "{\n";
		$num_2 = "{\n";
        foreach($cursor as $document){
            #echo $document->place." ".(isset($document->fir)?$document->fir:0)." ".(isset($document->sec)?$document->sec:0)."<br />";
            if (!isset($document->fir)){$document->fir = 0;}
            if (!isset($document->sec)){$document->sec = 0;}
            $place = $document->place;
            if ($place == "Hawaii") {$place = "HI";}
			if ($place == "Alabama") {$place = "AL";}
			if ($place == "Alaska") {$place = "AK";}
			if ($place == "Arizona") {$place = "AZ";}
			if ($place == "Arkansas") {$place = "AR";}
			if ($place == "California") {$place = "CA";}
			if ($place == "Colorado") {$place = "CO";}
			if ($place == "Connecticut") {$place = "CT";}
			if ($place == "Delaware") {$place = "DE";}
			if ($place == "Florida") {$place = "FL";}
			if ($place == "Georgia") {$place = "GA";}
			if ($place == "Idaho") {$place = "ID";}
			if ($place == "Illinois") {$place = "IL";}
			if ($place == "Indiana") {$place = "IN";}
			if ($place == "Iowa") {$place = "IA";}
			if ($place == "Kansas") {$place = "KS";}
			if ($place == "Kentucky") {$place = "KY";}
			if ($place == "Louisiana") {$place = "LA";}
			if ($place == "Maine") {$place = "ME";}
			if ($place == "Maryland") {$place = "MD";}
			if ($place == "Massachusetts") {$place = "MA";}
			if ($place == "Michigan") {$place = "MI";}
			if ($place == "Minnesota") {$place = "MN";}
			if ($place == "Mississippi") {$place = "MS";}
			if ($place == "Wyoming") {$place = "WY";}
			if ($place == "Wisconsin") {$place = "WI";}
			if ($place == "West Virginia") {$place = "WV";}
			if ($place == "Washington") {$place = "WA";}
			if ($place == "Virginia") {$place = "VA";}
			if ($place == "Vermont") {$place = "VT";}
			if ($place == "Utah") {$place = "UT";}
			if ($place == "Texas") {$place = "TX";}
			if ($place == "Tennessee") {$place = "TN";}
			if ($place == "South Dakota") {$place = "SD";}
			if ($place == "South Carolina") {$place = "SC";}
			if ($place == "Rhode Island") {$place = "RI";}
			if ($place == "Pennsylvania") {$place = "PA";}
			if ($place == "Oregon") {$place = "OR";}
			if ($place == "Oklahoma") {$place = "OK";}
			if ($place == "Ohio") {$place = "OH";}
			if ($place == "North Dakota") {$place = "ND";}
			if ($place == "North Carolina") {$place = "NC";}
			if ($place == "New York") {$place = "NY";}
			if ($place == "New Mexico") {$place = "NM";}
			if ($place == "New Jersey") {$place = "NJ";}
			if ($place == "New Hampshire") {$place = "NH";}
			if ($place == "Nevada") {$place = "NV";}
			if ($place == "Nebraska") {$place = "NE";}
			if ($place == "Montana") {$place = "MT";}
			if ($place == "Missouri") {$place = "MO";}

            $num_1 .= "{$place}: {$document->fir},\n";
			$num_2 .= "{$place}: {$document->sec},\n";
        }
        $num_1 = rtrim($num_1,",\n");
        $num_2 = rtrim($num_2,",\n");
        $num_1 .= "};\n";
		$num_2 .= "};\n";
		echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";
		#echo $num_1;echo "<br />";
		#echo $num_2;echo "<br />";
        ?>
        
        </center>
        <center>
  <div id="alert">Click on any State for more info. </div>
  <div style="display: -webkit-flex;-webkit-flex-direction: row;display: flex; margin-left: 5rem; margin-right: 5rem;">
	<div>
	<div id="map" style="width: 71rem; height: 45rem; border: solid 2px black;"></div>
	<p>#1 Keyword Heatmap </p>
	</div>
	<div>
	<div id="map2" style="width: 71rem; height: 45rem; border: solid 2px black;"></div>
	<p>#2 Keyword Heatmap</p>
	</div>
  </div>
  </center>
</main>

<script type='text/javascript'>
			var num_1 = <?php echo $num_1 ?>;
			var num_2 = <?php echo $num_2 ?>;
</script>

<footer>
	<p>Copyright © 2018-2019 FantasticFive </p>
	<p> - All  rights reserved. </p>
</footer>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




</body>

</html>
