<?php

function showItem($item) {
	echo "
	<div class='card item'>
		<div class='item__thumb' style='background-image:url(" .$item->thumbnail->image. ")'>
			<span>" . $item->name . "</span>
			<input type='number' value='" .$item->name. "' class='item__input' data-itemid='" .$item->id. "'/> 
		</div>
	</div>";
}

?>