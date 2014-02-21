function quoteControl($scope){
    $.getJSON("php/getQuotes.php", function(data){
        //console.log(data[1].f_quote);
        $.each(data, function(index){
            $scope.quotelist.push({quote: data[index].f_quote, author: data[index].f_author, quoteyear: data[index].f_quoteyear});
        });
        console.log($scope.quotelist);
    });
        
    $scope.quotelist = [/*
        {quote: "Langweiligkeit ist langweilig", author: "Sepp Matter", quoteyear: "2014"},
        {quote: "Papageiii", author: "Vritz Kempf", quoteyear: "2013"},
        {quote: "Dann sehen wir hier die Spitze des Dreieckes.\nUnd dann... AU!", author: "Vritz Kempf", quoteyear: "2013"},
        {quote: "Ah, ah, ah", author: "Gregor Haltmeier", quoteyear: "2012"},
        {quote: "BaboChaboRichBitchSnitch", author: "Loris Senneca", quoteyear: "2014"}*/
    ];
    
    $scope.addQuote = function(){
        $scope.quotelist.push({quote: $scope.quoteInput, author: $scope.authorInput, quoteyear: $scope.quoteyearInput});
        $("#addNewQuoteModal").modal("hide");
    }
}