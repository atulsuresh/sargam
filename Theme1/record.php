<?php 
	$var=$_GET['page'];
	switch($var){
		case 'Literary' :
?>
<ul class= "buillet-type1 multi-col item1 ">
<lh>Literary</lh>	
<li>1	 Essay writing Malayalam</li>
	<li>2    Essay writing English</li>
	<li>3    Essay writing Hindi</li>
	<li>4    Poetry writing Malayalam</li>
	<li>5    Poetry writing English</li>
	<li>6    Poetry writing Hindi</li>
	<li>7    Short story writing Malayalam</li>
	<li>8    Short story writing English</li>
	<li>9    Short story writing Hindi</li>
	<li>10   Elocution Malayalam</li>
	<li>11   Elocution English</li>
	<li>12   Elocution Hindi</li>
	<li>13   Debate Malayalam</li>
	<li>14   Debate English</li>
	<li>15   Film review</li>
	<li>16   Recitation Malayalam</li>
	<li>17   Recitation English</li>
	<li>18   Recitation Hindi</li>
	<li>19   Quiz</li>
</ul>
<?php
	break;
	case 'Finearts' :
?>
<ul class= "buillet-type1 multi-col item1 ">
	<li>1  Painting Oil color</li>
	<li>2  Painting Water color</li>	
	<li>3  Pencil drawing	</li>
	<li>4  Poster design</li>	
	<li>5  Caricature</li>		
	<li>6  Collage</li>
	<li>7  Clay modeling</li>	
	<li>8  Cartooning</li>	
	<li>9  Photography</li>	
	<li>10 Rangoli</li>	
</ul>
<?php
	break;
	case 'Music' :
?>

<ul class= "buillet-type1 multi-col item1 ">
	<li>1 Light music Male</li>
	<li>2 Light music Female</li>	
	<li>3 Classical music</li>	
	<li>4 Western solo</li>	
	<li>5 Instrumental percussion eastern</li>	
	<li>6 Instrumental non-percussion wind eastern</li>	
	<li>7 Instrumental Non-percussion Wind western</li>	
	<li>8 Group music</li>	
	<li>9 Western group song</li>	
	<li>10 Instrumental non percussion string eastern</li>
	<li>11 Instrumental non percussion String western</li>	
	<li>12 Ganamela</li>	
	<li>13 Mappilapaattu</li>	
	<li>14 Percussion western</li>	
	<li>15 Naadanpaattu</li>	
</ul>

<?php
	break;
	case 'Dance' :
?>


<ul class= "buillet-type1 multi-col item1 ">
	<li>1   Solo dance Folk	</li>
	<li>2   Classical dance Mohiniyattam	</li>
	<li>3   Classical dance Bharatanatiyam	</li>
	<ol>
		<li> Male</li>
		<li> Female</li>
	</ol>
	<li>4   Classical dance Kuchipudi	</li>
	<ol>
		<li> Male</li>
		<li> Female</li>
	</ol>
	<li>5   Adapt tune	</li>

	<li>6   Group dance	</li>
	<li>7   Oppana-male	</li>
	<li>8   Thiruvathira	</li>
	<li>9   Step in synchro	</li>
	<li>10   Oppana-female	</li>
	<li>11   Video choreography	</li>
	<li>12   Nostalgia	</li>
	<li>13   Western Dance	</li>
	<li>14   Ottamthullal</li>
</ul>


<?php
	break;
	case 'Theatre' :
?>
<ul class= "buillet-type1 multi-col item1 ">
	<li>1. Fancy dress</li>	
	<li>2. Mono act	</li>
	<li>3. Mimicry	</li>
	<li>4. Kathaprasangam</li> 
	<li>5. Mime	</li>
	<li>6. Skit	</li>
	<li>7. Drama	</li>				
</ul>

<?php
	break;
	default :
		break;
}
?>
