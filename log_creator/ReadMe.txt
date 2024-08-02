
Advanced Log_Creater v1.0 By pr0ph3tc0d3r
`````````````````````````````````````````
This helps to create logs for your  and view them in an advanced way
for your website or database as some times it may require you to first
subscribe for premium hosting or whatsoever you might wanna know where
your site visitors are geographically located.

└── Log/
	├── core/
	│    ├── core_x.php
	│    ├── log/
	│    │   ├── log.php
	│    │   └── log_hx.html
	│    └── plugins/
	│        ├── bootstrap.js (not necessary in demo edition)
	│        └── bootstrap.css
	└──log_monitor.php
		
For Usage (: Very simple to use in 4 steps

-Please keep the files alined in the directories shown
 in the tree above(unless the notice below these instructions applies!)
-Visit the website ipgeolocation.io and sign up for a free API key that will
 keep track of your visitors geo-location and go to the line 
 "$apiKey = "PUT_YOUR_API_KEY_HERE" in the file called log.php and provide your API Key.
-Make sure to include the file log.php for log creation by adding
 this line "include("log_creator/core/core_x.php");" in your code(without the outer quotes)
 -In the core/log/log.php file, change the $logfile directory to match the one in the previous line.
-Monitor all logs from the log_monitor.php file that should be
 kept out of site from the public.

NOTE : Customise the directory & file naming (for only professional users) :)

Credit goes to m3 and You :: pr0ph3tc0d3r@gmail.com