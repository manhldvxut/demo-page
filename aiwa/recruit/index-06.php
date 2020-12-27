<?php include '../layout/header.php';?>
	<main>
		<section id="bread-rec" class="bg-none p-0">
			<div class="avarta-rec">
				<img src="../images/recruit/bg-3.png" class="img-fluid w-100" srcset="../images/recruit/bg-3.png, ../images/recruit/bg-3@2x.png 2x" alt="">
				<div class="info-brd">
					<div class="container">
						<div class="br-top rock max-company">
							<p>AIWA RECRUIT</p>
							<h2>ENTRY</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="max-company">
				<div class="bread">
					<ul class="bread-new bread-srv">
						<li><a href="../index.php">トップページ</a></li>
						<li>採用情報</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="here">
			<div class="click-here  wow fadeInRight wHighlight" data-wow-delay=".2s"><a href=""></a><div class="text-center"><span>応募はこちら</span><label>Entry</label></div></div>
		</section>
		<section id="entry" class="pb-100">
			<div class="container">
				<div class="max-entry">
					<div class="title-contact text-center">
						<h3 class="line">新卒採用エントリー</h3>
					</div>
					<ul class="list-not text-center">
						<li>新卒採用は下記のサイトからも受け付けております。</li>
						<li>ご希望の方はこちらからエントリーを行ってください。</li>
					</ul>
					<div class="logo-part text-center">
						<ul class="list-inline">
							<li class="list-inline-item"><img src="../images/recruit/part-1.png" class="img-fluid w-100" srcset="../images/recruit/part-1.png, ../images/recruit/part-1@2x.png 2x" alt=""></li>
						</ul>
					</div>
					<div class="step-contact step-entry">
						<ul>
							<li>
								<div class="item-step text-center">
									<div class="numb active">1</div>
									<p>問い合わせ内容入力</p>
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
					<div class="form-contact">
						<form action="index-07.php">
							<div class="list-item-form">
								<div class="item">
									<div class="left">希望職種 <span>必須</span></div>
									<div class="right">
										<ul>
											<li>
												<input type="radio" name="form-contact" id="ct-1">
												<label for="ct-1">総合職</label>
											</li>
										</ul>
									</div>
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
											<div class="btn-click"><button class="numb-entry">住所を自動入力</button></div>
										</div>
									</div>
								</div>
								<div class="item border-0">
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
								<div class="item item-boder">
									<div class="left">住所</div>
									<div class="right"><input type="text" class="max-inp" placeholder="市区町村、番地など 例) 東京都中央区日本橋1-1"></div>
								</div>
								<div class="item">
									<div class="left">建物名</div>
									<div class="right"><input type="text" class="max-inp" placeholder="例) XXXビル000など"></div>
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
									<div class="left">生年月日<span>必須</span></div>
									<div class="right">
										<ul class="list-inline">
											<li class="list-inline-item choose-select choose-time">
												<select name="" id="">
													<option value="">1985</option>
													<option value="">1986</option>
													<option value="">1987</option>
													<option value="">1988</option>
												</select>
												<label>年</label>
											</li>
											<li class="list-inline-item choose-select choose-time">
												<select name="" id="">
													<option value="">12</option>
													<option value="">11</option>
													<option value="">10</option>
													<option value="">9</option>
												</select>
												<label>月</label>
											</li>
											<li class="list-inline-item choose-select choose-time">
												<select name="" id="">
													<option value="">31</option>
													<option value="">30</option>
													<option value="">29</option>
													<option value="">28</option>
												</select>
												<label>日</label>
											</li>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="left">年齢<span>必須</span></div>
									<div class="right">
										<ul class="list-inline">
											<li class="list-inline-item choose-select choose-time">
												<select name="" id="">
													<option value="">1985</option>
													<option value="">1986</option>
													<option value="">1987</option>
													<option value="">1988</option>
												</select>
												<label>歳</label>
											</li>
										</ul>
									</div>
								</div>
								<div class="item align-items-center">
									<div class="left">履歴書の添付</div>
									<div class="right">
										<div class="file-upload">
											<input type="file" name="img[]" class="input-file">
											<div class="input-group group-file">
												<input type="text" class="form-control inp-file" readonly placeholder="ファイルが選択されていません">
												<span class="input-group-btn">
													<button class="upload-field" type="button">ファイルを追加する</button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="notc-red">履歴書を添付された場合、下記の項目の記入の必要はありません。</div>
								</div>
								<div class="item">
									<div class="left">学歴</div>
									<div class="right"><textarea name="" placeholder="入力して下さい" id="" cols="30" rows="10"></textarea></div>
								</div>
								<div class="item">
									<div class="left">志望動機</div>
									<div class="right"><textarea name="" placeholder="入力して下さい" id="" cols="30" rows="10"></textarea></div>
								</div>
								<div class="item">
									<div class="left">保有資格</div>
									<div class="right"><textarea name="" placeholder="入力して下さい" id="" cols="30" rows="10"></textarea></div>
								</div>
								<div class="item">
									<div class="left">自己PR</div>
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
							<div class="remember">
								<input type="checkbox" id="fruit1" name="fruit-1" value="remember">
		 							<label for="fruit1">当社の定める個人情報保護方針に同意します。<span>必須</span></label>
							</div>
							<div class="btn-step-entry text-center">
								<ul class="list-inline">
									<li class="list-inline-item"><input type="submit" class="clc-st e-next" value="確認画面へ"></li>
								</ul>
							</div>
						</form>
					</div>
			    </div>
			</div>
		</section>
		<section class="box-entry text-center">
 			<div class="title-rec text-center rock"><h2>Entry</h2></div>
 			<div class="btn-ent">
 				<ul class="list-inline-item">
 					<li class="list-inline-item"><a href="">新卒エントリー</a></li>
 					<li class="list-inline-item"><a href="">中途エントリー</a></li>
 				</ul>
 			</div>
 			<p>お急ぎの方はお電話でも受け付けております。</p>
 			<div class="tel"><span>TEL</span><a href="tel: 045-812-8112">045-812-8112</a></div>
 		</section>
	</main>
<?php include '../layout/footer.php';?>

<script>
	$(document).on('click', '.upload-field', function(){
	  var file = $(this).parent().parent().parent().find('.input-file');
	  file.trigger('click');
	});
	$(document).on('change', '.input-file', function(){
	  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});
</script>