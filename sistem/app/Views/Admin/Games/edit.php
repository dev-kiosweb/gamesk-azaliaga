				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
								<div class="content">
						<div class="row">
								<div class="col-md-10 pt-4">
								    <?= alert(); ?>
                                  <div class="card mb-4">
                                    <h5 class="card-header">Edit Games</h5>
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Games</label>
                                                    <input type="text" class="form-control" autocomplete="off" name="games" value="<?= $games['games']; ?>">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Subtitle</label>
                                                    <input type="text" class="form-control" autocomplete="off" name="subtitle" value="<?= $games['subtitle']; ?>">
                                                  </div>
                                                  <div class="mb-3"> 
                                                    <label id="games-image" class="form-label">Logo</label>
                                                    <div>
                                                        <img src="<?= base_url(); ?>/assets/images/games/<?= $games['image'] ?>" alt="" width="140" class="mb-3 rounded">
                                                    </div>
                                                    <input class="form-control" type="file" id="games-image" name="image"/>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" name="category" aria-label="Default select example">
                                                      <?php foreach ($category as $loop): ?>
													       <option value="<?= $loop['category']; ?>" <?= $loop['category'] == $games['category'] ? 'selected' : ''; ?>><?= $loop['category']; ?></option>
													  <?php endforeach ?>
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Urutan</label>
                                                    <input
                                                      type="number" class="form-control" id="defaultFormControlInput" name="sort" autocomplete="off" value="<?= $games['sort']; ?>">
                                                  </div>
                                                  <div class="mb-3">
                    									<label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                    									<div class="col-md-12">
                    										<textarea name="konten"><?= $games['konten']; ?></textarea>
                    									</div>
                    							  </div>
                    							  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Sistem Target</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" name="target" aria-label="Default select example">
                                                        <option value="default" <?= $games['target'] == 'default' ? 'selected' : ''; ?>>Default</option>
														<option value="ml" <?= $games['target'] == 'ml' ? 'selected' : ''; ?>>Mobile Legends</option>
														<option value="gi" <?= $games['target'] == 'gi' ? 'selected' : ''; ?>>Genshin Impact</option>
														<option value="hf" <?= $games['target'] == 'hf' ? 'selected' : ''; ?>>Hyper Front</option>
														<option value="pgr" <?= $games['target'] == 'pgr' ? 'selected' : ''; ?>>Punishing Gray Raven</option>
														<option value="rm" <?= $games['target'] == 'rm' ? 'selected' : ''; ?>>Ragnarok Mobile</option>
														<option value="joki" <?= $games['target'] == 'joki' ? 'selected' : ''; ?>>Joki - Mobile Legends</option>
														<option value="pulsa" <?= $games['target'] == 'pulsa' ? 'selected' : ''; ?>>Pulsa / E Wallet</option>
                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Cek Validasi</label>
                                                        <select name="check_status" class="form-control">
															<option value="Y" <?= $games['check_status'] == 'Y' ? 'selected' : ''; ?>>Ya</option>
															<option value="N" <?= $games['check_status'] == 'N' ? 'selected' : ''; ?>>Tidak</option>
														</select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="defaultFormControlInput" class="form-label">Kode Validasi</label>
                                                    <input
                                                      type="text" class="form-control" id="defaultFormControlInput" name="check_code" autocomplete="off" value="<?= $games['check_code']; ?>">
                                                      <div id="defaultFormControlHelp" class="form-text">
                                                      Lihat <a href="https://docs.kiosweb.id/player-checker/kode-cek-validasi" target="_blank">Daftar Kode</a> Validasi
                                                    </div>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleFormControlSelect1" class="form-label">Status</label>
                                                        <select name="status" class="form-control">
															<option value="On" <?= $games['status'] == 'On' ? 'selected' : ''; ?>>On</option>
															<option value="Off" <?= $games['status'] == 'Off' ? 'selected' : ''; ?>>Off</option>
														</select>
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