<?php require(PATH.'/header.php'); ?>
<main>
	<section class="hea-top">
		<div class="bg-car">
			<img class="wow rubberBand" data-wow-delay="0.5s" src="<?php echo DOMAIN; ?>/images/top/bg-car.svg" alt="">
		</div>
		<div class="container news">
			<h1 class="big-line">PASSWORD<span class="jp">パスワードをお忘れの方へ</span></h1>
		</div>
		<div class="radius-type2 list-news">
			<div class="container guide-container">
				<ul class="list-icon-people">
					<li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-01.svg" alt=""></li>
					<li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-03.svg" alt=""></li>
					<li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-02.svg" alt=""></li>
				</ul>

				<div class="box-contact singin">

                    <div class="box-txt">
                        <p>必要事項をご入力の上、送信ボタンをクリックしてください。 <br>
                        ご登録のメールアドレスへ新しいパスワードを送信致します。</p>
                    </div>
                    <div class="form-contact max-content">
                        <h3>登録アカウント名</h3>

                        <form action="" method="" id="" enctype="">
                            <input type="hidden" name="_token" value="V7p7276MticyqhIcljTDOOiwJKMbV8oj2WSQqWKa">
                            <div class="list-item-form">
                                <div class="item">
                                    <div class="left">アカウント名 <span>必須</span></div>
                                    <div class="right">
                                        <input type="text" name="username" value="" class="max-inp" placeholder="半角英数字で8文字以上16文字以下で入力してください">
                                                                                    </div>
                                </div>
                            
                            </div>
                            
                                <div class="btn-contact">
                                    <button type="submit" class="path-bott">入力内容を送信する</button>
                                </div>

                        </form>
                    </div>
                </div>
				
			</div>
		</div> <!-- end-bg-boder-radius -->

		<ul class="nav-small">
			<li><a href="">トップページ</a></li>
			<li class="active">ログイン</li>
		</ul>
		<div class="small-car wow fadeInRight" data-wow-duration="2s"><img class="wow rubberBand" data-wow-delay="2s" src="<?php echo DOMAIN; ?>/images/top/small-car.svg"></div>
	</section>
</main>

<?php require(PATH.'/footer.php'); ?>