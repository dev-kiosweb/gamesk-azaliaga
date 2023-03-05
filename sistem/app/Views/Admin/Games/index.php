				<?php $this->extend('admin'); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">
						<div class="row">
							<div class="col-lg-12 pt-4">
							    <?= alert(); ?>
								<div class="card shadow mb-4">
								    <div class="card-header py-3">
                                    <h5>Daftar Games</h5>
                                    <div class="card-tools">
										<a href="<?= base_url(); ?>/admin/games/add" class="btn btn-primary btn-sm"><i class="ti ti-plus me-md-2"></i> Tambah Games</a>
									</div>
                                    </div>
									<div class="table-responsive">
										<table class="table-white table table-striped" id="datatable">
    										<thead class="bg-white text-dark">
    										    <tr>
    												<th width="10">No</th>
    												<th>Games</th>
    												<th>Kategori</th>
    												<th>Produk</th>
    												<th>Status</th>
    												<th>Action</th>
    											</tr>
    										</thead>
    										<?php $no = 1; foreach ($games as $loop): ?>
    										<tbody>
    										    
    											<tr>
    												<td><?= $no++; ?></td>
    												<td>
    													<img src="<?= base_url(); ?>/assets/images/games/<?= $loop['image']; ?>" alt="" width="40" class="mr-1 rounded">
    													<?= $loop['games']; ?>
    												</td>
    												<td><?= $loop['category']; ?></td>
    												<td><?= $loop['product']; ?> Produk</td>
    												<td><?= $loop['status']; ?></td>
    												<td>
    													<div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                              <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                              <a class="dropdown-item" href="<?= base_url(); ?>/admin/games/edit/<?= $loop['id']; ?>"
                                                                ><i class="ti ti-pencil me-1"></i> Edit</a
                                                              >
                                                              <a class="dropdown-item" onclick="hapus('<?= base_url(); ?>/admin/games/delete/<?= $loop['id']; ?>');">
                                                                  <i class="ti ti-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
    												</td>
    											</tr>
    											
    										</tbody>
    										<?php endforeach ?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script>
					$("datatable").DataTable({
                    		ordering: false,
                    	});
				</script>
				<?php $this->endSection(); ?>