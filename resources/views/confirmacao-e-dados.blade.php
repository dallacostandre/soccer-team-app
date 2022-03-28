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
        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
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
            font-size: 32px;
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

    <title>Time Futebol</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="four col-md-3">
                <div class="counter-box colored animate__animated animate__fadeInRight animate__delay-1s">
                    <i class="fa fa-thumbs-o-up"></i>
                    <span class="counter">Escalação</span>
                    <div class="container">
                        <table class="table table-sm table-dark mt-2">
                            <tbody>
                                @foreach ($jogadores as $indexKey =>$jogador)
                                    <tr>
                                        <th scope="row">{{ $indexKey+1 }}</th>
                                        <td>{{ Str::upper($jogador->nome_jogador) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div>
                        <p>Local: {{ $dadosJogo->local }} </p>
                        <p>Horário: {{ date('H:i', strtotime($dadosJogo->horario)) }} </p>
                        <p>Data: {{ date('Y-m-d H:i:s') === $dadosJogo->data ? 'Hoje' : date('d-M', strtotime($dadosJogo->data)) }} </p>
                        <p>Campo: {{ $dadosJogo->tipo_campo }} </p>
                        <hr>
                        <p>Valor Estimado: R$ {{ round($valorEstimado, 2) }} </p>
                        <br>
                        <hr>
                        <span>*Valor estimado: Soma do valor total das horas do campo com goleiro de aluguel caso tenha.</span>
                    </div>
                    <a class="btn btn-success btn-lg mt-4 col-12" href="{{ url('/') }}">Voltar</a>
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
