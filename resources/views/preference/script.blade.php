<script>
    $(function() {
        $('.applicant-daily-limit').click(function() {
            let id = $(this).data('id');
			let url = "{{ route('api.preference.edit', ':id') }}";
			url = url.replace(':id', id);
            
            let formActionURL = "{{ route('preference.editDailyLimit', 'id') }}"
			formActionURL = formActionURL.replace('id', id);

            $.ajax({
                url: url,
                success: function (res) {
                    $('#editDailyLimitModal #edit-applicant-daily-limit').attr('action', formActionURL)

                    $('#editDailyLimitModal #inputan').val(res.data.input);
                }
            });
        });
    });
</script>
