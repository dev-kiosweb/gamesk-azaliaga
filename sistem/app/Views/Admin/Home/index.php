				<?php $this->extend('admin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
                    <div class="row pt-4">
                        <h4 class="fw-bold py-3 mb-4">Dashboard</h4>
                        <!-- admin -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Total Admin</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-primary me-3 p-3">
                                    <i class="ti ti-user ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total['admin']; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ admin -->

                        <!-- pesanan -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Total Pesanan</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-success me-3 p-3">
                                    <i class="ti ti-user ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total['orders']; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ pesanan -->

                        <!-- Games -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Total Games</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-warning me-3 p-3">
                                    <i class="ti ti-shopping-cart ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total['games']; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ Games -->

                        <!-- Produk -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Total Produk</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-info me-3 p-3">
                                    <i class="ti ti-shopping-cart ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total['product']; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ Produk -->
                        
                        <h4 class="fw-bold py-3 mb-4">Transaksi Saya</h4>
                        
                        <!-- Transaksi Sukses -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Transaksi Sukses</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-success me-3 p-3">
                                    <i class="ti ti-user ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total_trx_sukses; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ Transaksi Sukses -->

                        <!-- Transaksi Pending -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Transaksi Pending</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-warning me-3 p-3">
                                    <i class="ti ti-shopping-cart ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total_trx_pending; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ Transaksi Pending -->

                        <!-- Transaksi Proses -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Transaksi Proses</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-info me-3 p-3">
                                    <i class="ti ti-shopping-cart ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total_trx_proses; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ Transaksi Proses -->

                        <!-- Transaksi Batal -->
                        <div class="col-xl-3 col-md-6 mb-4 mp-4 mx-auto">
                        <div class="card h-100">
                            <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Transaksi Batal</h5>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-12 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-danger me-3 p-3">
                                    <i class="ti ti-shopping-cart ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                    <h4 class="mb-0"><?= $total_trx_batal; ?></h4>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--/ Transaksi Batal -->
                        
                        <!-- Best Topup
                          <div class="card mb-4">
                            <h5 class="card-header">Top Up Terbanyak</h5>
                            <div class="card-datatable table-responsive">
                              <table id="datatable" class="dt-row-grouping table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Metode</th>
                                    <th>Tanggal</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $no = 1; foreach($topup_terbanyak as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['username'] ?></td>
                                        <td>Rp. <?= number_format($value['amount'], 0,',',',') ?></td>
                                        <td><?= $value['method'] ?></td>
                                        <td><?= $value['date_create'] ?></td>
                                    </tr>
                                 <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        <!--/ Best Topup -->
                        
                    </div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
				<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
				<script>
					new Morris.Line({
						element: 'myfirstchart',
						data: [
							<?php foreach ($chart as $loop): ?>
							{ tanggal: '<?= $loop['tanggal']; ?>', total: <?= $loop['total']; ?> },
							<?php endforeach ?>
						],
						xkey: 'tanggal',
						ykeys: ['total'],
						labels: ['Tanggal'],
						// lineColors: ['#fff'],
                        resize: true,
                        parseTime: false
					});
				</script>
				<script type="text/javascript">
					$(function() {
                        $("#datatable").DataTable();
						$('input[name="daterange"]').daterangepicker();
					});
				</script>
				<?php $this->endSection(); ?>