<?php
//下記のパス「pro_name」を変更
  include_once $_SERVER['DOCUMENT_ROOT'].'/gulp-templ/assets/inc/config.php'; ?>
<!-- include header --> 
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="" class="btn-red m-auto btn-search"> ステッカーを探す <span>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><defs><style>.a{fill:#dc000c;}</style></defs><path class="a" d="M13.148,11.019a6.328,6.328,0,1,0-2.13,2.128l4.293,4.293,2.129-2.13Zm-5.395.64a3.9,3.9,0,1,1,3.905-3.9,3.91,3.91,0,0,1-3.905,3.9Z" transform="translate(-1.44 -1.44)"></path></svg>
				</span></a>
			</div>
			<div class="col-md-4">
				<a href="" class="btn-gradien m-auto"> まずは新規会員登録</a>
			</div>
			<div class="col-md-4">
				<a class="btn-blue" href="">詳しくはこちら</a>
			</div>
			<div class="col-md-4">
				<a href="" class="btn-cic"> ページタイトル <span>
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"><defs><style>.a{fill:#dc000c;}.b{fill:#fff;}</style></defs><g transform="translate(-386 -297)"><circle class="a" cx="9.5" cy="9.5" r="9.5" transform="translate(386 297)"></circle><path class="b" d="M932.82,244.681c1.294.689,1.294,1.817,0,2.506l-3.467,1.847c-1.294.689-2.353.134-2.353-1.234v-3.73c0-1.368,1.059-1.923,2.353-1.234Z" transform="translate(-534.395 60.204)"></path></g></svg>
				</span></a>
			</div>
			<div class="col-md-4">
				<a class="c-more-button js-hover" href="/recruit/newgrads/staff/">
		            <div class="c-more-button__label">More</div>
		            <div class="c-more-button__line c-more-button__line--01"></div>
		            <div class="c-more-button__line c-more-button__line--02"></div>
		        </a>
			</div>
			<div class="col-md-4">
				<a href="" target="_blank" class="recruit__link"><span>VIEW MORE</span></a>
			</div>
		</div>
		<label> link tag</label>
		<div class="row">
            <div class="col-md-6">
                <a href="" class="link-cic">テキストリンク</a>
                <a href="" class="link-brank">テキストリンク</a>
                <a href="" class="link-pdf">テキストリンク</a>
                <a href="" class="link-excel">テキストリンク</a>
            </div>
            <div class="col-md-6"> 
                <div class="arrow-right"></div>
                <div class="triangle-bottom"></div>
                <div class="step-flow"></div>
            </div>
        </div>
        <label>search</label>
        <div class="container">
        	<form method="get" action="" class="section-intro--search-form mb-5">
	            <div class="search">
	                <input class="search-txt" type="text" name="" placeholder="Type to search">
	                <a class="search-btn" href="#"></a>
	            </div>
	        </form>

	        <table class="table table-bordered">
	            <tbody class="tab-cont">
	                <tr>
	                    <th>会社名</th>
	                    <td class="desc">本文は基準が14pxで、文字間はノーマル。行間は1.8です</td>
	                </tr>
	                <tr>
	                    <th>代表者</th>
	                    <td class="desc">本文は基準が14pxで、文字間はノーマル。行間は1.8です</td>
	                </tr>
	                <tr>
	                    <th>本社所在地</th>
	                    <td class="desc">本文は基準が14pxで、文字間はノーマル。行間は1.8です</td>
	                </tr>
	            </tbody>
	        </table>
        </div>
	</div>
</main>
<!-- include footer --> 
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/footer.php'; ?>