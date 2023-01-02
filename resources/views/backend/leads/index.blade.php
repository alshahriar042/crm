@extends('backend.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                    </i>
                </div>
                <div>Lead List

                </div>
            </div>

        </div>
    </div>
    <div class="row">

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Table bordered</h5>
                    <table class="mb-0 table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($leads as $lead)
                            dd($loop);
                                <tr>
                                    <th scope="row">{{ $loop->iteration	}}</th>
                                    <td>{{ $lead->fname }}</td>
                                    <td>{{ $lead->lname }}</td>
                                    <td>{{ $lead->phone }}</td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>






    </div>
@endsection
