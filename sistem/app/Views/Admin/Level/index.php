				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
						<div class="row">
							<div class="col-lg-10 mt-4">
							    <?= alert(); ?>
							    <div class="card-header py-3">
                                        <h5>Harga Level Member</h5>
                                    </div>
								<div class="card shadow mb-4">
									<div class="table-responsive">
										<table class="table-white table table-striped">
											<tr class="bg-primary text-white">
												<th width="10">No</th>
												<th>Level</th>
												<th>Harga</th>
												<th>Action</th>
											</tr>
											<?php $no = 1; foreach ($account as $loop): ?>
											<tr>
												<td><?= $no++; ?></td>
												<td><?= $loop['level_name']; ?></td>
												<td>Rp <?= number_format($loop['price'],0,',','.'); ?></td>
												<td>
													<div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/level/edit/<?= $loop['id']; ?>"
                                                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                                              >
                                                            </div>
                                                    </div>
												</td>
											</tr>
											<?php endforeach ?>
											<?php if (count($account) == 0): ?>
											<tr>
												<td colspan="6" align="center">Tidak ada level</td>
											</tr>
											<?php endif ?>
										</table>
									</div>
								</div>
							</div>
						</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>