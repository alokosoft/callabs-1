<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights
            Reserved.</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
    </div>
</footer>

</div>
</div>




<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="quick-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="input-wrap">
                                <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                <i class="ik ik-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="container">
                    <div class="apps-wrap">
                        <div class="app-item">
                            <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                        </div>
                        <div class="app-item dropdown">
                            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('template/js/jquery-3.3.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('template/plugins/popper.js/dist/umd/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/screenfull/dist/screenfull.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>
 
<script src="<?php echo e(asset('template/plugins/moment/moment.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')); ?>">
</script>
<script src="<?php echo e(asset('template/plugins/d3/dist/d3.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/plugins/c3/c3.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/js/tables.js')); ?>"></script>
<script src="<?php echo e(asset('template/js/widgets.js')); ?>"></script>
<script src="<?php echo e(asset('template/js/charts.js')); ?>"></script>
<script src="<?php echo e(asset('template/dist/js/theme.min.js')); ?>"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#datepicker").datetimepicker({
            format: 'MM-DD-YYYY'
        })
    })
</script>


<script src="<?php echo e(asset('template/dist/js/tinymce.min.js')); ?>" referrerpolicy="origin"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.min.js" integrity="sha512-lxQ4VnKKW7foGFV6L9zlSe+6QppP9B2t+tMMaV4s4iqAv4iHIyXED7O+fke1VeLNaRdoVkVt8Hw/jmZ+XocsXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo e(asset('template/src/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 270,
        width: 995,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
<script>
    $(document).ready(function() {
        $('#btnValue').click(function() {
            $("#divkarea").html("");
            var content = tinymce.get("txtarea").getContent();
            $("#divkarea").html(content);
        });
    });
</script>


<script>
    $(document).ready(function() {
        BindControls();

    });

    function BindControls() {

        var itxtCnt = 0; // COUNTER TO SET ELEMENT IDs.

        // CREATE A DIV DYNAMICALLY TO SERVE A CONTAINER TO THE ELEMENTS.
        var container = $(document.createElement('div')).css({
            width: '100%',
            clear: 'both',
            'margin-top': '10px',
            'margin-bottom': '10px'
        });

        // CREATE THE ELEMENTS.
        $('#btAdd').click(function() {
            itxtCnt = itxtCnt + 1;

            $(container).append('<input type="text"' +
                'placeholder="Enter Test" name="sub_test[]" class="input form-control col-lg-6 mt-2 sub_test_input" id=tb' + itxtCnt + ' value="" />');

            if (itxtCnt == 1) {
                var divSubmit = $(document.createElement('div'));
                // $(divSubmit).append('<input type="button" id="btSubmit" value="Submit" class="bt form-control"' +
                //     'onclick="getTextValue()" />');
            }

            // ADD EVERY ELEMENT TO THE MAIN CONTAINER.
            $('#main').after(container, divSubmit);
        });
    }

    // THE FUNCTION TO EXTRACT VALUES FROM TEXTBOXES AND POST THE VALUES (TO A WEB METHOD) USING AJAX.
    var values = new Array();
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#boot-multiselect-demo').multiselect({
            includeSelectAllOption: true,
            buttonWidth: 250,
            enableFiltering: true
        });


        
    });

</script>

</body>

</html><?php /**PATH C:\xampp\htdocs\callabs\resources\views/admin/layouts/footer.blade.php ENDPATH**/ ?>