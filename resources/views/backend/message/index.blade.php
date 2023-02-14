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
                    <h5 class="card-title">All Message List</h5>
                    <table class="mb-0 table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Phone</th>
                                <th>Message</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($messages as $message)
                            {{-- dd($loop); --}}
                                <tr>
                                    <th scope="row">{{ $loop->iteration	}}</th>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->phone }}</td>
                                    <td>{{ $message->message }}</td>


                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
@endsection

