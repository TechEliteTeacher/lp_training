<!-- お問い合わせデータ -->
<?php
    function get_form_data() {
        $data = [
            [
                "name"=>"お名前",
                "key"=>"name"
            ],
            [
                "name" => "メールアドレス",
                "key" => "email"
            ],
            [
                "name" => "電話番号",
                "key" => "tel"
            ],
            [
                "name" => "郵便番号",
                "key" => "address"
            ],
            [
                "name" => "都道府県",
                "key" => "prefecture"
            ],
            [
                "name" => "市区町村",
                "key" => "short_input_content"
            ],
            [
                "name" => "町域・番地<br>建物名",
                "key" => "house_number"
            ],
            [
                "name" => "ご希望の宿泊プラン",
                "key" => "plan"
            ],
            [
                "name" => "大人の人数",
                "key" => "adult"
            ],
            [
                "name" => "お子様の人数",
                "key" => "form_select"
            ],
        ];

        return $data;
    }
?>