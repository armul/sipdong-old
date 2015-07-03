				<script type="text/javascript">
var daftar = [
<?php foreach ($pegawai as $g => $peg): ?>
	[
<?php foreach ($peg['pen'] as $n => $pen): ?>
		["<?php echo $pen['ip']; ?>", "<?php echo ucwords(strtolower($pen['nama'])); ?>"]<?php echo $n == count($peg['pen']) - 1 ? "\n" : ",\n"; ?>
<?php endforeach ?>
	]<?php echo $g == count($pegawai) - 1 ? "\n" : ",\n"; ?>
<?php endforeach ?>
];
function pilihPenilai(i) {
	var penilai = document.getElementById('penilai');
	while (penilai.firstChild) {
    	penilai.removeChild(penilai.firstChild);
	}
	for (j = 0; j <= daftar[i].length - 1; j++) {
		var option = document.createElement('option');
		option.appendChild(document.createTextNode(daftar[i][j][1]));
		option.value = daftar[i][j][0];
		penilai.appendChild(option);
	}
}
				</script>
				<div class="col-md-9">
<?php if (isset($message)): ?>
					<div class="alert alert-success"><?php echo $message; ?></div>
<?php endif ?>
					<form role="form" method="post" action="/penghargaan/penilaian">
						<table class="table">
							<tr>
								<th>Pegawai</th>
								<td>
									<select name="pegawai" id="pegawai" class="form-control" onchange="pilihPenilai(this.selectedIndex)">
<?php foreach ($pegawai as $peg): ?>
										<option value="<?php echo $peg['ip']; ?>"><?php echo ucwords(strtolower($peg['nama'])); ?></option>
<?php endforeach ?>
									</select>
								</td>
							</tr>
							<tr>
								<th>Penilai</th>
								<td>
									<select name="penilai" id="penilai" class="form-control">
<?php foreach ($pegawai[0]['pen'] as $pen): ?>
										<option value="<?php echo $pen['ip']; ?>"><?php echo ucwords(strtolower($pen['nama'])); ?></option>
<?php endforeach ?>
									</select>
								</td>
							</tr>
						</table>
						<div class="form-group">
							<button type="submit" name="nilai" class="btn btn-primary">Nilai</button>
						</div>
					</form>
				</div>