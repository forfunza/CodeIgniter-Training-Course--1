<html>
	<head>
		<title>Blogs Records</title>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php echo config_item('charset'); ?>" />
	</head>
	<body>
		
		
		<table cellpading="2" cellspacing="2" border="1">
			<thead>
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Created at</th>
					<th>Updated at</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($entries)) foreach ($entries as $entry) : ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<?php 
			</tbody>
		</table>
		
				
	</body>
</html>