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
      <form class="form-horizontal" action="data/save_data" method="post">
        <div class="forn-group col-md-4">
          <label>name</label>
          <input type="hidden" name="id" value="<?php if(isset($record->id)) echo $record->id;?>">
          <input type="text" autofocus name="name" value="<?php if(isset($record->id)) echo $record->name;?>" class="form-control col-md-4">
        </div>
        <div class="forn-group col-md-4">
          <label>City</label>
          <input type="text" name="city" value="<?php if(isset($record->id)) echo $record->city;?>" class="form-control col-md-4">
        </div>
        <div class="forn-group col-md-4">
          <label>Country</label>
          <input type="text" name="country" value="<?php if(isset($record->id)) echo $record->country;?>" class="form-control col-md-4">
        </div>
        <div class="forn-group col-md-4">
          <label>Jumlah Penghasilan Perbulan</label>
          <input type="text" name="jumlah_penghasilan_perbulan" value="<?php if(isset($record->id)) echo $record->jumlah_penghasilan_perbulan;?>" class="form-control col-md-4">
        </div>
        <div class="forn-group col-md-4">
          <label>Email</label>
          <input type="email" name="email" value="<?php if(isset($record->id)) echo $record->email;?>" class="form-control col-md-4">
        </div>
        <div class="box-footer col-md-12 atas20">
          <button type="reset" class="btn btn-xs btn-danger">Cancel</button>
          <button type="submit" class="btn btn-xs btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
  <hr>
  <footer>
    <p class="tengah">© Firman 2017</p>
  </footer>
</div>
