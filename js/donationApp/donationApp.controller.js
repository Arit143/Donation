(function(){

	angular
	.module('donationApp')
	.controller('donationAppController',donationAppController);

	donationAppController.$inject = ['$scope'];

	function donationAppController($scope){
		var vm = this;
		
		vm.init = function()
		{
			$scope.form = {
				total: 0,
				donationValue : 50
			};
			$scope.remainingDonationValue = 5000;
			$scope.max = 5000;
			$scope.donationValue = 0;
			$scope.showError = false;
		}
		
		vm.init();

		vm.random = function(form){
			$scope.showError = false;
			var donationValue = parseFloat(form['donationValue']);

			if(isNaN(donationValue)){
				$scope.showError = true;
				return false;
			}

			$scope.form['total'] += donationValue;
			$scope.donationValue = $scope.form['total'];
			$scope.remainingDonationValue -= donationValue;
			$scope.remainingDonationValue = Math.round($scope.remainingDonationValue * 100) /100 ;
		}


	}

})();