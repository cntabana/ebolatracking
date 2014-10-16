<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      idrequest		</th>
 		<th width="80px">
		      response		</th>
 		<th width="80px">
		      response_date		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->idrequest; ?>
		</td>
       		<td>
			<?php echo $row->response; ?>
		</td>
       		<td>
			<?php echo $row->response_date; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
