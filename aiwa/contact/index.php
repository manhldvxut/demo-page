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
						<div class="title-contact text-center">
							<h3 class="line">お電話・FAXでのお問い合わせ</h3>
						</div>
						<div class="phone-number">
							<ul class="text-center">
								<li class="">
									<div class="item">
										<div class="phone"><span>TEL</span><a href="tel:045-812-8111">045-812-8111</a></div>
										<div class="desc">受付時間：月曜日～金曜日(年末年始を除く)9:00～18:00</div>
									</div>
								</li>
								<li class="">
									<div class="item">
										<div class="phone"><span>FAX</span><a href="tel:045-812-8111">045-812-8111</a></div>
										<div class="desc">窓口：本社(神奈川県横浜市戸塚区川上町595-1)</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="title-contact text-center">
							<h3 class="line">メールフォームでのお問い合わせ</h3>
						</div>
						<div class="step-contact">
							<ul>
								<li>
									<div class="item-step text-center">
										<div class="numb active">1</div>
										<p>フォーム入力</p>
									</div>
								</li>
								<li>
									<div class="item-step text-center">
										<div class="numb">2</div>
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
							<p class="font-weight-bold">お問い合わせご希望の方は下記フォームよりお送り下さい。 </p>
							<p class="font-weight-bold">送信内容を確認させていただき担当よりご連絡致します。</p>
						</div>
						<div class="form-contact max-content">
							<form action="index02.php">
								<div class="list-item-form">
									<div class="item">
										<div class="left">お問い合わせ種別 <span>必須</span></div>
										<div class="right">
											<ul>
												<li>
													<input type="radio" name="form-contact" checked id="ct-1">
													<label for="ct-1">お取引について</label>
												</li>
												<li>
													<input type="radio" name="form-contact" id="ct-2">
													<label for="ct-2">業務提携</label>
												</li>
												<li>
													<input type="radio" name="form-contact" id="ct-3">
													<label for="ct-3">採用</label>
												</li>
												<li>
													<input type="radio" name="form-contact" id="ct-4">
													<label for="ct-4">その他</label>
												</li>
											</ul>
										</div>
									</div>
									<div class="item">
										<div class="left">会社名</div>
										<div class="right"><input type="text" class="max-inp" placeholder="入力してください"></div>
									</div>
									<div class="item">
										<div class="left">お名前 <span>必須</span></div>
										<div class="right"><input type="text" class="max-inp" placeholder="山田太郎"></div>
									</div>
									<div class="item">
										<div class="left">フリガナ <span>必須</span></div>
										<div class="right"><input type="text" class="max-inp" placeholder="ヤマダタロウ"></div>
									</div>
									<div class="item">
										<div class="left">郵便番号 <span>必須</span></div>
										<div class="right">
											<div class="otp-sub">
												<input type="text" class="inp-otp" placeholder="1001000">
												<div class="btn-click btn-path-top"><button>住所を自動入力</button></div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="left">都道府県</div>
										<div class="right">
											<div class="choose-select max-inp">
												<select name="" id="" class="">
													<option value="">選択してください</option>
													<option value="">選択してください</option>
													<option value="">選択してください</option>
													<option value="">選択してください</option>
													<option value="">選択してください</option>
												</select>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="left">住所</div>
										<div class="right"><input type="text" placeholder="市区町村、番地など 例)中央区日本橋1-1"></div>
									</div>
									<div class="item">
										<div class="left">建物名</div>
										<div class="right"><input type="text" placeholder="例) XXXビル000など"></div>
									</div>
									<div class="item">
										<div class="left">電話番号 <span>必須</span></div>
										<div class="right"><input type="text" class="max-inp" placeholder="例) 0310001000 ※半角数字、ハイフン(-)不要"></div>
									</div>
									<div class="item">
										<div class="left">メールアドレス <span>必須</span></div>
										<div class="right"><input type="text" class="max-inp" placeholder="例) example@xxxxxx.co.jp"></div>
									</div>
									<div class="item">
										<div class="left">お問い合わせ内容 <span>必須</span></div>
										<div class="right"><textarea name="" placeholder="入力して下さい" id="" cols="30" rows="10"></textarea></div>
									</div>
								</div>
								<div class="box-text-scroll">
									<div class="scrollbar" id="style-1">
								      <div class="force-overflow">
								      	<p>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
										<ul>
											<li>1.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>2.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>3.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします組みを実施いた</li>
											<li>4.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします 組みを実施いたします</li>
										</ul>
										<p>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
										<ul>
											<li>1.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>2.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>3.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>4.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします 組みを実施いたします</li>
										</ul>
										<p>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
										<ul>
											<li>1.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>2.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>3.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします組みを実施いた</li>
											<li>4.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします 組みを実施いたします</li>
										</ul>
										<p>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
										<ul>
											<li>1.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>2.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>3.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします</li>
											<li>4.法令の遵守 <br>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします 組みを実施いたします</li>
										</ul>
								      </div>
								    </div>
								</div>
								<div class="remember text-center">
									<input type="checkbox" id="fruit1" name="fruit-1" value="remember">
 		 							<label for="fruit1">愛和食品のプライバシーポリシーに同意します。</label>
								</div>
								<div class="btn-contact text-center">
									<button type="submit" class="path-bott">確認画面へ進む</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php include '../layout/footer.php';?>