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


	//Only activate this When Using local Host
	$clientName = "clinipam";

	//Services
	$mask1 = "%100s";
	$mask2 = "%100s";
	$mask3 = "%100s";
	$mask4 = "%100s";
	$mask5 = "%100s";
	$mask6 = "%100s";
	$mask7 = "%100s";
	$mask8 = "%100s";


	//Infos that go to .infob
	$mask9 = "%100s";
	$mask10 = "%100s";
	$mask11 = "%100s";
	$mask12 = "%100s";
	$mask13 = "%100s";
	$mask14 = "%100s";
	$mask15 = "%100s";
	$mask16 = "%100s";

	//ReportUrl
	$mask17 = "%10s";
	$mask18 = "%10s";
	$mask19 = "%10s";
	$mask20 = "%10s";
	$mask21 = "%100s";
	$mask22 = "%100s";
	$mask23 = "%100s";
	$mask24 = "%100s";

	foreach ($values as $row)

	{

		if ($row[0] == $clientName)

		{

			//

			//Services
			$gAds = sprintf($mask1, $row[1]);
			$seo = sprintf($mask2, $row[2]);
			$socialmedia = sprintf($mask3, $row[3]);
			$fb = sprintf($mask4, $row[4]);
			$fbAds = sprintf($mask5, $row[5]);
			$insta = sprintf($mask6, $row[6]);
			$linkedin = sprintf($mask7, $row[7]);
			$linkedinAds = sprintf($mask8, $row[8]);

			//Infos
			$Gsaldo = sprintf($mask9, $row[9]);
			$GdiasRes =  sprintf($mask10, $row[10]);
			$Sorganic =  sprintf($mask11, $row[11]);
			$Stotal =  sprintf($mask12, $row[12]);
			$Fsaldo =  sprintf($mask13, $row[13]);
			$FdiasRes =  sprintf($mask14, $row[14]);
			$Lsaldo =  sprintf($mask15, $row[15]);
			$LdiasRes =  sprintf($mask16, $row[16]);


			//ReportUrl
			$gAdsReportUrl = sprintf($mask17, $row[17]);
			$seoReportUrl = sprintf($mask18, $row[18]);
			$socialmediaReportUrl = sprintf($mask19, $row[19]);
			$fbReportUrl = sprintf($mask20, $row[20]);
			$fbAdsReportUrl = sprintf($mask21, $row[21]);
			$instaReportUrl = sprintf($mask22, $row[22]);
			$linkedinReportUrl = sprintf($mask23, $row[23]);
			$linkedinAdsReportUrl = sprintf($mask24, $row[24]);

			//Infos
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