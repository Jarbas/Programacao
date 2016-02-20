angular.module('App', []).controller('Ctrl', function($scope) {
    $scope.Nome = "Jarbas",
    $scope.SobreNome = "Coltro",
    $scope.fullName = function() {
        return $scope.Nome + " " + $scope.SobreNome;
    }
});