@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Start: Breadcrumb -->
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <h4 class="breadcrumb-heading">Manage Files</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a nhref="{{ route('settings') }}">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Files</li>
            </ol>
        </nav>
        <!-- End: Breadcrumb -->

        <div class="row row-cols-1 g-3">
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
                                <th width="6%" class="text-center">No.</th>
                                <th width="5%" class="text-center">Image</th>
                                <th width="40%">File Name</th>
                                <th width="7%" class="text-center">Size</th>
                                <th width="7%" class="text-center">Type</th>
                                <th width="8%" class="text-center">Dimension</th>
                                <th class="text-center">Date Modified</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration + $files->firstItem() - 1 }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/files/'. $value->file_name) }}" class="thumbnail-sm" alt="{{ $value->original_file_name }}">
                                    </td>
                                    <td>{{ Str::limit($value->original_file_name, 60) }}</td>
                                    <td class="text-center">{{ $value->size }}</td>
                                    <td class="text-center">{{ $value->type }}</td>
                                    <td class="text-center">{{ $value->dimension }}</td>
                                    <td class="text-center">{{ $value->updated_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="dropdown d-flex justify-content-center dropend">
                                            <button class="button secondary sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots text-muted"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item rename" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}" data-original_file_name="{{ $value->original_file_name }}"><ion-icon name="pencil"></ion-icon> Rename</a></li>
                                                <li><a class="dropdown-item" href="{{ asset('storage/files/'. $value->file_name) }}" download><ion-icon name="download"></ion-icon> Download</a></li>
                                                <li><a class="dropdown-item delete" href="javascript:void(0);" data-id="{{ encrypt($value->id) }}" data-file_name="{{ $value->file_name }}"><ion-icon name="trash"></ion-icon>Delete</a></li>
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
                    <span>Showing {{ $files->firstItem() }} to {{ $files->lastItem() }} of total {{$files->total() }} entries</span>
                    {{ $files->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="renameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rename</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('file_rename') }}">
                @method('PUT')
                @csrf
                <input type="hidden" class="form-control" name="id" id="file_ren_id">
                <div class="modal-body">
                    <div class="row row-cols-1">
                        <div class="col">
                            <div class="form-group">
                                <label for="file-name" class="form-label">File Name</label>
                                <input type="text" name="original_file_name" id="file_ren_name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="button primary">Rename</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('file_delete') }}">
                @method('DELETE')
                @csrf
                <input type="hidden" class="form-control" name="id" id="file_id">
                <input type="hidden" class="form-control" name="file_name" id="file_name">
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
        $(document).on('click', '.rename', function() {
            $('#file_ren_id').val($(this).data('id'));
            $('#file_ren_name').val($(this).data('original_file_name'));
            $('#renameModal').modal('show');
		});

        $(document).on('click', '.delete', function() {
            $('#file_id').val($(this).data('id'));
            $('#file_name').val($(this).data('file_name'));
            $('#deleteModal').modal('show');
		});
    </script>
@endpush