				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

								<div class="row">
									
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
        								<div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                                <h5>Edit Metode</h5>
                                            </div>
											<div class="card-body">
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Nama Metode</label>
															<input type="text" class="form-control" autocomplete="off" name="method" value="<?= $method['method']; ?>">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Gambar</label>
														<div>
															<img src="<?= base_url(); ?>/assets/images/method/<?= $method['image']; ?>" alt="" class="mb-3 rounded" width="140">
														</div>
															<div class="custom-file">
															    <input class="form-control" type="file" id="method-image" name="image"/>
															</div>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Kode Unik</label>
															<select name="uniq" class="form-control">
																<option value="Y" <?= $method['uniq'] == 'Y' ? 'selected' : ''; ?>>Ya</option>
																<option value="N" <?= $method['uniq'] == 'N' ? 'selected' : ''; ?>>Tidak</option>
															</select>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Provider</label>
															<select name="provider" class="form-control">
																<option value="Manual" <?= $method['provider'] == 'Manual' ? 'selected' : ''; ?>>Manual</option>
																<option value="Tripay" <?= $method['provider'] == 'Tripay' ? 'selected' : ''; ?>>Tripay</option>
																<option value="iPaymu" <?= $method['provider'] == 'iPaymu' ? 'selected' : ''; ?>>iPaymu</option>
															</select>
													</div>
													<div class="mb-3 <?= in_array($method['provider'], ['Tripay', 'iPaymu']) ? 'd-none' : ''; ?>" id="tipe-manual">
														<label for="defaultFormControlInput" class="form-label">Rekening</label>
															<input type="text" class="form-control" autocomplete="off" name="rek" value="<?= $method['rek']; ?>">
													</div>
													<div class="mb-3 <?= !in_array($method['provider'], ['Manual']) ? 'd-none' : ''; ?>" id="tipe-tripay">
														<label for="defaultFormControlInput" class="form-label">Kode Metode</label>
															<input type="text" class="form-control" autocomplete="off" name="code" value="<?= $method['code']; ?>">
															<small>Kode metode manual <a href="https://postimg.cc/Tpv0bXwT" class="text-warning" target="_blank">disini</a></small> <br>
															<small>Kode metode Tripay bisa di cek <a href="https://tripay.co.id/developer?tab=channels" class="text-warning" target="_blank">disini</a></small> <br>
															<small>Kode metode iPaymu bisa di cek <a href="https://i.postimg.cc/L6gzmTXN/image-2022-09-25-184142534.png" class="text-warning" target="_blank">disini</a>. Gunakan 2 kode metode yang digabung dengan tanda titik (.). Contoh : <code>va.bri</code></small> <br>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Kategori</label>
															<select name="category" class="form-control">
																<option value="E-Wallet" <?= $method['category'] == 'E-Wallet' ? 'selected' : ''; ?>>E-Wallet</option>
																<option value="Bank Transfer" <?= $method['category'] == 'Bank Transfer' ? 'selected' : ''; ?>>Bank Transfer</option>
																<option value="Virtual Account" <?= $method['category'] == 'Virtual Account' ? 'selected' : ''; ?>>Virtual Account</option>
																<option value="Convenience Store" <?= $method['category'] == 'Convience Store' ? 'selected' : ''; ?>>Convenience Store</option>
															</select>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Instruksi</label>
															<textarea name="instruksi"><?= $method['instruksi']; ?></textarea>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Status</label>
															<select name="status" class="form-control">
																<option value="On" <?= $method['status'] == 'On' ? 'selected' : ''; ?>>On</option>
																<option value="Off" <?= $method['status'] == 'Off' ? 'selected' : ''; ?>>Off</option>
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
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script>
					$("#tipe-tripay").removeClass('d-none');
					 $("select[name=provider]").on('change', function() {
					 	if ($(this).val() == 'Manual') {
					 		$("#tipe-manual").removeClass('d-none');
					 		$("#tipe-tripay").addClass('d-none');
					 	} else {
					 		$("#tipe-manual").addClass('d-none');
					 		$("#tipe-tripay").removeClass('d-none');
					 	}
					 });
					$(".custom-file-input").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
					});
				</script>
				<script>
					CKEDITOR.replace('instruksi');
				</script>
				<?php $this->endSection(); ?>