    </div>
    </div>
    <?php include('modal-cms.php') ?>

    <script src="Views/assets/js/jquery.min.js"></script>
    <script src="Views/assets/js/jquery.js"></script>
    <script src="Views/assets/js/popper.min.js"></script>
    <script src="Views/assets/js/bootstrap.min.js"></script>
    <script src="Views/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Time zone -->
    <script src="Views/assets/js/jquery.timepicker.min.js"></script>
    <!-- Datepicker -->
    <script src="Views/assets/js/moment.min.js"></script>
    <script src="Views/assets/js/datetimepicker.js"></script>
    <!-- Datepicker END -->
    <script src="Views/assets/fileuploader/jquery.fileuploader.min.js" type="text/javascript"></script>
    <script src="Views/assets/fileuploader/custom.js" type="text/javascript"></script>
    <!-- Loader MAP -->
    <script src="Views/assets/js/loader.js"></script>
    <!-- Loader MAP END -->
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script src="Views/assets/js/jquery.dataTables.min.js"></script>
    <script src="Views/assets/js/editor.js"></script>
    <script src="Views/assets/js/main.js"></script>
    <script>

        var dataSet = [
            ["Odyssey odys", "Ody ssey Host", "2011/04/25", "2011/04/25", "45%", ".$buttons.'"],
            
        ];

        $(document).ready(function () {
            $('#offers-table').DataTable({
                data: dataSet,
                columns: [{
                        title: "Bussines"
                    },
                    {
                        title: "Name Offers"
                    },
                    {
                        title: "Start Date"
                    },
                    {
                        title: "End Date"
                    },
                    {
                        title: "Percent"
                    },
                    {
                        title: "Option"
                    }
                ]
            });
        });
    </script>
    </body>

    </html>