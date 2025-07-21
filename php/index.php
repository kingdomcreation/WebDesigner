<div class="card shadow border-info">
    <div class="card-header text-white bg-info"><?php echo $title; ?></div>
    <div class="card-body">

        <div class="alert alert-info" role="alert">
            Briefly describe what it does
        </div>
        
        <form>
            <div class="row mb-3">
              <div class="col-2 text-end">
                <label class="form-label" for="textbox">Input:</label>
              </div>
              <div class="col">
                <input class="form-control" id="textbox" type="text">
              </div>
            </div>
            <div class="row">
              <div class="offset-2">
                <button type="button" class="btn btn-info" id="button">Action</button>
              </div>
            </div>
        </form>

    </div>
</div>