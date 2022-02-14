@extends('layouts.master')
@section('content')
<div class="container">
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="bootstrap-modal">
                    <div class="modal fade" id="addMaintitle">
                        <div class="modal-dialog" role="document">
                            <form id="add_main_title" name="add_main_title">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Project title</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" class="form-control input-default" name="title" id="" placeholder="Add Project Title">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">Close</button>
                                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('fornt-script')
<script>

    $(document).on('click', '.btn-cancel', function() {
        $('#add_main_title').trigger('reset');
    })  
    $('#submit').click(function(e) { 
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: 'post',
            url: '{{ route("addmaintitle") }}',
            // contentType: false,
            // processData: false,
            data: $('#add_main_title').serialize(),
            success: function(res) {
                if (res == 1) {
                    $( "#quixnav" ).load(window.location.href + " #quixnav" );
                    $('#addMaintitle').modal('hide');
                    $('#add_main_title').trigger('reset');
                }
            }
        })
    });
</script>
@endpush