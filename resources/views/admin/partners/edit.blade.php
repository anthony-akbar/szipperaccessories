<!-- BEGIN: Modal Toggle -->
<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview-{{ $partner->id }}"
   class="flex items-center text-primary mr-auto">
    <i data-lucide="edit" class="mr-1"></i>
    Edit</a>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview-{{ $partner->id }}" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <form action="{{route('admin.partners.edit',$partner->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col w-full h-56 border-4 border-dashed dropzone"
                               style="cursor: pointer">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <img src="{{asset('storage/'.$partner->image)}}" alt="" id="preview"
                                     class="w-60 h-40 text-gray-400 group-hover:text-gray-600">
                            </div>
                            <input type="file" class="opacity-0 fallback"
                                   name="image" accept="image/*" id="image"/>
                        </label>
                    </div>

                    <div class="mt-3">
                        <label for="title_en" class="form-label">Title (English)</label>
                        <input id="title_en" type="text" name="title_en" class="form-control"
                               placeholder="Title"
                               value="{{ old('title_en', $partner->title_en) }}" required>
                    </div>
                    <div class="mt-3">
                        <label for="title_ru" class="form-label">Title (Russian)</label>
                        <input id="title_ru" type="text" name="title_ru" class="form-control"
                               placeholder="Title"
                               value="{{ old('title_ru', $partner->title_ru) }}" required>
                    </div>
                    <div class="mt-3">
                        <label for="title_uz" class="form-label">Title (Uzbek)</label>
                        <input id="title_uz" type="text" name="title_uz" class="form-control"
                               placeholder="Title"
                               value="{{ old('title_uz', $partner->title_uz) }}" required>
                    </div>
                    <div class="mt-3">
                        <div>
                            <label for="subtitle_en" class="form-label">Subtitle (English)</label>
                            <input name="subtitle_en" id="subtitle_en" type="text" value="{{ old('subtitle_uz', $partner->subtitle_uz) }}" class="form-control" placeholder="Subtitle">
                        </div>
                        <div>
                            <label for="subtitle_ru" class="form-label">Subtitle (Russian)</label>
                            <input name="subtitle_ru" id="subtitle_ru" type="text" value="{{ old('subtitle_uz', $partner->subtitle_uz) }}" class="form-control" placeholder="Subtitle">
                        </div>
                        <div>
                            <label for="subtitle_uz" class="form-label">Subtitle (Uzbek)</label>
                            <input name="subtitle_uz" id="subtitle_uz" type="text" value="{{ old('subtitle_uz', $partner->subtitle_uz) }}" class="form-control" placeholder="Subtitle">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="description_en" class="form-label">Description (English)</label>
                        <textarea name="description_en" id="description_en" class="form-control" rows="3">{{ old('description_uz', $partner->description_uz) }}</textarea>
                    </div>
                    <div class="mt-3">
                        <label for="description_ru" class="form-label">Description (Russian)</label>
                        <textarea name="description_ru" id="description_ru" class="form-control" rows="3">{{ old('description_uz', $partner->description_uz) }}</textarea>
                    </div>
                    <div class="mt-3">
                        <label for="description_uz" class="form-label">Description (Uzbek)</label>
                        <textarea name="description_uz" id="description_uz" class="form-control" rows="3">{{ old('description_uz', $partner->description_uz) }}</textarea>
                    </div>
                    <a type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1 mt-4">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

