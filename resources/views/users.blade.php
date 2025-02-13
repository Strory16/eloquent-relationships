<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://ad.rekrutmen-tni.mil.id/">www.Rekrutmen TNI-AD.com</a></h3>
                <h5 class="text-center" style="margin-bottom: 0;">DAFTARKAN DIRI ANDA SEKARANG JUGA</h5>
                <h5 class="text-center" style="margin-top: 0;">KEMALASAN YANG KAU TANAM, KEGAGALAN YANG KAU TUAI</h5>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->phone }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>