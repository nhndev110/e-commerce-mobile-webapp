<div class="modal-container">
	<div class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<header class="modal-header">
					<h3 class="modal-title">FORM UPDATE</h3>
					<button class="btn-close">
						<ion-icon name="close-outline"></ion-icon>
					</button>
				</header>
				<main class="modal-body">
					<div class="modal-content-body">
						<form id="form-update">
							<input type="hidden" name="id" value="<?= $result['id'] ?>">
							<div class="">
								<label class="">Tên</label>
								<div class="">
									<input class="" type="text" name="name" value="<?= $result['name'] ?>">
								</div>
							</div>
							<div class="">
								<label class="">Địa chỉ</label>
								<div class="">
									<textarea class="" name="address" rows="6"><?= $result['address'] ?></textarea>
								</div>
							</div>
							<div class="">
								<label class="">Số điện thoại</label>
								<div class="">
									<input class="" type="tel" name="phone" value="<?= $result['phone'] ?>">
								</div>
							</div>
							<div class="">
								<label class="">Ảnh</label>
								<div class="">
									<input class="" type="text" name="image" value="<?= $result['image'] ?>">
								</div>
							</div>
							<div class="">
								<button type="button" class="" data-style="update">
									<ion-icon name="checkmark-done-outline"></ion-icon>
									Lưu
								</button>
								<button type="button" class="" data-style="delete-form" data-id="<?= $result['id'] ?>">
									<ion-icon name="trash-outline"></ion-icon>
									Xóa
								</button>
							</div>
						</form>
					</div>
				</main>
				<footer class="modal-footer"></footer>
			</div>
		</div>
	</div>
</div>