<!-- simple python script -->

<?php
$command = escapeshellcmd('python3 /var/www/html/sample.py');
$output = shell_exec($command);
echo $output;
?>
