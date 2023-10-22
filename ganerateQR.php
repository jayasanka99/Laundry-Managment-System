<?php
$user_id = 0;
if (isset($_GET['d']) and $_GET['d']) {

    $encrypted_string = $_GET['d'];
    $password = 'lms';
    $user_id = openssl_decrypt($encrypted_string, "AES-128-ECB", $password);
} else {
    echo 'redirct to homepahe';
}

?>
<style>
    .main {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .text-center {
        text-align: center;
    }

    #downloadqr {
        margin-top: 40px;
        display: block;
    }
</style>

<body>
    <br>
    <br>
    <h1 class="text-center"> Here you have Unique QR code for Login </h1>
    <br>
    <div class="main">
        <div id="qrcode"></div>
    </div>
    <div class="text-center">
        <a href="" id="downloadqr">
            Download QR code
        </a>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/qrcode.js"></script>
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 300,
            height: 300
        });

        function makeCode() {
            var elText = '<?php echo $encrypted_string; ?>';
            qrcode.makeCode(elText);
            setTimeout(function() {
                var imgSrc = $("#qrcode img").attr('src');
                $("#downloadqr").attr('href', imgSrc);
                $("#downloadqr").attr('download', "QR.png");
            }, 500);
        }
        makeCode();
    </script>
</body>