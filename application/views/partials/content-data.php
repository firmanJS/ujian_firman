<div class="container-fluid">
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
      <?php if ($this->session->userdata('status')=='Customer'): ?>
      <a href="data/add" class="btn btn-xs btn-info">Add</a>
      <a href="data/send_data" class="btn btn-xs btn-default">Send Data</a>
        <?php endif; ?>
      <?php if ($this->session->userdata('status')=='Pemeriksa1'): ?>
        <a href="data/send_data" class="btn btn-xs btn-default">Approve All Data</a>
      <?php endif; ?>
      <?php if ($this->session->userdata('status')=='Pemeriksa2'): ?>
        <a href="data/send_data" class="btn btn-xs btn-default">Approve All Data</a>
        <a href="data/reject" class="btn btn-xs btn-danger">Reject All Data</a>
      <?php endif; ?>
      <br><br>
      <?php echo tampil_pesan(); ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
            <th>Jumlah Penghasilan Perbulan</th>
            <th>Email</th>
            <?php if ($this->session->userdata('status')!='Customer'): ?>
              <th>Status</th>
            <?php endif; ?>
              <?php if ($this->session->userdata('status')=='Customer'): ?>
            <th>Aksi</th>
          <?php endif; ?>

          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($kredit as $key): ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $key->name; ?></td>
            <td><?php echo $key->city; ?></td>
            <td><?php echo $key->country; ?></td>
            <td><?php echo $key->jumlah_penghasilan_perbulan; ?></td>
            <td><?php echo $key->email; ?></td>
            <?php if ($this->session->userdata('status')!='Customer'): ?>
            <td>
              <?php if ($key->status==1): ?>
              <label class="label label-info">Waiting Approve</label>
            <?php elseif ($key->status==2): ?>
                <label class="label label-info">Waiting Approve</label>
                <?php else: ?>
                    <label class="label label-default">Waiting</labe>
              <?php endif; ?>
            </td>
          <?php endif; ?>
            <?php if ($this->session->userdata('status')=='Customer'): ?>
            <td>
              <a href="data/add/<?echo $key->id;?>" class="btn btn-xs btn-warning">Edit</a>
              <a href="data/delete_data/<?echo $key->id;?>" onclick="return confirm('Are you sure delete this data ?')" class="btn btn-xs btn-danger">Delete</a>
            </td>
            <?php endif;?>
          </tr>
        <?php $no++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <hr>
  <footer>
    <p class="tengah">© Firman 2017</p>
  </footer>
</div>
