<?php 
	for ($i=0;$i<=5;$i++)
	{
		if ($i%2 ==0)
		{
			continue(1);
		}
		for ($k=0;$k<=2;$k++)
		{
			if ($k==3)
				{
					continue(2);
				}
		echo $i."-".$k."<br/>";
		}
	}
 ?>


<!-- same

<?php 
	for ($i=0;$i<=5;$i++)
	{
		if ($i%2 ==0)
		{
			continue(1);
		}
		for ($k=0;$k<=2;$k++)
		{
		echo $i."-".$k."<br/>";
		}
	}
 ?> -->