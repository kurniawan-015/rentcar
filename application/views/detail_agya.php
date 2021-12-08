
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
								<form action="<?= base_url('transaksi/cetak'); ?>" method="POST">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Informasi Customer</h3>
                </div>
                <div class="card-body pt-0">
                  <table class="table">
                    <tr>
                      <th width="30%">Nomor Induk KTP</th>
                      <td width="2%">:</td>
                      <td><input name="nik" type="text" id="nik" required=""></td>
                    </tr>
                    <tr>
                      <th width="30%">Nama Lengkap</th>
                      <td width="2%">:</td>
                      <td><input name="nama" type="text" id="nama" required=""></td>
                    </tr>
                    <tr>
                      <th width="30%">Alamat</th>
                      <td width="2%">:</td>
                      <td><textarea name="alamat" cols="50" rows="3" id="alamat" required=""></textarea></td>
                    </tr>
                    <tr>
                      <th width="30%">Nomor Telepon</th>
                      <td width="2%">:</td>
                      <td><input name="tlpn" type="text" id="tlpn" required=""></td>
                    </tr>
                    <tr>
                      <th width="30%">Photo Diri</th>
                      <td width="2%">:</td>
                      <td><input name="photodiri" type="file" id="photodiri" required=""></td>
                    </tr>
                    <tr>
                      <th width="30%">Photo KTP</th>
                      <td width="2%">:</td>
                      <td><input name="photoktp" type="file" id="photoktp" required=""></td>
                    </tr>
                    <tr>
                      <th width="30%">Tanggal Sewa</th>
                      <td width="2%">:</td>
                      <td><input type="date" id="tanggalsewa" name="tanggalsewa" required><br></td>
                    </tr>
                    <tr>
                      <th width="30%">Tanggal Kembali</th>
                      <td width="2%">:</td>
                      <td><input type="date" id="tanggalkembali" name="tanggalkembali" required><br></td>
                    </tr>
                    <tr>
                      <th width="30%">Lama Sewa</th>
                      <td width="2%">:</td>
                      <td><input name="durasi" type="text" id="durasi" required=""></td>
                    </tr>
                    <tr>
                      <th width="30%">Harga Sewa Per Hari</th>
                      <td width="2%">:</td>
                    <td><input name="hargaperhari" type="text" id="hargaperhari" placeholder="450.000" required="" ></td>
                    </tr>
                    <tr>
                      <th width="30%">Total Harga Sewa</th>
                      <td width="2%">:</td>
                      <td><input name="totalharga" type="text" id="totalharga" placeholder="" required="" ></td>
                    </tr>
                    <tr>
                      <th width="30%"></th>
                      <td width="2%"></td>
                      <td></td>
                    </tr>
                  </table>
                  <center><button class="button-3" role="button"> Proses </button></center>
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
