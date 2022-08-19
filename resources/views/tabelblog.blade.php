<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    @yield('css')
    <title>Tabel Blog</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-10">
                <div class="card">
                    <div class="card-header" style="background-color: blue; color:white ">Tabel Blog</div>
                    <a href="{{ route('tambahdata') }}" class="btn btn-primary">Tambah Data</a>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>author</th>
                                    <th>title</th>
                                    <th>body</th>
                                    <th>keyword</th>
                                    <th>#</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($b as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->author }}</td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->body }}</td>
                                        <td>{{ $row->keyword }}</td>
                                        <td>
                                            <form action="{{ route('delete', $row->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin?')">
                                                    Delete
                                                </button>
                                                <a href="{{ route('edit', $row->id) }}" class="btn btn-success">
                                                    Edit
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
