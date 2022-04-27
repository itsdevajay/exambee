@extends('pyquestions.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Questions</div>
                    <div class="card-body">
                        <a href="{{ url('/pyquiz/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>OptionA</th>
                                    <th>OptionB</th>
                                    <th>OptionC</th>
                                    <th>OptionD</th>
                                    <th>Answer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->question }}</td>
                                        <td>{{ $item->optiona }}</td>
                                        <td>{{ $item->optionb }}</td>
                                        <td>{{ $item->optionc }}</td>
                                        <td>{{ $item->optiond }}</td>
                                        <td>{{ $item->answer }}</td>

                                        <td>
                                            <a href="{{ url('/pyquiz/' . $item->id) }}" title="View question"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/pyquiz/' . $item->id . '/edit') }}" title="Edit question"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/pyquiz' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete question" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
