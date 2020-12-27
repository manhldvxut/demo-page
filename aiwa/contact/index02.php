<?php include '../layout/header.php';?>
	<main>
		<section id="breadcrumbs">
			<div class="container-fluid">
				<div class="content">
					<div class="info-bread text-center">
						<h2  class="text-uppercase">CONTACT</h2>
						<p class="tit-bread">お問い合わせ</p>
					</div>
				</div>
			</div>
		</section>
		<section id="bread">
			<ul class="list-bread">
				<li><a href="../index.php">トップページ</a></li>
				<li>お問い合わせ</li>
			</ul>
		</section>
		<section id="contact">
			<div class="container">
				<div class="content max-content">
					<div class="box-contact">
						<div class="step-contact step-step">
							<ul>
								<li>
									<div class="item-step text-center">
										<div class="numb">1</div>
										<p>問い合わせ内容入力</p>
									</div>
								</li>
								<li>
									<div class="item-step text-center">
										<div class="numb active">2</div>
										<p>内容確認</p>
									</div>
								</li>
								<li>
									<div class="item-step text-center">
										<div class="numb">3</div>
										<p>完了</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="box-txt text-center">
							<p class="font-weight-bold">お問い合わせご希望の方は下記フォームよりお送り下さい。</p>
							<p class="font-weight-bold">送信内容を確認させていただき担当よりご連絡致します。</p>
						</div>
						<div class="form-contact max-content-2">
							<form action="">
								<div class="infomation-contact">
									<div class="item-infomation">
										<div class="left">お問い合わせ種別 <span>必須</span></div>
										<div class="right">お取引について</div>
									</div>
									<div class="item-infomation">
										<div class="left">会社名</div>
										<div class="right">XXXXXXXXXXX</div>
									</div>
									<div class="item-infomation">
										<div class="left">お名前 <span>必須</span></div>
										<div class="right">山田太郎</div>
									</div>
									<div class="item-infomation">
										<div class="left">フリガナ <span>必須</span></div>
										<div class="right">ヤマダタロウ</div>
									</div>
									<div class="item-infomation">
										<div class="left">郵便番号 <span>必須</span></div>
										<div class="right">1001000</div>
									</div>
									<div class="item-infomation">
										<div class="left">
											<ul>
												<li>都道府県</li>
												<li>住所</li>
												<li>建物名</li>
											</ul>
										</div>
										<div class="right">
											<ul>
												<li>東京都</li>
												<li>中央区日本橋1-1</li>
												<li>XXXビル000</li>
											</ul>
										</div>
									</div>
									<div class="item-infomation">
										<div class="left">電話番号 <span>必須</span></div>
										<div class="right">0310001000</div>
									</div>
									<div class="item-infomation">
										<div class="left">メールアドレス <span>必須</span></div>
										<div class="right">example@xxxxxx.co.jp</div>
									</div>
									<div class="item-infomation">
										<div class="left">お問い合わせ内容 <span>必須</span></div>
										<div class="right">XXXXXXXXXXXXXXXXXXXXXXXXX</div>
									</div>
								</div>
								<div class="step-ctn">
									<ul class="text-center">
										<li><a href="index.php" class="back-step path-left">戻る</a></li>
										<li><a href="index03.php" class="next-step path-bott">送信する</a></li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php include '../layout/footer.php';?>