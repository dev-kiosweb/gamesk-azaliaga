				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				
        			        	<div class="row">
        							<div class="col-lg-8 mt-4 mb-4">
        							    <?= alert(); ?>
										<div class="card shadow">
        								    <div class="card-header">
                                                <h5>Edit Produk</h4>
                                            </div>
											<div class="card-body">
												
												<form action="" method="POST" enctype="multipart/form-data">
												    <div class="mb-3">
														<label class="form-label">Games</label>
														<div>
															<select name="games_id" class="form-control">
																<?php foreach ($games as $loop): ?>
																<option value="<?= $loop['id']; ?>" <?= $loop['id'] == $product['games_id'] ? 'selected' : ''; ?>><?= $loop['games']; ?></option>
																<?php endforeach ?>
															</select>
														</div>
													</div>
												    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="product" value="<?= $product['product']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Harga Member</label>
                                                        <input type="number" class="form-control" autocomplete="off" name="price" value="<?= $product['price']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Harga Reseller</label>
                                                        <input type="number" class="form-control" autocomplete="off" name="reseller_price" value="<?= $product['reseller_price']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Harga VIP</label>
                                                        <input type="number" class="form-control" autocomplete="off" name="vip_price" value="<?= $product['vip_price']; ?>">
                                                    </div>
													<div class="mb-3">
														<label class="form-label">Provider</label>
														<div>
															<select name="provider" class="form-control">
																<option value="DF" <?= $product['provider'] == 'DF' ? 'selected' : ''; ?>>Digiflazz</option>
																<option value="AG" <?= $product['provider'] == 'AG' ? 'selected' : ''; ?>>Api Games</option>
																<option value="Manual" <?= $product['provider'] == 'Manual' ? 'selected' : ''; ?>>Manual</option>
															</select>
														</div>
													</div>
													<div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Kode Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="sku" value="<?= $product['sku']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultFormControlInput" class="form-label">Logo Produk</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="logo_url" value="<?= $product['logo_url']; ?>">
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