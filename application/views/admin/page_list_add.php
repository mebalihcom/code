<h1 class="page-header">Page List</h1>
<div class="panel panel-default">
  <div class="panel-heading">Data Page List - <a href="" class="btn btn-primary btn-sm"><em class="fa fa-plus"></em> Add Page</a></div>
  <div class="panel-body">
    <div class="col-lg-6 col-lg-offset-3">
       <?=form_open('panel/page_list/add', ['class' => 'form'])?>
        <div class="form-group">
          <label>Page Category</label>
          <select name="category" class="form-control">
            <?php foreach ($page_category as $category): ?>
              <option value="<?=$category->id_page_category?>"><?=$category->page_cat_name?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="text" name="date" class="form-control" value="<?=date('Y-m-d')?>" disabled>
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Body</label>
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        </div>
      <?=form_close()?>
    </div>
     
  </div>
</div>