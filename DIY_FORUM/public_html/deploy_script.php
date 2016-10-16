<p>Deploy script</p>
<pre>
<?php 
$output = shell_exec("cd ..;hg pull;hg update 2>&1");
echo $output;
?>
</pre>