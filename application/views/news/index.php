<div class="card box-shadow border-info">
    <div class="card-header text-white bg-info">
      <form action="/news/create">
        <button class="btn btn-secondary float-right">Create</button>
      </form>
      <h3><?php echo $title; ?></h3> 
      </div>
  
      <ul class="list-group list-group-flush">
        
        <?php foreach ($news as $news_item): ?>
        <li class="list-group-item">
          <i class="fa fa-file-o text-muted pr-2"></i>
          <a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a></li>
        <?php endforeach; ?>
      </ul>
</div>
