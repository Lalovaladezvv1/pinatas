<div class="container-fluid fluid">
	<form name="addForm" action="www.google.com" method="post" class="form-register">
		<div class="container">
			<center><h5 class="tituloContactanos animated bounce">¡CONTACTANOS!</h5>
			<div id="alerta"></div>
			<div class="row" style="margin: 20px">
			<div class="col-lg-12 Inputs ">
			<center> <label for="txt_nombre">Nombre</label>
				<input type="text" id="txt_nombre"/></center>
			</div>
			</div>
			<div class="row Inputs" style="margin: 20px">
			<div class="col-lg-12">
				<label for="txt_email">Email</label>
				<input type="text" id="txt_email" />
			</div>
			</div>
			<div class="row Inputs " style="margin: 20px">
			<div class="col-lg-12">
				<label for="txt_comentario">Comentario</label>
				<textarea style="color: #7971ea;"  rows="5" id="txt_comentario"></textarea>
			</div>
			</div>
			<div class="row Inputs" style="margin: 20px">
				<div class="col-12">
					<center><button type="button" onclick="validarForm();" style="margin:20px" class="btn btn-info btn-round">Enviar</button></center>
				</div>
			</div>
		</div>
  </form>
</div>