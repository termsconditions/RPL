<?php
	include "dbcon.php";
	$qrPendaftar = "SELECT 
					name, 
					nim,
					email,
					phone,
					kelompok,
					file
	            FROM  pendaftaran
	            ORDER BY  nim ASC
	            /*LIMIT 0,3*/
	            "; 
	$getPendaftar = mysql_query($qrPendaftar);

?>
<div id="content">
	<div class="container">
      	<div class="row">
			<table border="1">
				<thead>
					<tr>
						<label><h2>Daftar Pendaftar</h2></label>
					</tr>
					<tr>
						<th style='font-size:90%' valign='middle'>
							Nama
						</th>
						<th style='font-size:90%' valign='middle'>
							NIM
						</th>
						<th style='font-size:90%' valign='middle'>
							Email
						</th>
						<th style='font-size:90%' valign='middle'>
							Phone
						</th>
						<th style='font-size:90%' valign='middle'>
							Kelompok
						</th>
						<th style='font-size:90%' valign='middle'>
							File
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($resultPendaftar=mysql_fetch_assoc($getPendaftar)) {
							?>
								<tr>
									<td width='10%'  valign='middle' ><?php echo $resultPendaftar['name']; ?></td>
									<td width='10%'  valign='middle' ><?php echo $resultPendaftar['nim']; ?></td>
									<td width='10%'  valign='middle' ><?php echo $resultPendaftar['email']; ?></td>
									<td width='10%'  valign='middle' ><?php echo $resultPendaftar['phone']; ?></td>
									<td width='10%'  valign='middle' ><?php echo $resultPendaftar['kelompok']; ?></td>
									<td width='10%'  valign='middle' ><a title="download file" href="download.php?file=<?php echo $resultPendaftar['file']; ?>"><?php echo $resultPendaftar['file']; ?></a></td>
								</tr>
							<?php
						}					   
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>