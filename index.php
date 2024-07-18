<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpo Ambiente</title>

    <!-- roboto fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- league fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="img/icon.png">

    <script src="https://kit.fontawesome.com/6bda94a8de.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <!--order 1-->
        <div class="logos">
            <img class="logoBgWhite" src="fotos/logo.png" alt="">
            <img class="logoBgBlack" src="fotos/logo2.png" alt="">
        </div>

        <!--order 2-->
        <nav id="menu">
            <ul id="imenu-list" class="menu-list">
                <li><a href="https://limpo-ambiente.github.io/sobre1/">Sobre nós</a></li>
                <li><a href="https://limpo-ambiente.github.io/limpo_curiosidades/">Curiosidades</a></li>
                <li><a href="#campanha">Campanhas</a></li>
            </ul>
            <script>

                var menuButton = document.getElementById("menu-btn");
                var menu = document.getElementById("menu");

                menu.style.transition("2s");

                function showmenu() {
                    if (menu.style.display === "none") {
                        menu.style.display = "block";
                    } else {
                        menu.style.display = "none";
                    }
                };

            </script>
        </nav>

        <!--order 3-->
        <div class="dark_btn">
            <input type="checkbox" name="#" id="toggle" class="toggle-btn">
            <label for="toggle" class="toggle-label" id="change">
                <i id="sun" class="fa-solid fa-cloud-sun"></i>
                <i id="moon" class="fa-solid fa-moon"></i>
            </label>

            <script>
                const toggleBtn = document.getElementById('toggle');
                const body = document.body;

                toggleBtn.addEventListener('click', function () {
                    body.classList.toggle('dark')
                });

                function proximoSlide() {

                    const radios = document.querySelectorAll('input[type="radio"]');

                    let checkedIndex = [...radios].findIndex(radio => radio.checked);

                    radios[checkedIndex].checked = false;

                    checkedIndex = (checkedIndex + 1) % radios.length;

                    radios[checkedIndex].checked = true;
                };

                function slideAnterior() {

                    const radios = document.querySelectorAll('input[type="radio"]');

                    let checkedIndex = [...radios].findIndex(radio => radio.checked);

                    radios[checkedIndex].checked = false;

                    checkedIndex = (checkedIndex - 1 + radios.length) % radios.length;

                    radios[checkedIndex].checked = true;
                };
                
            </script>
        </div>

        <!--order 4-->
        <button onclick="showmenu()" id="menu-btn"><i class="fa-solid fa-water"></i></button>
    </header>

    <!--Main-->

    <main>
        <div class="mundo" id="home">
            <div class="entenda">
                <h1>
                    O custo do cuidado <br>
                    é sempre menor que <br>
                    o custo do reparo.
                </h1>
                <p>
                    Entenda como preservar o meio ambiente da forma correta. <br> O mundo precisa de você!
                </p>


            </div>


            <img class="wofoto" src="fotos/mundopng.png" alt="" width="200px" height="200px">




    </main>

    <div class="container">

        <div class="sombra">

            <div class="sombra1"></div>

        </div>

        <p class="textcar">Conheça alguns dos tipos de lixo:</p>

        <div class="carrossel">

            <input type="radio" name="radio" id="fundo" checked>

            <input type="radio" name="radio" id="fundo2">

            <input type="radio" name="radio" id="fundo3">

            <input type="radio" name="radio" id="fundo4">

            <input type="radio" name="radio" id="fundo5">

            <input type="radio" name="radio" id="fundo6">

            <input type="radio" name="radio" id="fundo7">

            <input type="radio" name="radio" id="fundo8">

            <div class="setas">

                <div class="seta" onclick="slideAnterior()"></div>

            </div>

            <div class="fundo">

                <a href="https://limpo-ambiente.github.io/reciclavel/" class="texta">

                    <p class="textfund"> Lixo reciclavel são todos os
                        materias que podem ser transformados em novos produtos após serem processados, como papel,
                        plástico, vidro e metal.</p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <img src="carrossel/fundo.png" alt="papel com rebarbas" class="imgcar">



            <div class="fundo2">

                <a href="https://limpo-ambiente.github.io/lixo_comercial/" class="texta">

                    <p class="textfund"> Os estabelecimentos comercias desempenham um papel significativo na geração de
                        resíduos urbanos, contribuindo com uma parcela considerável, entre 30% e 40%, do total de
                        resíduos sólidos no Brasil.</p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo2.png" alt="papel rasgado" class="imgcar">

            <br>

            <div class="fundo3">

                <a href="https://limpo-ambiente.github.io/lixo_hospitalar/" class="texta2">

                    <p class="textfund1"> O lixo hospitalar é uma mistura diversificada de materiais, que inclui desde
                        resíduos biológicos, como sangue e tecidos, até materiais químicos, como medicamentos vencidos e
                        produtos químicos de limpeza, além de objetos perfurocortantes e equipamentos médicos
                        descartados.</p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo3.png" alt="folha de caderno arrancada" class="imgcar">

            <br>

            <div class="fundo4">

                <a href="https://limpo-ambiente.github.io/lixo_eletronico/" class="texta">

                    <p class="textfund"> O lixo eletrônico, ou e-lixo, é composto por uma variedade de componentes
                        tóxicos e materiais valiosos, como metais pesados, plásticos, vidro e circuitos eletrônicos.</p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo.png" alt="papel com rebarbas" class="imgcar">

            <br>

            <div class="fundo5">

                <a href="https://limpo-ambiente.github.io/lixo_domiciliar/" class="texta2">

                    <p class="textfund1"> O lixo domiciliar é tudo aquilo que é produzido nas residências por as
                        pessoas.
                    </p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo2.png" alt="papel rasgado" class="imgcar">

            <br>

            <div class="fundo6">

                <a href="https://limpo-ambiente.github.io/lixo_organico/" class="texta">

                    <p class="textfund"> O lixo orgânico é um dos detritos mais comum e é produzido pelos seres humanos.
                    </p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo3.png" alt="folha de caderno arrancada" class="imgcar">

            <br>

            <div class="fundo7">

                <a href="https://limpo-ambiente.github.io/lixo_verde/" class="texta">

                    <p class="textfund"> O descarte correto do lixo verde é essencial para a manutenção da saúde
                        ambiental e a sustentabilidade. Lixo verde inclui resíduos orgânicos de jardins, como grama
                        cortada, folhas, galhos, flores, e restos de poda. </p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo.png" alt="papel rasgado" class="imgcar">

            <br>

            <div class="fundo8">

                <a href="https://limpo-ambiente.github.io/lixo_industrial/" class="texta">

                    <p class="textfund"> O lixo industrial é caracterizado por resíduos gerados a partir de processos
                        produtivos nas indústrias. Esses resíduos podem variar significativamente em composição e
                        natureza, dependendo do tipo de indústria e dos processos utilizados.</p>

                    <img src="carrossel/lupa.png" alt="" class="lupa">

                </a>

            </div>

            <br>

            <img src="carrossel/fundo2.png" alt="folha de caderno arrancada" class="fund8 imgcar">

            <br>

            <div class="navegacao">

                <label for="fundo" class="bar"></label>

                <label for="fundo2" class="bar"></label>

                <label for="fundo3" class="bar"></label>

                <label for="fundo4" class="bar"></label>

                <label for="fundo5" class="bar"></label>

                <label for="fundo6" class="bar"></label>

                <label for="fundo7" class="bar"></label>

                <label for="fundo8" class="bar"></label>

            </div>

            <div class="setas">

                <div class="seta2" onclick="proximoSlide()"></div>

            </div>

        </div>

        <div class="sombra">

            <div class="sombra2"></div>

        </div>

    </div>

    <div class="s1">
        <h2>Saiba porque o descarte incorreto <br> do lixo
            é uma preocupação.</h2>
        <div class="saiba">
            <p class="p1"> O mal cuidado ao descartar o lixo pode acarretar em uma série de coisas ruins como: O
                entupimento de bueiros e a contaminação do solo e água. a proliferação de insetos e roedores, o que
                aumenta a contaminação de doenças. Além disso, o lixo espalhado pelas ruas e praças cria um ambiente
                desagradável e pouco acolhedor para todos.
            </p>
            <img src="fotos/lixospng.png" alt="" height="200px" width="330px" class="img1">
        </div>
    </div>

    <div class="conhec">

        <h2>Conheça a real quantidade de lixo <br>
            que é produzida no Brasil. </h2>
    </div>

    <div class="mae">
        <div class="grafico">
            <img src="fotos/mapa (3).png" alt="">

        </div>

        <div class="con">
            <p>No Brasil cada pessoa em média produz 380kg de lixo por ano. Calculando, são 80 milhões de toneladas de
                resíduos por ano, e apenas 4% desse lixo é reaproveitado e reciclado. Isso torna o Brasil um dos paises
                que mais produz lixo.</p>
        </div>

    </div>

    <div class="rec">

        <h6>E você? Como recicla na sua casa? </h6>

        <form action="" method="post">

            <label for="">

                <input type="text" class="recic" name="nome" id="nome">

                <button type="submit">Enviar</button>

            </label>


            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "limpoambiente";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];


                $sql = "INSERT INTO comovc ( nome ) VALUES ('$nome') ";
                if ($conn->query($sql) === TRUE) {
                    echo "";
                } else {
                    echo "erro:" . $sql . "<br>" . $conn->error;
                }

            }

            $conn->close();
            ?>
        </form>


    </div>

    <!-- footer -->

    <div class="cam" id="campanha">

        <h3 class="textcam">Campanhas</h3>

        <div class="container2">

            <section class="card">
                <a
                    href="https://www.gov.br/ana/pt-br/programas-e-projetos/gestao-ambiental-e-sustentabilidade/campanha-coleta-de-lixo-eletronico.pdf">
                    <img src="https://www.svgrepo.com/show/530113/tree.svg" alt="" class="campi">

                    <div>

                        <h3 class="textcard">Coleta de Lixo Eletrônico</h3>

                    </div>

                </a>

            </section>

            <section class="card">

                <a
                    href="https://www.gov.br/ana/pt-br/todos-os-documentos-do-portal/documentos-cosus/documentos-relacionados/gestao_dos_residuos_descarte_responsavel_e_ecologicamente_correto_2014.pdf">

                    <img src="https://www.svgrepo.com/show/530102/recycling.svg" alt="" class="campi">

                    <div>

                        <h3 class="textcard text1">Descarte Responsável</h3>

                    </div>

                </a>

            </section>

            <section class="card">

                <a
                    href="https://www.gov.br/ana/pt-br/programas-e-projetos/gestao-ambiental-e-sustentabilidade/campanha-porque-usar-a-caneca-ecologica_ago-2018.pdf">

                    <img src="https://www.svgrepo.com/show/530103/earth.svg" alt="" class="campi">

                    <div>

                        <h3 class="textcard">Caneca Ecológica</h3>

                    </div>

                </a>

            </section>

        </div>

        <div class="container3">

            <section class="card s2">

                <a
                    href="https://www.gov.br/ana/pt-br/programas-e-projetos/gestao-ambiental-e-sustentabilidade/campanha-projeto-de-educacao-ambiental_ago2018.pdf">

                    <img src="https://www.svgrepo.com/show/530109/garbage-can.svg" alt="" class="campi">

                    <div>

                        <h3 class="textcard">Educação Ambiental</h3>

                    </div>

                </a>

            </section>

            <section class="card s2">

                <a
                    href="https://www.gov.br/ana/pt-br/programas-e-projetos/gestao-ambiental-e-sustentabilidade/campanha-gestao-e-uso-racional-do-papel.pdf">

                    <img src="https://www.svgrepo.com/show/530116/sapling.svg" alt="" class="campi">

                    <div>

                        <h3 class="textcard">Uso Racional do Papel</h3>

                    </div>
                </a>

            </section>

        </div>

    </div>

    <footer>
        <img src="fotos/logo_preto.png" alt="" height="120px">
        <hr>
        <div class="tudo">
            <div class="voltar">
                <h3>Volte para:</h3>
                <a href="">Home</a>
            </div>

            <div class="referencias">
                <h3>Referências da Página:</h3>
                <a href="">pag Kim</a>
                <a href="/pag_gi/lixo_reciclavel.html">pag Gi</a>
                <a href="/pag_laiz/lixo_domiciliar.html">Pag Laiz</a>
                <a href="/pag_ind/lixo_verde.html">Pag Den</a>
            </div>

            <div class="links_rapidos">
                <h3>Links Rápidos</h3>
                <a href="">Siga nosso linktree</a>
                <a href="/pag_ind/main.html">Sobre nós</a>
                <a href="#">Curiosidades</a>
                <a href="#">Campanhas</a>
            </div>


            <p>&copy;2024 Desenvolvido por Limpo Ambiente</p>
    </footer>

    <!-- </footer> -->

</body>

</html>