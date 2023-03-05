				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
									    <div class="card-header py-3">
                                            <h5>Edit Harga Level</h5>
                                        </div>
        								<div class="card shadow mb-4">
											<div class="card-body">
											    <form action="" method="POST" enctype="multipart/form-data">
													<div class="mb-3">
														<label class="col-form-label">Nama Level</label>
														<input type="text" name="level_name" class="form-control" autocomplete="off" value="<?= $level[0]['level_name']; ?>">
													</div>
													<div class="mb-3" id="tipe-manual">
														<label class="col-form-label">Harga</label>
														<input type="number" class="form-control" autocomplete="off" name="price" value="<?= $level[0]['price']; ?>">
													</div>
													
													<div class="text-right mt-3">
													    <a href="<?= base_url(); ?>/admin/level" class="btn btn-warning float-left">Kembali</a>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
				<?php $this->endSection(); ?>
				