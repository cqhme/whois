<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>404 Not Found | Whois ID</title>
    <meta name="description" content=" open WHOIS service for everyone. Currently supporting more than 910 domain TLDs">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="https://www.hostidnetwork.net/img/favicon.jpg" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <!--[if lt IE 9]>
      <script src="http://whois.ga/assets/js/html5shiv.js"></script>
      <script src="http://whois.ga/assets/js/respond.min.js"></script>
    <![endif]-->   
    <meta property="og:type" content="website">
    <meta property="og:title" content="Whois Lookup & IP | Whois ID">
    <meta property="og:description" content=" Whois service for everyone. Currently supporting more than 910 domain TLDs.">
    <meta property="og:url" content="http://whois-id.ga/">
    <meta property="og:image" content="img/thumnail.png">
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <h1 class="navbar-brand"><a href="http://whois-id.ga/"><img src="/img/whois.png" alt="Whois ID"></a></h1>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="https://whois-id.ga/"> Home</a>
            </li>
            <li>
              <a href="https://whois-id.ga/service/">Service</a>
            </li>               
            <li>
              <a href="https://whois-id.ga/supported-domains/"></i> Supported domains</a>
            </li>
            <li>
              <a href="https://whois-id.ga/new-domains/"></i> New domains</a>
            </li>         
            <li>
              <a href="https://whois-id.ga/contact/"></i> Contact</a>
            </li>
                      </ul>

         
        </div>
      </div>
    </div>
         

         
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row vertical-center">
            <div class="col-md-6 col-md-offset-3 section">  
            

  
            

<body>
<form action="https://whois-id.ga/">
    <br>
    <br>
    <br>
    <br>
   
 <div class="panel panel-default">
                <div class="panel-body">
              <div class="text-center">
               <h2 class="text-title">404 Not Found</h2>
<h3>Sorry, Your Page Not Found </h3>
<br>
 <input type="submit" class="btn btn-default" value="Home" title="Coomback To Home"></p>
 <br>
</form>

<?
if($domain) {
	$domain = trim($domain);
	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
	if(ValidateIP($domain)) {
		$result = LookupIP($domain);
	}
	elseif(ValidateDomain($domain)) {
		$result = LookupDomain($domain);
	}
	else die("Invalid Input!");
	echo "<pre>\n" . $result . "\n</pre>\n";
}
?>

 
                   
            </div>
            </div>
         
            </div>       


                     
            <div class="footer navbar-fixed-bottom">
              <div class="text-center">
                <p class="text-footer"></a>&copy; Copyright 2017 <a href="/">Whois ID</a> | All right reserved. </p>
              </div>
            </div> 
                                        
      </div>     
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.min.js"></script>
</body>
</html>    
</body>
</html>
