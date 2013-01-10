<div id="table-content">
	<?php $this->load->view('admin/util/message'); ?>
<form id="mainform" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
	<tr>
		<th class="table-header-check"><a id="toggle-all" ></a> </th>
		<th class="table-header-repeat line-left "><a>Nomor</a></th>
		<th class="table-header-repeat line-left "><a>Detail Soal</a>	</th>
		<th class="table-header-repeat line-left "><a>pilahan A</a></th>
		<th class="table-header-repeat line-left "><a>pilahan B</a></th>
		<th class="table-header-repeat line-left"><a>pilahan C </a></th>
		<th class="table-header-repeat line-left"><a>pilahan D</a></th>
		<th class="table-header-repeat line-left"><a>Jawaban</a></th>
		<th class="table-header-repeat line-left"><a>Mapel</a></th>
		<th class="table-header-options line-left"><a>Opsi</a></th>
	</tr>
	<?php 
	foreach ($data->result() as $news) {
	$n=1;
	echo'
	<tr>
		<td><input type="checkbox"/></td>
		<td>'.$n.'</td>
		<td>'.$news->soal.'</td>		
		<td>'.$news->pil_a.'</td>		
		<td>'.$news->pil_b.'</td>
		<td>'.$news->pil_c.'</td>
		<td>'.$news->pil_d.'</td>
		<td>'.$news->jwb.'</td>
		<td>'.$news->kd_mapel.'</td>
		<td class="options-width">
			<a href="" title="Edit" class="icon-1 info-tooltip"></a>			
		</td>
	</tr>';
	$n++;
	}
	?>
	</table>
</form>
</div>
<div id="actions-box">
	<a href="" class="action-slider"></a>
	<div id="actions-box-slider">
		<a href="" class="action-edit">Edit</a>
		<a href="" class="action-delete">Delete</a>
	</div>
	<div class="clear"></div>
</div>

<!--  start paging..................................................... -->
<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
<tr>
<td>
	<a href="" class="page-far-left"></a>
	<a href="" class="page-left"></a>
	<div id="page-info">Page <strong>1</strong> / 15</div>
	<a href="" class="page-right"></a>
	<a href="" class="page-far-right"></a>
</td>
<td>
<select  class="styledselect_pages">
	<option value="">Number of rows</option>
	<option value="">1</option>
	<option value="">2</option>
	<option value="">3</option>
</select>
</td>
</tr>
</table>
<!--  end paging................ -->