<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center p-5 mx-auto mw-100">
				<h5>Selamat datang, {{ Auth::user()->name }}</h5>
				<h5>Silahkan berbelanja!</h5>
				<div class="login newsletter">
					<p class="text-center">
						<a id="modal-btn-ok" class="btn btn-primary submit mb-2" href="#" data-dismiss="modal">Ok</a>
					</p>
				</div>
			</div>

		</div>
	</div>
</div>
<script>
$(document).ready(function () {
	$("#myModal").modal();
});
</script>