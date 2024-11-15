<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <nav style="background: blue">
                Invoice Details page
            </nav>
            <br>
            <div class="row g-3">
                <div class="col-auto">
                  <label class="col-form-label">Product Name</label>
                </div>
                <div class="col-auto">
                  <input type="text" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-auto">
                  <label class="col-form-label">Unit Num</label>
                </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        
                      </select>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-auto">
                  <label class="col-form-label">price</label>
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-auto">
                  <label class="col-form-label">quantity</label>
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control">
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-auto">
                  <label class="col-form-label">Expiry Date</label>
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control">
                </div>
            </div>
        </center>
    </body>
</html>
