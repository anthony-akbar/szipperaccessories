<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
       class="btn btn-primary">Edit</a>
</div>
<!-- END: Modal Toggle -->
<!-- BEGIN: Modal Content -->
<div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">Add Abouts</h2>
            </div>
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <form class="mt-3" action="{{route('admin.about.edit', $about->id)}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-6">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="title_en" class="form-label">Title EN</label>
                            <input id="title_en" type="text" name="title_en" class="form-control"
                                   value="{{ old('title_en', $about->title_en) }}" placeholder="About Title" required>
                        </div>
                        <div class="col-span-12 sm:col-span-6 mt-2">
                            <label for="title_ru" class="form-label">Title RU</label>
                            <input id="title_ru" type="text" name="title_ru" class="form-control"
                                   value="{{ old('title_ru', $about->title_ru) }}" placeholder="About Title" required>
                        </div>
                        <div class="col-span-12 sm:col-span-6 mt-2">
                            <label for="title_uz" class="form-label">Title UZ</label>
                            <input id="title_uz" type="text" name="title_uz" class="form-control"
                                   value="{{ old('title_uz', $about->title_uz) }}" placeholder="About Title" required>
                        </div>
                    </div>

                    <div class="col-span-6">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="address_en" class="form-label">Address EN</label>
                            <input id="address_en" type="text" name="address_en" class="form-control"
                                   value="{{ old('address_en', $about->address_en) }}" placeholder="About address" required>
                        </div>
                        <div class="col-span-12 sm:col-span-6 mt-2">
                            <label for="address_ru" class="form-label">Address RU</label>
                            <input id="address_ru" type="text" name="address_ru" class="form-control"
                                   value="{{ old('address_ru', $about->address_ru) }}" placeholder="About address" required>
                        </div>
                        <div class="col-span-12 sm:col-span-6 mt-2">
                            <label for="address_uz" class="form-label">Address UZ</label>
                            <input id="address_uz" type="text" name="address_uz" class="form-control"
                                   value="{{ old('address_uz', $about->address_uz) }}" placeholder="About address" required>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="text" name="phone" class="form-control"
                               value="{{ old('phone', $about->phone) }}" placeholder="Phone Number">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="schedule" class="form-label">Schedule</label>
                        <input id="schedule" type="text" name="schedule" class="form-control"
                               value="{{ old('schedule', $about->schedule) }}" placeholder="Schedule" required>
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input id="facebook" type="text" name="facebook" class="form-control"
                               value="{{ old('facebook', $about->facebook) }}" placeholder="Facebook URL">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input id="instagram" type="text" name="instagram" class="form-control"
                               value="{{ old('instagram', $about->instagram) }}" placeholder="Instagram">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="telegram" class="form-label">Telegram</label>
                        <input id="telegram" type="text" name="telegram" class="form-control"
                               value="{{ old('telegram', $about->telegram) }}" placeholder="Telegram">
                    </div>
                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel
                    </button>
                    <button type="submit" class="btn btn-primary w-20">Send</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
