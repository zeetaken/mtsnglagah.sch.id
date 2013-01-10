<div id="table-content">
	<?php $this->load->view('admin/util/message'); ?>
<form id="mainform" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
	<tr>
		<th class="table-header-check"><a id="toggle-all" ></a> </th>
		<th class="table-header-repeat line-left "><a href="">Judul Berita</a>	</th>
		<th class="table-header-repeat line-left "><a href="">prewiew</a></th>
		<th class="table-header-repeat line-left "><a href="">Isi Berita</a></th>
		<th class="table-header-repeat line-left"><a href="">Kategori </a></th>
		<th class="table-header-repeat line-left"><a href="">Author</a></th>
		<th class="table-header-repeat line-left"><a href="">Tanggal</a></th>
		<th class="table-header-options line-left"><a href="">Opsi</a></th>
	</tr>
	<?php 
	foreach ($data->result() as $news) {
	
	echo'
	<tr>
		<td><input type="checkbox"/></td>
		<td>'.$news->jud.'</td>
		<td></td>
		<td></td>
		<td>'.$news->kat.'</td>		
		<td>'.$news->auth.'</td>
		<td>'.$news->tgl.'</td>
		<td class="options-width">
			<a href="" title="Edit" class="icon-1 info-tooltip"></a>			
		</td>
	</tr>';
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