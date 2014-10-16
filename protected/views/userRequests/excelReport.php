<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      iduser		</th>
 		<th width="80px">
		      idrequest		</th>
 		<th width="80px">
		      receiveddate		</th>
 		<th width="80px">
		      status		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->iduser; ?>
		</td>
       		<td>
			<?php echo $row->idrequest; ?>
		</td>
       		<td>
			<?php echo $row->receiveddate; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
