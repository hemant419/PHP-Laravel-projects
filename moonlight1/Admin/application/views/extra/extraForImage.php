<!-- CONTENT  -->

<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/cropper/cropper.min.css">
<section id="content" >
  <div class="page full-pagewidth-layout">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Edit Slider</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <section class="boxs boxs-simple">
          <div class="boxs-body">
            <div class="row">
              <div class="col-md-7">
                <div class="img-container mb-10"> 
				<img src="<?php echo base_url() ?>assets/images/slider/<?php echo $slider->slider_img ?>" class="img-responsive" alt="Picture"> </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-7 docs-buttons">
                <!-- <h3 class="page-header">Toolbar:</h3> -->
                
                <div class="btn-group mb-10">
    <label class="btn btn-warning btn-upload btn-sm btn-raised mr-5" for="inputImage" title="Upload image file">
                  <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
                  <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs"> 
				  <span class="fa fa-upload"></span> 
				  </span> 
	</label>
                  
                </div>
             </div>
              <!-- /.docs-buttons -->
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section >
<!--/ CONTENT -->
<!-- Show the cropped image in modal -->

<!-- /.modal -->
<!--/ Application Content -->
<!-- Vendor JavaScripts -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/cropper/cropper.min.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<!--  Page Specific Scripts  -->
<script>
        $(window).load(function () {
            $(function () {
                'use strict';
                var console = window.console || {
                    log: function () { }
                },
                    $alert = $('.docs-alert'),
                    $message = $alert.find('.message'),
                    showMessage = function (message, type) {
                        $message.text(message);
                        if (type) {
                            $message.addClass(type);
                        }
                        $alert.fadeIn();
                        setTimeout(function () {
                            $alert.fadeOut();
                        }, 3000);
                    };
                // Demo
                // -------------------------------------------------------------------------
                (function () {
                    var $image = $('.img-container > img'),
                        $dataX = $('#dataX'),
                        $dataY = $('#dataY'),
                        $dataHeight = $('#dataHeight'),
                        $dataWidth = $('#dataWidth'),
                        $dataRotate = $('#dataRotate'),
                        options = {
                            //aspectRatio: 1000 /1000,
                            preview: '.img-preview',
                            crop: function (data) {
                                
                                $dataHeight.val(Math.round(data.height));
                                $dataWidth.val(Math.round(data.width));
                                $dataRotate.val(Math.round(data.rotate));
                            }
                        };
                    // Methods
                    $(document.body).on('click', '[data-method]', function () {
                        var data = $(this).data(),
                            $target,
                            result;
                        if (data.method) {
                            data = $.extend({}, data); // Clone a new one
                            if (typeof data.target !== 'undefined') {
                                $target = $(data.target);
                                if (typeof data.option === 'undefined') {
                                    try {
                                        data.option = JSON.parse($target.val());
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }
                            }
                            result = $image.cropper(data.method, data.option);
                            if (data.method === 'getCroppedCanvas') {
                                $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);
                            }
                            if ($.isPlainObject(result) && $target) {
                                try {
                                    $target.val(JSON.stringify(result));
                                } catch (e) {
                                    console.log(e.message);
                                }
                            }
                        }
                    })
                    // Import image
                    var $inputImage = $('#inputImage'),
                        URL = window.URL || window.webkitURL,
                        blobURL;
                    if (URL) {
                        $inputImage.change(function () {
                            var files = this.files,
                                file;
                            if (files && files.length) {
                                file = files[0];
                                if (/^image\/\w+$/.test(file.type)) {
                                    blobURL = URL.createObjectURL(file);
                                    $image.one('built.cropper', function () {
                                        URL.revokeObjectURL(blobURL); // Revoke when load complete
                                    }).cropper('reset').cropper('replace', blobURL);
                                    $inputImage.val('');
                                } else {
                                    showMessage('Please choose an image file.');
                                }
                            }
                        });
                    } else {
                        $inputImage.parent().remove();
                    }
                    // Options
                    $('.docs-options :checkbox').on('change', function () {
                        var $this = $(this);
                        options[$this.val()] = $this.prop('checked');
                        $image.cropper('destroy').cropper(options);
                    });
                    // Tooltips
                    $('[data-toggle="tooltip"]').tooltip();
                }());
            });
        });
    </script>
<!--/ Page Specific Scripts -->
</body></html>