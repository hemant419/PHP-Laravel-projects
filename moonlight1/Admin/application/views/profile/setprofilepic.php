<head>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
<!-- Stylesheets-->
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/cropper/cropper.min.css">
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
<!--/ stylesheets -->
<!-- CONTENT  -->
</head>
<form action="" method="post" enctype="multipart/form-data">
<section id="content" >
<div class="page full-pagewidth-layout">
  <!-- bradcome -->
  <div class="b-b mb-10">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <h1 class="h3 m-0">Set Profile</h1>
        <small class="text-muted">Welcome to Falcon application</small> 
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
			 <img src="<?php echo base_url() ?>assets/images/generic.jpg" class="img-responsive" alt="Picture">
			 	</div>
         	 </div>
          	<div class="col-md-5">
            <!-- <h3 class="page-header">Preview:</h3> -->
            <div class="docs-preview clearfix">
              <div class="img-preview preview-lg"></div>
              <div class="img-preview preview-md"></div>
              <div class="img-preview preview-sm"></div>
              <div class="img-preview preview-xs"></div>
            </div>
            <!-- <h3 class="page-header">Data:</h3> -->
          	</div>
        </div>
        <div class="row">
          	<div class="col-md-7 docs-buttons">
            <!-- <h3 class="page-header">Toolbar:</h3> -->
           		 <div class="btn-group mb-10">
     <label class="btn btn-warning btn-upload btn-sm btn-raised mr-5" for="inputImage" title="Upload image file">
     <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
     <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs"> 
	 <span class="fa fa-upload"></span> </span> </label>
     	      	 </div>
				<div class="btn-group mb-10">
					  <button class="btn btn-primary btn-sm btn-raised mr-5" data-method="zoom" data-option="0.1" type="button" title="Zoom In"> 
					  <span class="docs-tooltip" data-toggle="tooltip"> <span class="fa fa-search-plus"></span> 
					  </span> 
					  </button>
					 <button class="btn btn-primary btn-sm btn-raised mr-5" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out"> 
					 <span class="docs-tooltip" data-toggle="tooltip"> 
					 <span class="fa fa-search-minus"></span> </span> 
					 </button>
					 <button class="btn btn-primary btn-sm btn-raised mr-5" data-method="rotate" data-option="-45" type="button" title="Rotate Left"> 
					 <span class="docs-tooltip" data-toggle="tooltip"> 
					 <span class="fa fa-rotate-left"></span> </span> 
					 </button>
				</div>
	          </div>
          <!-- /.docs-buttons -->
       </div>
	    </section>
      </div>
	</div> 
  </section>
</form>  
  <!--/ CONTENT -->

<!--/ Application Content -->
<!-- Vendor JavaScripts -->
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/cropper/cropper.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts -->
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>
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
                            // data: {
                            //   x: 420,
                            //   y: 60,
                            //   width: 640,
                            //   height: 360
                            // },
                            // strict: false,
                            // responsive: false,
                            // checkImageOrigin: false
                            // modal: false,
                            // guides: false,
                            // highlight: false,
                            // background: false,
                            // autoCrop: false,
                            // autoCropArea: 0.5,
                            // dragCrop: false,
                            // movable: false,
                            // resizable: false,
                            // rotatable: false,
                            // zoomable: false,
                            // touchDragZoom: false,
                            // mouseWheelZoom: false,
                            // minCanvasWidth: 320,
                            // minCanvasHeight: 180,
                            // minCropBoxWidth: 160,
                            // minCropBoxHeight: 90,
                            // minContainerWidth: 320,
                            // minContainerHeight: 180,
                            // build: null,
                            // built: null,
                            // dragstart: null,
                            // dragmove: null,
                            // dragend: null,
                            // zoomin: null,
                            // zoomout: null,
                            aspectRatio: 16 / 9,
                            preview: '.img-preview',
                            crop: function (data) {
                                $dataX.val(Math.round(data.x));
                                $dataY.val(Math.round(data.y));
                                $dataHeight.val(Math.round(data.height));
                                $dataWidth.val(Math.round(data.width));
                                $dataRotate.val(Math.round(data.rotate));
                            }
                        };
                    $image.on({
                        'build.cropper': function (e) {
                            console.log(e.type);
                        },
                        'built.cropper': function (e) {
                            console.log(e.type);
                        },
                        'dragstart.cropper': function (e) {
                            console.log(e.type, e.dragType);
                        },
                        'dragmove.cropper': function (e) {
                            console.log(e.type, e.dragType);
                        },
                        'dragend.cropper': function (e) {
                            console.log(e.type, e.dragType);
                        },
                        'zoomin.cropper': function (e) {
                            console.log(e.type);
                        },
                        'zoomout.cropper': function (e) {
                            console.log(e.type);
                        }
                    }).cropper(options);
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
                    }).on('keydown', function (e) {
                        switch (e.which) {
                            case 37:
                                e.preventDefault();
                                $image.cropper('move', -1, 0);
                                break;
                            case 38:
                                e.preventDefault();
                                $image.cropper('move', 0, -1);
                                break;
                            case 39:
                                e.preventDefault();
                                $image.cropper('move', 1, 0);
                                break;
                            case 40:
                                e.preventDefault();
                                $image.cropper('move', 0, 1);
                                break;
                        }
                    });
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
</body>
</html>