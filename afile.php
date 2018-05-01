            $('tbody tr td .del').click(function () {
                var id = $(this).attr('rel');
                $.ajax({
                    type: 'post',
                    data: {'id': id},
                    url: "{{ route('redpacket/delete') }}",
                    success: function (rsp) {
                        if (rsp.code == 1000200) {
                            popup(3, 2, rsp.msg, 500, true);
                        } else {
                            popup(3, 6, rsp.msg, 1000);
                        }
                    }
                });
            });
