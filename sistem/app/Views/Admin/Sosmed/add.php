				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
        								<div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                                <h5>Tambah Bantuan</h5>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST" enctype="multipart/form-data">
													 <div class="mb-3">
														<label for="formFile" class="form-label">Pilih Gambar</label>
														<input class="form-control" type="file" id="formFile" name="image"/>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Link</label>
														<input type="url" class="form-control" autocomplete="off" name="link">
													</div>
													
													<div class="text-right">
														<a href="<?= base_url(); ?>/admin/sosmed" class="btn btn-warning float-left">Kembali</a>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</form>
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
				</script>
				<?php $this->endSection(); ?>