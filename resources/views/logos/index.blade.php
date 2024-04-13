<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logos</title>
</head>
<body>
<div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <header class="bg-primary py-4 text-center">
                    <h1 class="text-white mb-0">Logos</h1>
                </header>
            </div>
        </div>


        <div class="row">
            <div class="col">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th style="width:20%;">Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($logos as $logo)
                            <tr>
                                <td>{{ $logo->id }}</td>
                                <td>
                                    <img src="{{ $logo->logo_url }}" alt="" class="img-fluid w-100">
                                </td>
                                <td>Actions</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">There are no logos yet.</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>