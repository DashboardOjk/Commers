 <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/profil_lab')?>">Profil Lab</a></li>
            <li class="breadcrumb-item active">Edit data Profil Lab</li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Profil Lab</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Edit Data Profil Lab</h4>
                </div>
                    <?php if($update){
                      
                      $nama = $update->nama_profil;
                      $alamat = $update->alamat_profil;
                      $visi = $update->visi_profil;
                      $misi = $update->misi_profil;
                      
                    }else{
                      $nama="";
                      $visi ="";
                      $misi ="";
                      $alamat ="";
                    }
                  ?>
                <div class="card-body">
                  <form class="form-horizontal" action="<?php echo site_url('profil_lab/tambah')?>" method="POST"><!-- post itu guanya mengirikm kedalam cotrolerr -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label" >Nama Lab</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Namalab" value="<?php echo $nama?>">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Alamat Lab</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Alamatlab" value="<?php echo $alamat?>">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Visi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Visilab" value="<?php echo $visi?>">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Misi</label>
                      <div class="col-sm-10">
                        <textarea class="ckeditor" id="ckedtor" name="Misilab" ><?php echo $misi?></textarea>
                      </div>
                    </div>

                     <div class="line"></div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Foto</label>
                          <div class="col-sm-5">
                          <input type="file" class="" name="file_name" id="file_name" placeholder="Pilih Foto">
                          <i><font color="red">*Foto hanya berekstensi .*gif|jpg|jpeg|png, dengan ukuran maksimal 2500x2500 px</font></i>
                          </div>
                       </div>

                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <a href="<?php echo base_url('index.php/profil_lab')?>" class="btn btn-secondary" >Cancel</a>
                        <button type="submit" class="btn btn-primary" >Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


              