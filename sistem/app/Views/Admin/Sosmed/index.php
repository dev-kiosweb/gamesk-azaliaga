				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
						<div class="row">
							<div class="col-lg-10 mt-4">

								<div class="card shadow mb-4">
								    <div class="card-header py-3">
                                        <h5>Bantuan</h5>
                                    </div>
									<div class="card-body">
										
										<a href="<?= base_url(); ?>/admin/sosmed/add" class="btn btn-primary btn-sm">Tambah</a>
										
										<?= alert(); ?>
										
									</div>
									<div class="table-responsive">
										<table class="table-white table table-striped">
											<tr class="bg-primary text-white">
												<th width="10">No</th>
												<th>Gambar</th>
												<th>Link</th>
												<th>Action</th>
											</tr>
											<?php $no = 1; foreach ($sosmed as $loop): ?>
											<tr>
												<td><?= $no++; ?></td>
												<td>
												    <img src="<?= base_url(); ?>/assets/images/sosmed/<?= $loop['image']; ?>" width="40">
												</td>
												<td><?= $loop['link']; ?></td>
												<td class="d-sm-flex" width="10">
													<div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/sosmed/edit/<?= $loop['id']; ?>"
                                                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                                              >
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/sosmed/delete/<?= $loop['id']; ?>');">
                                                                  <i class="ti ti-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
												</td>
											</tr>
											<?php endforeach ?>
										</table>
									</div>
								</div>
							</div>
						</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<?php $this->endSection(); ?>