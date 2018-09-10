<?php
	function rek($column){
		global $a;
		rek2($a, $column);
		echo "<br>";
		if (--$column > $a) {
			rek($column);
		}
	}
	function rek2($b, $column){
		global $a;
		if ($b > $a - $column) {
			echo "*";
			rek2($b - 1, $column);
		}
	}
	$a = 0;
	rek(5);

	echo "<br>/*==========================================================================================*/<br><br>";

	function rekursif($c, $d) {
	global $kolom;
    rekursif2($kolom, $c, $d);
    echo "<br>";
    if (++$c < $kolom){
        rekursif($c, $d);
    }
}
function rekursif2($e, $c, $f) {
	global $kolom;
    if ($e > $kolom - $c - 1) {
        echo "$f ";
        rekursif2($e - 1, $c, $f + 1);
    }
}

$kolom = 5;
rekursif(0,1);
?>
