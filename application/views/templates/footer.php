
<?php if (!isset($cover)): ?>
			</div>
		</div>
<?php endif ?>
		<footer class="hidden-print">
			<address>&copy;2014 k.lab</address>
		</footer>
		<script src="/js/flat-ui.min.js"></script>
<?php //<script src="/js/prettify.js"></script> ?>
		<script src="/js/application.js"></script>
<?php if (isset($js)): ?>
<?php foreach ($js as $script): ?>
		<script src="/js/<?php echo $script; ?>.js"></script>
<?php endforeach ?>
<?php endif ?>
<?php //<script src="/js/bootstrap.min.js"></script> ?>
<?php if (isset($_SESSION['script']['$tooltip'])): ?>
		<script type="text/javascript">$(function() {
			$("[data-toggle='tooltip']").tooltip();
		});</script>
<?php endif ?>
<?php if (isset($tailscript)): ?>
		<script type="text/javascript"><?php print_r($tailscript); ?></script>
<?php endif ?>
<?php if (isset($_SESSION['script']['dafnom'])): ?>
		<script type="text/javascript">
			/*$('span.add').click(function() {
				$insert = '<td><label class="checkbox" for="' + i + '"><input type="checkbox" name="check[]" value="' + i + '" data-toggle="checkbox" id="checkbox' + i + '"></label></td>';
				$insert += '<td style="text-align: left;"><input type="hidden" name="rik_npwp[]" value="'+ $(this).parent().parent().children().first().next().children().first().val() +'">' + $(this).parent().parent().children().first().next().text() + '</td>';
				$insert += '<td style="text-align: center;"><input type="hidden" name="rik_kode[]" value="2182">'+ $(this).parent().parent().children().first().next().next().children().first().val() +'</td>';
				$insert += '<td style="text-align: center;"><input type="text" class="form-control char4" name="rik_ms1[]"></td>';
				$insert += '<td style="text-align: center;"><input type="text" class="form-control char4" name="rik_ms2[]"></td>';
				$insert += '<td colspan="3"><input type="hidden" name="rik_prognosa[]" value="0"></td>';
				$(this).parent().parent().after('<tr>' + $insert + '</tr>');
				i++;
			});*/
var i = 1;
$('span.add').click(function() {
	var check = document.createElement("input");
	check.type = "hidden";
	check.name = "check[]";
	check.value = "insert" + i;
	var col1 = document.createElement("td");
	col1.appendChild(check);

	var rik_npwp = document.createElement("input");
	rik_npwp.type = "hidden";
	rik_npwp.name = "rik_npwp[]";
	rik_npwp.value = $(this).parent().parent().children().first().next().children().first().val();
	var col2 = document.createElement("td");
	col2.appendChild(rik_npwp);
	col2.appendChild(document.createTextNode($(this).parent().parent().children().first().next().text()));

	var rik_kode = document.createElement("input");
	rik_kode.type = "hidden";
	rik_kode.name = "rik_kode[]";
	rik_kode.value = "";
	var col3 = document.createElement("td");
	col3.appendChild(rik_kode);
	col3.appendChild(document.createTextNode($(this).parent().parent().children().first().next().text()));

	var rik_ms1 = document.createElement("input");
	rik_ms1.className = "form-control";
	rik_ms1.type = "text";
	rik_ms1.name = "rik_ms1[]";
	var col4 = document.createElement("td");
	col4.appendChild(rik_ms1);

	var rik_ms2 = document.createElement("input");
	rik_ms2.className = "form-control";
	rik_ms2.type = "text";
	rik_ms2.name = "rik_ms2[]";
	var col5 = document.createElement("td");
	col5.appendChild(rik_ms2);

	var rik_prognosa = document.createElement("input");
	rik_prognosa.type = "hidden";
	rik_prognosa.name = "rik_prognosa[]";
	rik_prognosa.value = "0";
	var col6 = document.createElement("td");
	col6.colspan = 3;
	col6.appendChild(rik_prognosa);

	var row = document.createElement("tr");
	row.appendChild(col1);
	row.appendChild(col2);
	row.appendChild(col3);
	row.appendChild(col4);
	row.appendChild(col5);
	row.appendChild(col6);
	$(this).parent().parent().after(row);
	i++;
});
</script>
<?php endif ?>
	</body>
</html>