@extends('layouts.admin')
@section('title')
    | Pullers
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Pullers</h2>
    @include('admin.zipper.pullers.create')
    <div class="lg:flex intro-y">
        <div class="relative">
            <input id="search" type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10"
                   placeholder="Search item...">
            <i data-lucide="search"
               class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500"></i>
        </div>
        <select id="sort" class="pr-16 form-select box w-full lg:w-auto mt-3 lg:mt-0 ml-auto" control-id="ControlID-4">
            <option>title</option>
            <option>buy</option>
            <option selected>sell</option>
        </select>
    </div>
    <div id="Content" class="grid grid-cols-12 gap-6 mt-5">
        @foreach($pullers as $key => $puller)
            <div
                class="intro-y col-span-12  md:col-span-6lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                 src="{{asset('storage/'.$puller->image)}}">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href=""
                                   class="block font-medium text-base">{{ $puller->title ?? '' }}</a>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center">
                                Colors: {{ $puller->color ?? '' }}
                            </div>
                            <div class="flex items-center">
                                Size: {{ $puller->size ?? '' }}
                            </div>
                            <div class="flex items-center mt-2">
                                Category: {{$puller->category_id ?? ''}}
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center text-primary mr-auto" {{--href="{{ route('adminadmin.zipper.pullers.show', $puller->id) }}"--}}>
                            <i data-lucide="eye" class="mr-1"></i>
                            Preview
                        </a>
                        @include('admin.zipper.pullers.edit')


                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#delete-modal-preview-{{$puller->id}}"
                           class="flex items-center mr-auto text-danger">
                            <i data-lucide="trash-2" class="px-1 text-danger"></i>
                            Delete</a>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="delete-modal-preview-{{$puller->id}}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle"
                                               class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">Do you really want to delete these
                                                records? <br>This process cannot be undone.
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <form action="{{ route('admin.zipper.pullers.delete', $puller->id) }}"
                                                  method="post">
                                                <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel
                                                </button>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger w-24">Yes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-10 col-span-12">
            {{$pullers->withQueryString()->links()}}
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript">

        function update() {
            let value = {
                'search': $('#search').val(),
                'sort': $('#sort').val()
            }
            $.ajax({
                type: 'get',
                url: '{{URL::to('/admin/pullers/search')}}',
                data: value,
                success: function (data) {
                    console.log(data);
                    $('#Content').html(data);
                },
            });
        }

        $('#search').on('keyup', update);
        $('#sort').on('change', update);
    </script>
@endsection

