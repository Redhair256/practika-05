

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Listing</title>
      <link rel="stylesheet" href="http://localhost/practika-05/public/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" >
   </head>
   <body>
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
         <ul class="nav navbar-nav">
            <li><a href="links"><span class="glyphicon glyphicon-list" aria-hidden="false"></span>
               Ссылки</a>
            </li>
            <li><a href="link/123"><span class="glyphicon glyphicon-stats" aria-hidden="false"></span>
               Статистика</a>
            </li>
         </ul>
      </nav>
      <div class="container">
         <h4>Добавить ссылку</h4>
         <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-link" aria-hidden="false"></span></span>
            <input type="text" class="form-control" placeholder="Https:\\" aria-describedby="basic-addon1">
            <span class="input-group-btn">
            <button class="btn btn-primary" type="button" > Добавить <span class="glyphicon glyphicon-arrow-right" aria-hidden="false"></span></button>
            </span>
         </div>
         <br>
         <h4>Cсылки</h4>
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th width=40 class="text-center"><span class="glyphicon glyphicon-globe" aria-hidden="false"></span></th>
                  <th width=300><b> идентификатор </b></th>
                  <th><b> целевой URL ссылки </b></th>
                  <th width=40>
                     <div class=text-center><span class="glyphicon glyphicon-stats" aria-hidden="false"></span></div>
                  </th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td align="center"><a href="#"><span class="glyphicon glyphicon-link" aria-hidden="false" ></span></a></td>
                  <td>...</td>
                  <td><a href="http://vk.com"> http://vk.com </a></td>
                  <td align="center"><a href="statistics.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="false"></span></a></td>
               </tr>
               <tr>
                  <td align="center"><a href="#"><span class="glyphicon glyphicon-link" aria-hidden="false"></span></a></td>
                  <td>...</td>
                  <td><a href="http://Google.com"> http://Google.com </a></td>
                  <td align="center"><a href="statistics.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="false"></span></a></td>
               </tr>
               <tr>
                  <td align="center"><a href="#"><span class="glyphicon glyphicon-link" aria-hidden="false"></span></a></td>
                  <td>...</td>
                  <td><a href="http://Google.ru"> http://Google.ru </a></td>
                  <td align="center"><a href="statistics.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="false"></span></a></td>
               </tr>
            </tbody>
         </table>
      </div>
      <script type="text/javascript" src="http://localhost/practika-05/vendor/components/jquery/jquery.min.js"></script>
      <script type="text/javascript" src="http://localhost/practika-05/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>    
   </body>
</html>


