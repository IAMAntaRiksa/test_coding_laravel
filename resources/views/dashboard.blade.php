<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="">
    <title>Rumah Sakit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>  
    <div class="container mt-5">
        <div class="Column">
            <div class="col-md-12">
                <div class="card border-1 shadow rounded">
                    <div class="card-body">
                         @if (session('success'))
                            <div class="alert alert-success">
                                 {{ session('success') }}
                            </div>
                         @endif   
                        <form action="{{isset($getPerID) ? url('/update', $getPerID->id) :url('/create')}}" method="POST"> 
                            @csrf
                            {{isset($getPerID) ? method_field('PUT') : ''}}
                            <div class="form-group">                   
                                <input type="text" value="{{isset($getPerID) ? $getPerID->nama_rs : ''}}" name="nama_rs" placeholder="Nama Rs" required>
                            </div>
                            <div class="form-group">                           
                                <input type="text" value="{{isset($getPerID) ? $getPerID->alamat_rs : ''}}" name="alamat_rs" placeholder="Alamat Rs" required>
                            </div>
                            <div class="form-group">                     
                                <input type="text" value="{{isset($getPerID) ? $getPerID->deskripsi_rs : ''}}" name="deskripsi_rs" placeholder="Deskripsi Rs" required>
                            </div>

                            <div class="form-group">
                                <input type="text" value="{{isset($getPerID) ? $getPerID->no_tlpn_rs : ''}}" name="no_tlpn_rs" placeholder="No tlpn Rs" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-md btn-primary" >{{isset($getPerID) ? 'Edit Data' : 'Inser Data'}}</button>
                            </div>  
                        </form>
                    </div>
                </div>

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Rumah Sakit</th>
                                    <th scope="col">Alamat Rumah Sakit</th>
                                    <th scope="col">Deskripsi Rumah Sakit</th>
                                    <th scope="col">No tlp Rumah Sakit</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->nama_rs }}</td>
                                        <td>{{ $item->alamat_rs }}</td>
                                        <td>{{ $item->deskripsi_rs }}</td>
                                        <td>{{ $item->no_tlpn_rs }}</td>
                                        <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{url('/delete', $item->id)}}" method="#">
                                            <a href="{{url('/edit', $item->id)}}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                           
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td> 
                                </tr>
                                @endforeach()
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>