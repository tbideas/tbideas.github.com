		<?php 
			if(!function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar")) : ?>

<div class="one-fourth notopmargin sidebar-right last ">
<h3 class="notopmargin">Categories</h3>		
<ul>
		<?php wp_list_categories('hide_empty=0&show_count=5&title_li='); ?>
</ul>

</div>

<div class="one-fourth sidebar-right last">
<ul>
<?php wp_list_bookmarks('title_li=&category_before=&category_after='); ?>
</ul>
</div>


<?php endif;  ?>

