				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				
				                <div class="row">
        							<div class="col-lg-8 mt-4 mb-4">
        							    <?= alert(); ?>
										<div class="card shadow">
        								    <div class="card-header">
                                                <h5>Tambah Produk</h4>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST" enctype="multipart/form-data">
												    <div class="mb-3">
														<label class="form-label">Games</label>
														<div>
															<select name="games_id" class="form-control">
																<option value="">Pilih salah satu</option>
																<?php foreach ($games as $loop): ?>
																<option value="<?= $loop['id']; ?>"><?= $loop['games']; ?></option>
																<?php endforeach ?>
															</select>
														</div>
													</div>
												    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="product">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Harga Member</label>
                                                        <input type="number" class="form-control" autocomplete="off" name="price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Harga Reseller</label>
                                                        <input type="number" class="form-control" autocomplete="off" name="reseller_price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Harga VIP</label>
                                                        <input type="number" class="form-control" autocomplete="off" name="vip_price">
                                                    </div>
													<div class="mb-3">
														<label class="form-label">Provider</label>
														<div>
															<select name="provider" class="form-control">
																<option value="DF">Digiflazz</option>
																<option value="AG">Api Games</option>
																<option value="Manual">Manual</option>
															</select>
														</div>
													</div>
													<div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Kode Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="sku">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Logo Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="logo_url">
                                                    </div>
                                                        
													<div class="text-end">
														<a href="<?= base_url(); ?>/admin/produk" class="btn btn-warning text-left">Kembali</a>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>