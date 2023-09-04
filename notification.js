var mymodule = angular.module('NotificationApp', []);

mymodule.controller('NotificationController', function($log, $scope, $http) {
    $scope.newCommentText = {};

    // $scope.Load=function()
    // {
       
    // }

    // $scope.addComment = function(user_id, post_id) {
    //     var comment = $scope.newCommentText[post_id];

    //     var data = {
    //         user_id: user_id,
    //         post_id: post_id,
    //         comment: comment
    //     };

    //     $http.post('comment.php', data).then(function(response) {
    //     	$scope.newCommentText={};
    //         console.log("Comment added successfully", response);
    //     }).catch(function(error) {
    //         console.log("Error in posting comment", error);
    //     });
    // };
});
