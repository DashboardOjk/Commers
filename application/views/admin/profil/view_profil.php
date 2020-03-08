            <div class="breadcrumb-holder">
              <div class="container-fluid">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/homeadmin')?>">Home</a></li>
                  <li class="breadcrumb-item active">Profil Lab</li>
                </ul>
              </div>
            </div>

              <div class="card-header">
                  <h4>Data Profil Lab</h4>
                </div>
              <div class="card">

                <div class="card-body">
                  <a class="label label-success" href="<?php echo base_url('index.php/tambahprofiladmin')?>">Tambah Data</a><br><br>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <form>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Lab</th>
                          <th>Alamat</th>
                          <th>Foto</th>
                          <th>Visi</th>
                          <th>Misi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <sbody>
                        <?php $no = 1; foreach ($hasil as $r) {?>
                        <tr>
                          <th scope="row"><?php echo $no++?></th>
                          <td><?php echo $r['nama_profil'];?></td>
                          <td><?php echo $r['alamat_profil'];?></td>
                          <td><?php echo $r['foto_profil']?></td>
                          <td><?php echo $r['visi_profil']?></td>
                          <td><?php echo $r['misi_profil'];?></td>
                          
                          <td>
                          <a class="label label-warning" href="<?php echo site_url('profil_lab/form_edit/'.$r['id_profil'])?>">Edit</a>
                          <a class="label label-danger" href="<?php echo site_url('profil_lab/hapus/'.$r['id_profil'])?>" onclick= "return confirm('yakin mau dihapus?')">Hapus</a><br>
                          </td>
                        </tr>
                      <?php }?>
                      </tbody>
                      </form>
                    </table>
                  </div>
                </div>
              </div>

              <!--  <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>
 -->