<div class="container-fluid" ng-controller="UjianCtrl">
  <div class="row row-offcanvas row-offcanvas-left">
    <div class="row-offcanvas row-offcanvas-right">
      <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebarLeft" role="navigation">
        <div class="well sidebar-nav atas20">
          <ul class="nav">
            <li>Menu</li>
              <li><a href="home">Home</a></li>
            <li><a href="data">Data</a></li>
            <li><a href="login/logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-xs-10 atas20">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="api in getapi">
            <td>{{$index+1}}</td>
            <td>{{api.Name}}</td>
            <td>{{api.City}}</td>
            <td>{{api.Country}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <hr>
  <footer>
    <p class="tengah">© Firman 2017</p>
  </footer>
</div>
