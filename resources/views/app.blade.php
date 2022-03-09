<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.5/fc-4.0.2/fh-3.2.2/r-2.2.9/datatables.min.css"/>

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/logoak-min.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        Alumni MA Al-Khairiyah
    </a>
</nav>
<div class="container mt-3 mb-3">
    <table class="table table-bordered" id="alumni">
        <thead>
        <tr>
            <td>NISN</td>
            <td>Nama</td>
            <td>Tgl Lahir</td>
            <td>Tahun Ajaran</td>
        </tr>
        </thead>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/fc-4.0.2/fh-3.2.2/r-2.2.9/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
    $.fn.DataTable.ext.pager.numbers_length = 4;
    $(()=>{
        $("#alumni").DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{{url('alumni')}}',
            columns: [
                {
                    data: 'nisn',
                    name: 'nisn'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'tgl_lahir',
                    name: 'tgl_lahir'
                },
                {
                    data: 'ajaran',
                    name: 'ajaran'
                }
            ]
        })
    })
</script>
</body>
</html>
