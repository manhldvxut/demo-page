<?php require(PATH.'/header.php'); ?>
<main>
	<section class="hea-top">
		<div class="bg-car">
			<img class="wow rubberBand" data-wow-delay="0.5s" src="<?php echo DOMAIN; ?>/images/top/bg-car.svg" alt="">
		</div>
		<div class="container news">
			<h1 class="big-line">Sticker<span class="jp">ステッカーを探す</span></h1>
		</div>
		<div class="radius-type2 list-news">
			<div class="container">
				<ul class="list-icon-people">
					<li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-01.svg" alt=""></li>
					<li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-03.svg" alt=""></li>
					<li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-02.svg" alt=""></li>
				</ul>
				<div class="sticker-detail">
					<div class="row">
						<div class="col-md-6">
							<div id="carousel-sticker" class="carousel slide" data-ride="carousel">
							    <div class="carousel-inner">
							        <div class="carousel-item active">
							            <img src="<?php echo DOMAIN; ?>/images/sticker/item01.png" alt="">
							        </div>
							        <div class="carousel-item">
							            <img src="<?php echo DOMAIN; ?>/images/sticker/item01.png" alt="">
							        </div>
							    </div>
							    <a class="carousel-control-prev" href="#carousel-sticker" role="button" data-slide="prev">
							        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							        <span class="sr-only">Previous</span>
							    </a>
							    <a class="carousel-control-next" href="#carousel-sticker" role="button" data-slide="next">
							        <span class="carousel-control-next-icon" aria-hidden="true"></span>
							        <span class="sr-only">Next</span>
							    </a>
							</div>
							<div class="container list-views px-0">
						        <div class="row carousel-indicators">
						            <div class="col-md-6 col-6 item">
						                <img src="<?php echo DOMAIN; ?>/images/sticker/item01.png" class="img-fluid" data-target="#carousel-sticker" data-slide-to="0" />
						            </div>
						            <div class="col-md-6 col-6 item">
						                <img src="<?php echo DOMAIN; ?>/images/sticker/item01.png" class="img-fluid" data-target="#carousel-sticker" data-slide-to="1" />
						            </div>
						        </div>
						    </div>
						    <div class="login-if">
								<ul class="style-disc">
									<li><span>エントリーには、<a href="<?php echo DOMAIN; ?>/login/">ログイン</a>が必要です。</span></li>
									<li><span>エントリー後、提携の可否については状況により一定のお時間をいただいております。</span></li>
									<li><span>エントリーいただいても、採用されない場合がございます。予め、ご了承ください。</span></li>
									<li><span>車体にステッカー広告を掲載時には、広告の下に同封する特定番号ステッカーを貼付する必要があります。</span></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="sticker-detail-info">
								<p class="news-red">new</p>
								<h2>○○○○○○○（企業名・サービス名が入ります）</h2>
								<p>本文通常です。この文章はダミーコピーですお読みにならないで下さい。構成を分かりやすくするため使用しています。本文通常です。この文章はダミーコピーですお読みにならないで下さい。構成を分かりやすくするため使用しています。</p>
								<a href="" class="btn-gradien" data-toggle="modal" data-target="#modan-sticker"> このステッカーにエントリーする</a>

								<!-- start-modan -->
								<div class="modal fade" id="modan-sticker" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
								    <div class="modal-content">
								      <div class="modal-body">
								      	<div class="avatar"><img src="<?php echo DOMAIN; ?>/images/sticker/images.jpg"></div>
								        <p>この広告にエントリーを行いますか？</p>
								      </div>
								      <div class="modal-footer">
								      	<a href="<?php echo DOMAIN; ?>/singin/" class="btn-red"> エントリーする</a>
								      	<a data-dismiss="modal" href="<?php echo DOMAIN; ?>/singin/" class="btn-red"> キャンセル</a>
								      </div>
								    </div>
								  </div>
								</div>
								<table class="company-table table table-bordered">
								    <tbody class="tab-cont">
								        <tr>
								            <th>ステッカーID</th>
								            <td class="desc">123456</td>
								        </tr>
								        <tr>
								            <th>企業名</th>
								            <td class="desc">株式会社○○○○○○○○</td>
								        </tr>
								        <tr>
								            <th>公式ウェブサイト</th>
								            <td class="desc">https://xxxx.jp</td>
								        </tr>
								        <tr>
								            <th>業種</th>
								            <td class="desc">○○○○○○○○</td>
								        </tr>
								        <tr>
								            <th>ご利用プラン</th>
								            <td class="desc">ミックスプラン 
								            	<a href="" class="link-cic">ご利用プランを確認する</a></td>
								        </tr>
								        <tr>
								            <th>ステッカー素材</th>
								            <td class="desc">ホワイト</td>
								        </tr>
								        <tr>
								            <th>広告対象エリア<br>(対象ナンバー地名表示区分)</th>
								            <td class="desc">神奈川県<br>横浜・川崎・相模・湘南</td>
								        </tr>
								        <tr>
								            <th>広告開始日（予定）</th>
								            <td class="desc">20xx年xx月xx日</td>
								        </tr>
								        <tr>
								            <th>応募開始日</th>
								            <td class="desc">20xx年xx月xx日</td>
								        </tr>
								    </tbody>
								</table>
							</div>
						</div>
					</div>
					
				</div>	
			</div>
            <section class="bg-company-footer">
                <div class="bg-company-footer-info">
                    <label>いますぐモーバに登録して充実のカーライフを！</label>
                    <a href="" class="btn-gradien m-auto"> 新規会員登録</a>
                </div>
            </section> <!-- end bg-footer -->
		</div> <!-- end-bg-boder-radius -->

		<ul class="nav-small">
			<li><a href="">トップページ</a></li>
			<li class="active">ステッカーを探す</li>
		</ul>
		<div class="small-car wow fadeInRight" data-wow-duration="2s"><img class="wow rubberBand" data-wow-delay="2s" src="<?php echo DOMAIN; ?>/images/top/small-car.svg"></div>
	</section>
</main>

<?php require(PATH.'/footer.php'); ?>