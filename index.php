<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metas-->
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400&display=swap" rel="stylesheet">

    <title><?php echo $name ?></title>
    <link rel="icon" type="image/png" href="<?php echo $logo ?>">
    <meta name="theme-color" content="<?php echo $theme ?>">
    <meta name="og:url" content="<?php echo $metaurl ?>">
    <meta name="og:title" content="<?php echo $metatitle ?>">
    <meta name="og:description" content="<?php echo $metadescription ?>">
    <meta name="og:image" content="<?php echo $logo ?>">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <!-- End Of Metas -->
</head>
<style>
* {
    box-sizing: border-box;
}

.donate_form {
    max-width: 460px;
    margin: 0 auto;
}

@media (max-width: 767px) {
    .donate_form {
        margin-bottom: 30px;
    }
}

.donate_form .tabs {
    margin-bottom: 15px;
}

.donate_form .tabs .btn_styles {
    width: 50%;
    float: left;
    border: 1px solid <?php echo $theme?>;
    height: 35px;
    line-height: 35px;
    font-size: 18px;
    text-decoration: none;
    text-align: center;
}

.donate_form .tabs .btn_styles:not(.active) {
    color: <?php echo $theme?>;
}

.donate_form .tabs .btn_styles.active {
    background-color: <?php echo $theme?>;
    color: #2a2b2f;
}

.donate_form .donat-box {
    width: 33.3% !important;
}

.donate_form .radio {
    display: inline-block;
    position: relative;
}

.donate_form .radio .checkmark {
    display: inline-block;
    height: 12px;
    width: 12px;
    border: 1px solid <?php echo $theme?>;
    border-radius: 2px;
    margin-right: 5px;
}

.donate_form .radio input {
    display: none;
}

.donate_form .radio input:checked~.checkmark {
    background-color: <?php echo $theme?>;
}

.donate_form .input {
    position: relative;
}

.donate_form .input:before {
    content: "$";
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateX(-100%) translateY(-50%);
}

.donate_form .input input[type=number] {
    height: 50px;
    line-height: 50px;
    width: 100%;
    padding: 0 120px 0 20px;
    color: #53497e;
    font-size: 20px;
}

.donate_form .input input[type=number]::-webkit-inner-spin-button,
.donate_form .input input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.donate_form .input .addition {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
}

.donate_form #monthly .input input[type=number] {
    padding: 0 120px 0 20px;
}

.donate_form #once .input input[type=number] {
    padding: 0 55px 0 20px;
}

.donate_form .description {
    background-color: <?php echo $theme?>;
    padding: 25px;
    text-align: center;
    border: 1px solid <?php echo $theme?>;
}

.donate_form .body {
    border: 1px solid <?php echo $theme?>;
    border-top: none;
    padding: 25px;
}

.donate_form .body .info {
    margin-bottom: 20px;
    color: <?php echo $theme?>;
}

.donate_form .body .donate_buttons .btn_styles {
    background-color: <?php echo $theme?>;
    height: 50px;
    line-height: 50px;
    color: #fff;
    width: 100%;
}

.donate_form .goal,
.donate_form .subgoal,
.donate_form .thank-you {
    text-align: center;
    max-width: 470px;
    margin: 0 auto;
}

.donate_form .goal {
    font-size: 21px;
    line-height: 25.2px;
    color: <?php echo $theme?>;
    margin-bottom: 20px;
}

.donate_form .subgoal {
    font-size: 12px;
    line-height: 16.8px;
    color: <?php echo $theme?>;
    margin-bottom: 30px;
}

.donate_form .thank-you {
    font-size: 43px;
    line-height: 51.6px;
    color: <?php echo $theme?>;
}

body {
    background-color: #212121;
    overflow: hidden;
    margin: 0px;
    padding: 0px;
}


.navbar {
    display: flex;
    width: 80%;
    position: fixed;
    align-items: center;
    justify-content: center;
    padding: 3vh 10%;
    z-index: 5;
    transition: all .5s ease;
}


.navbar .left {
    display: flex;
    width: 35%;
    align-items: center;
    justify-content: flex-start;
    opacity: 1;
    transition: all .5s ease;
}


.navbar .left img {
    height: 7.5vh;
    width: auto;
    right: 0px;
    float: left;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
}

.navbar .right {
    font-family: 'Noto Sans KR', sans-serif;
    color: white;
    width: 65%;
    text-align: right;
}

.navbar .right a {
    font-size: 2.5vh;
    color: white;
    margin-left: 2%;
    text-decoration: none;
    position: relative;
}

.top {
    font-family: 'Noto Sans KR', sans-serif;
    font-size: medium;
    height: 41vh;
    width: 100%;
    background: url("<?php echo $background?>");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    color: white;
}

