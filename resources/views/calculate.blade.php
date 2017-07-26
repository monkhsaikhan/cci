@extends('layouts.front')

@section('content')

    <div id="topDiv" style="height: 100px"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Зээлийн тооцоолол</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <table class="table">
                            <tr>
                                <td style="width: 100px">Үндсэн зээл</td>
                                <td>{{ $sum_loan }}</td>
                            </tr>
                            <tr>
                                <td>Хугацаа</td>
                                <td>{{ $month }} сар</td>
                            </tr>
                            <tr>
                                <td>Хүү</td>
                                <td>{{ $rate }}</td>
                            </tr>
                        </table>

                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Зээлийн үлдэгдэл</th>
                                <th>Үндсэн төлбөр</th>
                                <th>Хүү</th>
                                <th>Эргэн төлөгдөх дүн</th>
                            </tr>
                            @foreach($results as $key => $result)
                                <tr>
                                    <td>{{ $key + 1}}</td>
                                    <td>{{ number_format($result['loan_with_rate'], 2) }}</td>
                                    <td>{{ number_format($result['loan'], 2) }}</td>
                                    <td>{{ number_format($result['interest_rate'], 2) }}</td>
                                    <td>{{ number_format($result['deducted'], 2) }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ number_format($sum_loan, 2) }}</td>
                                <td>{{ number_format($sum_rate, 2) }}</td>
                                <td>{{ number_format($sum, 2) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <style>

        #header {
            background: #606060 !important;
        }

    </style>
@endsection