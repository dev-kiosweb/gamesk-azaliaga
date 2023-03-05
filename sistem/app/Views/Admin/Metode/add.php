				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>

								<div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
        								<div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                                <h5>Tambah Metode</h5>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Nama Metode</label>
															<input type="text" class="form-control" autocomplete="off" name="method">
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Gambar</label>
															<div class="custom-file">
															    <input class="form-control" type="file" id="method-image" name="image"/>
															</div>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Kode Unik</label>
															<select name="uniq" class="form-control">
																<option value="Y">Ya</option>
																<option value="N">Tidak</option>
															</select>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Provider</label>
															<select name="provider" class="form-control">
																<option value="Manual">Manual</option>
																<option value="Tripay">Tripay</option>
																<option value="iPaymu">iPaymu</option>
															</select>
													</div>
													<div class="mb-3" id="tipe-manual">
														<label for="defaultFormControlInput" class="form-label">Rekening</label>
															<input type="text" class="form-control" autocomplete="off" name="rek">
													</div>
													<div class="mb-3 d-none" id="tipe-tripay">
														<label for="defaultFormControlInput" class="form-label">Kode Metode</label>
															<input type="text" class="form-control" autocomplete="off" name="code">
															<small>Kode metode manual <a href="https://postimg.cc/Tpv0bXwT" class="text-warning" target="_blank">disini</a></small> <br>
															<small>Kode metode Tripay bisa di cek <a href="https://tripay.co.id/developer?tab=channels" class="text-warning" target="_blank">disini</a></small> <br>
															<small>Kode metode iPaymu bisa di cek <a href="https://i.postimg.cc/L6gzmTXN/image-2022-09-25-184142534.png" class="text-warning" target="_blank">disini</a>. Gunakan 2 kode metode yang digabung dengan tanda titik (.). Contoh : <code>va.bri</code></small> <br>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Kategori</label>
															<select name="category" class="form-control">
																<option value="E-Wallet">E-Wallet</option>
																<option value="Bank Transfer">Bank Transfer</option>
																<option value="Virtual Account">Virtual Account</option>
																<option value="Convenience Store">Convenience Store</option>
															</select>
													</div>
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Instruksi</label>
															<textarea name="instruksi"></textarea>
													</div>
													
													<div class="text-right">
														<a href="<?= base_url(); ?>/admin/metode" class="btn btn-warning float-left">Kembali</a>
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