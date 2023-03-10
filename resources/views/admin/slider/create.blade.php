
<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-modal-preview" class="btn btn-primary">Add Slider</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10">
                <h2 class="intro-y text-lg font-medium mt-5">Slider Add</h2>
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="upload__box">
                        <div class="upload__btn-box">
                            <label class="btn btn-primary">
                                <p>Upload images</p>
                                <input name="image" type="file" data-max_length="1" class="upload__inputfile">
                            </label>
                        </div>
                        <div class="upload__img-wrap"></div>
                    </div>
                    <div class="mt-3">
                        <div>
                            <label for="title_en" class="form-label">Title (English)</label>
                            <input name="title_en" id="title_en" type="text" class="form-control" placeholder="Title">
                        </div>
                        <div>
                            <label for="title_ru" class="form-label">Title (Russian)</label>
                            <input name="title_ru" id="title_ru" type="text" class="form-control" placeholder="Title">
                        </div>
                        <div>
                            <label for="title_uz" class="form-label">Title (Uzbek)</label>
                            <input name="title_uz" id="title_uz" type="text" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="description_en" class="form-label">Description (English)</label>
                        <textarea name="description_en" id="description_en" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="description_ru" class="form-label">Description (Russian)</label>
                        <textarea name="description_ru" id="description_ru" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="description_uz" class="form-label">Description (Uzbek)</label>
                        <textarea name="description_uz" id="description_uz" class="form-control" rows="3"></textarea>
                    </div>
                    <a type="button" data-tw-dismiss="modal"
                       class="btn btn-outline-secondary w-24 mr-1">Cancel
                    </a>
                    <button class="btn btn-primary mt-5" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->





