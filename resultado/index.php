<?php
session_start();

$nome = "Valdir";

if (isset($_SESSION["pessoa"])) {
    $pessoa = $_SESSION["pessoa"];
    $nome = $pessoa->NOME;
} else {
    $nome = "";
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Resultado Gerado!</title>
    <meta charset="utf-8" />
    <link rel="icon" href="/quizz/files/GWshtwyv.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="styles.css?v=2.25">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        #cover {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: #2563EB;
            z-index: 1000;
        }

        #content {
            opacity: 0;
        }
    </style>

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

    <script>
        var valorFinal = parseFloat(2131.66);
    </script>

</head>

<body>
    <div id="cover"></div>
    <div id="content">
        <div id="resultado" style="margin-top: 10px; margin-bottom: 10px;">
            <!-- Sesso 1 -->
            <div class="sessao1">
                <h2 class="titulo">&#127881; Parabéns<span class="nome"><?php echo $nome ? ", " . $nome : "!"; ?></span>!</h2>
                <div class="traco">
                    <div class="circulo"></div>
                </div>
                <p class="mensagem"><b><?php echo $nome ? explode(" ", $nome)[0] . ", " : ""; ?></b>Pode Resgatar Até:</p>
                <p class="valor">R$0,00</p>
                <div class="center">
                    <button class="saldo-existente">Saldo Verificado</button>
                    <p class="timer">Disponível por <span class="tempo">17:00</span></p>
                </div>
            </div>
            <div class="divisor"></div>
            <!-- Sesso 2 -->
            <div class="sessao2">
                <div class="caixa">
                    <div class="vias-resgate">
                        <i class="fas fa-exclamation-circle"></i>
                        <h3><b> Vias de Resgate</b></h3>
                    </div>
                    <p class="texto-caixa">
                        <br> <b>FGTS:</b> Você vai <b>resgatar</b> o seu saldo do Fundo de Garantia do Tempo de Serviço.
                        <br><br>
                        <b>Resgate Estadual:</b> Todas as compras vinculadas em seu <b>CPF</b> podem gerar impostos que podem ser <b>resgatados</b> por você.
                    </p>
                </div>
                <div class="center">
                    <a href="https://go.iexperience.com.br/67e07929" class="receber-pagamento" style="text-decoration: none;">SACAR BENEFÍCIO</a>
                </div>
                <p class="saldo-garantia">DESCONTO NA TAXA: <del>R$197,00</del><span class="valor-garantia"> R$47,77</span></p>
                <!-- Alerta -->
                <div class="alerta">
                    <div class="alerta-content">
                        <div class="alerta-icon">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <div class="alerta-text">
                            <b>TAXA</b>: Pague uma vez, resgate todas as <b>VIAS</b> e o <b>valor pago permanece na sua conta</b> de acesso.
                        </div>
                    </div>
                    <div class="alerta-close" id="closeAlerta">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
            </div>
            <div class="divisor"></div>

            <!-- Sesso 3 -->
            <div class="sessao3">
                <p class="direito">Valores que são seu <b>por direito.</b></p>
                <div class="imagens">
                    <img class="imagem1" src="http://frasesdapaixao.com/wp-content/uploads/2023/07/FGTS.png" alt="FGTS">
                    <img class="imagem2" src="http://frasesdapaixao.com/wp-content/uploads/2023/07/RESGATE-ESTADUAL.png" alt="Resgate Estadual">
                    <img class="imagem3" src="http://frasesdapaixao.com/wp-content/uploads/2023/08/SVR-1.png" alt="Pis PASEP">
                </div>
            </div>
            <div class="divisor"></div>

            <!-- Sesso 4 -->
            <div class="sessao4">
                <!-- FAQ -->
                <div class="py-4 max-w-screen-sm mx-auto">
                    <div class="text-center mb-16">
                        <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                            F.A.Q
                        </p>
                        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                            Tire suas <span style="color: #34D399;">Dúvidas</span>
                        </h3>
                    </div>
                    <div class="mx-5">

                        <div class="flex items-start my-8">
                            <div class="hidden sm:flex items-center justify-center p-3 mr-3 rounded-full bg-indigo-500 text-white border-4 border-white text-xl font-semibold">
                                <svg width="24px" fill="white" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g data-name="Layer 2">
                                        <g data-name="menu-arrow">
                                            <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                            <path d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z">
                                            </path>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-md">
                                <h1 class="text-gray-900 font-semibold mb-2 text-center" style="font-size: 16px;">1- Por que eu tenho que pagar uma taxa?</h1>
                                <p class="text-gray-500 text-center" style="font-size: 16px;">Essa taxa garante e mantém a consulta gratuita a todos os brasileiros. Com esta TAXA você está contribuindo para que todos tenham a chance de acessar este serviço, mesmo aqueles que têm menos recursos.</p>
                            </div>
                        </div>
                        <div class="flex items-start my-8">
                            <div class="hidden sm:flex items-center justify-center p-3 mr-3 rounded-full bg-indigo-500 text-white border-4 border-white text-xl font-semibold">
                                <svg width="24px" fill="white" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g data-name="Layer 2">
                                        <g data-name="menu-arrow">
                                            <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                            <path d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z">
                                            </path>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-md">
                                <h1 class="text-gray-900 font-semibold mb-2 text-center" style="font-size: 16px;">2- Como eu faço para pagar a TAXA?</h1>
                                <p class="text-gray-500 text-center" style="font-size: 16px;">Quando você clicar em <b>"SACAR BENEFÍCIO"</b>, vai ser direcionado para uma página de pagamento. Lá, você coloca suas informações corretas para que seu benefício vá direto para seu CPF. O melhor é que o pagamento é imediato, feito por <b>PIX</b> ou <b>Cartão de Crédito</b>.</p>
                            </div>
                        </div>
                        <div class="flex items-start my-8">
                            <div class="hidden sm:flex items-center justify-center p-3 mr-3 rounded-full bg-indigo-500 text-white border-4 border-white text-xl font-semibold">
                                <svg width="24px" fill="white" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g data-name="Layer 2">
                                        <g data-name="menu-arrow">
                                            <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                            <path d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z">
                                            </path>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-md">
                                <h1 class="text-gray-900 font-semibold mb-2 text-center" style="font-size: 16px;">3- Por que a taxa não é descontada do valor do meu benefício?</h1>
                                <p class="text-gray-500 text-center" style="font-size: 16px;">O nosso trabalho aqui é te ajudar na consulta e solicitao do seu benefício. Depois de aprovado, a gente cobra a taxa para te mandar, direto no seu e-mail, o passo a passo de como fazer o saque. Você vai fazer todo o processo de saque diretamente no site do orgão responsável, ou seja, a gente não tem acesso ao seu dinheiro. Isso é mais seguro para você!</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Divisor com gradiente -->
                <div style="height: 2px; background: linear-gradient(90deg, transparent, #000, transparent);"></div>

                <!-- Footer -->
                <footer style="text-align: center; padding: 20px; background-color: #ffffff;">
                    <p style="font-size: 14px;">&copy; 2023 Saque.Social - Todos os direitos reservados.</p>
                </footer>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.2/iframeResizer.min.js"></script>
                <script>
                    document.querySelector("#checkout").onclick = () => {
                        document.querySelector("#checkout").disabled = true;

                        top.location.href = "https://go.iexperience.com.br/67e07929"
                    }
                </script>
                <script>
                    iFrameResize({
                        log: false
                    }, '#comentariosIframe');
                </script>
                <script src="script.js?v=1.33"></script>
                <script>
                    (function() {
                        var tempoLimiteInatividade = 5 * 60 * 1000; // 5 minutos
                        var ultimaAtividade = new Date().getTime();

                        function atualizarUltimaAtividade() {
                            ultimaAtividade = new Date().getTime();
                        }

                        function verificarInatividade() {
                            if (new Date().getTime() - ultimaAtividade > tempoLimiteInatividade) {
                                window.location.href = "https://saque.social/loteando/index.php";
                            }
                        }

                        // Atualizar a ltima atividade sempre que o usurio interagir com a página
                        document.addEventListener('mousemove', atualizarUltimaAtividade);
                        document.addEventListener('keydown', atualizarUltimaAtividade);
                        document.addEventListener('touchstart', atualizarUltimaAtividade);

                        // Verificar inatividade a cada 10 segundos
                        setInterval(verificarInatividade, 10000);
                    })();
                </script>
                <script>
                    gsap.to("#cover", {
                        duration: 1,
                        height: "100%",
                        ease: "power2.inOut",
                        delay: 1
                    });
                    gsap.to("#cover", {
                        duration: 1,
                        height: "0%",
                        ease: "power2.inOut",
                        delay: 3,
                        onComplete: function() {
                            document.getElementById('content').style.opacity = "1";
                        }
                    });
                </script>
</body>

</html>