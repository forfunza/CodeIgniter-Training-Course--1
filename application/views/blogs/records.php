<html>
	<head>
		<title>Blogs Records</title>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php echo config_item('charset'); ?>" />
	</head>
	<body>
		
		<p><a href="<?php echo site_url('blogs/add'); ?>">Add new entry</a></p>
		
		<table cellpading="2" cellspacing="2" border="1">
			<thead>
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Created at</th>
					<th>Updated at</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<!-- Start loop entries -->
				<?php if (count($entries)) foreach ($entries as $entry) : ?>
				<tr>
					<td><?php echo $entry->title; ?></td>
					<td><?php echo $entry->body; ?></td>
					<td><?php echo $entry->created_at; ?></td>
					<td>
						<?php echo ($entry->updated_at) ? $entry->updated_at : '-' ?>
					</td>
					<td>
						<a href="<?php echo site_url('blogs/edit/'.$entry->id); ?>">Edit</a>
						<a href="<?php echo site_url('blogs/delete/'.$entry->id); ?>">Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
				<!-- End loop entries -->
			</tbody>
		</table>
		
				
	</body>
</html>