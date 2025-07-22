tinymce.init({
    selector: '#tinymce1',
    height: 300,
    menubar: false,
    plugins: 'lists link image table code',
    toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | table | code',
    // content_css: '{{ asset('common') }}/vendor/tinymce/content.css', // opsional, jika ada css khusus
    branding: false,
    images_upload_url: '/images/upload',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/images/upload');

        // Ambil CSRF token dari meta tag
        var csrfToken = document.querySelector('meta[name="csrf-token"]');
        if (csrfToken) {
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken.getAttribute('content'));
        }

        xhr.onload = function() {
            var json;

            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }

            success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    },
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/png,image/jpeg,image/jpg');

        input.onchange = function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
        };

        input.click();
    }
});