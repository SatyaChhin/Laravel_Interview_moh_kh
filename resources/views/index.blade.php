@extends('welcome')
@section('main')
    <div>
        <a href={{ url('/create') }} class="btn btn-primary">Add Information</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ឈ្នោះ</th>
                <th scope="col">អុីមែ</th>
                <th scope="col">លេខទូរសព៏</th>
                <th scope="col">ថ្ងៃខែឆ្នាំកំណើត</th>
                <th scope="col">ខេត្ត</th>
                <th scope="col">ស្រុក</th>
                <th scope="col">ឃុំ</th>
                <th scope="col">ភូមិ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($information as $informations)
                <tr>
                    <th scope="row">{{ $informations->id }}</th>
                    <td>{{ $informations->username }}</td>
                    <td>{{ $informations->gmail }}</td>
                    <td>{{ $informations->phone }}</td>
                    <td>{{ $informations->date }}</td>
                    <td>{{ $informations->province }}</td>
                    <td>{{ $informations->district }}</td>
                    <td>{{ $informations->commune }}</td>
                    <td>{{ $informations->village }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
