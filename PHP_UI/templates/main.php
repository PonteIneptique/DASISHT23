<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>TERESAH</title>

        <link href="/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/assets/css/font-awesome-ie7.min.css" rel="stylesheet" />
        <link href="/assets/css/fontello.css" rel="stylesheet" />
        <link href="/assets/css/jqcloud.css" rel="stylesheet" />
        <link href="/assets/css/teresah.css" rel="stylesheet" />

	<!--
        <link rel="alternate" type="application/rdf+xml" href="http://rdf.tools.dasish.org/tool/{{item.identifier.shortname}}/xml" title="Structured Descriptor Document (RDF/XML format)" />
        <link rel="alternate" type="text/rdf+n3" href="http://rdf.tools.dasish.org/tool/{{item.identifier.shortname}}/turtle" title="Structured Descriptor Document (N3/Turtle format)" />
        <link rel="alternate" type="application/json+rdf" href="http://rdf.tools.dasish.org/tool/{{item.identifier.shortname}}/json" title="Structured Descriptor Document (RDF/JSON format)" />
        <link rel="alternate" type="text/plain" href="http://rdf.tools.dasish.org/tool/{{item.identifier.shortname}}/ntriples" title="Structured Descriptor Document (N-Triples format)" />
	-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">TERESAH</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/"><?php print $i18n['home'];?></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle"><?php print $i18n['browse'];?></a>
                            <ul class="dropdown-menu">
                                <li><a href="/registry"><?php print $i18n['browse all'];?></a></li>
                                <li><a href="/facet"><?php print $i18n['browse facets'];?></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle"><?php print $i18n['search'];?></a>
                            <ul class="dropdown-menu">
                                <li ng-class="ui.routes.getRoute('SearchCtrl')"><a href="/search/general"><?php print $i18n['general'];?></a></li>
                                <li ng-class="ui.routes.getRoute('FacetedCtrl')"><a href="/search/faceted"><?php print $i18n['faceted'];?></a></li>
                            </ul>
                        </li>
                        <li ng-class="ui.routes.getRoute('AddToolCtrl')" ng-show="ui.user.data.signedin"><a href="/add"><?php print $i18n['add'];?></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle"><?php print $i18n['about'];?></a>
                            <ul class="dropdown-menu">
                                <li><a href="/about/rdf/">RDF</a></li>
                                <li><a href="/about/api/">API</a></li>
                            </ul>
                        </li>
                        <li ng-show="ui.user.data.level === '4'"><a href="/admin"><?php print $i18n['Admin'];?></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="pull-right" ng-show="ui.user.data.signedin"><a  href="/profile"><span class="glyphicon glyphicon-user"></span> <span ng-bind="ui.user.data.name.substr(0, 7);"></span><span ng-show="ui.user.data.name.length > 7"></span></a></li>
                        <li class="pull-right" ng-show="ui.user.data.signedin"><a ng-click="ui.user.signout()"><span class="glyphicon glyphicon-log-out"></span> <span><?php print $i18n['sign out'];?></span></a></li>
                        <li class="pull-right" ng-show="!ui.user.data.signedin"><a href="/login"><span class="glyphicon glyphicon-log-in"></span> <span><?php print $i18n['sign in'];?></span></a></li>
                    </ul>
                    <form class="navbar-form navbar-right hidden-sm" ng-submit="ui.search.go()">
                        <div class="form-group">
                            <input type="text" placeholder="<?php print $i18n['search'];?>" name="quicksearch"  ng-model="ui.search.input" class="form-control input-sm" typeahead-wait-ms="100" typeahead="answer.identifiers.shortname as answer.title for answer in ui.search.typeahead($viewValue)" typeahead-loading="true" typeahead-on-select="ui.search.select($item)">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div id="wrap">
            <div class="container">
		<?php print $content;?>
            </div>                
            <div id="push"></div>
        </div>

        <!-- Site footer -->
        <div id="footer">
            <div class="col-centered"><a class="col-centered" href="http://dasish.eu"><img class="col-centered" src="/assets/img/dasish_header_logo.png" alt="DASISH logo"></a></div>				
        </div>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="./assets/js/angular.min.js"></script>
        <script type="text/javascript" src="./assets/js/angular.sanitize.js"></script>
        <script type="text/javascript" src="./assets/js/angular.cookie.js"></script>
        <script type="text/javascript" src="./assets/js/angular.bootstrap.tpls.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.0.0/lodash.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/restangular/latest/restangular.min.js"></script>
        <script type="text/javascript" src="./assets/js/angular-translate.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/jqcloud-1.0.4.js"></script>
        <script type="text/javascript" src="./assets/i18n/en.js"></script>
        <script type="text/javascript" src="./assets/i18n/sv.js"></script>

        <script type="text/javascript" src="./app.js"></script>

        <script type="text/javascript" src="./modules/services.js"></script>
        <script type="text/javascript" src="./modules/filter.js"></script>
        <script type="text/javascript" src="./modules/directives.js"></script>

        <script type="text/javascript" src="./controller/registry.js"></script>
        <script type="text/javascript" src="./controller/tool.js"></script>
        <script type="text/javascript" src="./controller/link.js"></script>
        <script type="text/javascript" src="./controller/tool.insert.js"></script>
        <script type="text/javascript" src="./controller/top.js"></script>
        <script type="text/javascript" src="./controller/home.js"></script>
        <script type="text/javascript" src="./controller/apiFaq.js"></script>
        <script type="text/javascript" src="./controller/search.faceted.js"></script>


        <script type="text/ng-template" id="myModalContent.html">
            <div class="modal-header">
            <h3>I'm a modal!</h3>
            </div>
            <div class="modal-body">
            <ul>
            <li ng-repeat="item in items">
            <a ng-click="selected.item = item">{{ item }}</a>
            </li>
            </ul>
            Selected: <b>{{ selected.item }}</b>
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" ng-click="ok()">OK</button>
            <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
            </div>
        </script>
        <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>
