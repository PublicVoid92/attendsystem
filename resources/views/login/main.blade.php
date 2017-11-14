
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Main Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Script -->
        
             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    </head>
    <body>
      <table width="100%" height="100%">
              <tr height="20%">
                  <td width="20%"></td>
                  <td width="20%" height="200px">
                        
                  </td>
                  <td width="20%"></td>
            </tr>
            <tr height="20%">
                  <td width="20%"></td>
                  <td width="20%">
                        <center><h2>E-SKPS</h2></center>>
                  </td>
                  <td width="20%"></td>
            </tr>
            <tr>
                  <td width="20%"></td>
                        <td width="20%">                           
                              <form class="form-horizontal">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="userId" placeholder="ID">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                  </div>
                                </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                          <div class="alert alert-danger" role="alert">Pengguna tiada dalam sistem</div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-default" onclick="javascript:userLogin();">Login</button>
                                  </div>
                                </div>
                              </form>                            
                        </td>
                  <td width="20%"></td>
            </tr>
          <tr>
            <td width="20%"></td>
            <td width="20%"></td>
            <td width="20%"></td>
          </tr>
      </table>
    </body>
</html>
