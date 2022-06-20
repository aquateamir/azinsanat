@extends('admin.layouts.app')
@section("script")

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("editor.css")}}">
    <link rel="stylesheet" href="{{asset("link.css")}}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>

    <script src="{{asset('tinymce.min.js')}}"></script>

    <!-- Select2 -->
@stop
@section('route')
    ویرایش بلاگ
@stop
@section('container')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif @if(session()->has('err'))
        <div class="alert alert-danger">
            {{session()->get('err')}}
        </div>
    @endif
    <!-- general form elements -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">ویرایش بلاگ</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="post" action="{{route('panel.update_blog', $blog->id)}}" role="form">
            @csrf
            @method('PATCH')

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">عکس</label>
                    <img src="{{asset($blog->image)}}" alt="" class="w-25">
                    <div class="input-group">
                        <label class="form__container" id="upload-container">عکس را بکشید یا رها کنید
                            <input name="image" class="form__file" id="upload-files" type="file" accept="image/*"
                            />
                        </label>
                        <div class="form__files-container" id="files-list-container"></div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">(سئو عکس)</label>
                    <input name="image_alt" type="text" class="form-control" id="exampleInputEmail1"
                           placeholder="مثال :  شینیون در بیونا" value="{{$blog->image_alt}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">(کلمات کلیدی)</label>
                    <input name="keywords" type="text" class="form-control" id="exampleInputEmail1"
                           placeholder="مثال : بیونا ,  شینیون در بیونا" value="{{$blog->keywords}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                           placeholder="6 کلمه" value="{{$blog->title}}">
                </div>




                <div class="form-group">
                    <label for="exampleInputEmail1">توضیحات</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"
                              placeholder="توضیح مختصر...(حداکثر  3.5سطر)">{{$blog->description}}</textarea>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="form-group">
                <label for="">متن قبل گالری</label>
                <div class="card-body">
                    <div class="mb-3">
                        <textarea id="open-source-plugins" name="fulltext" placeholder="متن قبل گالری">{{$blog->fulltext}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group d-none">
                <label for="">  </label>
                <div class="card-body">
                    <div class="mb-3">
                        <textarea id="open-source-plugins2" name="" style="width: 100%; font-family: sans-serif !important"
                                  placeholder="متن بعد گالری"></textarea>
                    </div>
                </div>
            </div>
            <script>

            </script>


            <div class="card-footer d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary py-3 w-75">ارسال</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    <script>
        const INPUT_FILE = document.querySelector('#upload-files');
        const INPUT_CONTAINER = document.querySelector('#upload-container');
        const FILES_LIST_CONTAINER = document.querySelector('#files-list-container');
        const FILE_LIST = [];
        let UPLOADED_FILES = [];

        const multipleEvents = (element, eventNames, listener) => {
            const events = eventNames.split(' ');

            events.forEach(event => {
                element.addEventListener(event, listener, false);
            });
        };

        const previewImages = () => {
            FILES_LIST_CONTAINER.innerHTML = '';
            if (FILE_LIST.length > 0) {
                FILE_LIST.forEach((addedFile, index) => {
                    const content = `
            <div class="form__image-container js-remove-image" data-index="${index}">
              <img class="form__image" src="${addedFile.url}" alt="${addedFile.name}">
            </div>
          `;

                    FILES_LIST_CONTAINER.insertAdjacentHTML('beforeEnd', content);
                });
            } else {

                INPUT_FILE.value = "";
            }
        }

        const fileUpload = () => {
            if (FILES_LIST_CONTAINER) {
                multipleEvents(INPUT_FILE, 'click dragstart dragover', () => {
                    INPUT_CONTAINER.classList.add('active');
                });

                multipleEvents(INPUT_FILE, 'dragleave dragend drop change blur', () => {
                    INPUT_CONTAINER.classList.remove('active');
                });

                INPUT_FILE.addEventListener('change', () => {
                    const files = [...INPUT_FILE.files];
                    console.log("changed")
                    files.forEach(file => {
                        const fileURL = URL.createObjectURL(file);
                        const fileName = file.name;
                        if (!file.type.match("image/")) {
                            alert(file.name + "فایل وارد شده عکس نیست!");
                            console.log(file.type)
                        } else {
                            const uploadedFiles = {
                                name: fileName,
                                url: fileURL,
                            };

                            FILE_LIST.push(uploadedFiles);
                        }
                    });

                    previewImages();
                    UPLOADED_FILES = document.querySelectorAll(".js-remove-image");
                    removeFile();
                });
            }
        };

        const removeFile = () => {
            UPLOADED_FILES = document.querySelectorAll(".js-remove-image");

            if (UPLOADED_FILES) {
                UPLOADED_FILES.forEach(image => {
                    image.addEventListener('click', function () {
                        const fileIndex = this.getAttribute('data-index');

                        FILE_LIST.splice(fileIndex, 1);
                        previewImages();
                        removeFile();
                    });
                });
            } else {
                [...INPUT_FILE.files] = [];
            }
        };

        fileUpload();
        removeFile();
    </script>
    <script>

        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

        tinymce.init({
            selector: 'textarea#open-source-plugins',
            plugins: 'powerpaste print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,

            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,

            link_list: [
                {title: 'My page 1', value: 'https://www.tiny.cloud'},
                {title: 'My page 2', value: 'http://www.moxiecode.com'}
            ],
            image_list: [
                {title: 'My page 1', value: 'https://www.tiny.cloud'},
                {title: 'My page 2', value: 'http://www.moxiecode.com'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Some class', value: 'class-name'}
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            templates: [
                {
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxid    e',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });


        //------------------------------------------------------------------------------------------------------------
        tinymce.init({
            selector: 'textarea#open-source-plugins2',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                {title: 'My page 1', value: 'https://www.tiny.cloud'},
                {title: 'My page 2', value: 'http://www.moxiecode.com'}
            ],
            image_list: [
                {title: 'My page 1', value: 'https://www.tiny.cloud'},
                {title: 'My page 2', value: 'http://www.moxiecode.com'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Some class', value: 'class-name'}
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            templates: [
                {
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });


    </script>
@stop




