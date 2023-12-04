<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/header.php")  ?>
<div class="about">
    <div class="about_content">
        <div class="about_text">
            <img class="about_logo" src="./img/logo_gold.png" alt="">
            <p>
                自然美に囲まれた楽園で、<br>
                贅沢な癒しのひとときを<br>
                お過ごしください。
            </p>
        </div>
        <div class="about_images">
            <img src="./img/about_img_1.png" alt="">
            <img src="./img/about_img_2.png" alt="">
        </div>
    </div>
</div>
<div class="room">
    <img class="room_cloud" src="./img/room_cloud.png" alt="">
    <div class="room_content">
        <div class="content_title flex_center">
            <p class="ja_title">お部屋</p>
            <div class="line"></div>
            <p class="en_title">room</p>
        </div>
        <p class="room_description">
            「楽園雅苑」の豪華なお部屋は、大分県自然の美しさと格式の高いサービスが調和した完璧な空間を提供します。桜花の調べが響くプレミアスィート、静寂の庭園に囲まれたデラックスルーム、そして自然のぬくもりを感じるスタンダードルーム。どの部屋も極上の癒しとくつろぎがお待ちしております。贅沢な温泉体験と非日常のくつろぎをお楽しみください。
        </p>
        <div class="room_select">
            <div class="room_select_list flex_center">
                <p id="standard" class="active">
                    スタンダードルーム<br>
                    - 自然のぬくもり -
                </p>
                <p id="deluxe">
                    デラックスルーム<br>
                    - 静寂の庭園 -
                </p>
                <p id="premium">
                    プレミアスィート<br>
                    - 桜花の調べ -
                </p>
            </div>
        </div>
        <div class="rooms">
            <div id="standard_content" class="room_view active">
                <img src="./img/room_standard.jpg" alt="スタンダードルーム 自然のぬくもり">
                <div class="room_textarea">
                    <p class="title">自然のぬくもり</p>
                    <p class="text">「自然のぬくもり」スタンダードルームは、自然との共感を感じるお部屋です。山の景色を楽しむことができ、ナチュラルリトリートプランには朝食が含まれています。心地よいぬくもりとくつろぎのひとときを提供します。</p>
                </div>
            </div>
            <div id="deluxe_content" class="room_view">
                <img src="./img/room_deluxe.jpg" alt="デラックスルーム 静寂の庭園">
                <div class="room_textarea">
                    <p class="title">静寂の庭園</p>
                    <p class="text">「静寂の庭園」デラックスルームは、静寂と美しさに包まれた部屋です。個別の温泉ビューバルコニーからは、美しい庭園と温泉の景色が広がります。ロマンティックゲットアウェイプランで、特別なひとときを過ごしましょう。</p>
                </div>
            </div>
            <div id="premium_content" class="room_view">
                <img src="./img/room_premium.jpg" alt="プレミアスィート 桜花の調べ">
                <div class="room_textarea">
                    <p class="title">桜花の調べ</p>
                    <p class="text">「桜花の調べ」プレミアスィートは、最高級のラグジュアリーを追求した特別なお部屋です。広々とした空間に、温泉露天風呂が設けられ、そこからは四季折々の美しい景色を楽しむことができます。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reservation" id="form">
    <div class="content_title flex_center">
        <p class="ja_title">ご予約</p>
        <div class="line"></div>
        <p class="en_title">reservation</p>
    </div>
    <p class="reservation_text">「楽園雅苑 - 桜庭温泉の隠れ家 -」へのご予約、心よりお待ちしております。お手数をおかけいたしますが、以下のフォームに必要事項をご記入の上、ご送信ください。</p>
    <form action="./confirm.php" novalidate method="post">
        <div class="flex_center form_content">
            <p>お名前<span>＊</span></p>
            <div class="input_content">
                <input type="text" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "" ?>">
                <p class=" validation"></p>
            </div>
        </div>
        <div class="flex_center form_content">
            <p>メールアドレス<span>＊</span></p>
            <div class="input_content">
                <input type="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>">
                <p class="validation"></p>
            </div>
        </div>
        <div class="flex_center form_content">
            <p>電話番号<span>＊</span></p>
            <div class="input_content">
                <input type="tel" name="tel" value="<?php echo isset($_POST["tel"]) ? $_POST["tel"] : "" ?>">
                <p class="validation"></p>
            </div>
        </div>
        <div class="flex_center align-top form_content">
            <p class="top_text">ご住所<span>＊</span></p>
            <div class="address_content">
                <div class="flex_center short_input">
                    <p>郵便番号</p>
                    <div class="short_input_content">
                        <input type="text" name="address" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : "" ?>">
                        <p class="validation"></p>
                    </div>
                </div>
                <div class="flex_center short_input">
                    <p>都道府県</p>
                    <div class="short_input_content">
                        <input type="text" name="prefecture" value="<?php echo isset($_POST["prefecture"]) ? $_POST["prefecture"] : "" ?>">
                        <p class="validation"></p>
                    </div>
                </div>
                <div class="flex_center short_input">
                    <p>市区町村</p>
                    <div class="short_input_content">
                        <input type="text" name="city" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : "" ?>">
                        <p class="validation"></p>
                    </div>
                </div>
                <div class="flex_center short_input">
                    <p>町域・番地<br>建物名</p>
                    <div class="short_input_content">
                        <input type="text" name="house_number" value="<?php echo isset($_POST["house_number"]) ? $_POST["house_number"] : "" ?>">
                        <p class="validation"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex_center form_content">
            <p>ご希望の宿泊プラン<span>＊</span></p>
            <div class="input_content">
                <div class="form_select">
                    <select name="plan">
                        <option value="placeholder" hidden>選択してください</option>
                        <?php
                        $seats = array(
                            [
                                "name" => "スタンダードルーム",
                                "key" => "standard"
                            ],
                            [
                                "name" => "デラックスルーム",
                                "key" => "deluxe"
                            ],
                            [
                                "name" => "プレミアスィート",
                                "key" => "premier"
                            ],
                        );
                        foreach ($seats as $key => $value) {
                        ?>
                            <option <?php echo $_POST["plan"] == $value["key"] ? "selected" : "" ?> value="<?php echo $value["key"] ?>"><?php echo $value["name"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <p class="validation"></p>
            </div>
        </div>
        <div class="flex_center form_content">
            <p>大人の人数<span>＊</span></p>
            <div class="input_content">
                <div class="form_select">
                    <select name="adult">
                        <option value="placeholder" hidden>選択してください</option>
                        <?php
                        $seats = array("0", "1", "2", "3", "4", "5", "6", "7", 8);
                        foreach ($seats as $key => $value) {
                        ?>
                            <option <?php echo $_POST["adult"] === $value ? "selected" : "" ?> value="<?php echo $value ?>"><?php echo $value ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <p class="validation"></p>
            </div>
        </div>
        <div class="flex_center form_content">
            <p>お子様の人数<span>＊</span></p>
            <div class="input_content">
                <div class="form_select">
                    <select name="kids" id="">
                        <option value="placeholder" hidden>選択してください</option>
                        <?php
                        $seats = array("0", "1", "2", "3", "4", "5");
                        foreach ($seats as $key => $value) {
                        ?>
                            <option <?php echo $_POST["kids"] === $value ? "selected" : "" ?> value="<?php echo $value ?>"><?php echo $value ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <p class="validation"></p>
            </div>
        </div>
        <div class="flex_center form_content align-top">
            <p class="top_text">特別リクエスト</p>
            <textarea name="request" rows="10" cols=""><?php echo nl2br(isset($_POST["request"]) ? $_POST["request"] : "") ?></textarea>
        </div>
        <p class="form_text">予約を確認するため、お客様の連絡先情報をご提供いただきます。ご予約に関する詳細情報や特別なリクエストがございましたら、お知らせください。心よりお待ちしております。</p>
        <div class="submit_content">
            <input type="submit" value="送信する">
        </div>
    </form>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.php")  ?>