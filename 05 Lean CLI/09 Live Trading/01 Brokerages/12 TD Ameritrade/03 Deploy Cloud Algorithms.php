<?php
include(DOCS_RESOURCES."/brokerages/cli-deployment/deploy-cloud-algorithms.php");

$brokerageDetails = "
<li>Enter your TD Ameritrade credentials.
<div class='cli section-example-container'>
<pre>$ lean cloud live \"My Project\"
API key:
OAuth Access Token: 
Account number: </pre>
</div>
<p>To get your account credentials, see <a href='https://www.quantconnect.com/docs/v2/our-platform/live-trading/brokerages/td-ameritrade#02-Account-Types'>Account Types</a>.</p>
</li>
";

$getDeployCloudAlgorithmsText("TD Ameritrade", true, $brokerageDetails);
?>