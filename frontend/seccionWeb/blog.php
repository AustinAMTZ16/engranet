<?php
	require_once 'backend/config/ConexionBlog.php';
	$getAllBlog = " SELECT * FROM tb_blog ";
    $query_run = mysqli_query($conn, $getAllBlog);
?>
<!-- Main container start -->
<section class="page-section bg-light" id="team">
	<div class="container">
		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="documents-section">
					<!-- Row start -->
					<div class="row no-gutters">
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
							<div class="docs-type-container">
								<div class="mt-5"></div>
								<div class="docTypeContainerScroll">
									<div class="docs-block">
										<h5>Lista de Blog's</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
							<div class="documents-container">
								<div class="documents-header">
									<h3>Este Dia <span class="date" id="todays-date"></span></h3>
								</div>
								<div class="documentsContainerScroll">
									<div class="documents-body">
										<!-- Row start -->
										<div class="row gutters">
											<?php
												if ($query_run) {
													$res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
													
													foreach ($res as $row) {
											?>
											<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
												<div class="doc-block">
													<div class="doc-icon">
														<?php
															echo'<img width="50%" src="data:image/jpeg;base64,' . $row['imagenBlog'] . '" alt="Imagen en base64">';
														?>
													</div>
													<div >
														<h4><?php echo $row['tituloBlog'] ?></h4>
													</div>
													<div >
														<?php echo $row['decripcionBlog'] ?>
													</div>
												</div>
											</div>
											<?php
													}
												} else {
													echo "Error en la consulta: " . mysqli_error($conn);
												}
											?>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- Row end -->
				</div>
			</div>
		</div>
		<!-- Row end -->
	</div>
</section>
<!-- Main container end -->