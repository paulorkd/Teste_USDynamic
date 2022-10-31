<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type=text/css>
        #tamanho{
            width: 350px;
            padding: 10px;
        }
        .cadeado{
            position: relative;
            text-align: center;
            padding-bottom:10px;
        }
        .cadeado img{
            width: 125px;
            height: 125px;
        }
    </style>
</head>
<body>
    <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3" >
        <form method="POST" action="/login/entrar">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" require>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" require>
            </div>
            <div style="text-align: center;">
                <button class="btn btn-success">Entra</button>
            </div>
        </form>
        <div style="text-align: center; margin-top: 30px;">
            
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

