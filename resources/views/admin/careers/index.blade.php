@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Manage Careers</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Job Postings</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->

        <div class="row row-cols-1 g-4">
            @if(Session::has('success'))
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <span>{{ Session::get('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
            <div class="col">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('careers.create') }}" class="button dark text-white">Add New Job Posting</a>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="4%" class="text-center">No.</th>
                                <th width="35%">Title</th>
                                <th>Date Posted</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($careers as $key => $value)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td class="w-space-normal">{{ $value->title }}</td>
                                    <td>{{ Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</td>
                                    <td class="text-center">{{ $value->status }}</td>
                                    <td>
                                        <div class="dropdown d-flex justify-content-center dropend">
                                            <button class="button sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots text-muted"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="{{ route('careers.edit', $value->slug) }}"><i class="bi bi-pencil"></i> Edit Job Posting</a></li>
                                                <li><a class="dropdown-item delete" href="javascript:void(0);" data-url="{{ route('careers.destroy', encrypt($value->id)) }}" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="delete_form">
                @method('DELETE')
                @csrf

                <div class="modal-body">
                    <p>This will remove this post from your blog. You will no longer be able to view or edit it once deleted.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="button danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).on('click', '.delete', function() {
        let url = $(this).data('url');
        $('#delete_form').attr('action', url);
    });
</script>
@endpush
