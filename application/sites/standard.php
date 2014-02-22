<!doctype html>
<html lang="en" ng-app>
    <head>
        <meta charset="UTF-8">
        <title>Quoterag</title>
        <link rel="stylesheet" href="public/style/deps/bootstrap.min.css" />
        <link rel="stylesheet" href="public/style/style.css" />
        <script src="public/javascript/deps/jquery-1.11.0.min.js"></script>
        <script src="public/javascript/deps/angular.min.js"></script>
        <script src="public/javascript/deps/bootstrap.min.js"></script>
        <script src="public/javascript/app.js"></script>
    </head>
    <body>
        <div id="headerContainer">
            <h1 id="title">Quoterag</h1>
        </div>
        <div ng-controller="quoteControl" id="bodyContainer">
            <ul>
                <li ng-repeat="quote in quotelist" class="quoteContainer">
					<div class="strike"></div>
                    <span class="quote">{{quote.quote}}</span>
                    <span class="author">{{quote.author}} ({{quote.quoteyear}})</span>
                </li>
				<div id="strike-after"></div>
            </ul>
            <button type="button" class="btn btn-success" id="addQuoteBtn" data-toggle="modal" data-target="#addNewQuoteModal"><span class="glyphicon glyphicon-plus"></span> Add Quote</button>
            
            <div class="modal fade" id="addNewQuoteModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Add new quote</h4>
                        </div>
                        <div class="modal-body">
                            <form ng-submit="addQuote()" role="form" id="newQuoteForm">
                                <div class="form-group">
                                    <label for="quoteInput">Quote</label>
                                    <input type="text" ng-model="quoteInput" id="quoteInput" class="form-control" />
                                </div>

                                <div class="form-group">    
                                    <label for="authorInput">Author</label>
                                    <input type="text" ng-model="authorInput" id="authorInput" class="form-control" />
                                </div>

                                <div class="form-group">    
                                    <label for="quoteyearInput">Quote Year</label>
                                    <input type="text" ng-model="quoteyearInput" id="quoteyearInput" class="form-control" />
                                </div>

                                <div class="form-group">  
                                    <input class="btn btn-primary btn-block" type="submit" value="Save Quote" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>