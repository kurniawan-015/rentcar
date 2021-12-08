
<!-- Page Content -->
<div class="page-heading header-text ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 ">
                <h1>Fleet</h1>
                <span>Sewa Mobil Bogor</span>
            </div>
        </div>
    </div>
</div>
<div class="services ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-4 ">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img src="<?php echo base_url() ?>assets/images/agya-300x178.png " alt=" ">
                  <h3>Toyota Agya</h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Transmission :</strong>Automatic</p>
                  <p class="mb-0"><strong class="pr-1">Passenger :</strong>5</p>
                  <p class="mb-0"><strong class="pr-1">Lugages :</strong>2</p>
                  <p class="mb-0"><strong class="pr-1">Doors :</strong>4</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Informasi Customer</h3>
                </div>
                <div class="card-body pt-0">
                  <table class="table">
                    <tr>
                      <th width="30%">Nomor Induk KTP</th>
                      <td width="2%">:</td>
                      <td><label> <?= $nik; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Nama Lengkap</th>
                      <td width="2%">:</td>
                      <td><label> <?= $nama; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Alamat</th>
                      <td width="2%">:</td>
                      <td><label> <?= $alamat; ?> </label></textarea></td>
                    </tr>
                    <tr>
                      <th width="30%">Nomor Telepon</th>
                      <td width="2%">:</td>
                      <td><label> <?= $tlpn; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Photo Diri</th>
                      <td width="2%">:</td>
                      <td><label> <?= $photodiri; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Photo KTP</th>
                      <td width="2%">:</td>
                      <td><label> <?= $photoktp; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Tanggal Sewa</th>
                      <td width="2%">:</td>
                      <td><label> <?= $tanggalsewa; ?> </label>><br></td>
                    </tr>
                    <tr>
                      <th width="30%">Tanggal Kembali</th>
                      <td width="2%">:</td>
                      <td><label> <?= $tanggalkembali; ?> </label><br></td>
                    </tr>
                    <tr>
                      <th width="30%">Lama Sewa</th>
                      <td width="2%">:</td>
                      <td><label> <?= $durasi; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Harga Sewa Per Hari</th>
                      <td width="2%">:</td>
                    <td><label> <?= $hargaperhari; ?> </label></td>
                    </tr>
                    <tr>
                      <th width="30%">Total Harga Sewa</th>
                      <td width="2%">:</td>
                      <td><label>Rp <?= number_format($totalharga,0,'.','.'); ?></label></td>
                    </tr>
                    <tr>
                      <th width="30%"></th>
                      <td width="2%"></td>
                      <td></td>
                    </tr>
                  </table>
                  <center><a href="<?= base_url('transaksi'); ?>" method="post" data-toggle="modal " data-target="#exampleModal " class="filled-button ">Back</a></center>
                </div>
              </div>
              <div class="card shadow-sm">
              </div>
            </div>
          </div>
          <!-- -->
        <br>
    </div>
  </div>
</div>
