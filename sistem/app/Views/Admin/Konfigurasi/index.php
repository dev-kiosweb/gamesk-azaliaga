				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				
				<div class="mb-3 pt-3">
            <ul class="nav nav-pills mb-3" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="home-tab" role="tab" data-bs-toggle="tab" data-bs-target="#home" aria-controls="home" aria-selected="true">Konfigurasi Umum</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" id="konten-tab" role="tab" data-bs-toggle="tab" data-bs-target="#konten" aria-controls="konten" aria-selected="false">Konfigurasi Konten</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" id="api-tab" role="tab" data-bs-toggle="tab" data-bs-target="#api" aria-controls="api" aria-selected="false">Konfigurasi API</button>
              </li>
            </ul>
				</div>
				
                
                <?= alert(); ?>
                
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <!-- Umum -->
                      <div class="row">
                          <div class="col-md-6">
                          <div class="card mb-4">
                            <h5 class="card-header">Umum</h5>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                          <div class="mb-3">
                                            <label for="defaultFormControlInput" class="form-label">Nama Website</label>
                                            <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $web['name']; ?>" name="name" autocomplete="off"/>
                                          </div>
                                          <div class="mb-3">
                                            <label for="defaultFormControlInput" class="form-label">Judul Website</label>
                                            <input
                                              type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $web['title']; ?>" name="title" autocomplete="off"/>
                                          </div>
                                          <div class="mb-3">
                                            <label for="formFile" class="form-label">Logo</label>
                                            <div>
                                                <img src="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" alt="" class="mb-3 rounded" width="70">
                                            </div>
                                            <input class="form-control" type="file" id="formFile" name="logo"/>
                                          </div>
                                          <div class="mb-3">
                                            <label for="defaultFormControlInput" class="form-label">Keyword</label>
                                            <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $web['keywords']; ?>" name="keywords" autocomplete="off" />
                                          </div>
                                          <div class="mb-3">
                                        <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                                        <div class="col-md-12">
                                          <textarea name="descriptiona"><?= $web['description']; ?></textarea>
                                        </div>
                                      </div>
                                      <div class="text-right">
                                          <button class="btn text-dark" type="reset">Batal</button>
                                          <button class="btn btn-primary" type="submit" name="tombol" value="umum">Simpan</button>
                                      </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sk -->
                        <div class="col-md-6">
                          <div class="card mb-4">
                            <h5 class="card-header">Syarat & Ketentuan</h5>
                            <div class="card-body">
                              <form action="" method="POST">
                                <div class="form-floating mb-3">
                                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="page_sk"><?= $page_sk; ?></textarea>
                                </div>
                                <div class="text-right">
                                  <button class="btn text-dark" type="reset">Batal</button>
                                  <button class="btn btn-primary" type="submit" name="tombol" value="sk">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div> 
                  </div>
                  <div class="tab-pane fade" id="konten" role="tabpanel" aria-labelledby="konten-tab">
                      <!-- Modal -->
                        <div class="col-md-12">
                          <div class="card mb-4">
                            <h5 class="card-header">Modal Pop Up</h5>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                         <div class="mb-3">
                                            <label for="formFile" class="form-label">Pilih Gambar</label>
                                            <input class="form-control" type="file" id="formFile" name="modal_image"/>
                                         </div>
                                        <div class="text-right">
                                          <button class="btn text-dark" type="reset">Batal</button>
                                          <button class="btn btn-primary" type="submit" name="tombol" value="modal">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Banner -->
                        <div class="col-md-12">
                          <div class="card mb-4">
                            <h5 class="card-header">Banner</h5>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                         <div class="mb-3">
                                            <label for="formFile" class="form-label">Pilih Gambar</label>
                                            <input class="form-control" type="file" id="formFile" name="image"/>
                                         </div>
                                      <div class="text-right">
                                        <button class="btn text-dark" type="reset">Batal</button>
                                        <button class="btn btn-primary" type="submit" name="tombol" value="banner">Simpan</button>
                                      </div>
                                    </form>	
                                </div>
                                <table class="table table-responsive table-striped table-white">
										<tr>
											<th>Banner</th>
											<th>Action</th>
										</tr>
										<?php $no = 1; foreach ($banner as $loop): ?>
										<tr>
											<td>
												<img src="<?= base_url(); ?>/assets/images/banner/<?= $loop['image']; ?>" alt="" width="120">
											</td>
											<td>
												<button class="btn btn-danger btn-sm" onclick="hapus('<?= base_url(); ?>/admin/konfigurasi/banner/delete/<?= $loop['id']; ?>');"><i class="tf-icons ti ti-trash"></i></button>
											</td>
										</tr>
										<?php endforeach ?>

										<?php if (count($banner) == 0): ?>
										<tr>
											<td colspan="3" align="center">Tidak ada banner</td>
										</tr>
										<?php endif ?>
									</table>
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="api" role="tabpanel" aria-labelledby="api-tab">
                         
                         <!-- provider -->
                         <div class="row">
                             <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">DigiFlazz</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $digi['user']; ?>" name="user" autocomplete="off"/>
                                              </div>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Production Key</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $digi['key']; ?>" name="key" autocomplete="off"/>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="digi">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Api Games</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Merchant ID</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $ag['merchant']; ?>" name="merchant" autocomplete="off"/>
                                              </div>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Secret Key</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $ag['secret']; ?>" name="secret" autocomplete="off"/>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="ag">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                         
                         <!-- Payment Gateway -->
                         <div class="row">
                             
                             <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Cek Mutasi</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <p>Callback URL <code class="text-primary"><?= base_url(); ?>/sistem/callback/cekmutasi</code></p>
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Api Key</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $cm['key']; ?>" name="key" autocomplete="off"/>
                                              </div>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Api Signature</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $cm['sign']; ?>" name="sign" autocomplete="off"/>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="cm">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Ipaymu</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <p>Callback URL <code class="text-primary"><?= base_url(); ?>/sistem/callback/ipaymu</code></p>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Api VA</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $ip['va']; ?>" name="va" autocomplete="off"/>
                                              </div>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Api Secret</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $ip['secret']; ?>" name="secret" autocomplete="off"/>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="ip">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Tripay</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <p>Callback URL <code class="text-primary"><?= base_url(); ?>/sistem/callback/tripay</code></p>
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Kode Merchat</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $tripay['merchant']; ?>" name="merchant" autocomplete="off"/>
                                              </div>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Api Key</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $tripay['key']; ?>" name="key" autocomplete="off"/>
                                              </div>
                                              <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Private Key</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $tripay['private']; ?>" name="private" autocomplete="off"/>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="tripay">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Validasi</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Token</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $kiosweb; ?>" name="kiosweb" autocomplete="off"/>
                                              <div id="defaultFormControlHelp" class="form-text">
                                                      Hubungi Developer <a href="http://wa.me/6285293026542">disini</a> untuk mendapatkan token
                                                  </div>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="kiosweb">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">WhtasApp Fonnte</h5>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Token</label>
                                                <input
                                                  type="text" class="form-control" id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" value="<?= $fonnte_token; ?>" name="fonnte_token" autocomplete="off"/>
                                              <div id="defaultFormControlHelp" class="form-text">
                                                      Daftar <a href="http://fonnte.com">disini</a> untuk mendapatkan token
                                                  </div>
                                              </div>
                							  <div class="text-right">
                							       <button class="btn text-dark" type="reset">Batal</button>
                							       <button class="btn btn-primary" type="submit" name="tombol" value="fonnte">Simpan</button>
                							  </div>
                						</form>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 

					
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script>
					$("#customFile").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings("label[for=customFile]").addClass("selected").html(fileName);
					});

					$("#customFile-banner").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings("label[for=customFile-banner]").addClass("selected").html(fileName);
					});

					CKEDITOR.replace('descriptiona');
					CKEDITOR.replace('page_sk', {
						height: 500,
					});
				</script>
				<?php $this->endSection(); ?>