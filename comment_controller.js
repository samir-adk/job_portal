var mymodule = angular.module('jobApp', []);

mymodule.controller('jobController', function($log, $scope, $http) {
    $scope.newCommentText = {};

    $scope.addComment = function(user_id, post_id) {
        var comment = $scope.newCommentText[post_id];

        var data = {
            user_id: user_id,
            post_id: post_id,
            comment: comment
        };

        $http.post('comment.php', data).then(function(response) {
        	$scope.newCommentText={};
            console.log("Comment added successfully", response);
        }).catch(function(error) {
            console.log("Error in posting comment", error);
        });
    };
     $scope.likePost = function(post_id, user_id, isLiked) {

        if (isLiked) {
            // Unlike the post
            $http.post('like_job.php', {
                user_id: user_id,
                liked_post_id: post_id,
                action: 'unlike'
            }).then(function(response) {
                // Handle the response as needed
                // For example, update the UI to indicate the post is unliked
            }).catch(function(error) {
                console.log("Error in unliking post", error);
            });
        } else {
            // Like the post
            $http.post('like_job.php', {
                user_id: user_id,
                liked_post_id: post_id,
                action: 'like'
            }).then(function(response) {
                // Handle the response as needed
                // For example, update the UI to indicate the post is liked
            }).catch(function(error) {
                console.log("Error in liking post", error);
            });
        }
    };
});
