@extends('layouts.admin')
@section('content')

    <h2 class="intro-y text-lg font-medium my-10">Contact Us Requests</h2>

    <table class="table table-report -mt-2">
        <thead>
        <tr>
            <th class="text-center whitespace-nowrap">№</th>
            <th class="whitespace-nowrap text-center">Name</th>
            <th class="text-center whitespace-nowrap">Email</th>
            <th class="text-center whitespace-nowrap">Phone Number</th>
            <th class="text-center whitespace-nowrap">Company Name</th>
            <th class="text-center whitespace-nowrap">Message</th>
            <th class="text-center whitespace-nowrap">Status</th>
            <th class="text-center whitespace-nowrap">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($contacts as $key => $contact)
            <tr class="intro-x">
                <td class="w-10">{{ $key + 1 }}</td>
                <td class="!py-3.5">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <a class="font-medium whitespace-nowrap">{{ $contact->name }}</a>
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <a class="flex items-center justify-center underline decoration-dotted"
                       href="javascript:;">{{ $contact->email }}</a>
                </td>
                <td class="text-center">
                    <a class="flex items-center justify-center underline decoration-dotted"
                       href="javascript:;">{{ $contact->phone_number }}</a>
                </td>
                <td class="text-center capitalize">{{ $contact->company_name }}</td>
                <td class="text-center">{{ $contact->message }}</td>
                <td class="w-40">
                    <div class="flex items-center justify-center text-{{ $contact->status ? 'success' : 'danger' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="check-square" data-lucide="check-square"
                             class="lucide lucide-check-square w-4 h-4 mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                        </svg>
                        {{ $contact->status ? 'Answered' : 'Unanswered' }}
                    </div>
                </td>
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center text-{{ !$contact->status ? 'success' : 'danger' }}">
                        <a class="flex items-center mr-3" href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 icon-name="check-square" data-lucide="check-square"
                                 class="lucide lucide-check-square w-4 h-4 mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                            </svg>
                            {{ !$contact->status ? 'Answer' : 'Unanswered' }}
                        </a>
                        <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#delete-confirmation-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                 class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            Delete
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
