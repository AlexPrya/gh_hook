<?php
$output = shell_exec('cd t_bot/; git status');
echo "<pre>$output</pre>";
?>