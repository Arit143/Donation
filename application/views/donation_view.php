<link rel="stylesheet" type="text/css" href="css/donationApp.css">
<div class = 'centerContainer'>
<div ng-app = "donationApp" class = "mainContainer" >
	<div ng-strict-di ng-controller = "donationAppController as donationCtrl">
			<div class = 'center'>
				<uib-progressbar max="max" value="donationValue" uib-popover-template ="'js/donationApp/views/donationPopOver.html'" popover-trigger="mouseenter"></uib-progressbar>
				<div class = 'innerCenter'>
					<div class = 'constantBottomPadding'>
						<span style = 'color : red !important'>
							<b>Only 3 days left</b> 
						</span>
						to fund this project.
					</div>
					<div class = 'constantBottomPadding'>
						Join the <b>42</b> other donors who have already supported this project. Every dollar helps.
					</div>

					<div class = 'row' style = 'margin-bottom : 5%'>
						<div class= 'dollar-icon col-xs-6'>
							<i>$</i>
							<input type="text"	
							ng-model = "form['donationValue']" 
							value = '50'
							class="form-control" 
							placeholder="0.00">
						</div>
						<div class = 'col-xs-6'>
							<button type="button" class="btn btn-primary" ng-click="donationCtrl.random(form)"><b>Give Now</b></button>
						</div>
					</div>
					<div ng-if = "(showError == true)"> <span style = "color : red">Please insert a numeric number</span></div>
					<div style = 'margin-bottom : 5%'>
						<a tooltip-placement="right" uib-tooltip="Your donation can save someone else's life!" tooltip-class="tooltipCustomClass"
						style = 'color : #00BFFF;'> <i>Why give $50?</i></a>
					</div>
				</div>
			</div>
		</div>
		<div class = 'defaultButtonMainClass'>
			<div class = 'col-xs-6 save'>
				<button type="button" class = "defaultButton"><b>Save for later</b></button>
			</div>
			<div class = 'col-xs-6 tell'>
				<button type="button" class = "defaultButton"><b>Tell your friends</b></button>
			</div>
		</div>
	</div>
</div>



<script src="js/donationApp/donation.app.js" type="text/javascript"></script>
<script src="js/donationApp/donationApp.controller.js" type="text/javascript"></script>

