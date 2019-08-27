<?php



require '../vendor/autoload.php';



$client = new \Google_Client();

$client->setApplicationName('Google Sheets and PHP');

$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

$client->setAccessType('offline');

$client->setAuthConfig(__DIR__ . '/credentials.json');



$service = new Google_Service_Sheets($client);



$spreadsheetsId = "1-BdiDZU7d367P-NxbdhX_Nv4Y6ML5Vx415jm36h4hLc";





$range = "reportsDashboard!A2:Q200";

$response = $service->spreadsheets_values->get($spreadsheetsId, $range);



$values = $response->getValues();



if (empty($values))

{

	print "No data";

} else

{

	//PPC
	$mask1 = "%10s";
	$mask2 = "%10s";
	$mask3 = "%10s";
	$mask4 = "%10s";
	$mask5 = "%100s";
	$mask6 = "%100s";
	$mask7 = "%100s";
	$mask8 = "%100s";

	//ReportUrl
	$mask9 = "%100s";
	$mask10 = "%100s";
	$mask11 = "%100s";
	$mask12 = "%100s";
	$mask13 = "%100s";
	$mask14 = "%100s";
	$mask15 = "%100s";
	$mask16 = "%100s";


	$clientName = "clinipam";

	foreach ($values as $row)

	{

		if ($row[0] == $clientName)

		{

			//PPC
			$Gsaldo = sprintf($mask1, $row[1]);
			$GdiasRes = sprintf($mask2, $row[2]);
			$Sorganic = sprintf($mask3, $row[3]);
			$Stotal = sprintf($mask4, $row[4]);

			$Fsaldo = sprintf($mask5, $row[5]);
			$FdiasRes = sprintf($mask6, $row[6]);
			$Lsaldo = sprintf($mask7, $row[7]);
			$LdiasRes = sprintf($mask8, $row[8]);

			//ReportUrl
			$gAdsReportUrl = sprintf($mask9, $row[9]);
			$seoReportUrl = sprintf($mask10, $row[10]);
			$socialmediaReportUrl = sprintf($mask11, $row[11]);
			$fbReportUrl = sprintf($mask12, $row[12]);
			$fbAdsReportUrl = sprintf($mask13, $row[13]);
			$instaReportUrl = sprintf($mask14, $row[14]);
			$linkedinReportUrl = sprintf($mask15, $row[15]);
			$linkedinAdsReportUrl = sprintf($mask16, $row[16]);

			//PPC
			echo $Gsaldo."<br>";
			echo $GdiasRes."<br>";
			echo $Sorganic."<br>";
			echo $Stotal."<br>";

			echo $Fsaldo."<br>";
			echo $FdiasRes."<br>";
			echo $Lsaldo."<br>";
			echo $LdiasRes."<br>";

			//ReportUrl
			echo $gAdsReportUrl."<br>";
			echo $seoReportUrl."<br>";
			echo $socialmediaReportUrl."<br>";
			echo $fbReportUrl."<br>";
			echo $fbAdsReportUrl."<br>";
			echo $instaReportUrl."<br>";
			echo $linkedinReportUrl."<br>";
			echo $linkedinAdsReportUrl."<br>";




		}



	}



}

//$mask = "%10s %10s %s\n";

//sprintf($mask, $row[0], $row[1], $row[2]);



?>