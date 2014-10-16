<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      iddepertment		</th>
 		<th width="80px">
		      jobTitle		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->iddepertment; ?>
		</td>
       		<td>
			<?php echo $row->jobTitle; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
