<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/header.php")  ?>
<div class="confirm_text">
    <p>ご予約の確認</p>
    <div class="confirm_table">
        <div class="confirm_border">
            <table cellspacing="25">
                <tr>
                    <td width="40%">
                        お名前
                    </td>
                    <td width="60%">
                        <?php
                        if (isset($_POST["name"])) {
                            echo $_POST["name"];
                        }
                        ?>
                        <?php
                        // もしくは三項演算子
                        // echo isset($_POST["name"])? $_POST["name"]:"";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        メールアドレス
                    </td>
                    <td>
                        <?php
                        if (isset($_POST["email"])) {
                            echo $_POST["email"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        電話番号
                    </td>
                    <td>
                        <?php
                        if (isset($_POST["tel"])) {
                            echo $_POST["tel"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4">
                        住所
                    </td>
                    <td class="no_underline">
                        <?php
                        if (isset($_POST["address"])) {
                            echo $_POST["address"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="no_underline">
                        <?php
                        if (isset($_POST["prefecture"])) {
                            echo $_POST["prefecture"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="no_underline">
                        <?php
                        if (isset($_POST["city"])) {
                            echo $_POST["city"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if (isset($_POST["house_number"])) {
                            echo $_POST["house_number"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        ご希望の宿泊プラン
                    </td>
                    <td>
                        <?php
                        if (isset($_POST["plan"])) {
                            echo $_POST["plan"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        大人の人数
                    </td>
                    <td>
                        <?php
                        if (isset($_POST["adult"])) {
                            echo $_POST["adult"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        お子様の人数
                    </td>
                    <td>
                        <?php
                        if (isset($_POST["kids"])) {
                            echo $_POST["kids"];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        特別リクエスト
                    </td>
                    <td>
                        <?php
                        if (isset($_POST["request"])) {
                            echo nl2br($_POST["request"]);
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <p class="send_text">上記内容で送信します</p>
        <form class="confirm_form flex_center" method="post">
            <input type="hidden" name="name" value=<?php echo $_POST["name"] ? $_POST["name"] : ""; ?>>
            <input type="hidden" name="email" value=<?php echo $_POST["email"] ? $_POST["email"] : ""; ?>>
            <input type="hidden" name="tel" value=<?php echo $_POST["tel"] ? $_POST["tel"] : ""; ?>>
            <input type="hidden" name="address" value=<?php echo $_POST["address"] ? $_POST["address"] : ""; ?>>
            <input type="hidden" name="prefecture" value=<?php echo $_POST["prefecture"] ? $_POST["prefecture"] : ""; ?>>
            <input type="hidden" name="city" value=<?php echo $_POST["city"] ? $_POST["city"] : ""; ?>>
            <input type="hidden" name="house_number" value=<?php echo $_POST["house_number"] ? $_POST["house_number"] : ""; ?>>
            <input type="hidden" name="plan" value=<?php echo $_POST["plan"] ? $_POST["plan"] : ""; ?>>
            <input type="hidden" name="adult" value=<?php echo $_POST["adult"] ? $_POST["adult"] : ""; ?>>
            <input type="hidden" name="kids" value=<?php echo $_POST["kids"] ? $_POST["kids"] : ""; ?>>
            <input type="hidden" name="request" value=<?php echo $_POST["request"] ? $_POST["request"] : ""; ?>>
            <input formaction="./#form" class="back_submit" type="submit" value="戻る">
            <input formaction="./thanks.php" type="submit" value="送信">
        </form>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/include/footer.php")  ?>