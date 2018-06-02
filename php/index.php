<div class="card box-shadow border-info">
    <div class="card-header text-white bg-info"><?php echo $title; ?></div>
    <div class="card-body">

        <div class="alert alert-info" role="alert">
            Briefly describe what it does
        </div>
        
        <form>
            <div class="form-group row">
                <label for="textbox" class="col-4 col-sm-2 col-form-label text-right">Input:</label>
                <div class="col-8 col-sm-10">
                <input type="text" class="form-control" id="textbox" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-2 col-8 col-sm-10">
                    <button type="button" class="btn btn-info" id="button">Action</button>
                </div>
            </div>
        </form>

    </div>
</div>