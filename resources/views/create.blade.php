@extends('welcome')
@section('main')
    <form class="row g-3" method="POST" action={{ url('/') }}>
        @csrf
        <label for="">ពត័មានអ្នកជំងឺ</label>
        <hr>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">ឈ្នោះអ្នកជំងឺ</label>
            <input type="text" class="form-control" id="inputEmail4" name="username">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">អុីមែ</label>
            <input type="email" class="form-control" id="inputPassword4" name="gmail">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">លេខទូរសព៍</label>
            <input type="number" class="form-control" id="inputEmail4" name="phone">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">ថ្ងៃខែឆ្នាំកំណើត</label>
            <input type="date" class="form-control" id="inputPassword4" name="date">
        </div>
        <label for="">អាសដ្ថាន</label>
        <hr>
        <div class="col-md-6">
            <label for="inputState" class="form-label">ខេត្ត</label>
            <select id="pv" class="form-select" name="pv">
                <option selected>....</option>
                <option>បន្ទាយមានជ័យ</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">ស្រុក</label>
            <select id="dt" class="form-select" name="dt" disabled="disabled">
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">ឃុំ</label>
            <select id="cu" class="form-select" name="cu" disabled="disabled">
                <option selected>Choose...</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">ភូមិ</label>
            <select id="vl" class="form-select" name="vl" disabled="disabled">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(function() {
            $('body').on('change', function(event) {
                let pv = $('select[name=pv]').val()
                let dt = $('select[name=dt]').val()
                let cu = $('select[name=cu]').val()
                let vl = $('select[name=vl]').val()
                if (pv == "បន្ទាយមានជ័យ") {
                    $("#dt").prop("disabled", false);
                    let resp = [{
                            "id": "ស្រុកភ្នំស្រុក",
                            "name": "ស្រុកភ្នំស្រុក"
                        },
                        {
                            "id": "ស្រុកមង្គលបូរី",
                            "name": "ស្រុកមង្គលបូរី"
                        },
                    ]
                    var option = "";
                    for (i = 0; i < resp.length; i++) {
                        option += "<option value='" + resp[i].id + "'>" + resp[i].name + "</option>";
                    }
                    $('#dt').html(option)

                    if (dt == "ស្រុកមង្គលបូរី") {
                        $("#cu").prop("disabled", false);
                        let resp = [{
                                "id": "ឃុំបន្ទាយនាង",
                                "name": "ឃុំបន្ទាយនាង"
                            },
                            {
                                "id": "ឃុំបត់ត្រង់",
                                "name": "ឃុំបត់ត្រង់"
                            },
                        ]
                        var option = "";
                        for (i = 0; i < resp.length; i++) {
                            option += "<option value='" + resp[i].id + "'>" + resp[i].name + "</option>";
                        }
                        $('#cu').html(option)
                    }
                    if (cu == "ឃុំបត់ត្រង់") {
                        $("#vl").prop("disabled", false);
                        let resp = [{
                                "id": "ភូមិខ្ទុម្ពរាយលិច ",
                                "name": "ភូមិខ្ទុម្ពរាយលិច "
                            },
                            {
                                "id": "ភូមិអន្លង់ថ្ងាន់កើត",
                                "name": "ភូមិអន្លង់ថ្ងាន់កើត"
                            },
                        ]
                        var option = "";
                        for (i = 0; i < resp.length; i++) {
                            option += "<option value='" + resp[i].id + "'>" + resp[i].name + "</option>";
                        }
                        $('#vl').html(option)
                    }
                }else{

                }
            });
        });
    </script>
@endsection
