@extends('template')

@section('body')
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    @include('sweet::alert')
    <script type="text/javascript">
        function confirmDelete(id) {
            swal({
                title: "Are you sure?",
                text: "Do you really want to delete the selected post?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function (isConfirm) {
                if (!isConfirm) return;
                $.ajax({
                    url: "/admin/posts/destroy/" + id,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        if (response.success === true) {
                            swal({
                                title: "Done!",
                                text: "Post succesfuly deleted.",
                                type: "success",
                                showConfirmButton: false
                              });
                        } else {
                            swal({
                                title: "Fail!",
                                text: "The post could not be deleted.",
                                type: "error",
                                showConfirmButton: false
                          });
                        }
                        setTimeout(function() {
                            location.reload();
                        }, 3000);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal("Error deleting!", "Please try again", "error");
                    }
                });
            });
        }
    </script>
    @include('sweet::alert')
    <h1 align="center">Posts Management</h1>
    <br/>
    <br/>
    {!! link_to_route ('admin.posts.create', 'Create New Post', null, ['class' => 'btn btn-success']) !!}
    <br/>
    <br/>
    <table class="table">
        <tr>
            <th style="font-weight: bold">ID</th>
            <th style="font-weight: bold">Title</th>
            <th style="font-weight: bold">Action</th>
        </tr>
        
        @foreach ($posts as $post)
            <tr>
                <td align="center">{{ $post->id }}</td>
                <td align="center">{{ $post->title }}</td>
                <td>
                    {!! link_to_route('admin.posts.edit', 'Edit', ['id' => $post->id], ['class' => 'btn btn-primary']) !!}
                    <a href="#" class="btn btn-danger" onclick="return confirmDelete({{ $post->id }})">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@endsection