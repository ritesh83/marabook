@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Marathon
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Marathon Form -->
                    <form action="/marathon" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Marathon Name -->
                        <div class="form-group">
                            <label for="marathon-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="marathon-name" class="form-control" value="{{ old('name') }}">
                            </div>
                        </div>

                        <!-- Marathon Location -->
                        <div class="form-group">
                            <label for="marathon-location" class="col-sm-3 control-label">Location</label>

                            <div class="col-sm-6">
                                <input type="text" name="location" id="marathon-location" class="form-control" value="{{ old('location') }}">
                            </div>
                        </div>

                        <!-- Marathon Finish Time -->
                        <div class="form-group">
                            <label for="marathon-finish-time" class="col-sm-3 control-label">Finish Time</label>

                            <div class="col-sm-6">
                                <input type="text" name="finish_time" id="marathon-finish-time" class="form-control" value="{{ old('finish_time') }}">
                            </div>
                        </div>

                        <!-- Marathon Date -->
                        <div class="form-group">
                            <label for="marathon-date" class="col-sm-3 control-label">Date</label>

                            <div class="col-sm-6">
                                <input type="text" name="date" id="marathon-date" class="form-control" value="{{ old('date') }}">
                            </div>
                        </div>

                        <!-- Marathon Distance -->
                        <div class="form-group">
                            <label for="marathon-distance" class="col-sm-3 control-label">Distance</label>

                            <div class="col-sm-6">
                                <input type="text" name="distance" id="marathon-distance" class="form-control" value="{{ old('distance') }}">
                            </div>
                        </div>

                        <!-- Add Marathon Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Marathon
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Marathons -->
            @if (count($marathons) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Marathons
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped marathon-table">
                            <thead>
                                <th>Marathon</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($marathons as $marathon)
                                    <tr>
                                        <td class="table-text">
                                            <a href="/marathons/{{$marathon->id}}">
                                                <div>{{ $marathon->name }}</div>
                                            </a>
                                        </td>

                                        <!-- Marathon Delete Button -->
                                        <td>
                                            <form action="/marathon/{{ $marathon->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection