<script>
    $(function () {
        const url = "{{ route('api.chart') }}";
        const printButton = document.getElementById('print-window');

        function initChart(data) {
            const options = {
                plotOptions: {
                    bar: {
                        horizontal: false,
                        dataLabels: {
                            position: 'bottom'
                        }
                    }
                },
                chart: {
                    type: "area",
                    height: 300
                },
                series: [
                    {
                        name: "Pengunjung",
                        data: [
                            data.data.jan,
                            data.data.feb,
                            data.data.mar,
                            data.data.apr,
                            data.data.mei,
                            data.data.jun,
                            data.data.jul,
                            data.data.agu,
                            data.data.sep,
                            data.data.okt,
                            data.data.nov,
                            data.data.des,
                        ],
                    },
                ],
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "Mei",
                        "Jun",
                        "Jul",
                        "Agu",
                        "Sep",
                        "Okt",
                        "Nov",
                        "Des",
                    ],
                },
                yaxis: {
                    forceNiceScale: true
                }
            };

            return new ApexCharts(document.querySelector("#applicant-chart-dashboard"), options);
        }

        $.ajax({
            url: url,
            success: function (response) {
                initChart(response).render();
            }
        });

        printButton.addEventListener('click', function (e) {
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('application.print', 'id') }}";
            url = url.replace('id', id);

            Swal.fire({
                title: "Cetak pengajuan!",
                text: "Anda yakin ingin mencetak pengajuan SKBS?.",
                icon: "warning",
                showCancelButton: true,
                cancelButtonColor: "#d33",
                cancelButtonText: "Jangan dulu",
                confirmButtonText: "Cetak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                    window.open(url, '_blank');
                }
            });
        });
    });



</script>
