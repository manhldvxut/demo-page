<?php require(PATH.'/header.php'); ?>
<main>
    <section class="hea-top">
        <div class="bg-car">
            <img class="wow rubberBand" data-wow-delay="0.5s" src="<?php echo DOMAIN; ?>/images/top/bg-car.svg" alt="">
        </div>
        <div class="container news">
            <h1 class="big-line">singin<span class="jp">新規登録</span></h1>
        </div>
        <div class="radius-type2 list-news">
            <div class="container guide-container">
                <ul class="list-icon-people">
                    <li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-01.svg" alt=""></li>
                    <li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-03.svg" alt=""></li>
                    <li><img class="wow bounceIn" data-wow-delay="1.5s" src="<?php echo DOMAIN; ?>/images/top/pe-02.svg" alt=""></li>
                </ul>
                <div class="singin">
                    <div class="content max-content">
                        <div class="box-contact">
                            <div class="step-contact">
                                <ul>
                                    <li>
                                        <div class="item-step text-center">
                                            <div class="numb active">1</div>
                                            <p>登録情報入力</p>
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
                            <div class="box-txt">
                                <p>必要事項をご入力の上、確認ボタンをクリックしてください。 </p>
                            </div>
                            <div class="form-contact max-content">
                                <h3>アカウント情報</h3>
                                <form action="" id="form">
                                    <div class="list-item-form">
                                        <div class="item">
                                            <div class="left">希望アカウント名 <span>必須</span></div>
                                            <div class="right"><input type="text" id="" class="max-inp" placeholder="半角英数字で8文字以上16文字以下で入力してください"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left">パスワード <span>必須</span></div>
                                            <div class="right"><input type="password" id="" class="max-inp" placeholder="半角英数字で8文字以上16文字以下で入力してください"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left one-check">パスワード <br>（確認用）<span>必須</span></div>
                                            <div class="right"><input type="password" id="" class="max-inp" placeholder="半角英数字で8文字以上16文字以下で入力してください"></div>
                                        </div>
                                    </div>
                                     <h3>アカウント情報</h3>
                                     <div class="list-item-form">
                                         <div class="item">
                                            <div class="left">オーナーカテゴリ<span>必須</span></div>
                                            <div class="right op-cic">
                                                <ul>
                                                    <li>
                                                        <input type="radio" checked="checked" value="個人" id="ct-12" name="singin-01">
                                                        <label for="ct-12">個人</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" value="企業" checked="" id="ct-13" name="singin-01">
                                                        <label for="ct-13">企業</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="left">お名前 <span>必須</span></div>
                                            <div class="right"><input type="text" id="name" class="max-inp" placeholder="入力してください"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left">お名前（フリガナ）<span>必須</span></div>
                                            <div class="right"><input type="text" id="name" class="max-inp" placeholder="入力してください"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left">性別<span>必須</span></div>
                                            <div class="right op-cic">
                                                <ul>
                                                    <li>
                                                        <input type="radio" value="男性" id="ct-8" name="singin-02">
                                                        <label for="ct-8">男性</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" value="女性" checked="checked" id="ct-9" name="singin-02">
                                                        <label for="ct-9">女性</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="left">生年月日</div>
                                            <div class="right">
                                              <ul class="list-inline">
                                                <li class="list-inline-item choose-select choose-time">
                                                  <select name="year">
                                                    <option value="1990">1990</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1990">1990</option>
                                                  </select>
                                                  <label>年</label>
                                                </li>
                                                <li class="list-inline-item choose-select choose-time">
                                                  <select name="month">
                                                    <option value="01" selected="">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                  </select>
                                                  <label>月</label>
                                                </li>
                                                <li class="list-inline-item choose-select choose-time">
                                                  <select name="day">
                                                    <option value="01" selected="">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                  </select>
                                                  <label>日</label>
                                                </li>
                                              </ul>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="left">メールアドレス <span>必須</span></div>
                                            <div class="right"><input type="text" id="" class="max-inp" placeholder="入力してください"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left">電話番号 <span>必須</span></div>
                                            <div class="right"><input type="text" class="max-inp" placeholder="例) 0310001000 ※半角数字ハイフン(-)不要"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left">LINE ID </div>
                                            <div class="right"><input type="text" id="" class="max-inp" placeholder="入力してください"></div>
                                        </div>
                                        <div class="item">
                                            <div class="left">運営との連絡手段<span>必須</span></div>
                                            <div class="right op-cic">
                                                <ul>
                                                    <li>
                                                        <input type="radio" checked="checked" value="電話" id="ct-22" name="singin-03">
                                                        <label for="ct-22">電話</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" value="メール" id="ct-33" name="singin-03">
                                                        <label for="ct-33">メール</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" value="LINE" checked="checked" id="ct-44" name="singin-03">
                                                        <label for="ct-44">LINE</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figure>住所</figure>
                                        <div class="item">
                                            <div class="left">郵便番号 <span>必須</span></div>
                                            <div class="right">
                                                <div class="otp-sub">
                                                    <input type="text" class="inp-otp" placeholder="1001000">
                                                    <div class="btn-click btn-path-top"><button>住所を自動入力</button></div>
                                                </div>
                                            </div>
                                            <div class="left">都道府県<span>必須</span></div>
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
                                            <div class="left">住所<span>必須</span></div>
                                            <div class="right"><input type="text" placeholder="市区町村、番地など 例) 中央区日本橋1-1"></div>
                                            <div class="left">建物名<span>必須</span></div>
                                            <div class="right"><input type="text" placeholder="例) XXXビル000など"></div>
                                        </div>
                                    </div>
                                    <div class="list-item-form">
                                        <h3>所有車情報</h3>
                                        <figure>車体画像</figure>
                                        <div class="item">
                                            <div class="left">全体 <span>必須</span></div>
                                            <div class="right">
                                                <input type="file" class="file" id="file-1" multiple="">
                                                <small>ナンバープレートが見える車全体の写真をアップロードしてください。(推奨ファイル形式：JPEG、PNG)</small>
                                            </div>
                                            <div class="left">側面<span>必須</span></div>
                                            <div class="right">
                                                <input type="file" class="file" id="file-1" multiple="">
                                                <small class="unit detail">ナンバープレートが見える車全体の写真をアップロードしてください。(推奨ファイル形式：JPEG、PNG)</small>
                                            </div>
                                            <div class="left">リア<span>必須</span></div>
                                            <div class="right">
                                                <input type="file" class="file" id="file-1" multiple="">
                                                <small class="unit detail">ナンバープレートが見える車全体の写真をアップロードしてください。(推奨ファイル形式：JPEG、PNG)</small>
                                            </div>
                                            <div class="left">車検証画像<span>必須</span></div>
                                            <div class="right">
                                                <input type="file" class="file" id="file-1" multiple="">
                                                <small class="unit detail">ナンバープレートが見える車全体の写真をアップロードしてください。(推奨ファイル形式：JPEG、PNG)</small>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="left">免許証画像<span>必須</span></div>
                                            <div class="right">
                                                <input type="file" class="file" id="file-1" multiple="">
                                                <small class="unit detail">ナンバープレートが見える車全体の写真をアップロードしてください。(推奨ファイル形式：JPEG、PNG)</small>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="left">所有ナンバープレート</div>
                                            <div class="right">
                                                <div class="avatar"><img src="<?php echo DOMAIN; ?>/images/contact/singin.jpg" alt=""></div>
                                            </div>
                                            <div class="left">①地名<span>必須</span></div>
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
                                            <div class="left">②分類番号<span>必須</span></div>
                                            <div class="right">
                                                <input type="text" id="" class="max-inp" placeholder="001">
                                            </div>
                                            <div class="left">③ひらがな<span>必須</span></div>
                                            <div class="right"><input type="text" id="" class="max-inp" placeholder="あ"></div>
                                            <div class="left">④登録番号<span>必須</span></div>
                                            <div class="right">
                                                <input type="text" id="" class="max-inp" placeholder="00-00">
                                            </div>
                                        </div>
                                        <div class="box-text-scroll">
                                            <div class="scrollbar" id="style-1">
                                                <div class="force-overflow">
                                                    <p>当社は、お客様個人を識別できる情報（以下「個人情報」といいます。）を適切に保護する為に、以下の取り組みを実施いたします。</p>
                                                    <ul>
                                                        <li>1.法令の遵守 <br>当社は、個人情報保護に関する関係法令、国が定める指針等及び社内規程を遵守致します。</li>
                                                        <li>2.個人情報の取得<br> 当社は、個人情報を取得する際には、その利用目的を明示し、お客様の同意の範囲内で、適正かつ公正な手段によって取得いたします。</li>

                                                        <li>3.利用目的 <br>当社は、お客様からご提供いただいた個人情報を、お客様とのご契約上の責務を果たすため、およびお客様に有用な情報をご提供するために利用いたします。</li>

                                                        <li>4.第三者提供 <br> 当社は、お客様の個人情報をあらかじめお客様の同意をいただいている場合および法令等で定められた場合、または当社と機密保持契約を締結している業務委託先に利用目的の達成に必要な範囲内で開示する場合を除き、第三者へ開示いたしません。</li>
                                                        <li>5.管理体制 <br> 当社は、お客様の個人情報保護のため、情報管理責任者や個人情報を取り扱う部門毎に部門別情報管理者を置き、個人情報の適切な管理に努めます。 また、業務に従事する者に対して適切な教育を実施いたします。</li>
                                                        <li>6.安全管理措置 <br>当社は、お客様からご提供いただいた個人情報に対して、不正アクセス・紛失・漏洩などを防止するためのセキュリティ対策を実施いたします。</li>
                                                </ul></div>
                                            </div>
                                        </div>
                                        <div class="remember">
                                            <input type="checkbox" id="fruit1" name="fruit-1" value="remember">
                                            <label for="fruit1">「個人情報の取り扱い」に同意する</label>
                                        </div>
                                        <div class="btn-contact">
                                            <button type="submit" class="path-bott">入力内容を確認する</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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