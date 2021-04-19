<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="" uk-toggle="cls: uk-section-small; mode: media; media: @m" uk-height-viewport="offset-top: true;offset-bottom: true;">
    <div class="uk-container uk-padding-remove">
        <div class="uk-text-center uk-position-relative home__block1">
            <img src="images/USDT.png" alt="">
            <div class="uk-position-center">
                <span class="home__block1__txt">BUY TETHER USDT</span>
            </div>
        </div>
        <div class="uk-card uk-card-default home__card01">
            <div class="uk-card-header uk-background-default home__card01__header">

            </div>
            <div class="uk-card-body uk-background-muted home__card01__body">
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-text-uppercase home__card01__body__box1__txt1">buy usdt by usd</div>
                        <div class="home__card01__body__box1__txt2">These transactions will be stored</div>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="uk-button uk-border-rounded uk-button-default home__card01__body__box1__btn">
                            <img class="home__card01__body__box1__btn__img" src="images/Forma1.png" alt="">
                            History
                        </a>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-padding-small uk-margin">
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <form class="uk-form-horizontal">

                                <div class="uk-margin">
                                    <label class="uk-form-label home__card01__body__label" for="form-horizontal-text">Protocol:</label>
                                    <div class="uk-form-controls">
                                        <div class="home__card01__body__formTxt">
                                            <div class="uk-grid-small uk-child-width-auto uk-grid">
                                                <label><input class="uk-radio home__card01__body__radioProtocol" type="radio" name="radio2" checked> <span class="home__card01__body__radioTxt">ERC20</span></label>
                                                <label><input class="uk-radio home__card01__body__radioProtocol" type="radio" name="radio2"> <span class="home__card01__body__radioTxt">TRC20</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label home__card01__body__label" for="form-horizontal-select">Amount USDT:</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__card01__body__input" id="form-horizontal-text" type="text" placeholder="" value="11">
                                        <small class="home__card01__body__small home__card01__body__small--text">Receive USDT within 15 minutes or be refunded</small>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <div class="uk-form-label home__card01__body__label">Money Amount:</div>
                                    <div class="uk-form-controls">
                                        <div class="home__card01__body__formTxt">
                                            <span class="home__card01__body__amount">11 usd</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label home__card01__body__label" for="form-horizontal-select">Your USDT Wallet:</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__card01__body__input" id="form-horizontal-text" type="text" placeholder="Ex:12DbfgbJHUhgth" value="">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div>
                            <form class="uk-form-horizontal">

                                <div class="uk-margin">
                                    <label class="uk-form-label home__card01__body__label" for="form-horizontal-text">Transfer From:</label>
                                    <div class="uk-form-controls">
                                        <div class="home__card01__body__formTxt">
                                            <div class="uk-grid-small uk-child-width-auto uk-grid">
                                                <label>
                                                    <input class="uk-radio home__card01__body__radioProtocol" type="radio" name="radio2" checked>
                                                    <span class="uk-text-middle uk-display-inline-block">
                                                        <img src="images/vcb.png" alt="">
                                                        <span class="home__card01__body__radioTxt uk-text-middle">Vietcombank</span>
                                                    </span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio home__card01__body__radioProtocol" type="radio" name="radio2">
                                                    <span class="uk-text-middle uk-display-inline-block">
                                                        <img src="images/acb.png" alt="">
                                                    </span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio home__card01__body__radioProtocol" type="radio" name="radio2">
                                                    <span class="uk-text-middle uk-display-inline-block">
                                                        <img src="images/viettinbank.png" alt="">
                                                        <span class="home__card01__body__radioTxt uk-text-middle">VIETINBANK</span>
                                                    </span>
                                                </label>
                                                <label>
                                                    <input class="uk-radio home__card01__body__radioProtocol" type="radio" name="radio2">
                                                    <span class="uk-text-middle uk-display-inline-block">
                                                        <img src="images/tech.png" alt="">
                                                        <span class="home__card01__body__radioTxt uk-text-middle">TECH</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label home__card01__body__label" for="form-horizontal-select">Receive Account:</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__card01__body__input" id="form-horizontal-text" type="text" placeholder="1863249632545" value="">
                                        <small class="home__card01__body__small home__card01__body__small--error">* Incorrect account number</small>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <div class="uk-form-label home__card01__body__label">Name on the Card:</div>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__card01__body__input" id="form-horizontal-text" type="text" placeholder="ANHQUADEN" value="">
                                        <small class="home__card01__body__small home__card01__body__small--error">* Name is incorrect</small>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center">
                    <button type="submit" class="uk-button uk-button-large uk-button-secondary uk-border-rounded home__card01__body__btnSubmit">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>