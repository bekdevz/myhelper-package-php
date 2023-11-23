<?php
namespace Myhelper;

class MixHelper{
    public static function getSiteNameMethod($url)
    {
        // Parse the URL
        $parsedUrl = parse_url($url);

        // Check if the 'host' key exists in the parsed URL
        if (isset($parsedUrl['host'])) {
            // Get the host (site name)
            $siteName = $parsedUrl['host'];

            // If the host starts with 'www.', remove it
            $siteName = preg_replace('/^www\./', '', $siteName);

            return $siteName;
        }

        // Return null if the host is not found
        return null;
    }
}