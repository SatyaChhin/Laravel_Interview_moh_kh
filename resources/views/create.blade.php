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
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('#pv').change(function() {
            if ($('select[name=pv]').val() == "បន្ទាយមានជ័យ") {
                $("#dt").prop("disabled", false);
                let data = ["ស្រុកមង្គលបូរី", "ស្រុកភ្នំស្រុក"]
                let option = ""
                $("#dt").find('option').remove()
                for (let i = 0; i < data.length; i++) {
                    option += "<option>" + data[i] + "</option>"
                }
                $("#dt").append(option)
            }
        });
        $('#dt').change(function() {
            if ($('select[name=dt]').val() == "ស្រុកភ្នំស្រុក") {
                $("#cu").prop("disabled", false);
                let data = ["ឃុំណាំតៅ", "ឃុំប៉ោយចារ"]
                let option = ""
                $("#cu").find('option').remove()
                for (let i = 0; i < data.length; i++) {
                    option += "<option>" + data[i] + "</option>"
                }
                $("#cu").append(option)
            }
        })
        $('#cu').change(function() {
            if ($('select[name=cu]').val() == "ឃុំប៉ោយចារ") {
                $("#vl").prop("disabled", false);
                let data = ["ប៉ោយស្នួល", "ប៉ោយចារ"]
                let option = ""
                $("#vl").find('option').remove()
                for (let i = 0; i < data.length; i++) {
                    option += "<option>" + data[i] + "</option>"
                }
                $("#vl").append(option)
            }
        })
    </script>
@endsection
