@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel-body">
            <form class="form-horizontal" style="border:solid 1px gray">
                <div class="form-group">
                    <label for="marathon-name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-6">
                        <label for="marathon-name" class="col-sm-3 control-label">{{$marathon->name}}</label>
                    </div>
                </div>

                <!-- Marathon Location -->
                <div class="form-group">
                    <label for="marathon-location" class="col-sm-3 control-label">Location</label>

                    <div class="col-sm-6">
                        <label for="marathon-name" class="col-sm-3 control-label">{{$marathon->location}}</label>
                    </div>
                </div>

                <!-- Marathon Finish Time -->
                <div class="form-group">
                    <label for="marathon-finish-time" class="col-sm-3 control-label">Finish Time</label>

                    <div class="col-sm-6">
                        <label for="marathon-name" class="col-sm-3 control-label">{{$marathon->finish_time}}</label>
                    </div>
                </div>

                <!-- Marathon Date -->
                <div class="form-group">
                    <label for="marathon-date" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-6">
                        <label for="marathon-name" class="col-sm-3 control-label">{{$marathon->date}}</label>
                    </div>
                </div>

                <!-- Marathon Distance -->
                <div class="form-group">
                    <label for="marathon-distance" class="col-sm-3 control-label">Distance</label>

                    <div class="col-sm-6">
                        <label for="marathon-name" class="col-sm-3 control-label">{{$marathon->distance}}</label>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection