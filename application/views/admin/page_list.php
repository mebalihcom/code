<h1 class="page-header">Page List</h1>
<div class="panel panel-default">
  <div class="panel-heading">Data Page List - <a href="<?=base_url()?>panel/page_list/add" class="btn btn-primary btn-sm"><em class="fa fa-plus"></em> Add Page</a></div>
  <div class="panel-body">
      <table class="table table-stripped table-bordered" id="table_id">
        <thead>
          <tr>
            <th>ID</th>
            <th>Page Title</th>
            <th>Body</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($pages)): foreach($pages as $page): ?>
            <tr>
              <td><?php echo $page['id_page']; ?></td>
              <td><?php echo $page['title']; ?></td>
              <td><?php echo $page['body']; ?></td>
              <td><?php echo $page['date']; ?></td>
              <td><?php if($page['status'] == 1){ echo "Publish"; }else{echo "Draf";} ?></td>
              <th><a href="<?=base_url()?>panel/page_list/edit/<?php echo $page['slug']; ?>" class="btn btn-default btn-sm"><em class="fa fa-pencil"></em></a><a href="<?=base_url()?>panel/page_list/delete/<?php echo $page['slug']; ?>" class="btn btn-danger btn-sm"><em class="fa fa-trash"></em></a></th>
            </tr>
          <?php endforeach; else: ?>
            <tr>
              <td colspan="6">Tidak ada post</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
  </div>
</div>