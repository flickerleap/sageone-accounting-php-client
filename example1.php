<?php
require "vendor/autoload.php";

use SageOne\Api;
$api = new Api();
echo "<br />";

use SageOne\Quote\Quote;
$quote = new Quote();
echo "<br />";

use SageOne\Quote\QuoteAttachment;
$quoteAttachment = new QuoteAttachment();
echo "<br />";

?>