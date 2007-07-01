<?php

class DowntimeTheme Extends Themelet {
	public function display_notification($page) {
		$page->add_block(new Block("Downtime",
			"<span style='font-size: 1.5em'><b>DOWNTIME MODE IS ON!</b></span>", "left", 0));
	}

	public function display_message($message) {
		header("HTTP/1.0 503 Service Temporarily Unavailable");
		print <<<EOD
<html>
	<head>
		<title>Downtime</title>
	</head>
	<body>
		$message
	</body>
</html>
EOD;
		exit;
	}
}
?>