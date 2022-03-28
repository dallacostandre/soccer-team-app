<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        html,
        body {
            background: rgb(54, 54, 54)
        }

        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        .container {
            margin-top: 100px
        }

        .counter-box {
            display: block;
            background: #f6f6f6;
            padding: 40px 20px 37px;
            text-align: center;
            margin: 2%;
            -webkit-box-shadow: -4px -1px 17px 5px rgba(0, 0, 0, 0.28);
            box-shadow: -4px -1px 17px 5px rgba(0, 0, 0, 0.28);
        }

        .counter-box p {
            margin: 5px 0 0;
            padding: 0;
            color: #909090;
            font-size: 18px;
            font-weight: 500
        }

        .counter-box i {
            font-size: 60px;
            margin: 0 0 15px;
            color: #d2d2d2
        }

        .counter {
            display: block;
            font-size: 20px;
            font-weight: 700;
            color: #666;
            line-height: 28px
        }

        .counter-box.colored {
            background: #3acf87
        }

        .counter-box.colored p,
        .counter-box.colored i,
        .counter-box.colored .counter {
            color: #fff
        }

    </style>

    <title>Soccer Team - Novo Jogo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="four col-md-3">
                <div class="counter-box colored animate__animated animate__fadeInRight animate__delay-1s text-center">
                    <i class="fa fa-thumbs-o-up"></i>
                    <form action="{{ route('adicionarJogo') }}" method="POST">
                        @csrf
                        <span class="counter">Data</span>
                        <input type="date" class="form-control input-lg mt-2" name="data">

                        <span class="counter mt-4">Horário</span>
                        <input type="time" class="form-control input-lg mt-2" id="horario" name="horario">

                        <span class="counter mt-4">Duração</span>
                        <div class="form-group">
                            <select class="form-control input-lg mt-2" id="duracao" name="duracao">
                                <option value="1">1 hr</option>
                                <option value="2">2 hrs</option>
                                <option value="3">3 hrs</option>
                                <option value="4">+ de 3 hrs</option>
                            </select>
                        </div>

                        <span class="counter mt-4">Tipo de Campo</span>
                        <div class="form-group">
                            <select class="form-control input-lg mt-2" id="tipo_campo" name="tipo_campo">
                                <option value="Sintético">Sintético</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Campo Aberto">Campo Aberto</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <span class="counter mt-4">Preço do Campo</span>
                        <div class="form-group">
                            <input type="number" class="form-control input-lg mt-2 money" name="valor">
                        </div>

                        <span class="counter mt-4">Goleiro de Aluguel?</span>
                        <select class="form-select form-select-lg mt-2" aria-label=".form-select-lg example" name="goleiro_de_aluguel">
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>

                        <span class="counter mt-4">Preço Goleiro</span>
                        <div class="form-group">
                            <input type="number" class="form-control input-lg mt-2" name="valor_goleiro_de_aluguel">
                        </div>

                        <span class="counter mt-4">Local</span>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg mt-2" name="local">
                        </div>
                        <button class="btn btn-success btn-lg mt-4 col-12">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 30%;text-align:center;">
        <h6 style="font-size: 12px;">Versão Web Beta 1.0 @ Creatif Digital</h6>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
