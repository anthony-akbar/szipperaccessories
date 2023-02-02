<style>

    .center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-input2 img {
        width: 10rem;
        display: none;
        align-items: center;
        justify-content: center;
    }

    .form-input2 input {
        display: none;
    }

</style>

<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
       class="btn btn-primary">Add Partner</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <div class="text-left">
                    <form class="mt-3" action="{{route('admin.partners.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col w-full h-32 border-4 border-dashed dropzone"
                                   style="cursor: pointer">
                                <div class="flex flex-col items-center justify-center pt-7 center">
                                    <div class="form-input2">
                                            <img class="w-100 h-32" id="file-ip-1-preview">
                                        <input type="file" style="cursor: pointer" class="opacity-0 fallback"
                                               name="image"
                                               id="file-ip-1"
                                               accept="image/*" onchange="showPreview(event);" required/>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="mt-3">
                            <label for="title" class="form-label">Title</label>
                            <input id="title" type="text" name="title" class="form-control"
                                   placeholder="Partner Title" required>
                        </div>
                        <div class="mt-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input id="subtitle" type="text" name="subtitle" class="form-control"
                                   placeholder="Subtitle">
                        </div>
                        <div class="mt-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" type="number" name="description" class="form-control" placeholder="Description"
                                      required></textarea>
                        </div>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
<script type="text/javascript">
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
