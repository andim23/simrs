			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
	function tambahRuangan() {
		var a = $('<div/>')
			.addClass('form-row mb-3')
			.append($('<div/>').addClass('col-6')
				.append($('<input/>').attr({
					type: 'text',
					class: 'form-control',
					placeholder: 'Nama Ruangan',
					name: 'nama_ruangan[]'
				})))
			.append($('<div/>').addClass('col-4 custom-file')
				.append($('<input/>').attr({
					type: 'file',
					class: 'custom-file-input',
					name: 'nama_file[]'
				}))
				.append($('<label/>').addClass('custom-file-label').text('Choose file...')))
			.append($('<div/>').addClass('col-2')
				.append($('#tambahRuanganBtn')));
		a.insertAfter($('.form-row').last());
	}

	function tambahKamar() {
		var a = $('<div/>')
			.addClass('form-row mb-3')
			.append($('<div/>').addClass('col-6')
				.append($('<input/>').attr({
					type: 'text',
					class: 'form-control',
					placeholder: 'Nama Kamar',
					name: 'nm_kat_kamar[]'
				})))
			.append($('<div/>').addClass('col-2')
				.append($('#tambahKamarBtn')));
		a.insertAfter($('.form-row').last());
	}
</script>
</body>
</html>