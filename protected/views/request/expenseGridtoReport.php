<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      request		</th>
 		<th width="80px">
		      phonenumber		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      requestdate		</th>
 		<th width="80px">
		      responsedate		</th>
 		<th width="80px">
		      status		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->request; ?>
		</td>
       		<td>
			<?php echo $row->phonenumber; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->requestdate; ?>
		</td>
       		<td>
			<?php echo $row->responsedate; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
