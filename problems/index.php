<?php 

$files = scandir(getcwd());
?>
<ol>
<?php 
foreach ($files as $file) {
	if ($file == '.' || $file == '..' || is_dir($file)) 
		continue;	
	?>
<li><a target="_blank" href="<?php echo $file ?>"><?php echo pathinfo($file, PATHINFO_FILENAME); ?></a></li>

<?php 
}?>
</ol>
