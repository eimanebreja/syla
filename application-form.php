<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SYLA</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="assets/css/modal.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-MLLCS37");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLLCS37" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
    <main>
        <section class="application-sec">
            <div class="application-header">
                <h1>IOTマンション経営資料請求</h1>
            </div>
            <div class="application-area">
                <div class="application-form-area">
                    <div class="form-area">
                        <div class="form-label">
                            <span>※</span> 氏名
                        </div>
                        <div class="form-input inputfull">
                            <input type="text" name="fullname" id="input-fullname" />
                        </div>
                    </div>
                    <div class="form-area">
                        <div class="form-label">
                            <span>※</span> 電話番号
                        </div>
                        <div class="form-input inputfull">
                            <input type="text" name="phone" id="input-phone" />
                        </div>
                    </div>
                    <div class="form-area">
                        <div class="form-label">
                            <span>※</span> メールアドレス
                        </div>
                        <div class="form-input inputfull">
                            <input type="email" name="email" id="input-email" />
                        </div>
                    </div>
                    <div class="postal-area">
                        <div class="form-label">
                            <span>※</span> 〒
                        </div>
                        <div class="form-input-postal">
                            <input type="text" name="postal" id="input-postal" placeholder="1600002" />
                        </div>
                        <div class="postal-btn">
                            <button type="button" onClick="setState()">住所検索</button>
                        </div>
                    </div>
                    <div class="form-area">
                        <div class="form-label">
                            <span>※</span> 都道府県
                        </div>
                        <div class="form-input input-halff">
                            <select name="prof" id="input-prof">
                                <option value="">選択...</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-area">
                        <div class="form-label">
                            <span>※</span> 住所
                        </div>
                        <div class="form-input inputfull">
                            <input type="text" name="address" id="input-address" />
                        </div>
                    </div>
                    <div class="formcheck-btn">
                        <div class="form-inputcheck">
                            <input type="checkbox" id="checkme" />
                        </div>
                        <div class="form-inputlabel">
                            弊社の<a href="https://syla.jp/privacy/"> プライバシーポリシー</a>
                            にご同意いただき、チェックボックスにチェックをいれて『送信する』よりお申し込みください。
                        </div>
                    </div>
                    <div class="form-area">
                        <div class="form-label"></div>
                        <div class="form-button">
                            <button disabled="disabled" id="save">送信する</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Container  -->
            <div id="myModal" class="modal">
                <div class="modal-window">
                    <div class="modal-title">
                        <h1>IOTマンション経営資料請求</h1>
                        <hr />
                    </div>
                    <form action="send.php" method="POST">
                        <input type="hidden" name="fullname" value="" id="fullnamee" />
                        <input type="hidden" name="phone" value="" id="phonee" />
                        <input type="hidden" name="email" value="" id="emaill" />
                        <input type="hidden" name="postal" value="" id="postall" />
                        <input type="hidden" name="prof" value="" id="proff" />
                        <input type="hidden" name="address" value="" id="addresss" />
                        <div class="confirm-area">
                            <div class="confirm-label">
                                氏名
                            </div>
                            <div class="confirm-dash">
                                :
                            </div>
                            <div class="confirm-text">
                                <p><span id="fullname">FULLNAME</span></p>
                            </div>
                        </div>
                        <div class="confirm-area">
                            <div class="confirm-label">
                                電話番号
                            </div>
                            <div class="confirm-dash">
                                :
                            </div>
                            <div class="confirm-text">
                                <p><span id="phone">PHONE NUMBER</span></p>
                            </div>
                        </div>
                        <div class="confirm-area">
                            <div class="confirm-label">
                                メールアドレス
                            </div>
                            <div class="confirm-dash">
                                :
                            </div>
                            <div class="confirm-text">
                                <p><span id="email">EMAIL</span></p>
                            </div>
                        </div>
                        <div class="confirm-area">
                            <div class="confirm-label">
                                〒
                            </div>
                            <div class="confirm-dash">
                                :
                            </div>
                            <div class="confirm-text">
                                <p><span id="postal">POSTAL</span></p>
                            </div>
                        </div>
                        <div class="confirm-area">
                            <div class="confirm-label">
                                都道府県
                            </div>
                            <div class="confirm-dash">
                                :
                            </div>
                            <div class="confirm-text">
                                <p><span id="prof">PROFECTUEES</span></p>
                            </div>
                        </div>
                        <div class="confirm-area">
                            <div class="confirm-label">
                                住所
                            </div>
                            <div class="confirm-dash">
                                :
                            </div>
                            <div class="confirm-text">
                                <p><span id="address">ADDRESS</span></p>
                            </div>
                        </div>
                        <div class="confirm-area btn-area">
                            <div class="confirm-button-save">
                                <button name="send" id="btn-confirm">送信する</button>
                            </div>
                            <div class="confirm-button-cancel">
                                <a id="" onclick="return closeModal();" class="red-background">
                                    戻る
                                </a>
                                <!-- <div class="close-modal">
                  <div class="closes"></div>
                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="application-sec-ft"></div>
    </main>
    <script>
    var checker = document.getElementById('checkme');
    var sendbtn = document.getElementById('save');
    // when unchecked or checked, run the function
    checker.onchange = function() {
        if (this.checked) {
            sendbtn.disabled = false;
        } else {
            sendbtn.disabled = true;
        }

    }


    var modal = document.getElementById("myModal");
    var btn = document.getElementById("save");
    var span = document.getElementsByClassName("close")[0];

    var inputFullname = document.getElementById("input-fullname");
    var inputPhone = document.getElementById("input-phone");
    var inputEmail = document.getElementById("input-email");
    var inputPostal = document.getElementById("input-postal");
    var inputProf = document.getElementById("input-prof");
    var inputAddress = document.getElementById("input-address");

    var inputFullnamee = document.getElementById("fullnamee");
    var inputPhonee = document.getElementById("phonee");
    var inputEmaill = document.getElementById("emaill");
    var inputPostall = document.getElementById("postal");
    var inputProff = document.getElementById("proff");
    var inputAddresss = document.getElementById("addresss");

    var fullname = document.getElementById("fullname");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var postal = document.getElementById("postal");
    var prof = document.getElementById("prof");
    var address = document.getElementById("address");

    var confirmBtn = document.getElementById("btn-confirm");

    confirmBtn.onclick = function() {
        confirmModal.style.display = "block";
    };

    function closeModal() {
        modal.style.display = "none";
    }

    btn.onclick = function() {
        var err_fname = $("#input-fullname").val();
        var err_phone = $("#input-phone").val();
        var err_email = $("#input-email").val();
        var err_postal = $("#input-postal").val();
        var err_prof = $("#input-prof").val();
        var err_address = $("#input-address").val();
        var err = false;


        if (!err_fname) {
            $("#input-fullname").addClass("makeRed");
            err = true;

        } else {
            $("#input-fullname").removeClass("makeRed");
            err = false;
        }
        if (!err_phone) {
            $("#input-phone").addClass("makeRed");
            err = true;
        } else {
            $("#input-phone").removeClass("makeRed");
            err = false;
        }

        if (!err_email) {
            $("#input-email").addClass("makeRed");
            err = true;
        } else {
            $("#input-email").removeClass("makeRed");
            err = false;
        }

        if (!err_postal) {
            $("#input-postal").addClass("makeRed");
            err = true;
        } else {
            $("#input-postal").removeClass("makeRed");
            err = false;
        }

        if (!err_prof) {
            $("#input-prof").addClass("makeRed");
            err = true;
        } else {
            $("#input-prof").removeClass("makeRed");
            err = false;
        }

        if (!err_address) {
            $("#input-address").addClass("makeRed");
            err = true;
        } else {
            $("#input-address").removeClass("makeRed");
            err = false;
        }

        if (!err) {
            modal.style.display = "block";
        }
        fullname.innerHTML = inputFullname.value;
        fullnamee.value = inputFullname.value;
        phone.innerHTML = inputPhone.value;
        phonee.value = inputPhone.value;
        email.innerHTML = inputEmail.value;
        emaill.value = inputEmail.value;
        postal.innerHTML = inputPostal.value;
        postall.value = inputPostal.value;
        prof.innerHTML = inputProf.value;
        proff.value = inputProf.value;
        address.innerHTML = inputAddress.value;
        addresss.value = inputAddress.value;
    };

    $("#input-fullname").click(function() {
        $("#input-fullname").removeClass("makeRed");

    });

    $("#input-phone").click(function() {
        $("#input-phone").removeClass("makeRed");

    });
    $("#input-email").click(function() {
        $("#input-email").removeClass("makeRed");

    });
    $("#input-postal").click(function() {
        $("#input-postal").removeClass("makeRed");
    });
    $("#input-prof").click(function() {
        $("#input-prof").removeClass("makeRed");

    });
    $("#input-address").click(function() {
        $("#input-address").removeClass("makeRed");

    });

    closeConfirmModal.onclick = function() {
        confirmModal.style.display = "none";
    };

    span.onclick = function() {
        modal.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/modal.js"></script>

    <script>
    // 郵便番号から住所を取得
    function setState() {
        var zip = $("#input-postal").val();
        // ここでzipのバリデーションを行ってください

        $.ajax({
            type: "get",
            url: "https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyDOZ4601cRnFQ7h5YljZNYFeO7ErGmxkMs",
            crossDomain: true,
            dataType: "json",
            data: {
                address: zip,
                language: "ja",
                sensor: false
            },
            success: function(resp) {
                if (resp.status == "OK") {
                    // APIのレスポンスから住所情報を取得
                    var obj = resp.results[0].address_components;
                    if (obj.length < 5) {
                        alert("正しい郵便番号を入力してください");
                        return false;
                    }
                    //$('#country').val(obj[4]['long_name']); // 国
                    $("#input-prof").val(obj[3]["long_name"]); // 都道府県
                    $("#input-address").val(obj[2]["long_name"] + obj[1]["long_name"]); // 番地
                } else {
                    alert("住所情報が取得できませんでした");
                    return false;
                }
            }
        });
    }
    </script>
</body>

</html>