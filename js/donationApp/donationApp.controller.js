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
			$scope.dynamic = 0;
		}
		
		vm.init();

		vm.random = function(form){
			$scope.form['total'] += parseFloat(form['donationValue']);
			console.log($scope.form['total']);
			$scope.dynamic = $scope.form['total'];
			$scope.remainingDonationValue -= parseFloat(form['donationValue']);
			$scope.remainingDonationValue = Math.round($scope.remainingDonationValue * 100) /100 ;
		}


	}

})();