				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				                <div class="row">
									<div class="col-lg-10 mt-4">
									    <?= alert(); ?>
        								<div class="card shadow mb-4">
        								    <div class="card-header py-3">
                                                <h5>Tambah Game populer</h5>
                                            </div>
											<div class="card-body">
												
												<form action="<?= base_url('admin/gamepopuler/add') ?>" method="POST" enctype="multipart/form-data">
													<div class="mb-3">
														<label for="defaultFormControlInput" class="form-label">Pilih Game</label>
															<select class="form-control" id="game_id" name="game_id">
																<?php foreach($game as $key => $value){ ?>
																	<option value="<?= $value['id'] ?>" ><?= $value['games'] ?></option>
																<?php } ?>
															</select>
													</div>
													
													<div class="text-right">
														<a href="<?= base_url(); ?>/admin/gamepopuler" class="btn btn-warning float-left">Kembali</a>
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