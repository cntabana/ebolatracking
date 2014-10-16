<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      group		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      username		</th>
 		<th width="80px">
		      password		</th>
 		<th width="80px">
		      firstname		</th>
 		<th width="80px">
		      lastname		</th>
 		<th width="80px">
		      idposition		</th>
 		<th width="80px">
		      salt		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->group; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       		<td>
			<?php echo $row->username; ?>
		</td>
       		<td>
			<?php echo $row->password; ?>
		</td>
       		<td>
			<?php echo $row->firstname; ?>
		</td>
       		<td>
			<?php echo $row->lastname; ?>
		</td>
       		<td>
			<?php echo $row->idposition; ?>
		</td>
       		<td>
			<?php echo $row->salt; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