.footer {
    font-family: 'Noto Sans KR', sans-serif;
    padding: 4vh 10%;
    width: 100%;
    background-color: #141414;
    text-align: center;
    font-size: 1.75vh;
    color: white;
    margin: 0;
}

.footermrgamer {
    background-color: #141414;
    text-align: left;
    font-size: 1.5vh;
}

.top .screen {
    display: flex;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, .5);
    align-items: center;
    justify-content: center;
    text-align: center;
}

.top .screen .center .img {
    display: inline-block;
    height: 25vh;
    width: 25vh;
    border-radius: 50%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    background-color: #212121;
    border: .25vh solid #00ccff;
    margin-bottom: 4vh;
}

.top .screen .center h1 {
    font-size: 8vh;
    color: #fff;
    margin: 0;
    margin-bottom: 3vh;
}

.top .screen .center p {
    font-size: 1.75vh;
    color: #fff;
    margin: 0;
    padding: 0 15%;
}
</style>


<body>
    <div class="top">
        <div class="top screen">
            <h1>Support this creator!</h1>
            <p>Donate today!</p>
        </div>
    </div>
    <br><br>
    <div class="donate_form">
        <div class="row">
            <div class="col-xs-12 tabs">
                <a href="#monthly" class="btn_styles monthly active">
                    Monthly
                </a>
                <a href="#once" class="btn_styles once">
                    Give Once
                </a>
            </div>
        </div>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="once" style="display: none;">
            <!-- Identify your business so that you can collect the payments. -->
            <input type="hidden" name="business" value="<?php echo $email ?>">
            <!-- Specify a Donate button. -->
            <input type="hidden" name="cmd" value="_donations">
            <!-- Specify details about the contribution -->
            <input type="hidden" name="item_name" value="<?php echo $donationname ?>">
            <input type="hidden" name="item_number" value="Donation to <?php echo $donationname ?>">
            <input type="hidden" name="currency_code" value="<?php echo $currency ?>">
            <input type="hidden" name="charset" value="utf-8">

            <div class="row">
                <div class="col-xs-12">
                    <div class="description">Enter an amount to give</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="body">

                        <div class="input">
                            <input type="number" name="amount" value="5">
                            <div class="addition"><?php echo $currency?></div>
                        </div>
                        <div class="info">Donate to <b><?php echo $donationname ?>!</b></div>
                        <div class="donate_buttons">
                            <!-- Display the payment button. -->
                            <input type="submit" value="Donate Once" alt="Donate Once" class="btn_styles">
                            <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="monthly">
            <!-- Identify your business so that you can bill for payments. -->
            <input type="hidden" name="business" value="<?php echo $email?>">
            <!-- Specify an Automatic Billing button. -->
            <input type="hidden" name="cmd" value="_xclick-subscriptions">
            <!-- Specify details about the automatic billing plan. -->
            <input type="hidden" name="lc" value="<?php echo $country?>">
            <input type="hidden" name="no_note" value="1">
            <input type="hidden" name="no_shipping" value="1">
            <input type="hidden" name="src" value="1">
            <input type="hidden" name="p3" value="1">
            <input type="hidden" name="t3" value="M">
            <input type="hidden" name="currency_code" value="<?php echo $currency?>">
            <!-- Make sure you get the buyer's address during checkout. -->
            <input type="hidden" name="no_shipping" value="2">
            <input type="hidden" name="charset" value="utf-8">

            <div class="row">
                <div class="col-xs-12">
                    <div class="description">Enter an amount to give per month!</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="body">

                        <div class="input">
                            <input type="number" name="a3" value="5">
                            <div class="addition"><?php echo $currency?> / month</div>
                        </div>
                        <div class="info"> Donate to <b><?php echo $donationname ?>!</b></div>
                        <div class="donate_buttons">
                            <!-- Display the Automatic Billing button. -->
                            <input type="submit" value="Donate Monthly" alt="Donate Monthly" class="btn_styles">
                            <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br><br><br>
    <footer>
        <div class="footer">
            <p><?php echo $footer ?></p>
            <div class="footermrgamer">
                <a href="https://mrgamemods.com/discord">Created by Mr.Gamer</a>
            </div>
        </div>
    </footer>

    <!-- Dont touch! -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script>
    jQuery(document).ready(function($) {
        $('.tabs .btn_styles').click(function() {
            if (!$(this).hasClass('active')) {
                let active, parent, tab;
                active = $(this);
                parent = $(this).closest('.tabs').first();
                parent.find('.btn_styles').each(function() {
                    tab = $($(this).attr('href'));
                    if ($(this).is(active)) {
                        $(this).addClass('active');
                        if (tab.length > 0) tab.show();
                    } else {
                        $(this).removeClass('active');
                        if (tab.length > 0) tab.hide();
                    }
                });
            }

            return false;
        });
    });
    </script>
    <!-- Dont touch! -->
</body>

</html>

</html>