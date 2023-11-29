$(function(){
    $('.room_select_list p').click(function(){
        var id = $(this).attr('id');
        $(".room_select_list p").removeClass("active");
        $(this).addClass("active");
        $(".room_view").removeClass("active");
        $("#"+id+"_content").addClass("active");
    });

    $("form").submit(function(){
        $(".validation").empty();
        var validation_flg = false;
        // 名前
        var name = $('input[name="name"]').val();
        if(name == "") {
            $('input[name="name"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // メールアドレス
        var email = $('input[name="email"]').val();
        if(email == "") {
            $('input[name="email"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        } else if(email.match(/.+@.+\..+/)==null) {
            $('input[name="email"]').next('.validation').text("＊正しいメールアドレスを入力してください");
            validation_flg = true;
        }

        // 電話番号
        var tel = $('input[name="tel"]').val();
        if(tel == "") {
            $('input[name="tel"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        } else if(tel) {
            const regexp = /^0\d{9,10}$/;
            if(!regexp.test(tel)) {
                $('input[name="tel"]').next('.validation').text("＊正しい電話番号で入力してください");
                validation_flg = true;
            }
        }

        // 郵便番号
        var address = $('input[name="address"]').val();
        if(address == "") {
            $('input[name="address"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // 都道府県
        var prefecture = $('input[name="prefecture"]').val();
        if(prefecture == "") {
            $('input[name="prefecture"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // 市区町村
        var city = $('input[name="city"]').val();
        if(city == "") {
            $('input[name="city"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // 町域・番地 建物名
        var house_number = $('input[name="house_number"]').val();
        if(house_number == "") {
            $('input[name="house_number"]').next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // ご希望の宿泊プラン
        var plan = $('select[name="plan"]').val();
        if(plan == "placeholder") {
            $('select[name="plan"]').parent().next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // 大人の人数
        var adult = $('select[name="adult"]').val();
        if(adult == "placeholder") {
            $('select[name="adult"]').parent().next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        // 子供の人数
        var kids = $('select[name="kids"]').val();
        if(kids == "placeholder") {
            $('select[name="kids"]').parent().next('.validation').text("＊入力必須です");
            validation_flg = true;
        }

        if(validation_flg) {
            return false;
        }
    });
});
