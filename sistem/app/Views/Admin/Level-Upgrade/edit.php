				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

				<div class="row">
					<div class="col-lg-10 mt-4">
						<?= alert(); ?>
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h5>Edit Level</h5>
							</div>
							<div class="card-body">
								<form action="<?= base_url('admin/level-upgrade/edit/' . $level_up['id']) ?>" method="POST" enctype="multipart/form-data">
									<div class="mb-3">
										<label for="defaultFormControlInput" class="form-label">Nama Level</label>
											<input type="text" name="level_name" class="form-control" autocomplete="off" value="<?= $level_up['level_name']; ?>" readonly>
											<input type="hidden" name="level_id" class="form-control" autocomplete="off" value="<?= $level_up['level_id']; ?>" readonly>
											<input type="hidden" name="user_id" class="form-control" autocomplete="off" value="<?= $level_up['user_id']; ?>" readonly>
									</div>
									<div class="mb-3" id="tipe-manual">
										<label for="defaultFormControlInput" class="form-label">Harga</label>
											<input type="text" class="form-control" autocomplete="off" name="price" value="<?= number_format($level_up['price'], 0, ',',',') ?>" readonly>
									</div>
									<div class="mb-3" id="tipe-manual">
										<label for="defaultFormControlInput" class="form-label">Metode Pembayaran</label>
											<input type="text" class="form-control" autocomplete="off" name="price" value="<?= $level_up['method_name'] ?>" readonly>
									</div>
									<div class="mb-3" id="tipe-manual">
										<label for="defaultFormControlInput" class="form-label">Kode Pembayaran</label>
											<input type="text" class="form-control" autocomplete="off" name="price" value="<?= $level_up['payment_code']?>" readonly>
									</div>
									<div class="mb-3" id="tipe-manual">
										<label for="defaultFormControlInput" class="form-label">Status Pembayaran</label>
											<select id="status" name="status" class="form-control">
												<option class="form-control">Pilih</option>
												<?php
													$status = ['Pending', 'Success', 'Canceled'];
													foreach ($status as $key => $value) { ?>
														<option class="form-control" value="<?= $value ?>" <?= $value == $level_up['status'] ? 'selected' : '' ; ?>><?= $value ?></option>
												<?php } ?>
											</select>
									</div>
									
									<div class="text-right">
										<a href="<?= base_url(); ?>/admin/level-upgrade" class="btn btn-warning float-left">Kembali</a>
										<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php $this->endSection(); ?>
				