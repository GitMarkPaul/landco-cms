@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Manage Blogs Archives</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pub_index') }}">Blog Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Archives</li>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Name</th>
                                <th class="text-center">Date Deleted</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pub_archives as $key => $value)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ Str::limit($value->title, 50) }}</td>
                                    <td class="text-center">{{ $value->deleted_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="dropdown d-flex justify-content-center">
                                            <button class="tf-btn tf-btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Settings
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item restore" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}"><ion-icon name="reload"></ion-icon> Restore</a></li>
                                                <li><a class="dropdown-item destroy" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}" data-file_name="{{ $value->file->file_name }}"><ion-icon name="trash"></ion-icon>Delete Permanently</a></li>
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
<div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('pub_restore') }}">
                @csrf
                <input type="hidden" class="form-control" name="id" id="pub_restore_id">
                <div class="modal-body">
                    <p>Are you sure your going to restore this blog?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Restore</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="destroyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('pub_destroy') }}">
                @method('DELETE')
                @csrf
                <input type="hidden" class="form-control" name="id" id="pub_destroy_id">
                <input type="hidden" class="form-control" name="file_name" id="pub_destroy_file">
                <div class="modal-body">
                    <p>Are you sure your going to delete this blog permanently?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Permanently</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).on('click', '.restore', function() {
            $('#pub_restore_id').val($(this).data('id'));
            $('#restoreModal').modal('show');
		});

        $(document).on('click', '.destroy', function() {
            $('#pub_destroy_id').val($(this).data('id'));
            $('#pub_destroy_file').val($(this).data('file_name'));
            $('#destroyModal').modal('show');
		});
    </script>
@endsection
