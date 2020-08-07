<?php
class Test{
public function dbdetails(){
	$ref=&get_instance();
	$ref->load->helper('array');

	$arr=['BC'=>'abc','XYZ'=>'xyz'];
		echo element('ABC',$arr,'Not Found');



	echo "This funtion will provide db details"."<br>";
}
}
?>