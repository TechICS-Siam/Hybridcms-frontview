<script src="<?= base_url() ?>assets/backend/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/feather-icons/feather.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/dashforge.js"></script>
<script src="<?= base_url() ?>assets/backend/js/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/parsley.min.js"></script>

<script src="<?= base_url() ?>assets/backend/js/datatable/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/datatable/dataTables.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/datatable/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/datatable/responsive.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/select2.min.js"></script>

<script  type="text/javascript" src="https://www.techics.com/assets/front/js/sweet-alart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js" integrity="sha512-kZv5Zq4Cj/9aTpjyYFrt7CmyTUlvBday8NGjD9MxJyOY/f2UfRYluKsFzek26XWQaiAp7SZ0ekE7ooL9IYMM2A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
<?php if (function_exists('pageRequiredScript')) : pageRequiredScript(); endif; ?>

<script>
    setTimeout(function(){
        $(".set-alert").fadeOut(400);
    }, 5000)
</script>
