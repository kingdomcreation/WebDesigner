<div class="card box-shadow border-info">
    <div class="card-header text-white bg-info"><?php echo $title; ?></div>
    <div class="card-body">

        <div class="alert alert-info" role="alert">
            Complete <a href="/news">News</a> and <a href="/about">Static Pages</a> from tutorial.
        </div>
        
        <form action="/news">
            <div class="form-group row">
                <label for="textbox" class="col-4 col-sm-2 col-form-label text-right">Keywords:</label>
                <div class="col-8 col-sm-10">
                <input type="text" class="form-control" name="q" placeholder="Search...">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 offset-sm-2 col-8 col-sm-10">
                    <button type="submit" class="btn btn-info" id="button">Go</button>
                </div>
            </div>
        </form>

    </div>
</div>
