<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/list-task.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <col class="row">
            <div class="col-lg-9">
                <div class="quadro">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-4">
                                <a href="/new-task"><div class="mais">
                                    <h1>+</h1>
                                </div></a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-4">
                                <div class="titulo">
                                    <h1>Listas</h1>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-4">
                                <div class="titulo"></div>
                            </div>

                                
                        </div>
                    </div>

                    <div class="quadro-task">
                                @if($tasks->count())
                                    @foreach($tasks as $task)
                                        <div class="task">
                                            <p class="titulo-task">{{$task->title}}</p>
                                            <p class="descricao-task">{{$task->description}}</p>
                                        </div>
                                    @endforeach
                                    @else
                                    <p>Não possui tasks.</p>
                                    @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="buttons1">
        <div class="espaco-button1">
            <div class="quadro-button1">
                <a href="/"><div class="button1">
                <h2><</h2>
                </div></a>
            </div>
        </div>
    </div>
</body>
</html>
