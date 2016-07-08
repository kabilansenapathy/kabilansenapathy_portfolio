var app = angular.module('angularApp', []);
app.controller('myCtrl', function($scope) {
    $scope.userName = "Your Name";
    
    $scope.clearValue = function()
    {
     $scope.userName = "";
    }
    $scope.vovelCheck = function($inputid){
        if($inputid.charAt(0) == 'a' || $inputid.charAt(0) == 'e' || $inputid.charAt(0) == 'i' || $inputid.charAt(0) == 'o' || $inputid.charAt(0) == 'u' || $inputid.charAt(0) == 'A' || $inputid.charAt(0) == 'E' || $inputid.charAt(0) == 'I' || $inputid.charAt(0) == 'O' || $inputid.charAt(0) == 'U'){
           return  "an";
        }
        else{
            return  null;
        }
        
    }
});