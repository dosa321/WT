	<?php
	$data=array("name"=>'steven','age'=>30,'marks'=>50);
	
    $data+=array("salary"=>30000,"Address"=>"pune");
	
	$data1=array_diff($data,["steven",30]);
	foreach($data1 as $x=>$y)
	{
	  echo "$x : $y <br>";
	}
	
	?>
