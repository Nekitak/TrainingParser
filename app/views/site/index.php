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
                           <?php foreach($html->find('h2.story__title') as $e): ?>         
                        <div class="col-sm-10 news">
                            <div>
                            <i class="hrefs"><?= $e->plaintext; ?></i><br/>
                            <i class="hres">Short Description</i><br/><br/>
                            <i class="hrefs_h"><a href="<?php //"https://vkyhne.ru" .  $e->find('a.product-name')[0]->href?>" >Подробнее</a></i> 
                        </div>
                        <div>
                            <img class = "image" src="<?php // $e->find('img.replace-2x')[0]->src?>">
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