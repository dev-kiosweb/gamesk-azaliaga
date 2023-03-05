				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">
						<div class="row">
								<div class="col-md-10 mt-4">
								    <?= alert(); ?>
								    <h5>Tambah Games</h5>
                                  <div class="card mb-4">
                                    
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Games</label>
                                                    <input type="text" class="form-control" autocomplete="off" name="games">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label id="games-image" class="form-label">Logo</label>
                                                    <input class="form-control" type="file" id="games-image" name="image"/>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" name="category" aria-label="Default select example">
                                                      <?php foreach ($category as $loop): ?>
													       <option value="<?= $loop['category']; ?>"><?= $loop['category']; ?></option>
													  <?php endforeach ?>
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Urutan</label>
                                                    <input
                                                      type="number" class="form-control" id="defaultFormControlInput" name="sort" autocomplete="off"/>
                                                  </div>
                                                  <div class="mb-3">
                    									<label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                    									<div class="col-md-12">
                    										<textarea name="konten"></textarea>
                    									</div>
                    							  </div>
                    							  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Sistem Target</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" name="target" aria-label="Default select example">
                                                        <option value="default">Default</option>
														<option value="ml">Mobile Legends</option>
														<option value="gi">Genshin Impact</option>
														<option value="hf">Hyper Front</option>
														<option value="pgr">Punishing Gray Raven</option>
														<option value="rm">Ragnarok Mobile</option>
														<option value="joki">Joki - Mobile Legends</option>
														<option value="pulsa">Pulsa / E Wallet</option>
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cek Validasi</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" name="check_status" aria-label="Default select example">
                                                        <option value="Y">Ya</option>
														<option value="N">Tidak</option>
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Kode Validasi</label>
                                                    <input
                                                      type="number" class="form-control" id="defaultFormControlInput" name="check_code" autocomplete="off"/>
                                                  </div>
                    							  <div class="text-right">
														<button class="btn text-dark" type="reset">Batal</button>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
                    						</form>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script>
					$(".custom-file-input").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
					});
					CKEDITOR.replace('konten');
				</script>
				<?php $this->endSection(); ?>