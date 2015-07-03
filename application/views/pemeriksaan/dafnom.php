				<div class="col-md-9">
				<script>
$('.add').click(function() {
$(this).slideUp();
});</script>
					<h1 class="page-header">Daftar Nominatif</h1>
					<table class="table table-striped">
						<tr>
							<th></th>
							<th>NPWP</th>
							<th colspan="2">Masa/Tahun</th>
							<th>Uraian</th>
							<th>Ref.</th>
							<th></th>
						</tr>
<?php $i = 1; ?>
<?php foreach ($dafnom as $dn): ?>
						<tr id="dn<?php echo $i++; ?>">
							<td><input type="checkbox"></td>
							<td><input type="text" value="<?php echo $dn['tu_sm_npwp']; ?>"></td>
							<td><input type="text" value="<?php echo $dn['tu_sm_mspj']; ?>" size="4"></td>
							<td><input type="text" value="<?php echo $dn['tu_sm_thpj']; ?>" size="4"></td>
							<td><?php echo $dn['tu_sm_hal']; ?></td>
							<td><?php echo $dn['tu_sm_noagd']; ?>/<?php echo $dn['tu_sm_th']; ?></td>
							<td><span class="glyphicon glyphicon-plus-sign add"></span></td>
						</tr>
<?php endforeach ?>
					</table>
					<pre><?php //echo $this->db->last_query(); ?></pre>
				</div>