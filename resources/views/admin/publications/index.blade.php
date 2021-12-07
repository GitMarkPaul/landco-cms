@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Manage Blogs</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posts</li>
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
                    <a href="{{ route('pub_create') }}" class="button dark text-white">Add New Article</a>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th width="5%" class="text-center">Image</th>
                                <th width="35%">Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Date Published</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($publications as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration + $publications->firstItem() - 1 }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/files/'. $value->file->file_name) }}" class="thumbnail-sm" alt="{{ $value->file->original_file_name }}">
                                    </td>
                                    <td class="w-space-normal">{{ $value->title }}</td>
                                    <td>{{ $value->category->category_name }}</td>
                                    <td>{{ $value->author }}</td>
                                    <td>{{ $value->created_at->format('M d, Y') }}</td>
                                    <td class="text-center">
                                        {{ $value->status }}
                                    </td>
                                    <td>
                                        <div class="dropdown d-flex justify-content-center dropend">
                                            <button class="button secondary sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots text-muted"></i>
                                            </button>
                                            @php
                                                if (!is_null($value->meta_link)) {
                                                    $link = $value->meta_link;
                                                } else {
                                                    $link = route('details', $value->permalink);
                                                }
                                            @endphp
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="bi bi-eye"></i> View Article</a></li>
                                                <li><a class="dropdown-item" href="{{ route('pub_edit', $value->permalink) }}"><i class="bi bi-pencil"></i> Edit Blog</a></li>
                                                <li><a class="dropdown-item delete" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}"><i class="bi bi-trash"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-between">
                    <span>Showing {{ $publications->firstItem() }} to {{ $publications->lastItem() }} of total {{$publications->total() }} entries</span>
                    {{ $publications->links() }}
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
            <form method="POST" action="{{ route('pub_delete') }}">
                @method('DELETE')
                @csrf
                <input type="hidden" class="form-control" name="id" id="pub_id">
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
        $('#pub_id').val($(this).data('id'));
        $('#deleteModal').modal('show');
    });
</script>
@endpush