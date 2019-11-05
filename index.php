<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title>iPayTotal</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ipaytotal.solutions/newTheme/assets/css/dashforge.css">
    <link rel="stylesheet" href="https://ipaytotal.solutions/newTheme/assets/css/dashforge.demo.css">
</head>
<body style="background-color: #fff;">
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <img src="https://ipaytotal.solutions/newTheme/assets/img/logo02.png" class="img-fluid" alt="ipaytotal" width="250px">
                </div>
            </div>        
        </div>

        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <?php
                            if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 'success') {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success!</strong> Your Transaction was processed successfully!!
                            </div>
                        <?php
                            unset($_SESSION["status"]);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 'fail') {
                        ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success!</strong> Your Transaction was not processed successfully!!
                            </div>
                        <?php
                            unset($_SESSION["status"]);
                            }
                        ?>
                    </div>
                    <div class="col-md-12">    
                        <h4 class="tx-spacing--1">Payment Form</h4>
                    </div>
                </div>
                <form class="form-horizontal" method="POST" action="submit.php">
                <div class="row py-4">    
                    <div class="col-md-12">    
                        <div data-label="Billing Info" class="df-example demo-table">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="amount" class="col-md-12 col-form-label">Amount</label>
                                        <div class="col-md-12">
                                            <input id="amount" type="text" class="form-control" name="amount" value="" autofocus placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currency" class="col-md-12 col-form-label">Currency</label>
                                        <div class="col-md-12">
                                            <select class="form-control" name="currency" id="currency" >
                                                <option selected disabled> -- Select Currency -- </option>
                                                <option value="USD">USD</option>
                                                <option value="HKD">HKD</option>
                                                <option value="GBP">GBP</option>
                                                <option value="CNY">CNY</option>
                                                <option value="JPY">JPY</option>
                                                <option value="EUR">EUR</option>
                                                <option value="AUD">AUD</option>
                                                <option value="CAD">CAD</option>
                                                <option value="SGD">SGD</option>
                                                <option value="NZD">NZD</option>
                                                <option value="TWD">TWD</option>
                                                <option value="KRW">KRW</option>
                                                <option value="DKK">DKK</option>
                                                <option value="TRL">TRL</option>
                                                <option value="MYR">MYR</option>
                                                <option value="THB">THB</option>
                                                <option value="INR">INR</option>
                                                <option value="PHP">PHP</option>
                                                <option value="CHF">CHF</option>
                                                <option value="SEK">SEK</option>
                                                <option value="ILS">ILS</option>
                                                <option value="ZAR">ZAR</option>
                                                <option value="RUB">RUB</option>
                                                <option value="NOK">NOK</option>
                                                <option value="AED">AED</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name" class="col-md-12 col-form-label">First Name</label>
                                        <div class="col-md-12">
                                            <input id="first_name" type="text" class="form-control" name="first_name" value="" autofocus placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name" class="col-md-12 col-form-label">Last Name</label>
                                        <div class="col-md-12">
                                            <input id="last_name" type="text" class="form-control" name="last_name" value="" autofocus placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="col-md-12 col-form-label">Address</label>
                                        <div class="col-md-12">
                                            <input id="address" type="text" class="form-control" name="address" value="" autofocus placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country" class="col-md-12 col-form-label">Country (Ex. US)</label>
                                        <div class="col-md-12">
                                            <input id="country" type="text" class="form-control" name="country" value="" autofocus placeholder="Country (Ex. US)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state" class="col-md-12 col-form-label">State</label>
                                        <div class="col-md-12">
                                            <input id="state" type="text" class="form-control" name="state" value="" autofocus placeholder="State">
                                            <code>if your country US then use only 2 letter state code.</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city" class="col-md-12 col-form-label">City</label>
                                        <div class="col-md-12">
                                            <input id="city" type="text" class="form-control" name="city" value="" autofocus placeholder="City">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zip" class="col-md-12 col-form-label">Zip Code</label>
                                        <div class="col-md-12">
                                            <input id="zip" type="text" class="form-control" name="zipcode" value="" autofocus placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="col-md-12 col-form-label">Email</label>
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="" autofocus placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_no" class="col-md-12 col-form-label">Phone No.</label>
                                        <div class="col-md-12">
                                            <input id="phone_no" type="text" class="form-control" name="phone_number" value="" autofocus placeholder="Phone No.">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <br>
                        <button type="submit" class="btn btn-success" id="submitForm" style="color: #fff; font-weight: bold; background-color: #3D93FA; border-color: #3D93FA;">
                            Submit
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </main>
    </div>

    <footer class="footer">
        <div style="float: left;">
            <span>© 2019  iPayTotal Ltd. All Right Reserved </span>
        </div>
        <div style="float: right;">
            <nav class="nav">
                <ul class="pull-center">
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/card-logos.jpg" alt="Master Card And Visa" title="Master Card And Visa" border="0" style="width: 80px;">
                    </li>
                    <li>
                        <a href="javascript:" onclick="window.open('https://sisainfosec.com/site/certificate/36572671505100517165','SISA Certificate','width=685,height=670')"><img src="https://ipaytotal.solutions/imgs/pci_logo_footer.jpg" alt="PCI-DSS - certified by SISA" title="PCI-DSS - certified by SISA" border="0"></a>
                    </li>
                    <li>
                        <a href="https://trustsealinfo.verisign.com/splash?form_file=fdf/splash.fdf&amp;lang=en" target="_blank" title="Norton Secured Powered by VeriSign"><img src="https://ipaytotal.solutions/imgs/norton_logo_footer.jpg " alt="Norton Secured Powered by VeriSign" title="Norton Secured Powered by VeriSign" border="0"></a>
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/mastercard_logo_footer.jpg" alt="MasterCard SecureCode" title="MasterCard SecureCode" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/visa_logo_footer.jpg" alt="Verified by VISA" title="Verified by VISA" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/american_exp_footer.jpg" alt="American Express SafeKey" title="American Express SafeKey" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/SafeSecureLogo.jpg" alt="SafeSecure" title="SafeSecure" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/ssl.png" alt="SSL" title="SSL" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/sitelock.png" alt="sitelock" title="sitelock" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/jcb_logo_footer.jpg" alt="JCB J/Secure" title="JCB J/Secure" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/comodo.png" alt="Comode" title="Comode" border="0" style="width: 80px;">
                    </li>
                </ul>
            </nav>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#p_card_issuingbank').val('');
            $('#p_card_issuingbank').attr('readonly', false);
            $("#p_card_num").focusout(function() {
                var cardNo = $(this).val();
                var digit = cardNo.substring(0,6);
                console.log(digit);
                $.ajax({
                    url: 'https://lookup.binlist.net/'+digit,
                    type: 'post',
                    headers: {
                        'Accept-Version': '3'
                    },
                    success: function (data) {
                        if(data.bank.name) {
                            $('#p_card_issuingbank').val(data.bank.name);
                            $('#p_card_issuingbank').attr('readonly', true);
                        } else {
                            toastr.warning('Card Issueing Not Fount, Please Fill Manually...');
                            $('#p_card_issuingbank').attr('readonly', false);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
