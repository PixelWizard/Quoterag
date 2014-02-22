function quoteControl($scope, $http){
     
    $scope.quotelist = new Array();

    $http.get('index.php?api=true&type=getQuotes&code=all')
        .success(function (data) {
            $.each(data, function(index, val){
            $scope.quotelist[index] = {quote: val.f_quote, author: val.f_author, quoteyear: val.f_quoteyear};
        });

        })
            .error(function (data, status, headers, config) {
            //  Do some error handling here
        });
    
    $scope.addQuote = function(){
        $.post( "index.php", { quote: $scope.quoteInput, author: $scope.authorInput, quoteyear: $scope.quoteyearInput})
            .done(function( data ) {

            });
        $scope.quotelist.push({quote: $scope.quoteInput, author: $scope.authorInput, quoteyear: $scope.quoteyearInput});
        $("#addNewQuoteModal").modal("hide");
    }
}

