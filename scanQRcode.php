<?php
session_start();

if (isset($_SESSION['login']) and $_SESSION['login']) {
    header('Location: welcome.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>QR Scanner Demo</title>
</head>

<body>
    <style>
        hr {
            margin-top: 32px;
        }

        input[type="file"] {
            display: block;
            margin-bottom: 16px;
        }

        div {
            margin-bottom: 16px;
        }

        #flash-toggle {
            display: none;
        }
    </style>
    <h1>Scan from WebCam:</h1>
    <div>
        <!-- <b>Device has camera: </b>
        <span id="cam-has-camera"></span>
        <br>
        <b>Device has flash: </b>
        <span id="cam-has-flash"></span>
        <br> -->
        <video id="qr-video" style="display: none;"></video>
        <br>
        <div>
            <div id="show-scan-region">
            </div>
        </div>
    </div>
    <!-- <div>
        <button id="flash-toggle">📸 Flash: <span id="flash-state">off</span></button>
    </div> -->
    <!-- <div>
        <select id="inversion-mode-select">
            <option value="original">Scan original (dark QR code on bright background)</option>
            <option value="invert">Scan with inverted colors (bright QR code on dark background)</option>
            <option value="both">Scan both</option>
        </select>
        <br>
    </div> -->
    <!-- <b>Detected QR code: </b>
    <span id="cam-qr-result">None</span>
    <br>
    <b>Last detected at: </b>
    <span id="cam-qr-result-timestamp"></span>
    <br>
    <button id="start-button">Start</button>
    <button id="stop-button">Stop</button>
    <hr> -->

    <!-- <h1>Scan from File:</h1>
    <input type="file" id="file-selector">
    <b>Detected QR code: </b>
    <span id="file-qr-result">None</span> -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="module">
        import QrScanner from "/LMS/js/qr-scanner.min.js";
        QrScanner.WORKER_PATH = '/LMS/js/qr-scanner-worker.min.js';

        const video = document.getElementById('qr-video');
        //const camHasCamera = document.getElementById('cam-has-camera');
        //const camHasFlash = document.getElementById('cam-has-flash');
        //const flashToggle = document.getElementById('flash-toggle');
        //const flashState = document.getElementById('flash-state');
        // const camQrResult = document.getElementById('cam-qr-result');
        // const camQrResultTimestamp = document.getElementById('cam-qr-result-timestamp');
        //const fileSelector = document.getElementById('file-selector');
        //const fileQrResult = document.getElementById('file-qr-result');

        function setResult(result) {
            var Result = result;
            scanner.stop();

            console.log(Result);
            $.post('login.php', {
                qr_reqd: Result
            }, function(data) {
                if (data == 1) {
                    window.location.href = 'homepage.php';
                }
                if (data == 2) {
                    alert("Invalid QR code. Please Scan Again.");
                    window.location.reload();
                }
            });

            // label.textContent = result;
            // camQrResultTimestamp.textContent = new Date().toString();
            // label.style.color = 'teal';
            // clearTimeout(label.highlightTimeout);
            // label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
        }

        // ####### Web Cam Scanning #######

        //QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);

        const scanner = new QrScanner(video, result => setResult(result), error => {
            // camQrResult.textContent = error;
            // camQrResult.style.color = 'inherit';
        });

        scanner.start().then(() => {
            // scanner.hasFlash().then(hasFlash => {
            //     camHasFlash.textContent = hasFlash;
            //     if (hasFlash) {
            //         flashToggle.style.display = 'inline-block';
            //         flashToggle.addEventListener('click', () => {
            //             scanner.toggleFlash().then(() => flashState.textContent = scanner.isFlashOn() ? 'on' : 'off');
            //         });
            //     }
            // });
        });

        // for debugging
        window.scanner = scanner;

        const input = document.getElementById('show-scan-region');
        const label = input.parentNode;
        label.parentNode.insertBefore(scanner.$canvas, label.nextSibling);
        //scanner.$canvas.style.display = input.checked ? 'block' : 'none';
        scanner.$canvas.style.display = 'block';

        // document.getElementById('inversion-mode-select').addEventListener('change', event => {
        //     scanner.setInversionMode(event.target.value);
        // });

        // document.getElementById('start-button').addEventListener('click', () => {
        //     scanner.start();
        // });

        // document.getElementById('stop-button').addEventListener('click', () => {
        //     scanner.stop();
        // });

        // ####### File Scanning #######

        // fileSelector.addEventListener('change', event => {
        //     const file = fileSelector.files[0];
        //     if (!file) {
        //         return;
        //     }
        //     QrScanner.scanImage(file)
        //         .then(result => setResult(fileQrResult, result))
        //         .catch(e => setResult(fileQrResult, e || 'No QR code found.'));
        // });
    </script>
</body>

</html>