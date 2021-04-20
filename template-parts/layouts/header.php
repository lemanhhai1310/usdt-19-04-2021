<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>USDT - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Background.png" uk-img>
<div>
    <div uk-sticky>
        <div class="header">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                    <div class="uk-navbar-left">
                        <a href="." uk-toggle="cls: uk-padding-remove-left; mode: media; media: @m" class="uk-navbar-item uk-logo">
                            <div class="uk-grid-8 uk-flex-middle" uk-grid>
                                <div>
                                    <img src="images/Logo.png" alt="">
                                </div>
                                <div>
                                    <span>usdt.vin</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="uk-navbar-right">
                        <?php $ratio = 0.8; ?>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li>
                                <a href="#">
                                    <div class="uk-grid-5 uk-flex-middle" uk-grid>
                                        <div>
                                            <span uk-icon="icon: bookmark; ratio: <?= $ratio ?>"></span>
                                        </div>
                                        <div>
                                            <span>Basic Knowledge</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="uk-grid-5 uk-flex-middle" uk-grid>
                                        <div>
                                            <span uk-icon="icon: search; ratio: <?= $ratio ?>"></span>
                                        </div>
                                        <div>
                                            <span>Transaction search</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="uk-grid-5 uk-flex-middle" uk-grid>
                                        <div>
                                            <span uk-icon="icon: user; ratio: <?= $ratio ?>"></span>
                                        </div>
                                        <div>
                                            <span>Login/Register</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="uk-grid-5 uk-flex-middle" uk-grid>
                                        <div>
                                            <img src="" alt="">
                                        </div>
                                        <div>
                                            <span>English</span>
                                        </div>
                                    </div>
                                </a>
                                <div uk-dropdown="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
    <div class="block1 uk-background--06 uk-section-xsmall uk-visible@m">
        <marquee>
            <div class="uk-container">
                <div class="uk-grid-120-m" uk-grid>
                    <?php
                    $data = array(
                        "BitOneX Lists Ontology (ONT)( 03-08 )",
                        "Summary of the Phishing and Attempted Stealing Incident on BitOneX (04/01)",
                        "ENJ Airdrop for the Top 100K BNB Holders On BitOneX (10/08)",
                    );
                    foreach ($data as $k => $v): ?>
                        <div><span class="block1__txt"><?= $v ?></span></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </marquee>
    </div>
</div>