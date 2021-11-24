<?php 
include_once '../assets/components/navbar.php';
if(isset($_SESSION['email'])): 
	include('../assets/php/verifica_login.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="mainPerfil">
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
						<?php if($_SESSION['nivel'] == 1 ): ?>		
							<img src="../assets/img/foto_empresa/<?= $_SESSION['imagem_empresa'] ?>" alt="Admin" style="background-color: #066a75;" class="rounded-circle p-1" width="110">
						<?php endif?>	

						<?php if($_SESSION['nivel'] == 2 ): ?>		
							<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" style="background-color: #066a75;" class="rounded-circle p-1" width="110">
						<?php endif?>	
								<div class="mt-3">
									<h4><?= $_SESSION['nome'] ?></h4>
								<?php if($_SESSION['nivel'] == 2 ): ?>	
									<p class="text-secondary mb-1">Desenvolvedor Full-Stack</p>
								<?php endif?>		
									<p class="text-muted font-size-sm"><?= $_SESSION['estado'] ?></p>
								<?php if($_SESSION['nivel'] == 2 ): ?>		
									<a href="../assets/curriculos/<?= $_SESSION['curriculo'] ?>" class="btn btn-secondary" target="_blank">Currículo</a>
								<?php endif?>
								</div>
							
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<a href="../../../../<?= $_SESSION['website'] ?>" id="ft" target="_blank"><img src="../assets/img/icon/share-solid.svg"></a>

								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<a href="../../../../<?= $_SESSION['github'] ?>" id="ft" target="_blank"><img src="../assets/img/icon/share-solid.svg"></a>

								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<a href="../../../../<?= $_SESSION['twitter'] ?>" id="ft"  target="_blank"><img src="../assets/img/icon/share-solid.svg"></a>

								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<a href="../../../../<?= $_SESSION['instagram'] ?>" id="ft" target="_blank"><img src="../assets/img/icon/share-solid.svg"></a>

								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<a href="../../../../<?= $_SESSION['facebook'] ?>" id="ft" target="_blank"><img src="../assets/img/icon/share-solid.svg"></a>

								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8"> 
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nome Completo</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?= $_SESSION['nome'] ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?= $_SESSION['email'] ?>">
								</div>
							</div>
						
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Telefone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?= $_SESSION['telefone'] ?>">
								</div>
							</div>
						
						<?php if($_SESSION['nivel'] == 2 ): ?>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Celular</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?= $_SESSION['celular'] ?>">
								</div>
							</div>
						<?php endif?>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Endereço</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?= $_SESSION['bairro'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<a href="../view/alterar_cadastro.php?ID_usuario=<?= $_SESSION["ID_usuario"] ?>" style="background:#066a75;color:white" class="btn btn px-4">Alterar Dados</a>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
                            <div class="card-body">
								<?php if($_SESSION['nivel'] == 2 ): ?>	
									<h5 class="d-flex align-items-center mb-3"><b>Quem sou eu</b></h5>
									<textarea type="text" style="height:100px" class="form-control" value="<?= $_SESSION['sobre'] ?>"><?= $_SESSION['sobre'] ?></textarea>
								<?php endif?>
								<?php if($_SESSION['nivel'] == 1 ): ?>	
									<h5 class="d-flex align-items-center mb-3"><b>Sobre a empresa</b></h5>
									<textarea type="text" style="height:100px" class="form-control" value="<?= $_SESSION['descricao_empresa'] ?>"><?= $_SESSION['descricao_empresa'] ?></textarea>
								<?php endif?>
								</div>
                                <hr>
							<?php if($_SESSION['nivel'] == 2 ): ?>	
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3"><b>Educação</b></h5>
									<h3 id="cargo">Ciencia da Computação</h3>
									<p id="ano">10/2017 - 11/2029</p>
									<p id="descargo">Unisuam </p>
									<br>
									<h3 id="cargo">Técnico de Programação</h3>
									<p id="ano">10/2013 - 11/2015</p>
									<p id="descargo">Petro</p>
								</div>
                                <hr>
                                <div class="card-body">
									<h5 class="d-flex align-items-center mb-3"><b>Experiência Profissional</b></h5>
									<h3 id="cargo"><b>Web Design</b></h3>
									<p id="ano">10/2018 - 11/2021</p>
									<p id="descargo">Lorem Ipsum is simply dummy text of the printing and </p>
									<br>
									<h3 id="cargo"><b>Web Design</b></h3>
									<p id="ano">10/2018 - 11/2021</p>
									<p id="descargo">Lorem Ipsum is simply dummy text of the printing and </p>
								</div>
							<?php endif?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>    
<?php 
endif;
include_once '../assets/components/footer.php';
?>