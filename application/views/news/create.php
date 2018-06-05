<div class="card box-shadow border-white">
    <?php echo form_open('news/create'); ?>
    <div class="card-header bg-white">
      <button class="btn btn-success float-right">Save</button>
      <h3><?php echo $title; ?></h3> 
    </div>
    
    <div class="card-body">
      <?php echo ($messages = validation_errors())?'<div class="alert alert-danger">'.$messages.'</div>':''; ?>
      
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="">
      </div>
      <div class="form-group">
        <label for="text">Text</label>
        <textarea class="form-control" name="text" rows="3"></textarea>
      </div>
    </div>  
      
  </form>
</div>
