<?php include(ROOT.'/app/layouts/header.php'); ?>

 
	<div class="container-fluid" id="body"  >
            <div class="row">
		<div class="col-sm-2 " id="">
                    <div class="wrapper container-fluid" id="lolFeed"  >
            			<ul id="list">
                            <li>Hellow lel</li>
                            <li>Hellow lel</li>
                            <li>Hellow lel</li>
                            <li>Hellow lel</li>
                            <li>Hellow lel</li>
                            <li>Hellow lel</li>
                            <li>Hellow lel</li>
            			</ul>
                    </div>
                </div>

		<div class="col-sm-10">
                    <div class="wrapper container-fluid" id="newsFeed">
                        <div class="row">  
                           <?php foreach($html->find('div.story')  as $e): ?>         
                        <div class="col-sm-10 news">
                            <div>
                            <i class="hrefs"><?= $e->find('h2.story__title')[0]; ?></i> 
                            <i class="hrefs_h"><a href="<?="https://news.yandex.ru" .  $e->find('a.link.link_theme_black')[0]->href?>" >Подробнее</a></i> 
                        </div>
                        <div> 
                            <?= $e->find('img')[0];?>
                        </div>
                        </div>
                           <?php endforeach; ?>     
                             
                        </div>
                    </div>
                </div>
            </div>
	</div>
	 
	

 

 
</body>
</html>