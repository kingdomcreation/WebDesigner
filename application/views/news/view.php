<div class="card box-shadow border-info">
    <div class="card-header text-white bg-info">
      <form action="/news">
        <button class="btn btn-secondary float-right">Back</button>
      </form>
      <h3>News</h3> 
    </div>
    <div class="card-body">
        
        <h4 class="card-title"><?php echo $news_item['title']; ?></h4>
            
        <p class="card-text"><?php echo $news_item['text']; ?></p>

    </div>
</div>
