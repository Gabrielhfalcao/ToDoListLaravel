@extends('templates.template')

@section('content')
<div class="topo">
      <h1>Planeje seu dia agora!</h1>
    </div>
    
    <div class="subtitulo">
      <p>E agora, o que você vai fazer:</p>
    </div>
    
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="espace1">
                        <a href="/new-task"><div class="caixa">
                            <h1><b>ADD</b></h1>
                        </div></a>
                    </div>
                </div>  
            
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="espace1">
                        <a href="/list-task"><div class="caixa">
                            <h1><b>READ</b></h1>
                        </div></a>
                    </div>
                </div>  
            
            
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="espace1">
                        <a href="/list-task"><div class="caixa">
                            <h1><b>DELETE</b></h1>
                        </div></a>
                    </div>
                </div>  
             
            
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="espace1">
                        <a href="/list-task"><div class="caixa">
                            <h1><b>UPDATE</b></h1>
                        </div></a>
                    </div>
                </div>  
            
            </div>
        </div>
    </div>
    
    <div class="buttons">
        <div class="espaco-button">
            <div class="quadro-button">
                <a href="/new-task"><div class="button">
                <h2>+</h2>
                </div></a>
            </div>
        </div>
        
        <div class="espaco-button">
            <div class="quadro-button">
                <a href="/list-task"><div class="button">
                <h2>-</h2>
                </div></a>
            </div>
        </div>
    </div>
@endsection