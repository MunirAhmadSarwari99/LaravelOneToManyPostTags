<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="container">
    <div class="row">
        <form class="mt-4" method="POST" action="{{route('store')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="postName" name="postName" placeholder="Post Title">
                            <label for="postName">Post Title</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="postBody" name="postBody" placeholder="Post Detail"></textarea>
                            <label for="postBody">Post Detail</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tagName" name="tagName[]" placeholder="Post Tag">
                            <label for="tagName">Post Tag</label>
                        </div>
                    </div>
                </div>
                <div id="body" class="col-md-12"></div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <button id="MoreTag" type="button" class="btn btn-dark float-start">Add More Tag</button>
                            <button type="submit" class="btn btn-success float-end">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
