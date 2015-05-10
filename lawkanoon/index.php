<?php
/**
 * Created by PhpStorm.
 * User: tejaswinee.havaldar
 * Date: 23/07/14
 * Time: 17:39
 */
echo '<html>';
echo '<head>';
echo '<title>Food';
echo '</title>';
echo '</head>';
echo '<body>';

$files = glob("media/*.*");
echo '<table>';
for ($i=0; $i<count($files)/4; $i++) {
	echo '<tr>';
		echo '<td>';
    		$image = $files[$i];
    		print $image ."<br />";
    		echo '<img src="'.$image .'" alt="Random image" width="200" height="200" />'."<br /><br />";
    	echo '<td>';
		echo '<td>';
    		$image = $files[$i+count($files)/4];
    		print $image ."<br />";
    		echo '<img src="'.$image .'" alt="Random image" width="200" height="200" />'."<br /><br />";
    	echo '<td>';
    		echo '<td>';
    		$image = $files[$i+(2*count($files)/4)];
    		print $image ."<br />";
    		echo '<img src="'.$image .'" alt="Random image" width="200" height="200" />'."<br /><br />";
    	echo '<td>';
    		echo '<td>';
    		$image = $files[$i+(3*count($files)/4)];
    		print $image ."<br />";
    		echo '<img src="'.$image .'" alt="Random image" width="200" height="200" />'."<br /><br />";
    	echo '<td>';
    echo '</tr>';
}
	echo '<tr>';
	$i =  count($files)-(count($files)/4)*4;

	for($j=0; $j<$i ; $j++){
		echo '<td>';
    		$image = $files[$j+(count($files)/4)*4];
    		print $image ."<br />";
    		echo '<img src="'.$image .'" alt="Random image" width="200" height="200" />'."<br /><br />";
    	echo '<td>';
		
    }
    echo '</tr>';

echo '</table>';
echo '</body>';
echo '</html>';
?>