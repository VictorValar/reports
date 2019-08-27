<?php

require '../vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetsId = "1-BdiDZU7d367P-NxbdhX_Nv4Y6ML5Vx415jm36h4hLc";


$range = "GadsSaldos!A2:E54";
$response = $service->spreadsheets_values->get($spreadsheetsId, $range);

$values = $response->getValues();

if (empty($values))
{
	print "No data";
} else
{
	$mask1 = "%10s";
	$mask2 = "%10s";
	$mask3 = "%10s";
	$mask4 = "%10s";
	$clientName = "clinipam";
	foreach ($values as $row)
	{
		if ($row[0] == $clientName)
		{
			$Gsaldo = sprintf($mask1, $row[1]);
			$GdiasRes = sprintf($mask2, $row[2]);
			$Sorganic = sprintf($mask3, $row[3]);
			$Stotal = sprintf($mask4, $row[4]);
			echo $Gsaldo."<br>";
			echo $GdiasRes."<br>";
			echo $Sorganic."<br>";
			echo $Stotal."<br>";
		}

	}

}
//$mask = "%10s %10s %s\n";
//sprintf($mask, $row[0], $row[1], $row[2]);

?>