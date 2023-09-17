// job_by_category_controller.js

var app = angular.module('testapp', []); // Define the 'testapp' module

app.controller('testcontroller', function($scope, $http,$log) { // Define the 'testcontroller' controller

    // Initialize an empty array for categories
    $scope.categories = [];

    // Fetch categories from your PHP script
    $http.get('categories_api.php') // Replace 'get_categories.php' with your PHP script
        .then(function(response) {
            // Assign the retrieved categories to the $scope.categories array
            $scope.categories = response.data;
        
        })
        .catch(function(error) {
            console.error('Error fetching categories:', error);
        });
});
