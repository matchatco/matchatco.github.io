<?php

// YouTube live stream URL
//$youtube_id = $_GET['id'];

//$type_url = $_GET['type'];

$youtube_live_url = "https://www.youtube.com/watch?v=z4M7UX6MCP0";

// Fetch the live stream URL using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $youtube_live_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);

// Extract the stream URL from the response
if (preg_match('/"hlsManifestUrl":"(.*?)"/', $response, $matches)) {
    $hls_manifest_url = $matches[1];

    // Output the HLS manifest URL
   // echo "HLS manifest URL: " . $hls_manifest_url . "\n";
    //header("Location: " . $hls_manifest_url);
     echo $hls_manifest_url;

    // Now you can use $hls_manifest_url to fetch the HLS manifest and process it further
} else {
    echo "Error";
}

curl_close($ch);

?>
