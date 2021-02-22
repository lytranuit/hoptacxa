<?= $this->extend('backend/layouts/main') ?>


<?= $this->section('content') ?>
<div class="row clearfix">
    <div class="col-12">
        <form method="POST" action="" id="form-dang-tin">
            <?= csrf_field() ?>

            <input type="hidden" name="parent_id" value="0" />
            <section class="card card-fluid">
                <h5 class="card-header">
                    <div class="d-inline-block w-100">
                        <button type="submit" name="dangtin" class="btn btn-sm btn-primary float-right">Save</button>
                    </div>
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <b class="col-12 col-lg-2 col-form-label">Hiện lên trang chủ:</b>
                                <div class="col-12 col-lg-4 pt-1">
                                    <div class="switch-button switch-button-xs switch-button-success">
                                        <input type="hidden" class="input-tmp" checked="" name="is_home" value="0">
                                        <input type="checkbox" checked="" id="switch2" name="is_home" value="1">
                                        <span>
                                            <label for="switch2"></label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="menu0" class="tab-pane active">
                                <div class="form-group row">
                                    <b class="col-12 col-lg-2 col-form-label">Tiêu đề:<i class="text-danger">*</i></b>
                                    <div class="col-12 col-lg-4 pt-1">
                                        <input class="form-control form-control-sm" type='text' name="title_vi" required="" placeholder="Tiêu đề" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <b class="col-12 col-lg-2 col-form-label">Mô tả:<i class="text-danger">*</i></b>
                                    <div class="col-12">
                                        <textarea class="form-control" name="description_vi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b class="col-12 col-lg-2 col-form-label">Nội dung:<i class="text-danger">*</i></b>
                                    <div class="col-12">
                                        <textarea class="edit" name="content_vi" id="introduction">Thêm nội dung ở đây</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-12 pt-1">
                                    <div class="card">
                                        <div class="card-header">
                                            Ảnh đại diện
                                        </div>
                                        <div class="card-body">
                                            <div class="image_ft text-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>

<?= $this->endSection() ?>


<!-- Script --->
<?= $this->section('script') ?>

<script src="<?= base_url("assets/lib/mustache/mustache.min.js") ?>"></script>
<script src="<?= base_url("assets/lib/image_feature/jquery.image.js") ?>"></script>

<!--<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>-->
<script src="<?= base_url("assets/lib/ckeditor/ckeditor.js") ?>"></script>
<!--<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/inline/ckeditor.js"></script>-->

<!--<script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>-->
<script type='text/javascript'>
    var allEditors = document.querySelectorAll('.edit');
    for (var i = 0; i < allEditors.length; ++i) {
        CKEDITOR.inline(allEditors[i]);
        //ClassicEditor.create(allEditors[i]);
        //InlineEditor
        //    .create(allEditors[i])
        //    .catch(error => {
        //        console.error(error);
        //    });
    }


    //CKEDITOR.disableAutoInline = true;
    //CKEDITOR.inline( '.edit' );
    $(document).ready(function() {
        $(".image_ft").imageFeature();
        //$('.edit').froalaEditor({
        //    heightMin: 200,
        //    heightMax: 500, // Set the image upload URL.
        //    imageUploadURL: '<?= base_url() ?>admin/uploadimage',
        //    // Set request type.
        //    imageUploadMethod: 'POST',
        //    // Set max image size to 5MB.
        //    imageMaxSize: 5 * 1024 * 1024,
        //    // Allow to upload PNG and JPG.
        //    imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],
        //    htmlRemoveTags: [],
        //});
        $.validator.setDefaults({
            debug: true,
            success: "valid"
        });
        $("#form-dang-tin").validate({
            highlight: function(input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function(input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function(error, element) {
                $(element).parents('.form-group').append(error);
            },
            submitHandler: function(form) {
                form.submit();
                return false;
            }
        });
    });
</script>

<?= $this->endSection() ?>