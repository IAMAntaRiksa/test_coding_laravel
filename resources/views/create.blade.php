<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create New Post - Tutorial CRUD Laravel 8 @ qadrlabs.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{'/create'}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_rs">Nama Rs</label>
                                <input type="text" name="nama_rs" placeholder="Nama Rs" required>
                            </div>

                            <div class="form-group">
                               <label for="title">Nama Rs</label>
                                <input type="text" name="alamat_rs" placeholder="Alamat Rs" required>
                            </div>

                            <div class="form-group">
                               <label for="title">Deskripsi Rs</label>
                                <input type="text" name="deskripsi_rs" placeholder="Deskripsi Rs" required>
                            </div>

                            <div class="form-group">
                               <label for="title">No Tlpn Rs</label>
                                <input type="text" name="no_tlpn_rs" placeholder="No tlpn Rs" required>
                            </div>

                            {{-- <button type="submit" class="btn btn-md btn-primary">Save</button>
                            <a href="{{ route('post.index') }}" class="btn btn-md btn-secondary">back</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>

</html>